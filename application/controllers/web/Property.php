<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'helpers/Common1.php';
require_once APPPATH.'third_party/stripe-php/init.php';

class Property extends CI_Controller {
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
		$this->load->model('web/Property_model');
	}
	
    /*================= Function for Admin Home ===================*/
     public function index(){
     	$this->checkLogout();
     	$data['hostData'] = $this->Property_model->userHostProperty();
     	$this->load->view('templates/hostHeader');
		  $this->load->view('web/userProperty',$data);
		  $this->load->view('templates/hostFooter');
      }

    /*================= Function for Admin Home ===================*/
     public function favouriteProperty(){
        $this->checkLogout();
        $data['data'] = $this->Property_model->hostFavProperty();
        $this->load->view('web/header');
        $this->load->view('web/favProperty',$data);
        $this->load->view('web/footer');
      }  
   /*================= Function for Admin Home ===================*/
     public function propert_view(){
     	$this->checkLogout();
        if (isset($_GET['host']) && !empty($_GET['host'])) {
        $host = base64_decode($_GET['host']);
        $result['data'] = $this->Property_model->viewHostProperty($host);
        $result['databooking'] = $this->Property_model->viewPropertyBooking($host);
        $result['guestknow'] = $this->Property_model->guestKnow($host);
        $result['thingtakecare'] = $this->Property_model->thingTakeCare($host);
        if ($result['data']) {
        $this->load->view('templates/hostHeader');
        $this->load->view('web/viewProperty',$result);
        $this->load->view('templates/hostFooter');
        }else{
          redirect('property');
        }
        }else{
          redirect('property');
       }
     	
      } 
   
    /*================= Function for Upcomming Booking ===================*/
     public function bookingDetail(){
        $this->checkLogout();
        $data['hostData'] = $this->Property_model->bookingDetail();
        $data['monthAmount'] = $this->Property_model->monthAmount();
        $data['pendingBooking'] = $this->Property_model->pendingBooking();
        $this->load->view('templates/hostHeader');
        $this->load->view('web/hostProfile',$data);
        $this->load->view('templates/hostFooter');
        
      }
   
    /*================= Function for Upcomming Booking ===================*/
     public function bookingFilter(){
        $this->checkLogout();
        $postArr = $_POST;
        $data = $this->Property_model->todayInOutFlt($postArr);
        echo $data;die;
      }

    /*================= Function for Upcomming Booking ===================*/
     public function viewbookingFilter(){
        $this->checkLogout();
        $postArr = $_POST;
        $data = $this->Property_model->viewtodayInOutFlt($postArr);
        echo $data;die;
      }
   
    /*================= Function for User check  ===================*/
       public function acceptDeclineBooking(){
        $this->checkLogout();
        $booking_id=$_POST['id'];
        $status=$_POST['status'];
        $gnId=$_POST['genId'];
        $res = $this->Property_model->acceptDeclineBooking($booking_id,$status,$gnId);
        if ($res == 1) {
           echo $res;
        }else{
            echo 2;
        }
    }
  
  /*================= Function for User check  ===================*/
       public function trashUserProperty(){
        $this->checkLogout();
        $property_id=base64_decode($_POST['id']);
        $res = $this->Property_model->trashUserProperty($property_id);
        if ($res == 1) {
           echo $res;
        }elseif ($res == 2) {
            echo $res;
        }
        else{
            echo 3;
        }
    }
    /*================= Function for User check  ===================*/
       public function notiStatus(){
        $this->checkLogout();
        $res = $this->Property_model->changeNotiStatus();
        echo 1;die;
    }

    /*================= Function for User check  ===================*/
       public function checkLogout(){
        $sessionData=$this->session->userdata('webuser_bgpkr');
        if(!$sessionData){
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

}