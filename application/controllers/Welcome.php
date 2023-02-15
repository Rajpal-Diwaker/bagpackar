<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
require APPPATH . 'helpers/Common1.php';
class Welcome extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('Welcomemodel');		
    $this->load->library('session');
  }
//===========defautl constructor===========// 
  public function index(){ 
    $this->set_country_session(); 
    $this->checkBlock();
    if(isset($_GET['code']) && !empty($_GET['code'])){
      $server_name=$_SERVER['SERVER_NAME'];
      $share_code=$this->input->get('code');
      $this->session->set_userdata('share_domain',$server_name);
      $this->session->set_userdata('share_code',$share_code); 
      redirect(base_url());
    }
    $this->load->view('web/header');
    $this->load->view('web/home');
    $this->load->view('web/footer');
  }
//================home page data=====================//

  function callA(){
    $data=[];
    $Guest_country=$this->session->userdata('guest_country'); 
    $Guest_city=$this->session->userdata('guest_city');
    $PopularResult=[];
    $html="";
    $city=$this->input->post('city');
    if(isset($Guest_city) && !empty($Guest_city) && isset($Guest_country) && !empty($Guest_country)){
      $BackgroundImages=$this->Welcomemodel->background_images($Guest_country,$Guest_city);
      $PopularResult=$this->Welcomemodel->popular_result($Guest_country);
    }else if(isset($city) && !empty($city)){
      $this->session->set_userdata('guest_city',$city);
      $BackgroundImages=$this->Welcomemodel->background_images($Guest_country,$city);
      $PopularResult=$this->Welcomemodel->popular_result($Guest_country);
    }else{
      $BackgroundImages=$this->Welcomemodel->background_images1($Guest_country); 
      $PopularResult=$this->Welcomemodel->popular_result1($Guest_country);
    }
    if(empty($BackgroundImages['discover_image']) || empty($BackgroundImages['stay_home_image']) || empty($BackgroundImages['top_rated_image']) ){
      $BackgroundImages=$this->Welcomemodel->background_images1($Guest_country); 

    }
    $html.='<div id="destination_slider" class="owl-carousel owl-theme">';
    foreach ($PopularResult as $key => $value) {
      $html.='<div class="item"><div class="destination_wrapper"><div class="destination_img"><a href="#" value="'.$value['city'].'" class="pop_image"><img src="'.$value['image'].'" alt=""></a></div>'.$value['city'].'</div></div>';
    }
    $html.='</div>';
    $data['background_images']=$BackgroundImages;
    $data['result']=$html;
    echo json_encode($data);die;
  } 

//================call B==========================//

  function callB(){
    $data=[];  
    $Guest_country=$this->session->userdata('guest_country'); 
    $Guest_city=$this->session->userdata('guest_city');
    $sessionData=$this->session->userdata('webuser_bgpkr');
    $user_id=(isset($sessionData['user_id']))?$sessionData['user_id']:'0';
    $StayResult=[];
    $html1="";
    $All_view="";
    $city=$this->input->post('city');
    if(isset($Guest_city) && !empty($Guest_city) && isset($Guest_country) && !empty($Guest_country)){
      $StayResult=$this->Welcomemodel->stay_home_result($Guest_country,$Guest_city,$user_id);
    }else if(isset($city) && !empty($city)){
      $this->session->set_userdata('guest_city',$city);
      $StayResult=$this->Welcomemodel->stay_home_result($Guest_country,$city,$user_id);
    }else{
      $StayResult=$this->Welcomemodel->stay_home_result1($user_id,$Guest_country);
    }
    if(isset($StayResult['result']) && !empty($StayResult['result'])){
      $html1.='<div class="owl-carousel owl-theme place_mainslider">';
      foreach ($StayResult['result'] as $key => $value){  
        $previousimage=[];
        if(!empty($value['bedimage'])){
          array_push($previousimage,$value['bedimage']);
        }
        if(!empty($value['bathimage'])){
          array_push($previousimage,$value['bathimage']);
        }
        if(!empty($value['kitimage'])){
          array_push($previousimage,$value['kitimage']);
        }
        if(!empty($value['otherimage'])){
          array_push($previousimage,$value['otherimage']);
        }
        $String = [];
        $show_string="";
        if($value['total_guest']>1){
          $String[]=$value['total_guest'].' Guests'; 
        }
        else if($value['total_guest']==1){
          $String[]=$value['total_guest'].' Adult'; 
        }else{
          $String[]=''; 
        }
        if($value['total_bedrooms']>1){
          $String[]=$value['total_bedrooms'].' Bedrooms'; 
        }
        else if($value['total_bedrooms']==1){
          $String[]=$value['total_bedrooms'].' Bedroom'; 
        }else{
          $String[]=""; 
        }
        if(!empty($value['kitimage'])){
          $String[]='Kitchen'; 
        }else{
          $String[]=""; 
        }
        if($value['total_bathrooms']>1){
          $String[]=$value['total_bathrooms'].' Bathrooms'; 
        }
        else if($value['total_bathrooms']==1){
          $String[]=$value['total_bathrooms'].' Bathroom'; 
        }else{
          $String[]=""; 
        }
        $show_string = implode(', ', array_filter($String)); 

        $pricetext="";  
        if($value['currency']=="Rupees"){
          $pricetext='fa fa-rupee';
        }else{
          $pricetext='fa fa-usd';
        }

        $price="";
        $price = number_format($value['base_price'], 2, '.', ',');
        $price = preg_replace('/\.00/', '', $price);
        $html1.='<div class="item"><div class="place_contentwrapper"><div class="place_img"> <div class="place_innerslider"><div class="carousel slide bootstrapcarousel" data-interval="false"><ol class="carousel-indicators">';
        for ($i=0; $i <count($previousimage) ; $i++) { 
          $html1.='<li data-slide-to="'.$i.'"></li>';
        }
        $html1.='</ol><div class="carousel-inner">';
        for ($j=0; $j <count($previousimage) ; $j++) { 
          if($j==0){
            $html1.='<div class="item active place_innersliderimg newlink"  value="'.$value['host_id'].'"><img src="'.$previousimage[$j].'" alt=""></div>';
          }else{
            $html1.='<div class="item place_innersliderimg newlink"  value="'.$value['host_id'].'"><img src="'.$previousimage[$j].'" alt=""></div>'; 
          }
        }
        $html1.='</div><a class="left carousel-control" href="javascript:void(0)" role="button"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a class="right carousel-control" href="javascript:void(0)" role="button"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div><span class="img_bottombg"></span></div><div class="place_divider newlink" value="'.$value['host_id'].'"><img src="assets/images/strip_bg.png" alt=""></div><div class="place_content"><span class="place_heading newlink" value="'.$value['host_id'].'">'.$value['name_listing'].'</span><span class="place_info">'.$show_string.'</span><div class="rating_div newlink" value="'.$value['host_id'].'">';
        for($k=1;$k<=5;$k++){
          if ($value['rating']>=$k) {
            $html1.='<i class="fa fa-star rating_yes" aria-hidden="true"></i>';
          }else{ 
            $html1.='<i class="fa fa-star" aria-hidden="true"></i>';      
          } } 
          $html1.='</div><div class="price_favinfo"><span class="pricetext"><i class="'.$pricetext.'"></i> '.$price.' / night</span>';
          if($value['status']==1){   
            $html1.='<span class="fav"> <i class="fa fa-heart" aria-hidden="true" data-id="'.$value['host_id'].'"></i></span>';
          }else{ 
            $html1.='<span class="fav"><i class="fa fa-heart-o" aria-hidden="true" data-id="'.$value['host_id'].'"></i></span>';
          } 
          $html1.='</div></div></div></div>';
        }
        $html1.='</div>';
}//else//////////
else{
  $html1.='<div class="notFoundata">No Data Found</div>';
}

if(isset($StayResult['All_property']) && !empty($StayResult['All_property'])){
  $All_view.='<a href=""><span id="viewall">(View all '.$StayResult['All_property'].')</span></a><span class="line_span"></span>';  
}
$data['result1']=$html1;
$data['All_view']=$All_view;
echo json_encode($data);die;
}


//==============Call c===========================//

function callC(){
  $data=[];  
  $mostpopular=[];
  $Guest_country=$this->session->userdata('guest_country'); 
  $Guest_city=$this->session->userdata('guest_city');
  $sessionData=$this->session->userdata('webuser_bgpkr');
  $user_id=(isset($sessionData['user_id']))?$sessionData['user_id']:'0';
  $TopratedResult=[];
  $html2="";
  $html5="";
  $city=$this->input->post('city');
  if(isset($Guest_city) && !empty($Guest_city) && isset($Guest_country) && !empty($Guest_country)){
    $TopratedResult=$this->Welcomemodel->top_rated_result($Guest_country,$Guest_city,$user_id);
    $mostpopular=$this->Welcomemodel->most_popular($Guest_country);
  }else if(isset($city) && !empty($city)){
    $this->session->set_userdata('guest_city',$city);
    $TopratedResult=$this->Welcomemodel->top_rated_result($Guest_country,$city,$user_id);
    $mostpopular=$this->Welcomemodel->most_popular($Guest_country);
  }else{
    $TopratedResult=$this->Welcomemodel->top_rated_result1($user_id,$Guest_country);
    $mostpopular=$this->Welcomemodel->most_popular($Guest_country);
  }
//================result================//
  if(isset($TopratedResult) && !empty($TopratedResult)){
    $html2.='<div class="owl-carousel owl-theme place_mainslider" id="toprated_slider">';
    foreach ($TopratedResult as $key => $value){
      $stayimage=[];
      if(!empty($value['bedimage'])){
        array_push($stayimage,$value['bedimage']);
      }
      if(!empty($value['bathimage'])){
        array_push($stayimage,$value['bathimage']);
      }
      if(!empty($value['kitimage'])){
        array_push($stayimage,$value['kitimage']);
      }
      if(!empty($value['otherimage'])){
        array_push($stayimage,$value['otherimage']);
      }
      $String = [];
      $show_string="";
      if($value['total_guest']>1){
        $String[]=$value['total_guest'].' Guests'; 
      }
      else if($value['total_guest']==1){
        $String[]=$value['total_guest'].' Adult'; 
      }else{
        $String[]=''; 
      }
      if($value['total_bedrooms']>1){
        $String[]=$value['total_bedrooms'].' Bedrooms'; 
      }
      else if($value['total_bedrooms']==1){
        $String[]=$value['total_bedrooms'].' Bedroom'; 
      }else{
        $String[]=""; 
      }
      if(!empty($value['kitimage'])){
        $String[]='Kitchen'; 
      }else{
        $String[]=""; 
      }
      if($value['total_bathrooms']>1){
        $String[]=$value['total_bathrooms'].' Bathrooms'; 
      }
      else if($value['total_bathrooms']==1){
        $String[]=$value['total_bathrooms'].' Bathroom'; 
      }else{
        $String[]=""; 
      }
      $show_string = implode(', ', array_filter($String)); 
      $pricetext="";  
      $pricetext="";  
      if($value['currency']=="Rupees"){
        $pricetext='fa fa-rupee';
      }else{
        $pricetext='fa fa-usd';
      }
      $price="";
      $price = number_format($value['base_price'], 2, '.', ',');
      $price = preg_replace('/\.00/', '', $price);
      $html2.='<div class="item"><div class="place_contentwrapper"><div class="place_img"> <div class="place_innerslider"><div class="carousel slide bootstrapcarousel" data-ride="carousel" data-interval="false"><ol class="carousel-indicators">';
      for ($i=0; $i <count($stayimage) ; $i++) { 
        $html2.='<li data-slide-to="'.$i.'"></li>';
      }
      $html2.='</ol><div class="carousel-inner">';
      for ($j=0; $j <count($stayimage) ; $j++) { 
        if($j==0){
          $html2.='<div class="item active place_innersliderimg newlink" value="'.$value['host_id'].'"><img src="'.$stayimage[$j].'" alt=""></div>';
        }else{
          $html2.='<div class="item place_innersliderimg newlink" value="'.$value['host_id'].'"><img src="'.$stayimage[$j].'" alt=""></div>'; 
        }
      }
      $html2.='</div><a class="left carousel-control" href="javascript:void(0)" role="button"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a class="right carousel-control" href="javascript:void(0)" role="button"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div><span class="img_bottombg"></span></div><div class="place_divider newlink" value="'.$value['host_id'].'"><img src="assets/images/strip_bg.png" alt=""></div><div class="place_content"><span class="place_heading newlink" value="'.$value['host_id'].'">'.$value['name_listing'].'</span><span class="place_info newlink" value="'.$value['host_id'].'">'.$show_string.'</span><div class="rating_div newlink" value="'.$value['host_id'].'">';
      for($k=1;$k<=5;$k++){
        if ($value['rating']>=$k) {
          $html2.='<i class="fa fa-star rating_yes" aria-hidden="true"></i>';
        }else{ 
          $html2.='<i class="fa fa-star" aria-hidden="true"></i>';      
        } } 
        $html2.='</div><div class="price_favinfo"><span class="pricetext"><i class="'.$pricetext.'"></i> '.$price.' / night</span>';
        if($value['status']==1){   
          $html2.='<span class="fav"> <i class="fa fa-heart" aria-hidden="true" data-id="'.$value['host_id'].'"></i></span>';
        }else{ 
          $html2.='<span class="fav"><i class="fa fa-heart-o" aria-hidden="true" data-id="'.$value['host_id'].'"></i></span>';
        } 
        $html2.='</div></div></div></div>';
      }
      $html2.='</div>';
}//else//////////
else{
  $html2.='<div class="notFoundata">No Data Found</div>';
}
//============popular section=======================//
if(isset($mostpopular) && !empty($mostpopular)){
  $html5.='<div class="most_popularsection"><div id="mostpopularslider" class="owl-carousel owl-theme">';
  for ($i=0; $i <count($mostpopular) ; $i++) { 
    $html5.='<div class="item"><div class="mostpopularimg" style="height:500px"><img src="'.$mostpopular[$i]['image'].'" alt=""><span>'.$mostpopular[$i]['city'].'</span></div></div>';
  }
  $html5.='</div></div><div class="most_popularinfo"><div class="most_popularinfoinner"><div class="owl-carousel owl-theme mostpopularslider">';
  for ($j=0; $j <count($mostpopular); $j++) { 
    $html5.='<div class="item"><div class="title"><h3>'.$mostpopular[$j]['city'].'</h3></div><p>'.$mostpopular[$j]['body'].'</p><div class="addressintokm"><span class="address_name">'.$mostpopular[$j]['address'].'</span><a href="" class="btn_style mpop" value="'.$mostpopular[$j]['city'].'"><span>Book now</span><svg><path d="M13.395,4.7l1.561-1.561a1.681,1.681,0,0,1,2.384,0L31.008,16.8a1.681,1.681,0,0,1,0,2.384L17.339,32.857a1.681,1.681,0,0,1-2.384,0L13.395,31.3a1.689,1.689,0,0,1,.028-2.412L21.9,20.813H1.688A1.683,1.683,0,0,1,0,19.125v-2.25a1.683,1.683,0,0,1,1.688-1.687H21.9L13.423,7.116A1.677,1.677,0,0,1,13.395,4.7Z" /></svg></a></div></div>'; 
  } 
  $html5.='</div></div></div>';
}else{
  $html5.='<div class="notFoundata">No Data Found</div>'; 
}
$data['result1']=$html5;
$data['result2']=$html2;
$showcity=(!empty($this->session->userdata('guest_city')))?$this->session->userdata('guest_city'):$this->session->userdata('guest_country');
$data['session_city']=$showcity;
echo json_encode($data);die;
}
//==========stagging_list=================//

function stagging_list(){
  $this->set_country_session();
  $result['location']=$this->input->get('location');
  $result['data']=$this->Welcomemodel->get_min_max($this->session->userdata('guest_country'));
  $result['first_date']=$this->input->get('first_date');
  $result['second_date']=$this->input->get('second_date');
  $result['adult_count']=$this->input->get('adult_count');
  $result['children_count']=$this->input->get('children_count');
  $result['infant_count']=$this->input->get('infant_count');
// $result['guest_text']=$this->input->get('guest_text');
  if(isset($result['location']) && isset($result['data']) && isset($result['first_date']) && isset($result['second_date']) && isset($result['adult_count']) && isset($result['children_count']) && isset($result['infant_count'])){
    $this->load->view('web/header');
    $this->load->view('web/stagging_list',$result);
    $this->load->view('web/footer');
  }else{
    redirect(base_url());
  }
}

//======get stagging_list(=============//
function get_stagging_list(){
  $this->load->library("pagination"); 
  $country=$this->session->userdata('guest_country'); 
  $post=$this->input->post();    
// print_r($post);die;
  $config = array();
  $config['base_url'] = base_url().'stagging-list';
  $config["total_rows"] =$this->Welcomemodel->get_stagging_count($post,$country);
  $config["per_page"] = 12;
  $config["uri_segment"] = 3;
  $config["use_page_numbers"] = TRUE;
  $config["full_tag_open"] = '<ul class="pagination">';
  $config["full_tag_close"] = '</ul>';
  $config["first_tag_open"] = '<li>';
  $config["first_tag_close"] = '</li>';
  $config["last_tag_open"] = '<li>';
  $config["last_tag_close"] = '</li>';
  $config['next_link'] = '&gt;';
  $config["next_tag_open"] = '<li>';
  $config["next_tag_close"] = '</li>';
  $config["prev_link"] = "&lt;";
  $config["prev_tag_open"] = "<li>";
  $config["prev_tag_close"] = "</li>";
  $config["cur_tag_open"] = "<li class='active' style='pointer-events:none!important; value=''><a href='#'>";
  $config["cur_tag_close"] = "</a></li>";
  $config["num_tag_open"] = "<li>";
  $config["num_tag_close"] = "</li>";
  $this->pagination->initialize($config);
  $page= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  $start = ($page - 1) * $config["per_page"];
  $output = array(
    'pagination_link'  => $this->pagination->create_links(),
    'all_count'=>$config['total_rows'],
    'data'   => $this->Welcomemodel->get_stagging_list($config["per_page"],$start,$post,$this->session->userdata('guest_country'))
  );
  echo json_encode($output);
}
//=======function ============//

function like(){
  $post=$this->input->post();
  $response=$this->Welcomemodel->like($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//========getproperty_detail==============//
function getproperty_detail(){ 
  $today=date('Y-m-d');  
  $this->set_country_session(); 
  $sessionData=$this->session->userdata('webuser_bgpkr');
  $user_id=(isset($sessionData['user_id']) && !empty($sessionData['user_id']))?$sessionData['user_id']:'0';
  if(isset($_POST) && !empty($_POST)){
    $post=$this->input->post();  
    $host_id=base64_decode($this->input->post('host_id'));
    $result['data']=$this->Welcomemodel->getproperty_detail($host_id,$user_id);
    $result['guestknow'] = $this->Welcomemodel->guestKnow($host_id);
    $result['thingtakecare'] = $this->Welcomemodel->thingTakeCare($host_id);
    $result['first_date']=$this->input->post('first_date');
    $result['second_date']=$this->input->post('second_date');
    $result['adult_count']=$this->input->post('adult_count');
    $result['children_count']=$this->input->post('children_count');
    $result['infant_count'] =$this->input->post('infant_count');
    $date1=new DateTime($this->input->post('first_date'));
    $date2=new DateTime($this->input->post('second_date'));
    $days=$date2->diff($date1)->format('%a');
    if($result['adult_count']+$result['children_count']==0){
      $Allguest=1; 
    }else{
      $Allguest=$result['adult_count']+$result['children_count'];
    }
    if($result['data']['result']['currency']=="Rupees"){
      $pricetext='fa fa-rupee';
    }else{
      $pricetext='fa fa-usd';
    }
    $html='';
    if(!empty($result['first_date']) && !empty($result['second_date']) && $Allguest<=$result['data']['result']['total_guest']){ 
      if((isset($post['bookingtime'])) && ($post['bookingtime']=="2" || $post['bookingtime']=="3")){
//=================use==========for hald day bokking===============// 
        $days='Half'; 
        $Amount=$result['data']['result']['half_day_price'];
        $Amount1 = number_format($Amount, 2, '.', ',');
        $Amount2 = preg_replace('/\.00/', '', $Amount1);
        $Allamount=$Amount+$result['data']['result']['cleaning_fee'];
        $Allamount1 = number_format($Allamount, 2, '.', ',');
        $Allamount2 = preg_replace('/\.00/', '', $Allamount1);
        $price = number_format($result['data']['result']['half_day_price'], 2, '.', ',');
        $price = preg_replace('/\.00/', '', $price);
        $fee = number_format($result['data']['result']['cleaning_fee'], 2, '.', ',');
        $fee = preg_replace('/\.00/', '', $fee);
        $string=($post['bookingtime']=="2")? "day":"night";
        $html.='<div class="pselamountdiv"><span class="pselhead" id="booking"><i class="'.$pricetext.'"></i> '.$price.' ( '.$days.' '.$string.' )</span><span class="pselam" id="booking_amount" value="'.$Amount2.'"><i class="'.$pricetext.'"></i> '.$Amount2.'</span></div><div class="pselamountdiv"><span class="pselhead" id="cleaning">Cleaning fee </span><span class="pselam" id="cleaning_fee" value="'.$fee.'"><i class="'.$pricetext.'"></i> '.$fee.'</span></div><div class="pselamountdiv fammedium"><span class="pselhead">Total</span><span class="pselam" id="total_amount" value="'.$Allamount2.'"><i class="'.$pricetext.'"></i> '.$Allamount2.'</span></div><div class="pselamountdiv">';
      }
      else{
//=========use for full day booking=================//  
        $Amount=$result['data']['result']['base_price']*$days; 
        $Amount1 = number_format($Amount, 2, '.', ',');
        $Amount2 = preg_replace('/\.00/', '', $Amount1);
        $Allamount=$Amount+$result['data']['result']['cleaning_fee'];
        $Allamount1 = number_format($Allamount, 2, '.', ',');
        $Allamount2 = preg_replace('/\.00/', '', $Allamount1);
        $price = number_format($result['data']['result']['base_price'], 2, '.', ',');
        $price = preg_replace('/\.00/', '', $price);
        $fee = number_format($result['data']['result']['cleaning_fee'], 2, '.', ',');
        $fee = preg_replace('/\.00/', '', $fee);
        $html.='<div class="pselamountdiv"><span class="pselhead" id="booking"><i class="'.$pricetext.'"></i> '.$price.' x '.$days.' night</span><span class="pselam" id="booking_amount" value="'.$Amount2.'"><i class="'.$pricetext.'"></i> '.$Amount2.'</span></div><div class="pselamountdiv"><span class="pselhead" id="cleaning">Cleaning fee </span><span class="pselam" id="cleaning_fee" value="'.$fee.'"><i class="'.$pricetext.'"></i> '.$fee.'</span></div><div class="pselamountdiv fammedium"><span class="pselhead">Total</span><span class="pselam" id="total_amount" value="'.$Allamount2.'"><i class="'.$pricetext.'"></i> '.$Allamount2.'</span></div><div class="pselamountdiv">';
      }
    } 
    if($Allguest>$result['data']['result']['total_guest']){
      $html.='<span id="guest_error" style="padding-left:26px;color:red;">Maximum number of guests is '.$result['data']['result']['total_guest'].'</span>';
    }
    $html.='</div>';
    if($result['first_date']=="" || $result['second_date']==""){
      $html.='<button id="check_date" class="btn_style">Check availability</button>';
    }
    if($Allguest>$result['data']['result']['total_guest']){
      $html.='<button id="change_date" class="btn_style">Change dates</button>';
    }
    if(!empty($result['first_date']) && !empty($result['second_date']) && $Allguest<=$result['data']['result']['total_guest']){
      $html.='<button id="payment" onclick="payment()" class="btn_style">Book now</button>';
    }
    echo $html;die();  
  }
  else if(isset($_GET) && !empty($_GET)){
    $host_id=base64_decode($this->input->get('host_id'));
    if(isset($host_id) && !empty($host_id)){
      $result['data']=$this->Welcomemodel->getproperty_detail($host_id,$user_id);
      $result['guestknow'] = $this->Welcomemodel->guestKnow($host_id);
      $result['thingtakecare'] = $this->Welcomemodel->thingTakeCare($host_id);
      $result['first_date']=$this->input->get('first_date');
      $result['second_date']=$this->input->get('second_date');
      $result['adult_count']=$this->input->get('adult_count');
      $result['children_count']=$this->input->get('children_count');
      $result['infant_count'] =$this->input->get('infant_count');
      $date1=new DateTime($this->input->get('first_date'));
      $date2=new DateTime($this->input->get('second_date'));
      $days=$date2->diff($date1)->format('%a');
      if($result['adult_count']+$result['children_count']==0){
        $Allguest=1; 
      }else{
        $Allguest=$result['adult_count']+$result['children_count'];
      }
      if($result['data']['result']['currency']=="Rupees"){
        $pricetext='fa fa-rupee';
      }else{
        $pricetext='fa fa-usd';
      }
//============check first date and second date empty or not===============//
      if(!empty($result['first_date']) && !empty($result['second_date'])){
        $newDate = date("Y-m-d", strtotime($result['first_date']));
        $newDate1 = date("Y-m-d", strtotime($result['second_date']));  
        $date1=new DateTime($result['first_date']);
        $date2=new DateTime($result['second_date']);
        $days=$date2->diff($date1)->format('%a');
        if($days=="0"){ 
//====if any user change url then redirect on base url=======//
          redirect(base_url()); 
        }  
        $date_data=["host_id"=>$host_id,"from_date"=>$newDate,"to_date"=>$newDate1,"day"=>$days];  
        $check_avilable=$this->Welcomemodel->check_avilable($host_id,$newDate,$newDate1);
        $check_date=$this->Welcomemodel->get_check_date($date_data);
      }else{  
        $newDate = date('Y-m-d');   
        $newDate1 = date('Y-m-d', strtotime($newDate . ' +1 day'));
        $date_data=["host_id"=>$host_id,"from_date"=>$newDate,"to_date"=>$newDate1,"day"=>"1"]; 
        $check_avilable=$this->Welcomemodel->check_avilable($host_id,$newDate,$newDate1);
        $check_date=$this->Welcomemodel->get_check_date($date_data);
      }

//============html start==================//
      $html='';
      if(!empty($result['first_date']) && !empty($result['second_date']) && $Allguest<=$result['data']['result']['total_guest'] && $result['data']['result']['max_day']>=$days && $check_date=="1"){
        $Amount=$result['data']['result']['base_price']*$days; 
        $Amount1 = number_format($Amount, 2, '.', ',');
        $Amount2 = preg_replace('/\.00/', '', $Amount1);
        $Allamount=$Amount+$result['data']['result']['cleaning_fee'];
        $Allamount1 = number_format($Allamount, 2, '.', ',');
        $Allamount2 = preg_replace('/\.00/', '', $Allamount1);
        $price = number_format($result['data']['result']['base_price'], 2, '.', ',');
        $price = preg_replace('/\.00/', '', $price);
        $fee = number_format($result['data']['result']['cleaning_fee'], 2, '.', ',');
        $fee = preg_replace('/\.00/', '', $fee);
        $html.='<div class="pselamountdiv"><span class="pselhead" id="booking"><i class="'.$pricetext.'"></i> '.$price.' x '.$days.' night</span><span class="pselam" id="booking_amount" value="'.$Amount2.'"><i class="'.$pricetext.'"></i> '.$Amount2.'</span></div><div class="pselamountdiv"><span class="pselhead" id="cleaning">Cleaning fee </span><span class="pselam" id="cleaning_fee" value="'.$fee.'"><i class="'.$pricetext.'"></i> '.$fee.'</span></div><div class="pselamountdiv fammedium"><span class="pselhead">Total</span><span class="pselam" id="total_amount" value="'.$Allamount2.'"><i class="'.$pricetext.'"></i> '.$Allamount2.'</span></div><div class="pselamountdiv">';
      } 
      if($Allguest>$result['data']['result']['total_guest']){
        $html.='<span id="guest_error" style="padding-left:26px;color:red;">Maximum number of guests is '.$result['data']['result']['total_guest'].'</span>';
      }
      $html.='</div>';
      if($result['first_date']=="" || $result['second_date']=="" || $check_date=="0"){
        $html.='<button id="check_date" class="btn_style">Check availability</button>';
      }
      else if($Allguest > $result['data']['result']['total_guest'] || $result['data']['result']['max_day'] < $days ){ 
        $html.='<button id="change_date" class="btn_style">Change dates</button>';
      }
      if(!empty($result['first_date']) && !empty($result['second_date']) && $Allguest<=$result['data']['result']['total_guest'] && $result['data']['result']['max_day']>=$days && $check_date=="1"){
        $html.='<button id="payment" onclick="payment()" class="btn_style">Book now</button>';
      }
      $result['data']['html_code']=$html; 
      $html2="";
      if($check_avilable=="All" && $date_data['day']=="1"){
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';  
      }elseif ($check_avilable=="first" && $date_data['day']=="1") {
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3" disabled>08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
      }
      elseif ($check_avilable=="first_second" && $date_data['day']=="1") {
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3" disabled>08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
      }
      elseif ($check_avilable=="second_third" && $date_data['day']=="1") {
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2" disabled>08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
      }
      elseif ($check_avilable=="third" && $date_data['day']=="1") {
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2" disabled>08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
      }
      elseif ($check_avilable=="first_third" && $date_data['day']=="1") {
        $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
      }
      else{
        $html2="";
      }
      $result['data']['html_code2']=$html2; 
      $this->load->view('web/header');
      $this->load->view('web/property_detail',$result);
      $this->load->view('web/footer');
    }else{
      redirect('stagging-list');
    }
  }
}


//==================googleAjax=================//

function googleAjax(){
  $post=$this->input->post();
  $response=$this->check_user_status($post['google_id']);
  if($response!=1){
    echo $response;die();
  }
  $result=$this->Welcomemodel->google_data($post);
  echo $result;die();
}

//=================fbAjax=============================//
function fbAjax(){
  $post=$this->input->post();
  $response=$this->check_user_status($post['fb_id']);
  if($response!=1){
    echo $response;die();
  }
  $result=$this->Welcomemodel->fb_data($post);
  echo $result;die();
}

//=============function unsetcity=================//

function unset_city(){
  $this->session->unset_userdata('guest_city');
  return 1; 
}

//=================set country session================//

function set_country_session(){
// $this->session->set_userdata('guest_country','India'); 
// $this->session->set_userdata('country_code','IN');
// $this->session->set_userdata('guest_city','Delhi');   
  $server_name=$_SERVER['SERVER_NAME'];
  $client  = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = @$_SERVER['REMOTE_ADDR'];
  $result  = array('country'=>'', 'city'=>'','country_code'=>'');
  if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
  }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
  }else{
    $ip = $remote;
  }
  $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip)); 
  if($ip_data && $ip_data->geoplugin_countryName != null){
    $result['country_code'] = $ip_data->geoplugin_countryCode;
    $result['country']= $ip_data->geoplugin_countryName;
    $result['city']=$ip_data->geoplugin_city;
  }
  switch (true) {
   case ($server_name == 'www.bagpackar.in' && $result['country']=='India'):
   $this->session->set_userdata('guest_country','India');
   break;
   case ($server_name == 'www.bagpackar.com' && $result['country']=='India'):
   $this->session->set_userdata('guest_country','USA');
   break;
   case ($server_name == 'www.bagpackar.com' && $result['country']=='United States'):
   $this->session->set_userdata('guest_country','USA');
   break;
   case ($server_name == 'www.bagpackar.in' && $result['country']=='United States'):
   $this->session->set_userdata('guest_country','India');
   break; 
 }

 return 1;
}

//====================property_comment===================//

function property_comment(){
  $post=$this->input->post();
  $post['host_id']=base64_decode($post['host_id']);
  $post['added_on']=date('Y-m-d H:i:s');
  $result=$this->Welcomemodel->property_comment($post); 
  if($result==1){
    echo 1;die;
  }else{
    echo 0;die;
  } 
}

//================newsletter======================//

function newsletter(){
  $post=$this->input->post();
  $result=$this->Welcomemodel->newsletter($post);
  if($result==1){
    echo 1;die();
  }else{
    echo 0;die();
  }  
}

//======================check host timing========================//

function check_host_timing(){
  $post=$this->input->post();
  $host_id=base64_decode($post['host_id']);
  $today=$post['check_date'];
  $next_day = date('Y-m-d', strtotime($today . ' +1 day'));
  $check_avilable=$this->Welcomemodel->check_avilable($host_id,$today,$next_day);
  $html2="";
  if($check_avilable=="All"){
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';  
  }elseif ($check_avilable=="first") {
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3" disabled>08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
  }
  elseif ($check_avilable=="first_second") {
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3" disabled>08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
  }
  elseif ($check_avilable=="second_third") {
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1">Full day</option><option value="2" disabled>08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
  }
  elseif ($check_avilable=="third") {
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2" disabled>08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
  }
  elseif ($check_avilable=="first_third") {
    $html2.='<p>Select Time</p><div class="select_tag"><select id="bookingtime" class="form-control" name="bookingtime"><option value="">Select Time</option><option value="1" disabled>Full day</option><option value="2">08:00 AM - 06:00 PM</option><option value="3">08:00 PM - 06:00 AM</option></select><i class="fa fa-caret-down" aria-hidden="true"></i></div>';
  }
  else{
    $html2="";
  }
  echo $html2;die;
}

//==================check_date======================//

function check_date(){
  $post=$this->input->post();
  $post['host_id']=base64_decode($post['host_id']);
  $result=$this->Welcomemodel->check_date($post);
  echo $result;die();
}
//===============user_msg=======================//
function user_msg(){
  $post=$this->input->post();
  $data=["s_id"=>$post['s_id'],"r_id"=>$post['r_id'],"msg"=>$post['msg'],"action"=>"","url"=>"","thumb_url"=>"","msg_type"=>"text","chat_type"=>"normal","read_status"=>$post['r_id'],"delete_for_everyone"=>"0","deleted_by"=>"","date_added"=>date("Y-m-d H:i:s"),"sender_type"=>"guest","reciver_type"=>"host","host_id"=>base64_decode($post['host_id']),"type"=>"simple"];
  $result=$this->Welcomemodel->user_msg($data);
  if($result==1){
    echo 1;die();
  }else{
    echo 0;die();
  } 
}

  //================check_user_status=================================//

function check_user_status($social_id){
  $select=$this->db->select('user_status,delete_status')
  ->where('google_id',$social_id)
  ->or_where('fb_id',$social_id)
  ->get('bgpkr_users');
  if($select->num_rows()>0){
    $result=$select->row_array();
    if($result['user_status']=='0'){
      return 'block';
    }elseif ($result['delete_status']=='1') {
      return 'deleted';
    }else{
      return 1;
    }
  }else{
    return 1;
  }                  
}

/*================= Function for User check ===================*/
      public function checkBlock(){
        if(@$_SESSION['webuser_bgpkr']['user_id']){
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          $select = $this->db->select('user_id')
          ->where('user_id',$user_id)
          ->where('user_status','0')
          ->get('bgpkr_users');
          if ($select->num_rows()>0) {
            $this->session->unset_userdata('webuser_bgpkr');
          } 

        }
      }

}//class===========
