<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . 'helpers/phpmailer/class.phpmailer.php';
class Common1{
	function __construct(){
		$this->CI =& get_instance();
        log_message('debug', "User Class Initialized");
	     }

//==============email send function =================//
public function email_user($email=null,$body=null,$subject=null){
	            $from='support@bagpackar.com';
	            $fromname="bagpackar";
                $mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPSecure = 'tls';
				$mail->Host = 'smtp-relay.sendinblue.com:587';
				$mail->Port = '587';
				$mail->SMTPAuth = true;
				$mail->Username = "support@bagpackar.com"; 
				$mail->Password = "78zn6XhH3k0yqURm"; 
				$mail->From = $from;
				$mail->FromName = $fromname;
				$mail->AddAddress($email);
				$mail->WordWrap = 50;
				$mail->IsHTML(true);
				$mail->Subject = $subject;
				$mail->Body = $body;
				$mail->AltBody = "";
				if ($mail->Send()){
                  return 1; // if send mail
	            }else{
				  return 0; //if not sent mail
				} 
		}	
 			


function generateRandomString($length = 10) {
    $characters = '0123456789iWantUabcdefghijklmnopqrstuvwxyzTodayABCDEFGHIJKLMNOPQRSTUVWXYZTechugo';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}
          

}
// END Common Class
