<?php
class Paymentmodel extends CI_Model
{

	function payment_details($host_id){
		$Guest_id=$_SESSION['webuser_bgpkr']['user_id'];
		$Allamenties=[];
		$select = $this->db->select('host_id,name_listing,total_guest,total_bedrooms,total_bathrooms,description,currency,IFNULL((select image from bgpkr_host_place_images where host_id = '.$host_id.' and is_cover = "1" and image_type="kitchen" LIMIT 1),"") as kitimage,checkin_from,checkout_to,suitable_child,suitable_infants,suitable_pets,allow_smoking,allow_parties,safty_amenities,IFNULL((select amount from bgpkr_referral_amount where user_id = '.$Guest_id.'),0) as discount_amount')
		->where('host_id',$host_id)
		->where('is_approve','1')
		->where('is_complete','1')
		->get('bgpkr_host_placetype');
		if($select->num_rows()>0){
			$result=$select->row_array();
			if(!empty($result['safty_amenities'])){
		   $Allamenties = explode(',', $result['safty_amenities']);	
		   $string="The host has reported the availability of ";		
		   for ($i=0; $i < count($Allamenties) ; $i++) { 
            $newQuery=$this->db->select('name')->where('id',$Allamenties[$i])->get('bgpkr_all_amenities');
            $res=$newQuery->row_array();
            if($i==0){
            $string.=(string)$res['name'];	
            }else{
            $string.=','.(string)$res['name'];	
            }					
			}
			$string.=' on the property.';
			$result['safty_amenities']=$string;
	    	}
			return $result;
		    }else{
			return [];
		    }   	
	}

//===========payment_success======================//

	function payment_success($PaymentData,$BookingData){
		$this->db->insert('bgpkr_booking',$BookingData);
		$insert_id=$this->db->insert_id();
		if($insert_id>0){
			$PaymentData['booking_id']=$insert_id;	
			$this->db->insert('bgpkr_payment',$PaymentData);
			$last_id=$this->db->insert_id();
			if($last_id>0){
				$select=$this->db->select('payment_status')->where('payment_id',$last_id)->get('bgpkr_payment');
				$result=$select->row_array();
				$update=$this->db->where('booking_id',$insert_id)->set('payment_status',$result['payment_status'])->update('bgpkr_booking');
				if($update==1){
					return 1;
				}else{
					return 0;
				}
			}else{
				return 0;	
			}		
		}else{
			return 0;
		}

	}

//===================send_notification======================//

function send_notification($user_id,$guest_id,$first_date,$second_date){
$date1=new DateTime($first_date);
$date2=new DateTime($second_date);
$days=$date2->diff($date1)->format('%a');
if($days=='0'){
$days='1/2';	
}	
$title ="New Booking Request";
$msg="Someone requested to book your house/villa/Apartment for ".$days." days.";
$notitype="Host Booking";
$select=$this->db->where('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
if($select->num_rows()>0){
$result=$select->result_array();
if($result[0]['device_token'] != '') {
$device_token=$result[0]['device_token'];
$device_type=$result[0]['device_type'];
$message=["title"=>$title,"msg"=>$msg,"type"=>"normal"];
$res=$this->common->notification($device_token,$device_type,$message,$notitype);
}
}
$dataNoti=array('receiver_id' =>$user_id,'sender_id'=>$guest_id,'title'=>$title,'message' => $msg,'type' => $notitype);
$insert=$this->db->insert('bgpkr_notification',$dataNoti);
return 1;	
}

}//=========class============//