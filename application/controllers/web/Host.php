<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
header('Access-Control-Allow-Origin: *');
require APPPATH . 'helpers/Common1.php';
class Host extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct(){
        parent::__construct();
        $this->checkBlock();
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->library('Valid_mob');
        $this->load->model('web/Host_model');
        $this->load->model('web/Property_model');
        $this->load->library('S3');
        header('Cache-Control: no cache');
    }
    
    /*================= Function for Home page ===================*/
     public function index(){
        $this->set_country_session();
        $data['places'] = $this->Host_model->getPlaces();
        $this->load->view('templates/header');
        $this->load->view('web/becomeHost',$data);
        $this->load->view('templates/footer');
      }

    /*================= Function for host place list ===================*/
     public function hostplace(){
        $this->checkLogout();
        $data['plguest'] = array('guest' => @$_POST['guests']?$_POST['guests']:'4',
                                 'place_type'=>@$_POST['placeType']?$_POST['placeType']:'Apartment' 
                                );
        $data['property'] = $this->Host_model->getProperty($data['plguest']['place_type']);
        $data['places'] = $this->Host_model->getPlaces();
        $data['basic_am'] = $this->Host_model->basicAmenities();
        $data['kitchen_dining'] = $this->Host_model->kitchenDining();
        $data['bedBaths'] = $this->Host_model->bedBaths();
        $data['entertainment'] = $this->Host_model->entertainment();
        $data['outside'] = $this->Host_model->outsideAmenities();
        $data['countries'] = $this->Host_model->getCountries();
        $data['govImg'] = $this->Host_model->get_govImg();
        $this->load->view('templates/hostHeader');
        $this->load->view('web/hostPlace',$data);
        $this->load->view('templates/hostFooter');
      } 

    /*================= Function for add host detail(form 1st)===================*/
     public function hostplaceDetail(){
        $this->checkLogoutAjax();
        $user_id = $_SESSION['webuser_bgpkr']['user_id'];
        $host_id = $_POST['hostId'];
        $data = array('user_id' => $user_id,
                      'place_type' => $_POST['place'], 
                      'property_type' => $_POST['property']);
        $compArr = array('form_1' => '1' );
        $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
        echo $res;die;
     }

     /*================= Function for add host detail(form 2nd)===================*/
     public function hostPlace2nd(){
        $host_id = $_POST['hostId'];
        $data = array('room_type' => $_POST['room'], 
                      'dedicated_for' => $_POST['dedicated'],
                      'parking_type' => $_POST['parking']);
        $compArr = array('form_2' => '1' );
        $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
        echo $res;die;
     }
    
    /*================= Function for add host detail(form 3rd)===================*/
     // public function hostVehicleDetail(){
     //      $images = [];
     //     if (!empty($_FILES['vehicle_img']['name']))
     //             {
     //             $j = count($_FILES['vehicle_img']['name']);
     //             for($i=0;$i<$j;$i++){
     //             if (!empty($_FILES['vehicle_img']['name'][$i]))
     //             {  //$this->load->library('upload');
     //                $rename= $_FILES['vehicle_img']['name'][$i];
     //                $ext = pathinfo($_FILES['vehicle_img']['name'][$i], PATHINFO_EXTENSION);
     //                $image_name = $this->common->generateRandomString(10);
     //                $vehicle_picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
     //                $temp_name = $_FILES['vehicle_img']['tmp_name'][$i];
     //                $folder = 'vehicleImages';
     //                $images[] = $this->fileUpload($vehicle_picture,$temp_name,$folder);
     //             }
            
     //         } 
     //     }
     //     // $images[0]='dssd';
     //     // $images[1]='d2323sd';
     //     //$user_id = 1;
     //     $host_id = $_POST['hostId'];
     //      $data = array('host_id' => $_POST['hostId'],
     //                    'vehicle_type' => $_POST['vehicleType'], 
     //                   'vehicle_brand' => $_POST['vehicleBrand'],
     //                   'vehicle_model' => $_POST['vehicleModel'],
     //                   'vehicle_cost' => $_POST['vehicleCost']
     //                  );
     //     $res = $this->Host_model->addHostVehicle($data,$host_id,$images);
     //      echo $res;die;
     //  }
   /*================= Function for add host detail(bedrooms form 4th)===================*/
     public function hostBedroomsDetail(){
         $doublebeds = implode(',', $_POST['doubleBedq']);
         $queenBedq = implode(',', $_POST['queenBedq']);
         $singleBedq = implode(',', $_POST['singleBedq']);
         $sofaBedq = implode(',', $_POST['sofaBedq']);

         $kingBedq = implode(',', $_POST['kingBedq']);
         $twinBedq = implode(',', $_POST['twinBedq']);
         $floorBedq = implode(',', $_POST['floorBedq']);
         $airBedq = implode(',', $_POST['airBedq']);
         $couchBedq = implode(',', $_POST['couchBedq']);

         $host_id = $_POST['hostId'];
           $data = array('host_id' => $_POST['hostId'],
                         'total_guest' => $_POST['noGuest'], 
                         'total_bedrooms' => $_POST['noBedRoom'],
                         'guest_bed' => $_POST['noBedsGuset'],
                         'doublebeds' => $doublebeds,
                         'queenbeds' => $queenBedq,
                         'singlebeds' => $singleBedq,
                         'sofabeds' => $sofaBedq,

                         'kingbeds' => $kingBedq,
                         'twinbeds' => $twinBedq,
                         'floor_mattress' => $floorBedq,
                         'airbeds' => $airBedq,
                         'couch' => $couchBedq,

                         'total_sofa' => $_POST['sofaQuantity'],
                         'total_couch' => $_POST['couchQuantity'],
                         'total_floor_mattress' => $_POST['floorQuantity'],
                       
                         'total_kingbed' => $_POST['kingBedco'],
                         'total_queenbed' => $_POST['queenBedco'],
                         'total_doublebed' => $_POST['doubleBedco'],
                         'total_twinbed' => $_POST['twinBedco'],
                         'total_airbed' => $_POST['airBedco'],

                         'total_bathrooms' => $_POST['noOfBathroom']
                        );
         $compArr = array('form_4' => '1' );
         $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
         echo $res;die;
      }

    /*================= Function for add host detail(location form 5th)===================*/
     public function hostAddressDetail(){
         
         $host_id = $_POST['hostId'];
         $data = array('host_id' => $_POST['hostId'],
                       'location' => $_POST['location'], 
                       'country' => $_POST['countryregion'],
                       'state' => $_POST['state'],
                       'city' => $_POST['city'],
                       'lat' => $_POST['lat'],
                       'lng' => $_POST['lng'],
                       // 'streetaddress' => $_POST['streetaddresss'],
                       'apt' => $_POST['apt'],
                       'zipcode' => $_POST['zipcode']
                      );
       $compArr = array('form_5' => '1' );
         $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
         echo $res;die;
     }

    /*================= Function for add host detail(Amenities form 6th)===================*/
     public function hostamenitiesDetail(){
        
         $host_id = $_POST['hostId'];
         $basic = implode(',', $_POST['basic']);
         $kitchenDining = implode(',', $_POST['kitchenDining']);
         $bedBaths = implode(',', $_POST['bedBaths']);
         $entertainment = implode(',', $_POST['entertainment']);
         $outside = implode(',', $_POST['outside']);
         $amenitiesSafty = implode(',', $_POST['amenitiesSafty']);
         $other = !empty($_POST['otherAmenities'])?implode(',', $_POST['otherAmenities']):'';

             $data = array('host_id' => $_POST['hostId'],
                           'basic_amenities' => $basic, 
                           'kitchen_dining' => $kitchenDining,
                           'bed_baths' => $bedBaths,
                           'entertainment' => $entertainment,
                           'outside_amenities' => $outside,
                           'safty_amenities' => $amenitiesSafty,
                           'place_rules' => $_POST['place_rule']?$_POST['place_rule']:'',
                           'other_amenities' => $other
                      );

         $compArr = array('form_6' => '1' );
         $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
         echo $res;die;
    }

    /*================= Function for add host detail(Spaces form 7th)===================*/
     public function hostSpacesDetail(){
         
         $host_id = $_POST['hostId'];
         $guestSpaces = implode(',', $_POST['guestSpaces']);
         $data = array('host_id' => $_POST['hostId'],
                       'other_space' => $guestSpaces 
                      );
         $compArr = array('form_7' => '1' );
         $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
         echo $res;die;
    }
    
    /*================= Function for add host detail( form 8th)===================*/
     public function imagesBedBathKitchen(){

         $postData = $_POST;
         $bedroom = [];
         $bedCover = 0;
         if ($postData['bedchange']=='change' && !empty($_FILES['bedroomImages']['name']))
                 {
                 $j = count($_FILES['bedroomImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['bedroomImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['bedroomImages']['name'][$i];
                    if ($postData['bedroomCover'] == $_FILES['bedroomImages']['name'][$i]) {
                       $bedCover = $i; 
                    }
                    $ext = pathinfo($_FILES['bedroomImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['bedroomImages']['tmp_name'][$i];
                    $folder = 'bedroomImages';
                    $bedroom[] = $this->fileUpload($picture,$temp_name,$folder);
                }
            
             } 
         }

         $bathroom = [];
         $bathroomCover = 0;
         if ($postData['bathchange']=='change' && !empty($_FILES['bathsroomImages']['name']))
                 {
                 $j = count($_FILES['bathsroomImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['bathsroomImages']['name'][$i]))
                 { // $this->load->library('upload');
                    $rename= $_FILES['bathsroomImages']['name'][$i];
                     if ($postData['bathroomCover'] == $_FILES['bathsroomImages']['name'][$i]) {
                       $bathroomCover = $i; 
                    }
                    $ext = pathinfo($_FILES['bathsroomImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['bathsroomImages']['tmp_name'][$i];
                    $folder = 'bathsroomImages';
                    $bathroom[] = $this->fileUpload($picture,$temp_name,$folder);
                }
            
             } 
         }
         $kitchen = [];
         $kitchenCover = 0;
         if ($postData['kitchange']=='change' && !empty($_FILES['kitchenImages']['name']))
                 {
                 $j = count($_FILES['kitchenImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['kitchenImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['kitchenImages']['name'][$i];
                     if ($postData['kitchenCover'] == $_FILES['kitchenImages']['name'][$i]) {
                       $kitchenCover = $i; 
                    }
                    $ext = pathinfo($_FILES['kitchenImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['kitchenImages']['tmp_name'][$i];
                    $folder = 'kitchenImages';
                    $kitchen[] = $this->fileUpload($picture,$temp_name,$folder);
                }
            
             } 
         }
       
         $other_img = [];
         $otherImgCover = 0;
         if ($postData['otherchange']=='change' && !empty($_FILES['otherImages']['name']))
                 {
                 $j = count($_FILES['otherImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['otherImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['otherImages']['name'][$i];
                     if ($postData['otherImgCover'] == $_FILES['otherImages']['name'][$i]) {
                       $otherImgCover = $i; 
                    }
                    $ext = pathinfo($_FILES['otherImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['otherImages']['tmp_name'][$i];
                    $folder = 'otherImages';
                    $other_img[] = $this->fileUpload($picture,$temp_name,$folder);
                }
            
             } 
         }

           $data = array('hostId'=>$postData['hostId'],
                       'bedroomCover' => $bedCover,
                       'bathroomCover'=> $bathroomCover,
                       'kitchenCover' => $kitchenCover,
                       'otherImgCover'=> $otherImgCover);
         $res = $this->Host_model->addHostBedBathKitchen($bedroom,$bathroom,$kitchen,$other_img,$data);
         echo $res;die;
    }

   /*================= Function for add host detail(Spaces form 7th)===================*/
     public function hostListDescription(){
         
         $host_id = $_POST['hostId'];
           $data = array('about_neighborhood' => $_POST['about_neighborhood'],
                         'name_listing' => $_POST['listingDescribe'], 
                         'description' => $_POST['description'] 
                    );
       $compArr = array('form_9' => '1' );
         $res = $this->Host_model->addHostPlace($data,$host_id,$compArr);
         echo $res;die;
    }

    /*================= Function for add host detail(form 16 insurance)===================*/
     public function hostInsurance(){
        // $this->session->unset_userdata('host_id');
        
         $host_id = $_POST['hostId'];
        
         $data = array('is_insurance' => $_POST['insurance']);
         $compArr = array('form_16' => '1' );
         $res = $this->Host_model->addHostInsurance($data,$host_id);
         echo $res;die;
    }
   
    /*================= Function for add host detail(hostdata form 10th)===================*/
     public function hostAllDetail(){
         $profile = '';
         $user_id = $_POST['userId'];
         $data = array('host_id' => $_POST['hostId'],
                       'host_name' => $_POST['hostname'],
                       'country_code' => '+'.$_POST['country_code'],
                       'primary_phone' => $_POST['primaryphone'],
                       'lang_code' => $_POST['lang_code'],
                       'lang_code_other' => $_POST['lang_code_other'],
                       'other_phone_code' =>@$_POST['otherphone']? '+'.$_POST['country_code2']:'',
                       'introduction'=> $_POST['intro']? $_POST['intro']:'',
                       'other_phone' => @$_POST['otherphone']? $_POST['otherphone']:''  
                      );

         if ($_POST['hostimgchange']=='change' && !empty($_FILES['hostImage']['name']))
            {    
                $images = $_FILES['hostImage']['name'];
                $ext = pathinfo($_FILES['hostImage']['name'], PATHINFO_EXTENSION);
                $accesskey = $this->common->generateRandomString(10);
                $profile_picture = rand(100, 999).$accesskey. '.' . $ext;
                $temp_name = $_FILES['hostImage']['tmp_name'];
                $folder = 'hostImage';
                $profile = $this->fileUpload($profile_picture,$temp_name,$folder);
                $data['profile_img'] = $profile;
            }
    
         $govId = [];

         if ($_POST['idchange']=='change' && !empty($_FILES['govtId']['name']))
                 {
                 $j = count($_FILES['govtId']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['govtId']['name'][$i]))
                 {  $this->load->library('upload');
                    $rename= $_FILES['govtId']['name'][$i];
                    $ext = pathinfo($_FILES['govtId']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['govtId']['tmp_name'][$i];
                    $folder = 'hostgovId';
                    $govId[] = $this->fileUpload($picture,$temp_name,$folder);
                 }else{
                    if (!empty($_POST['govimage'][$i])) {
                      $govId[] = $_POST['govimage'][$i];
                    }
                 }
            
              } 
         }else{
 if (isset($_POST['govimage']) && !empty($_POST['govimage'])) {
        $be = count($_POST['govimage']);
        for($i=0;$i<$be;$i++){
          if (!empty($_POST['govimage'][$i])) {
            $govId[] = $_POST['govimage'][$i];
          }
          
        }
      }
    }

         $host_id = $_POST['hostId'];
         $res = $this->Host_model->addHostDetail($data,$host_id,$govId,$user_id);
         echo $res;die;
    }
    /*================= Function for add host detail(guest care form 11th)===================*/
     public function hostGuestCare(){
       $host_id = $_POST['hostId'];
         $data = array('host_id' => $_POST['hostId'],
                        'suitable_child' => $_POST['suitableChild'],
                        'suitable_infants' => $_POST['suitableInfants'], 
                        'suitable_pets' => $_POST['suitablePets'],
                        'allow_smoking' => $_POST['allowSmoking'],
                        'allow_parties' => $_POST['allowParties'],
                        'add_more'=>@$_POST['addMore']?$_POST['addMore']:''  
                    );
         $res = $this->Host_model->addHostGuestCare($data,$host_id);
         echo $res;die;

    } 
   
    /*================= Function for add host detail(guest care form 12th)===================*/
     public function hostGuestKnow(){
         
         $host_id = $_POST['hostId'];
         $data = array('host_id' => $_POST['hostId'],
                       'noise_potential' => $_POST['noisePotential'],
                       'pet_live' => $_POST['petLive'], 
                       'have_weapon' => $_POST['haveWeapon'],
                       'media_device' => $_POST['mediaDevice'],
                       'other_animal' => $_POST['otherAnimal'],
                       'if_any'=>@$_POST['ifany']?$_POST['ifany']:''  
                      );
         $res = $this->Host_model->addHostGuestKnow($data,$host_id);
         echo $res;die;
     } 
  
    /*================= Function for add host detail(booking detail form 13th)===================*/
     public function hostbookingDetails(){
         
         $host_id = $_POST['hostId'];
             $data = array('host_id' => $_POST['hostId'],
                           'day_before_arrives' => $_POST['samedm'],
                           'apt_booking_before' => $_POST['anytime'], 
                           'stay_min_night' => $_POST['nightMin'],
                           //'stay_min_day' => $_POST['dayMin'],
                           'stay_max_night' => $_POST['dayMin'],
                           // 'checkin_time' => $_POST['checkIn'],
                           // 'checkout_time' => $_POST['checkOut'],
                           'checkin_from' => $_POST['inFrom'],
                           'checkin_to' => $_POST['inTo'],
                           'checkout_from' => $_POST['outFrom'],
                           'checkout_to' => $_POST['outTo'],
                       'booking_start_time' => @$_POST['bookingStart']?$_POST['bookingStart']:'',
                       'booking_end_time' => @$_POST['bookingEnd']?$_POST['bookingStart']:'' ,
                       'half_day_booking' => $_POST['half_day_booking']
                      );
         $res = $this->Host_model->addHostBookingDetail($data,$host_id);
         echo $res;die;
      } 

    /*================= Function for add host detail(calender form 14th)===================*/
     public function hostCalendar(){
         
         $host_id = $_POST['hostId'];
         $all_dates = $_POST['date_av'];
         $res = $this->Host_model->addHostCalender($all_dates,$host_id);
         echo $res;die;
    }

    /*================= Function for add host detail(price form 15th)===================*/
     public function hostPrice(){
         
         $host_id = $_POST['hostId'];
         //$this->session->unset_userdata('host_id');
          //$this->session->set_userdata('host_id','67');
         $data = array('host_id' => $_POST['hostId'],
                       'currency' => $_POST['currency'],
                       'base_price' => $_POST['basePrice'], 
                       'min_price' => $_POST['minPrice'],
                       'max_price' => $_POST['maxprice'],
                       'cleaning_fee' => $_POST['cleanFee'],
                       'half_day_price'=> $_POST['halfDayPrice']
                      );
         $res = $this->Host_model->addHostPrice($data,$host_id);
         echo $res;die;
   
     }
  
     /*================= Function for get property ===================*/
     public function getProperty(){
         $placetype = $_POST['place'];
         $res = $this->Host_model->getProperty($placetype);
         $data='<option value="">Select property type</option>';
         if ($placetype != '') {
         foreach($res as $res1){
         $data=$data. '<option value="'.$res1['property_type'].'">'.$res1['property_type'].'</option>';
         }
         } 
         echo $data;die;
     }
     
     /*================= Function for get property ===================*/
     public function getPropertyText(){
         $placetype = $_POST['place'];
         if ($placetype == '') {
            $res = '';
            echo $res;die;
         }else{
         $res = $this->Host_model->getPropertyText($placetype);
         echo $res;die;
         }
      }

    /*================= Function for s3 multiple image upload ===================*/
      function fileUpload($name,$temp_name,$folder){
        
        if($this->s3->putObjectFile($temp_name, "bagpackaer-s3","$folder/$name", S3::ACL_PUBLIC_READ)) {
        return "https://bagpackaer-s3.s3.us-west-2.amazonaws.com/".$folder."/".$name;
        }else{
        echo "Something went wrong while uploading your file... sorry";
        exit();
        }
     } 
  
// //==========stagging_list=================//

        // function stagging_list(){
        // $this->load->view('templates/header'); 
        // $this->load->view('web/stagging_list');
        // $this->load->view('templates/hostFooter'); 
        // }

   // public function propert(){
    //     $amcat = 'Hotel';
    //     $xam = 'Boutique hotel, Aparthotel, Hostel, Hotel, Lodge, Resort';
    //     $alltext ='Boutique hotels are hotels but they are more, customized and personalized. They have distinctive themes and provide unique experiences and they generally are not part of any hotel chains./ Aparthotel is an apartment hotel which are basically apartments but operate more like a hotel./ Hostel is affordable from a hotel where guests can rent a bed in a room or dorms./ Hotels are hospitality businesses which provide private rooms for guests accommodations. They also provide almost all kinds of facilities and amenities./ Lodges are more like hotels but less or no amenities, they just provide accommodation and there is no provision for food./ Resorts are hotels which provide accommodations with all luxury facilities, services and amenities. Resorts also have facilities for business conferences.';
    //     $textArr = explode('/ ', $alltext); 
    //     $allam = explode(', ', $xam);
    //     for ($i=0; $i < count($allam); $i++) { 
    //         $data = array('place_type' => $amcat,
    //                       'property_type' => $allam[$i]
    //                       //'property_text' => $textArr[$i]
    //                   );
    //         $this->db->insert('bgpkr_all_placetypes',$data);
    //     }
    //     echo 'done';die;
    //   }
    
   /*================= Function for User check  ===================*/
      //  public function bsdk(){
      //   $this->load->view('web/up.php');
      // }
/*================= Function for User check  ===================*/
     //   public function allhostimg(){
     //   $other_img = [];
     //   // echo'<pre>';print_r($_FILES);die;
     //     $otherImgCover = 0;
     //     if (!empty($_FILES['otherImages']['name']))
     //             {
     //             $j = count($_FILES['otherImages']['name']);
     //             for($i=0;$i<$j;$i++){
     //             if (!empty($_FILES['otherImages']['name'][$i]))
     //             {  //$this->load->library('upload');
     //                $rename= $_FILES['otherImages']['name'][$i];
     //                $ext = pathinfo($_FILES['otherImages']['name'][$i], PATHINFO_EXTENSION);
     //                $image_name = $this->common->generateRandomString(10);
     //                $picture = $_FILES['otherImages']['name'][$i];
     //                $temp_name = $_FILES['otherImages']['tmp_name'][$i];
     //                $folder = 'hostimages';
     //                $other_img[] = $this->fileUpload($picture,$temp_name,$folder);
     //             }
            
     //         } 
     //     }
     //     echo'<pre>';print_r($other_img);die;
     // }
  /*================= Function for host place list ===================*/
     public function edithost(){
        $this->checkLogout();
        //$this->session->unset_userdata('host_id');
        if (isset($_GET['host']) && !empty($_GET['host'])) {
        $host = base64_decode($_GET['host']);
        $data['places'] = $this->Host_model->getPlaces();
        $data['basic_am'] = $this->Host_model->basicAmenities();
        $data['kitchen_dining'] = $this->Host_model->kitchenDining();
        $data['bedBaths'] = $this->Host_model->bedBaths();
        $data['entertainment'] = $this->Host_model->entertainment();
        $data['outside'] = $this->Host_model->outsideAmenities();

        $data['all_data'] = $this->Host_model->get_allDetail($host);
        $data['property'] = $this->Host_model->getProperty($data['all_data']['place_type']);
        $data['protext'] = $this->Host_model->getPropertyText($data['all_data']['property_type']);
        $data['countries'] = $this->Host_model->getCountries();
        $data['govImg'] = $this->Host_model->get_govImg();

        if ($data['all_data']) {
        $this->load->view('templates/hostHeader');
        $this->load->view('web/editHost',$data);
        $this->load->view('templates/hostFooter');
        }else{
          redirect('property');
        }
        
       }else{
          redirect('property');
       }
      }

   /*================= Function for host place list ===================*/
     public function incompleteHost(){
        $this->checkLogout();
        //$this->session->unset_userdata('host_id');
        if (isset($_GET['host']) && !empty($_GET['host'])) {
        $host = base64_decode($_GET['host']);

        $data['places'] = $this->Host_model->getPlaces();
        $data['basic_am'] = $this->Host_model->basicAmenities();
        $data['kitchen_dining'] = $this->Host_model->kitchenDining();
        $data['bedBaths'] = $this->Host_model->bedBaths();
        $data['entertainment'] = $this->Host_model->entertainment();
        $data['outside'] = $this->Host_model->outsideAmenities();
        $data['all_data'] = $this->Host_model->get_allDetailinComp($host);
        $data['property'] = $this->Host_model->getProperty($data['all_data']['place_type']);
        $data['protext'] = $this->Host_model->getPropertyText($data['all_data']['property_type']);
        $data['form_status'] = $this->Host_model->incompleteForms($host);
        $data['countries'] = $this->Host_model->getCountries();
        $data['govImg'] = $this->Host_model->get_govImg();

        if ($data['all_data']) {
        $this->load->view('templates/hostHeader');
        $this->load->view('web/completeProperty',$data);
        $this->load->view('templates/hostFooter');
        }else{
          redirect('property');
        }
        
       }else{
          redirect('property');
       }
      }

    /*================= Function for mobile verification ===================*/
    function phone_verification(){
      $phone=$this->input->post('phone');
      $country_code=strtoupper($this->input->post('country_code'));
      //echo $phone.'-------'.$country_code;die;
      $phoneUtil = $this->valid_mob->load();
      $phoneNumberObject = $phoneUtil->parse($phone,$country_code);
      //print_r($phoneNumberObject);die;
      $is_valid_mobile = $phoneUtil->isValidNumberForRegion($phoneNumberObject,$country_code);
        if ($is_valid_mobile == "1") {
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /*================= Function for add host detail( form 8th)===================*/
     public function editplacesImages(){

         $postData = $_POST;
         $bedroom = [];
         $bedCover = 0;
         // print_r($postData);die;
      if (isset($postData['imageBed']) && !empty($postData['imageBed']) && $postData['bedchange']=='change') {
                  $be = count($postData['imageBed']);
                  for($i=0;$i<$be;$i++){
                    $bedroom[] = $postData['imageBed'][$i];
                    if ($postData['bedroomCover'] == $postData['imageBed'][$i]) {
                       $bedCover = $postData['imageBed'][$i]; 
                    }
                  }
                }

         if ($postData['bedchange']=='change' && !empty($_FILES['bedroomImages']['name']))
                 {
                 $j = count($_FILES['bedroomImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['bedroomImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['bedroomImages']['name'][$i];
                    
                    $ext = pathinfo($_FILES['bedroomImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['bedroomImages']['tmp_name'][$i];
                    $folder = 'bedroomImages';
                    $imgurl  = $this->fileUpload($picture,$temp_name,$folder);
                    $bedroom[] = $imgurl;
                    if ($postData['bedroomCover'] == $_FILES['bedroomImages']['name'][$i]) {
                       $bedCover = $imgurl; 
                    }
                }
            
             } 
         }

         $bathroom = [];
         $bathroomCover = 0;
         if (isset($postData['bathimage']) && !empty($postData['bathimage']) && $postData['bathchange']=='change') {
                  $be = count($postData['bathimage']);
                  for($i=0;$i<$be;$i++){
                    $bathroom[] = $postData['bathimage'][$i];
                    if ($postData['bathroomCover'] == $postData['bathimage'][$i]) {
                       $bathroomCover = $postData['bathimage'][$i]; 
                    }
                  }
                }

       if ($postData['bathchange']=='change' && !empty($_FILES['bathsroomImages']['name']))
                 {
                 $j = count($_FILES['bathsroomImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['bathsroomImages']['name'][$i]))
                 { // $this->load->library('upload');
                    $rename= $_FILES['bathsroomImages']['name'][$i];
                    
                    $ext = pathinfo($_FILES['bathsroomImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['bathsroomImages']['tmp_name'][$i];
                    $folder = 'bathsroomImages';
                    $baimg = $this->fileUpload($picture,$temp_name,$folder);
                    $bathroom[] = $baimg;
                     if ($postData['bathroomCover'] == $_FILES['bathsroomImages']['name'][$i]) {
                       $bathroomCover = $baimg; 
                    }
                }
            
             } 
         }

         
         $kitchen = [];
         $kitchenCover = 0;
         if (isset($postData['kitimage']) && !empty($postData['kitimage']) && $postData['kitchange']=='change') {
                  $be = count($postData['kitimage']);
                  for($i=0;$i<$be;$i++){
                    $kitchen[] = $postData['kitimage'][$i];
                    if ($postData['kitchenCover'] == $postData['kitimage'][$i]) {
                       $kitchenCover = $postData['kitimage'][$i]; 
                    }
                  }
                }
               

       if ($postData['kitchange']=='change' && !empty($_FILES['kitchenImages']['name']))
                 {
                 $j = count($_FILES['kitchenImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['kitchenImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['kitchenImages']['name'][$i];
                    
                    $ext = pathinfo($_FILES['kitchenImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['kitchenImages']['tmp_name'][$i];
                    $folder = 'kitchenImages';
                    $kiurl = $this->fileUpload($picture,$temp_name,$folder);
                    $kitchen[] = $kiurl;
                    if ($postData['kitchenCover'] == $_FILES['kitchenImages']['name'][$i]) {
                    $kitchenCover = $kiurl; 
                  }
                }
            
             } 
         }
         
         $other_img = [];
         $otherImgCover = 0;
         if (isset($postData['otheimage']) && !empty($postData['otheimage']) && $postData['otherchange']=='change') {
                  $be = count($postData['otheimage']);
                  for($i=0;$i<$be;$i++){
                    $other_img[] = $postData['otheimage'][$i];
                    if ($postData['otherImgCover'] == $postData['otheimage'][$i]) {
                       $kitchenCover = $postData['otheimage'][$i]; 
                    }
                  }
                }
         if ($postData['otherchange']=='change' && !empty($_FILES['otherImages']['name']))
                 {
                 $j = count($_FILES['otherImages']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['otherImages']['name'][$i]))
                 {  //$this->load->library('upload');
                    $rename= $_FILES['otherImages']['name'][$i];
                    
                    $ext = pathinfo($_FILES['otherImages']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['otherImages']['tmp_name'][$i];
                    $folder = 'otherImages';
                    $othurl = $this->fileUpload($picture,$temp_name,$folder);
                    $other_img[] = $othurl;
                     if ($postData['otherImgCover'] == $_FILES['otherImages']['name'][$i]) {
                       $otherImgCover = $othurl; 
                    }
                }
            
             } 
         }

         $data = array('hostId'=>$postData['hostId'],
                       'bedroomCover' => $bedCover,
                       'bathroomCover'=> $bathroomCover,
                       'kitchenCover' => $kitchenCover,
                       'otherImgCover'=> $otherImgCover);
       $res = $this->Host_model->editimages($bedroom,$bathroom,$kitchen,$other_img,$data);
       echo $res;die;
    }


    /*================= Function for add host detail(hostdata form 10th)===================*/
     public function editHostAllDetail(){
         $profile = '';
         $user_id = $_POST['userId'];
         $data = array('host_id' => $_POST['hostId'],
                       'host_name' => $_POST['hostname'],
                       'country_code' => '+'.$_POST['country_code'],
                       'primary_phone' => $_POST['primaryphone'],
                       'lang_code' => $_POST['lang_code'],
                       'lang_code_other' => $_POST['lang_code_other'],
                       'other_phone_code' =>@$_POST['otherphone']? '+'.$_POST['country_code2']:'',
                       'introduction'=> $_POST['intro']? $_POST['intro']:'',
                       'other_phone' => @$_POST['otherphone']? $_POST['otherphone']:''  
                      );

        if ($_POST['hostimgchange']=='change' && !empty($_FILES['hostImage']['name']))
        {    
        $images = $_FILES['hostImage']['name'];
        $ext = pathinfo($_FILES['hostImage']['name'], PATHINFO_EXTENSION);
        $accesskey = $this->common->generateRandomString(10);
        $profile_picture = rand(100, 999).$accesskey. '.' . $ext;
        $temp_name = $_FILES['hostImage']['tmp_name'];
                $folder = 'hostImage';
                $profile = $this->fileUpload($profile_picture,$temp_name,$folder);
        $data['profile_img'] = $profile;
            }else{
              $data['profile_img'] = $_POST['hostuserImg'];
            }
    
         $govId = [];

       if ($_POST['idchange']=='change' && !empty($_FILES['govtId']['name']))
                 {
                 $j = count($_FILES['govtId']['name']);
                 for($i=0;$i<$j;$i++){
                 if (!empty($_FILES['govtId']['name'][$i]))
                 {  $this->load->library('upload');
                    $rename= $_FILES['govtId']['name'][$i];
                    $ext = pathinfo($_FILES['govtId']['name'][$i], PATHINFO_EXTENSION);
                    $image_name = $this->common->generateRandomString(10);
                    $picture = rand(100, 999) . '-' . $image_name.'.'.$ext;
                    $temp_name = $_FILES['govtId']['tmp_name'][$i];
                    $folder = 'hostgovId';
                    $govId[] = $this->fileUpload($picture,$temp_name,$folder);
                 }else{
                    if (!empty($_POST['govimage'][$i])) {
                      $govId[] = $_POST['govimage'][$i];
                    }
                 }
            
              } 
         }else{
 if (isset($_POST['govimage']) && !empty($_POST['govimage'])) {
        $be = count($_POST['govimage']);
        for($i=0;$i<$be;$i++){
          if (!empty($_POST['govimage'][$i])) {
            $govId[] = $_POST['govimage'][$i];
          }
          
        }
      }
    }
       $host_id = $_POST['hostId'];
       $res = $this->Host_model->addHostDetail($data,$host_id,$govId,$user_id);
       echo $res;die;
    }


//========Earning=====================//

function earning(){
 $this->checkLogout();   
 $user_id=$_SESSION['webuser_bgpkr']['user_id']; 
 $result['data']=$this->Host_model->earning_data($user_id); 
 $this->load->view('templates/hostHeader');
 $this->load->view('web/earning',$result);
 $this->load->view('templates/hostFooter');

}

//========Earining host==========//

  function year_graph(){
    $post=$this->input->post();
    $data=["user_id"=>$post['user_id'],"income_graph"=>$post['income_graph']];
    $result=$this->Host_model->year_graph($data);
    if(!empty($result)){
      echo json_encode($result);die();
    }
  } 

//==========earning host============//
function set_country_session(){
   // $this->session->set_userdata('guest_country','India'); 
   //  $this->session->set_userdata('country_code','IN');
   //  $this->session->set_userdata('guest_city','Ghaziabad');   
  $server_name=$_SERVER['SERVER_NAME'];
  $client  = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = @$_SERVER['REMOTE_ADDR'];
  $result  = array('country'=>'', 'city'=>'','country_code'=>'');
  if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
  }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
  }else{
    $ip = $remote;
  }
  $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip)); 
  if($ip_data && $ip_data->geoplugin_countryName != null){
    $result['country_code'] = $ip_data->geoplugin_countryCode;
    $result['country']= $ip_data->geoplugin_countryName;
    $result['city']=$ip_data->geoplugin_city;
  }
   switch (true) {
   case ($server_name == 'www.bagpackar.in'):
   $this->session->set_userdata('guest_country','India');
    break;
    case ($server_name == 'www.bagpackar.com'):
   $this->session->set_userdata('guest_country','USA');
    break;
   default:
   $this->session->set_userdata('guest_country','USA');
    break; 
  }
  return 1;
  }
 
  
  /*================= Function for User check  ===================*/
    public function hostmobcheck(){
        $mob_no = $_POST['mobno'];
        $host_id = $_POST['hostId'];
        $this->Host_model->hostmobcheck($mob_no,$host_id);
    }

  /*================= Function for User check  ===================*/
       public function checkLogout(){
        $sessionData=$this->session->userdata('webuser_bgpkr');
        if(!$sessionData){
         redirect('host');
        }
    }

    /*================= Function for User check  ===================*/
       public function checkLogoutAjax(){
        $sessionData=$this->session->userdata('webuser_bgpkr');
        if(!$sessionData){
         echo 'load';die;
        }
    }

    /*================= Function for User check  ===================*/
    //    public function loader(){
    //     $this->load->view('web/loader');
    // }

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


