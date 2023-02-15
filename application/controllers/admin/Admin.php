<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $admin_email=$this->session->userdata('admin_email');
    if($admin_email!='' && isset($admin_email)){
     $this->load->model('admin/Adminmodel');
     $this->load->library('pagination');  
     $this->load->library('S3');
     require APPPATH . 'helpers/Common1.php';  
   }else{
    redirect('admin/login');
  }
}	
//=========end construct function==========// 
//==========s3 base 64 file upload=============//  
function s3_base64_upload($tmp_name,$folder){
$common=new Common1();
$string=$common->generateRandomString();
$image_parts = explode(";base64,", $tmp_name);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$name =rand(100, 999) . '-' . $string.'.'.$image_type;
if($this->s3->putObject($image_base64,'bagpackaer-s3',"$folder/$name",S3::ACL_PUBLIC_READ)){
return "https://bagpackaer-s3.s3.us-west-2.amazonaws.com/".$folder."/".$name;
}else{
echo "Something went wrong while uploading your file... sorry";
exit();
} 
}

//================use only simple file upload===================//

function s3_image_upload($FILES,$folder){
  $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
  $common=new Common1();
  $string = $common->generateRandomString();
  $name = rand(100, 999) . '-' . $string.'.'.$ext;
  $tmp_name=$FILES['image']['tmp_name'];
  if($this->s3->putObjectFile($tmp_name, "bagpackaer-s3","$folder/$name", S3::ACL_PUBLIC_READ)) {
    return "https://bagpackaer-s3.s3.us-west-2.amazonaws.com/".$folder."/".$name;
  }else{
   echo "Something went wrong while uploading your file... sorry";
   exit();
 } 
}
//===========dashbaord==========//

function dashboard(){
  $data = $this->Adminmodel->dashboardData();
  $this->Adminmodel->host_previous_month_payment();
  $this->Adminmodel->host_current_month_payment();
  $this->load->view('admin/header');
  $this->load->view('admin/dashboard',$data);
}


//===========Userlist===========//
function user_list(){
	$this->load->view('admin/header');
	$this->load->view('admin/userlist');
}

//===========transactions list===========//
function transactions_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/transactionslist');
}

//===========get transactions list===========//
function transactionslist(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->transactionslist($postData);
 echo json_encode($data);
}

//===========admin to host Payment list===========//
function hostpay_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/adminTohostPay');
}

//===========get host payment list===========//
function hostpaylist(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->hostpaylist($postData);
 echo json_encode($data);
}

//===========cancelled_list===========//
function cancelled_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/cancelled_list');
}

//===========CancelBooking===========//
function CancelBooking(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->CancelBooking($postData);
 echo json_encode($data);
}

//===========get user list===========//
function get_users(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->getUsers($postData);
 echo json_encode($data);
}

//===========Newsletter===========//
function newsletter_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/newsletter_list');
}

//===========get news letter===========//
function get_newsletter(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_newsletter($postData);
 echo json_encode($data);
}

//============delete user================//

function deleteuser(){
  $user_id=$this->input->get('user_id');
  $result=$this->Adminmodel->deleteuser($user_id);
  if($result==1){
   redirect('admin/user-list');
 }else{
   redirect('admin/user-list');
 }
}

//=========block user============//

function block_user(){
  $user_id=$this->input->post('id');
  $user_status=$this->input->post('active');
  $data=["user_id"=>$user_id,"user_status"=>$user_status];
  $response=$this->Adminmodel	->block_user($data);
  if($response==1){
    echo 1;die;
  }else{
   echo 0;die;
 }
}

//============User details============//

function user_detail(){
 $user_id=$this->input->get('id');
 $result['data']=$this->Adminmodel->user_detail($user_id); 
 $this->load->view('admin/header');
 $this->load->view('admin/user_detail',$result);	
}


//===========edit_user=============//

function edit_user(){
  $post=$this->input->post();
  $data=["user_id"=>$post['user_id'],"name"=>$post['name'],"email"=>$post['email']];
  if(!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])){
    $user_image=$this->user_fileUpload($_FILES);
    $data['user_image']=$user_image;
  }
  $response=$this->Adminmodel->edit_user($data);
  if($response==1){
   echo 1;die();
 }else{
   echo 0;die();
 }
}

//================Popular Destination List==========//
function popular_destination_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/popular_destination_list');
}

//===========get_popular_destination===========//
function get_popular_destination(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_popular_destination($postData);
 echo json_encode($data);
}

 //=================populatr designitation=============//
public function popular_destination(){
 $this->load->view('admin/header');
 $this->load->view('admin/popular_destination');
}   

  //========popular_destination_process==========//

function popular_destination_process(){
  $response=""; 
  $post=$this->input->post();
  if(!empty($post['image'])){
    $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }
  $data=["image"=>$response,"country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"added_on"=>date('Y-m-d')];
  $result=$this->Adminmodel->popular_destination_process($data);
  if($result==1){
    echo 1;die;
  }else{
    echo 0;die;
  }  
}

//============deletepopular ================//

function deletepopular(){
  $pd_id=$this->input->get('pd_id');  
  $result=$this->Adminmodel->deletepopular($pd_id);
  if($result==1){
   redirect('admin/popular-destination-list');
 }else{
   redirect('admin/popular-destination-list');
 }
}


//================discover_list==========//
function discover_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/discover_list');
}

//===========get_discover===========//
function get_discover(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_discover($postData);
 echo json_encode($data);
}

 //=================discover=============//
public function discover(){
 $this->load->view('admin/header');
 $this->load->view('admin/discover');
}   

  //========discover_process==========//

function discover_process(){
  $response=""; 
  $post=$this->input->post();
  if(!empty($post['image'])){
    $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }
  $data=["image"=>$response,"country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"added_on"=>date('Y-m-d')];
  $result=$this->Adminmodel->discover_process($data);
  if($result==1){
    echo 1;die;
  }else{
    echo 0;die;
  }  
}


//============deletediscover ================//

function deletediscover(){
  $d_id=$this->input->get('d_id');  
  $result=$this->Adminmodel->deletediscover($d_id);
  if($result==1){
   redirect('admin/discover-list');
 }else{
   redirect('admin/discover-list');
 }
}



//================stay_home_list==========//
function stay_home_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/stay_home_list');
}

//===========get_stay_home===========//
function get_stay_home(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_stay_home($postData);
 echo json_encode($data);
}

 //=================stay_home=============//
public function stay_home(){
 $this->load->view('admin/header');
 $this->load->view('admin/stay_home');
}   

  //========stay_home_process==========//

function stay_home_process(){
  $response=""; 
  $post=$this->input->post();
  if(!empty($post['image'])){
    $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }
  $data=["image"=>$response,"country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"added_on"=>date('Y-m-d')];
  $result=$this->Adminmodel->stay_home_process($data);
  if($result==1){
    echo 1;die;
  }else{
    echo 0;die;
  }  
}


//============deletestay_home ================//

function deletestay_home(){
  $sh_id=$this->input->get('sh_id');  
  $result=$this->Adminmodel->deletestay_home($sh_id);
  if($result==1){
   redirect('admin/stay-home-list');
 }else{
   redirect('admin/stay-home-list');
 }
}

//================most_popular_list==========//
function most_popular_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/most_popular_list');
}

//===========get_most_popular===========//
function get_most_popular(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_most_popular($postData);
 echo json_encode($data);
}

 //=================most_popular=============//
public function most_popular(){
 $this->load->view('admin/header');
 $this->load->view('admin/most_popular');
}   

  //========stay_home_process==========//

function most_popular_process(){
  $response=""; 
  $post=$this->input->post();
  if(!empty($post['image'])){
    $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }
  $data=["image"=>$response,"country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"added_on"=>date('Y-m-d'),"title"=>$post['title'],"body"=>$post['body']];
  $result=$this->Adminmodel->most_popular_process($data);
  if($result==1){
    echo 1;die;
  }else{
    echo 0;die;
  }  
}


//============deletestay_home ================//

function deletemost_popular(){
  $mp_id=$this->input->get('mp_id');  
  $result=$this->Adminmodel->deletemost_popular($mp_id);
  if($result==1){
   redirect('admin/most-popular-list');
 }else{
   redirect('admin/most-popular-list');
 }
}

//=========edit most popular===============//

function edit_most_popular(){
$mp_id=base64_decode($this->input->get('id'));
 $result['data']=$this->Adminmodel->edit_most_popular($mp_id);
 $this->load->view('admin/header');
 $this->load->view('admin/edit_most_popular',$result); 
}

//===========edit most popular process===============//


function edit_popular_process(){
  $response=""; 
  $post=$this->input->post();
  if(!empty($post['image'])){
  $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }else{
   $response=$post['old_image']; 
  } 
 $data=["country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"updated_on"=>date('Y-m-d'),"mp_id"=>$post['mp_id'],"image"=>$response,"title"=>$post['title'],"body"=>$post['body']];
 $result=$this->Adminmodel->edit_popular_process($data);
 if($result==1){
  echo 1;die;
}else{
  echo 0;die;
}  
}

//==========Edit Image==============//

function edit_image(){
  $path=base64_decode($this->input->get('page'));
  $id=$this->input->get('id');
  if($path=="popular_destination" || $path=="discover" || $path=="stay_home" ){
    $data['result']=$this->Adminmodel->edit_image($id,$path);
    $data['path']=$path;
    if($path=="popular_destination"){
      $data['page']="Edit Popular Destination Image";
      $data['image_label']="Popular Image";
      $data['redirect_path']="admin/popular-destination-list";   
    }else if($path=="discover"){
      $data['page']="Edit Discover Image";
      $data['image_label']="Discover Image";
      $data['redirect_path']="admin/discover-list";
    }else if($path=="stay_home"){
      $data['page']="Edit Stay Home Image";
      $data['image_label']="Stay Home Image";
      $data['redirect_path']="admin/stay-home-list";   
    }
    $this->load->view('admin/header');
    $this->load->view('admin/edit_image',$data);
  }else{
    redirect('admin/popular-destination-list');
  }
}
//=========Edit Image process==================//

function edit_image_process(){
  $response=""; 
  $post=$this->input->post();
  $path=$post['path'];
  if(!empty($post['image'])){
  $response=$this->s3_base64_upload($post['image'],'AllHomeImages');
  }else{
   $response=$post['old_image']; 
  } 
 $data=["country"=>$post['country'],"city"=>$post['city'],"address"=>$post['address'],"latitude"=>$post['latitude'],"longitude"=>$post['longitude'],"updated_on"=>date('Y-m-d'),"id"=>$post['id'],"image"=>$response];
 $result=$this->Adminmodel->edit_image_process($data,$path);
 if($result==1){
  echo 1;die;
}else{
  echo 0;die;
}  
}


//================property request list==========//
function property_request_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/property_request_list');
}

//===========get_property_request_list===========//
function get_property_request(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->get_property_request($postData);
 echo json_encode($data);
}
//=========approve property========//
function approve_property(){
  $host_id=$this->input->post('host_id');
  $status=$this->input->post('status');
  $result=$this->Adminmodel->approve_property($host_id,$status);
  if($result==1){
   echo 1;die; 
 }else{
   echo 0;die; 
 }  
}

//================property_list==========//
function property_list(){
  $this->load->view('admin/header');
  $this->load->view('admin/active_property_list');
}

//===========get_property_request_list===========//
function active_property(){
 $postData = $this->input->post();
 $data = $this->Adminmodel->active_property($postData);
 echo json_encode($data);
}

//================view_property==========//
function view_property(){
  $host_id=$this->input->get('id');
  $result['data']=$this->Adminmodel->view_property($host_id);
  $result['guestknow'] = $this->Adminmodel->guestKnow($host_id);
  $result['thingtakecare'] = $this->Adminmodel->thingTakeCare($host_id);
  $this->load->view('admin/header');
  $this->load->view('admin/view_property',$result);
}

//===========send push=============//

function send_push(){
 $result['data']=$this->Adminmodel->send_push(); 
 $this->load->view('admin/header'); 
 $this->load->view('admin/send_push',$result);
}

/*=========Function for change password ==========*/
public function change_password(){
  $this->load->view('admin/header');
  $this->load->view('admin/change_password');
} 

function change_password_process(){
  $post=$this->input->post();
  $admin_id=$this->session->userdata('admin_id');
  $post['admin_id']=$admin_id;
  $result=$this->Adminmodel->change_password_process($post);
  if($result==1){  
   echo 1;die;    
 }else{
   echo 0;die;
 }
}



//=========send_notification_process=============//

function send_notification_process(){
  $user_id=$this->input->post('user_id');
  $message=$this->input->post('message');
  $response=$this->Adminmodel->send_notification_process($user_id,$message);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//=============Newsletter Send Email================//

function newsletter(){
 $result['data']=$this->Adminmodel->newsletter();   
$this->load->view('admin/header');
$this->load->view('admin/newsletter',$result);
} 

//============send_newsmail=====================//
function send_newsmail(){
$post=$this->input->post(); 
for ($i=0; $i < count($post['email']) ; $i++) { 
$logo=base_url().'assets/images/logo.png';
$subject="Newsletter Email.";
$body=$post['body'];
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type: text/html; charset=ISO-8859-1\r\n">
<title>' . html_escape($subject) . '</title>
<style type="text/css">
body {
font-family: Arial, Verdana, Helvetica, sans-serif;
font-size: 16px;
}
p{
margin-bottom:20px;
}
</style> 
</head>
<body>
</html>';
$mail = new Common1();
$res=$mail->email_user($post['email'][$i],$body,$subject);
}
echo 1;die();
}


//=================terms & condition=======================//

function terms_condition(){
  $result['data']=$this->Adminmodel->terms_condition();
  $this->load->view('admin/header');
  $this->load->view('admin/terms_condition',$result); 
}

//==================update_terms=================//
function update_terms(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_terms($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//=================privacy_policy=======================//

function privacy_policy(){
  $result['data']=$this->Adminmodel->privacy_policy();
  $this->load->view('admin/header');
  $this->load->view('admin/privacy_policy',$result); 
}

//==================update_terms=================//
function update_privacy(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_privacy($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//=================help N support=======================//

function helpNsupport(){
  $result['data']=$this->Adminmodel->helpNsupport();
  $this->load->view('admin/header');
  $this->load->view('admin/helpNsupport',$result); 
}

//==================update help N support=================//
function update_helpSupport(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_helpSupport($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//=================cancel n Refund=======================//

function cancelRefund(){
  $result['data']=$this->Adminmodel->cancelRefund();
  $this->load->view('admin/header');
  $this->load->view('admin/cancelRefund',$result); 
}

//==================update cancel n Refund=================//
function update_cancelRefund(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_cancelRefund($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//=================covid-19 guidelines=======================//

function covid19_guidelines(){
  $result['data']=$this->Adminmodel->covid19_guidelines();
  $this->load->view('admin/header');
  $this->load->view('admin/covid19_guidelines',$result); 
}

//==================update covid-19 guidelines=================//
function update_covid19_guidelines(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_covid19_guidelines($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//================= referral program =======================//

function referral(){
  $result['data']=$this->Adminmodel->referral();
  $this->load->view('admin/header');
  $this->load->view('admin/referral',$result); 
}

//==================update referral program=================//
function update_referral(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_referral($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//================= rcareer =======================//

function career(){
  $result['data']=$this->Adminmodel->career();
  $this->load->view('admin/header');
  $this->load->view('admin/career',$result); 
}

//==================update career program=================//
function update_career(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_career($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//================= about_us =======================//

function about_us(){
  $result['data']=$this->Adminmodel->about_us();
  $this->load->view('admin/header');
  $this->load->view('admin/about_us',$result); 
}

//==================update about_us =================//
function update_about_us(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_about_us($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}


//================= business_travel =======================//

function business_travel(){
  $result['data']=$this->Adminmodel->business_travel();
  $this->load->view('admin/header');
  $this->load->view('admin/business_travel',$result); 
}

//==================update_business_travel=================//
function update_business_travel(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_business_travel($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}

//================= why_host =======================//

function why_host(){
  $result['data']=$this->Adminmodel->why_host();
  $this->load->view('admin/header');
  $this->load->view('admin/why_host',$result); 
}

//==================update_why_host =================//
function update_why_host(){
  $post=$this->input->post();
  $response=$this->Adminmodel->update_why_host($post);
  if($response==1){
    echo 1;die;
  }else{
    echo 0;die;
  }
}


}///////class====================//
