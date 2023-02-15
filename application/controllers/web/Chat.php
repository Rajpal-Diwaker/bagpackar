<?php
class Chat extends CI_Controller {
	
   public function __construct()
   {
     parent::__construct();
     $this->load->library('session'); 
     $this->checkBlock();    	
     $Guest_id=$_SESSION['webuser_bgpkr']['user_id'];
     if(isset($Guest_id) && !empty($Guest_id)){
          date_default_timezone_set('UTC');
          $this->load->model('web/Chatmodel');	
          require APPPATH . 'helpers/Common1.php';
     }else{
       redirect(base_url());
  }
}

//==================User chat============================//

function userchat(){
     $host_id=base64_decode($this->input->get('id'));   
     $user_id=$_SESSION['webuser_bgpkr']['user_id'];
     $result['data']=$this->Chatmodel->user_information($user_id);	
     $this->load->view('web/header');
     $this->load->view('web/chat_screen',$result);
     $this->load->view('web/footer');
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

