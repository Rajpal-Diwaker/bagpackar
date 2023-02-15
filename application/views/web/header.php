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
<link href="<?php echo base_url();?>assets/css/daterangepicker.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/intlTelInput.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/alertify.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1hKM9oa_2BLZ0IMJIjq6H94PIoaDNuIU&libraries=places"></script>
</head>
<script type="text/javascript">
var IsplaceChange = true;
function homelocation(){
var input = document.getElementById('location');
var autocomplete = new google.maps.places.Autocomplete(input);
google.maps.event.addListener(autocomplete, 'place_changed', function () {
var place = autocomplete.getPlace();
$('#location_city').val('');
 var city = null,state=null,country=null;
for (var i = 0; i < place.address_components.length; i++) {
for (var j = 0; j < place.address_components[i].types.length; j++) {  
if (place.address_components[i].types[j] == "locality") {
city=place.address_components[i].long_name;  
$("#location_city").val();
break;
}
else if (place.address_components[i].types[j] == "administrative_area_level_1") {
state = place.address_components[i].long_name;
}

if(city && state){
  break;
}
}//second loop
}//first loop
IsplaceChange = true;
$("#location_city").val(city);
});

$("#location").keydown(function () {
IsplaceChange = false;
});
}
//=============header location====================//

$(document).ready(function(){

 var input3 = document.getElementById('location_header1');
var autocomplete3 = new google.maps.places.Autocomplete(input3);
google.maps.event.addListener(autocomplete3, 'place_changed', function () {
var place = autocomplete3.getPlace();
$('#location_city').val('');
 $('.pac-container').remove();
for (var i = 0; i < place.address_components.length; i++) {
for (var j = 0; j < place.address_components[i].types.length; j++) {                 
if (place.address_components[i].types[j] == "locality") {$("#location_city").val(place.address_components[i].long_name);
}
}
}

$('.pac-container').addClass('yesdone');
IsplaceChange = true;
 change_url()

});

$("#location_header1").keydown(function () {
IsplaceChange = false;
$("#location_header1").parent()
    .css({position: "relative"})
    .append( $('.pac-container'));
});


var input = document.getElementById('location_header');
var autocomplete = new google.maps.places.Autocomplete(input);
google.maps.event.addListener(autocomplete, 'place_changed', function () {
var place = autocomplete.getPlace();
$('#location_city').val('');
 $('.pac-container').remove();
 var city = null,state=null,country=null;
for (var i = 0; i < place.address_components.length; i++) {
for (var j = 0; j < place.address_components[i].types.length; j++) {  
if (place.address_components[i].types[j] == "locality") {
city=place.address_components[i].long_name;
$("#location_city").val();
break;
}
else if (place.address_components[i].types[j] == "administrative_area_level_1") {
state = place.address_components[i].long_name;
break;
}

if(city && state){
  break;
}
}//second loop
}//first loop
$("#location_city").val(city);
$('.pac-container').addClass('yesdone');
IsplaceChange = true;
change_url()
});
$("#location_header").keydown(function () {
IsplaceChange = false;
$("#location_header").parent()
    .css({position: "relative"})
    .append( $('.pac-container'));
});
});

//==============chnage url====================//

function change_url(){
var location=$('#location_city').val();
var first_date="";
var second_date="";
let adult_count=0;
let children_count=0;
let infant_count=0;
window.location.href="stagging-list?location="+location+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count;

}  
</script> 
<body>
<div class="loderwraper loaderCntr" style="display:none;">
<div id="anim"></div>
</div>
<!--Header Start Here-->
<nav class="navbar navbar-default navbar-fixed-top" id="header">
<div class="navbar_wrapper">
<div class="navbar-header">
<input type="hidden" id="location_city">
<input type="hidden" id="city" name="city">
<a class="navbar-brand" href="<?php echo base_url();?>">logo</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<!-- guest_id -->
<?php if(isset($_SESSION['webuser_bgpkr']['user_id'])){?>
<input type="hidden" id="guest_id" value="<?php echo $_SESSION['webuser_bgpkr']['user_id'];?>">
<?php } else {?>
<input type="hidden" id="guest_id">
<?php } ?>
<!-- guest id -->
<?php if(!isset($_SESSION['webuser_bgpkr']['email']) && empty($_SESSION['webuser_bgpkr']['email'])){?>
<ul class="nav navbar-nav navbar-right">
<li class="input_field">
<div class="form_group search_input">
<div class="select_tag">
<input type="text" placeholder="Search" class="form-control" id="location_header">
<i class="fa fa-search" aria-hidden="true"></i>
</div>
</div>
</li>
<li><a href="<?php echo base_url();?>host">HOST A HOME</a></li>
<li><a data-text="login" href="javascript:void(0);">LOGIN</a></li>
<li><a data-text="singup" href="javascript:void(0);">SIGN UP</a></li>
</ul>
<?php }else{ ?>
<ul class="nav navbar-nav navbar-right">
<li class="input_field">
<div class="form_group search_input">
<div class="select_tag">
<input type="text" placeholder="Search" class="form-control" id="location_header">
<i class="fa fa-search" aria-hidden="true"></i>
</div>
</div>
</li>
<li><a href="<?php echo base_url();?>host">HOST A HOME</a></li>
<li class="dropdown notili customDropdown" id="onreceive">
<a href="javascript:void(0);" id="submenu" href="#" class="dropdown-toggle" data-toggle="dropdown"
aria-haspopup="true" role="button" aria-expanded="false">
     <span class="count-wrapper">
          <i class="fa fa-bell" aria-hidden="true"></i>
          <?php $user_idn = $_SESSION['webuser_bgpkr']['user_id']; 
          $noti = $this->db->select('count(id) as countnoti')
                           ->where('receiver_id',$user_idn)
                           ->where('read_status','0')
                           ->where('icon_status','0')
                           ->get('bgpkr_notification');
               $resultn=$noti->result();
               $count=@$resultn[0]->countnoti?$resultn[0]->countnoti:'';
                      ?>                    
      <span class="badge badge-pill badge-primary" id="badgeCount"><?=$count;?></span>
   
      </span>
</a>
<div class="dropdown-menu" role="menu" aria-labelledby="submenu">

        <?php 
               $resNoti=$this->common->notidata($user_idn);
               if($resNoti){ ?>
              <ul>
               <?php foreach($resNoti as $key => $value){ 
                $urlNoti = 'javascript:void(0)';
                if ($value['type'] == 'Booking Status') {
                 $urlNoti = base_url().'reservation';
                }elseif ($value['type'] == 'Host Booking') {
                  $urlNoti = base_url().'booking-detail';
                }else{
                  $urlNoti = 'javascript:void(0)';
                }
              ?>
            <li>
            <a href="<?=$urlNoti;?>">
             
              <span class="notipimg">
                <?php if($value['image'] != ''){?>
                <img src="<?=$value['image'];?>" alt="">
              <?php }else{ ?>
                <div class="profileifnotImage"><?php echo ucfirst($value['name'][0]);?></div>
              <?php } ?>
              </span>
           
              <span class="notipinfo">
                <span class="notimessheading">
                  <?=$value['message'];?>
                </span>
              
                <span class="notimesstime">
                  <?php 
                    $strTime=$this->common->time_elapsed_string($value['added_on']);
                    echo $strTime;
                  ?>
                </span>
              </span>
           
            </a>
          </li>

          <?php } ?> 
         </ul>
        <?php } else{ ?>

           <div class="notFoundata text_black text-center height200">No Data Found</div>

          <?php } ?>

        
    </div>
</li>
<li class="dropdown profileli customDropdown">
<a href="javascript:void(0);" id="submenu" href="#" class="dropdown-toggle" data-toggle="dropdown"
aria-haspopup="true" role="button" aria-expanded="false">
<span class="pimage">
<?php
$img = $_SESSION['webuser_bgpkr']['image'];
$name = $_SESSION['webuser_bgpkr']['name'];
if(!empty($img)){?>
<img src="<?php echo $img;?>" alt="">
<?php }else{ ?>
<div id="profileImage"><?php echo ucfirst($name[0]);?></div>
<?php } ?>
</span>

</a>
<ul class="dropdown-menu" role="menu" aria-labelledby="submenu">

<li><a href="<?php echo base_url();?>reservation">Manage Bookings<i class="fa fa-calendar" aria-hidden="true"></i></a></li>

<li><a href="<?php echo base_url();?>user-chat">Messages<i class="fa fa-envelope" aria-hidden="true"></i></a></li>

<li><a href="<?php echo base_url();?>payments">Payments<i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>


<li><a href="<?php echo base_url();?>favourites">Favourite<i class="fa fa-heart fa-lg" aria-hidden="true"></i></a></li>

<li><a href="<?php echo base_url();?>update-profile">Settings<i class="fa fa-cog" aria-hidden="true"></i></a></li>

<li><a href="<?php echo base_url();?>logout">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

</ul>
</li>
</ul>
<?php } ?>
</div>
</div>

<?php if(isset($_SESSION['webuser_bgpkr']['email']) && !empty($_SESSION['webuser_bgpkr']['email'])){?>
     <ul class="list-unstyled list-inline onmobilenav">
          <li class="dropdown notili customDropdown" id="onreceive1">
            <a href="javascript:void(0);" id="submenu" href="#" class="dropdown-toggle" data-toggle="dropdown"
            aria-haspopup="true" role="button" aria-expanded="false">
            <span class="count-wrapper">
          <i class="fa fa-bell" aria-hidden="true"></i>
          <?php $user_idn = $_SESSION['webuser_bgpkr']['user_id']; 
          $noti = $this->db->select('count(id) as countnoti')
                           ->where('receiver_id',$user_idn)
                           ->where('read_status','0')
                           ->where('icon_status','0')
                           ->get('bgpkr_notification');
               $resultn=$noti->result();
               $count=@$resultn[0]->countnoti?$resultn[0]->countnoti:'';
                         ?>                    
      <span class="badge badge-pill badge-primary" id="badgeCount"><?=$count;?></span>
    
      </span>
          </a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="submenu">
        <?php 
               $resNoti=$this->common->notidata($user_idn);
               if($resNoti){ ?>

            
            
             <?php foreach($resNoti as $key => $value){ 
              $urlNoti = 'javascript:void(0)';
                if ($value['type'] == 'Booking Status') {
                 $urlNoti = base_url().'reservation';
                }elseif ($value['type'] == 'Host Booking') {
                  $urlNoti = base_url().'booking-detail';
                }else{
                  $urlNoti = 'javascript:void(0)';
                }
              ?>
              <li>
              <a href="<?=$urlNoti;?>">
              <span class="notipimg">
                <?php if($value['image'] != ''){?>
                <img src="<?=$value['image'];?>" alt="">
              <?php }else{ ?>
                <div class="profileifnotImage"><?php echo ucfirst($value['name'][0]);?></div>
              <?php } ?>
              </span>
           
              <span class="notipinfo">
                <span class="notimessheading">
                  <?=$value['message'];?>
                </span>
              
                <span class="notimesstime">
                  <?php 
                    $strTime=$this->common->time_elapsed_string($value['added_on']);
                    echo $strTime;
                  ?>
                </span>
              </span>
              </a>
               </li>
           <?php } ?>
            
         
     <?php } else{ ?>

           <div class="notFoundata text_black text-center height200">No Data Found</div>

          <?php } ?>

        </ul>
        </li>
        <li class="dropdown profileli customDropdown">
          <a href="javascript:void(0);" id="submenu" href="#" class="dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" role="button" aria-expanded="false">
          
<button type="button" class="navbar-toggle"> 
<span class="sr-only">Toggle navigation</span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</button>
        </a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="submenu">
        
  <li><a href="<?php echo base_url();?>host">Host a Home<i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>

        <li><a href="<?php echo base_url();?>reservation">Reservation<i class="fa fa-calendar" aria-hidden="true"></i></a></li>

    <li><a href="<?php echo base_url();?>user-chat">Messages<i class="fa fa-envelope" aria-hidden="true"></i></a></li>

    <li><a href="<?php echo base_url();?>payments">Payments<i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>

    <li><a href="<?php echo base_url();?>update-profile">Settings<i class="fa fa-cog" aria-hidden="true"></i></a></li>

    <li><a href="<?php echo base_url();?>logout">Logout<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
          
        </ul>
      </li>
    </ul>
    <?php }if(!isset($_SESSION['webuser_bgpkr']['email']) && empty($_SESSION['webuser_bgpkr']['email'])){ ?>
      <ul class="list-unstyled list-inline onmobilenav">
         <li class="dropdown profileli customDropdown">
          <a href="javascript:void(0);" id="submenu" href="#" class="dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" role="button" aria-expanded="false">
          
<button type="button" class="navbar-toggle"> 
<span class="sr-only">Toggle navigation</span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</button>
        </a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="submenu">
        
  <li><a href="<?php echo base_url();?>host">Host a Home<i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
          
        </ul>
      </li>
    </ul>
    <?php } ?>
<div class="appenddiv">
</div>

</nav>
<div class="input_field searchmb">
<div class="form_group search_input">
<div class="select_tag">
<input type="text" placeholder="Search" class="form-control" id="location_header1">
<i class="fa fa-search" aria-hidden="true"></i>
</div>
</div>
</div>
<script type="text/javascript">
 $('.notili').on('show.bs.dropdown', function () {
 //$(".loaderCntr").show();$.event
  var valt = 'true';
  $.ajax({
  //async: false,
  url: '<?php echo base_url('web/property/notiStatus'); ?>',
  type: 'POST',
  data:{"status":valt},
  success: function (data) {
   dataVal = data;
   //$(".loaderCntr").hide();
   if(dataVal != false){
        $('#badgeCount').text('');
      }
   }
   });
});
 $('.customDropdown').on('show.bs.dropdown', function () {
    $('body').addClass('dropdownopennow');
  })
  $('.customDropdown').on('hide.bs.dropdown', function () {
    $('body').removeClass('dropdownopennow');
  })
</script>