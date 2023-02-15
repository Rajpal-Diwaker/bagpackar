<?php
require APPPATH . 'helpers/Common1.php';
class Payment extends CI_Controller {

public function __construct()
{
parent::__construct();
$this->load->library('session');
$this->checkBlock(); 
$Guest_id=$_SESSION['webuser_bgpkr']['user_id'];
if(isset($Guest_id) && !empty($Guest_id)){
date_default_timezone_set('UTC');
$this->load->model('web/Paymentmodel');	
require_once APPPATH.'third_party/stripe-php/init.php';
\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
}else{
redirect(base_url());
}
}

//===============Payment detail=======================//
function payment_detail(){
if($_SESSION['host_data']){
unset($_SESSION['host_data']); 
}
$post=$this->input->post(); 
$this->session->set_userdata('host_data',$post);
echo 1;die;
}

function payment(){		
$host_id=base64_decode($_SESSION['host_data']['host_id']);
if($host_id!=""){  
$result['data']=$this->Paymentmodel->payment_details($host_id);
if($result['data']['currency']=="Rupees"){
$currency='INR';	
}else{
$currency='USD';	
} 
//===============if user use booking time ===============//
if($_SESSION['host_data']['booking_time']!="0"){	
if($_SESSION['host_data']['booking_time']=="1"){
$_SESSION['host_data']['checkin_from'] ="12:00 PM";
$_SESSION['host_data']['checkout_to'] ="11:59 AM";		
}else if($_SESSION['host_data']['booking_time']=="2"){
$_SESSION['host_data']['checkin_from'] ="08:00 AM";
$_SESSION['host_data']['checkout_to'] ="06:00 PM";		
}else{
$_SESSION['host_data']['checkin_from'] ="08:00 PM";
$_SESSION['host_data']['checkout_to'] ="06:00 AM";		
}
}else{
//=================user not select booking time=========//	
$_SESSION['host_data']['checkin_from'] =$result['data']['checkin_from'];
$_SESSION['host_data']['checkout_to'] =$result['data']['checkout_to'];	
}
$_SESSION['host_data']['currency'] = $currency;
$result['first_date']=$_SESSION['host_data']['first_date'];
$result['second_date']=$_SESSION['host_data']['second_date'];
$result['adult_count']=$_SESSION['host_data']['adult_count'];
$result['children_count']=$_SESSION['host_data']['children_count'];
$result['infant_count']=$_SESSION['host_data']['infant_count'];
$result['booking_amount']=$_SESSION['host_data']['booking_amount'];
$result['cleaning_fee']=$_SESSION['host_data']['cleaning_fee'];
$result['currency']=$_SESSION['host_data']['currency'];
$new_Amount=$this->remove_format($_SESSION['host_data']['total_amount']);
if($currency=="INR" && $new_Amount>4000){	
$new_total_Amount=$new_Amount-$result['data']['discount_amount'];
$result['discount']=$result['data']['discount_amount'];
$_SESSION['host_data']['check_discount']="1";	
}
else if ($currency=="USD" && $new_Amount>2500) {
$new_total_Amount=$new_Amount-$result['data']['discount_amount'];
$result['discount']=$result['data']['discount_amount'];
$_SESSION['host_data']['check_discount']="1";	
}
else{
$new_total_Amount=$new_Amount;
$result['discount']=0;
$_SESSION['host_data']['check_discount']="0";
}
$total_amount = number_format($new_total_Amount, 2, '.', ',');
$total_amount = preg_replace('/\.00/', '', $total_amount);
$result['total_amount']=$total_amount;
$result['stripe_amount']=($new_total_Amount*100);
$result['All_guest']=$result['adult_count']+$result['children_count']+$result['infant_count'];
$this->load->view('web/header');
$this->load->view('web/payment',$result);
$this->load->view('web/footer');
}else{
redirect(base_url()); 
}   
}
//=============Payment process ================//
function payment_process(){ 
if(isset($_SESSION['host_data']['host_id']) && isset($_SESSION['webuser_bgpkr']['user_id'])){
$post=$this->input->post();
$host_id=base64_decode($_SESSION['host_data']['host_id']);
$guest_id=$_SESSION['webuser_bgpkr']['user_id'];
$select=$this->db->select('user_id')->where('host_id',$host_id)->get('bgpkr_host_placetype');
$res=$select->row_array();
$user_id=$res['user_id'];
$new_Amount=$this->remove_format($_SESSION['host_data']['total_amount']);
$amount=($new_Amount*100);
$currency=$_SESSION['host_data']['currency'];
$charge = null;
$chargeJson = null;
$PaymentData = [];
$BookingData=[];
$timestamp = strftime('%Y%m%d%H%M%S');
$orderid = $timestamp.'-'.mt_rand(1, 999); 
//charge a credit or a debit card
try {
$charge = \Stripe\Charge::create([
'amount'      => $amount,
'currency'    => $currency,
'source'      => $post['stripeToken'],
'description' => 'Host PAYMENT',
'metadata'    => [
'order_id' => $orderid
]
]);
}
//catch exception
catch (Exception $e) {
echo 2;die();
}
$chargeJson = $charge->jsonSerialize();
if(abs(strtotime($_SESSION['host_data']['first_date']) - strtotime(date('Y-m-d'))) ==0){
$confirm_status='1';
}else{
$confirm_status='0';
}
if($_SESSION['host_data']['booking_time']!='0'){
if($_SESSION['host_data']['booking_time']=='1'){
$new_time1 =DateTime::createFromFormat('h:i A', '12:00 PM');
$check_in_fmt =$new_time1->format('H:i:s');
$new_time2 =DateTime::createFromFormat('h:i A', '11:59 AM');
$check_out_fmt =$new_time2->format('H:i:s');
$email_string='1 night';
$total_days=1;	
}else if($_SESSION['host_data']['booking_time']=='2'){
$new_time1 =DateTime::createFromFormat('h:i A', '08:00 AM');
$check_in_fmt =$new_time1->format('H:i:s');
$new_time2 =DateTime::createFromFormat('h:i A', '06:00 PM');
$check_out_fmt =$new_time2->format('H:i:s');
$_SESSION['host_data']['second_date']=$_SESSION['host_data']['first_date'];
$email_string='1/2 day';
$total_days=0.5;
}else{
$new_time1 =DateTime::createFromFormat('h:i A', '08:00 PM');
$check_in_fmt =$new_time1->format('H:i:s');
$new_time2 =DateTime::createFromFormat('h:i A', '06:00 AM');
$check_out_fmt =$new_time2->format('H:i:s');
$email_string='1/2 night';
$total_days=0.5;	
} 
}else{
$new_time1 =DateTime::createFromFormat('h:i A', $_SESSION['host_data']['checkin_from']);
$check_in_fmt =$new_time1->format('H:i:s');
$new_time2 =DateTime::createFromFormat('h:i A', $_SESSION['host_data']['checkout_to']);
$check_out_fmt =$new_time2->format('H:i:s');
$date1=new DateTime($_SESSION['host_data']['first_date']);
$date2=new DateTime($_SESSION['host_data']['second_date']);
$days=$date2->diff($date1)->format('%a');
$total_days=(int)$days;
$email_string=$days.' night';		
}
$BookingData=[
'host_id'=>$host_id,
'user_id'=>$user_id,
'guest_id'=>$guest_id,
'guest_email' => $post['stripeEmail'], 
'from_date'=>date("Y-m-d ".$check_in_fmt, strtotime($_SESSION['host_data']['first_date'])),
'to_date'=>date("Y-m-d ".$check_out_fmt, strtotime($_SESSION['host_data']['second_date'])), 
'total_guest' =>$_SESSION['host_data']['adult_count']+$_SESSION['host_data']['children_count'], 
'total_infant'=>$_SESSION['host_data']['infant_count'],
'total_days'=>$total_days,
'confirm_status'=>$confirm_status,
'paid_currency'=>$_SESSION['host_data']['currency'],
'paid_amount'=>($chargeJson['amount']/100),
'created_on'=>date('Y-m-d H:i:s') 
];
if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
$PaymentData = array(
'host_id'=>$host_id,
'user_id'=>$user_id,
'guest_id'=>$guest_id,
'guest_email' => $post['stripeEmail'], 
'paid_amount' => ($chargeJson['amount']/100), 
'paid_amount_currency'=>$chargeJson['currency'], 
'charge_id'=>$chargeJson['id'],
'txn_id' => $chargeJson['balance_transaction'], 
'payment_status' =>'1',
'created_on'=>date('Y-m-d H:i:s') 
);
if($_SESSION['host_data']['check_discount']=='1'){
$this->db->where('user_id',$guest_id)->set('amount',0)->update('bgpkr_referral_amount');
}
$this->Paymentmodel->payment_success($PaymentData,$BookingData);
$this->newbooking_email($host_id,$guest_id,$chargeJson['id'],$_SESSION['host_data']['first_date'],$_SESSION['host_data']['second_date'],$BookingData['total_guest'],$BookingData['total_infant'],$email_string);
$this->Paymentmodel->send_notification($user_id,$guest_id,$_SESSION['host_data']['first_date'],$_SESSION['host_data']['second_date']);
unset($_SESSION['host_data']);
echo 1;die();
}
else{
$PaymentData = array(
'host_id'=>$host_id,
'user_id'=>$user_id,
'guest_id'=>$guest_id,
'guest_email' => $post['stripeEmail'], 
'paid_amount' => ($chargeJson['amount']/100), 
'paid_amount_currency'=>$chargeJson['currency'],
'charge_id'=>$chargeJson['id'], 
'txn_id' => $chargeJson['balance_transaction'], 
'payment_status' =>'0',
'created_on'=>date('Y-m-d H:i:s')  
);
$this->Paymentmodel->payment_success($PaymentData,$BookingData);
echo 0;die();
}
}else{
redirect(base_url());
}

}
//=============end payment====================//

function remove_format($text){
$text = str_replace(",", "", $text);
return $text;
}

//===========new booking email=======================//

public function newbooking_email($host_id,$guest_id,$charge_id,$from_date,$to_date,$total_guest,$total_infant,$email_string){
$from_date= strtotime($from_date);
$to_date= strtotime($to_date);
$String = [];
$guest_String="";
if($total_guest>1){
$String[]=$total_guest.' Guests'; 
}
else{
$String[]=$total_guest.' Guest';
} 
if($total_infant>1){
$String[]=$total_infant.' Infants'; 
}
else if($total_infant==1){
$String[]=$total_infant.' Infant'; 
}else{
$String[]=''; 
}
$guest_String = implode(', ', array_filter($String)); 
$query=$this->db->select('u.name as host_name,u.email as host_email,hp.name_listing,hp.city,hp.guest_bed,hp.location')->from('bgpkr_host_placetype as hp')->join('bgpkr_users as u','hp.user_id=u.user_id','left')->where('hp.host_id',$host_id)->get();
$host_result=$query->row_array();
$query1=$this->db->select('name as guest_name,email as guest_email')->where('user_id',$guest_id)->get('bgpkr_users');
$guest_result=$query1->row_array(); 
$mail = new Common1();
$urlcencel = base_url().'cancel-refund-policy';
$urlref = base_url().'booking-detail';
$urlhelp = base_url().'help';
$subject = "New Booking";
$img = 'https://www.bagpackar.in/assets/images/pinicon.png';
$img2 = 'https://www.bagpackar.in/assets/images/logo.png';
$message = "<img src=".$img." style='float:left; margin-right:20px;width:50px'/><br><br><p>Hi ".$host_result['host_name'].",<br>
Congratulation. You have a new booking on your listing. Please 'Approve' or 'Decline' booking request from ".$guest_result['guest_name'].".<br>
Following are the booking details:<br>
Confirmation ID: ".$charge_id."<br>
Guest Name:".$guest_result['guest_name']."<br>
Property Name:".$host_result['name_listing']."<br>
Address: ".$host_result['location'].", ".$email_string." in ".$host_result['city']."<br>
Reservation: ".$email_string."<br>
".date('D', $from_date).", ".date('M', $from_date)." ".date('d', $from_date).", ".date('Y', $from_date)." to ".date('D', $to_date).", ".date('M', $to_date)." ".date('d', $to_date).", ".date('Y', $to_date)."<br>
Entire home/apt: ".$host_result['guest_bed']." beds  ".$guest_String."<br>
<div style='text-align:center;'>
<h2 style='font-size:23px; color:#000;'>Please 'Accept' or 'Decline' ?</h2>
<div style='display:table; margin:0 auto;'>
<div style='display:table;width:100%;margin:10px auto;'><a target='_blank' href='".$urlref."' data-saferedirecturl='https://www.google.com/url?q='".$urlref."'><button style='border:0;background-color:#000;color:#fff;padding:10px;'>ACCEPT</button></a></div>
<div style='display:table;width:100%;margin:10px auto;'><a target='_blank' href='".$urlref."' data-saferedirecturl='https://www.google.com/url?q='".$urlref."'><button style='border:0;background-color:#000;color:#fff;padding:10px;'>DECLINE</button></a></div>
</div>
</div>
Once accepted, Decision cannot be reverted. You won't be able to make changes to this listing once accepted or decline. Please make sure all the problems are fixed before guest arrival.
Please make sure you guide properly to locate your property and make arrangement for Guest arrival.
<br>Bagpackar is committed to no discrimination at any circumstances based on Race, Religion or Origin. Please read our <a target='_blank' href='".$urlcencel."' data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>No Discrimination Policy</a>.
Guest cancellation policy <a target='_blank' href='".$urlcencel."' data-saferedirecturl='https://www.google.com/url?q='".$urlcencel."'>Cancellation policy</a>.
If you have any questions or need any assistance please contact Bagpackar Support or go to <a target='_blank' href='".$urlhelp."' data-saferedirecturl='https://www.google.com/url?q='".$urlhelp."'>Help and Support</a>.<br><br>
Regards,<br>
Bagpackar, LLC
<br><img src=".$img2." style='float:left; margin-right:20px;width:110px'/></p>";
$body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
<title>'.html_escape($subject).'</title>
<style type="text/css">
body {
font-family: Arial, Verdana, Helvetica, sans-serif;
font-size: 16px;
}
</style>
</head>
<body>
'.$message.'
</body>
</html>';
$mail->email_user($host_result['host_email'], $body, $subject);
return true;
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
