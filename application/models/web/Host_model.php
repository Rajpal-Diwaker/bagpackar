<?php
class Host_model extends CI_Model
{

  /* ==================== add Host Detail (form 1&2nd) =================== */
  function addHostPlace($data,$hostId,$compArr) 
	{   
    if ($hostId == '0') {
      $insert = $this->db->insert('bgpkr_host_placetype', $data);
      if($insert)
      { $insertId = $this->db->insert_id();
        $compArr['host_id'] = $insertId;
        $insert = $this->db->insert('bgpkr_host_complete_status', $compArr);
        return $insertId;
      }else{
        return false;
      } 
    }else{
       $this->db->where('host_id',$hostId);
       $this->db->update('bgpkr_host_placetype', $data);

       $this->db->where('host_id',$hostId);
       $this->db->update('bgpkr_host_complete_status', $compArr);
       return $hostId;
    }      		
  }
  
  /* ==================== add Host Detail (form 3rd vehicle) =================== */
  // function addHostVehicle($data,$hostId,$images) 
  // {   
  //     $select = $this->db->select('vehicle_id')
  //                        ->where('host_id',$hostId)
  //                        ->get('bgpkr_host_vehicle');
  //      if ($select->num_rows()>0) {
  //          $result = $select->result_array(); 
  //          $vehicleId = $result[0]['vehicle_id'];
  //          $this->db->where('host_id',$hostId);
  //          $this->db->update('bgpkr_host_vehicle', $data);

  //          $this->db->where('vehicle_id',$vehicleId);
  //          $this->db->delete('bgpkr_host_vehicle_images');

  //          foreach ($images as $key => $value) {
  //               $imgData = array('vehicle_id' => $vehicleId,
  //                                'img_url' => $value );
  //             $insertImage = $this->db->insert('bgpkr_host_vehicle_images', $imgData); 
  //           }
  //         return $hostId;
  //       }else{
  //         $insert = $this->db->insert('bgpkr_host_vehicle', $data);
  //         $insertId = $this->db->insert_id();

  //         $compArr = array('form_3' => '1' );
  //         $this->db->where('host_id',$hostId);
  //         $this->db->update('bgpkr_host_complete_status', $compArr);

  //         if($insert)
  //         { 
  //           foreach ($images as $key => $value) {
  //               $imgData = array('vehicle_id' => $insertId,
  //                                'img_url' => $value );
  //             $insertImage = $this->db->insert('bgpkr_host_vehicle_images', $imgData); 
  //           }
  //         }
  //         return $hostId;
  //       } 
       
  //   }         
  
   /* ==================== add Host Detail (form 4th bedrooms) =================== */
    //  function addHostbedrooms($data,$hostId) 
    //  {   
    //   $select = $this->db->select('bedrooms_id')
    //                      ->where('host_id',$hostId)
    //                      ->get('bgpkr_host_bedrooms');
    //    if ($select->num_rows()>0) {
    //        $this->db->where('host_id',$hostId);
    //        $this->db->update('bgpkr_host_bedrooms', $data);
    //        return $hostId;
    //     }else{
    //       $insert = $this->db->insert('bgpkr_host_bedrooms', $data);
            
    //       $compArr = array('form_4' => '1' );
    //       $this->db->where('host_id',$hostId);
    //       $this->db->update('bgpkr_host_complete_status', $compArr);  

    //       return $hostId;
    //     } 
       
    // }
   /* ==================== add Host Detail (form 5th address) =================== */
    //  function addHostAddress($data,$hostId) 
    //  {   
    //   $select = $this->db->select('address_id')
    //                      ->where('host_id',$hostId)
    //                      ->get('bgpkr_host_address');
    //    if ($select->num_rows()>0) {
    //        $this->db->where('host_id',$hostId);
    //        $this->db->update('bgpkr_host_address', $data);
    //        return $hostId;
    //     }else{
    //       $insert = $this->db->insert('bgpkr_host_address', $data);

    //       $compArr = array('form_5' => '1' );
    //       $this->db->where('host_id',$hostId);
    //       $this->db->update('bgpkr_host_complete_status', $compArr);
    //       return $hostId;
    //     } 
    // }

    /* ==================== add Host Detail (form 6th and 7th address) =================== */
    //  function addHostAmenities($data,$hostId,$compArr) 
    //  {   
    //   $select = $this->db->select('amenities_id')
    //                      ->where('host_id',$hostId)
    //                      ->get('bgpkr_host_amenities');
    //    if ($select->num_rows()>0) {
    //        $this->db->where('host_id',$hostId);
    //        $this->db->update('bgpkr_host_amenities', $data);

    //        $this->db->where('host_id',$hostId);
    //       $this->db->update('bgpkr_host_complete_status', $compArr);
    //        return $hostId;
    //     }else{
    //       $insert = $this->db->insert('bgpkr_host_amenities', $data);

    //       $this->db->where('host_id',$hostId);
    //       $this->db->update('bgpkr_host_complete_status', $compArr);
    //       return $hostId;
    //     } 
    // } 

    /* ==================== add Host Detail (form 8th address) =================== */
     function addHostBedBathKitchen($bedroom,$bathroom,$kitchen,$other_img,$postData) 
     {     
           //bedroom image
          if (!empty($bedroom)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','bedroom');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($bedroom); $i++) { 
                $cover = '0';
                if ($postData['bedroomCover'] == $i) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'bedroom',
                                 'image' => $bedroom[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
         }
          //bathroom image
         if (!empty($bathroom)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','bathroom');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($bathroom); $i++) { 
                $cover = '0';
                if ($postData['bathroomCover'] == $i) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'bathroom',
                                 'image' => $bathroom[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
           }
            //kitchen image
           if (!empty($kitchen)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','kitchen');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($kitchen); $i++) { 
                $cover = '0';
                if ($postData['kitchenCover'] == $i) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'kitchen',
                                 'image' => $kitchen[$i],
                                 'is_cover'  => $cover
                                );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
          }
        
        if (!empty($other_img)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','other');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($other_img); $i++) { 
                $cover = '0';
                if ($postData['otherImgCover'] == $i) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'other',
                                 'image' => $other_img[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
        }  

          $compArr = array('form_8' => '1' );
          $this->db->where('host_id',$postData['hostId']);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $postData['hostId'];die;
     } 
   
     /* ==================== add Host Detail (form 8th address) =================== */
     function editimages($bedroom,$bathroom,$kitchen,$other_img,$postData) 
     {     
           //bedroom image
          if (!empty($bedroom)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','bedroom');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($bedroom); $i++) { 
                $cover = '0';
                if ($postData['bedroomCover'] == $bedroom[$i]) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'bedroom',
                                 'image' => $bedroom[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
         }
          //bathroom image
         if (!empty($bathroom)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','bathroom');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($bathroom); $i++) { 
                $cover = '0';
                if ($postData['bathroomCover'] == $bathroom[$i]) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'bathroom',
                                 'image' => $bathroom[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }

           }
            //kitchen image
           if (!empty($kitchen)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','kitchen');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($kitchen); $i++) { 
                $cover = '0';
                if ($postData['kitchenCover'] == $kitchen[$i]) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'kitchen',
                                 'image' => $kitchen[$i],
                                 'is_cover'  => $cover
                                );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
          }
        
        if (!empty($other_img)) {
           $this->db->where('host_id',$postData['hostId']);
           $this->db->where('image_type','other');
           $this->db->delete('bgpkr_host_place_images');
            for ($i=0; $i < count($other_img); $i++) { 
                $cover = '0';
                if ($postData['otherImgCover'] == $other_img[$i]) {
                 $cover = '1';
                }
                $imgData = array('host_id' => $postData['hostId'],
                                 'image_type'=>'other',
                                 'image' => $other_img[$i],
                                 'is_cover'  => $cover
                                 );
              $insertImage = $this->db->insert('bgpkr_host_place_images', $imgData); 
            }
        }  

          $compArr = array('form_8' => '1' );
          $this->db->where('host_id',$postData['hostId']);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $postData['hostId'];die;
     } 
   /* ==================== add Host Detail (form 9th description) =================== */
    //  function addHostListDes($data,$hostId) 
    //  {   
    //   $select = $this->db->select('id')
    //                      ->where('host_id',$hostId)
    //                      ->get('bgpkr_host_description');
    //    if ($select->num_rows()>0) {
    //        $this->db->where('host_id',$hostId);
    //        $this->db->update('bgpkr_host_description', $data);
    //        return $hostId;
    //     }else{
    //       $insert = $this->db->insert('bgpkr_host_description', $data);

    //       $compArr = array('form_9' => '1' );
    //       $this->db->where('host_id',$hostId);
    //       $this->db->update('bgpkr_host_complete_status', $compArr);
    //       return $hostId;
    //     } 
    // }

  /* ==================== add Host Detail (form 10th host detail) =================== */
  function addHostDetail($data,$hostId,$images,$user_id) 
  {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
          
           $imgArr = array('government_id1' => $images[0], 
                           'government_id2' => $images[1]
                           );
           //print_r($imgArr);die;
           
           $this->db->where('user_id',$user_id);
           $this->db->update('bgpkr_users',$imgArr);
           //echo $this->db->last_query();die;

           // foreach ($images as $key => $value) {
           //      $imgData = array('host_id' => $hostId,
           //                       'govid_url' => $value );
           //    $insertImage = $this->db->insert('bgpkr_host_government_id', $imgData); 
           //  }
         
          $compArr = array('form_10' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $hostId;
        
    }

    /* ==================== add Host Detail (form 11th description) =================== */
     function addHostGuestCare($data,$hostId) 
     {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
       
          $compArr = array('form_11' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $hostId;
         
    }

    /* ==================== add Host Detail (form 11th description) =================== */
     function addHostInsurance($data,$hostId) 
     {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
        
          $compArr = array('form_16' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);

          $select2 = $this->db->select('form_8')
                         ->where('host_id',$hostId)
                         ->get('bgpkr_host_complete_status');
           $result = $select2->result();
           if ($result[0]->form_8 == '1') {
           $completeArr = array('is_complete' => '1',
                                'is_approve' => '0');
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $completeArr);
           return $hostId;
           }else{
            $str = 'notDone';
            return $str;
           }
          
    }
    /* ==================== add Host Detail (form 12th guest know) =================== */
     function addHostGuestKnow($data,$hostId) 
     {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
       
          $compArr = array('form_12' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $hostId;
       
    }

    /* ==================== add Host Detail (form 13th booking detail) =================== */
     function addHostBookingDetail($data,$hostId) 
     {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
        
          $compArr = array('form_13' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);
          return $hostId;
         
    }

    /* ==================== add Host Detail (form 14th booking detail) =================== */
     function addHostCalender($data,$hostId) 
     {   
        $allDates = explode(',', $data);
        $this->db->where('host_id',$hostId);
        $this->db->delete('bgpkr_host_unavailable_date');
        foreach ($allDates as $key => $value) {
          $newDate = date("Y-m-d", strtotime($value));
          $dateLo = array('host_id' => $hostId,
                          'unavailable_date' => $newDate );
        $insert = $this->db->insert('bgpkr_host_unavailable_date', $dateLo);
        }
          $compArr = array('form_14' => '1' );
          $this->db->where('host_id',$hostId);
          $this->db->update('bgpkr_host_complete_status', $compArr);
        return $hostId;
     }

    /* ==================== add Host Detail (form 15th price) =================== */
     function addHostPrice($data,$hostId) 
     {   
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_placetype', $data);
       
           $compArr = array('form_15' => '1' );
           $this->db->where('host_id',$hostId);
           $this->db->update('bgpkr_host_complete_status', $compArr);

           return $hostId;
     }
    /* ==================== get basic amenities =================== */
        function basicAmenities() 
         {   
          $select = $this->db->select('id,name')
                             ->where('category','Basic')
                             ->get('bgpkr_all_amenities');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }

     /* ==================== get kitchen\Dining amenities =================== */
        function kitchenDining() 
         {   
          $select = $this->db->select('id,name')
                             ->where('category','Kitchen/Dining')
                             ->get('bgpkr_all_amenities');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }

      /* ==================== get Bed and Baths amenities =================== */
        function bedBaths() 
         {   
          $select = $this->db->select('id,name')
                             ->where('category','Bed_Baths')
                             ->get('bgpkr_all_amenities');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }

      /* ==================== get entertainment amenities =================== */
        function entertainment() 
         {   
          $select = $this->db->select('id,name')
                             ->where('category','Entertainment')
                             ->get('bgpkr_all_amenities');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }
         

      /* ==================== get Outside amenities =================== */
        function outsideAmenities() 
         {   
          $select = $this->db->select('id,name')
                             ->where('category','Outside')
                             ->get('bgpkr_all_amenities');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }
    
      /* ==================== get Outside amenities =================== */
        function getCountries() 
         {   
          $select = $this->db->select('country_name')
                             ->order_by('country_name','asc')
                             ->get('bgpkr_country_list');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }
      /* ==================== get places =================== */
        function getPlaces() 
         {   
          $select = $this->db->select('id,place_type')
                             ->group_by('place_type','asc')
                             ->get('bgpkr_all_placetypes');
               //echo $this->db->last_query();die;              
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            } 
         }

       /* ==================== get places =================== */
        function getProperty($placetype) 
         {   
          $select = $this->db->select('id,property_type')
                             ->where('place_type',$placetype)
                             ->order_by('property_type','asc')
                             ->get('bgpkr_all_placetypes');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result;
            }else{
              return false;
            } 
         }
     
     /* ==================== get places text =================== */
        function getPropertyText($property) 
         {   
          $select = $this->db->select('id,property_text')
                             ->where('property_type',$property)
                             ->get('bgpkr_all_placetypes');
           if ($select->num_rows()>0) {
               $result = $select->result_array();
               return $result[0]['property_text'];
            }else{
              return false;
            } 
         }
       
       /* ==================== get all host detail =================== */
        function get_allDetail($host_id) 
        {  
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          $select = $this->db->select('hp.*,(select GROUP_CONCAT(DISTINCT CONCAT (government_id1,",",government_id1)) from bgpkr_users where user_id = hp.user_id) as gov_id,(select GROUP_CONCAT(unavailable_date SEPARATOR ",") from bgpkr_host_unavailable_date where host_id = hp.host_id) as unav_date')
                             ->from('bgpkr_host_placetype as hp')
                             //->join('bgpkr_host_bedrooms as hbed','hp.host_id=hbed.host_id','left')
                             ->where('hp.is_complete','1')
                             ->where('hp.user_id',$user_id)
                             ->where('hp.host_id',$host_id)
                             ->get();
          if ($select->num_rows()>0) {
                            $records = $select->result_array();
                                 $selectbImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"bedroom")
                                                        ->get('bgpkr_host_place_images');
                                   $result = $selectbImg->result_array();
                                   $records[0]['bedimage']= $result;
                                   
                                 $selectbaImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"bathroom")
                                                        ->get('bgpkr_host_place_images');
                                 $result2 = $selectbaImg->result_array();
                                 $records[0]['bathimage']= $result2;

                                 $selectkImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"kitchen")
                                                        ->get('bgpkr_host_place_images');
                                  $result3 = $selectkImg->result_array();
                                 $records[0]['kitimage']= $result3;

                                 $selectOImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"other")
                                                        ->get('bgpkr_host_place_images');
                                  $result4 = $selectOImg->result_array();
                                  $records[0]['otherimage']= $result4;

                           return $records[0];
                              }                   
                  
          }

        /* ==================== get government id =================== */
        function get_govImg() 
        {  
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
        $select = $this->db->select('GROUP_CONCAT(DISTINCT CONCAT (government_id1,",",government_id2)) as gov_id')
                             ->from('bgpkr_users')
                             ->where('user_id',$user_id)
                             ->get();
          if ($select->num_rows()>0) {
                            $records = $select->result_array();
                           return $records[0];
                              }                   
                  
          }
  
     
        /* ==================== get all host detail =================== */
        function get_allDetailinComp($host_id) 
        {  
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          $select = $this->db->select('hp.*,(select GROUP_CONCAT(DISTINCT CONCAT (government_id1,",",government_id1)) from bgpkr_users where user_id = hp.user_id) as gov_id,(select GROUP_CONCAT(unavailable_date SEPARATOR ",") from bgpkr_host_unavailable_date where host_id = hp.host_id) as unav_date')
                             ->from('bgpkr_host_placetype as hp')
                             //->join('bgpkr_host_bedrooms as hbed','hp.host_id=hbed.host_id','left')
                             ->where('hp.user_id',$user_id)
                             ->where('hp.host_id',$host_id)
                             ->get();
          if ($select->num_rows()>0) {
                            $records = $select->result_array();
                                 $selectbImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"bedroom")
                                                        ->get('bgpkr_host_place_images');
                                   $result = $selectbImg->result_array();
                                   $records[0]['bedimage']= $result;
                                   
                                 $selectbaImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"bathroom")
                                                        ->get('bgpkr_host_place_images');
                                 $result2 = $selectbaImg->result_array();
                                 $records[0]['bathimage']= $result2;

                                 $selectkImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"kitchen")
                                                        ->get('bgpkr_host_place_images');
                                  $result3 = $selectkImg->result_array();
                                 $records[0]['kitimage']= $result3;

                                 $selectOImg = $this->db->select('image,is_cover')
                                                        ->where('host_id',$host_id)
                                                        ->where('image_type',"other")
                                                        ->get('bgpkr_host_place_images');
                                  $result4 = $selectOImg->result_array();
                                  $records[0]['otherimage']= $result4;

                           return $records[0];
                              }                   
                  
          }

       /* ==================== get incomplete form =================== */
        function incompleteForms($host_id) 
        {  
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          $select = $this->db->select('ch.*')
                             ->from('bgpkr_host_placetype as hp')
                          ->join('bgpkr_host_complete_status as ch','hp.host_id=ch.host_id','left')
                             ->where('hp.user_id',$user_id)
                             ->where('hp.host_id',$host_id)
                             ->get();
          if ($select->num_rows()>0) {
                            $records = $select->result_array();
                            return $records[0];
                              }                   
                  
          }

     /* ==================== get incomplete form =================== */
        function hostmobcheck($mob,$host_id) 
        {  
          $user_id = $_SESSION['webuser_bgpkr']['user_id'];
          $select = $this->db->select('hp.host_id')
                             ->from('bgpkr_host_placetype as hp')
                             ->where('hp.primary_phone',$mob)
                             ->where('hp.primary_phone !=','0')
                             ->where('hp.user_id',$user_id)
                             ->where('hp.host_id',$host_id)
                             ->get();
          if ($select->num_rows()>0) {
                            echo '1';die;
                              }else{
                                echo '0';die;
                              }                   
                  
          }


//============earning_data========================//
function earning_data($user_id){
 $m=date('m');
 $where="(month(from_date) ='$m' or month(to_date)='$m')";
 $year=date('Y');
 $EarningData=[];
 $GraphData=[];
 $TotalRevenue=0;
 $MOnthRevenue=[];
 $AVGRevenue=0;
 $newMOnthRevenue=0;
 $tempyear=array(array('month' => 'Jan','paid_amount'=>0),array('month' => 'Feb','paid_amount'=>0),array('month' => 'Mar','paid_amount'=>0),array('month' => 'Apr','paid_amount'=>0),array('month' => 'May','paid_amount'=>0),array('month' => 'Jun','paid_amount'=>0),array('month' => 'Jul','paid_amount'=>0),array('month' => 'Aug','paid_amount'=>0),array('month' => 'Sep','paid_amount'=>0),array('month' => 'Oct','paid_amount'=>0),array('month' => 'Nov','paid_amount'=>0),array('month' => 'Dec','paid_amount'=>0));


 $query=$this->db->select('IFNULL(sum(paid_amount),0) as paid_amount,IFNULL(paid_currency,"") as paid_currency')->where('user_id',$user_id)->where('payment_status','1')->where('confirm_status','1')->get('bgpkr_booking');
 $TotalRevenue=$query->row_array();
 $query1=$this->db->select("DATE_FORMAT(from_date,'%b') as month,DATE_FORMAT(from_date,'%Y-%m-%d') as from_date,DATE_FORMAT(to_date,'%Y-%m-%d') as to_date,paid_amount") ->where('user_id',$user_id)->where('payment_status','1')->where('confirm_status','1')->where($where)->get('bgpkr_booking');
 if($query1->num_rows()>0){
  $MOnthRes=$query1->result_array();
  foreach ($MOnthRes as $key => $value) {
   if(date('m',strtotime($MOnthRes[$key]['from_date']))==date('m',strtotime($MOnthRes[$key]['to_date']))){
    $MOnthRevenue[]=$MOnthRes[$key];
  }else{ 
   if(date('m',strtotime($MOnthRes[$key]['from_date']))==date('m')){
    $maxday=date('t',strtotime($MOnthRes[$key]['from_date']));
    $Alldiff=(strtotime($MOnthRes[$key]['to_date']) - strtotime($MOnthRes[$key]['from_date'])) / (60 * 60 * 24);
    $end_month_date=date('Y',strtotime($MOnthRes[$key]['from_date'])).'-'.date('m',strtotime($MOnthRes[$key]['from_date'])).'-'.$maxday;
    $day_diff=(strtotime($end_month_date) - strtotime($MOnthRes[$key]['from_date'])) / (60 * 60 * 24);
    if($day_diff==0){
      $MOnthRevenue[]=["month"=>date('M',strtotime($MOnthRes[$key]['from_date'])),"paid_amount"=>$MOnthRes[$key]['paid_amount'],"from_date"=>$end_month_date,"to_date"=>$MOnthRes[$key]['to_date']];
    }else{
      $per_night=round(($MOnthRes[$key]['paid_amount']/$Alldiff));
      $amount=$per_night*$day_diff;
      $MOnthRevenue[]=["month"=>date('M',strtotime($MOnthRes[$key]['from_date'])),"paid_amount"=>$amount,"from_date"=>$end_month_date,"to_date"=>$MOnthRes[$key]['to_date']];
    }
  }else{
    $new_date=date('Y-m').'-01';
    $Alldiff=(strtotime($MOnthRes[$key]['to_date']) - strtotime($MOnthRes[$key]['from_date'])) / (60 * 60 * 24);

    $day_diff=(strtotime($MOnthRes[$key]['to_date']) - strtotime($new_date)) / (60 * 60 * 24);
    if($day_diff>0){
      $per_night=round(($MOnthRes[$key]['paid_amount']/$Alldiff));
      $amount=$per_night*$day_diff;
      $MOnthRevenue[]=["month"=>date('M',strtotime($MOnthRes[$key]['to_date'])),"paid_amount"=>$amount,"from_date"=>$new_date,"to_date"=>$MOnthRes[$key]['to_date']];
    }
  }
}
}
for ($i=0; $i<count($MOnthRevenue) ; $i++) { 
 $newMOnthRevenue+=$MOnthRevenue[$i]['paid_amount'];
}
}
$query2=$this->db->select('IFNULL(AVG(paid_amount),0) as paid_amount,IFNULL(paid_currency,"") as paid_currency')->where('user_id',$user_id)->where('payment_status','1')->where('confirm_status','1')->get('bgpkr_booking');
$AVGRevenue=$query2->row_array();




$select=$this->db->select('bb.host_id,bb.user_id,bb.from_date,bb.to_date,bb.total_guest,bb.total_infant,bb.paid_amount,bb.paid_currency,bhp.name_listing')
->from('bgpkr_booking as bb')
->join('bgpkr_host_placetype as bhp','bb.host_id=bhp.host_id','left')
->where('bb.user_id',$user_id)
->where('bb.payment_status','1')
->where('bb.confirm_status','1')
->get();
if($select->num_rows()>0){
  $EarningData=$select->result_array(); 
} 
$result=[];
$newcount=[];
$newmonth=[];
//=============graph data=================//

$where1="(year(from_date) ='$year' or year(to_date)='$year')";
$select1=$this->db->select("DATE_FORMAT(from_date,'%b') as month,DATE_FORMAT(from_date,'%Y-%m-%d') as from_date,DATE_FORMAT(to_date,'%Y-%m-%d') as to_date,paid_amount")
->where('payment_status','1')
->where('user_id',$user_id)
->where('confirm_status','1')
->where($where1)
->get('bgpkr_booking');
if($select1->num_rows()>0){
  $result=$select1->result_array(); 
  foreach ($result as $key => $value) {
   if(date('m',strtotime($result[$key]['from_date']))==date('m',strtotime($result[$key]['to_date']))){
    $newresult[]=$result[$key];
  }else{ 
    $Alldiff=(strtotime($result[$key]['to_date']) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
    $mon=date('m',strtotime($result[$key]['from_date']));
    $maxday=date('t',strtotime($result[$key]['from_date']));
    $end_month_date=date('Y',strtotime($result[$key]['from_date'])).'-'.date('m',strtotime($result[$key]['from_date'])).'-'.$maxday;
    $end_mon_name=DateTime::createFromFormat('!m', date('m',strtotime($end_month_date)))->format('M');

     //============use for one month========================//
    $mon1=date('m',strtotime($result[$key]['to_date']));
    if($mon1==1 && date('Y',strtotime($result[$key]['to_date']))==date('Y')){
      $maxday1=date('Y',strtotime($result[$key]['to_date'])).'-'.date('m',strtotime($result[$key]['to_date'])).'-'.'01';
      $All_d=(strtotime($result[$key]['to_date']) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
      $diff=(strtotime($result[$key]['to_date']) - strtotime($maxday1)) / (60 * 60 * 24);
      if($diff!=0){
        $amount=round(($result[$key]['paid_amount']/$All_d)*$diff);
        $newresult[]=["month"=>date('M',strtotime($maxday1)),"paid_amount"=>$amount,"from_date"=>$maxday1,"to_date"=>$result[$key]['to_date']];  
      }else{
        continue;
      }
    }
    else if(date('m',strtotime($end_month_date))==12){
     $last_mon_diff=(strtotime($end_month_date) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
     $last_mon_diff1=(strtotime($result[$key]['to_date']) - strtotime($end_month_date)) / (60 * 60 * 24);
     if($last_mon_diff==0 && $last_mon_diff1==1){
      $amount=round(($result[$key]['paid_amount']/$Alldiff)*1);
      $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date];   
    }else if($last_mon_diff1==1 && $last_mon_diff >0) {
     $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$result[$key]['paid_amount'],"from_date"=>$result[$key]['from_date'],"to_date"=>$result[$key]['to_date']]; 
   }else{
     $amount=round(($result[$key]['paid_amount']/$Alldiff)*($last_mon_diff+1));
     $newresult[]=["month"=>date('M',strtotime($end_month_date)),"paid_amount"=>$amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date]; 
   }
 }else{
  $after_month_name=DateTime::createFromFormat('!m', date('m',strtotime($result[$key]['to_date'])))->format('M');
  $day_diff1=(strtotime($end_month_date) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
  $day_diff2=(strtotime($result[$key]['to_date']) - strtotime($end_month_date)) / (60 * 60 * 24);
  if($day_diff1==0 && $day_diff2==1){
    $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$result[$key]['paid_amount'],"from_date"=>$end_month_date,"to_date"=>$result[$key]['to_date']];
  }else if ($day_diff1==0 && $day_diff2!=1) {
    $last_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*1);
    $after_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($Alldiff-1));
    $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$last_month_amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$result[$key]['from_date']];
    $newresult[]=["month"=>date('M',strtotime($result[$key]['to_date'])),"paid_amount"=>$after_month_amount,"from_date"=>$result[$key]['to_date'],"to_date"=>$result[$key]['to_date']];
  }
  else{
    $last_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($day_diff1+1));
    $after_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($day_diff2-1));
    $newresult[]=["month"=>$end_mon_name,"paid_amount"=>$last_month_amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date];
    $newresult[]=["month"=>$after_month_name,"paid_amount"=>$after_month_amount,"from_date"=>$end_month_date,"to_date"=>$result[$key]['to_date']];
  }
}
}
}
foreach ($newresult as $key => $value) {
  switch ($value['month']) {
    case 'Jan':
    $tempyear[0]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Feb':
    $tempyear[1]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Mar':
    $tempyear[2]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Apr':
    $tempyear[3]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'May':
    $tempyear[4]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Jun':
    $tempyear[5]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Jul':
    $tempyear[6]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Aug':
    $tempyear[7]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Sep':
    $tempyear[8]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Oct':
    $tempyear[9]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Nov':
    $tempyear[10]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Dec':
    $tempyear[11]['paid_amount']+=$value['paid_amount'];
    continue;
  }
} 
foreach ($tempyear as $key => $value) {
  $newcount[]=(int)$value['paid_amount'];
  $newmonth[]=$value['month'];
}
}else{
 foreach ($tempyear as $key => $value) {
  $newcount[]=(int)$value['paid_amount'];
  $newmonth[]=$value['month'];
}
}
$Allresult=["newmonth"=>$newmonth,"newcount"=>$newcount,"EarningData"=>$EarningData,"TotalRevenue"=>$TotalRevenue,"AVGRevenue"=>$AVGRevenue,"newMOnthRevenue"=>$newMOnthRevenue];
return $Allresult;
}       



//================year_graph===================//


function year_graph($data){
 $user_id=$data['user_id']; 
 if($data['income_graph']==1){
   $year=date('Y');
 }else{
  $y= date("Y");
  $year = $y -1;
}
$tempyear=array(array('month' => 'Jan','paid_amount'=>0),array('month' => 'Feb','paid_amount'=>0),array('month' => 'Mar','paid_amount'=>0),array('month' => 'Apr','paid_amount'=>0),array('month' => 'May','paid_amount'=>0),array('month' => 'Jun','paid_amount'=>0),array('month' => 'Jul','paid_amount'=>0),array('month' => 'Aug','paid_amount'=>0),array('month' => 'Sep','paid_amount'=>0),array('month' => 'Oct','paid_amount'=>0),array('month' => 'Nov','paid_amount'=>0),array('month' => 'Dec','paid_amount'=>0));

$where1="(year(from_date) ='$year' or year(to_date)='$year')";
$select1=$this->db->select("DATE_FORMAT(from_date,'%b') as month,DATE_FORMAT(from_date,'%Y-%m-%d') as from_date,DATE_FORMAT(to_date,'%Y-%m-%d') as to_date,paid_amount")
->where('payment_status','1')
->where('user_id',$user_id)
->where('confirm_status','1')
->where($where1)
->get('bgpkr_booking');
if($select1->num_rows()>0){
  $result=$select1->result_array(); 
  foreach ($result as $key => $value) {
   if(date('m',strtotime($result[$key]['from_date']))==date('m',strtotime($result[$key]['to_date']))){
    $newresult[]=$result[$key];
  }else{ 
    $Alldiff=(strtotime($result[$key]['to_date']) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
    $mon=date('m',strtotime($result[$key]['from_date']));
    $maxday=date('t',strtotime($result[$key]['from_date']));
    $end_month_date=date('Y',strtotime($result[$key]['from_date'])).'-'.date('m',strtotime($result[$key]['from_date'])).'-'.$maxday;
    $end_mon_name=DateTime::createFromFormat('!m', date('m',strtotime($end_month_date)))->format('M');

     //============use for one month========================//
    $mon1=date('m',strtotime($result[$key]['to_date']));
    if($mon1==1 && date('Y',strtotime($result[$key]['to_date']))==date('Y')){
      $maxday1=date('Y',strtotime($result[$key]['to_date'])).'-'.date('m',strtotime($result[$key]['to_date'])).'-'.'01';
      $All_d=(strtotime($result[$key]['to_date']) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
      $diff=(strtotime($result[$key]['to_date']) - strtotime($maxday1)) / (60 * 60 * 24);
      if($diff!=0){
        $amount=round(($result[$key]['paid_amount']/$All_d)*$diff);
        $newresult[]=["month"=>date('M',strtotime($maxday1)),"paid_amount"=>$amount,"from_date"=>$maxday1,"to_date"=>$result[$key]['to_date']];  
      }else{
        continue;
      }
    }
    else if(date('m',strtotime($end_month_date))==12){
     $last_mon_diff=(strtotime($end_month_date) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
     $last_mon_diff1=(strtotime($result[$key]['to_date']) - strtotime($end_month_date)) / (60 * 60 * 24);
     if($last_mon_diff==0 && $last_mon_diff1==1){
      $amount=round(($result[$key]['paid_amount']/$Alldiff)*1);
      $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date];   
    }else if($last_mon_diff1==1 && $last_mon_diff >0) {
     $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$result[$key]['paid_amount'],"from_date"=>$result[$key]['from_date'],"to_date"=>$result[$key]['to_date']]; 
   }else{
     $amount=round(($result[$key]['paid_amount']/$Alldiff)*($last_mon_diff+1));
     $newresult[]=["month"=>date('M',strtotime($end_month_date)),"paid_amount"=>$amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date]; 
   }
 }else{
  $after_month_name=DateTime::createFromFormat('!m', date('m',strtotime($result[$key]['to_date'])))->format('M');
  $day_diff1=(strtotime($end_month_date) - strtotime($result[$key]['from_date'])) / (60 * 60 * 24);
  $day_diff2=(strtotime($result[$key]['to_date']) - strtotime($end_month_date)) / (60 * 60 * 24);
  if($day_diff1==0 && $day_diff2==1){
    $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$result[$key]['paid_amount'],"from_date"=>$end_month_date,"to_date"=>$result[$key]['to_date']];
  }else if ($day_diff1==0 && $day_diff2!=1) {
    $last_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*1);
    $after_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($Alldiff-1));
    $newresult[]=["month"=>date('M',strtotime($result[$key]['from_date'])),"paid_amount"=>$last_month_amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$result[$key]['from_date']];
    $newresult[]=["month"=>date('M',strtotime($result[$key]['to_date'])),"paid_amount"=>$after_month_amount,"from_date"=>$result[$key]['to_date'],"to_date"=>$result[$key]['to_date']];
  }
  else{
    $last_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($day_diff1+1));
    $after_month_amount=round(($result[$key]['paid_amount']/$Alldiff)*($day_diff2-1));
    $newresult[]=["month"=>$end_mon_name,"paid_amount"=>$last_month_amount,"from_date"=>$result[$key]['from_date'],"to_date"=>$end_month_date];
    $newresult[]=["month"=>$after_month_name,"paid_amount"=>$after_month_amount,"from_date"=>$end_month_date,"to_date"=>$result[$key]['to_date']];
  }
}
}
}
foreach ($newresult as $key => $value) {
  switch ($value['month']) {
    case 'Jan':
    $tempyear[0]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Feb':
    $tempyear[1]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Mar':
    $tempyear[2]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Apr':
    $tempyear[3]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'May':
    $tempyear[4]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Jun':
    $tempyear[5]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Jul':
    $tempyear[6]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Aug':
    $tempyear[7]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Sep':
    $tempyear[8]['paid_amount']+=$value['paid_amount'];
    continue;
    case 'Oct':
    $tempyear[9]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Nov':
    $tempyear[10]['paid_amount']+=$value['paid_amount'];
    continue;

    case 'Dec':
    $tempyear[11]['paid_amount']+=$value['paid_amount'];
    continue;
  }
} 
foreach ($tempyear as $key => $value) {
  $newcount[]=(int)$value['paid_amount'];
  $newmonth[]=$value['month'];
}
}else{
 foreach ($tempyear as $key => $value) {
  $newcount[]=(int)$value['paid_amount'];
  $newmonth[]=$value['month'];
}
}
$Allresult=["newmonth"=>$newmonth,"newcount"=>$newcount];
return $Allresult;

}


/* ==================== view host property=================== */
function viewHostProperty($host_id){ 
$user_id = $_SESSION['webuser_bgpkr']['user_id'];  
$date_time=date('Y-m-d H:i:s'); 
$Allresult=[]; 
$AllAmenties=[];   
$Allimages=[];
$booking_date=[];
$Alldate_array=[];
$final_array=[];
$check_in=[];
$check_out=[];
$booking_query=$this->db->select('from_date,to_date')
                        ->where('host_id',$host_id)
                        ->where('payment_status','1')
                        ->where('to_date>=',$date_time)
                        ->order_by('from_date')
                        ->get('bgpkr_booking');
if($booking_query->num_rows()>0){
$bookingresult=$booking_query->result_array();
foreach ($bookingresult as $key => $value) {
$check_for_out=date('m/d/Y',strtotime($value['from_date']));  
$check_for_in=date('m/d/Y',strtotime($value['to_date']));  
$check_out[]=$check_for_out;
$check_in[]=$check_for_in;
$hourdiff = round((strtotime($value['to_date']) - strtotime($value['from_date']))/3600, 1);
if($hourdiff>24){ 
$Alldate_array[]=$this->date_range_list($value['from_date'],$value['to_date']); 
}    
}   
$check_out= "'" . implode ( "','",$check_out) . "'";
$check_in= "'" . implode ( "','",$check_in) . "'";
if(!empty($Alldate_array)){
$final_array = call_user_func_array('array_merge', $Alldate_array);
$final_array = "'" . implode ( "','",$final_array) . "'";
}
}                        
                
//============result================//     
$select = $this->db->select('hp.host_id,hp.user_id,bu.name,IFNULL(bu.user_image,"") as user_image,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.guest_bed,hp.doublebeds,hp.queenbeds,hp.singlebeds,hp.sofabeds,hp.kingbeds,hp.twinbeds,hp.airbeds,hp.total_kingbed,hp.total_queenbed,hp.total_doublebed,hp.total_twinbed,hp.total_airbed,hp.total_bathrooms,hp.lat,hp.lng,hp.description,hp.host_name,hp.profile_img,hp.introduction,hp.base_price,hp.currency,hp.basic_amenities,hp.kitchen_dining,hp.bed_baths,hp.entertainment,hp.outside_amenities,hp.safty_amenities,(select GROUP_CONCAT(unavailable_date SEPARATOR ",") from bgpkr_host_unavailable_date where host_id = hp.host_id) as unav_date,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type="kitchen") LIMIT 1) as kitimage,hp.cleaning_fee,hp.stay_min_night as min_day,hp.stay_max_night as max_day,IFNULL((select status from bgpkr_wishlist where user_id='.$user_id.' and host_id='.$host_id.'),"0") AS status')
->from('bgpkr_host_placetype as hp')
->join('bgpkr_users as bu','hp.user_id=bu.user_id','left')
->join('bgpkr_host_unavailable_date as und','hp.host_id=und.host_id','left')
->where('hp.host_id',$host_id)
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
$result['check_in']=$check_in;
$result['check_out']=$check_out;  
$AllAmenties=$this->all_amenties_name($result['basic_amenities'],$result['kitchen_dining'],$result['bed_baths'],$result['entertainment'],$result['outside_amenities']);
$Allresult['all_amenties']=$AllAmenties;
$Allresult['result']=$result;
$selectbImg = $this->db->select('image,is_cover')
->where('host_id',$host_id)
->get('bgpkr_host_place_images');
$Allimages=$selectbImg->result_array();
$sorting = array_column($Allimages, 'is_cover');
array_multisort($sorting, SORT_DESC, $Allimages);
$Allresult['allimage']= $Allimages;

 // print_r($Allresult);die;
return $Allresult;  
}else{
return [];
}
}

//============alll_amenties name======================//

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
          

   function updategov(){
    $select = $this->db->select('user_id,host_id,(select GROUP_CONCAT(govid_url SEPARATOR ",") from bgpkr_host_government_id where host_id = hp.host_id) as gov_id')
                       ->where('is_complete','1')
                       ->get('bgpkr_host_placetype');
       $res = $select->result_array();
       foreach ($res as $key => $value) {
                       $resImg = explode(',', $value['gov_id']);
                       $imgArr = array('government_id1' => $resImg[0], 
                                       'government_id1' => $resImg[1]
                                      );
                        $this->db->where('user_id',$value['user_id']);
                        $this->db->update('bgpkr_users',$imgArr);
                       }                
   }       

}