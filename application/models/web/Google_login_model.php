<?php
class Google_login_model extends CI_Model
{

//==========traveller_signup============//

function google_signup($data){
$select=$this->db->select('user_id,google_id')
                 ->where('google_id',$data['google_id'])
                 ->get('bgpkr_users');
if($select->num_rows()>0){
   $result = $select->row();
 $user_id = $result->user_id;
return ($this->getuserinfo($user_id));
} 
$select1=$this->db->select('user_id,email')
                  ->where('email',$data['email'])
                  ->get('bgpkr_users');
if($select1->num_rows()>0){
$this->db->where('email',$data['email'])->update('bgpkr_users',$data);
 $result = $select1->row();
 $user_id = $result->user_id;
return ($this->getuserinfo($user_id));
}               
else{
 $insert=$this->db->insert('bgpkr_users',$data);
 if($insert_id>0){
  $insert_id=$this->db->insert_id();
  return ($this->getuserinfo($insert_id));
 } 
}
}

//======fb signup=============//
function fb_signup($data){
$select=$this->db->select('user_id,fb_id')
                 ->where('fb_id',$data['fb_id'])
                 ->get('bgpkr_users');
if($select->num_rows()>0){
  $result = $select->row();
 $user_id = $result->user_id;
return ($this->getuserinfo($user_id));
}
$select1=$this->db->select('user_id,email')
                  ->where('email',$data['email'])
                  ->get('bgpkr_users');
if($select1->num_rows()>0){
$this->db->where('email',$data['email'])->update('bgpkr_users',$data);
 $result = $select1->row();
 $user_id = $result->user_id;
return ($this->getuserinfo($user_id));
}
else{
 $insert=$this->db->insert('bgpkr_users',$data);
 if($insert>0){
  $insert_id=$this->db->insert_id();
  return ($this->getuserinfo($insert_id));
 } 
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

}//class