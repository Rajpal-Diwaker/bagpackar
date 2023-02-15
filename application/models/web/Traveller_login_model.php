<?php
class traveller_login_model extends CI_Model
{

/*=============login process==========*/

public function login_process($data) { 
$select=$this->db->select('user_id,email,name,acc_type,user_image')
                 ->where('email',$data['email'])
                 ->where('password',$data['password'])
                 ->where('user_status','1')
                 ->get('bgpkr_users');
if($select->num_rows()>0){    
	$result = $select->row();
 $this->db->set('device_token',$data['device_token'])->where('user_id',$result->user_id)->update('bgpkr_users');   
	$arr = [];
    $arr['user_id'] = $result->user_id;
    $arr['email'] = $result->email? $result->email : '';
    $arr['name'] = $result->name ? $result->name : '';
    $arr['account_type'] = $result->acc_type ? $result->acc_type : '';
    $arr['image'] = $result->user_image ? $result->user_image : '';
  return $arr;
}else{
  return false;
}                   
}

/* ====================== User Information ===================== */
  

}