<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Common{

	function __construct()
	{
		$this->CI =& get_instance();

		log_message('debug', "User Class Initialized");
	}
	function checkrecord($tname, $field, $val){
		$query = $this->CI->db->get_where($tname,array($field => $val),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	function checkRecordId($tname, $field1, $val1, $field2, $val2){
		$query = $this->CI->db->get_where($tname,array($field1 => $val1, $field2 => $val2),1,0);
		if($query->num_rows() >= 1){
			return true;
		}
		else{
			return false;
		}
	}
	
	function generateRandomString($length = 6) {
		$characters = '0123456789iWantUabcdefghijklmnopqrstuvwxyzTodayABCDEFGHIJKLMNOPQRSTUVWXYZTechugo';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

   
    function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
  }

//notification data
  public function notidata($user_idn){
  	$resNoti=[];
   $sql = "SELECT id,added_on,type,message,sender_id FROM `bgpkr_notification` WHERE receiver_id = ? AND `added_on` > DATE_SUB(NOW(), INTERVAL 1 WEEK) ORDER BY id DESC";
              $notidata = $this->CI->db->query($sql, array($user_idn));
              
              $resNoti = $notidata->result_array();
              if ($resNoti) {
                          foreach ($resNoti as $key => $value) {
                          
                              if ($value['sender_id'] == 0) {
                                  $resNoti[$key]['image']=base_url().'assets/images/fav.png';
                                  }else{
                                    $seletimg = $this->CI->db->select('user_image as image,name')
                                                         ->where('user_id',$value['sender_id'])
                                                         ->get('bgpkr_users');
                                              $sender =$seletimg->result_array();
                                    $resNoti[$key]['image']=$sender[0]['image'];
                                    $resNoti[$key]['name']=$sender[0]['name'];
                                  }                      
                                                  
                                          }
                                     return $resNoti;      

                                      }

                      
  }

	
	public function notification($device_token=null,$device_type=null,$message=null,$notitype=null,$badge =null){
		$url = "https://fcm.googleapis.com/fcm/send";
		$server_key = "AAAA8WdQ1IA:APA91bH-nQvafeuAy25AL1ckX-voDLsSfyOTr6rjU69HUcvBUd4-KYLfAMl6LqQdeNoKal-Awpv-BM_paWRNAvklMA_u_-WeZOg3IrDualLHo2Vqp0ZOclfzD8IUl3Iyc6XM54rb3-Gw";
			$AndroidService[] = $device_token;
			$resgistrationIDs = $AndroidService;
			$fields = array(
				'registration_ids'=>$resgistrationIDs,
				'notification'=>array(
					'title'=>$message['title'],
					'body'=>$message['msg'],
					'data' =>$message['msg'],
					'type'=>$notitype,
					'badge'=>(int)1,
					'sound'=>'default'),
				'priority'=>'high'
			);
		//CURL request to route notification to FCM connection server (provided by Google)	
$headers = array(
'Content-Type:application/json',
'Authorization:key='.$server_key
);
//CURL request to route notification to FCM connection server (provided by Google)	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
$result = curl_exec($ch);
//print_r($result);die();
if($result == FALSE){
return curl_error($ch);
}
else{
return $result;
}
curl_close($ch);
}

}
// END Common Class
