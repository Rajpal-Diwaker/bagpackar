<?php
class Admin_forgot_model extends CI_Model
{


//========forgot process=============//
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
   $select1=$this->db->select('email,forgot_token,name')
                    ->where('email',$email)
                    ->get('bgpkr_admin');
   $result=$select1->row();
   return $result; 
  }                
 }else{
  return []; 
 }                
}


/*=================users checkstatus===========*/

function checkstatus($emails,$token){
$select=$this->db->where('email',$emails)
                 ->where('forgot_token',$token)
                  ->get('bgpkr_admin');
 if($select->num_rows()>0){
 return 1;
 }else{
  return 2;
 } 
}


function reset_process($data){
$select=$this->db->where('email',$data['email'])
                  ->get('bgpkr_admin');             
 if($select->num_rows()>0){
 $update=$this->db->where('email',$data['email'])
                  ->set('password',$data['password'])
                  ->set('forgot_token',$data['token'])
                  ->update('bgpkr_admin');                    
   if($update==1){
    return 1;
   }else{
    return 2;
   }                
 }                 
}


}//class