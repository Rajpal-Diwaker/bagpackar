<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Footerlinks extends CI_Controller {
    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
     $this->checkBlock();
	    $this->load->library('user_agent');
	}
	

	
	/*================= Function for termscondition ===================*/
     public function termscondition(){
     $this->load->view('templates/linkheader');
       $this->load->view('web/termscondition');
       $this->load->view('templates/footer');
     }

    /*================= Function for about us ===================*/
     public function aboutus(){
       $this->load->view('templates/linkheader');
       $this->load->view('web/aboutus');
       $this->load->view('templates/footer');
     }
     
     /*================= Function for careers ===================*/
     public function careers(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/careers');
       $this->load->view('templates/footer');
     }
      
     /*================= Function for faq ===================*/
     public function faq(){
       $this->load->view('templates/linkheader');
       $this->load->view('web/termscondition');
       $this->load->view('templates/footer');
     }

	 /*================= Function for policies ===================*/
     public function policies(){

       $this->load->view('templates/linkheader');
       $this->load->view('web/policies');
       $this->load->view('templates/footer');
    }

	 /*================= Function for help ===================*/
     public function help(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/helpnsupport');
       $this->load->view('templates/footer');
   }

	 /*================= Function for history ===================*/
     public function history(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/history');
       $this->load->view('templates/footer');
	  }

	 /*================= Function for business-travel ===================*/
     public function businesstravel(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/business_travel');
       $this->load->view('templates/footer');
	  }

	 /*================= Function for why-host ===================*/
     public function whyhost(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/whyhost');
       $this->load->view('templates/footer');
     }

     /*================= Function for responsible-hosting ===================*/
     public function responsiblehosting(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/responsiblehosting');
       $this->load->view('templates/footer');
	 }

	/*================= Function for cancellation and Refund policy ===================*/
     public function cancelRefund(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/cancellation_nRefundpolicy');
       $this->load->view('templates/footer');
	 }

	 /*================= Function for covid-19 guidelines ===================*/
     public function covid19_guidelines(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/covid19_guidelines');
       $this->load->view('templates/footer');
	 }
	 
	/*================= Function for referral program ===================*/
     public function referral(){
       $this->load->view('templates/linkheader');	
       $this->load->view('web/referral_program');
       $this->load->view('templates/footer');
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