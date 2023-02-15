<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fb extends CI_Controller {
	
	function __construct() {
		parent::__construct();
    $this->checkBlock();
		date_default_timezone_set('UTC');
		$this->load->library('facebook');
		$this->load->model('web/Google_login_model');
		$this->load->library('session');
    }
	
public function fb_login(){
	  $userData = array();
	  if($this->facebook->is_authenticated()){
     $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
      if(empty($userProfile['id'])){
      	 $this->session->set_flashdata('error','1');
          redirect('login','refresh');
      }
	  $first_name = (!empty($userProfile['first_name']))?$userProfile['first_name']:'';
	  $last_name = (!empty($userProfile['last_name']))?$userProfile['last_name']:'';
      $email = (!empty($userProfile['email']))?$userProfile['email']:'';
         $data=["name"=>$first_name.' '.$last_name,"email"=>$email,"device_token"=>'',"acc_type"=>"fb","fb_id"=>$userProfile['id'],"added_on"=>date('Y-m-d H:i:s')];
         $response=$this->Google_login_model->fb_signup($data);
          if(!empty($response)){
          // $this->session->set_userdata('name',$data['name']);
          // $this->session->set_userdata('email',$data['email']);
          $this->session->set_userdata('webuser_bgpkr',$response);
          $this->session->set_flashdata('response','1');
          $base_url=base_url();
	        redirect($base_url,'refresh');
          } 
		}
		else
		{
          $this->session->set_flashdata('error','1');
          redirect('login','refresh');

        }
    }

	public function logout() {
		$this->facebook->destroy_session();
		redirect('/login');
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
