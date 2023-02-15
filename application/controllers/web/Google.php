<?php
class Google extends CI_Controller {
	
	 public function __construct()
     {
     	date_default_timezone_set('UTC');
		parent::__construct();
		$this->checkBlock();
		$this->load->model('web/Google_login_model');
		$this->load->library('session');
	   require_once APPPATH.'libraries/google_thirdparty/src/Google_Client.php';
	   require_once APPPATH.'libraries/google_thirdparty/src/contrib/Google_Oauth2Service.php';

	}

public function google_login(){
		$clientId = '1036820468864-4n5756u7knjkfrvk5alnhek1t3f79miu.apps.googleusercontent.com';
		$clientSecret = 'bl7n6j8YEDuGLuKNlGzRdhbe';
		$redirectURL = base_url() .'google/google_login';
		$gClient = new Google_Client();
		$gClient->setApplicationName('Bagpackar');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		if(isset($_GET['code'])){
		$gClient->authenticate($_GET['code']);
		$_SESSION['google_token'] = $gClient->getAccessToken();
		header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}
		if (isset($_SESSION['google_token'])){
		$gClient->setAccessToken($_SESSION['google_token']);
		}
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            $name = (!empty($userProfile['name']))?$userProfile['name']:'';
            $email = (!empty($userProfile['email']))?$userProfile['email']:'';
         $data=["name"=>$name,"email"=>$email,"device_token"=>'',"acc_type"=>"google","google_id"=>$userProfile['id'],"added_on"=>date('Y-m-d H:i:s')];
         $response=$this->Google_login_model->google_signup($data);
          if(!empty($response)){
          // $this->session->set_userdata('name',$data['name']);
          // $this->session->set_userdata('email',$data['email']);
          $this->session->set_userdata('webuser_bgpkr',$response);
          $this->session->set_flashdata('response','1');
	      redirect(base_url(),'refresh'); 
          } 

        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
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