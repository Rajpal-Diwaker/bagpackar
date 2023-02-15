<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'helpers/Common1.php';

class Booking extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session'); 
		$this->checkBlock();
		$Guest_id=$_SESSION['webuser_bgpkr']['user_id'];
		if(isset($Guest_id) && !empty($Guest_id)){	
			$this->load->library('user_agent');
			$this->load->model('web/Booking_model');
			$this->load->library('facebook');
		}else{
			redirect(base_url());
		}
	}
	
//=================Guest Booking=================//
	function reservation(){
		$guest=$this->session->userdata('webuser_bgpkr');
		$result['data']=$this->Booking_model->reservation_data($guest['user_id']);
		$result['amount']=$this->Booking_model->referral_amount($guest['user_id']);
		$this->load->view('web/header');
		$this->load->view('web/reservation',$result);
		$this->load->view('web/footer');
	}  

//===========msgowner======================//

	function msgowner(){
		$post=$this->input->post();
		$data=["s_id"=>$post['user_id'],"r_id"=>$post['host_user_id'],"msg"=>"Hello","action"=>"","url"=>"","thumb_url"=>"","msg_type"=>"text","chat_type"=>"normal","read_status"=>$post['host_user_id'],"delete_for_everyone"=>"0","deleted_by"=>"","date_added"=>date("Y-m-d H:i:s"),"sender_type"=>"guest","reciver_type"=>"host"];
		$result=$this->Booking_model->msgowner($data);
		if($result==1){
			echo 1;die();
		}else{
			echo 0;die();
		}	
	}

 
 //=========payments========================//

function payments(){
$guest_id=$_SESSION['webuser_bgpkr']['user_id'];
$result['data']=$this->Booking_model->guest_payments($guest_id);
$this->load->view('web/header');
$this->load->view('web/guest_payments',$result);
$this->load->view('web/footer');

}	

//==============cancelBooking==================//

function cancelBooking(){
$post=$this->input->post();
$result=$this->Booking_model->cancelBooking(base64_decode($post['booking_id']));
if($result==1){
echo 1;die();
}else{
echo 0;die();	
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

}//=============classs==================//