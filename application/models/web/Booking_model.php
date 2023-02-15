<?php
class Booking_model extends CI_Model
{


  function reservation_data($guest_id){
    $today=date('Y-m-d H:i:s');  
    $Alldata=[];
    $Allpreviousdata=[];
    $Allupcomingdata=[];
    $Allfavouritedata=[]; 
    $new_sql=$this->db->select('user_code')->where('user_id',$guest_id)->get('bgpkr_users');
    $code=$new_sql->row_array();
    $user_code=base_url().'?code='.$code['user_code'];
    $upcomingcount=$this->db->where('guest_id',$guest_id)->where('from_date >=',$today)->from("bgpkr_booking")->where('payment_status','1')->where_not_in('confirm_status','3')
    ->where_not_in('confirm_status','2')->count_all_results();
    $previouscount=$this->db->where('guest_id',$guest_id)->where('to_date <=',$today)->where('payment_status','1')->where_not_in('confirm_status','3')->where_not_in('confirm_status','2')->from("bgpkr_booking")->count_all_results();

    $select=$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$guest_id.' and host_id=hp.host_id),"0") AS status,hp.is_delete,bp.host_paid_status,bp.booking_id')
    ->from('bgpkr_host_placetype as hp')
    ->join('bgpkr_booking as bp','hp.host_id=bp.host_id','left')
    ->where('bp.from_date >=',$today)
    ->where('bp.payment_status','1')
    ->where_not_in('bp.confirm_status','3')
    ->where_not_in('bp.confirm_status','2')
    ->where('bp.guest_id',$guest_id)
    ->get();
 $Allupcomingdata=$select->result_array();
   if(!empty($Allupcomingdata)){
   foreach ($Allupcomingdata as $key => $value) {
    if($value['currency']=="Dollar" && $value['base_price']<=100){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Dollar" && $value['base_price']>300){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }else if($value['currency']=="Rupees" && $value['base_price']<=700){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Rupees" && $value['base_price']>2100){
      $Allupcomingdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }
$Allupcomingdata[$key]['base_price']=number_format($Allupcomingdata[$key]['base_price'], 2, '.', ',');
$Allupcomingdata[$key]['base_price']=preg_replace('/\.00/', '', $Allupcomingdata[$key]['base_price']);  
  }
  }                     
 //========prevoius===============//

    $select1=$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$guest_id.' and host_id=hp.host_id),"0") AS status,hp.is_delete,bp.host_paid_status')
    ->from('bgpkr_host_placetype as hp')
    ->join('bgpkr_booking as bp','hp.host_id=bp.host_id','left')
    ->where('bp.to_date <=',$today)
    ->where('bp.payment_status','1')
    ->where_not_in('bp.confirm_status','3')
    ->where_not_in('bp.confirm_status','2')
    ->where('bp.guest_id',$guest_id)
    ->get(); 
    // echo $this->db->last_query();die();
    $Allpreviousdata=$select1->result_array(); 
    if(!empty($Allpreviousdata)){
     foreach ($Allpreviousdata as $key => $value) {
    if($value['currency']=="Dollar" && $value['base_price']<=100){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Dollar" && $value['base_price']>300){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }else if($value['currency']=="Rupees" && $value['base_price']<=700){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Rupees" && $value['base_price']>2100){
      $Allpreviousdata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }
    $Allpreviousdata[$key]['base_price']=number_format($Allpreviousdata[$key]['base_price'], 2, '.', ',');
   $Allpreviousdata[$key]['base_price']=preg_replace('/\.00/', '', $Allpreviousdata[$key]['base_price']);  
  }  
}

//==============favourite=================//

    $select2=$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where host_id =hp.host_id),0) as rating,IFNULL((select status from bgpkr_wishlist where user_id='.$guest_id.' and host_id=hp.host_id),"0") AS status,hp.is_delete')
    ->from('bgpkr_host_placetype as hp')
    ->join('bgpkr_wishlist as bw','hp.host_id=bw.host_id','left')
    ->where('bw.user_id',$guest_id)
    ->where('status','1')
    ->group_by('hp.host_id')
    ->get(); 
    $Allfavouritecount=$select2->num_rows();
    $Allfavouritedata=$select2->result_array(); 
       if(!empty($Allfavouritedata)){
     foreach ($Allfavouritedata as $key => $value) {
    if($value['currency']=="Dollar" && $value['base_price']<=100){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Dollar" && $value['base_price']>300){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }else if($value['currency']=="Rupees" && $value['base_price']<=700){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
    }else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
    }else if($value['currency']=="Rupees" && $value['base_price']>2100){
      $Allfavouritedata[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
    }
     $Allfavouritedata[$key]['base_price']=number_format($Allfavouritedata[$key]['base_price'], 2, '.', ',');
   $Allfavouritedata[$key]['base_price']=preg_replace('/\.00/', '', $Allfavouritedata[$key]['base_price']); 
  }  
}
    $Alldata=["Allupcomingdata"=>$Allupcomingdata,"Allpreviousdata"=>$Allpreviousdata,"Allfavouritedata"=>$Allfavouritedata,"previouscount"=>$previouscount,"upcomingcount"=>$upcomingcount,"Allfavouritecount"=>$Allfavouritecount,"user_code"=>$user_code];
    return $Alldata;  
}
//============== referral amount =================//
  function referral_amount($guest_id){
   $select = $this->db->select('SUM(amount) as amount')
                      ->where('user_id',$guest_id)
                      ->get('bgpkr_referral_amount');
        $res = $select->result_array();
        return $res[0]['amount']?$res[0]['amount']:'0';                             
  }

//===============msgowner========================//

function msgowner($data){
 $s_id=$data['s_id'];
 $r_id=$data['r_id']; 
 $where="((s_id ='$s_id' and r_id='$r_id') or (s_id ='$r_id' and r_id='$s_id'))";  
    $select=$this->db->where($where)
                   ->get('bgpkr_chat');
    if($select->num_rows()>0){
      return 1;  
  }else{
    $this->db->insert('bgpkr_chat',$data);  
    $insert_id=$this->db->insert_id();
    if($insert_id>0){
        return 1;
    }else{
        return 0;
    }   
}                 
}

//==============guest_payments====================//

function guest_payments($guest_id){
$select=$this->db->select('bb.host_id,bb.user_id,bb.from_date,bb.to_date,bb.total_guest,bb.total_infant,bb.paid_amount,bb.paid_currency,bhp.name_listing')
->from('bgpkr_booking as bb')
->join('bgpkr_host_placetype as bhp','bb.host_id=bhp.host_id','left')
->where('bb.guest_id',$guest_id)
->where('bb.payment_status','1')
->order_by('bb.booking_id','desc')
->get();
if($select->num_rows()>0){
  $result=$select->result_array(); 
  return $result;
}else{
  return [];
}  
}

//============cancelBooking==================//

function cancelBooking($booking_id){
$update=$this->db->where('booking_id',$booking_id)->set('confirm_status','3')->update('bgpkr_booking');
if($update==1){
  return 1;
}else{
  return 0;
}  
}


}//=============class==================//