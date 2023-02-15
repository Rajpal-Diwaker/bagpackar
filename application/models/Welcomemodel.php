<?php
class Welcomemodel extends CI_Model
{
//==============backgroung Images=============//
	function background_images($country,$city){	

		if($country=="USA" && $country=="United States"){
			$country="United States";	
		}
		$result['discover_image']="";
		$result['stay_home_image']="";
		$result['top_rated_image']="";
		$select1=$this->db->select('image')
		->where('country',$country)
		->where('city',$city)
		->order_by('sh_id','RANDOM')
		->limit('1')
		->get('bgpkr_discover');
		$result1=$select1->row_array();
		$select2=$this->db->select('image')
		->where('country',$country)
		->where('city',$city)
		->order_by('sh_id','RANDOM')
		->limit('1')
		->get('bgpkr_stay_home');
		$result2=$select2->row_array();
		$select3=$this->db->select('image')
		->where('country',$country)
		->where('city',$city)
		->order_by('tr_id','RANDOM')
		->limit('1')
		->get('bgpkr_top_rated');
		$result3=$select3->row_array();
		if(!empty($result1['image']) || !empty($result2['image']) || !empty($result3['image'])){
			$result['discover_image']=$result1['image'];
			$result['stay_home_image']=$result2['image'];
			$result['top_rated_image']=$result3['image'];
			return $result; 
		}else{
			return [];
		}
	}
//==========popular_result==============//

	function popular_result($country){
		$this->db->select('image,country,city');
		if($country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$country);
		}
		$this->db->group_by('city');
		$this->db->order_by('city', 'desc');
		$select=$this->db->get('bgpkr_popular_destination');
		if($select->num_rows()>0){
			$result=$select->result_array();
			return $result;	
		}else{
			return [];
		}

	}

//==============stay_home_result========================//

	function stay_home_result($country,$city,$user_id){
		$Allresult=[];
		$All_property=0;
		$result=[];
		$this->db->select('host_id');
		$this->db->where('city',$city);
		if($country=="USA"){
			$where1="(country='USA' or country='United States')";
			$this->db->where($where1);
		}else{
			$this->db->where('country',$country);
		}
		if($user_id!="0"){
			$this->db->where_not_in('user_id',$user_id);
		}
		$this->db->where('is_approve','1');
		$this->db->where('is_complete','1');
		$this->db->where('is_delete','0');
		$query=$this->db->get('bgpkr_host_placetype');
		if($query->num_rows()>0){
			$All_property=$query->num_rows();
		}
//============select property===============//

		$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,(select image from bgpkr_host_place_images where host_id=hp. host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id =hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id=hp.host_id),"0") AS status');
		if($country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$country);
		}
		$this->db->where('hp.city',$city);
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		$this->db->where('hp.is_approve','1');
		$this->db->where('hp.is_complete','1');
		$this->db->where('hp.is_delete','0');
		$select=$this->db->get('bgpkr_host_placetype as hp');
		if($select->num_rows()>0){
			$result=$select->result_array();
			foreach ($result as $key => $value) {
				if($value['currency']=="Dollar" && $value['base_price']<=100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Dollar" && $value['base_price']>300){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}else if($value['currency']=="Rupees" && $value['base_price']<=700){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Rupees" && $value['base_price']>2100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}
			} 
			$Allresult=["result"=>$result,"All_property"=>$All_property];
			return $Allresult;
		}else{
			return [];
		}      
	}

//==========top_rated_result===============//

	function top_rated_result($country,$city,$user_id){
		$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,(select image from bgpkr_host_place_images where host_id=hp. host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id =hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id=hp.host_id),"0") AS status,rr.rating as rating');
		$this->db->from('bgpkr_host_placetype as hp');
		$this->db->join('bgpkr_review_rating as rr','host_id','hp.host_id=rr.host_id','left');
		if($country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$country);
		}
		$this->db->where('hp.city',$city);
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		$this->db->where('hp.is_approve','1');
		$this->db->where('hp.is_complete','1');
		$this->db->where('hp.is_delete','0');
		$this->db->group_by('rr.host_id');
		$this->db->limit(10);
		$this->db->having("rating>=4"); 
		$select=$this->db->get();
		if($select->num_rows()>0){
			$result=$select->result_array();
			foreach ($result as $key => $value) {
				if($value['currency']=="Dollar" && $value['base_price']<=100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Dollar" && $value['base_price']>300){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}else if($value['currency']=="Rupees" && $value['base_price']<=700){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Rupees" && $value['base_price']>2100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}
			} 
			return $result;
		}else{
			return [];
		}   
	}

//================most popular===================//
	function most_popular($Guest_country){
		$result=[];
		$this->db->select('mp_id,image,address,city,body,title');
		if($Guest_country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$Guest_country);
		}
		$this->db->group_by('city');
		$this->db->limit('10');
		$select=$this->db->get('bgpkr_most_popular');
		if($select->num_rows()>0){
			$result=$select->result_array();
			return $result;
		}else{
			return [];
		}                
	}



//==========popular_result1==============//

	function popular_result1($Guest_country){
		$this->db->select('pd_id,image,country,city');
		if($Guest_country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$Guest_country);
		}
		$this->db->order_by("pd_id", "RANDOM");
		$this->db->group_by('city');
		$select=$this->db->get('bgpkr_popular_destination');
		if($select->num_rows()>0){
			$result=$select->result_array();
			return $result; 
		}else{
			return [];
		}
	}
//===========stary home result 1==================//
	function stay_home_result1($user_id,$Guest_country){
		$All_property=0;
		$Allresult=[];
		$result=[];
		$this->db->select('host_id');
		if($Guest_country=="USA"){
			$where="(country='USA' or country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('country',$Guest_country);
		}
		if($user_id!="0"){
			$this->db->where_not_in('user_id',$user_id);
		}
		$this->db->where('is_approve','1');
		$this->db->where('is_complete','1');
		$this->db->where('is_delete','0');
		$query=$this->db->get('bgpkr_host_placetype');
		if($query->num_rows()>0){
			$All_property=$query->num_rows();
		}
		$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,  (select image from bgpkr_host_place_images where host_id=hp. host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id =hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id=hp.host_id),"0") AS status');
		if($Guest_country=="USA"){
			$where="(hp.country='USA' or hp.country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('hp.country',$Guest_country);
		}
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		$this->db->order_by("hp.city", "RANDOM");
		$this->db->where('hp.is_approve','1');
		$this->db->where('hp.is_complete','1');
		$this->db->where('hp.is_delete','0');
		$this->db->group_by('hp.host_id');
		$this->db->limit(10);
		$select=$this->db->get('bgpkr_host_placetype as hp');
		if($select->num_rows()>0){
			$result=$select->result_array();
			foreach ($result as $key => $value) {
				if($value['currency']=="Dollar" && $value['base_price']<=100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Dollar" && $value['base_price']>300){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}else if($value['currency']=="Rupees" && $value['base_price']<=700){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Rupees" && $value['base_price']>2100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}
			} 
			$Allresult=["result"=>$result,"All_property"=>$All_property];
			return $Allresult;
		}else{
			return [];
		}      
	}

//==========top_rated_result1===============//

	function top_rated_result1($user_id,$Guest_country){

		$this->db->select('hp.host_id,hp.user_id,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.base_price,hp.currency,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,(select image from bgpkr_host_place_images where host_id=hp. host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id =hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id=hp.host_id),"0") AS status,rr.rating as rating');
		$this->db->from('bgpkr_host_placetype as hp');
		$this->db->join('bgpkr_review_rating as rr','host_id','hp.host_id=rr.host_id','left');
		if($Guest_country=="USA"){
			$where="(hp.country='USA' or hp.country='United States')";
			$this->db->where($where);
		}else{
			$this->db->where('hp.country',$Guest_country);
		}
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		$this->db->where('hp.is_approve','1');
		$this->db->where('hp.is_complete','1');
		$this->db->group_by('rr.host_id');
		$this->db->order_by("hp.city", "RANDOM");
		$this->db->limit(10);
		$this->db->having("rating>=4");
		$select=$this->db->get(); 
		if($select->num_rows()>0){
			$result=$select->result_array();
			foreach ($result as $key => $value) {
				if($value['currency']=="Dollar" && $value['base_price']<=100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Dollar" && $value['base_price']>300){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}else if($value['currency']=="Rupees" && $value['base_price']<=700){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Rupees" && $value['base_price']>2100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}
			} 
			return $result;
		}else{
			return [];
		}   
	}




//=======Backgroung Images==========//

	function background_images1($Guest_country){
		$result['discover_image']="";
		$result['stay_home_image']="";
		$result['top_rated_image']="";
		$select1=$this->db->select('image')
		->where('country',$Guest_country)
		->order_by('city', 'RANDOM')
		->limit('1')
		->get('bgpkr_discover');
		$result1=$select1->row_array();
		$select2=$this->db->select('image')
		->where('country',$Guest_country)
		->order_by('sh_id', 'RANDOM')
		->limit('1')
		->get('bgpkr_stay_home');
		$result2=$select2->row_array();
		$select3=$this->db->select('image')
		->where('country',$Guest_country)
		->order_by('tr_id', 'RANDOM')
		->limit('1')
		->get('bgpkr_top_rated');
		$result3=$select3->row_array();
		if(!empty($result1['image']) || !empty($result2['image']) || !empty($result3['image'])){
			$result['discover_image']=$result1['image'];
			$result['stay_home_image']=$result2['image'];
			$result['top_rated_image']=$result3['image'];
			return $result;	
		}else{
			return [];
		}
	}	

//============All count for all result=======================//


	function get_stagging_count($post,$country){
		$records=[];    
		$user_id=$post['user_id'];
		$this->db->select('hp.host_id,hp.user_id,hp.is_approve,hp.is_complete,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.description,hp.base_price,hp.currency,hp.basic_amenities,hp.kitchen_dining,hp.bed_baths,hp.entertainment,hp.outside_amenities,hp.safty_amenities,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating');
		$this->db->from('bgpkr_host_placetype as hp');
		$this->db->join('bgpkr_host_unavailable_date as bhu','hp.host_id=bhu.host_id','left');
		$this->db->where('hp.is_complete','1');
		$this->db->where('hp.is_approve ','1');
		$this->db->where('hp.is_delete','0');
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		if(isset($post['maximum']) && $post['maximum']>0){
			$this->db->where('hp.base_price >=',$post['minimum']);
			$this->db->where('hp.max_price <=',$post['maximum']);       
		}
		if(isset($post['first_date']) && $post['second_date']>0){
			$first_date=date("Y-m-d".' 12:00:00', strtotime($post['first_date']));
			$second_date=date("Y-m-d".' 11:59:00', strtotime($post['second_date']));
			$date1=new DateTime($post['first_date']);
			$date2=new DateTime($post['second_date']);
			$days=$date2->diff($date1)->format('%a');
			$this->db->where("hp.host_id NOT IN(select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = hp.host_id and ((from_date<='".$first_date."' and to_date>='".$first_date."')
				OR
				(from_date<'".$second_date."' and  to_date>='".$second_date."')
				OR
				(from_date>='".$first_date."' and  to_date<'".$second_date."')))"); 
			$this->db->where('hp.stay_max_night >=',$days); 
		}

		if(isset($post['suitable_child'])){
			$this->db->where('hp.suitable_child','1');
		}
		if(isset($post['suitable_infants'])){
			$this->db->where('hp.suitable_infants','1');
		}
		if(isset($post['suitable_pets'])){
			$this->db->where('hp.suitable_pets','1');
		}
		if(isset($post['allow_smoking'])){
			$this->db->where('hp.allow_smoking','1');
		}

		if(isset($post['allow_parties'])){
			$this->db->where('hp.allow_parties','1');
		}
		if(isset($post['noise_potential'])){
			$this->db->where('hp.noise_potential','1');
		}
		if(isset($post['pet_live'])){
			$this->db->where('hp.pet_live','1');
		}
		if(isset($post['have_weapon'])){
			$this->db->where('hp.have_weapon','1');
		}
		if(isset($post['media_device'])){
			$this->db->where('hp.media_device','1');
		}
		if(isset($post['other_animal'])){
			$this->db->where('hp.other_animal','1');
		}
		if(isset($post['all_guest'])){
			$this->db->where('hp.total_guest>=',$post['all_guest']);
		}
		if(isset($post['beds_count'])){
			$this->db->where('hp.guest_bed>=',(int)$post['beds_count']);
		}
		if(isset($post['bedrooms_count'])){
			$this->db->where('hp.total_bedrooms>=',(int)$post['bedrooms_count']);
		}
		if(isset($post['entireplace'])){
			$this->db->where('hp.dedicated_for','Guest Entirely');
		}
		if(isset($post['hotelroom'])){
			$this->db->where('hp.dedicated_for','Host Belongings');
		}
//=============use for location================//
		if(isset($post['location']) && !empty($post['location'])){
			$this->db->where('hp.city',$post['location']);
		}else{
			if($country=="USA"){
				$where="(hp.country='USA' or hp.country='United States')";
				$this->db->where($where);
			}else{
				$this->db->where('hp.country',$country);
			}	
		}
//===============end for location================//
		if(isset($post['kitchen_dining'])){
			$All_kitchen=str_replace(",","|",$post['kitchen_dining']);
			$pattern = "[[:<:]]".$All_kitchen."[[:>:]]";
			$this->db->where('hp.kitchen_dining REGEXP','"'.$pattern.'"', false); 
		}
		if(isset($post['bed_baths'])){
			$All_bed_list=str_replace(",","|",$post['bed_baths']);
			$pattern1 = "[[:<:]]".$All_bed_list."[[:>:]]";
			$this->db->where('hp.bed_baths REGEXP','"'.$pattern1.'"', false); 
		}
		if(isset($post['entertainment'])){
			$All_ent_list=str_replace(",","|",$post['entertainment']);
			$pattern2= "[[:<:]]".$All_ent_list."[[:>:]]";
			$this->db->where('hp.entertainment REGEXP','"'.$pattern2.'"', false); 
		}
		if(isset($post['outside_amenities'])){
			$All_outside_list=str_replace(",","|",$post['outside_amenities']);
			$pattern3 = "[[:<:]]".$All_outside_list."[[:>:]]";
			$this->db->where('hp.outside_amenities REGEXP','"'.$pattern3.'"', false); 
		}
		if(isset($post['property_type'])){
			$All_property_list=str_replace(",","|",$post['property_type']);
			$pattern4 = "[[:<:]]".$All_property_list."[[:>:]]";
			$this->db->where('hp.property_type REGEXP','"'.$pattern4.'"', false); 
		}
		$this->db->group_by('hp.host_id');
		$this->db->order_by('hp.host_id','desc');
		$select=$this->db->get();

		$Allcount=$select->num_rows();

		return $Allcount;
	}


//=========stagging list================//
	function get_stagging_list($limit,$start,$post,$country){
// print_r($post);die;
		$result=[];
		$Allresult=[];
		$user_id=$post['user_id'];           
		$this->db->select('hp.host_id,hp.user_id,hp.is_approve,hp.is_complete,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.total_bathrooms,hp.description,hp.base_price,hp.currency,IFNULL((select ROUND(AVG(rating),0) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,(select image from bgpkr_host_place_images where host_id=hp. host_id and is_cover = "1" and image_type="bedroom" LIMIT 1) as bedimage,(select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="bathroom" LIMIT 1) as bathimage,(select image from bgpkr_host_place_images where host_id =hp.host_id and is_cover = "1" and image_type="kitchen" LIMIT 1) as kitimage,IFNULL((select image from bgpkr_host_place_images where host_id=hp.host_id and is_cover = "1" and image_type="other" LIMIT 1),"") as otherimage,hp.lat,hp.lng,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id=hp.host_id),"0") AS status');
		$this->db->from('bgpkr_host_placetype as hp');
		$this->db->join('bgpkr_host_unavailable_date as bhu','hp.host_id=bhu.host_id','left');
		$this->db->where('hp.is_complete','1');
		$this->db->where('hp.is_approve ','1');
		$this->db->where('hp.is_delete','0');
		if($user_id!="0"){
			$this->db->where_not_in('hp.user_id',$user_id);
		}
		if(isset($post['maximum']) && $post['maximum']>0){
			$this->db->where('hp.base_price >=',$post['minimum']);
			$this->db->where('hp.max_price <=',$post['maximum']);       
		}
		if(isset($post['first_date']) && $post['second_date']>0){
			$first_date=date("Y-m-d".' 12:00:00', strtotime($post['first_date']));
			$second_date=date("Y-m-d".' 11:59:00', strtotime($post['second_date']));
			$date1=new DateTime($post['first_date']);
			$date2=new DateTime($post['second_date']);
			$days=$date2->diff($date1)->format('%a');
// $this->db->where('bhu.unavailable_date!=',$first_date);
// $this->db->where('bhu.unavailable_date!=',$second_date);
			$this->db->where("hp.host_id NOT IN(select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = hp.host_id and ((from_date<='".$first_date."' and to_date>='".$first_date."')
				OR
				(from_date<'".$second_date."' and  to_date>='".$second_date."')
				OR
				(from_date>='".$first_date."' and  to_date<'".$second_date."')))");
			$this->db->where('hp.stay_max_night >=',$days); 
		}

		if(isset($post['suitable_child'])){
			$this->db->where('hp.suitable_child','1');
		}
		if(isset($post['suitable_infants'])){
			$this->db->where('hp.suitable_infants','1');
		}
		if(isset($post['suitable_pets'])){
			$this->db->where('hp.suitable_pets','1');
		}
		if(isset($post['allow_smoking'])){
			$this->db->where('hp.allow_smoking','1');
		}

		if(isset($post['allow_parties'])){
			$this->db->where('hp.allow_parties','1');
		}
		if(isset($post['noise_potential'])){
			$this->db->where('hp.noise_potential','1');
		}
		if(isset($post['pet_live'])){
			$this->db->where('hp.pet_live','1');
		}
		if(isset($post['have_weapon'])){
			$this->db->where('hp.have_weapon','1');
		}
		if(isset($post['media_device'])){
			$this->db->where('hp.media_device','1');
		}
		if(isset($post['other_animal'])){
			$this->db->where('hp.other_animal','1');
		}
		if(isset($post['all_guest'])){
			$this->db->where('hp.total_guest>=',$post['all_guest']);
		}
		if(isset($post['beds_count'])){
			$this->db->where('hp.guest_bed>=',(int)$post['beds_count']);
		}
		if(isset($post['bedrooms_count'])){
			$this->db->where('hp.total_bedrooms>=',(int)$post['bedrooms_count']);
		}
		if(isset($post['entireplace'])){
			$this->db->where('hp.dedicated_for','Guest Entirely');
		}
		if(isset($post['hotelroom'])){
			$this->db->where('hp.dedicated_for','Host Belongings');
		}
//===============use for location===================//
		if(isset($post['location']) && !empty($post['location'])){
			$this->db->where('hp.city',$post['location']);
		}else{
			if($country=="USA"){
				$where="(hp.country='USA' or hp.country='United States')";
				$this->db->where($where);
			}else{
				$this->db->where('hp.country',$country);
			}	
		}
//=================end for location==================//
		if(isset($post['kitchen_dining'])){
			$All_kitchen=str_replace(",","|",$post['kitchen_dining']);
			$pattern = "[[:<:]]".$All_kitchen."[[:>:]]";
			$this->db->where('hp.kitchen_dining REGEXP','"'.$pattern.'"', false); 
		}
		if(isset($post['bed_baths'])){
			$All_bed_list=str_replace(",","|",$post['bed_baths']);
			$pattern1 = "[[:<:]]".$All_bed_list."[[:>:]]";
			$this->db->where('hp.bed_baths REGEXP','"'.$pattern1.'"', false); 
		}
		if(isset($post['entertainment'])){
			$All_ent_list=str_replace(",","|",$post['entertainment']);
			$pattern2= "[[:<:]]".$All_ent_list."[[:>:]]";
			$this->db->where('hp.entertainment REGEXP','"'.$pattern2.'"', false); 
		}
		if(isset($post['outside_amenities'])){
			$All_outside_list=str_replace(",","|",$post['outside_amenities']);
			$pattern3 = "[[:<:]]".$All_outside_list."[[:>:]]";
			$this->db->where('hp.outside_amenities REGEXP','"'.$pattern3.'"', false); 
		}
		if(isset($post['property_type'])){
			$All_property_list=str_replace(",","|",$post['property_type']);
			$pattern4 = "[[:<:]]".$All_property_list."[[:>:]]";
			$this->db->where('hp.property_type REGEXP','"'.$pattern4.'"', false); 
		}
		$this->db->group_by('hp.host_id');
		$this->db->order_by('hp.host_id','desc');
		$this->db->limit($limit,$start);
		$select=$this->db->get();
 // echo $this->db->last_query();die;
		if ($select->num_rows()>0) {
			$result=$select->result_array(); 
			foreach ($result as $key => $value) {
				if($value['currency']=="Dollar" && $value['base_price']<=100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Dollar" && $value['base_price']>100 && $value['base_price']<=300 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Dollar" && $value['base_price']>300){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}else if($value['currency']=="Rupees" && $value['base_price']<=700){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*5; 
				}else if($value['currency']=="Rupees" && $value['base_price']>700 && $value['base_price']<=2100 ){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*10; 
				}else if($value['currency']=="Rupees" && $value['base_price']>2100){
					$result[$key]['base_price']=$value['base_price']+($value['base_price']/100)*15; 
				}
				$result[$key]['base_price']=number_format($result[$key]['base_price'], 2, '.', ',');
				$result[$key]['base_price']=preg_replace('/\.00/', '', $result[$key]['base_price']); 
			} 
			$Allresult=["result"=>$result];
			return $Allresult;
		}else{
			return [];
		}
	}

//========like===================//

	function like($post){
		$select=$this->db->select('user_id,host_id')
		->where('user_id',$post['user_id'])
		->where('host_id',$post['host_id'])
		->get('bgpkr_wishlist');
		if($select->num_rows()>0){
			$update=$this->db->where('user_id',$post['user_id'])->where('host_id',$post['host_id'])->set('status',$post['status'])->update('bgpkr_wishlist');
			return 1;
		}else{
			$this->db->insert('bgpkr_wishlist',$post);
			$insert_id=$this->db->insert_id();
			if($insert_id>0){
				return 1;	
			}else{
				return 0;	
			}
		}                	
	}

	function getproperty_detail($host_id,$user_id){ 
		$date_time=date('Y-m-d H:i:s'); 
		$comment="0"; 
		$Allresult=[]; 
		$disabled_Date=[];
		$AllAmenties=[];   
		$allrating=[];
		$Allimages=[];
		$booking_date=[];
		$Alldate_array=[];
		$final_array=[];
		$check_in=[];
		$check_out=[];
		$booking_query=$this->db->select('from_date,DATE_FORMAT(from_date,"%Y-%m-%d")as from_date1,DATE_FORMAT(from_date,"%H:%i:%s")as from_time,to_date,DATE_FORMAT(to_date,"%Y-%m-%d")as to_date1,DATE_FORMAT(to_date,"%H:%i:%s")as to_time')
		->where('host_id',$host_id)
		->where('payment_status','1')
		->where('to_date>=',$date_time)
		->order_by('booking_id','desc')
		->get('bgpkr_booking');
		if($booking_query->num_rows()>0){
			$bookingresult=$booking_query->result_array();
			foreach ($bookingresult as $key => $value) {
				$check_out[]=date('m/d/Y',strtotime($value['from_date']));  
//===============check check out date=================//
				if(strtotime($value['to_time'])>=strtotime('20:00:00')){
					$disabled_Date[]=date('m/d/Y',strtotime($value['to_date']));
				}
				else{
					$check_in[]=date('m/d/Y',strtotime($value['to_date']));
				}
				$hourdiff = round((strtotime($value['to_date']) - strtotime($value['from_date']))/3600, 1);
				if($hourdiff>24){ 
					$Alldate_array[]=$this->date_range_list($value['from_date1'],$value['to_date1']);
				}    
			} 
			if(!empty($Alldate_array)){
				$final_array = call_user_func_array('array_merge', $Alldate_array);
				$final_array = "'" . implode ( "','",$final_array) . "'";
			}
		}                        

//===========check for comment=====================//

		$comment_query=$this->db->select('guest_id')
		->where('guest_id',$user_id)
		->where('to_date<',$date_time)
		->where('host_id',$host_id)
		->where('payment_status','1')
		->where('confirm_status','1')
		->order_by('booking_id','asc')
		->limit(1)
		->get('bgpkr_booking');
		if($comment_query->num_rows()>0){
			$newQuery=$this->db->select('guest_id')
			->where('guest_id',$user_id)
			->where('host_id',$host_id)
			->get('bgpkr_review_rating');
			if($newQuery->num_rows()>0){
				$comment="0";
			}else{
				$comment="1"; 
			}                   
		}else{
			$comment="0";
		}                         
//===========rating============//
		$query=$this->db->select('br.rating,br.review,br.added_on,bu.name,IFNULL(bu.user_image,"") as user_image')
		->from('bgpkr_review_rating as br')
		->join('bgpkr_users as bu','br.guest_id=bu.user_id','left')
		->where('host_id',$host_id)
		->get();
		$allrating=$query->result_array();
		$Allresult['allrating']=$allrating;                 
//============result================//     
		$select = $this->db->select('hp.host_id,hp.user_id,bu.name,IFNULL(bu.user_image,"") as user_image,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.guest_bed,hp.doublebeds,hp.queenbeds,hp.singlebeds,hp.sofabeds,hp.kingbeds,hp.twinbeds,hp.airbeds,hp.total_kingbed,hp.total_queenbed,hp.total_doublebed,hp.total_twinbed,hp.total_airbed,hp.total_bathrooms,hp.host_name,hp.profile_img,hp.introduction,hp.about_neighborhood,hp.lat,hp.lng,hp.description,hp.add_more,hp.if_any,hp.base_price,hp.currency,hp.basic_amenities,hp.kitchen_dining,hp.bed_baths,hp.entertainment,hp.outside_amenities,hp.safty_amenities,IFNULL((select AVG(rating) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,IFNULL(GROUP_CONCAT(distinct DATE_FORMAT(und.unavailable_date,"%m/%d/%Y")),"") as unavilable_date,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=1),0) as one_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=2),0) as two_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=3),0) as three_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=4),0) as four_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=5),0) as five_rating,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type="kitchen") LIMIT 1) as kitimage,hp.cleaning_fee,hp.stay_min_night as min_day,hp.stay_max_night as max_day,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id='.$host_id.'),"0") AS status,half_day_price')
		->from('bgpkr_host_placetype as hp')
		->join('bgpkr_users as bu','hp.user_id=bu.user_id','left')
		->join('bgpkr_host_unavailable_date as und','hp.host_id=und.host_id','left')
		->where('hp.host_id',$host_id)
		->where('hp.is_approve','1')
		->where('hp.is_complete','1')
		->where('hp.is_delete','0')
		->order_by('hp.host_id','desc')
		->get();
// echo $this->db->last_query();die;
		if($select->num_rows()>0){
			$result=$select->row_array();
			$bedrooms=[];
			$Totalbedroom=$result['total_bedrooms'];
			$doublebeds = explode(",", $result['doublebeds']);
			$queenbeds = explode(",", $result['queenbeds']);
			$singlebeds = explode(",", $result['singlebeds']);
			$sofabeds = explode(",", $result['sofabeds']);
			$kingbeds = explode(",", $result['kingbeds']);
			$twinbeds = explode(",", $result['twinbeds']);
			$airbeds = explode(",", $result['airbeds']);
			for ($i=1; $i<=$Totalbedroom ; $i++) {
				$bedrooms[$i]=$doublebeds[$i-1].','.$queenbeds[$i-1].','.$singlebeds[$i-1].','.$sofabeds[$i-1].','.$kingbeds[$i-1].','.$twinbeds[$i-1].','.$airbeds[$i-1];
			}
			$result['bedrooms']=$bedrooms;
			$result['unavilable_date']=explode(',',$result['unavilable_date']);
			$result['unavilable_date'] = "'" . implode ( "','",$result['unavilable_date']) . "'";

			if(isset($final_array) && !empty($final_array)){
				$result['unavilable_date']=$result['unavilable_date'].",".$final_array;
			} 
			if(isset($disabled_Date) && !empty($disabled_Date)){
				$disabled_Date="'" . implode ( "','",$disabled_Date) . "'"; 	
				$result['unavilable_date']=$result['unavilable_date'].",".$disabled_Date;
			} 
			if($result['currency']=="Dollar" && $result['base_price']<=100){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
			}else if($result['currency']=="Dollar" && $result['base_price']>100 && $result['base_price']<=300 ){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
			}else if($result['currency']=="Dollar" && $result['base_price']>300){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
			}else if($result['currency']=="Rupees" && $result['base_price']<=700){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
			}else if($result['currency']=="Rupees" && $result['base_price']>700 && $result['base_price']<=2100 ){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
			}else if($result['currency']=="Rupees" && $result['base_price']>2100){
				$result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
			}
			if(isset($check_in) && !empty($check_in)){
				$check_in= "'" . implode ( "','",$check_in) . "'";
				$result['check_in']=$check_in;	
			}
			if(isset($check_out) && !empty($check_out)){
				$check_out= "'" . implode ( "','",$check_out) . "'";
				$result['check_out']=$check_out;	
			}
//==========check in check out===============//
			$AllAmenties=$this->all_amenties_name($result['basic_amenities'],$result['kitchen_dining'],$result['bed_baths'],$result['entertainment'],$result['outside_amenities']);
			$Allresult['all_amenties']=$AllAmenties;
			$Allresult['result']=$result;

			$selectbImg4 = $this->db->select('image,is_cover,image_type')
			->where('host_id',$host_id)
			->where('image_type','other')
			->get('bgpkr_host_place_images');
			$Allimagesx[]=$selectbImg4->result_array();			
			
			$selectbImg = $this->db->select('image,is_cover,image_type')
			->where('host_id',$host_id)
			->where('image_type','bedroom')
			->get('bgpkr_host_place_images');
			$Allimagesx[]=$selectbImg->result_array();

			$selectbImg2 = $this->db->select('image,is_cover,image_type')
			->where('host_id',$host_id)
			->where('image_type','bathroom')
			->get('bgpkr_host_place_images');
			$Allimagesx[]=$selectbImg2->result_array();

			$selectbImg3 = $this->db->select('image,is_cover,image_type')
			->where('host_id',$host_id)
			->where('image_type','kitchen')
			->get('bgpkr_host_place_images');
			$Allimagesx[]=$selectbImg3->result_array();




			foreach ($Allimagesx as $valueimg) {
				foreach ($valueimg as $valueb) {
					$Allimages[] = $valueb;
				}
			}

			function cmp($a, $b)
			{
				if ($a["is_cover"] == $b["is_cover"]) {
					return 0;
				}
				return ($a["is_cover"] < $b["is_cover"]) ? 1 : -1;
			}

			usort($Allimages,"cmp");
			$Allresult['allimage']= $Allimages;
			$Allresult['comment']=$comment;
// print_r($Allresult);die;
			return $Allresult;	
		}else{
			return [];
		}
	}


//======================google_data======================//
	function google_data($data){
		$select=$this->db->select('user_id,email,name,acc_type as account_type,user_image as image')
		->where('google_id',$data['google_id'])
		->get('bgpkr_users');
		if($select->num_rows()>0){
			$result = $select->row_array();
			$this->db->set('acc_type',$data['acc_type'])->set('device_token',$data['device_token'])->where('google_id',$data['google_id'])->update('bgpkr_users');
			$result['account_type']=$data['acc_type'];
			$this->session->set_userdata('webuser_bgpkr',$result);
			return $result['user_id'];
		} 
		$select1=$this->db->select('email')
		->where('email',$data['email'])
		->get('bgpkr_users');
		if($select1->num_rows()>0){
			return 0;                   
		}else{
			return "new";
		}
	}               


//============fb_data====================//

	public function fb_data($data){
		$this->db->select('user_id,email,name,acc_type as account_type,user_image as image');
		$this->db->where('fb_id',$data['fb_id']);
		$select=$this->db->get('bgpkr_users');
		$result=$select->row_array();
		if($result['user_id']!=""){
			$this->db->set('acc_type',$data['acc_type'])->set('device_token',$data['device_token'])->where('fb_id',$data['fb_id'])->update('bgpkr_users');
			$result['account_type']=$data['acc_type'];
			$this->session->set_userdata('webuser_bgpkr',$result);
			return $result['user_id'];
		} 
		if(!empty($data['email'])){
			$this->db->select('email');
			$this->db->where('email',$data['email']);
			$select1=$this->db->get('bgpkr_users');
			if($select1->num_rows()>0){
				return 0;                   
			}else{
				return "new";
			}
		}else{
			return "new";
		}


}//===========function=========//

//========date list===================//

function date_range_list($first_date,$second_date){
	$newarray=[];  
	$array = array(); 
	$newdate = date('Y-m-d H:i:s', strtotime($first_date . ' +1 day')); 
	$Variable1=date(strtotime($newdate));
	$Variable2=date(strtotime($second_date));
	for ($currentDate = $Variable1; 
		$currentDate < $Variable2;                                  
		$currentDate += (86400)) {                                      
		$Store = date('m/d/Y', $currentDate); 
		$array[] = $Store; 
	}	
	return $array;
}

//============get_min_max=======================//

function get_min_max($country){
	$select=$this->db->select('IFNULL(MIN(min_price),0) as min_price,IFNULL(MAX(max_price),0) as max_price')
	->where('is_complete','1')
	->where('country',$country)
	->where('is_approve ','1')
	->get('bgpkr_host_placetype');
	$result=$select->row_array();
	return $result; 
}
//=================All amenties name and images=================//
function all_amenties_name($basic_amenities,$kitchen_dining,$bed_baths,$entertainment,$outside_amenities){
	$Alldata=[]; 
	$amenties_url =base_url().'assets/all_amenties/';
	$AllAmenties =$basic_amenities.','.$kitchen_dining.','.$bed_baths.','.$entertainment.','.$outside_amenities; 
	$AllIDarray=explode(',', $AllAmenties);
	foreach ($AllIDarray as $value) {
		$select = $this->db->select("name,image")
		->where('id',$value)
		->get('bgpkr_all_amenities');
		$result=$select->row_array();
		if($result['image']!=""){
			$result['image']=$amenties_url.$result['image'];
		}
		$Alldata[]=$result;
	}
	return $Alldata;
}

//=========property_comment================//

function property_comment($post){
	$this->db->insert('bgpkr_review_rating',$post);
	$insert_id=$this->db->insert_id();
	if($insert_id>0){
		return 1;
	}else{
		return 0;
	} 
}

//=============newsletter=================//

function newsletter($post){
	$data=["email"=>$post['news_email'],"added_on"=>date('Y-m-d')];
	$this->db->insert('bgpkr_newsletter',$data);
	$insert_id=$this->db->insert_id();
	if($insert_id>0){
		return 1;
	}else{
		return 0;
	}  
}

//================get property things guests should know =====================//      
function guestKnow($host_id){
	$select = $this->db->select('noise_potential,pet_live,have_weapon,media_device,other_animal')
	->where('host_id',$host_id)
	->get('bgpkr_host_placetype');
	if ($select->num_rows()>0) {
		$result = $select->result_array();
		return $result[0];  
	}                

}            

//================get property things guest take care =====================//      
function thingTakeCare($host_id){
	$select = $this->db->select('suitable_child,suitable_infants,suitable_pets,allow_smoking,allow_parties')
	->where('host_id',$host_id)
	->get('bgpkr_host_placetype');
	if ($select->num_rows()>0) {
		$result = $select->result_array();
		return $result[0];  
	}  
} 

//=============check_date=======================//

function check_date($post){	
//=============check fo one day========================//	
	if($post['day']=="1"){
//============check half day booking avilable==============//	
		$select=$this->db->select('half_day_booking')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
		$result=$select->row_array();
		if($result['half_day_booking'] =='1'){		
			$first_time=date("Y-m-d".' 08:00:00', strtotime($post['from_date']));
			$second_time=date("Y-m-d".' 18:00:00', strtotime($post['from_date']));
			$third_time=date("Y-m-d".' 12:00:00', strtotime($post['from_date']));
			$fourth_time=date("Y-m-d".' 11:59:00', strtotime($post['to_date']));	
			$fifth_time=date("Y-m-d".' 20:00:00', strtotime($post['from_date']));
			$sixth_time=date("Y-m-d".' 06:00:00', strtotime($post['to_date']));

			$sql1="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_time."' and to_date>='".$first_time."') OR (from_date<'".$second_time."' and  to_date>='".$second_time."') OR (from_date>='".$first_time."' and  to_date<'".$second_time."'))";
			$query1=$this->db->query($sql1);
			$first_slot=$query1->num_rows();

			$sql2="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$fifth_time."' and to_date>='".$fifth_time."') OR (from_date<'".$sixth_time."' and  to_date>='".$sixth_time."') OR (from_date>='".$fifth_time."' and  to_date<'".$sixth_time."'))";
			$query2=$this->db->query($sql2);
			$second_slot=$query2->num_rows();

			$sql3="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$third_time."' and to_date>='".$third_time."') OR (from_date<'".$fourth_time."' and  to_date>='".$fourth_time."') OR (from_date>='".$third_time."' and  to_date<'".$fourth_time."'))";
			$query3=$this->db->query($sql3);
			$third_slot=$query3->num_rows();
//============0 mean avilable==================//
//=============other wise unavilable===============//
			if($first_slot=="0" || $second_slot=="0" || $third_slot=="0"){
return 1;//=========avilable==========//	
}else{
return 0;//=========not avilable==========//	
}
}
//==============half day booking not avilable================//
else{
	$select1=$this->db->select('checkin_from,checkout_to')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
	$hostdata=$select1->row_array();
	$check_in=date("H:i:s", strtotime($hostdata['checkin_from']));
	$check_out=date("H:i:s", strtotime($hostdata['checkout_to']));
	$first_date=date("Y-m-d ".$check_in, strtotime($post['from_date']));
	$second_date=date("Y-m-d ".$check_out, strtotime($post['to_date']));
	$new_sql="select host_id from bgpkr_booking WHERE payment_status = '1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_date."' and to_date>='".$first_date."')
	OR
	(from_date<'".$second_date."' and  to_date>='".$second_date."')
	OR
	(from_date>='".$first_date."' and  to_date<'".$second_date."'))";
	$new_query=$this->db->query($new_sql);
	$new_result=$new_query->row_array();
	if($new_result['host_id']==""){
return 1;//==========avilable========//	
}else{
return 0; //==========not avilable=================//
}
}
}
//===============use for more than 1 day booking==============//
else{
	$select=$this->db->select('checkin_from,checkout_to')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
	$hostdata=$select->row_array();
	$check_in=date("H:i:s", strtotime($hostdata['checkin_from']));
	$check_out=date("H:i:s", strtotime($hostdata['checkout_to']));
	$first_date=date("Y-m-d ".$check_in, strtotime($post['from_date']));
	$second_date=date("Y-m-d ".$check_out, strtotime($post['to_date']));
	$sql="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_date."' and to_date>='".$first_date."')
	OR
	(from_date<'".$second_date."' and  to_date>='".$second_date."')
	OR
	(from_date>='".$first_date."' and  to_date<'".$second_date."'))";
	$query=$this->db->query($sql);
	$result=$query->row_array();
	if($result['host_id']==""){
return 1; //===========avilable============//	
}else{
return 0; //==============not avilable==============
}
}//else===========//
}

//=================check avilable date========================//

function check_avilable($host_id,$from_date,$to_date){	
	$todayDate=date('Y-m-d');	
	if($from_date>=$todayDate && $to_date>=$todayDate){
		$select=$this->db->select('half_day_booking')->where('host_id',$host_id)->get('bgpkr_host_placetype');
		$result=$select->row_array();
		if($result['half_day_booking']=='1'){		
			$first_time=date("Y-m-d".' 08:00:00', strtotime($from_date));
			$second_time=date("Y-m-d".' 18:00:00', strtotime($from_date));
			$third_time=date("Y-m-d".' 12:00:00', strtotime($from_date));
			$fourth_time=date("Y-m-d".' 11:59:00', strtotime($to_date));	
			$fifth_time=date("Y-m-d".' 20:00:00', strtotime($from_date));
			$sixth_time=date("Y-m-d".' 06:00:00', strtotime($to_date));	
			$sql1="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$host_id."' and ((from_date<='".$first_time."' and to_date>='".$first_time."') OR (from_date<'".$second_time."' and  to_date>='".$second_time."') OR (from_date>='".$first_time."' and  to_date<'".$second_time."'))";
			$query1=$this->db->query($sql1);
			$first_slot=$query1->num_rows();

			$sql2="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$host_id."' and ((from_date<='".$fifth_time."' and to_date>='".$fifth_time."') OR (from_date<'".$sixth_time."' and  to_date>='".$sixth_time."') OR (from_date>='".$fifth_time."' and  to_date<'".$sixth_time."'))";
			$query2=$this->db->query($sql2);
			$second_slot=$query2->num_rows();

			$sql3="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$host_id."' and ((from_date<='".$third_time."' and to_date>='".$third_time."') OR (from_date<'".$fourth_time."' and  to_date>='".$fourth_time."') OR (from_date>='".$third_time."' and  to_date<'".$fourth_time."'))";
			$query3=$this->db->query($sql3);
			$third_slot=$query3->num_rows();

// echo $first_slot;echo "<br>";
// echo $second_slot;echo "<br>";
// echo $third_slot;die();

//=======comment 0 mean avilable==================//
//========other wise not avilable=================//
			if($first_slot=="0" && $second_slot=="0" && $third_slot=="0"){
				return "All";	
			}else if($first_slot=="0" && $second_slot>="1" && $third_slot>="1"){
				return "first";	
			}else if($first_slot=="0" && $second_slot=="0" && $third_slot>="1"){
				return "first_second";	
			}else if($first_slot>="1" && $second_slot=="0" && $third_slot=="0"){
				return "second_third";	
			}else if($first_slot>="1" && $second_slot=="0" && $third_slot>="1"){
				return "third";	
			}else if($first_slot>="1" && $second_slot>="1" && $third_slot>="1"){
				return "not_avilable";	
			}
			else if($first_slot=="0" && $second_slot>="0" && $third_slot>="1"){
				return "first_third";	
			}
		}
		else{
			return "not_avilable";		
		}
	}else{
		return "not_avilable";	
	}
}

//===================get_check_date=======================//

function get_check_date($post){	
	if($post['from_date']>=date('Y-m-d')){	
//=============check fo one day========================//	
		if($post['day']=="1"){
//============check half day booking avilable==============//	
			$select=$this->db->select('half_day_booking')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
			$result=$select->row_array();
			if($result['half_day_booking']=='1'){		
				$first_time=date("Y-m-d".' 08:00:00', strtotime($post['from_date']));
				$second_time=date("Y-m-d".' 18:00:00', strtotime($post['from_date']));
				$third_time=date("Y-m-d".' 12:00:00', strtotime($post['from_date']));
				$fourth_time=date("Y-m-d".' 11:59:00', strtotime($post['to_date']));	
				$fifth_time=date("Y-m-d".' 20:00:00', strtotime($post['from_date']));
				$sixth_time=date("Y-m-d".' 06:00:00', strtotime($post['to_date']));	
				$sql1="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_time."' and to_date>='".$first_time."') OR (from_date<'".$second_time."' and  to_date>='".$second_time."') OR (from_date>='".$first_time."' and  to_date<'".$second_time."'))";
				$query1=$this->db->query($sql1);
				$first_slot=$query1->num_rows();

				$sql2="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$fifth_time."' and to_date>='".$fifth_time."') OR (from_date<'".$sixth_time."' and  to_date>='".$sixth_time."') OR (from_date>='".$fifth_time."' and  to_date<'".$sixth_time."'))";
				$query2=$this->db->query($sql2);
				$second_slot=$query2->num_rows();

				$sql3="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$third_time."' and to_date>='".$third_time."') OR (from_date<'".$fourth_time."' and  to_date>='".$fourth_time."') OR (from_date>='".$third_time."' and  to_date<'".$fourth_time."'))";
				$query3=$this->db->query($sql3);
				$third_slot=$query3->num_rows();

// echo $first_slot;echo "<br>";
// echo $second_slot;echo "<br>";
// echo $third_slot;die();
//============0 mean avilable==================//
//=============other wise unavilable===============//
				if($first_slot=="0" || $second_slot=="0" || $third_slot=="0"){
return 1;//=========avilable==========//	
}else{
return 0;//=========not avilable==========//	
}
}
//==============half day booking not avilable================//
else{
	$select1=$this->db->select('checkin_from,checkout_to')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
	$hostdata=$select1->row_array();
	$check_in=date("H:i:s", strtotime($hostdata['checkin_from']));
	$check_out=date("H:i:s", strtotime($hostdata['checkout_to']));
	$first_date=date("Y-m-d ".$check_in, strtotime($post['from_date']));
	$second_date=date("Y-m-d ".$check_out, strtotime($post['to_date']));
	$new_sql="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_date."' and to_date>='".$first_date."')
	OR
	(from_date<'".$second_date."' and  to_date>='".$second_date."')
	OR
	(from_date>='".$first_date."' and  to_date<'".$second_date."'))";
	$new_query=$this->db->query($new_sql);
	$new_result=$new_query->row_array();
	if($new_result['host_id']==""){
return 1;//==========avilable========//	
}else{
return 0; //==========not avilable=================//
}
}
}
//===============use for more than 1 day booking==============//
else{
	$select=$this->db->select('checkin_from,checkout_to')->where('host_id',$post['host_id'])->get('bgpkr_host_placetype');
	$hostdata=$select->row_array();
	$check_in=date("H:i:s", strtotime($hostdata['checkin_from']));
	$check_out=date("H:i:s", strtotime($hostdata['checkout_to']));
	$first_date=date("Y-m-d ".$check_in, strtotime($post['from_date']));
	$second_date=date("Y-m-d ".$check_out, strtotime($post['to_date']));
	$sql="select host_id from bgpkr_booking WHERE payment_status='1' AND host_id = '".$post['host_id']."' and ((from_date<='".$first_date."' and to_date>='".$first_date."')
	OR
	(from_date<'".$second_date."' and  to_date>='".$second_date."')
	OR
	(from_date>='".$first_date."' and  to_date<'".$second_date."'))";
	$query=$this->db->query($sql);
	$result=$query->row_array();
	if($result['host_id']==""){
return 1; //===========avilable============//	
}else{
return 0; //==============not avilable==============
}
}//else===========//
}else{
	return 0;
}
}

//=========user_msg=================//

function user_msg($data){
	$select=$this->db->select('s_id')->where('s_id',$data['s_id'])->where('r_id',$data['r_id'])->where('type','simple')->get('bgpkr_chat');
	if($select->num_rows==0){
		$this->msg_email($data['s_id'],$data['r_id']);	
	}	
	$this->db->insert('bgpkr_chat',$data);
	if($this->db->insert_id()>0){
		return 1;
	}else{
		return 0;
	}	
}

//=================msg email==================//

function msg_email($s_id,$r_id){
	$mail = new Common1(); 
	$select=$this->db->select('name')->where('user_id',$s_id)->get('bgpkr_users');
	$result=$select->row_array();
	$select1=$this->db->select('name,email')->where('user_id',$r_id)->get('bgpkr_users');
	$result1=$select1->row_array();
	$subject="New guest message.";
	$img =base_url().'assets/images/pinicon.png';
	$img1 =base_url().'assets/images/logo.png';
	$referal_url=base_url().'referral';
	$message = "<img src=".$img." style='float:left; margin-right:20px;width:50px'/><br><br><p>Hi ".$result1['name'].",<br>
	You have new message from ".$result['name']." regarding your apartment. Please check your Bagpackar account to see the message and reply.</p>

	<p>Refer your friend and earn up to $30 towards your travel credit. Please read more about our <a href=".$referal_url."> Referral program</a></p><br>
	Regards,<br>
	Bagpackar, LLC
	<br><img src=".$img1." style='float:left; margin-right:20px;width:110px'/></p>";
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
	$res=$mail->email_user($result1['email'],$body,$subject);
	return 1;
}


}//========class========================//