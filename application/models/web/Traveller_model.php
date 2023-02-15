	<?php
class Traveller_model extends CI_Model
{
//===============Check Email phone============//
function checkEmail($value){
$select=$this->db->where('email',$value)
->or_where('phone',$value)
->get('bgpkr_users');
if($select->num_rows()>0){
return 1;
}else{
return 0;
}                  
}

//==========traveller_signup============//

function traveller_signup($data){
$insert=$this->db->insert('bgpkr_users',$data);
$insert_id=$this->db->insert_id();
if($insert_id>0){
$result=$this->getuserinfo($insert_id);
$firstname = strtok($result['name'], ' ');
$name=trim($firstname);
$user_code=$name.$result['user_id'];
$this->db->set('user_code',$user_code)->where('user_id',$result['user_id'])->update('bgpkr_users');
if(isset($_SESSION['share_domain']) && !empty($_SESSION['share_domain']) && isset($_SESSION['share_code']) && !empty($_SESSION['share_code'])){
$share_domain=$this->session->userdata('share_domain');
// if($share_domain=="localhost"){
if($share_domain=="www.bagpackar.in"){
$amount=20;
$currency="rupee";	
}else{
$currency="dollar";	
$amount=10;	
}
$share_code=$this->session->userdata('share_code');	
$newresult=$this->check_code($share_code);
if(!empty($newresult)){
$newdata=["user_id"=>$newresult['user_id'],"refer_user_id"=>$insert_id,"currency"=>$currency];
$this->db->insert('bgpkr_referral',$newdata);
$referamountdata=["user_id"=>$insert_id,"amount"=>$amount];
$this->db->insert('bgpkr_referral_amount',$referamountdata);
return $result;	
}else{
return $result;	
}//==============wrong referal code===============//
$this->session->unset_userdata('share_domain');
$this->session->unset_userdata('share_code'); 
}//===========check code and server domain==============//
return $result;
}else{
return false;
} 
}

//=======profile_update=============//

function profile_update($data){
$select=$this->db->where('user_id',$data['user_id'])
->get('bgpkr_users');
if($select->num_rows()>0){
$update=$this->db->where('user_id',$data['user_id'])->update('bgpkr_users',$data);
return ($this->getuserinfo($data['user_id']));
}else{
return 0;
}                  
}

/* ====================== User Information ===================== */

function getuserinfo($user_id)
{ 
$this->db->select('user_id,email,name,acc_type,user_image');
$this->db->from('bgpkr_users');
$this->db->where('user_id',$user_id);
$query = $this->db->get();
$result = $query->row();
$arr = [];
$arr['user_id'] = $result->user_id;
$arr['email'] = $result->email? $result->email : '';
$arr['name'] = $result->name ? $result->name : '';
$arr['account_type'] = $result->acc_type ? $result->acc_type : '';
$arr['image'] = $result->user_image ? $result->user_image : '';
return $arr;
}


//========forgot process=============//
function forgot_process($email){
$select=$this->db->select('acc_type')
                ->where('email',$email)
                ->get('bgpkr_users');
if($select->num_rows()>0){
$result=$select->row_array();
if($result['acc_type']!="normal"){
return 2; 
}else{  
$random=new common1();
$token = $random->generateRandomString();
$update=$this->db->set('forgot_token',$token)->where('email',$email)->update('bgpkr_users');
if($update==1){
$select1=$this->db->select('email,forgot_token,name')->where('email',$email)->get('bgpkr_users');
$result1=$select1->row();
return $result1;                 
}
} 
}               
else{
return 3;
}
}


/*=================users checkstatus===========*/

function checkstatus($emails,$token){
$select=$this->db->where('email',$emails)
->where('forgot_token',$token)
->get('bgpkr_users');
if($select->num_rows()>0){
return 1;
}else{
return 2;
} 
}


function reset_process($data){
$select=$this->db->where('email',$data['email'])
->get('bgpkr_users');             
if($select->num_rows()>0){
$update=$this->db->where('email',$data['email'])
->set('password',$data['password'])
->set('forgot_token',$data['token'])
->update('bgpkr_users');                    
if($update==1){
return 1;
}else{
return 2;
}                
}                 
}

//=========get_update_data===================//

function get_update_data($user_id){
$select=$this->db->select('user_id,name,email,phone,user_image,country_lang_code,country_code,acc_type,dob,government_id1,government_id2')
->where('user_id',$user_id)
->get('bgpkr_users');
if($select->num_rows()>0){
$result=$select->row_array();
return $result;
}else{
return [];
}             
}

//=========web_reset_password=============//

function web_reset_password($post,$user_id){
$old_password=md5($post['old_password']);
$password=md5($post['password']);  
$select=$this->db->select('password')
->where('password',$old_password)
->where('user_id',$user_id)
->get('bgpkr_users');
if($select->num_rows()>0){
$update=$this->db->where('user_id',$user_id)->set('password',$password)->update('bgpkr_users');
if($update==1){
return 1;
}else{
return 0;
}  
}else{
return 2;
}                  
}

//==========check_code=========================//

function check_code($user_code){
$select=$this->db->select('user_id,user_code')->where('user_code',$user_code)->get('bgpkr_users');
if($select->num_rows()>0){
$result=$select->row_array();
return $result;	
}else{
return [];
}	
}

//===================Check_email_phone==========================//

function Check_email_phone($data){
if($data['code']=="1"){
$select=$this->db->select('email')
                 ->where('email',$data['email'])
                 ->where_not_in('user_id',$data['user_id'])
                 ->get('bgpkr_users');
if($select->num_rows()>0){
return 1;
}else{
return 0;
}                  
}else{
$select1=$this->db->select('phone')
                 ->where('phone',$data['phone'])
                 ->where_not_in('user_id',$data['user_id'])
                 ->get('bgpkr_users');
if($select1->num_rows()>0){
return 1;
}else{
return 0;
} 	
}
}


}//class