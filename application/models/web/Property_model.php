<?php
class Property_model extends CI_Model
{

  /* ==================== View Check email password =================== */
  function userHostProperty() 
	{  
    $user_id = $_SESSION['webuser_bgpkr']['user_id'];
		$select = $this->db->select('hp.host_id,hp.user_id,hp.is_approve,hp.is_complete,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "bedroom") LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "bathroom") LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "kitchen") LIMIT 1) as kitimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "other") LIMIT 1) as otherimage,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating')
                       ->from('bgpkr_host_placetype as hp')
                       ->where('hp.user_id',$user_id)
                       ->where('hp.is_delete','0')
                       ->order_by('hp.host_id','desc')
                       ->get();
    if ($select->num_rows()>0) {
                         $records = $select->result_array();
                         return $records;
                        }                   
         		
    }

   /* ==================== View Check email password =================== */
  function hostFavProperty() 
  {  
    $guest_id = $_SESSION['webuser_bgpkr']['user_id'];
    $Allfavouritedata=[]; 
    $Alldata=[];
    $select2=$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where host_id =hp.host_id),0) as rating,IFNULL((select status from bgpkr_wishlist where user_id='.$guest_id.' and host_id=hp.host_id),"0") AS status')
    ->from('bgpkr_host_placetype as hp')
    ->join('bgpkr_wishlist as bw','hp.host_id=bw.host_id','left')
    ->where('bw.user_id',$guest_id)
    ->where('bw.status','1')
    ->group_by('hp.host_id')
    ->get(); 
    $Allfavouritecount=$select2->num_rows();
    $Allfavouritedata=$select2->result_array(); 
    //print_r($Allfavouritedata);die;
       if(!empty($Allfavouritedata)){
     foreach ($Allfavouritedata as $key => $value) {
    if($value['currency']=="Dollar" && $value['base_price']<=100){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Dollar" && $value['base_price']>300){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }else if($value['currency']=="Rupees" && $value['base_price']<=700){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Rupees" && $value['base_price']>2100){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }
$Allfavouritedata[$key]['base_price']=number_format($Allfavouritedata[$key]['base_price'], 2, '.', ',');
$Allfavouritedata[$key]['base_price']=preg_replace('/\.00/', '', $Allfavouritedata[$key]['base_price']);

 }  
}
      $Alldata=["Allfavouritedata"=>$Allfavouritedata];
    return $Alldata;
        //return $Allfavouritedata;
                                          
            
    }  
   
   /* ==================== view host property=================== */
function viewHostProperty($host_id){ 
$user_id = $_SESSION['webuser_bgpkr']['user_id'];  
$date_time=date('Y-m-d H:i:s'); 
$comment="0"; 
$Allresult=[]; 
$AllAmenties=[];   
$allrating=[];
$Allimages=[];
$booking_date=[];
$Alldate_array=[];
$final_array=[];
$check_in=[];
$check_out=[];
$booking_query=$this->db->select('from_date,to_date')
                        ->where('host_id',$host_id)
                        ->where('payment_status','1')
                        ->where('to_date>=',$date_time)
                        ->order_by('from_date')
                        ->get('bgpkr_booking');
if($booking_query->num_rows()>0){
$bookingresult=$booking_query->result_array();
foreach ($bookingresult as $key => $value) {
$check_for_out=date('m/d/Y',strtotime($value['from_date']));  
$check_for_in=date('m/d/Y',strtotime($value['to_date']));  
$check_out[]=$check_for_out;
$check_in[]=$check_for_in;
$hourdiff = round((strtotime($value['to_date']) - strtotime($value['from_date']))/3600, 1);
if($hourdiff>24){ 
$Alldate_array[]=$this->date_range_list($value['from_date'],$value['to_date']); 
}    
}   
$check_out= "'" . implode ( "','",$check_out) . "'";
$check_in= "'" . implode ( "','",$check_in) . "'";
if(!empty($Alldate_array)){
$final_array = call_user_func_array('array_merge', $Alldate_array);
$final_array = "'" . implode ( "','",$final_array) . "'";
}
}                        

                        
//===========rating============//
$query=$this->db->select('br.rating,br.review,br.added_on,bu.name,IFNULL(bu.user_image,"") as user_image')
->from('bgpkr_review_rating as br')
->join('bgpkr_users as bu','br.guest_id=bu.user_id','left')
->where('host_id',$host_id)
->get();
$allrating=$query->result_array();
$Allresult['allrating']=$allrating;                 
//============result================//     
$select = $this->db->select('hp.host_id,hp.user_id,bu.name,IFNULL(bu.user_image,"") as user_image,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.guest_bed,hp.doublebeds,hp.queenbeds,hp.singlebeds,hp.sofabeds,hp.kingbeds,hp.twinbeds,hp.airbeds,hp.total_kingbed,hp.total_queenbed,hp.total_doublebed,hp.total_twinbed,hp.total_airbed,hp.total_bathrooms,hp.lat,hp.lng,hp.description,hp.add_more,hp.if_any,hp.host_name,hp.profile_img,hp.introduction,hp.about_neighborhood,hp.base_price,hp.currency,hp.basic_amenities,hp.kitchen_dining,hp.bed_baths,hp.entertainment,hp.outside_amenities,hp.safty_amenities,IFNULL((select AVG(rating) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,(select GROUP_CONCAT(unavailable_date SEPARATOR ",") from bgpkr_host_unavailable_date where host_id = hp.host_id) as unav_date,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=1),0) as one_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=2),0) as two_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=3),0) as three_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=4),0) as four_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=5),0) as five_rating,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type="kitchen") LIMIT 1) as kitimage,hp.cleaning_fee,hp.stay_min_night as min_day,hp.stay_max_night as max_day,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id='.$host_id.'),"0") AS status')
->from('bgpkr_host_placetype as hp')
->join('bgpkr_users as bu','hp.user_id=bu.user_id','left')
->join('bgpkr_host_unavailable_date as und','hp.host_id=und.host_id','left')
->where('hp.host_id',$host_id)
->where('hp.is_complete','1')
->order_by('hp.host_id','desc')
->get();
// echo $this->db->last_query();die;
if($select->num_rows()>0){
$result=$select->row_array();
$bedrooms=[];
$Totalbedroom=$result['total_bedrooms'];
$doublebeds = explode(",", $result['doublebeds']);
$queenbeds = explode(",", $result['queenbeds']);
$singlebeds = explode(",", $result['singlebeds']);
$sofabeds = explode(",", $result['sofabeds']);
$kingbeds = explode(",", $result['kingbeds']);
$twinbeds = explode(",", $result['twinbeds']);
$airbeds = explode(",", $result['airbeds']);
for ($i=1; $i<=$Totalbedroom ; $i++) {
$bedrooms[$i]=$doublebeds[$i-1].','.$queenbeds[$i-1].','.$singlebeds[$i-1].','.$sofabeds[$i-1].','.$kingbeds[$i-1].','.$twinbeds[$i-1].','.$airbeds[$i-1];
}
$result['bedrooms']=$bedrooms;
// $result['unavilable_date']=explode(',',$result['unavilable_date']);
// $result['unavilable_date'] = "'" . implode ( "','",$result['unavilable_date']) . "'";
// if(isset($final_array) && !empty($final_array)){
// $result['unavilable_date']=$result['unavilable_date'].",".$final_array;
// }  
if($result['currency']=="Dollar" && $result['base_price']<=100){
$result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
}else if($result['currency']=="Dollar" && $result['base_price']>100 && $result['base_price']<=300 ){
$result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
}else if($result['currency']=="Dollar" && $result['base_price']>300){
$result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
}else if($result['currency']=="Rupees" && $result['base_price']<=700){
$result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
}else if($result['currency']=="Rupees" && $result['base_price']>700 && $result['base_price']<=2100 ){
$result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
}else if($result['currency']=="Rupees" && $result['base_price']>2100){
$result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
}
$result['check_in']=$check_in;
$result['check_out']=$check_out;  
$AllAmenties=$this->all_amenties_name($result['basic_amenities'],$result['kitchen_dining'],$result['bed_baths'],$result['entertainment'],$result['outside_amenities']);
$Allresult['all_amenties']=$AllAmenties;
$Allresult['result']=$result;


$selectbImg4 = $this->db->select('image,is_cover,image_type')
                       ->where('host_id',$host_id)
                       ->where('image_type','other')
                       ->get('bgpkr_host_place_images');
$Allimagesx[]=$selectbImg4->result_array();

$selectbImg = $this->db->select('image,is_cover,image_type')
                       ->where('host_id',$host_id)
                       ->where('image_type','bedroom')
                       ->get('bgpkr_host_place_images');
$Allimagesx[]=$selectbImg->result_array();

$selectbImg2 = $this->db->select('image,is_cover,image_type')
                       ->where('host_id',$host_id)
                       ->where('image_type','bathroom')
                       ->get('bgpkr_host_place_images');
$Allimagesx[]=$selectbImg2->result_array();

$selectbImg3 = $this->db->select('image,is_cover,image_type')
                       ->where('host_id',$host_id)
                       ->where('image_type','kitchen')
                       ->get('bgpkr_host_place_images');
$Allimagesx[]=$selectbImg3->result_array();




foreach ($Allimagesx as $valueimg) {
  foreach ($valueimg as $valueb) {
    $Allimages[] = $valueb;
  }
}

function cmp($a, $b)
{
    if ($a["is_cover"] == $b["is_cover"]) {
        return 0;
    }
    return ($a["is_cover"] < $b["is_cover"]) ? 1 : -1;
}

usort($Allimages,"cmp");
 //echo'<pre>';print_r($Allimages);die;

// $sorting = array_column($Allimages, 'is_cover');
// array_multisort($sorting, SORT_DESC, $Allimages);

// echo'<pre>';print_r($Allimages);die;

$Allresult['allimage']= $Allimages;
$Allresult['comment']=$comment;
 // print_r($Allresult);die;
return $Allresult;  
}else{
return [];
}
}

//============alll_amenties name======================//

function all_amenties_name($basic_amenities,$kitchen_dining,$bed_baths,$entertainment,$outside_amenities){
 $Alldata=[]; 
 $amenties_url =base_url().'assets/all_amenties/';
 $AllAmenties =$basic_amenities.','.$kitchen_dining.','.$bed_baths.','.$entertainment.','.$outside_amenities; 
 $AllIDarray=explode(',', $AllAmenties);
 foreach ($AllIDarray as $value) {
  $select = $this->db->select("name,image")
  ->where('id',$value)
  ->get('bgpkr_all_amenities');
  $result=$select->row_array();
  if($result['image']!=""){
    $result['image']=$amenties_url.$result['image'];
  }
  $Alldata[]=$result;
}
return $Alldata;
}

//========date list===================//

function date_range_list($first_date,$second_date){
  $newarray=[];  
  $array = array(); 
  $newdate = date('Y-m-d H:i:s', strtotime($first_date . ' +1 day')); 
  $Variable1=date(strtotime($newdate));
  $Variable2=date(strtotime($second_date));
  for ($currentDate = $Variable1; 
    $currentDate < $Variable2;                                  
    $currentDate += (86400)) {                                      
    $Store = date('m/d/Y', $currentDate); 
    $array[] = $Store; 
  }
  return $array;
}
    /* ==================== function get booking detail =================== */

    function bookingDetail() 
    { 
    $user_id = $_SESSION['webuser_bgpkr']['user_id'];
    $select = $this->db->select('hp.host_id,b.guest_id,hp.user_id,hp.is_approve,hp.is_complete,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,bp.paid_amount,bp.paid_amount_currency,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "bedroom") LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "bathroom") LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "kitchen") LIMIT 1) as kitimage,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type = "other") LIMIT 1) as otherimage')
                       ->from('bgpkr_booking as b')
                       ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
                       ->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left')
                       ->where('b.user_id',$user_id)
                       ->where('b.confirm_status','1')
                       ->where('bp.payment_status','1')
                       ->order_by('b.booking_id','desc')
                       ->get();
    if ($select->num_rows()>0) {
                         $records = $select->result_array();
                         return $records;
                        }     
    }
  
  /* ==================== function get booking detail =================== */

    function monthAmount() 
    { 
    $user_id = $_SESSION['webuser_bgpkr']['user_id'];
    $select = $this->db->select('bp.paid_amount,bp.paid_amount_currency')
                       ->from('bgpkr_booking as b')
                       //->join('bgpkr_host_placetype as hp','hp.user_id=b.user_id','left')
                       ->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left')
                       ->where('b.user_id',$user_id)
                       ->like('b.from_date',date('Y-m'))
                       ->where('b.confirm_status','1')
                       ->where('bp.payment_status','1')
                       ->order_by('b.booking_id','desc')
                       ->get();
    if ($select->num_rows()>0) {
                         $records = $select->result_array();
                         return $records;
                        }     
    }
   
        /* ==================== function get booking detail =================== */

        function pendingBooking() 
        { 
        $user_id = $_SESSION['webuser_bgpkr']['user_id'];
        $select = $this->db->select('hp.name_listing,b.booking_id,b.from_date,b.guest_id,b.total_guest,u.user_image,u.name,u.user_id,DATEDIFF(b.to_date, b.from_date) 
             AS days')
                           ->from('bgpkr_booking as b')
                           ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
                           ->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left')
                           ->join('bgpkr_users as u','u.user_id=b.guest_id','left')
                           ->where('b.user_id',$user_id)
                           ->where('b.from_date>=',date('Y-m-d'))
                           ->where('b.confirm_status','0')
                           ->where('bp.payment_status','1')
                           ->order_by('b.booking_id','desc')
                           ->get();
        if ($select->num_rows()>0) {
                             $records = $select->result_array();
                             return $records;
                            }     
        }


        /* ==================== function get booking detail =================== */

          // function todayInOut() 
          // { 
          // $datet = date("Y-m-d");
          // $where = "(b.from_date = '$datet' OR b.to_date = '$datet')";
          // $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          // $select = $this->db->select('hp.name_listing,b.host_id,b.guest_id')
          //                    ->from('bgpkr_booking as b')
          //                    ->join('bgpkr_host_placetype as hp','hp.user_id=b.user_id','left')
          //                    ->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left')
          //                    ->join('bgpkr_users as u','u.user_id=b.guest_id','left')
          //                    ->where('b.user_id',$user_id)
          //                    // ->like('b.from_date',date('Y-m'))
          //                    ->where('b.confirm_status','1')
          //                    ->where('bp.payment_status','1')
          //                    ->where($where)
          //                    ->order_by('b.booking_id','asc')
          //                    ->group_by('b.host_id')
          //                    ->get();
          // if ($select->num_rows()>0) {
          //                      $records = $select->result_array();
          //   foreach ($records as $key=>$value) {
          // $select2 = $this->db->select('b.booking_id,b.from_date,b.to_date,b.guest_id,b.total_guest,u.user_image,u.name,u.user_id,DATEDIFF(b.to_date, b.from_date) 
          //      AS days')
          //                    ->from('bgpkr_booking as b')
          //                    ->join('bgpkr_host_placetype as hp','hp.user_id=b.user_id','left')
          //                    ->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left')
          //                    ->join('bgpkr_users as u','u.user_id=b.guest_id','left')
          //                    ->where('b.user_id',$user_id)
          //                    // ->like('b.from_date',date('Y-m'))
          //                    ->where('b.confirm_status','1')
          //                    ->where('bp.payment_status','1')
          //                    ->where('b.host_id',$value['host_id'])
          //                    ->where($where)
          //                    ->order_by('b.booking_id','asc')
          //                    ->group_by('b.host_id')
          //                    ->get();
          //                    $allrecord = $select2->result_array();
          //                    $records[$key]['alldata']=$allrecord;       
          //                  }
          //                      return $records;
          //                     }     
          // }


          /* ==================== function get booking detail =================== */

          function todayInOutFlt($postArr) 
          { 
          $html = '';  
          $datet = date("Y-m-d",strtotime($postArr['date']));
          $datem = date('m',strtotime($datet));
          $datey = date('Y',strtotime($datet));
          $where2 = "((month(b.from_date) = '$datem' AND year(b.from_date) = '$datey') OR (month(b.to_date) = '$datem' AND year(b.to_date) = '$datey'))";
          $where = "(b.from_date = '$datet' OR b.to_date = '$datet')";
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
                    $this->db->select('hp.name_listing,b.host_id');
                    $this->db->from('bgpkr_booking as b');
                    $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
                    $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
                    $this->db->join('bgpkr_users as u','u.user_id=b.guest_id','left');
                    $this->db->where('b.user_id',$user_id);
                    $this->db->where('b.confirm_status','1');
                    $this->db->where('bp.payment_status','1');
                   if (isset($postArr['listtype']) && !empty($postArr['listtype'])) {
                   if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                    if ($postArr['listtype'] == '2') {
                  $this->db->where('year(b.from_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.from_date)',date('m',strtotime($datet)));
                    }
                    elseif ($postArr['listtype'] == '3') {
                  $this->db->where('year(b.to_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.to_date)',date('m',strtotime($datet))); 
                     } else{
                      $this->db->where($where2);
                    }
                   }else{
                   if ($postArr['listtype'] == '2') {
                      $this->db->where('b.from_date',$datet);
                    }
                    elseif ($postArr['listtype'] == '3') {
                       $this->db->where('b.to_date',$datet);
                     } else{
                      $this->db->where($where);
                    }    
                    } 
                   }
                    $this->db->order_by('b.booking_id','asc');
                    $this->db->group_by('b.host_id');
                   $select = $this->db->get();
                    //echo $this->db->last_query();die;
          if ($select->num_rows()>0) {
                               $records = $select->result_array();
            foreach ($records as $key=>$value) {
          $this->db->select('b.booking_id,b.from_date,b.to_date,b.guest_id,b.total_guest,u.user_image,u.name,u.user_id,DATEDIFF(b.to_date, b.from_date) 
               AS days');
              $this->db->from('bgpkr_booking as b');
              $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
              $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
              $this->db->join('bgpkr_users as u','u.user_id=b.guest_id','left');
              $this->db->where('b.user_id',$user_id);
              $this->db->where('b.confirm_status','1');
              $this->db->where('bp.payment_status','1');
              $this->db->where('b.host_id',$value['host_id']);
                if (isset($postArr['listtype']) && !empty($postArr['listtype'])) {
                   if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                    if ($postArr['listtype'] == '2') {
                  $this->db->where('year(b.from_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.from_date)',date('m',strtotime($datet)));    
                  }
                    elseif ($postArr['listtype'] == '3') {
                  $this->db->where('year(b.to_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.to_date)',date('m',strtotime($datet)));    
                   } else{
                      $this->db->where($where2);
                    }
                   }else{
                   if ($postArr['listtype'] == '2') {
                      $this->db->where('b.from_date',$datet);
                    }
                    elseif ($postArr['listtype'] == '3') {
                       $this->db->where('b.to_date',$datet);
                     } else{
                      $this->db->where($where);
                    }    
                  } 
                   }
                 $this->db->order_by('b.booking_id','asc');
                 $this->db->group_by('b.host_id');
                  $select2 = $this->db->get();
                             $allrecord = $select2->result_array();
                             $records[$key]['alldata']=$allrecord;       
                           }
              $html = '';
              if($records){
              foreach ($records as $valt) {
              $dat=date('Y',strtotime($postArr['date']));
              $month=date('M',strtotime($postArr['date']));
              $dayname = '';
              if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                 $dayname = ''; 
             
              }else{
                 $dayname=date('D',strtotime($postArr['date'])).', ';

                }
           
      $html.='<span class="date"> '.$dayname.''.$month.' '.$dat.'</span>
              <span class="section_heading">'.$valt['name_listing'].'</span><table><tbody>';
                $i=1; foreach ($valt['alldata'] as $valall) {
                  $today = date('Y-m-d');
                  if($valall['from_date']==$today){
                  $r = 'Arrival';
                  }else{
                  $r = 'Departure';
                  }
                  $nstr = ($valall['days']>1)?$valall['days'].' Nights ':$valall['days'].' Night ';
                  $gstr = ($valall['total_guest']>1)?$valall['total_guest'].' Guests':$valall['total_guest'].' Guest';
        $html.='<tr><td width="150">'.$r.'</td><td width="150">'.$nstr.$gstr.'</td><td width="40"><span class="tdimg">';
           if(!empty($valall['user_image'])){ 
         $html.= '<img src="'.$valall['user_image'].'" alt="">';
           }else{
         $html.= '<div class="p_Imagemsg" id="p_Images'.$i.'">'.ucfirst($valall['name'][0]).'</div>';
           } 
           $html.= '</span></td>
                    <td width="30"><a href="'.base_url().'user-chat?guestId='.base64_encode($valall['guest_id']).'"><i class="fa fa-comment" aria-hidden="true"></i></a></td>
                  </tr>';
                $i++; }
    
              $html.= '</tbody></table>';
            
             } }
                              }
             return $html;                 

          }
       
       /* ==================== function get booking detail =================== */
        function acceptDeclineBooking($booking_id,$status,$i) 
        {   
            $user = $_SESSION['webuser_bgpkr']['user_id'];
            $b_id=base64_decode($booking_id);
            if ($status=='1') {
              $data = array('confirm_status' => '1');
              $this->db->where('booking_id',$b_id);
              $this->db->update('bgpkr_booking',$data);
              if ($this->db->affected_rows()>0) {
              
              $selectu = $this->db->select('b.guest_id,u.email,u.name,hp.name_listing,DATEDIFF(b.to_date, b.from_date) AS days,b.to_date,b.from_date,b.total_guest,hp.location,hp.place_type,hp.room_type,hp.city,hp.base_price,hp.cleaning_fee,b.paid_amount,b.paid_currency,b.created_on')
                                  ->from('bgpkr_booking as b')
                                  ->join('bgpkr_users as u','u.user_id=b.guest_id','left')
                                  ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
                                  ->where('b.booking_id',$b_id)
                                  ->get();
                   $resultu = $selectu->result_array();
           
           $user_id = $resultu[0]['guest_id'];
           $email = $resultu[0]['email'];

           $title = "Booking Accepted";
           $msg="Host accepted your request to book the house/vila/apartment";
           $notitype="Booking Status";
           $select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
              if($select->num_rows()>0){
                 $result=$select->result_array();
                 if ($result[0]['device_token'] != '') {
                 $device_token=$result[0]['device_token'];
                 $device_type=$result[0]['device_type'];
                 $message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
                 $res=$this->common->notification($device_token,$device_type,$message,$notitype);
                }
              }
              

          //====================== email ======================// 

             //$email = "mohdshahnazar518@gmail.com";
             $mail = new Common1(); 
              $urlcencel = base_url().'cancel-refund-policy';
             $urlref = base_url().'referral';
             $urlhelp = base_url().'help';
             $termnc = base_url().'terms-condition';
             $policy = base_url().'policies';

             $subject = "Booking Accepted";
             $name = $resultu[0]['name'];
             $property = $resultu[0]['name_listing'];
             $days = $resultu[0]['days'];
             $guest = $resultu[0]['total_guest']>1?$resultu[0]['total_guest'].' guests':$resultu[0]['total_guest'].' guest';
              $location = $resultu[0]['location'];

            $from = date('D, M d, Y',strtotime($resultu[0]['from_date']));
            $to = date('D, M d, Y',strtotime($resultu[0]['to_date']));
            $paytime = date('M d, Y . h:i A',strtotime($resultu[0]['created_on']));

          $total_pr = floatval($resultu[0]['base_price'])+floatval($resultu[0]['cleaning_fee']);
          $sevFee = floatval($resultu[0]['paid_amount'])-floatval($total_pr);

          $currency=$resultu[0]['paid_currency'];
           if ($currency=="USD") {
            $currency='$';
           }else{
             $currency='Rs';
           }
            $img = 'https://www.bagpackar.in/assets/images/pinicon.png';
            $img2 = 'https://www.bagpackar.in/assets/images/logo.png';
            
            $message = "<img src=".$img." style='float:left; margin-right:20px;width:50px'/><br><br><p>Hi ".$name.",<br>
           Congratulations on your booking ".$resultu[0]['place_type']." in ".$resultu[0]['city'].". Please find your receipt and booking details below.<br>
Your receipt from Bagpackar.<br> 
Confirmation ID: Receipt ID · Date<br>
Guest Name: ".$name."<br>
 <div>".$property."<br> 
 Address:".$location." ".$days." night in ".$resultu[0]['city']."<br>
Reservation: ".$days." Night.<br>
".$from." to ".$to."<br>
".$resultu[0]['room_type']." ".$resultu[0]['place_type']." · 4 beds · ".$guest."<br>
Confirmation code: <><br>

       
<div>
<h2 style='font-size:23px; color:#000;'>Price Details</h2><br>
$<> x <> night : ".$currency.$resultu[0]['base_price']."<br>
Cleaning fee : ".$currency.$resultu[0]['cleaning_fee']."<br>
Service fee : ".$currency.$sevFee."<br>
Occupancy taxes and fees : ".$currency."0<br>
Total Amount (USD) : ".$currency.$resultu[0]['paid_amount']."<br>
</div>

<div>
<h2 style='font-size:23px; color:#000;'>Payment</h2><br>
VISA •••• 7573<br>
".$paytime." PDT<br>
Amount paid (USD) : ".$currency.$resultu[0]['paid_amount']."<br>
</div>

      <div style='text-align:center;'>
<div style='display:table; margin:0 auto;'>
     <div style='display:table;width:100%;margin:10px auto;'><a target='_blank' href='".$urlref."' data-saferedirecturl='https://www.google.com/url?q='".$urlref."'><button style='border:0;background-color:#000;color:#fff;padding:10px;'>Print this Receipt</button></a></div>
     <div style='display:table;width:100%;margin:10px auto;'><a target='_blank' href='".$urlref."' data-saferedirecturl='https://www.google.com/url?q='".$urlref."'><button style='border:0;background-color:#000;color:#fff;padding:10px;'>Itinerary</button></a></div>
     </div>
     </div>

<br>If you want to make any changes please go to Manage Booking.
Check out our <a target='_blank' href='".$urlcencel."'                   data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>Cancellation policy</a>.<br>
All properties on Bagpackar require a security deposit of $300. You will not be charged until host claims or reports any damage. Also, you are responsible for covering all the damages that are caused by you intentionally or accidentally. Check out our <a target='_blank' href='".$termnc."'                   data-saferedirecturl='https://www.google.com/url?q='".$termnc."'>Terms and Conditions</a> and <a target='_blank' href='".$policy."'                   data-saferedirecturl='https://www.google.com/url?q='".$policy."'>Privacy Policy</a>.

<br>Bagpackar is committed to no discrimination at any circumstances based on Race, Religion or Origin. Please read our <a target='_blank' href='".$urlcencel."'                   data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>No Discrimination Policy</a>.
If you have any questions or need any assistance please contact Bagpackar Support or go to <a target='_blank' href='".$urlhelp."' data-saferedirecturl='https://www.google.com/url?q='".$urlhelp."'>Help and Support</a>.<br><br>
Regards,<br>
Bagpackar, LLC
 <br><img src=".$img2." style='float:left; margin-right:20px;width:110px'/></p>";
            $body =
                '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
                  <title>'.html_escape($subject).'</title>
                  <style type="text/css">
                    body {
                      font-family: Arial, Verdana, Helvetica, sans-serif;
                      font-size: 16px;
                    }
                  </style>
                </head>
                <body>
                '.$message.'
                </body>
                </html>';

              $result = $mail->email_user($email, $body, $subject);
   

          //====================== email ======================//    
                        
          $dataNoti = array('sender_id'=> $user,
                            'receiver_id' => $user_id,
                            'title' => $title,
                            'message' => $msg,
                            'type' =>  $notitype);
                  $insert=$this->db->insert('bgpkr_notification',$dataNoti);
                  if ($insert) {
                    return 1;
                  }else{
                    return false;
                  }
              }else{
                return false;
              }
              
            }else{
              $refundRes = $this->refund_payment($b_id);
              if ($refundRes == 1) {
              $data = array('confirm_status' => '2');
              $this->db->where('booking_id',$b_id);
              $this->db->update('bgpkr_booking',$data);
              if ($this->db->affected_rows()>0) {
               
          $selectu = $this->db->select('b.guest_id,u.email,u.name,hp.name_listing,DATEDIFF(b.to_date, b.from_date) AS days,b.to_date, b.from_date,b.total_guest,hp.location,hp.place_type,hp.room_type')
                                  ->from('bgpkr_booking as b')
                                  ->join('bgpkr_users as u','u.user_id=b.guest_id','left')
                                  ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
                                  ->where('b.booking_id',$b_id)
                                  ->get();
                   $resultu = $selectu->result_array();
           
           $user_id = $resultu[0]['guest_id'];
           $email = $resultu[0]['email'];

           $title = "Booking Rejected";    
           $msg="Host accepted your request to book the house/vila/apartment";
           $notitype="Booking Status";

           $select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
              if($select->num_rows()>0){
                 $result=$select->result_array();
                 if ($result[0]['device_token'] != '') {
                 $device_token=$result[0]['device_token'];
                 $device_type=$result[0]['device_type'];
                 $message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
                 $res=$this->common->notification($device_token,$device_type,$message,$notitype);
                }
              }
      //================ email ========================//    
            //$email = "mohdshahnazar518@gmail.com";
             $mail = new Common1(); 
             $urlcencel = base_url().'cancel-refund-policy';
             $urlhelp = base_url().'help';
             $subject = "Booking Rejected";
             $name = $resultu[0]['name'];
             $property = $resultu[0]['name_listing'];
             $days = $resultu[0]['days'];
             $guest = $resultu[0]['total_guest']>1?$resultu[0]['total_guest'].' guests':$resultu[0]['total_guest'].' guest';
             $location = $resultu[0]['location'];

             $from = date('D, M d, Y',strtotime($resultu[0]['from_date']));
             $to = date('D, M d, Y',strtotime($resultu[0]['to_date']));


            $img = 'https://www.bagpackar.in/assets/images/pinicon.png';
            $img2 = 'https://www.bagpackar.in/assets/images/logo.png';
            
            $message = "<img src=".$img." style='float:left; margin-right:20px;width:50px'/><br><br><p>Hi ".$name.",<br>

                Your booking has been cancelled. You refund will be processed in 3 to 4 days. To reflect the refund amount in your statement might take up to 15 days. You can continue looking for accommodation on Bagpackar.com
              <div>Cancellation refund amount will be based on following terms. Please read full details about our <a target='_blank' href='".$urlcencel."'                   data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>Cancellation Policy</a> </div> <br>
 <ul><li>             
Cancellation for the reservation before the 7 days of the check in date, full refund of the price paid for the reservation will be provided.</li>
<li>Cancellation within 7 days to 48 hours before check in time, half amount of the price paid for the reservation will be processed.</li>
<li>Cancellation from 48 hours to check in time, only cleaning fees will be refunded. If there are no cleaning fees for the reservation, no amount will be refunded.
</ul></li><br>
".$property."<br> Reservation: ".$days." Night.<br>
".$from." to ".$to."<br>
".$resultu[0]['room_type']." ".$resultu[0]['place_type']." · 4 beds · ".$guest."<br>
Confirmation code: <><br>
<br>Bagpackar is committed to no discrimination at any circumstances based on Race, Religion or Origin. Please read our <a target='_blank' href='".$urlcencel."'                   data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>No Discrimination Policy</a>.
Guest cancellation policy <a target='_blank' href='".$urlcencel."'                   data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>Cancellation policy</a>.
If you have any questions or need any assistance please contact Bagpackar Support or go to <a target='_blank' href='".$urlhelp."' data-saferedirecturl='https://www.google.com/url?q='".$urlhelp."'>Help and Support</a>.<br><br>
Regards,<br>
Bagpackar, LLC
 <br><img src=".$img2." style='float:left; margin-right:20px;width:110px'/></p>";
            $body =
                '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
                  <title>'.html_escape($subject).'</title>
                  <style type="text/css">
                    body {
                      font-family: Arial, Verdana, Helvetica, sans-serif;
                      font-size: 16px;
                    }
                  </style>
                </head>
                <body>
                '.$message.'
                </body>
                </html>';

              $result = $mail->email_user($email, $body, $subject);
     //======== email =================//         

              $dataNoti = array('sender_id'=> $user,
                                'receiver_id' => $user_id,
                                'title' => $title,
                                'message' => $msg,
                                'type' =>  $notitype);
                  $insert=$this->db->insert('bgpkr_notification',$dataNoti);
                  if ($insert) {
                    return 1;
                  }else{
                    return false;
                  }
              
              }else{
                return false;
              }
            }

          }


        }
 //===================== change badge status ========================//
        function changeNotiStatus(){
          $user = $_SESSION['webuser_bgpkr']['user_id'];
          $data = array('icon_status' => '1');
          $this->db->where('receiver_id',$user);
          $this->db->update('bgpkr_notification',$data);
          return true;
        }

 //================view property booking detail =====================//      
     function viewPropertyBooking($host_id){
        $user_id = $_SESSION['webuser_bgpkr']['user_id'];
        $this->db->select('b.booking_id,b.from_date,b.to_date,b.guest_id,b.total_guest,u.user_image,u.name,u.user_id,DATEDIFF(b.to_date, b.from_date) 
               AS days');
              $this->db->from('bgpkr_booking as b');
              $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
              $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
              $this->db->join('bgpkr_users as u','u.user_id=b.guest_id','left');
              $this->db->where('b.user_id',$user_id);
              $this->db->where('b.confirm_status','1');
              $this->db->where('bp.payment_status','1');

              $this->db->where('b.host_id',$host_id);
              //$this->db->where($where);
              $this->db->order_by('b.booking_id','asc');
              $this->db->group_by('b.host_id');
              $select2 = $this->db->get();
              $allrecord = $select2->result_array();
              return $allrecord;                     
              }

     //================view property booking detail =====================//      
         function guestKnow($host_id){
                    $select = $this->db->select('noise_potential,pet_live,have_weapon,media_device,other_animal')
                                       ->where('host_id',$host_id)
                                       ->get('bgpkr_host_placetype');
                       if ($select->num_rows()>0) {
                                       $result = $select->result_array();
                                       return $result[0];  
                             }                

                  }            
    
     //================view property booking detail =====================//      
         function thingTakeCare($host_id){
                    $select = $this->db->select('suitable_child,suitable_infants,suitable_pets,allow_smoking,allow_parties')
                                       ->where('host_id',$host_id)
                                       ->get('bgpkr_host_placetype');
                       if ($select->num_rows()>0) {
                                       $result = $select->result_array();
                                       return $result[0];  
                             } 
                                
                  } 
      //================view property booking detail =====================//      
         function trashUserProperty($host_id){
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
                    $select = $this->db->select('is_complete')
                                       ->where('host_id',$host_id)
                                       ->where('user_id',$user_id)
                                       ->get('bgpkr_host_placetype');
                      if ($select->num_rows()>0) {
                              $res = $select->result_array();
                              if ($res[0]['is_complete'] == '0') {
                              $this->db->where('host_id',$host_id);
                              $this->db->where('user_id',$user_id);
                              $this->db->delete('bgpkr_host_placetype');
                  if ($this->db->affected_rows()>0) {
                              $this->db->where('host_id',$host_id);
                              $this->db->delete('bgpkr_host_complete_status');
                           
                              $this->db->where('host_id',$host_id);
                              $this->db->delete('bgpkr_host_government_id');

                              $this->db->where('host_id',$host_id);
                              $this->db->delete('bgpkr_host_place_images');

                              $this->db->where('host_id',$host_id);
                              $this->db->delete('bgpkr_host_unavailable_date');
                            return 1;
                             } 
                           }else{
                            
                            $date = date('Y-m-d');  
                       $select2 = $this->db->select('booking_id')
                                           ->where('host_id',$host_id)
                                           ->where('user_id',$user_id)
                                           ->where('from_date>=',$date)
                                           ->where('confirm_status','1')
                                           ->get('bgpkr_booking');
                              if ($select->num_rows()>0) {
                                return 2;
                              }else{
                              $dataup = array('is_delete' => '1');
                              $this->db->where('host_id',$host_id);
                              $this->db->where('user_id',$user_id);
                              $this->db->update('bgpkr_host_placetype',$dataup);
                              if ($this->db->affected_rows()>0) {
                                return 1;
                              }
                            }
                           }
                          }   
                                
                  }             
     /* ==================== function get booking detail =================== */

          function viewtodayInOutFlt($postArr) 
          { 
          $html = '';  
          $host_id = base64_decode($postArr['host']);
          $datet = date("Y-m-d",strtotime($postArr['date']));
          $datem = date('m',strtotime($datet));
          $datey = date('Y',strtotime($datet));
          $where2 = "((month(b.from_date) = '$datem' AND year(b.from_date) = '$datey') OR (month(b.to_date) = '$datem' AND year(b.to_date) = '$datey'))";
          $where = "(b.from_date = '$datet' OR b.to_date = '$datet')";
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
                    $this->db->select('hp.name_listing,b.host_id');
                    $this->db->from('bgpkr_booking as b');
                    $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
                    $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
                    $this->db->join('bgpkr_users as u','u.user_id=b.guest_id','left');
                    $this->db->where('b.user_id',$user_id);
                    $this->db->where('b.host_id',$host_id);
                    $this->db->where('b.confirm_status','1');
                    $this->db->where('bp.payment_status','1');
                   if (isset($postArr['listtype']) && !empty($postArr['listtype'])) {
                   if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                    if ($postArr['listtype'] == '2') {
                  $this->db->where('year(b.from_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.from_date)',date('m',strtotime($datet)));
                    }
                    elseif ($postArr['listtype'] == '3') {
                  $this->db->where('year(b.to_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.to_date)',date('m',strtotime($datet))); 
                     } else{
                      $this->db->where($where2);
                    }
                   }else{
                   if ($postArr['listtype'] == '2') {
                      $this->db->where('b.from_date',$datet);
                    }
                    elseif ($postArr['listtype'] == '3') {
                       $this->db->where('b.to_date',$datet);
                     } else{
                      $this->db->where($where);
                    }    
                    } 
                   }
                    $this->db->order_by('b.booking_id','asc');
                    $this->db->group_by('b.host_id');
                   $select = $this->db->get();
                    //echo $this->db->last_query();die;
          if ($select->num_rows()>0) {
                               $records = $select->result_array();
            foreach ($records as $key=>$value) {
          $this->db->select('b.booking_id,b.from_date,b.to_date,b.guest_id,b.total_guest,u.user_image,u.name,u.user_id,DATEDIFF(b.to_date, b.from_date) 
               AS days');
              $this->db->from('bgpkr_booking as b');
              $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
              $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
              $this->db->join('bgpkr_users as u','u.user_id=b.guest_id','left');
              $this->db->where('b.user_id',$user_id);
              $this->db->where('b.confirm_status','1');
              $this->db->where('bp.payment_status','1');
              $this->db->where('b.host_id',$value['host_id']);
                if (isset($postArr['listtype']) && !empty($postArr['listtype'])) {
                   if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                    if ($postArr['listtype'] == '2') {
                  $this->db->where('year(b.from_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.from_date)',date('m',strtotime($datet)));    
                  }
                    elseif ($postArr['listtype'] == '3') {
                  $this->db->where('year(b.to_date)',date('Y',strtotime($datet)));
                  $this->db->where('month(b.to_date)',date('m',strtotime($datet)));    
                   } else{
                      $this->db->where($where2);
                    }
                   }else{
                   if ($postArr['listtype'] == '2') {
                      $this->db->where('b.from_date',$datet);
                    }
                    elseif ($postArr['listtype'] == '3') {
                       $this->db->where('b.to_date',$datet);
                     } else{
                      $this->db->where($where);
                    }    
                  } 
                   }
                 $this->db->order_by('b.booking_id','asc');
                 $this->db->group_by('b.host_id');
                  $select2 = $this->db->get();
                             $allrecord = $select2->result_array();
                             $records[$key]['alldata']=$allrecord;       
                           }
              $html = '';
              if($records){
              foreach ($records as $valt) {
              $dat=date('Y',strtotime($postArr['date']));
              $month=date('M',strtotime($postArr['date']));
              $dayname = '';
              if (isset($postArr['radiotype']) && !empty($postArr['radiotype']) && $postArr['radiotype']=='2') {
                 $dayname = ''; 
             
              }else{
                 $dayname=date('D',strtotime($postArr['date'])).', ';

                }
           
      $html.='<span class="date"> '.$dayname.''.$month.' '.$dat.' Booking Detail</span>
              <table><tbody>';
                $i=1; foreach ($valt['alldata'] as $valall) {
                  $today = date('Y-m-d');
                  if($valall['from_date']==$today){
                  $r = 'Arrival';
                  }else{
                  $r = 'Departure';
                  }
                  $nstr = ($valall['days']>1)?$valall['days'].' Nights ':$valall['days'].' Night ';
                  $gstr = ($valall['total_guest']>1)?$valall['total_guest'].' Guests':$valall['total_guest'].' Guest';
        $html.='<tr><td width="150">'.$r.'</td><td width="150">'.$nstr.$gstr.'</td><td width="40"><span class="tdimg">';
           if(!empty($valall['user_image'])){ 
         $html.= '<img src="'.$valall['user_image'].'" alt="">';
           }else{
         $html.= '<div class="p_Imagemsg" id="p_Images'.$i.'">'.ucfirst($valall['name'][0]).'</div>';
           } 
           $html.= '</span></td>
                    <td width="30"><a href="'.base_url().'user-chat?guestId='.base64_encode($valall['guest_id']).'"><i class="fa fa-comment" aria-hidden="true"></i></a></td>
                  </tr>';
                $i++; }
    
              $html.= '</tbody></table>';
            
             } }
                              }
             return $html;                 

          }

//===========refund payment=====================//

function refund_payment($booking_id){
$select=$this->db->select('charge_id,paid_amount')->where('booking_id',$booking_id)->get('bgpkr_payment');
$result=$select->row_array();

$stripe = array(
"secret_key" => $this->config->item('stripe_secret'),
"publishable_key" => $this->config->item('stripe_key')
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
try {
$refundResponse = \Stripe\Refund::create([
'charge' => $result['charge_id'],
'amount' => $result['paid_amount'] * 100
]);
}
//catch exception
catch (Exception $e) {
//===========use for error========//  
return $e->getMessage();
}
if($refundResponse->status=="succeeded"){
$this->db->where('booking_id',$booking_id)->set('payment_status','2')->update('bgpkr_payment');
$this->db->where('booking_id',$booking_id)->set('payment_status','2')->update('bgpkr_booking');
return 1;
//echo "sucess";die;  
}else{
  return 0;
//echo "erorrrrrrrrr";  
} 
}

}


           // admin 

           // $notitype="Customized";
           // $title="Bagpackar";
           // $select=$this->db->select('user_id,device_token,device_type')->where_in('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
           // if($select->num_rows()>0){
           //   $result=$select->result_array();
           //     foreach ($result as $key => $value) {
           //    if($select->num_rows()>0){
           //       $result=$select->result_array();
           //       if ($result[0]['device_token'] != '') {
           //       $device_token=$result[0]['device_token'];
           //       $device_type=$result[0]['device_type'];
           //       $message=["title"=>$title,"msg"=>$messages,"type"=>"normal"];
           //       $res=$this->common->notification($device_token,$device_type,$message,$notitype);
           //      }
              
           //    $dataNoti = array('receiver_id' => $user_id,
           //                      'title' => $title,
           //                      'message' => $msg,
           //                      'type' =>  $notitype);
           //        $insert=$this->db->insert('bgpkr_notification',$data);
           //      }
           //    }
           //  }

            //property

            //accept

           // $user_id = ;
           // $title = "Property Approved";    
           // $msg="Admin accepted your request to host the property.";
           // $notitype="Property Request";

           // $select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
           //    if($select->num_rows()>0){
           //       $result=$select->result_array();
           //       if ($result[0]['device_token'] != '') {
           //       $device_token=$result[0]['device_token'];
           //       $device_type=$result[0]['device_type'];
           //       $message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
           //       $res=$this->common->notification($device_token,$device_type,$message,$notitype);
           //      }
           //    }
           //    $dataNoti = array('receiver_id' => $user_id,
           //                      'title' => $title,
           //                      'message' => $msg,
           //                      'type' =>  $notitype);
           //        $insert=$this->db->insert('bgpkr_notification',$data);
           //        if ($insert) {
           //          return 1;
           //        }else{
           //          return false;
           //        }

            //reject
                  
           // $user_id = ;
           // $title = "Property Rejected";    
           // $msg="Admin rejected your request to host the property.";
           // $notitype="Property Request";

           // $select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
           //    if($select->num_rows()>0){
           //       $result=$select->result_array();
           //       if ($result[0]['device_token'] != '') {
           //       $device_token=$result[0]['device_token'];
           //       $device_type=$result[0]['device_type'];
           //       $message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
           //       $res=$this->common->notification($device_token,$device_type,$message,$notitype);
           //      }
           //    }
           //    $dataNoti = array('receiver_id' => $user_id,
           //                      'title' => $title,
           //                      'message' => $msg,
           //                      'type' =>  $notitype);
           //        $insert=$this->db->insert('bgpkr_notification',$data);
           //        if ($insert) {
           //          return 1;
           //        }else{
           //          return false;
           //        }

              //booking host
              
           // $user_id = ;
           // $title = "New Booking Request";    
           // $msg="Someone requested to book your house/villa/Apartment for 3 days.";
           // $notitype="Host Booking";

           // $select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
           //    if($select->num_rows()>0){
           //       $result=$select->result_array();
           //       if ($result[0]['device_token'] != '') {
           //       $device_token=$result[0]['device_token'];
           //       $device_type=$result[0]['device_type'];
           //       $message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
           //       $res=$this->common->notification($device_token,$device_type,$message,$notitype);
           //      }
           //    }
           //    $dataNoti = array('receiver_id' => $user_id,
           //                      'title' => $title,
           //                      'message' => $msg,
           //                      'type' =>  $notitype);
           //        $insert=$this->db->insert('bgpkr_notification',$data);
           //        if ($insert) {
           //          return 1;
           //        }else{
           //          return false;
           //        }