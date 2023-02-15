<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_forgot extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    require APPPATH . 'helpers/Common1.php';
    $this->load->model('admin/Admin_forgot_model');
  }

/*================reset=============*/

    function reset(){
      $emails=base64_decode($this->input->get('email'));
      $token=base64_decode($this->input->get('token'));
      $response=$this->Admin_forgot_model->checkstatus($emails,$token);
      if($response==1){
        $email['data']=$emails;
        $this->load->view('admin/reset_password',$email);
      }else{
        $this->session->set_flashdata('error','<div class="alert alert-danger text-center" id="error">This link has been expired <br>Please try again.</div>');
        redirect('admin/status');
      }
    }



  function reset_process(){
      $post=$this->input->post();
      $random=new common1();
      $token = $random->generateRandomString();
      $data=["email"=>$post['email'],"password"=>md5($post['password']),"forgot_token"=>$token];
      $result=$this->Admin_forgot_model->reset_process($data);
      if($result==1){
        $this->session->set_flashdata('success','<div class="alert alert-success text-center" id="successMessage">Your password has been successfully changed.<br>Please log back into your bagpackar account using your new password.<br>
         Thank you!</div>');
        redirect('admin/status');
      }
      else if($result==2){
        $this->session->set_flashdata('error','<div class="alert alert-danger text-center" id="error">Something Went Wrong!</div>');
        redirect('admin/status');
      }
    }

function status(){
    $this->load->view('admin/status');
    }


}