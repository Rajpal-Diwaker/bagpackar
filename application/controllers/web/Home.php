<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'helpers/Common1.php';

class Home extends CI_Controller {
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
		$this->load->model('web/home_model');
	}
	

	
	/*================= Function for Admin Home ===================*/
     public function index(){
     	$this->load->view('templates/header');
		$this->load->view('web/home');
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

