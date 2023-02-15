<?php
class User_model extends CI_Model
{
   /* ==================== Get All Countries =================== */
       function get_countries(){
       	$select = $this->db->select('id,country_name,country_code,country_image')
       	                   ->get('maiwater_country');
       	 if($select->num_rows() > 0)
		{   
			$result = $select->result_array();
			foreach ($result as $key => $value) {
				$selectc = $this->db->select('id as city_id,city_name,lat,lng')
       	                           ->where('country_id',$value['id'])
       	                            ->get('maiwater_city');
       	               if($selectc->num_rows() > 0)
						{   
							$result[$key]['cities'] = $selectc->result_array();
							
				        }
			}
			return $result;
        }                 
       }

    /* ==================== Get All Countries =================== */
       function get_filter(){
       	 $allData = [];
       	 $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
		$this->db->select('filter_sizes_arabic as size,filter_bottles_arabic as bottles,filter_flavours_arabic as flavour');
		 }else{
		$this->db->select('filter_sizes as size,filter_bottles as bottles,filter_flavour as flavour');
		 }
		             $selectb = $this->db->get('maiwater_filters');
		             if ($selectb->num_rows()>0) {
		             	$data= $selectb->result_array();
		             	foreach ($data as $value) {
		             		$allData['size']=explode(', ', $value['size']);
		             		$allData['bottles']=explode(', ', $value['bottles']);
		             		$allData['flavour']=explode(', ', $value['flavour']);
		             	}
		             }
                     
			    return $allData;               
       }   

     /* ==================== Get All home data =================== */
       function get_home($dataArr){
       	$allData = [];
            $searchStr = @$dataArr['search_text']?$dataArr['search_text']:'';
            $where='';
			// $where .= "( b.brand_english_name LIKE '%$searchStr%' OR";
            // $where .= " b.brand_arabic_name LIKE '%$searchStr%' )";
            $where .= "( p.product_english_name LIKE '%$searchStr%' OR";
            $where .= " p.product_arabic_name LIKE '%$searchStr%' )";

             $searchterm = '1';
             $where1 = "FIND_IN_SET('".$searchterm."', b.category_id)"; 
             $searchterm2 = '2';
             $where2 = "FIND_IN_SET('".$searchterm2."', b.category_id)";
             
        $select = $this->db->select('id,banner_image,banner_redirection,banner_type')
       	                   ->where('status','1')
       	                   ->get('maiwater_banners');
        $allData['banners'] = $select->result_array();
		 //========== get brand =======//
		 $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
			$this->db->select('b.id as brand_id,b.brand_arabic_name as name,b.brand_logo');
		 }else{
			$this->db->select('b.id as brand_id,b.brand_english_name as name,b.brand_logo');
		 }
		             $this->db->from('maiwater_brands as b');
                     $this->db->join('maiwater_product as p','p.brand=b.id','left');
                     $this->db->where('b.status','1');

		             if (isset($dataArr['search_text']) && !empty($dataArr['search_text'])) {
	                 $this->db->where($where);
			         }
                    
                    if (isset($dataArr['sizes']) && !empty($dataArr['sizes']) && $getLanguage == 'en') {
                     $this->db->where("p.sizes REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['sizes'] . "',', ','|'), ')(,|$)')");
                      }

                    if (isset($dataArr['sizes']) && !empty($dataArr['sizes']) && $getLanguage == 'ar') {
                     $this->db->where("p.sizes_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['sizes'] . "',', ','|'), ')(,|$)')");
                      }
                     
                     if (isset($dataArr['bottles']) && !empty($dataArr['bottles']) && $getLanguage == 'en') {
			         $this->db->where("p.bottles REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['bottles'] . "',', ','|'), ')(,|$)')");
                      }

                      if (isset($dataArr['bottles']) && !empty($dataArr['bottles']) && $getLanguage == 'ar') {
			         $this->db->where("p.bottles_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['bottles'] . "',', ','|'), ')(,|$)')");
                      }

                     if (isset($dataArr['flavour']) && !empty($dataArr['flavour']) && $getLanguage == 'en') {
                      $this->db->where("p.flavour REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['flavour'] . "',', ','|'), ')(,|$)')");
                      }  

                      if (isset($dataArr['flavour']) && !empty($dataArr['flavour']) && $getLanguage == 'ar') {
                      $this->db->where("p.flavours_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['flavour'] . "',', ','|'), ')(,|$)')");
                      }

			         if (@$dataArr['brand_category'] && $dataArr['brand_category'] == 'beverages') {
	                 $this->db->where( $where2 );
			         }else{
			         	$this->db->where( $where1 );
			         }

                     $this->db->group_by('b.id');
       	             //$this->db->order_by('b.id','desc');
                     $selectb = $this->db->get(); 
                  $resArr = $selectb->result_array();
                  foreach ($resArr as $key => $value) {
                  	$imgLogo = explode(', ', $value['brand_logo']);
                  	$resArr[$key]['brand_logo'] = $imgLogo[0];
                  }
       	   //echo $this->db->last_query();die;
       	  if (@$dataArr['brand_category'] && $dataArr['brand_category'] == 'beverages') {
          	        $allData['brands']['water'] = [];
	                 $allData['brands']['beverages'] = $resArr;
			         }else{
			         $allData['brands']['water'] = $resArr;
			         $allData['brands']['beverages'] = [];
			         }
               
          $allData['brands']['cart_count'] = 0;
          if (@$dataArr['customer_id']) {
          $cartc = $this->db->select('count(id) as cartcount')
       	                    ->from('maiwater_cart_items as ci')
       	                    ->join('maiwater_cart as cr','cr.id=ci.cart_id','left')
       	                    ->where('cr.customer_id',$dataArr['customer_id'])
       	                    ->get();
       	              if ($cartc->num_rows()>0) {
       	                    	$rescart = $cartc->row();
       	                    	$allData['brands']['cart_count'] = $rescart->cartcount; 
       	                    }      
                        }

			return $allData;
        }    

      /* ==================== Get brand products =================== */
       function brandProducts($dataArr){
       	$allData = [];
       	$brand_id = $dataArr['brand_id'];
       	    $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
			$this->db->select('b.id as brand_id,b.brand_arabic_name as name,b.brand_logo,b.free_delevery_charge_from');
		 }else{
			$this->db->select('b.id as brand_id,b.brand_english_name as name,b.brand_logo,b.free_delevery_charge_from');
		 }
                  $this->db->where('b.id',$brand_id);
       	          $this->db->where('b.status','1');
       	$select = $this->db->get('maiwater_brands as b');
       	                   
       	 if($select->num_rows()>0)
		 {   
		 	$searchStr = @$dataArr['search_text']?$dataArr['search_text']:'';
            $where='';
		 	$where .= "( p.product_english_name LIKE '%$searchStr%' OR";
            $where .= " p.product_arabic_name LIKE '%$searchStr%' )";

			$allData['brand'] = $select->result_array();
			$allData['brand'][0]['brand_logo']=explode(', ', $allData['brand'][0]['brand_logo']);
		 
			 if($getLanguage == 'ar'){
				 $this->db->select('p.id as product_id,p.product_arabic_name as product_name,p.product_image,p.price,p.quantity');
			 }else{
				 $this->db->select('p.id as product_id,p.product_english_name as product_name,p.product_image,p.price,p.quantity');
			 }
                   $this->db->from('maiwater_brands as b');
	               $this->db->join('maiwater_product as p','p.brand=b.id','left');
	                 if (isset($dataArr['search_text']) && !empty($dataArr['search_text'])) {
	                 $this->db->where($where);
			         }

			         if (isset($dataArr['sizes']) && !empty($dataArr['sizes']) && $getLanguage == 'en') {
                     $this->db->where("p.sizes REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['sizes'] . "',', ','|'), ')(,|$)')");
                      }

                    if (isset($dataArr['sizes']) && !empty($dataArr['sizes']) && $getLanguage == 'ar') {
                     $this->db->where("p.sizes_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['sizes'] . "',', ','|'), ')(,|$)')");
                      }
                     
                     if (isset($dataArr['bottles']) && !empty($dataArr['bottles']) && $getLanguage == 'en') {
			         $this->db->where("p.bottles REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['bottles'] . "',', ','|'), ')(,|$)')");
                      }

                      if (isset($dataArr['bottles']) && !empty($dataArr['bottles']) && $getLanguage == 'ar') {
			         $this->db->where("p.bottles_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['bottles'] . "',', ','|'), ')(,|$)')");
                      }

                     if (isset($dataArr['flavour']) && !empty($dataArr['flavour']) && $getLanguage == 'en') {
                      $this->db->where("p.flavour REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['flavour'] . "',', ','|'), ')(,|$)')");
                      }  

                      if (isset($dataArr['flavour']) && !empty($dataArr['flavour']) && $getLanguage == 'ar') {
                      $this->db->where("p.flavours_arabic REGEXP CONCAT('(, |^)(', REPLACE( '" . $dataArr['flavour'] . "',', ','|'), ')(,|$)')");
                      }

			         if (@$dataArr['product_category'] && $dataArr['product_category'] == 'beverages') {
	                 $this->db->where('p.category','2');
			         }else{
			         	$this->db->where('p.category','1');
			         }
	               
	               $this->db->where('b.id',$brand_id);
       	           $this->db->where('p.status','1');
       	           //$this->db->order_by('p.id','desc');
            $selectb = $this->db->get();
       	        
       	     if (@$dataArr['product_category'] && $dataArr['product_category'] == 'beverages') {
       	     	     $allData['products']['water'] = [];
	                 $allData['products']['beverages'] = $selectb->result_array();
	                 if (isset($dataArr['customer_id']) && !empty($dataArr['customer_id'])) {
	                 	foreach ($allData['products']['beverages'] as $key => $value) {
	                 		$wishselect = $this->db->select('id')
	                 		                       ->where('user_id',$dataArr['customer_id'])
	                 		                       ->where('product_id',$value['product_id'])
	                 		                       ->get('maiwater_wishlist');
	                 		                if ($wishselect->num_rows()>0) {
	                 		            $allData['products']['beverages'][$key]['wishlist_status']='1';
	                 		                       }else{
	                 		            $allData['products']['beverages'][$key]['wishlist_status']='0';
	                 		                       }
	   
	         $allData['products']['beverages'][$key]['cart_status']= '0';
             $allData['products']['beverages'][$key]['cart_item_id']= '';
             $allData['products']['beverages'][$key]['cart_id']= '';
             $allData['products']['beverages'][$key]['product_quantity']= '0'; 

$query = $select=$this->db->select('id')
                          ->where('customer_id',$dataArr['customer_id'])
                          ->get('maiwater_cart');
if ($query->num_rows()>0) {
$result = $query->row_array();
$this->db->select('ci.cart_item_id,ci.cart_id,ci.product_quantity');
$this->db->from('maiwater_cart_items as ci');
$this->db->join('maiwater_product as p','ci.product_id=p.id','left');
$this->db->join('maiwater_brands as b','b.id=p.brand','left');
$this->db->where('ci.product_id',$value['product_id']);
$this->db->where('ci.cart_id',$result['id']);
$this->db->order_by('ci.cart_item_id','desc');
$query1 = $this->db->get();
if($query1->num_rows()>0){
$result_items = $query1->result_array();
$allData['products']['beverages'][$key]['cart_status']= '1';
$allData['products']['beverages'][$key]['cart_item_id']= $result_items[0]['cart_item_id'];
$allData['products']['beverages'][$key]['cart_id']= $result_items[0]['cart_id'];
$allData['products']['beverages'][$key]['product_quantity']= $result_items[0]['product_quantity'];
}
} 

	                 	}
	                 }

			         }else{
			         	$allData['products']['water'] = $selectb->result_array();
			         	$allData['products']['beverages'] = [];
			         	if (isset($dataArr['customer_id']) && !empty($dataArr['customer_id'])) {
	                 	foreach ($allData['products']['water'] as $key => $value) {
	                 		$wishselect = $this->db->select('id')
	                 		                       ->where('user_id',$dataArr['customer_id'])
	                 		                       ->where('product_id',$value['product_id'])
	                 		                       ->get('maiwater_wishlist');
	                 		                if ($wishselect->num_rows()>0) {
	                 		                $allData['products']['water'][$key]['wishlist_status']='1';
	                 		                       }else{
	                 		                $allData['products']['water'][$key]['wishlist_status']='0';
	                 		                       } 

	         $allData['products']['water'][$key]['cart_status']= '0';
             $allData['products']['water'][$key]['cart_item_id']= '';
             $allData['products']['water'][$key]['cart_id']= '';
             $allData['products']['water'][$key]['product_quantity']= '0';    		                       
		$query = $select=$this->db->select('id')
		->where('customer_id',$dataArr['customer_id'])
		->get('maiwater_cart');
		if ($query->num_rows()>0) {
		$result = $query->row_array();
		$this->db->select('ci.cart_item_id,ci.cart_id,ci.product_quantity');
		$this->db->from('maiwater_cart_items as ci');
		$this->db->join('maiwater_product as p','ci.product_id=p.id','left');
		$this->db->join('maiwater_brands as b','b.id=p.brand','left');
		$this->db->where('ci.product_id',$value['product_id']);
		$this->db->where('ci.cart_id',$result['id']);
		$this->db->order_by('ci.cart_item_id','desc');
		$query1 = $this->db->get();
		if($query1->num_rows()>0){
		$result_items = $query1->result_array();
		$allData['products']['water'][$key]['cart_status']= '1';
		$allData['products']['water'][$key]['cart_item_id']= $result_items[0]['cart_item_id'];
		$allData['products']['water'][$key]['cart_id']= $result_items[0]['cart_id'];
		$allData['products']['water'][$key]['product_quantity']= $result_items[0]['product_quantity'];
		}
		          }                    
	                 	}
	                }
			    }
			
		 
		}
            return $allData;
        }                
        
    /* ==================== Get product detail =================== */
       function getProductDetail($product_id){
       	     $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
			$this->db->select('p.id as product_id,p.product_arabic_name as name,p.product_image,p.product_arabic_description as description,b.brand_arabic_name as brand_name');
		 }else{
			$this->db->select('p.id as product_id,p.product_english_name as name,p.product_image,p.product_english_description as description,b.brand_english_name as brand_name');
		 }
		               $this->db->from('maiwater_product as p');
		               $this->db->join('maiwater_brands as b','b.id=p.brand','left');
                       $this->db->where('p.id',$product_id);
   	                   $this->db->where('p.status','1');
   	        $selectb = $this->db->get();
   	        //echo $this->db->last_query();die;
       	 if($selectb->num_rows() > 0)
		 {   
            $allData = $selectb->result_array();
             return $allData[0];
		 }
		
      }   

    /* ==================== Save search data =================== */
   
	function searchBrandProduct($data) 
		 {   
		 	$allData=[];
		 	$headers = apache_request_headers();
		    $getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];

		    $searchStr = @$data['search_text']?$data['search_text']:'';
            $where='';
		
		 	if($getLanguage == 'ar'){
            $where .= "( p.product_arabic_name LIKE '%$searchStr%' OR";
            $where .= " p.brand_arabic_name LIKE '%$searchStr%' )";
          $this->db->select('b.id as brand_id,p.id as product_id,p.product_arabic_name as name,c.category_arabic_name as product_category');
			 }else{
			 	$where .= "( p.product_english_name LIKE '%$searchStr%' OR";
                $where .= " b.brand_english_name LIKE '%$searchStr%' )";
         $this->db->select('b.id as brand_id,p.id as product_id,p.product_english_name as name,c.category_english_name as product_category');
			 }
                   $this->db->from('maiwater_brands as b');
	               $this->db->join('maiwater_product as p','p.brand=b.id','left');
	               $this->db->join('maiwater_category as c','c.id=p.category','left');
	                      
		             if (isset($data['search_text']) && !empty($data['search_text'])) {
	                 $this->db->where($where);
			         }
	               
	               $this->db->where('p.status','1');
       	           $this->db->limit(100);
       	           //$this->db->order_by('p.id','desc');
        $selectb = $this->db->get();
       	   
			$allData['search_arr'] = $selectb->result_array();
		 //}
		return $allData;

		}  

   /* ==================== Get All Countries =================== */
  //      function get_city($country_id){
  //      	$select = $this->db->select('id,city_name')
  //      	                   ->where('country_id',$country_id)
  //      	                   ->get('maiwater_city');
  //      	 if($select->num_rows() > 0)
		// {   
		// 	$result = $select->result_array();
		// 	return $result;
  //       }                 
  //      }add_address
   /* ==================== Save New User =================== */
   
	function save_User($data_insert) 
		 { 
		 	$select = $this->db->select('customer_id')
		 	                   ->where('device_id',$data_insert['device_id'])
		 	                   ->where('customer_type','guest')
		 	                   ->get('maiwater_customer');
		 	 if ($select->num_rows()>0) {
                     $res = $select->result_array();
                    $this->db->where('customer_id',$res[0]['customer_id']);
                    $this->db->update('maiwater_customer', $data_insert);
                    if ($this->db->affected_rows()>0) {
                     	return ($this->getuserinfo($res[0]['customer_id']));
                     } 
		 	}else{
            $insert = $this->db->insert('maiwater_customer', $data_insert);
			$insertId = $this->db->insert_id();
			if($insert)
			{
			 return ($this->getuserinfo($insertId));
			}

		 	 }
		}

   /* ==================== Save User device id =================== */
     function saveUser_device($data) 
		 { 
		 	$select = $this->db->select('customer_id')
		 	                   ->where('device_id',$data['device_id'])
		 	                   ->get('maiwater_customer');
		 	 if ($select->num_rows()>0) {
		 	        $res = $select->result_array();
		 	        return ($this->getuserinfo($res[0]['customer_id']));             	
		 	      }else{                   
			$insert = $this->db->insert('maiwater_customer', $data);
			$insertId = $this->db->insert_id();
			if($insert)
			{
				return ($this->getuserinfo($insertId));
			}
		}
	 }

	/* ============================ User Login ========================== */
     function signin($array)
	 {	
		$mobile_number = $array['mobile_number'];
		$password = md5($array['password']);

  //       $sql2 = "SELECT customer_id FROM maiwater_customer WHERE mobile = ? AND password = ? AND status = '0'";
		// $query1 = $this->db->query($sql2, array($mobile_number, $password));
		// if($query1->num_rows() >= 1)
		// {   
  //           return 2;                 
  //       }
        $sql = "SELECT customer_id FROM maiwater_customer WHERE mobile = ? AND password = ? AND status = '1'";

		$query = $this->db->query($sql, array($mobile_number, $password));
		$result = $query->result_array();
		if($query->num_rows() >= 1)
		{   
			$user_id = $result[0]['customer_id'];
		    $accesskey = $this->common->generateRandomString(10);
		    $accessdata = array('auth_token' => $accesskey);
		    $this->db->where('customer_id',$user_id);
		    $this->db->update('maiwater_customer',$accessdata);
			return ($this->getuserinfo($user_id));
		}
		else
		{
			return false;
		}
	 }
	

  /* ====================== User Profile Information ===================== */
	
	function getuserinfo($user_id)
	{	
		$this->db->select('u.customer_id,u.email_id,u.name,u.profile_pic,u.country_code,u.mobile,u.city,u.building_villa,u.house_no,u.noti_status,u.auth_token,u.customer_type');
		$this->db->from('maiwater_customer as u');
		$this->db->where('u.customer_id',$user_id);
		$query = $this->db->get();
		$result = $query->row();
		//$path = base_url()."uploads/userprofile/" .$user_id.'/' ;
		$arr = [];
		$arr['customer_id'] = $result->customer_id;
		$arr['email_id'] = $result->email_id? $result->email_id : '';
		$arr['name'] = $result->name ? $result->name : '';
		$arr['profile_picture'] = $result->profile_pic ? $result->profile_pic : '';
		$arr['country_code'] = $result->country_code ? $result->country_code : '';
		$arr['mobile_number'] = $result->mobile ? $result->mobile : '';
		$arr['city'] = $result->city ? $result->city : '';
		$arr['building_villa'] = $result->building_villa ? $result->building_villa : '';
		$arr['house_no'] = $result->house_no ? $result->house_no : '';
		$arr['customer_type'] = $result->customer_type ? $result->customer_type : '';
		$arr['noti_status'] = $result->noti_status?$result->noti_status:'1';
		$arr['token'] = $result->auth_token ? $result->auth_token: '';
		return $arr;
	}
  
    /* ========================= Save New address ========================== */
   
	function add_address($dataArr) 
		 { 
		 	$data = array('customer_id' => $dataArr['customer_id'],
                          'name'  => $dataArr['name'],
                          'mobile_number' => $dataArr['mobile_number'],
                          'country_code' => $dataArr['country_code'],
                          'email_id'  => @$dataArr['email_id']?$dataArr['email_id']:'',
                          'city'  => $dataArr['city'], 
                          'house_no'  => @$dataArr['house_no']?$dataArr['house_no']:'',
                          'landmark'  => @$dataArr['landmark']?$dataArr['landmark']:'',
                          'address'  => @$dataArr['address']?$dataArr['address']:'',
                          'address_type'  => $dataArr['address_type'],
                          'is_default' => '0',
                          'is_shipping' => '0'
		 	            );
            $insert = $this->db->insert('maiwater_customer_address', $data);
			if($insert)
			{
			 return 1;
			}

		}
     
    /* ========================== edit address ============================ */
   
	function edit_address($dataArr) 
		 { 
		 	$data = array( 
                          'name'  => $dataArr['name'],
                          'mobile_number'  => $dataArr['mobile_number'],
                          'country_code' => $dataArr['country_code'],
                          'email_id'  => @$dataArr['email_id']?$dataArr['email_id']:'',
                          'city'  => $dataArr['city'], 
                          'house_no'  => @$dataArr['house_no']?$dataArr['house_no']:'',
                          'landmark'  => @$dataArr['landmark']?$dataArr['landmark']:'',
                          'address'  => @$dataArr['address']?$dataArr['address']:'',
                          'address_type'  => $dataArr['address_type']
		 	            );
		 	$this->db->where('address_id',$dataArr['address_id']);
            $this->db->where('customer_id',$dataArr['customer_id']);
            $this->db->update('maiwater_customer_address', $data);
			if($this->db->affected_rows()>0)
			{
			 return 1;
			}

		}

    /* ========================== set customer default address ============================ */
   
	function setDefault_address($dataArr) 
		 { 
		 	$data = array( 'is_default' => '0' );
		 	$this->db->where('customer_id',$dataArr['customer_id']);
            $this->db->update('maiwater_customer_address', $data);

		 	$data = array( 'is_default' => '1' );
		 	$this->db->where('address_id',$dataArr['address_id']);
            $this->db->where('customer_id',$dataArr['customer_id']);
            $this->db->update('maiwater_customer_address', $data);
			if($this->db->affected_rows()>0)
			{
			 return 1;
			}

		}
		
     /* ==================== Save get user addresses =================== */
   
	function get_address($user_id) 
		 { 
		 	$select = $this->db->select('address_id,customer_id,name,city,mobile_number,country_code,email_id,house_no,landmark,address,address_type,is_default')
		 	                   ->where('customer_id',$user_id)
		 	                   ->order_by('address_id','desc')
		 	                   ->get('maiwater_customer_address');
            if($select->num_rows()>0)
			{
			 $result=$select->result_array();	
			 return $result;
			}

		}

   /* ==================== Save get user addresses =================== */
   
	function getAddress($user_id,$country_id) 
		 { 
		 	$result=[];
            
				$selectc = $this->db->select('id as city_id,city_name')
       	                            ->where('country_id',$country_id)
       	                            ->get('maiwater_city');
       	               if($selectc->num_rows() > 0)
						{   
							$resultcities = $selectc->result_array();
							foreach ($resultcities as $key2 => $valcity) {
				$result[$key2]['city_name']	= $valcity['city_name'];
		$select = $this->db->select('address_id,customer_id,name,city,mobile_number,country_code,email_id,house_no,landmark,address,address_type,is_default')
		 	                   ->where('customer_id',$user_id)
		 	                   ->where('city',$valcity['city_name'])
		 	                   ->order_by('address_id','desc')
		 	                   ->get('maiwater_customer_address');
               
               $result[$key2]['address']=$select->result_array();	
			
                      }

							return $result;
							
				        }
			
		}		

   /* ==================== Save delete user addresses =================== */
   
	function remove_address($data) 
		 { 
		 	$this->db->where('address_id',$data['address_id']);
		 	$this->db->where('customer_id',$data['customer_id']);
		 	$this->db->delete('maiwater_customer_address');
            if($this->db->affected_rows()>0)
			{
			 return 1;
			}

		}		
 /* ===================== Function to verified otp old user =================== */
   
	function verify_otp($arrayPost)
	{   
        $select = $this->db->select('customer_id')
                           ->where('customer_id',$arrayPost['customer_id'])
                           ->where('otp',$arrayPost['otp'])
                           ->get('maiwater_customer');
           if ($select->num_rows()>0) { 
           	           $otpArr = array('is_otp_verified' => '1');
           	           $this->db->where('customer_id',$arrayPost['customer_id']);
           	           $this->db->update('maiwater_customer',$otpArr);
            	      return ($this->getuserinfo($arrayPost['customer_id']));   	
                          } else{
                          	return false;
                          }              
	}

   /* =============== Function to update otp ================= */
	    function update_otp($id,$otp_var)
		{    
		  $data = array('otp' => $otp_var );
	  	  $this->db->where('customer_id',$id);
	  	  $this->db->update('maiwater_customer',$data);
	  	  return ($this->getuserinfo($id));
		}
  /* =============== Function to turn on/off notificatio ================= */
     
     function notiOnnOff($data) 
     {     
	      $noti = array('noti_status' => $data['noti_set']);         
	      $this->db->where('customer_id',$data['customer_id']);      
	      $this->db->update('maiwater_customer',$noti);
	      if ($this->db->affected_rows()>0) {
	           return 1;  	
	      }            
     }

   /* ================ Function to check email exits on this id ================== */
   
	function checkEmail($arrData)
	{
       $select = $this->db->select('customer_id')
                          ->where('customer_id',$arrData['customer_id'])
                          ->where('email_id',$arrData['email_id'])
                          ->get('maiwater_customer');
       if ($select->num_rows()>0) {
       	return true;
       }else{
       	return false;
       }

	}

	/* ================ Function to check email exits on this id ================== */
   
	function checkmailExist($email)
	{
       $select = $this->db->select('customer_id')
                          ->where('email_id',$email)
                          ->where('email_id !=','')
                          ->get('maiwater_customer');
       if ($select->num_rows()>0){
       	return true;
       }else{
       	return false;
       }

	}

	/* ================ Function to check mobile exits and verify ================== */
   
	function checkMobileVerify($mobile_number)
	{
       // $select = $this->db->select('customer_id')
       //                    ->where('is_otp_verified','1')
       //                    ->where('mobile',$mobile_number)
       //                    ->get('maiwater_customer');
       // if ($select->num_rows()>0) {
       // 	return true;
       // }else{
          $select2 = $this->db->select('customer_id,email_id,is_otp_verified')
                              ->where('mobile',$mobile_number)
                              ->get('maiwater_customer');
                  if ($select2->num_rows()>0) {
                  	   $res = $select2->result_array();
                              return $res[0];	
                              }            
       	
       //}

	}

	/* ================ Function to check email exits and verify ================== */
   
	function check_email_verify($email)
	{
       $select = $this->db->select('customer_id')
                          ->where('is_otp_verified','1')
                          ->where('email_id',$email)
                          ->get('maiwater_customer');
       if ($select->num_rows()>0) {
       	return true;
       }else{
       	return false;
       }

	}

	/* ================ Function to check email exits and verify ================== */
   
	function checkOldemail($email,$user_id)
	{
       $select = $this->db->select('customer_id')
                          ->where('customer_id',$user_id)
                          ->where('email_id',$email)
                          ->get('maiwater_customer');
       if ($select->num_rows()>0) {
       	return true;
       }else{
       	return false;
       }

	}
   
    /* ====================== Edit Email check ===================== */

	 function edit_email($email,$user_id){
		
     $select = $this->db->select('customer_id')
                        ->where('customer_id !=',$user_id)
                        ->where('email_id',$email)
                        ->where('is_otp_verified','1')
                        ->get('maiwater_customer');
        if($select->num_rows() >= 1)
		{
			return true;
		}
		else
		{
			return false;
		}           
     }

    /* ================== Function for update user device info ===================== */
    function deviceUp($deviceArr)
	{   
		$data = array( 
			          'device_token' => $deviceArr['device_token'] ? $deviceArr['device_token'] :'', 
			          'device_type' => $deviceArr['device_type']
			         );
	    $this->db->where('customer_id',$deviceArr['customer_id']);
		$this->db->update('maiwater_customer',$data);   
        if ($this->db->affected_rows()>0) {
       	return 1;
       }else{
       	return 2;
       }
	}
   /* ============================== add wish list ============================== */
        function wishlist($dataArr) 
		 { 
		 	$headers = apache_request_headers();
		    $getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
            
            if ($dataArr['status'] == 1) {
		 	$data_insert = array('user_id' => $dataArr['customer_id'],
		 	                     'product_id' => $dataArr['product_id'] );
			$insert = $this->db->insert('maiwater_wishlist', $data_insert);
			if($insert)
			{
				return 1;
			}
		 	}elseif ($dataArr['status'] == 0) {
		 		$this->db->where('user_id',$dataArr['customer_id']);
		 		$this->db->where('product_id',$dataArr['product_id']);
		 		$this->db->delete('maiwater_wishlist');
		 		$af_row = $this->db->affected_rows();
		 		if ($af_row>0) {
             if($getLanguage == 'ar'){
             $this->db->select('p.id as product_id,p.product_arabic_name as name,p.product_image,p.product_arabic_description as description,p.price,p.quantity');
			 }else{
			$this->db->select('p.id as product_id,p.product_english_name as name,,p.product_image,p.product_english_description as description,p.price,p.quantity');
			 }
	                       $this->db->from('maiwater_product as p');
	                       $this->db->join('maiwater_wishlist as w','w.product_id = p.id','left');
	                       $this->db->where('w.user_id',$dataArr['customer_id']);
       	                   $this->db->where('status','1');
       	        $select = $this->db->get();
       	                   $result = $select->result_array();
       	        if (empty($result) && $af_row>0)
                {
              	 return 2;
                }
                else{
		 	     return $result;
		 	    }        	        
		 	}
		 	
		}
	}


	/* ============================= get wish list ============================= */

        function getwishlist($user_id) 
		 {  
		 	  $headers = apache_request_headers();
		    $getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];

		 	    if($getLanguage == 'ar'){
             $this->db->select('p.id as product_id,p.product_arabic_name as name,p.product_image,p.product_arabic_description as description,p.price,p.quantity,b.brand_arabic_name as brand_name');
			 }else{
			$this->db->select('p.id as product_id,p.product_english_name as name,,p.product_image,p.product_english_description as description,p.price,p.quantity,b.brand_english_name as brand_name');
			 }
	                       $this->db->from('maiwater_product as p');
	                       $this->db->join('maiwater_wishlist as w','w.product_id = p.id','left');
	                       $this->db->join('maiwater_brands as b','b.id = p.brand','left');
	                       $this->db->where('w.user_id',$user_id);
       	                   $this->db->where('p.status','1');
       	         $select = $this->db->get();
       	              if ($select->num_rows()>0) {
       	                   	$result = $select->result_array();
       	                   	foreach ($result as $key => $value) {
		       	  
					$result[$key]['cart_status']= '0';
					$result[$key]['cart_item_id']= '';
					$result[$key]['cart_id']= '';
					$result[$key]['cart_quantity']= '0';		       	                  

					$query = $select=$this->db->select('id')
					->where('customer_id',$user_id)
					->get('maiwater_cart');
					if ($query->num_rows()>0) {
					$resultCart = $query->row_array();
					$this->db->select('ci.cart_item_id,ci.cart_id,ci.product_quantity');
					$this->db->from('maiwater_cart_items as ci');
					$this->db->join('maiwater_product as p','ci.product_id=p.id','left');
					$this->db->join('maiwater_brands as b','b.id=p.brand','left');
					$this->db->where('ci.product_id',$value['product_id']);
					$this->db->where('ci.cart_id',$resultCart['id']);
					$this->db->order_by('ci.cart_item_id','desc');
					$query1 = $this->db->get();
					if($query1->num_rows()>0){
					$result_items = $query1->result_array();
					$result[$key]['cart_status']= '1';
					$result[$key]['cart_item_id']= $result_items[0]['cart_item_id'];
					$result[$key]['cart_id']= $result_items[0]['cart_id'];
					$result[$key]['cart_quantity']= $result_items[0]['product_quantity'];
					}
					}
                    
                          }
       	                   return $result;
       	                   }else{
       	                   	return false;
       	                   }     
       	                   
		 }
   /* ====================== funtion to change password  ===================== */
	
	function change_password($array)
	 {
		    $this->db->select('u.password');
			$this->db->from('maiwater_customer as u');
			$this->db->where('u.customer_id',$array['customer_id']);
			$this->db->where('u.password',$array['old_password']);
            $query = $this->db->get();
			$result=$query->result();
			if (empty($result[0]->password)) {
				return 1;
			}
			  else
				{
			    $accesskey = $this->common->generateRandomString(10);
				$password = $array['new_password'];
				$this->db->set('password',$password);
				$this->db->where('customer_id',$array['customer_id']);
				$this->db->update('maiwater_customer');
				return 3;
                }
				
	 }

	 /* ====================== funtion to reset password  ===================== */
	
	function reset_password($array)
	 {
		    $this->db->select('u.password');
			$this->db->from('maiwater_customer as u');
			$this->db->where('u.customer_id',$array['customer_id']);
			$this->db->where('u.password',$array['password']);
            $query = $this->db->get();
			$result=$query->result();
			if (!empty($result[0]->password)) {
				return false;
			}
			  else
				{
			    $accesskey = $this->common->generateRandomString(10);
				$password = $array['password'];
				$this->db->set('password',$password);
				$this->db->where('customer_id',$array['customer_id']);
				$this->db->update('maiwater_customer');
				return 3;
                }
				
	 }
 
 // ==================== Add to Cart =================== //

function add_to_cart($data){ 
$select=$this->db->select('id')->where('customer_id',$data['customer_id'])->get('maiwater_cart');
if($select->num_rows()==0){
	$data_insert =['customer_id' => $data['customer_id'],"added_on"=>date('Y-m-d H:i:s')];
	$insert = $this->db->insert('maiwater_cart',$data_insert);
	$insertId = $this->db->insert_id(); 
}else{
	$cartresult=$select->row_array();
	$insertId=$cartresult['id']; 
} 

$charge = $this->db->select('b.shipping_charge,b.free_delevery_charge_from,b.vendor_id')
                   ->from('maiwater_product as p')
                   //->join('maiwater_product as p','p.id=s.shipping_id','left')
                   ->join('maiwater_brands as b','b.id=p.brand','left')
                   ->where('p.id',$data['product_id'])
                   ->get();
    $result = $charge->row();
    $charges_price = $result->shipping_charge;   
    $freeCharges_from = $result->free_delevery_charge_from;
    $vendor_id = $result->vendor_id;

$cartArr = array('cart_id' => $insertId, 
                 'product_id' => $data['product_id'],
                 'product_unit_price' => $data['unit_price'],
                 'product_quantity' => $data['quantity'],
                 'total_amount' => $data['total_amount'],
                 'shipping_charges' => ($freeCharges_from<=$data['total_amount'])?0:$charges_price,
                 'tax' => $data['total_amount']*(14/100),
                 'vendor_id' => $vendor_id 
                );
  $this->db->where('cart_id',$insertId);
  $this->db->where('product_id',$data['product_id']);
  $this->db->delete('maiwater_cart_items');

  $insertCart = $this->db->insert('maiwater_cart_items',$cartArr);
if ($insertCart) {
return true;
}
else{
return false;
}
}

// ==================== Update cart =================== /

function update_cart($data) {

 $charge = $this->db->select('b.shipping_charge,b.free_delevery_charge_from,b.vendor_id')
                   ->from('maiwater_product as p')
                   ->join('maiwater_brands as b','b.id=p.brand','left')
                   ->where('p.id',$data['product_id'])
                   ->get();
    $result = $charge->row();
    $charges_price = $result->shipping_charge;   
    $freeCharges_from = $result->free_delevery_charge_from;
    $vendor_id = $result->vendor_id;

$total_amount = $data['unit_price']*$data['quantity'];

$cartArr = array(
                 'product_quantity' => $data['quantity'],
                 'total_amount' => $total_amount,
                 'shipping_charges' => ($freeCharges_from<=$total_amount)?0:$charges_price,
                 'tax' => $total_amount*(14/100) 
                );
//print_r($cartArr);die;
     $this->db->where('product_id',$data['product_id']);
     $this->db->where('cart_item_id',$data['cart_item_id']);
     $this->db->update('maiwater_cart_items',$cartArr);

//echo $this->db->affected_rows();die;
if($this->db->affected_rows()>0){ 
return ($this->all_cart_list($data['customer_id']));
}else{
return false; 
}

}

// ==================== All Saved Items in Cart =================== /

function all_cart_list($user_id) { 
//print_r('szadfsas');die;
$dataArr = [];
$query = $select=$this->db->select('id')
                          ->where('customer_id',$user_id)
                          ->get('maiwater_cart');
if ($query->num_rows()>0) {
                       $result = $query->row_array();
 $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
$this->db->select('ci.cart_item_id,ci.cart_id,ci.product_id,ci.product_unit_price,ci.product_quantity,ci.total_amount,ci.shipping_charges,ci.tax,ci.vendor_id,p.product_image,b.brand_arabic_name as brand_name,p.product_arabic_name as name,p.product_arabic_description as description,p.quantity as total_quantity');
      }else{                    
$this->db->select('ci.cart_item_id,ci.cart_id,ci.product_id,ci.product_unit_price,ci.product_quantity,ci.total_amount,ci.shipping_charges,ci.tax,ci.vendor_id,p.product_image,b.brand_english_name as brand_name,p.product_english_name as name,p.product_english_description as description,p.quantity as total_quantity');
}
$this->db->from('maiwater_cart_items as ci');
$this->db->join('maiwater_product as p','ci.product_id=p.id','left');
$this->db->join('maiwater_brands as b','b.id=p.brand','left');
$this->db->where('ci.cart_id',$result['id']);
$this->db->order_by('ci.cart_item_id','desc');
$query1 = $this->db->get();
if($query1->num_rows()>0){
$result_items = $query1->result_array();
$total_amount = 0; 
$total_tax = 0;
$subTotat = 0;  
foreach ($result_items as $key => $value) {
	$total_tax = $total_tax+$value['tax'];
    $subTotat = $subTotat+$value['shipping_charges']+$value['total_amount'];
	$total_amount = $total_amount+$value['tax']+$value['shipping_charges']+$value['total_amount'];
}

$dataArr['cart_count'] = 0;
         
          $cartc = $this->db->select('count(id) as cartcount')
       	                    ->from('maiwater_cart_items as ci')
       	                    ->join('maiwater_cart as cr','cr.id=ci.cart_id','left')
       	                    ->where('cr.customer_id',$user_id)
       	                    ->get();
       	              if ($cartc->num_rows()>0) {
       	                    	$rescart = $cartc->row();
       	                    	$dataArr['cart_count'] = $rescart->cartcount; 
       	                    }      
                        

$dataArr['total_tax'] = $total_tax;
$dataArr['subTotat'] = $subTotat;
$dataArr['total_amount'] = $total_amount;
$dataArr['cart_list'] = $result_items;
return $dataArr;
}else{
return false;
}
          } else{
             return false;
          }                         



} 
// ==================== function for remove from cart =================== /

function remove_cart($data){ 
$this->db->where('cart_item_id',$data['cart_item_id'])->delete('maiwater_cart_items');
if ($this->db->affected_rows()>0) {
	return ($this->all_cart_list($data['customer_id']));
}else{
	return false;
}
 
}

// ==================== function for set Subscription =================== /

function setSubscription($data){ 
      
    $this->db->where('customer_id',$data['customer_id']);
    $this->db->delete('maiwater_subscription');

    $subsArr = array('customer_id' => $data['customer_id'],
    	             'plan_name' => $data['plan_name'],
    	             'day' => @$data['day']?$data['day']:'',
                     'monthly_delevery_time' => @$data['monthly_delevery_time']?$data['monthly_delevery_time']:'',
                     'dates' => @$data['dates']?$data['dates']:'' 
                    );

    $insert = $this->db->insert('maiwater_subscription',$subsArr);
    if($insert) {
    	return true;
    }else{
    	return false;
    }

 
}

// ==================== function for get Subscription =================== /

function subscriptionlist($customer_id){ 

    $select = $this->db->select('plan_name,monthly_delevery_time,day,monthly_delevery_time,dates')
                       ->where('customer_id',$customer_id)
                       ->get('maiwater_subscription');
    if ($select->num_rows()>0) {
    	$res = $select->result_array();
    	return $res;
    }else{
    	return false;
    }

 
}

/* ==================== Update Profile =================== */
   
	function update_profile($data_insert,$user_id) 
    { 
    	$profile='';
        $query = $this->db->where('customer_id', $user_id)->get('maiwater_customer');
		if ($query->num_rows() > 0)
		{
			$result = $query->result_array();
			if (empty($_FILES['profile_image']['name']))
			{
				$profile = $result[0]['profile_pic'] ? $result[0]['profile_pic'] : '';
			}
			elseif (!empty($_FILES['profile_image']['name']))
			{   
              $images = $_FILES['profile_image']['name'];
        $ext = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
        $accesskey = $this->common->generateRandomString(10);
        $profile_picture = rand(100, 999).$accesskey. '.' . $ext;
        $temp_name = $_FILES['profile_image']['tmp_name'];
                $folder = 'customer_image';
                $profile = $this->s3Image_upload($profile_picture,$temp_name,$folder);
            }
        }
		
         if ($profile) {
         	$data_insert['profile_pic']=$profile;
         }
		
	    $insert=$this->db->where('customer_id',$user_id);
		$this->db->update('maiwater_customer',$data_insert);
		$af_row = $this->db->affected_rows();
		if($af_row>0)
			{
				return ($this->getuserinfo($user_id));
			}elseif (!empty($data_insert)) {
				return ($this->getuserinfo($user_id));
			}
		}

  /*=============== function for s3 Image upload ===============*/
    public function s3Image_upload($name,$temp_name,$folder){
    if($this->s3->putObjectFile($temp_name, "maiwater-dev","$folder/$name", S3::ACL_PUBLIC_READ)) {
        return "https://maiwater-dev.s3.us-west-2.amazonaws.com/".$folder."/".$name;
        }else{
        	$data = array
					(
					"error_string"=>lang('File Upload Error'), 
					"error_code"=>EXIT_ERROR
					);
					$this->response($data, 202);
					exit;
              }

      }		

  /* ====================== chack mobile verified or not ===================== */
    
     function get_email_verify($email){

     	$select = $this->db->select('is_otp_verified,status')
     	                   ->where('email_id',$email)
     	                   ->get('maiwater_customer');
     	            $result = $select->result_array();
     	            if ($result) {
     	            if ($result[0]['status'] == '0') {
     	            	return 2;
     	            }
     	            if ($result[0]['is_otp_verified'] == '1') {
     	                    return 1;
     	                   }else{
     	                   	return 0;
     	                   } 

     	            }
     	                 
	    }
   
    /* ====================== get product for suqia delevery ===================== */
    
     function getProduct($user_id){
       
         $select = $this->db->select('id,banner_image,banner_redirection,banner_type')
       	                   ->where('status','1')
       	                   ->get('maiwater_banners');
        $allData['banners'] = $select->result_array();

        $headers = apache_request_headers();
		$getLanguage = $headers['HTTP_ACCEPT_LANGUAGE'];
		if($getLanguage == 'ar'){
				 $this->db->select('id as product_id,product_arabic_name as product_name,product_image,price,quantity,brand as brand_id');
			 }else{
				 $this->db->select('id as product_id,product_english_name as product_name,product_image,price,quantity,brand as brand_id');
			 }
                       $this->db->where('status','1');
   	        $selectb = $this->db->get('maiwater_product');
       	 if($selectb->num_rows() > 0)
		 {   
            $allData['product'] = $selectb->result_array();
            return $allData;
		 }
     	                 
	    }

	 /* ====================== function for get suqia location ===================== */
    
       function getlocation($type,$city){
         $select = $this->db->select('type,lat,lng,name')
                            ->where('type',$type)
                            ->where('city',$city)
                            ->get('maiwater_suqia_places');
                   if ($select->num_rows()>0) {
                              $res = $select->result_array();
                              return $res;     	
                            }else{
                              return false;
                            }         
        }    
    
    /* ====================== function for add suqia delevery ===================== */
    
     function addSuqia($data_insert,$product_detail){
       $insert = $this->db->insert('maiwater_suqia_orders', $data_insert);
       $insertId = $this->db->insert_id();
			if($insert)
			{
                foreach ($product_detail as $value) {
                	$arrProduct = array('suqia_delivery_id' => $insertId,
                	                    'product_id' => $value['product_id'],
                	                    'quantity' => $value['quantity']);
                	$insert = $this->db->insert('maiwater_suqia_product', $arrProduct);
                }
			 return 1;
			}
     	}   
    
    /* ====================== function for Add height and weight ===================== */
    
     function setBMI($data){
      $data_insert = array('weight' => $data['weight'],
                           'height' => $data['height'] );
       $this->db->where('customer_id',$data['customer_id']);	
       $this->db->update('maiwater_customer', $data_insert);
       if($this->db->affected_rows()>0)
			{
             return 1;
			}
     	}

  /* ====================== chack mobile verified or not ===================== */
     function get_email($email){
        $select = $this->db->select('customer_id')
     	                   ->where('email_id',$email)
     	                   ->get('maiwater_customer');
     	            if ($select->num_rows()>0) {
     	            	$result = $select->result_array();
     	              return  $result[0]['customer_id'];
                    }
     	                 
	}

}
