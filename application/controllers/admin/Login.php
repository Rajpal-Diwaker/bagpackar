<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'helpers/Common1.php';

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('admin/Login_model');
	}
	
/*================= Function for Admin Login ===================*/

 public function login(){
       $this->load->view('admin/login');
 }

//===========login process====================//
	public function login_process(){
	$post=$this->input->post();
	$data=["email"=>$post['email'],"password"=>$post['password']];
    $response=$this->Login_model->login_process($data);	
    if($response==0){
     echo 0;die;
    }else{
    $this->session->set_userdata('admin_email', $response['email']);
    $this->session->set_userdata('admin_id', $response['admin_id']);
     echo 1;die;	
    }      
  }

    /*============ Function for Admin Logout =====*/
	   public function logout(){
		$this->session->unset_userdata('admin_email');
		$this->session->unset_userdata('admin_id');
		redirect('admin/login');
	}



	/*=========== Function for Forgot Password ==*/
	  public function forgot(){
		$this->load->view('admin/forgot');
	}
    
//==========forgot process===============//
	function forgot_process(){
		$email=$this->input->post('email');
		$response=$this->Login_model->forgot_process($email);
		if(!empty($response)){
			$token=$response->forgot_token;
			$name = (!empty($response->name))?$response->name:'';
	        $logo=base_url().'assets/images/bagpackar_logo.png';
			$email=$response->email;	
			$link=base_url().'admin/reset?email='.base64_encode($email).'&token='.base64_encode($token).'';
			$subject="Password Recovery.";
			$body="Hello ".$name.","."<p>We have received a request to reset the password for bagpackar.</p><a target='_blank' href='".$link."' data-saferedirecturl='https://www.google.com/url?q='".$link."'>Reset Password</a><br><br>If above link is not working then copy below url and paste it into browser address bar and hit enter.<br>$link<p>The link can be used only one time.</p><p>Thanks</p><h3>Bagpackar Support Team</h3>
				  <img src=".$logo.">";
				  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				  <html xmlns="http://www.w3.org/1999/xhtml">
				  <head>
				    <meta http-equiv="Content-Type: text/html; charset=ISO-8859-1\r\n">
				    <title>' . html_escape($subject) . '</title>
				    <style type="text/css">
				      body {
				        font-family: Arial, Verdana, Helvetica, sans-serif;
				        font-size: 16px;
				      }
				      p{
				      	margin-bottom:20px;
				      }
				    </style> 
				  </head>
				  <body>
				    </html>';
				$mail = new Common1();
				$res = $mail->email_user($email, $body,$subject);
				if($res==1){
				echo 1;die();
				}
			}else{
				echo 0;die();
			}	
		}



}

