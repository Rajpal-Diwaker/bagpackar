<?php
class Chatmodel extends CI_Model
{

function user_information($user_id){	
$select=$this->db->select('user_id,email,name,user_image')
->where('user_id',$user_id)
->get('bgpkr_users');
if($select->num_rows()>0){
$result=$select->row_array();
$select1=$this->db->select('booking_id')->where('user_id',$user_id)->where('payment_status','1')->limit(1)->get('bgpkr_booking');
if($select1->num_rows()>0){
$result['sender_type']="host";
$result['reciver_type']="guest";		
}else{
$result['sender_type']="guest";
$result['reciver_type']="host";	
}
return $result;
}else{
return [];
}                

}  



}