<?php
class Traveller extends CI_Controller {

public function __construct()
{
date_default_timezone_set('UTC');
parent::__construct();
$this->checkBlock();
$this->load->model('web/Traveller_model');
$this->load->library('session');
$this->load->library('S3');   
$this->load->library('Valid_mob'); 
require APPPATH . 'helpers/Common1.php';
}


//=======phone verification============//
function phone_verification(){
$phone=$this->input->post('phone');
$code=strtoupper($this->input->post('code'));
$phoneUtil = $this->valid_mob->load();
$phoneNumberObject = $phoneUtil->parse($phone,$code);
$is_valid_mobile = $phoneUtil->isValidNumberForRegion($phoneNumberObject,$code);
if ($is_valid_mobile == "1") {
echo 1;die;
}else{
echo 0;die;
}
}


//=======s3 upload================//
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


//============Check Email================//
function checkEmailExist1(){
$post = $this->input->post();
if(!empty($post['email']) && isset($post['email'])){
$value=$post['email'];
}
else if(!empty($post['phone']) && isset($post['phone'])){
$value=$post['phone'];
}
$response=$this->Traveller_model->checkEmail($value);
if($response==1)
echo 1;die;
}
//=============contact_us_process============//

function signup(){
$this->load->view('web/signup');
}

//==============Traveller signup================//

function traveller_signup(){
$post=$this->input->post();
$data=["name"=>ucfirst($post['traveller_name']),"email"=>$post['traveller_email'],"country_lang_code"=>strtoupper($post['country_lang_code']),"country_code"=>'+'.$post['country_code'],"phone"=>$post['traveller_phone'],"password"=>md5($post['traveller_password']),"device_token"=>$post['device_token'],"acc_type"=>$post['acc_type'],"google_id"=>$post['google_id'],"fb_id"=>$post['fb_id'],"user_image"=>$post['user_image'],"added_on"=>date('Y-m-d H:i:s'),"dob"=>$post['dob']];
$response=$this->Traveller_model->traveller_signup($data);
if($response != false){
$this->session->set_userdata('webuser_bgpkr',$response);
$user_id=$response['user_id'];
echo $user_id;die;
}
else{
echo 0;die;
}
}

//============= update user profile ============//
function update(){ 
$this->checkLogout();
$user_id=$_SESSION['webuser_bgpkr']['user_id'];
$result['data']=$this->Traveller_model->get_update_data($user_id); 
$this->load->view('web/header');
$this->load->view('web/updateProfile',$result);
// $this->load->view('web/footer');
}

//=========profile_edit============//

function profile_update(){
$this->checkLogout();
$response=""; 
$post=$this->input->post();
if(!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])){
$response=$this->s3_image_upload($_FILES,'users');
}else{
$response=$post['old_image']; 
}

 $govId = [];
 //print_r($_FILES);die;
  if (!empty($_FILES['govtId']['name']))
                 {
                 $j = count($_FILES['govtId']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['govtId']['name'][$i]))
                 {  $this->load->library('upload');
                    $rename= $_FILES['govtId']['name'][$i];
                    $ext = pathinfo($_FILES['govtId']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['govtId']['tmp_name'][$i];
                    $folder = 'hostgovId';
                    $govId[] = $this->fileUpload($picture,$temp_name,$folder);
                 }else{
                    if (!empty($_POST['govimage'][$i])) {
                      $govId[] = $_POST['govimage'][$i];
                    }
                 }
            
              } 
         }else{
 if (isset($_POST['govimage']) && !empty($_POST['govimage'])) {
        $be = count($_POST['govimage']);
        for($i=0;$i<$be;$i++){
          if (!empty($_POST['govimage'][$i])) {
            $govId[] = $_POST['govimage'][$i];
          }
          
        }
      }
    }

          
//print_r($govId);die();
$data=["name"=>$post['name'],"phone"=>$post['phone'],"email"=>$post['email'],"country_code"=>$post['country_code'],"country_lang_code"=>strtoupper($post['country_lang_code']),"user_image"=>$response,"updated_on"=>date('Y-m-d'),"user_id"=>$post['user_id'],"dob"=>$post['dob'],"government_id1"=>$govId[0],"government_id2"=>$govId[1]];
$response=$this->Traveller_model->profile_update($data);
if($response!=0){
$this->session->set_userdata('webuser_bgpkr',$response);
echo 1;die;
}else{
echo 0;die;
}
}

/*================= Function for s3 multiple image upload ===================*/
      function fileUpload($name,$temp_name,$folder){
        
        if($this->s3->putObjectFile($temp_name, "bagpackaer-s3","$folder/$name", S3::ACL_PUBLIC_READ)) {
        return "https://bagpackaer-s3.s3.us-west-2.amazonaws.com/".$folder."/".$name;
        }else{
        echo "Something went wrong while uploading your file... sorry";
        exit();
        }
     }

//============ Check_email_phone================//
function Check_email_phone(){
$post = $this->input->post();
$data=[];
if(!empty($post['email']) && isset($post['email'])){
$data=["email"=>$post['email'],"code"=>"1"];
}
else if(!empty($post['phone']) && isset($post['phone'])){
$data=["phone"=>$post['phone'],"code"=>"0"];
}
$data['user_id']=$post['user_id'];
$response=$this->Traveller_model->Check_email_phone($data);
if($response==1){
echo 1;die();
}else{
echo 0;die();	
}
}




//===========web_reset_password=================//

function web_reset_password(){
$this->checkLogout();
$user_id=$_SESSION['webuser_bgpkr']['user_id'];
$post=$this->input->post();
$response=$this->Traveller_model->web_reset_password($post,$user_id);
if($response==1){
echo 1;die;
}else if($response==2){
echo 2;die;
}else{
echo 0;die;
}

}

//=======forgot=================//

function forgot(){
$this->load->view('web/forgot'); 
}
//============forgot process====================//

function forgot_process(){
$email=$this->input->post('forgot_email');
$response=$this->Traveller_model->forgot_process($email);
// print_r($response);die;
if($response!='3' && $response!='2'){
$token=$response->forgot_token;
$name = (!empty($response->name))?$response->name:'';
$logo=base_url().'assets/images/logo.png';
$email=$response->email;  
$link=base_url().'reset?email='.base64_encode($email).'&token='.base64_encode($token).'';
$subject="Password Recovery.";
$body="Hello ".$name.","."<p>We have received a request to reset the password for bagpacker.</p><a target='_blank' href='".$link."' data-saferedirecturl='https://www.google.com/url?q='".$link."'>Reset Password</a><br><br>If above link is not working then copy below url and paste it into browser address bar and hit enter.<br>$link<p>The link can be used only one time.</p><p>Thanks</p><h3>Bagpackar Support Team</h3>";
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
$res = $mail->email_user($email, $body,$subject);
if($res==1){
echo 1 ;die();
}else{
echo 0;die();
}
}elseif ($response==2) {
echo 2;die();
}
else{
echo 3 ;die();
} 
}



/*================reset=============*/

function reset(){
$emails=base64_decode($this->input->get('email'));
$token=base64_decode($this->input->get('token'));
$response=$this->Traveller_model->checkstatus($emails,$token);
if($response==1){
$email['data']=$emails;
$this->load->view('web/reset',$email);
}else{
$this->session->set_flashdata('error','<div class="alert alert-danger text-center" id="error">This link has been expired <br>Please try again.</div>');
redirect('status');
}
}

//==================reset process=======================================//

function reset_process(){
$post=$this->input->post();
$random=new common1();
$token = $random->generateRandomString();
$data=["email"=>$post['email'],"password"=>md5($post['password']),"forgot_token"=>$token];
$result=$this->Traveller_model->reset_process($data);
if($result==1){
$this->session->set_flashdata('success','<div class="alert alert-success text-center" id="successMessage">Your password has been successfully changed.<br>Please log back into your bagpackar account using your new password.<br>
Thank you!</div>');
redirect('status');
}
else if($result==2){
$this->session->set_flashdata('error','<div class="alert alert-danger text-center" id="error">Something Went Wrong!</div>');
redirect('status');
}
}

//===========status=================//

function status(){
$this->load->view('web/status');
}
//=====check logout============//
public function checkLogout(){
$sessionData=$this->session->userdata('webuser_bgpkr');
if(!$sessionData){
redirect('host');
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

}