
<div id="wrapper">
 <!--bodyheader section start here-->
 <div class="shimmereffect" id="firstheaderimage">
   <section class="body_header">
    <span class="heading">Discover</span>
   <!--  <span class="tag_line">The Shipwreck Beach</span>
    <p class="pich_line">Lorem ipsum headline text about a place slider</p> -->
    <div class="actionform_div">
      <div class="line_stip">
        <span>Book a place to stay</span><span class="line_span"></span>
      </div>
      <div class="form_body">
        <div class="form_input input_field">
          <div class="form_group">
            <p>Location</p>
            <div class="location_input">
              <input type="text" name="location" id="location" class="form-control" placeholder="Search any location" onclick="homelocation()">
              <span id="location_error" class="form_error"></span>
              <svg width="33" height="33" viewBox="0 0 33 33" onclick="current_location()">
                <path
                d="M18,12a6,6,0,1,0,6,6A6,6,0,0,0,18,12Zm13.41,4.5A13.491,13.491,0,0,0,19.5,4.59V1.5h-3V4.59A13.491,13.491,0,0,0,4.59,16.5H1.5v3H4.59A13.491,13.491,0,0,0,16.5,31.41V34.5h3V31.41A13.491,13.491,0,0,0,31.41,19.5H34.5v-3ZM18,28.5A10.5,10.5,0,1,1,28.5,18,10.492,10.492,0,0,1,18,28.5Z"
                transform="translate(-1.5 -1.5)" /></svg>
              </div>
            </div>
            <div class="form_group">
              <p>Date & Timing</p>
              <div class="select_tag">
                <input type="text" readonly="readonly" id="guest_date_picker" class="form-control" placeholder="Add dates" value="">
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </div>
              <span id="daterangepicker_error" class="form_error"></span>
              <input type="hidden" id="first_date">
              <input type="hidden" id="second_date">
              <input type="hidden" id="user_country">
              <input type="hidden" id="page" value="1"> 
            </div>
            <div class="form_group dropdown guest_drop">
              <p>Guest</p>
              <button class="btn dropdown-toggle form-control select_tag" id="guest_button" type="button" data-toggle="dropdown">
               <span>Select Guests</span>  <i class="fa fa-caret-down" aria-hidden="true"></i></button>
               <div class="dropdown-menu">
                <div class="guest_dropdownwrapper">
                  <div class="guest_dropdown">
                    <span class="labels">
                      Adults <span>Ages 13+</span>
                    </span>
                    <div class="number_input_box">
                      <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_adult">
                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                        style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                        <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                      </svg>
                    </button>
                    <input type="number" name="adult_count" id="adult_count" min="0" max="16"autocomplete="off" >
                    <button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_adult">
                      <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                      style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                      <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                      <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="guest_dropdown">
                <span class="labels">
                  Children <span>Ages 2–12</span>
                </span>
                <div class="number_input_box">
                  <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_children">
                    <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </button>
                <input type="number" name="children_count" id="children_count" min="0"  max="5" autocomplete="off">
                <button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_children">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                  style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                  <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                </svg>
              </button>
            </div>
          </div>
          <div class="guest_dropdown">
            <span class="labels">
              Infants <span>Under 2</span>
            </span>
            <div class="number_input_box">
              <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_infant">
                <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                <rect height="2" rx="1" width="12" x="6" y="11"></rect>
              </svg>
            </button>
            <input type="number" name="infant_count" id="infant_count" min="0" max="5" autocomplete="off">
            <button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_infant">
              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
              style="height: 22px; width: 22px; display: block; fill: currentcolor;">
              <rect height="2" rx="1" width="12" x="6" y="11"></rect>
              <rect height="12" rx="1" width="2" x="11" y="6"></rect>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="customdropdownfooter">
      <a href="javascript:void(0);" class="btn_style btn_cancel" id="guest_cancel">Cancel</a>
      <a href="javascript:void(0);" class="btn_style" id="guest_apply">Apply</a>
    </div>
  </div>
</div>
</div>
<div class="form_go">
  <div class="form_group">
    <p>&nbsp;</p>
    <button type="button" class="submit_btn" id="stagging_button">
      <svg>
        <path
        d="M13.395,4.7l1.561-1.561a1.681,1.681,0,0,1,2.384,0L31.008,16.8a1.681,1.681,0,0,1,0,2.384L17.339,32.857a1.681,1.681,0,0,1-2.384,0L13.395,31.3a1.689,1.689,0,0,1,.028-2.412L21.9,20.813H1.688A1.683,1.683,0,0,1,0,19.125v-2.25a1.683,1.683,0,0,1,1.688-1.687H21.9L13.423,7.116A1.677,1.677,0,0,1,13.395,4.7Z" />
      </svg>
    </button>
  </div>
</div>
</div>
</div>
</section>
</div>
<!--bodyheader section end here-->
<!--popular destination start here-->
<section class="popular-destination">
  <div class="title">
    <span>Popular Destinations</span>
    <h1>Across the Country</h1>
  </div>
  <div id="demo" style="min-height:360px;"> 
  </div>
</section>
<!--popular destination end here-->

<!--stay section start here-->
<div class="shimmereffect" id="stay_image_shimmer">
  <section class="stay">
    <div class="stay_innerwrapper">
      <div class="lt_heading">
        <div class="title">
          <span>Popular Destinations</span>
          <h2>Across the Country</h2>
        </div>
      </div>
      <div class="stay_inner">
        <h3>TOP RATED Stays</h3>
        <div id="demo2">
        </div>
       <!--  <h3> Explore nearby</h3>
        <div class="line_stip" id="viewlist">
        </div>
        <div class="secondslider" id="demo1" style="min-height:400px; ">
        </div> -->
      </div>
    </div>
  </section>
</div>
<!--stay section end here-->

<!--most popular start here-->
<section class="mostpopular" id="demo4" style="min-height:422px;">
</section>
<!--most popular end here-->

<!--top rated start here -->
<div class="shimmereffect" id="topratedShimmer" style="min-height:422px;">
  <section class="toprated">
    <div class="title">
     <h3> Explore nearby</h3>
     <div class="line_stip" id="viewlist">
     </div>
   </div>
   <div class="top_ratedcontent">
    <span class="bgname" id="session_city"></span>
     <!--  <div id="demo2">
     </div> -->
     <div class="secondslider" id="demo1" style="min-height:348px;">
     </div>
   </div>
 </section>
</div>
<!--top rated end here -->

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


<!-- <p>Free Hosting</p>
<p>There are no hosting fees</p> -->
      <a href="<?php echo base_url();?>host" class="btn_style">
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
        There are no hosting fees
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
        Guests and Host’s opinions speak for themselves
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
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<script src="<?php echo base_url();?>assets/js/textfit.js"></script>
<script>  
  var shimmer='<div class="destination_shimmer" id="demosimmer"><div class="destination_wr"><div class="destination_img shimmereffect"></div></div><div class="destination_wr"><div class="destination_img shimmereffect"></div></div><div class="destination_wr"><div class="destination_img shimmereffect"></div></div><div class="destination_wr"><div class="destination_img shimmereffect"></div></div><div class="destination_wr"><div class="destination_img shimmereffect"></div></div></div>';
  $('#demo').html(shimmer); 
  var shimmer1='<div class="bottom_slider_mainwr"><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div></div>';
  $('#demo1').html(shimmer1);
  var shimmer2='<div class="bottom_slider_mainwr"><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div></div>';
  $('#demo2').html(shimmer2);

  var popular='<div class="most_popularsectionshimmereffect shimmereffect"></div><div class="most_popularinfoshimmereffect shimmereffect"></div>';
  $('#demo4').html(popular);


//=====Use for All script==============//
$(window).on('load',function(){
 callA();
})  
$(document).ready(function(){
 $('#less_adult').attr("disabled","disabled");
 $('#less_children').attr("disabled","disabled");
 $('#less_infant').attr("disabled","disabled");
 $('#adult_count').val(0);
 $('#children_count').val(0);
 $('#infant_count').val(0);
 initGeolocation();
});
//=====init======//
var geocoder;
function initGeolocation(){
  if( navigator.geolocation ){
    
    navigator.geolocation.getCurrentPosition( success, fail );
  }else{
    console.log("Sorry, your browser does not support geolocation services.");
  }
}

function success(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  codeLatLng(lat, lng)
}

function fail() {
  $.ajax({
    url: "<?php echo base_url()?>Welcome/unset_city",
    type: 'POST',
    data:"",
    success: function(response){
    }
  });
  setTimeout(function(){
    callA();
  }, 3000);
  console.log("fail");
}
geocoder = new google.maps.Geocoder();
function codeLatLng(lat, lng) {
 // lat=39.649055;
 // lng=-104.976425;
 var latlng = new google.maps.LatLng(lat, lng);
 geocoder.geocode({
  'latLng': latlng
}, function(results, status) {
  console.log(results[0])
  $('#city').val('');
  $('#user_country').val('');
  if (status == google.maps.GeocoderStatus.OK) {
    if (results[1]) {

      var city = null,country=null;
      for (var i=0; i<results[0].address_components.length; i++) {
        for (var b=0;b<results[0].address_components[i].types.length;b++) {
          if (results[0].address_components[i].types[b] == "locality") {
            city= results[0].address_components[i].long_name;
            break;
          }
          else if (results[0].address_components[i].types[b]=== 'country') {
            country =results[0].address_components[i].long_name;
          }

          if(city && country){
            break;
          }
        }
      }

      $('#user_country').val(country);
      var guest="<?php echo $this->session->userdata('guest_country')?>";
      var guest_city="<?php echo $this->session->userdata('guest_city')?>";
      var user_country=$('#user_country').val(); 
      if (user_country == 'United States') {
       user_country = 'USA';
     }
     if(guest===user_country && city!=""){
      $('#city').val(city);
      callA(); 
    }
  }
} 
});
}   


//===========call A======================//
function callA() {
 var data=[];
 var city=$('#city').val();
 if(city.length >0) {
  data.push({name:"city",value:city});
}
$.ajax({
  url: "<?php echo base_url();?>callA",
  type:'post',
  data:data,
  cache: true,
  dataType:"JSON",
  success: function(response){
   $('#firstheaderimage').removeClass('shimmereffect'); 
   $(".body_header").css("background-image", "url(" + response.background_images.discover_image + ")"); 
   $('#demo').html(response.result); 
   $('#destination_slider').owlCarousel({
     loop: $('#destination_slider .item').size() >= 1 ? true:false,
     dragEndSpeed: false,
     stagePadding: 50,
     margin: 20,
     nav: false,
     dots: false,
     autoplay: true,
     autoWidth:true,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut', 
    responsive: {
      0: {
        items: 1,
        loop: false
      },
      768: {
        items: 3
      },
      1024: {
        items: 4
      }
    }
  });
   ALlscript();
   $('#stay_image_shimmer').removeClass('shimmereffect'); 
   $(".stay").css("background-image", "url(" + response.background_images.stay_home_image + ")");
   $('#topratedShimmer').removeClass('shimmereffect'); 
   $(".toprated").css("background-image", "url(" + response.background_images.top_rated_image + ")");  
 },
 complete:function(data){
   setTimeout(function(){
     callB();
   },2000);
 }
});
}

//===============Call B========================//
function callB() {  
  var data=[];
  var city=$('#city').val();
  if(city.length >0) {
    data.push({name:"city",value:city});
  }
  $.ajax({
    url: "<?php echo base_url();?>callB",
    type:'post',
    data:data,
    cache: false,
    dataType: "JSON",
    success: function(response){
      $('#viewlist').html('');
      if(response !=""){
        $('#viewlist').append(response.All_view);
        $('#demo1').html(response.result1);
        ALlscript();
        callC();
      }
    } 
  });
}

//===================call================c===============//
function callC() {
 var data=[];
 var city=$('#city').val();
 if(city.length >0) {
  data.push({name:"city",value:city});
}
// $(".loaderCntr").show(); 
$.ajax({
  url: "<?php echo base_url();?>callC",
  type:'post',
  data:data,
  cache: false,
  dataType: "JSON",
  success: function(response){
    if(response !=""){
      $('#demo2').html('');
      $('#demo4').html('');
      $('#demo4').html(response.result1);
      $('#session_city').text(response.session_city);
       textFit($('#session_city'));
      $('#demo2').html(response.result2);
      ALlscript();
    }
  }
});
}
//========use for date======//
$(function() {
  var nowDate = new Date();
  $('#guest_date_picker').daterangepicker({
    autoUpdateInput: false,
    minDate:nowDate,
    locale: {
      cancelLabel: 'Clear'
    }
  });
  $('#guest_date_picker').on('apply.daterangepicker', function(ev, picker) {
    var startDate=picker.startDate.format('MM/DD/YYYY');
    var endDate=picker.endDate.format('MM/DD/YYYY');
    var date1_ms=new Date(startDate).getTime();
    var date2_ms= new Date(endDate).getTime();
    var difference=date2_ms-date1_ms;
    if(difference==0){
      $('#daterangepicker_error').text("Please select valid date").show().fadeOut(3000);  
    }else{
      $('#first_date').val(picker.startDate.format('MM/DD/YYYY'));
      $('#second_date').val(picker.endDate.format('MM/DD/YYYY'));  
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    }
  });

  $('#guest_date_picker').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
  });
});   
/* datepicker end here */
$('.dropdown-menu').on('click', function (event) {
  event.stopPropagation();
});

//==========use for guest==============//
//==========adult=================//
$('#more_adult').on('click',function(){
  let adult_count=$('#adult_count').val();
  if(adult_count>=1){
    $('#less_adult').removeAttr('disabled');
  }
  if(adult_count>=16){
    $("#more_adult").attr("disabled","disabled");
  }
});

$('#less_adult').on('click',function(){
  let adult_count=$('#adult_count').val();
  if(adult_count<16){
    $("#more_adult").removeAttr('disabled'); 
  }
  if(adult_count<=0){
    $("#less_adult").attr("disabled","disabled");
  }
});

// //===========children===============//

$('#more_children').on('click',function(){
  let children_count=$('#children_count').val();
  if(children_count>=1){
    $("#less_children").removeAttr('disabled'); 
  }
  if(children_count>=5){
    $("#more_children").attr("disabled","disabled");
  }
});

$('#less_children').on('click',function(){
  let children_count=$('#children_count').val();
  if(children_count<5){
    $("#more_children").removeAttr('disabled'); 
  }
  if(children_count<=0){
    $("#less_children").attr("disabled","disabled");
  }
});
// //============infants=================//
$('#more_infant').on('click',function(){
  let infant_count=$('#infant_count').val();
  if(infant_count>=1){
    $("#less_infant").removeAttr('disabled');  
  }
  if(infant_count>=5){
    $("#more_infant").attr("disabled","disabled");
  }
});

$('#less_infant').on('click',function(){
  let infant_count=$('#infant_count').val();
  if(infant_count<5){
    $("#more_infant").removeAttr('disabled'); 
  }
  if(infant_count<=0){
    $("#less_infant").attr("disabled","disabled");
  }
});

$('#guest_apply').on('click',function(){
  let adult_count=$('#adult_count').val();
  let children_count=$('#children_count').val();
  let infant_count=$('#infant_count').val();
  if(infant_count>0 && adult_count==0){
    $('#adult_count').val(1);
    $("#less_adult").removeAttr('disabled'); 
  }
  if(children_count>0 && adult_count==0){
    $('#adult_count').val(1);
    $("#less_adult").removeAttr('disabled'); 
  }
  let adult_count1=$('#adult_count').val();
  if(adult_count1 >0 ||children_count >0 || infant_count >0 ){
    var guest= Number(adult_count1) + Number(children_count);
    if(guest==0 || guest< 2){
      var guest_text='guest';
    }else{
      var guest_text='guests';
    }
    if(infant_count==0 || infant_count <2){
      var infant_text='infant';
    }else{
      var infant_text='infants';
    }
    $('#guest_button span').text(guest + ' ' + guest_text + ',' + infant_count + ' ' + infant_text); 
    $(this).parents('.guest_drop').addClass('guestselected'); 
  }
  $(this).parents('.guest_drop').removeClass('open');

})
//===========guest cancel===============//
$('#guest_cancel').click(function(){
  $('#adult_count').val(0);
  $('#children_count').val(0);
  $('#infant_count').val(0);
  $('#less_adult').attr("disabled","disabled");
  $('#less_children').attr("disabled","disabled");
  $('#less_infant').attr("disabled","disabled");
  $(this).parents('.guest_drop').removeClass("guestselected");
  $('#guest_button span').text('Select Guests');
  $(this).parents('.guest_drop').removeClass('open');
});


$('#stagging_button').on('click',function(event){
  var location=$('#location_city').val();
  var first_date=$('#first_date').val();
  var second_date=$('#second_date').val();
  let adult_count=$('#adult_count').val();
  let children_count=$('#children_count').val();
  let infant_count=$('#infant_count').val();
  if(location==""){
    $('#location_error').text("Please enter location").show().fadeOut(3000);  
    $('#location').focus();
    return;
  }else if(adult_count<0 || adult_count >16 || children_count<0 || children_count>5 || infant_count<0 || infant_count >5){
    $('#adult_count').val(0);
    $('#children_count').val(0);
    $('#infant_count').val(0);
    $('#less_adult').attr("disabled","disabled");
    $('#less_children').attr("disabled","disabled");
    $('#less_infant').attr("disabled","disabled");
    $(this).parents('.guest_drop').removeClass("guestselected");
    $('#guest_button span').text('Select Guests');
    return;
  }else{
    event.preventDefault();
    window.location.href="stagging-list?location="+location+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count;
  }
})

$(document).on("click", "#viewall", function(event){
  var location=$('#city').val();
  var first_date=$('#first_date').val();
  var second_date=$('#second_date').val();
  let adult_count=$('#adult_count').val();
  let children_count=$('#children_count').val();
  let infant_count=$('#infant_count').val();
  event.preventDefault();
  window.location.href="stagging-list?location="+location+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count;
});

$(document).on("click", ".mpop", function(event){
  var location=$(this).attr('value');
  var first_date="";
  var second_date="";
  let adult_count=0;
  let children_count=0;
  let infant_count=0;
  event.preventDefault();
  window.location.href="stagging-list?location="+location+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count;
});

$(document).on("click", ".pop_image", function(event){
  var location=$(this).attr('value');
  var first_date=$('#first_date').val();
  var second_date=$('#second_date').val();
  let adult_count=$('#adult_count').val();
  let children_count=$('#children_count').val();
  let infant_count=$('#infant_count').val();
  var guest_text=$('#guest_button span').text();
  event.preventDefault();
  window.location.href="stagging-list?location="+location+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count+"&guest_text="+guest_text;
});

$(document).on("click", ".newlink", function(event){
 var host_id=window.btoa($(this).attr('value'));
 var first_date=$('#first_date').val();
 var second_date=$('#second_date').val();
 var adult_count=$('#adult_count').val();
 var children_count=$('#children_count').val();
 var infant_count=$('#infant_count').val();
 event.preventDefault();
 window.open("getproperty-detail?host_id="+host_id+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count,'_blank');
});



function ALlscript(){
 $('section.stay .place_mainslider').owlCarousel({
  loop: $('section.stay .place_mainslider .item').size() >= 1 ? true:false,
  dragEndSpeed: false,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  autoWidth:true,
  responsive: {
    0: {
      stagePadding: 10,
      margin: 10,
      items: 1,
      loop: false,
    },
    768: {
      stagePadding: 20,
      margin: 10,
      items: 2
    },
    1024: {
      stagePadding: 50,
      margin: 20,
      items: 2
    },
    1226: {
      stagePadding: 60,
      margin: 20,
      items: 4
    }
  }
});
 $('section.toprated .place_mainslider').owlCarousel({
  loop:$('section.toprated .place_mainslider').find('.item').size() > 1 ? true:false,
  dragEndSpeed: false,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  autoWidth:true,
  responsive: {
    0: {
      stagePadding: 20,
      margin: 10,
      items: 1,
      loop:false
    },
    768: {
      stagePadding: 20,
      margin: 10,
      items: 2
    },
    1024: {
      stagePadding: 50,
      margin: 20,
      items: 2
    },
    1226: {
      stagePadding: 60,
      margin: 20,
      items: 4
    }
  }
});
 $('.profileplace_mainslider').owlCarousel({
  loop: $('.profileplace_mainslider .item').size() >= 1 ? true:false,
  dragEndSpeed: false,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: false,
  responsive: {
    0: {
      stagePadding: 20,
      margin: 10,
      items: 1,
      loop:false
    },
    768: {
      stagePadding: 20,
      margin: 10,
      items: 2
    },
    1024: {
      stagePadding: 50,
      margin: 20,
      items: 2
    },
    1226: {
      stagePadding: 50,
      margin: 20,
      items: 4
    } 
  }
});
 $('#mostpopularslider,.mostpopularslider').owlCarousel({
  loop: $('#mostpopularslide .item,.mostpopularslider .item').size() > 1 ? true:false,
  autoplayTimeout:5000,
  margin: 0,
  items: 1,
  nav: false,
  dots: true,
  touchDrag: false,
  mouseDrag: false,
  autoplay: true
});
 $(".bootstrapcarousel").carousel();
 $(".carousel-indicators li").click(function(){
  $(this).parents('.bootstrapcarousel').filter(".carousel").carousel(parseInt($(this).attr('data-slide-to')));
});
 $(".bootstrapcarousel a.left").on('click',function(){
  $(this).parents('.bootstrapcarousel').filter(".carousel").carousel("prev");
});
 $(".bootstrapcarousel a.right").on('click',function(){
  $(this).parents('.bootstrapcarousel').filter(".carousel").carousel("next");
}); 

}



function current_location(){
 var geocoder;
 if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(successFunction1, errorFunction1);
} 

//Get the latitude and the longitude;
function successFunction1(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  codeLatLng(lat, lng)
}
//===============error ffunction==============//
function errorFunction1(){
  console.log("Geocoder failed");
}
geocoder = new google.maps.Geocoder();

//==========code lat lng==============//
function codeLatLng(lat, lng) {
  var latlng = new google.maps.LatLng(lat, lng);
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    $('#location').val('');
    $('#city').val('');
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        var city = null,state=null,country=null;
        for (var i=0; i<results[0].address_components.length; i++) {
          for (var b=0;b<results[0].address_components[i].types.length;b++) {
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
        $('#location').val(city+', '+state); 
//$('#city').val(city);
$("#location_city").val(city);
} else {
  console.log("No results found");
}
} else {
  console.log("Geocoder failed due to: " + status);
}
});
}
}

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
