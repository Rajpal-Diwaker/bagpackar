<div id="wrapper">
<!--bodyheader section start here-->
<section class="body_header earn_header" style="background: url(<?php echo base_url();?>assets/images/earnbg.png);">
<form action="<?php echo base_url()?>host-place" method="post" id="becomehost">
<div class="earn_inner">
<span class="heading">Earn Money</span>
<span class="tag_line">List your place</span>
<div class="line_stip">
<span>Host a place to stay</span><span class="line_span"></span>
</div>
<div class="earn_wr">

<div class="actionform_div">
<div class="form_body">
<div class="form_input input_field">
<div class="form_group">
<p>Location</p>
<div class="location_input">
<input type="text" name="location" id="location" onfocus="initAutocomplete()" class="form-control" placeholder="Search any location" autoComplete="off">
<svg width="33" height="33" id="curruntLocation" viewBox="0 0 33 33">
<path
d="M18,12a6,6,0,1,0,6,6A6,6,0,0,0,18,12Zm13.41,4.5A13.491,13.491,0,0,0,19.5,4.59V1.5h-3V4.59A13.491,13.491,0,0,0,4.59,16.5H1.5v3H4.59A13.491,13.491,0,0,0,16.5,31.41V34.5h3V31.41A13.491,13.491,0,0,0,31.41,19.5H34.5v-3ZM18,28.5A10.5,10.5,0,1,1,28.5,18,10.492,10.492,0,0,1,18,28.5Z"
transform="translate(-1.5 -1.5)" /></svg>
</div>
</div>
<div class="form_group">
<p>Guest(s)</p>
<div class="select_tag">
<select class="form-control" name="guests" id="guests">
<option value="1">1 guest</option>
<option value="2">2 guests</option>
<option value="3">3 guests</option>
<option selected="" value="4">4 guests</option>
<option value="5">5 guests</option>
<option value="6">6 guests</option>
<option value="7">7 guests</option>
<option value="8">8 guests</option>
<option value="9">9 guests</option>
<option value="10">10 guests</option>
<option value="11">11 guests</option>
<option value="12">12 guests</option>
<option value="13">13 guests</option>
<option value="14">14 guests</option>
<option value="15">15 guests</option>
<option value="16">16 guests</option>
</select>
<i class="fa fa-caret-down" aria-hidden="true"></i>
</div>
</div>
<div class="form_group">
<p>Type</p>
<div class="select_tag">
<select class="form-control" name="placeType" id="placeType">
<?php if($places){
foreach ($places as $key => $value) {
?>
<option value="<?=$value['place_type']?>"><?=$value['place_type']?></option>
<?php } } ?>
</select>
<i class="fa fa-caret-down" aria-hidden="true"></i>
</div>
</div>
</div>
<div class="form_go">
<div class="form_group">
<p>&nbsp;</p>
<button type="submit" id="create_host" class="submit_btn">
<!-- <a href=""> --> 
<svg>
<path
d="M13.395,4.7l1.561-1.561a1.681,1.681,0,0,1,2.384,0L31.008,16.8a1.681,1.681,0,0,1,0,2.384L17.339,32.857a1.681,1.681,0,0,1-2.384,0L13.395,31.3a1.689,1.689,0,0,1,.028-2.412L21.9,20.813H1.688A1.683,1.683,0,0,1,0,19.125v-2.25a1.683,1.683,0,0,1,1.688-1.687H21.9L13.423,7.116A1.677,1.677,0,0,1,13.395,4.7Z" />
</svg>
<!-- </a> -->
</button>
</div>
</div>
</div>
</div>
<div class="earn_amount">
  <div class="price" id="priceId"></div>
  <span class="small-text">per month</span>
</div>


</div>

</div>
</form>
<div class="text-right links-text"><a href="<?php echo base_url();?>terms-condition">*Terms and Condition Apply.</a></div>
</section>
<!--bodyheader section end here-->
<!--host section start here-->
<section class="host" style="background: url(<?php echo base_url();?>assets/images/hostbg.png);">
<div class="host_inner">
<div class="host_content">
<div class="title">
<span>Have a property to rent?</span>
<h2>Become a host</h2>
</div>
<p>Why Hosting on Bagpackar ?</p>

<p>You can make extra income and provides flexibility to use your property at your benefit by hosting your property on Bagpackar. Hosting property will allow you to meet and interact with people around the world, more flexibility managing your property and diversify your income, Bagpackar offers hosting for numerous unique properties to allow guest to stay at your property and share unique staying experiences. </p>


<p>Free Hosting</p>
<p>There are no hosting fees</p>
<a href="javascript:void(0)" id="gohosting" class="btn_style">
<span>GET STARTED</span>
<svg>
<path
d="M13.395,4.7l1.561-1.561a1.681,1.681,0,0,1,2.384,0L31.008,16.8a1.681,1.681,0,0,1,0,2.384L17.339,32.857a1.681,1.681,0,0,1-2.384,0L13.395,31.3a1.689,1.689,0,0,1,.028-2.412L21.9,20.813H1.688A1.683,1.683,0,0,1,0,19.125v-2.25a1.683,1.683,0,0,1,1.688-1.687H21.9L13.423,7.116A1.677,1.677,0,0,1,13.395,4.7Z">
</path>
</svg>
</a>
</div>
<div class="hosting_satification">
<div class="hosting_info">
<span class="icons">
<svg viewBox="0 0 29 29">
<path class="a"
d="M25.6,32.4a1.2,1.2,0,0,1,1.2,1.2,1.2,1.2,0,0,0,2.4,0,3.6,3.6,0,1,0-7.2,0,1.2,1.2,0,0,0,2.4,0A1.2,1.2,0,0,1,25.6,32.4Z"
transform="translate(-16.003 -21.604)" />
<path class="a"
d="M57.6,30A3.6,3.6,0,0,0,54,33.6a1.2,1.2,0,0,0,2.4,0,1.2,1.2,0,1,1,2.4,0,1.2,1.2,0,0,0,2.4,0A3.6,3.6,0,0,0,57.6,30Z"
transform="translate(-38.407 -21.604)" />
<path class="a"
d="M16.394,2A14.394,14.394,0,1,0,30.788,16.394,14.394,14.394,0,0,0,16.394,2Zm0,26.389A11.995,11.995,0,1,1,28.389,16.394,11.995,11.995,0,0,1,16.394,28.389Z"
transform="translate(-2 -2)" />
<path class="a"
d="M39.945,58.349l-.7.7a4.708,4.708,0,0,1-6.5,0l-.7-.7a1.2,1.2,0,0,0-1.7,1.7l.7.7a6.987,6.987,0,0,0,9.9,0l.7-.7a1.2,1.2,0,0,0-1.7-1.7Z"
transform="translate(-21.602 -41.206)" />
</svg>
</span>
<div class="iconinfo">
<span> Free Hosting </span>
We charge only 0.99%
</div>
</div>
<div class="hosting_info">
<span class="icons">
<svg viewBox="0 0 29 29">
<path class="a"
d="M25.6,32.4a1.2,1.2,0,0,1,1.2,1.2,1.2,1.2,0,0,0,2.4,0,3.6,3.6,0,1,0-7.2,0,1.2,1.2,0,0,0,2.4,0A1.2,1.2,0,0,1,25.6,32.4Z"
transform="translate(-16.003 -21.604)" />
<path class="a"
d="M57.6,30A3.6,3.6,0,0,0,54,33.6a1.2,1.2,0,0,0,2.4,0,1.2,1.2,0,1,1,2.4,0,1.2,1.2,0,0,0,2.4,0A3.6,3.6,0,0,0,57.6,30Z"
transform="translate(-38.407 -21.604)" />
<path class="a"
d="M16.394,2A14.394,14.394,0,1,0,30.788,16.394,14.394,14.394,0,0,0,16.394,2Zm0,26.389A11.995,11.995,0,1,1,28.389,16.394,11.995,11.995,0,0,1,16.394,28.389Z"
transform="translate(-2 -2)" />
<path class="a"
d="M39.945,58.349l-.7.7a4.708,4.708,0,0,1-6.5,0l-.7-.7a1.2,1.2,0,0,0-1.7,1.7l.7.7a6.987,6.987,0,0,0,9.9,0l.7-.7a1.2,1.2,0,0,0-1.7-1.7Z"
transform="translate(-21.602 -41.206)" />
</svg>
</span>
<div class="iconinfo">
<span> 99% satisfied customers</span>
Our clients' opinions speak for themselves
</div>
</div>
</div>
</div>
</section>
<!--host section end here-->
<!--newsletter start here-->
<section class="newsletter">
 <form id="newsletterform"> 
  <div class="newsletter_content">
    <span class="newsletter_heading">Subscribe to our newsletter and receive exclusive offers every week</span>
    <div class="newsletter_form">
      <div class="newsletter_input">
        <input type="text" placeholder="Enter your email" name="email" id="news_email">
      </div>
      <div class="newsletter_btn">
        <input type="button" value="Subscribe" id="news_submit">
      </div>
    </div>
    <span id="news_email_error" class="form_error"></span> 
  </div>
</form>
</section>

<!--newsletter end here-->
</div>
<link rel="manifest" href="<?php echo base_url();?>WebPushNotifications/manifest.json">
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script>
<script src="<?php echo base_url();?>WebPushNotifications/script.js"></script>
<script type="text/javascript">
$(".loaderCntr").hide();
$('#create_host').on('click', function () {
              var formStatus = true;
              if ($("#checkLogin").val().trim() == "0") 
              {      
                formStatus = false;      
                $('#lsfmodal').removeClass('signupopen');
                $('#lsfmodal').addClass('loginopen');
                $('#lsfmodal').modal('show');
              }
              if (!formStatus) 
              {     
                event.preventDefault();    
              }
              
            });

  $('#gohosting').on('click', function () {
              var formStatus = true;
              if ($("#checkLogin").val().trim() == "0") 
              {      
                formStatus = false;      
                $('#lsfmodal').removeClass('signupopen');
                $('#lsfmodal').addClass('loginopen');
                $('#lsfmodal').modal('show');
              }
              if (!formStatus) 
              {     
                event.preventDefault();    
              }else{
                $('#becomehost').submit();
              }
              
            });


// var guest = $('#guests').val();  
// var adGuest = guest;
// var place = $('#placeType').val();
// var price = parseInt($('#priceInput').val());
// var adPlace = place;
// $( "#location" ).change(function() {
// var locationPrice = Math.floor(Math.random() * (800 - 300)) + 300;
// $('#priceInput').val(locationPrice);
// price = parseInt(locationPrice);
// $('#priceId').text('');
// $('#priceId').append('$'+locationPrice+'<span>per month</span>');
// guest = $('#guest').val();  
// place = $('#placeType').val();
// adPlace = place;
// });

//=============change price======================//   
// function changePrice(){
// var guestch = $('#guests').val();  
// var placech = $('#placeType').val();
// if (adPlace == placech) {

// //&& adPlace != place && adGuest != guest
// if (placech == place && guestch == guest) {
// $('#priceInput').val(price);
// $('#priceId').text('');
// $('#priceId').append('$'+price+'<span>per month</span>');
// }
// else if (guestch < adGuest) {
// var onChangePrice = parseInt((price-price*10/100)+guestch*2);
// $('#priceInput').val(onChangePrice);
// $('#priceId').text('');
// $('#priceId').append('$'+onChangePrice+'<span>per month</span>');
// adGuest = guestch;
// }
// else if (guestch > adGuest) {
// var onChangePrice = parseInt((price+price*10/100)+guestch*2);
// $('#priceInput').val(onChangePrice);
// $('#priceId').text('');
// $('#priceId').append('$'+onChangePrice+'<span>per month</span>');
// adGuest = guestch;
// }

// }
// else if (placech != adPlace) {
// var onChangePrice = 1 + Math.floor(Math.random() * 999);
// console.log(onChangePrice)
// $('#priceInput').val(onChangePrice);
// $('#priceId').text('');
// $('#priceId').append('$'+onChangePrice+'<span>per month</span>');
// adPlace = placech;

// }
// //place=placech;
// }

var lat,lng;
var  autocomplete;
function initAutocomplete() {
autocomplete = new google.maps.places.Autocomplete(
document.getElementById('location'), {types: ['geocode']});
autocomplete.addListener('place_changed', fillInAddress);
}
function fillInAddress() {
var place = autocomplete.getPlace();
}


var geocoder;

if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
}


//=======sucess function===============//
function successFunction(position) {
lat = position.coords.latitude;
lng = position.coords.longitude;
codeLatLng(lat, lng)
}

//=============error function=====================//
function errorFunction() {
console.log("Geocoder failed");
}

//=================get city=======================//
geocoder = new google.maps.Geocoder();
function codeLatLng(lat, lng) {
var latlng = new google.maps.LatLng(lat, lng);
geocoder.geocode({
'latLng': latlng
}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[1]) {
for (var i = 0; i < results[0].address_components.length; i++) {
for (var b = 0; b < results[0].address_components[i].types.length; b++) {
if (results[0].address_components[i].types[b] == "locality") {
city= results[0].address_components[i].long_name;
break;
}
else if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
state =results[0].address_components[i].long_name;
break;
}
if(city && state){
  break;
}
}
}
//city data
$('#location').val(city+', '+state);
} else {
console.log("No results found");
}
} else {
alert("Geocoder failed due to: " + status);
}
});
}

$( "#curruntLocation" ).click(function() {
       if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        }
      });

//==============news letter============================//
var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
$('#news_email').on('keyup',function(){
  var news_email = $("#news_email").val();
  if (!email_regex.test(news_email) && news_email!=''){ 
    $("#news_email_error" ).text( "Please enter valid email address." ).show(); 
  }else if(email_regex.test(news_email) || news_email.length<= 0){
    $("#news_email_error" ).hide();
  }
});

$("#news_submit").on('click',function(event){
  var formStatus=true;
  var news_email = $("#news_email").val();

//=========login_email=============//
if(news_email==""){
  formStatus=false;
  $("#news_email_error" ).text( "Please enter email." ).show(); 
}
else if (!email_regex.test(news_email) && news_email!=''){ 
  formStatus=false;
  $("#news_email_error" ).text( "Please enter valid email address." ).show(); 
}
if (formStatus==false) { 
  event.preventDefault(); 
  return false;
}
else if(formStatus==true) {
  $(".loaderCntr").show();
  $.ajax({
    url: "<?php echo base_url()?>newsletter",
    type: 'POST',
    data:{"news_email":news_email},
    success: function(response){
      $(".loaderCntr").hide();
      if(response ==1){
       $("#news_email").val(''); 
       alertify.notify('Thanks for subscribing the Bagpackar Newsletter.', 'success', 3, function(){})
     }else if(response==0){
       alertify.notify('Something Went Wrong.', 'error', 3, function(){}); 
       return false; 
     }
   }
 });
}    
});

</script>

   <?php $curn='Dollar';
if(!empty($this->session->userdata('guest_country')) && $this->session->userdata('guest_country')== "India"){
  $curn = 'Rupees'; } 
 ?> 
 <script type="text/javascript">
    var valCur = '<?php echo $curn;?>';
    var clsVal = valCur;
    //alert(clsVal)
    switch(clsVal) {
              case 'Dollar':
              $('#priceId').append(`<div class="priceinner"><span class="small-text">Earn Upto</span>
              $2100*</div>`);
              break;

              case 'Rupees':
              $('#priceId').append(`<div class="priceinner"><span class="small-text">Earn Upto</span>
              Rs.45000*</div>`);
              break;

              default:
              $('#priceId').append(`<div class="priceinner"><span class="small-text">Earn Upto</span>
              $2100*</div>`);
            }
 </script>