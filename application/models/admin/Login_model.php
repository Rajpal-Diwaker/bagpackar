<?php
class Login_model extends CI_Model
{

//============login process=================//

function login_process($data){
$query = $this->db->query("SELECT * FROM bgpkr_admin WHERE email = ? AND password = md5(?)",[$data['email'],$data['password']]);
if($query->num_rows()>0){
$result = $query->row_array();
return $result; 
}else{
  return 0;
} 
}  

//==========forgot process=============//
function forgot_process($email){
$select=$this->db->where('email',$email)
                 ->get('bgpkr_admin');
 if($select->num_rows()>0){
$random=new common1();
$token = $random->generateRandomString();
$update=$this->db->set('forgot_token',$token)
                 ->where('email',$email)
                 ->update('bgpkr_admin');
  if($update==1){
   $select1=$this->db->where('email',$email)->get('bgpkr_admin');
   $result=$select1->row();
   return $result; 
  }                
 }else{
  return []; 
 }                
}
   
}