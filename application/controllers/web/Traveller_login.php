<?php
class Traveller_login extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set('UTC');
		parent::__construct();
		// $this->checkBlock();
		$this->load->library('session');
		$this->load->model('web/Traveller_login_model');
	}
	/*===============Login Process===============*/
	public function login_process(){	
		$post = $this->input->post();
		$res=$this->check_user_status($post['login_email'],md5($post['login_password']));
		if($res!=1){
			echo $res;die();
		} 
		$data=['email'=>$post['login_email'],'password'=>md5($post['login_password']),"device_token"=>$post['device_token']];
		$response = $this->Traveller_login_model->login_process($data);
		if($response != false){
			$this->session->set_userdata('webuser_bgpkr',$response);
			$user_id=$response['user_id'];
			echo $user_id;die;
		}
		else{
			echo 0;die;	
		} 
	}
//=========== logout ================//
	public function logout(){	
		$pageCheck = isset($_GET['check'])?'1':'0';
		$this->session->unset_userdata('webuser_bgpkr');
		$this->session->unset_userdata('guest_city');
		$this->session->unset_userdata('guest_country');
		$this->session->unset_userdata('host_data');
		$this->session->unset_userdata('share_domain');
		$this->session->unset_userdata('share_code'); 
		if($pageCheck !='1'){
			redirect(base_url());
		}
		else{
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


  //================check_user_status=================================//

	function check_user_status($email,$password){
		$select=$this->db->select('user_status,delete_status')
		->where('email',$email)
		->where('password',$password)
		->get('bgpkr_users');
		if($select->num_rows()>0){
			$result=$select->row_array();
			if($result['user_status']=='0'){
				return 'block';
			}elseif ($result['delete_status']=='1') {
				return 'deleted';
			}else{
				return 1;
			}
		}else{
			return 1;
		}                  
	}			

}