<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bagpackar</title>
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url();?>assets/images/fav.png" type="image/x-icon">

  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- <link href="<?php echo base_url();?>assets/css/daterangepicker.css" rel="stylesheet"> -->
  <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/intlTelInput.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/alertify.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/mutidate.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/media.css" type="text/css" />
  <link  rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/datatable.css">
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/bootbox.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script> -->
  < <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
  <script src="<?php echo base_url();?>assets/js/alertify.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/datatable.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1hKM9oa_2BLZ0IMJIjq6H94PIoaDNuIU&libraries=places"></script>
</head>
<body>
  <div class="backslidemenu"></div>
  <div class="loaderCntr" style="display: none;">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <div id="wrapper">
    <!-- Sidebar Section Start Here-->
    <div class="side_bar ">

      <div class="logo_wrap">
        <a href="<?php echo base_url();?>admin/dashboard"><img src="<?php echo base_url();?>admin_assets/images/bagpackar_logo.png" alt=""></a>
      </div>
      <div class="sidebar_menu_wrap">
        <div class="sidebar_menu">
          <ul>
            <li <?php if($this->uri->segment(2)=="dashboard"){echo 'class="active"';}?>>
              <a href="<?php echo base_url();?>admin/dashboard">My Dashboard</a>
            </li>
            <li <?php if($this->uri->segment(2)=="user-list"){echo 'class="active"';}?>>
              <a href="<?php echo base_url();?>admin/user-list">Users</a>
            </li>
            <li class="menu_toggle_wrap collapsed" data-toggle="collapse" href="#collapse1">
              <a href="#">Website Images<i class="fa fa-angle-up"
                aria-hidden="true">
              </i> 
            </a>
          </li> 
          <div id="collapse1" class="panel-collapse collapse <?php if($this->uri->segment(2)=="popular-destination-list"){echo 'in';}else if($this->uri->segment(2)=="discover-list"){echo 'in';}else if($this->uri->segment(2)=="stay-home-list"){echo 'in';}?>">
            <ul>
              <li <?php if($this->uri->segment(2)=="popular-destination-list"){echo 'class="active"';}?>>
                <a  href="<?php echo base_url();?>admin/popular-destination-list">Popular Destination Images</a>
              </li>
              <li <?php if($this->uri->segment(2)=="discover-list"){echo 'class="active"';}?>>
                <a  href="<?php echo base_url();?>admin/discover-list">Discover Images</a>
              </li>
              <li <?php if($this->uri->segment(2)=="stay-home-list"){echo 'class="active"';}?>>
                <a  href="<?php echo base_url();?>admin/stay-home-list">Stay Home Images</a>
              </li>
              <li <?php if($this->uri->segment(2)=="most-popular-list"){echo 'class="active"';}?>>
                <a  href="<?php echo base_url();?>admin/most-popular-list">Most Popular Images</a>
              </li>
            </ul>
          </div>
          <li class="menu_toggle_wrap collapsed" data-toggle="collapse" href="#collapse2">
            <a href="#">Property Management <i class="fa fa-angle-up"
              aria-hidden="true">
            </i> 
          </a>
        </li> 
        <div id="collapse2" class="panel-collapse collapse <?php if($this->uri->segment(2)=="property-request-list"){echo 'in';}else if($this->uri->segment(2)=="property-list"){echo 'in';}?>">
          <ul>
            <li <?php if($this->uri->segment(2)=="property-request-list"){echo 'class="active"';}?>>
              <a  href="<?php echo base_url();?>admin/property-request-list">Property Request</a>
            </li>
            <li <?php if($this->uri->segment(2)=="property-list"){echo 'class="active"';}?>>
              <a  href="<?php echo base_url();?>admin/property-list">Active Property</a>
            </li>
          </ul>
        </div>

        <!--============== Transation ===========-->
        <li class="menu_toggle_wrap <?php if($this->uri->segment(2)!="booking-transactions" && $this->uri->segment(2)!="host-payments"){echo 'collapsed';}?>" data-toggle="collapse" href="#collapse3">
          <a href="#">Transactions Management <i class="fa fa-angle-up"
            aria-hidden="true">
          </i> 
        </a>
      </li> 
      <div id="collapse3" class="panel-collapse collapse <?php if($this->uri->segment(2)=="booking-transactions" || $this->uri->segment(2)=="host-payments" ||$this->uri->segment(2)=="cancelled-list"){echo 'in';}?>" >
        <ul>
          <li <?php if($this->uri->segment(2)=="booking-transactions"){echo 'class="active"';}?>>
            <a  href="<?php echo base_url();?>admin/booking-transactions">All Transactions</a>
          </li>
          <li <?php if($this->uri->segment(2)=="host-payments"){echo 'class="active"';}?>>
            <a  href="<?php echo base_url();?>admin/host-payments">Payment (Admin To Host)</a>
          </li>
          <li <?php if($this->uri->segment(2)=="cancelled-list"){echo 'class="active"';}?>>
            <a  href="<?php echo base_url();?>admin/cancelled-list">Cancelled Booking</a>
          </li>
        </ul>
      </div>
      <li <?php if($this->uri->segment(2)=="send-push"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/send-push">Send Notification</a>
      </li>
      <li <?php if($this->uri->segment(2)=="newsletter-list"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/newsletter-list">News Letter</a>
      </li> 
      <!--============== Transation ===========-->
      <li class="menu_toggle_wrap" data-toggle="collapse" href="#collapse4">
        <a href="#">footer Item<i class="fa fa-angle-up"
          aria-hidden="true">
        </i> 
      </a>
    </li> 
    <div id="collapse4" class="panel-collapse collapse <?php if( $this->uri->segment(2)=="terms-condition" ||$this->uri->segment(2)=="privacy-policy" ||$this->uri->segment(2)=="help" ||$this->uri->segment(2)=="cancel-refund" ||$this->uri->segment(2)=="covid19-guidelines" ||$this->uri->segment(2)=="referral-program" || $this->uri->segment(2)=="career" || $this->uri->segment(2)=="about-us" || $this->uri->segment(2)=="why-host" || $this->uri->segment(2)=="business_travel"){echo 'in';}?>" >
      <ul> 
       <li <?php if($this->uri->segment(2)=="terms-condition"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/terms-condition">Terms & Condition</a>
      </li>
      <li <?php if($this->uri->segment(2)=="privacy-policy"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/privacy-policy">Privacy Policy</a>
      </li>

      <li <?php if($this->uri->segment(2)=="help"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/help">Help</a>
      </li>
      <li <?php if($this->uri->segment(2)=="cancel-refund"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/cancel-refund">Cancellation and Refund policy</a>
      </li>
      <li <?php if($this->uri->segment(2)=="covid19-guidelines"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/covid19-guidelines">COVID-19 Guidelines</a>
      </li>
      <li <?php if($this->uri->segment(2)=="referral-program"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/referral-program">Referral Program</a>
      </li>
      <li <?php if($this->uri->segment(2)=="career"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/career">Career</a>
      </li>
      <li <?php if($this->uri->segment(2)=="about-us"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/about-us">About us</a>
      </li>
      <li <?php if($this->uri->segment(2)=="business_travel"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/business_travel">Business Travel</a>
      </li>
      <li <?php if($this->uri->segment(2)=="why-host"){echo 'class="active"';}?>>
        <a href="<?php echo base_url();?>admin/why-host">Why Host</a>
      </li>
    </ul>
  </div>
  

</ul>
</div>
</div>
</div>
<!-- Sidebar Section End Here-->
<div class="dashboard_header_wrap clearfix">
  <!-- Header Section Start Here-->
  <div class="header_wrapper">
    <div class="toggle_wrap">
     <a href="javascript:void(0)" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
     <a href="javascript:void(0)" class="atab-menumb"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
     <a href="javascript:void(0)" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
   </div>
   <!-- <div class="page_heading"><span>Dashboard</span></div> -->

   <div class="user_detail_wrap" aria-labelledby="dropdownMenuButton">
          <!-- <div class="notiofy"><img src="<?php echo base_url();?>admin_assets/images/bell.png" alt="">
          <span class="notification_number_bx">99</span>
        </div> -->
        <a class="waves-effect" href="javascript:void(0)" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>admin_assets/images/admin_user_pic.jpg" alt="">My Account<i
        class="fa fa-angle-down" aria-hidden="true"></i>
      </a>
      <div class="header_drop_content dropdown-menu" aria-labelledby="dropdownMenuButton">
        <ul>
          <li><a href="<?php echo base_url();?>admin/change_password"><i class="fa fa-lock" aria-hidden="true"></i>Change Password</a>
          </li>
          <li><a href="<?php echo base_url();?>admin/login/logout"><i class="fa fa-sign-in" aria-hidden="true"></i>
          Logout</a>
        </li>
      </ul>
    </div>
  </div>

</div>
<!-- Header Section End Here-->
