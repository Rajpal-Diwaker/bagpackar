<style type="text/css">
  .grecaptcha-badge {
display: none;
}
 .resendtext{   
    border: 0;
    background: transparent;
    padding: 0;
    font-weight:700;
  }
</style>
<div id="another_wrapper">
   <div class="setting_wr">
      <div class="setting_sidebar">
         <span class="sidebarheading">Settings</span>
         <ul class="nav">
            <li class="active"><a data-toggle="tab" href="#account">Account Details</a></li>
            <li><a data-toggle="tab" href="#help">Help & Support</a></li>
            <li><a data-toggle="tab" class="reset" href="#reset">Reset Password</a></li>
         </ul>
      </div>
      <div class="setting_content">
         <div class="tab-content">
            <div id="account" class="tab-pane fade in active">
               <form id="edit_form" method="post">
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $data['user_id'];?>">
                  <input type="hidden" name="old_image" value="<?php echo $data['user_image'];?>">
                  <div class="settingpimgwr">
                     <div class="setting_imgdiv">
                        <div class="setting_img">
                           <?php if(!empty($data['user_image'])){ ?>
                              <img id="profileimg" src="<?php echo $data['user_image'];?>" alt="">
                           <?php }else{ ?>
                            <div class="profileifnotImage"><?php echo ucfirst($data['name'][0]);?>  
                         </div>
                         <img id="profileimg" src="" alt="">
                      <?php } ?> 
                   </div>
                   <i class="fa fa-camera" id="profileuploadicon" aria-hidden="true"></i>
                </div>
                <span> Change Profile Image </span>
                <input id="profile_img_Upload" type="file" class="hidden-lg hidden-md hidden-sm hidden-xs"
                placeholder="Photo" required="" capture>
             </div>
             <div class="input_field">
               <div class="form_group">
                  <input type="text" name="name" id="name" value="<?php echo $data['name'];?>" class="form-control"  placeholder="Full Name">
                  <span id="name_error" class="form_error"></span>
               </div>
               <div class="form_group countrypickern">
                  <div class="countrycodephone">
                     <div class="phone_number_code_select countrycode">
                        <input id="country_code" type="tel" class="form-control">
                     </div>
                     <div class="countryphone">
                        <input type="text" name="phone" id="phone" value="<?php echo $data['phone'];?>" class="form-control"  placeholder="Phone No">
                     </div>
                     <span id="phone_error" class="form_error"></span>
                  </div>
               </div>
               <div class="form_group">
                  <input type="text" name="email" id="email" value="<?php echo $data['email'];?>" class="form-control" placeholder="Email-ID">
                  <span id="email_error" class="form_error"></span>
               </div>
               <div class="form_group">
                  <input type="text" class="form-control" id="dob" name="dob" placeholder="Select DOB" autocomplete="off"  value="<?php echo $data['dob'];?>" >
                  <span id="dob_error" class="form_error"></span>
               </div>

            <div class="form_group">
            <p id="govImg" style="color: #131212!important;">Govt Issued ID</p>
			
              <input type="hidden" name="idchange" id="idchange" value="notchange">
            <div class="profileimg_upload">
             <div class="img_ipload <?php if(@$data['government_id1']){echo 'img-uploaddone';} ?>">
                <input type="file" name="govtId[]" onchange="readimg(this);" id="govtid1" accept="image/*"/>
                <input type="hidden" name="govimage[]" value="<?php echo $data['government_id1'];?>">
                <label for="govtid1" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $data['government_id1'];?>" alt="">
                </label>
              </div>


              <div class="img_ipload <?php if(@$data['government_id2']){echo 'img-uploaddone';} ?>">
                <input type="file" name="govtId[]" onchange="readimg(this);" id="govtid2" accept="image/*" />
                <input type="hidden" name="govimage[]" value="<?php echo $data['government_id2'];?>">
                <label for="govtid2" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $data['government_id2'];?>" alt="">
                </label>
              </div>
            </div>
           <div id="govtId-error" class="form_error"></div>
          </div>

               <!-- <div id="recaptcha-container" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
               "data-callback="verifyCaptcha" style="transform:scale(0.8);-webkit-transform:scale(0.8);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
               <input type="hidden" id="reCaptcha">
               <span id="recaptcha_error" class="form_error"></span> -->

            <div id="reCaptcharef">
              <div id="reCaptchaContainer"></div>
            </div>

            </div>
            <div class="input_button">
               <input type="submit" id="update_submit" class="btn_style" value="Save Changes">
            </div>
         </form>
      </div>
      <div id="help" class="tab-pane fade static-page">
            <h1 class="text-center">Help and Support</h1>
            <p><b>Do guests get a refund of the cleaning fee? </b></p>
            <p>The cleaning fee is refunded if the guest cancels before check-in. </p>
            <p><b>Can Guest will get a refund if the listing/stay is not what is mentioned in the picture or not what was expected ? </b></p>
            <p>Bagpackar support team will help guest to find new stays at the nearby location or we will issue a full refund if the listing is not accessible, unsafe or not clean or legit problems with the property that host did not mentioned in the listing. But a refund can’t be issued is the issue is reported after 2 hours to check in time. </p>

            <p><b>What if there is an issue with the property that the host can’t or won’t fix, can the guest get a full refund ? </b> </p>
            <p>Guests need to contact our support team within 4 hours of the stay. In legit cases, guests might get reservations or will try to find new stays in the area. </p>

            <p><b>Can guests get a refund of the cancellation of the booking due to emergency ? </b></p>
            <p>Guests might be able to get a refund in case of emergency before the check in date. But given guests have to provide proof of emergency. </p>

            <p><b>How long does it take to get a refund? </b> </p>
            <p>Refunds usually show up within 15 days but in India it might take upto 2 months. </p>

            <p><b>Can I make changes to my booking ? </b></p>
            <p>For any kind of changes, you will have to cancel the current booking which will impose cancellation charges based on the cancellation policy and you will have to make new bookings. </p>

            <p><b>Can I adjust/bring one or two extra people in my booking if they are not mentioned while booking ? </b> </p>
            <p>Bagpackar is not recommending to add extra people on your trip after the booking since host can reject this request. It completely depend on host if they want to adjust extra people on their listing. </p>

            <p><b>Can I make changes or cancel my booking due to COVID-19? </b></p>
            <p>Any changes you wish to make to your booking is dependent on the policies of your booking. Due to the ongoing impact of COVID-19, certain destinations continue to impose and modify restrictions on travel. Please check to see whether your destination has any travel restrictions prior to booking with Bagpackar. </p>

            <p><b>How to create an account ? </b></p>

            <p>To create your account in Bagpackar, go to Sign up option and fill all the necessary details in the fields. Please make sure you enter all the details correctly including Name, email and phone number since the host can ask for your Gov. ID for verification and confirm booking. </p>

            <p>After completing all the details in your profile’s account page, you can continue browsing for stays and bookings. </p>

            <p><b>How do I change my password ? </b> </p>

            <p>Tip: Your password is case sensitive. So you might be entering your password correctly but some words are case mismatched. </p>

            <p>If you are having trouble login into your Bagpackar’s account, then go forget password in Login Page. You will be able to change your password by entering your email address, you will receive an email from Bagpackar which will include a link to reset the password. </p>

            <p>If you know your current password and want to change it. To do so, login into your account then go to your profile and then click settings. Once you are at your account’s setting, go to “Reset Password” to change your password. </p>

            <p>How do I book a place in Bagpackar and things to know during your stay ? </p>

            <p>You can book the property you like in Bagpackar platform amongst the thousands of properties listed across the country. Based on your preference you can filter the search result on Bagpackar to find the stay you like to visit. </p>

            <h2>Finding your Unique stay:</h2>
            <p>You can look at your preferred stays by entering the location that you want to visit and book a stay. We have covered most of the favorite locations across the country. </p>

            <p>While searching for a stay, please make sure you enter dates and number of guests travelling for your accommodation to get the most precise search results. You can even filter out your search result based on your preference and requirements. </p>

            <h2>Things to check before booking: </h2>

            <p>If you find your preferred stay, then make sure you check reviews, house rules, offered amenities, things to take care, things guests should know and read about the host and about the neighborhood. If you find any discrepancies that could interfere with your happy stay then find a new stay. </p>

            <h2>Booking your stay: </h2>

            <p>Please make sure you check out our cancellation policy before proceeding. Once you find your perfect place, you can make your booking. You will be receiving confirmation email for your booking. </p>

            <h2>Arriving at your stay: </h2>

            <p>Please make sure you carry your ID with you, sometimes the host can ask for your ID to confirm authorization of your bookings. In a country like India, you might be required to submit your government ID to host and ID will be returned during your check out. </p>

            <h2>Guest responsibility during stay: </h2>

            <p>We love you to feel like you are at home miles apart and enjoy being a local. As a guest, you are responsible to keep the accomodation clean or make it less messy. You will be responsible to cover for any damages at the property or physical injuries that are caused by you or by accident during your stay. Bagpackar is not responsible for any damages or injuries that are incurred during your stay. </p>

            <p><b>What is Instant Booking ? </b></p>

            <p>Guests who make last minute booking for their stay, hosts do not get approval requests for their property. Guests can book their property directly. 

               <p><b>What is a Booking request ? </b></p>

               <p>For every booking a Guest makes, the Host/Property owner gets the booking request. Host can either accept or reject your booking. Most of the time the host accepts your booking but in very rare conditions the host may reject your bookings. Your booking is confirmed only when the host accepts your booking. </p>

               <p><b>Why am I being asked to add account details? </b> </p>

               <p>You are required to provide more information about your account details. We can ask following information which are required while hosting a property. </p>

               <p>It is mandatory for all hosts to provide your legal name which appears on a government ID or official document. </p>
               <p>You are required to provide a date of birth for account verification. So it requested for all hosts to add your date of birth correctly while creating the account. </p>
               <p>Also your physical address where you currently live. This is different from your listed property address. </p>
            And also we ask to provide a government ID for identity verification. </p>

            <p><b>How to host a home ? </b> </p>

            <p>If you are looking for hosting your property and making an extra income. You can list your property for free on Bagpackar platform. Bagpackar charges very less service fees as compared to competitors. You can expect more return on your listings through Bagpackar. </p>

            <p>To host a property in Bagpackar, go to “Host a Home” on Bagpackar and fill all the required details to successfully list your property. You are required to fill all the necessary details accurately in order to get your listing approved on Bagpackar. </p>

            <p>Based on the type of property you have for listing, the host needs to make a selection from the property type. </p>

            <p><b>What are the Bagpackar fees ? </b> </p>

            <p>There are no charges for hosts to list their apartment in Bagpackar. Bagpackar charges service fees based on the amount of listing to run Bagpackar as a platform. </p>

      </div>
      <div id="reset" class="tab-pane fade">
         <span class="settingpgheading">Reset your password</span>
         <form id="reset_form" method="post">
            <div class="input_field">
               <div class="form_group">
                  <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password">
                  <span id="old_password_error" class="form_error"></span>
               </div>
               <div class="form_group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                  <span id="password_error" class="form_error"></span>
               </div>
               <div class="form_group">
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm New Password">
                  <span id="confirm_error" class="form_error"></span>
               </div>
            </div>
            <div class="input_button">
               <input type="submit" id="reset_submit" class="btn_style" value="Save Changes">
            </div>
         </div>
      </form>
   </div>
</div>
</div>
</div>
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
 <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<footer>
    <div class="footer_logodiv">
      <div class="footer_logoimg">
        <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
      </div>
      <div class="social_icon">
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="footer_menudiv">
    <div class="footer_menulist">
      <span class="footer_li_heading">Bagpackar</span>
      <a href="<?php echo base_url();?>about-us" target="_blank">About us</a>
      <a href="<?php echo base_url();?>careers" target="_blank">Careers</a>
      <a href="<?php echo base_url();?>faq" target="_blank">FAQ</a>
      <a href="<?php echo base_url();?>terms-condition" target="_blank">Terms & Conditions</a>
      <a href="<?php echo base_url();?>policies" target="_blank">Policies</a>     
      <a href="<?php echo base_url();?>help" target="_blank">Help</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading" target="_blank">Discover</span>
      <a href="<?php echo base_url();?>history" target="_blank">Bagpackar History</a>
      <a href="<?php echo base_url();?>business-travel" target="_blank">Business Travel</a>
      <a href="<?php echo base_url();?>cancel-refund-policy" target="_blank">Cancellation and Refund policy</a>
      <a href="<?php echo base_url();?>covid-19-guidelines" target="_blank">COVID-19 Guidelines</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading" target="_blank">Hosting</span>
      <a href="<?php echo base_url();?>why-host" target="_blank">Why Host</a>
      <a href="<?php echo base_url();?>responsible-hosting" target="_blank">Responsible Hosting</a>
      <a href="<?php echo base_url();?>referral" target="_blank">Referral Program</a>
    </div>
    <div class="footer_menulist">
      <span class="footer_li_heading">Contact</span>
      <a href="mailto:support@bagpackar.in">store@bagpackar.com</a>
      <a href="tel:+1 131 138 138">Hotline: +1 131 138 138</a>
    </div>
  </div>
  </footer>
<div class="footer_stip">
   BAGPACKAR - © 2020. ALL RIGHTS RESERVED.
</div>
<!-- otp -->
<div id="lsfmodal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <div class="lsf_wrapper">
               <div class="lsf_formfield">
                  <div class="logodiv">
                     <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                  </div>
                  <div class="lsf_header">
                     <a href="javascript:void(0);" class="lsfactionbtn" id="otp_back">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                           <path class="a"
                           d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                           transform="translate(-5.625 -6.33)" />
                        </svg>
                        Back 
                     </a>
                     <span class="clearfix"> OTP Verification</span>
                  </div>
                  <form  method="post">
                     <div class="lsf_body">
                        <div class="form-group">
                           <div class="digit-group">
                              <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                              <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                              <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                              <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                              <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                              <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                           </div>
                           <span id="otp_error" class="form_error" ></span>
                        </div>
                        <div class="form-group">
                         <span class="lsline text-left">Didn’t Received the Code? <button id="resend">Resend
                         Now</button></span>
                         <div id="recaptcha-container1" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
                         "data-callback="verifyCaptcha1" style="transform:scale(1.01);-webkit-transform:scale(1.01);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                         <input type="hidden" id="reCaptcha1">
                         <span id="recaptcha_error1" class="form_error"></span> 
                         <div id="time_left" >Time left  <span id="timer"></span></div>  
                      </div>
                   </div>
                   <div class="lst_footer">
                     <div class="form-group">
                        <input type="submit" value="Submit" class="btn_style" id="otp_submit">
                     </div>
                  </div>
               </form>
            </div>
            <div class="otpbgimg lsf_img"></div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- otp end -->
<script>
   $(document).ready(function(){
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });
  });

   $('.reset').on('click',function(){
      var acc_type='<?php echo $data['acc_type'];?>';
      if(acc_type!="normal"){
         alertify.alert("Incase of social login, you can't change the password from Bagpackar.", function() {
            location.reload();
         });
      }
   })

//================check phone no====================//
$('#phone').on('keyup', function () {
   let phone = $(this).val();
   let user_id = $('#user_id').val();
   if(phone != ''){
      $.ajax({
         type:'POST',
         url:'<?php echo base_url()?>Check_email_phone',
         data:{"phone":phone,"user_id":user_id},
         success:function (response) {
            if(response == 1)
            {
              $('#phone_error').text(" Phone number already exists.").show();
              $('#phone').val('');
           }
        }
     });
   }
});

//=============check email======================//

$('#email').on('keyup', function () {
   let email = $(this).val();
   let user_id = $('#user_id').val();
   if(email != ''){
      $.ajax({
         type:'POST',
         url:'<?php echo base_url()?>Check_email_phone',
         data:{"email":email,"user_id":user_id},
         success:function (response) {
            if(response == 1)
            {
              $('#email_error').text("Email already exists.").show();
              $('#email').val('');
           }
        }
     });
   }
});


//===========dob =================//

$("#dob").datepicker({
   changeMonth: true,
   changeYear: true,
   maxDate: '-18y', 
   dateFormat:'dd-mm-yy', 
   onSelect: function(dateText, instance) {
      $('#dob_error').hide();
   }
});

//=========errror hide===============//
$('#country_code').on("countrychange", function() {
   $('#phone_error').hide();
});

$('.digit-group').find('input').each(function () {
   $(this).attr('maxlength', 1);
   $(this).on('keyup', function (e) {
      var parent = $($(this).parent());
      if (e.keyCode === 8 || e.keyCode === 37) {
         var prev = parent.find('input#' + $(this).data('previous'));

         if (prev.length) {
            $(prev).select();
         }
      } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
         var next = parent.find('input#' + $(this).data('next'));

         if (next.length) {
            $(next).select();
         } else {
            if (parent.data('autosubmit')) {
               parent.submit();
            }
         }
      }
   });
});


// window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
// recaptchaVerifier.render();
// var verifyCaptcha = function(response) {
//   $("#reCaptcha").val(response);
// };

// var recaptchaVerifier=window.recaptchaVerifier;
//   firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
//     window.confirmationResult = confirmationResult;

var verifyCaptcha1 = function(response) {
  $("#reCaptcha1").val(response);
};

$(document).on('click', '#profileuploadicon', function () {
   $("#profile_img_Upload").click();
});
function fasterPreview(uploader) {
   $('.profileifnotImage').hide();   
   if (uploader.files && uploader.files[0]) {
      $('#profileimg').attr('src',
         window.URL.createObjectURL(uploader.files[0]));
   }
}
$("#profile_img_Upload").change(function () {  
   fasterPreview(this);
});


<?php if(!empty($data['country_lang_code'])){ ?>
   var flag="<?php echo $data['country_lang_code'];?>";
<?php } else {   
   $guest_country=$this->session->userdata('guest_country');
   if($guest_country=="India"){?>
      var flag="IN";
   <?php }else {?>
      var flag="US";
   <?php } }?>
   var input = document.querySelector("#country_code");
   var iti =window.intlTelInput(input, {
      allowDropdown: true,
      autoPlaceholder: "off",
      initialCountry: flag,
      separateDialCode: true,
      utilsScript: "<?php echo base_url();?>assets/js/utils.js",
   });

   $('#otp_back').on('click',function(){
      timer(0)
      $('#lsfmodal').modal('hide');
   });

   var name_exp =/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
   var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
   var filter = /^[1-9][0-9]*$/;
   var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;

//===========Traveller name=======//
$('#name').on('keyup',function(){
   var name = $("#name").val();
   if (!name_exp.test(name)  && name!=''){ 
      $("#name_error" ).text( "Please enter characters only." ).show(); 
   }else if (name.length >25 ) { 
      $( "#name_error" ).text( "Name should be less than 26 characters." ).show(); 
   }
   else if(name.length<= 0 || name.length <=25 ){
      $("#name_error" ).hide();
   }
});

//=========Email=============//
$('#email').on('keyup',function(){
   var email = $("#email").val();
   if (!email_regex.test(email) && email!=''){ 
      $("#email_error" ).text( "Please enter valid email address." ).show(); 
   }else if(email_regex.test(email) || email.length<= 0){
      $("#email_error" ).hide();
   }
});


//     //=========phone================//

$('#phone').on('keyup',function(){
   var phone = $("#phone").val();
   if (!filter.test(phone)  && phone!=''){ 
      $("#phone_error" ).text( "Please enter valid number." ).show(); 
   }else if (phone.length < 5 && phone.length!=0 ){ 
      $("#phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
   }else if (phone.length >15 ) { 
      $( "#phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
   }else if(phone.length<= 0 || phone.length <=15 ){
      $("#phone_error" ).hide();
   } 
});
$("#update_submit").on('click',function(event){
   var formStatus=true;
   var name = $("#name").val();
   var phone = $("#phone").val();
   var email = $("#email").val();
   var dob = $("#dob").val();

   if(name==""){
      formStatus=false;
      $("#name_error" ).text( "Please enter name." ).show(); 
   }
   else if (!name_exp.test(name)  && name!=''){ 
      formStatus=false;
      $("#name_error" ).text( "Please enter characters only." ).show(); 
   }else if (name.length >25 ) {
      formStatus=false; 
      $( "#name_error" ).text( "Name should be less than 26 characters." ).show(); 
   }
//=====goverment id image=====//
var govtIdImages = [];
        var postgovtIdImages = [];

        $("input[name='govimage[]']").each(function() {
        var val = $(this).val();
        if (val) {
        postgovtIdImages.push(val);
        }
        });
 $("input[name='govtId[]']").each(function() {
        var val = $(this).val();
        if (val) {
        govtIdImages.push(val);
        }
        });
        var totalGovid = govtIdImages.length+postgovtIdImages.length;

        if (totalGovid < 2) 
        {
          verifyMob = 3;
        formStatus = false; 
        $("#govtId-error" ).text( "Please select government id images." ).show().fadeOut( 5000 );
        }

//=========Email=============//
if(email==""){
   formStatus=false;
   $("#email_error" ).text( "Please enter email." ).show(); 
}
else if (!email_regex.test(email) && email!=''){ 
   formStatus=false;
   $("#email_error" ).text( "Please enter valid email address." ).show(); 
}
//==============dob====================//
if(dob==""){
  formStatus=false;
  $("#dob_error" ).text("Please select date of birth." ).show(); 
}

//     //=========phone================//
if(phone==""){
   formStatus=false;
   $("#phone_error" ).text( "Please enter Phone No." ).show(); 
}
else if (!filter.test(phone)  && phone!=''){ 
   formStatus=false;
   $("#phone_error" ).text( "Please enter valid number." ).show(); 
}else if (phone.length < 5 && phone.length!=0 ){ 
   formStatus=false;
   $("#phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
}else if (phone.length >15 ) { 
   formStatus=false;
   $( "#phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
}

// else if( grecaptcha.getResponse() == ""){
//    formStatus=false;
//    $("#recaptcha_error" ).text( "Please verified recaptcha." ).show().fadeOut(4000);
// }

if (formStatus==false) { 
   event.preventDefault(); 
   return false;
}
else if(formStatus==true) {
   $(".loaderCntr").show();   
   event.preventDefault();    
   var number = iti.getNumber();
   var countryData = iti.getSelectedCountryData();
   var code =countryData.dialCode;
   var countrycode='+' + code;
   var country_lang_code=countryData.iso2;
   var count_code ='+'+countryData.dialCode;
   var last_phone="<?php echo $data['phone'];?>";
   var phone=document.getElementById('phone').value;
   var last_country_code="<?php echo $data['country_code'];?>";      
   $.ajax({
      type:'POST',
      url:'<?php echo base_url()?>phone_verification',
      data:{"phone":phone,"code":country_lang_code},
      success:function (data) {
         if(data == 0){
            $(".loaderCntr").hide();   
            $('#phone_error').text('Enter valid number.').show();
            $('#phone').focus();
            return false;
         }else{
            if(phone==last_phone && countrycode==last_country_code){
               var data = new FormData($('#edit_form')[0]);
               data.append("country_code",countrycode);
               data.append("country_lang_code",country_lang_code);
               data.append('image',$('#profile_img_Upload')[0].files[0]);
               $.ajax({
                  url: "<?php echo base_url()?>web/profile_update",
                  type: 'POST',
                  data:data,
                  contentType: false,
                  processData: false,
                  success: function(response){
                     if(response ==1){
                        var notification = alertify.notify('Updated Successfully', 'success', 3, function(){ 
                           console.log('dismissed'); 
                        })
                        setTimeout(function() { 
                           window.location.href = '<?php echo base_url();?>update-profile';
                        }, 300); 
                     }else if(response==0){
                        console.log("error");
                        var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
                        return false; 
                     }

                  }
               });
            }else{
               event.preventDefault();
               var firebase_number=countrycode.toString() + phone.toString();
               send_otp(firebase_number); 
            }
         }
}//phone sucess
});//phone ajax
} //else
});//submit


//======footer script=============================//
function send_otp(phone){
  var phone=phone; 
  var recaptchaVerifier=window.recaptchaVerifier;
  firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log("success");
    $(".loaderCntr").hide();
    var notification = alertify.notify('OTP has been send on your mobile number', 'success', 3, function(){ 
      console.log('dismissed'); 
   });

    $('#reCaptchaContainer').remove();
    $('#reCaptcharef').append('<div id="reCaptchaContainer"></div>');
    window.recaptchaVerifier.clear();
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });

    $('#lsfmodal').modal('show');
    $('#recaptcha-container1').hide();
    disableResend();
    $('#time_left').show();
    timer(60);
 }).catch(function (error) {
    console.log("error",error); 
    $(".loaderCntr").hide();
    var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });

    $('#reCaptchaContainer').remove();
    $('#reCaptcharef').append('<div id="reCaptchaContainer"></div>');
    window.recaptchaVerifier.clear();
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });

    return false; 
 });
}

function send_otp1(phone){
  var phone=phone; 
  var recaptchaVerifier=window.recaptchaVerifier1;
  firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log("success");
    $(".loaderCntr").hide();
    var notification = alertify.notify('OTP has been send on your mobile number', 'success', 3, function(){ 
      console.log('dismissed'); 
   })
    $('#lsfmodal').modal('show');
    $('#recaptcha-container1').hide();
    disableResend();
    $('#time_left').show();
    timer(60);
 }).catch(function (error) {
    console.log("error",error); 
    $(".loaderCntr").hide();
    var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
    return false; 
 });
}

//=====================use for resend otp=========================//
//======disabled resend==================//
function disableResend(){
   $('#resend').attr("disabled","disabled");
   timer(60);
   setTimeout(function() {
      $('#resend').removeAttr('disabled'); 
      $('#recaptcha-container1').show();
      window.recaptchaVerifier1=new firebase.auth.RecaptchaVerifier('recaptcha-container1');
      recaptchaVerifier1.render(); 
   }, 60000);
}
//============timer===================//
var timerOn = true;
var netimer;
function timer(remaining) {
   if(remaining==0){
      clearTimeout(netimer);
      netimer = null;
   }  
   var m = Math.floor(remaining / 60);
   var s = remaining % 60;
   m = m < 10 ? '0' + m : m;
   s = s < 10 ? '0' + s : s;
   document.getElementById('timer').innerHTML = m + ':' + s;
   remaining -= 1;
   if(remaining>= 0 && timerOn) {
    netimer=setTimeout(function() {
      timer(remaining);
   }, 1000);
    return;
 }else{

 }
 if(!timerOn){
    return;
 }
 $('#time_left').hide();
}

//===============end timer=================//
$('#resend').on('click',function(){
   if(grecaptcha.getResponse(1)== ""){
      $("#recaptcha_error1" ).text("Please verify captcha.").show().fadeOut(4000);
      return false;
   }  
   $('#time_left').show(); 
   disableResend();
   timer(60);  
   $(".loaderCntr").show();
   var number = iti.getNumber();
   var countryData = iti.getSelectedCountryData();
   var code =countryData.dialCode;
   var countrycode='+' + code;
   var phone=document.getElementById('phone').value;
   var firebase_number=countrycode.toString() + phone.toString();
   send_otp1(firebase_number); 
});

//===========footer script====================//
$('#digit-1, #digit-2, #digit-3, #digit-4, #digit-5,#digit-6').on('keyup',function(){
   $("#otp_error" ).hide();
})

$("#otp_submit").on('click',function(event){
   event.preventDefault();
   var filter1 = /^[0-9]*$/; 
   var formStatus1=true; 
   var digit1=$('#digit-1').val();
   var digit2=$('#digit-2').val();
   var digit3=$('#digit-3').val();
   var digit4=$('#digit-4').val();
   var digit5=$('#digit-5').val();
   var digit6=$('#digit-6').val();
   if(digit1=="" || digit2=="" || digit3=="" ||  digit4=="" || digit5=="" || digit6==""){
      $('#otp_error').text("Please enter valid otp").show();
      return false;
   }else if (!filter1.test(digit1)  || !filter1.test(digit2) || !filter1.test(digit3) || !filter1.test(digit4) || !filter1.test(digit5) || !filter1.test(digit6) ){
      $("#otp_error").text( "Please enter only number." ).show();
      return false;
   }
   else {
      $(".loaderCntr").show();
      var enter_otp=digit1.toString() + digit2.toString() + digit3.toString() + digit4.toString() + digit5.toString() + digit6.toString();
      console.log("enter_otp",enter_otp);
      console.log("confirmationResult",confirmationResult);
      confirmationResult.confirm(enter_otp).then(function (result) {
         console.log("success",result);
         var number1 = iti.getNumber();
         var countryData1 = iti.getSelectedCountryData();
         var code1 =countryData1.dialCode;
         var countrycode1='+' + code1;
         var country_lang_code1=countryData1.iso2;
         var form_data = new FormData($('#edit_form')[0]);
         form_data.append("country_code",countrycode1);
         form_data.append("country_lang_code",country_lang_code1);
         form_data.append('image',$('#profile_img_Upload')[0].files[0]);
         $.ajax({
            url: "<?php echo base_url()?>web/profile_update",
            type: 'POST',
            data:form_data,
            contentType: false,
            processData: false,
            success: function(response){
               if(response ==1){
                  $('#lsfmodal').modal('show');
                  var notification = alertify.notify('Updated Successfully', 'success', 3, function(){ 
                     console.log('dismissed'); 
                  })
                  setTimeout(function() { 
                     window.location.href = '<?php echo base_url();?>update-profile';
                  }, 300); 
                  $(".loaderCntr").hide();
               }else if(response==0){
                  console.log("error");
                  var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
                  return false; 
               }

            }
         });

      }).catch(function (error) {
         $(".loaderCntr").hide();
         console.log("error");
         var notification = alertify.notify('Invalid OTP!', 'error', 3, function(){  console.log('dismissed'); });
         return false; 
      });

   }
});
//==========reset script====================//

var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;

$('#old_password').on('keyup',function(){
   var old_password = $("#old_password").val();
   if (!regExp.test(old_password)  && old_password!=''){ 
      $("#old_password_error" ).text( "Password should contain Upper case, Lower case and a Number." ).show(); 
   }
   else if (old_password.length < 6 ) { 
      $( "#old_password_error" ).text( "Old Password should be at least 6 characters." ).show(); 
   }
   else if (old_password.length >10 ) { 
      $( "#old_password_error" ).text( "Old Password should be less than 11 characters." ).show(); 
   }
   else if(old_password.length<= 0 || old_password.length >=6 || password.length <=8  ){
      $("#old_password_error" ).hide();
   }
});

$('#password').on('keyup',function(){
   var password = $("#password").val();
   if (!regExp.test(password)  && password!=''){ 
      $("#password_error" ).text( "Password should contain Upper case, Lower case and a Number." ).show(); 
   }
   else if (password.length < 6 ) { 
      $( "#password_error" ).text( "Password should be at least 6 characters." ).show(); 
   }
   else if (password.length >10 ) { 
      $( "#password_error" ).text( "Password should be less than 11 characters." ).show(); 
   }
   else if(password.length<= 0 || password.length >=6 || password.length <=8  ){
      $("#password_error" ).hide();
   }
});


$('#confirm_password').on('keyup',function(){
   var confirm_password = $("#confirm_password").val();
   var password = $("#password").val();
   if (password !=confirm_password) 
   { 
      $("#confirm_error" ).text( "Password and Confirm password not match!." ).show(); 
   }
   else if(confirm_password.length<= 0 || password.length == confirm_password.length  ){
      $("#confirm_error" ).hide();
   }
}); 

$("#reset_submit").on('click',function(event){
   var formStatus=true;
   var old_password = $("#old_password").val();
   var password = $("#password").val();
   var confirm_password = $("#confirm_password").val();

   if(old_password==""){
      formStatus=false;
      $("#old_password_error" ).text( "Please enter Old password." ).show(); 
   }
   else if (!regExp.test(old_password)  && old_password!=''){ 
      formStatus=false;
      $("#old_password_error" ).text( "Old Password should contain Upper case, Lower case and a Number." ).show(); 
   }
   else if (old_password.length < 6 ) { 
      formStatus=false;
      $( "#old_password_error" ).text( "Old Password should be at least 6 characters." ).show(); 
   }
   else if (old_password.length >10 ) { 
      formStatus=false;
      $( "#old_password_error" ).text( "Old Password should be less than 11 characters." ).show(); 
   }

//===========Traveller password=======//
if(password==""){
   formStatus=false;
   $("#password_error" ).text( "Please enter password." ).show(); 
}
else if (!regExp.test(password)  && password!=''){ 
   formStatus=false;
   $("#password_error" ).text( "Password should contain Upper case, Lower case and a Number." ).show(); 
}
else if (password.length < 6 ) { 
   formStatus=false;
   $( "#password_error" ).text( "Password should be at least 6 characters." ).show(); 
}
else if (password.length >10 ) { 
   formStatus=false;
   $( "#password_error" ).text( "Password should be less than 11 characters." ).show(); 
}

if(confirm_password==""){
   formStatus=false;
   $("#confirm_error" ).text( "Please enter confirm password." ).show(); 
}else if (password !=confirm_password) 
{ 
   formStatus=false;
   $("#confirm_error" ).text( "Password and Confirm password not match!." ).show(); 
}
if (formStatus==false) { 
   event.preventDefault(); 
   return false;
}
else{
   var resetdata=[];
   var resetdata=$("#reset_form").serializeArray();
   $(".loaderCntr").show();
   $.ajax({
      url: "<?php echo base_url()?>web/web_reset_password",
      type: 'POST',
      data:resetdata,
      success: function(response){
         if(response ==1){
            var notification = alertify.notify('Password Changed Successfully', 'success', 4, function(){ 
               console.log('dismissed'); 
            })
            setTimeout(function() { 
               window.location.href = '<?php echo base_url();?>update-profile';
            }, 500); 
         }
         if(response==2){
            $(".loaderCntr").hide();
            var notification = alertify.notify("Old Password doesn't match!", 'error', 5, function(){  console.log('dismissed'); });
            return false; 
         }
         if(response==0){
            $(".loaderCntr").hide();
            var notification = alertify.notify('Something went wrong!', 'error', 5, function(){  console.log('dismissed'); });
            return false; 
         }

      }

   });
   return false;
} 

});  

  function readimg(input) {
    var name = input.files[0].name;
    $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
    $(input).parents('.img_ipload').find('label.uploadimgdiv img').show();
 $(input).parents('.img_ipload').addClass('img-uploaddone');	
  }
</script>
<link rel="manifest" href="<?php echo base_url();?>WebPushNotifications/manifest.json">
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script>
<script src="<?php echo base_url();?>WebPushNotifications/script.js"></script>