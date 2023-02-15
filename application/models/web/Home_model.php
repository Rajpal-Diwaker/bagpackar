<?php
class Home_model extends CI_Model
{

  /* ==================== View Check email password =================== */
  function check_email_password($email,$password) 
	{  
		$select = $this->db->select('*')
                       ->where('email',$email)
                       ->where('password',$password)
                       ->get('bgpkr_admin');
              $row = $select->num_rows();
              if($row>0){
              	return 0;
              }else{
              	 $select1 = $this->db->select('*')
                          ->where('email',$email)
                          ->get('bgpkr_admin');
              $row1 = $select1->num_rows();
              if($row1>0){
              	return 1;
              }else{
              	return 2;
              }
              }            		
    }
  

   
}