<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport"
  content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
   <link href="<?php echo base_url();?>assets/css/alertify.min.css
" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/intlTelInput.css" rel="stylesheet" type="text/css">
     <script src="<?php echo base_url();?>assets/js/alertify.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
 <link rel="manifest" href="<?php echo base_url();?>WebPushNotifications/manifest.json">
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script>
<script src="<?php echo base_url();?>WebPushNotifications/script.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>

</head>
<body>
  <div class="loaderCntr" style="display: none;">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
  <div id="lsfmodal" class="modal fade signupopen in" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="lsf_wrapper singupwr">
            <div class="lsf_formfield">
              <div class="logodiv">
                 <a href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
              </a>
              </div>
              <div class="lsf_header">
                <a href="<?php echo base_url();?>login" class="lsfactionbtn" data-text="backtologin">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                    <path class="a"
                    d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                    transform="translate(-5.625 -6.33)" /></svg>
                  Back to login</a>
                  <span class="clearfix"> Signup</span>
                </div>
                <form id="traveller_form" method="post">
                  <div class="lsf_body">
                    <div class="form-group">
                      <input type="text" class="lsfinput_field" name="traveller_name" id="traveller_name" placeholder="Full Name" style = "text-transform:capitalize;">
                      <span id="traveller_name_error" class="form_error"></span>
                    </div>
                    <div class="form-group">
                      <input type="text" class="lsfinput_field" name="traveller_email" id="traveller_email" placeholder="E-mail ID" autocomplete="off">
                      <span id="traveller_email_error" class="form_error"></span>
                    </div>
                    <div class="form-group countrypickern">
                      <div class="countrycodephone">
                        <div class="phone_number_code_select countrycode">
                          <input id="country_code" type="tel" class="form-control">
                        </div>
                        <div class="countryphone">
                          <input type="text" class="lsfinput_field" name="traveller_phone" id="traveller_phone" placeholder="Phone No.">
                        </div>
                      </div>
                      <span id="traveller_phone_error" class="form_error"></span>
                    </div>
                    <div class="form-group">
                      <div class="passwordfiled">
                      <input type="password" class="lsfinput_field passwordinput" id="traveller_password" name="traveller_password"
                      placeholder="Password" autocomplete="off">
                      <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>
                    </div>
                     <span id="traveller_password_error" class="form_error"></span>
                    </div>
                    <input type="hidden" name="device_token" id="device_token">
                    <div class="form-group">
                      <div class="passwordfiled">
                      <input type="password" class="lsfinput_field passwordinput" id="traveller_confirm_password"
                      placeholder="Confirm Password" autocomplete="off">
                      <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>
                    </div>
                     <span id="traveller_confirm_error" class="form_error"></span>
                    </div>
                  </div>
                  <div id="recaptcha-container" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
                  "data-callback="verifyCaptcha" style="transform:scale(0.95);-webkit-transform:scale(0.95);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                  <span id="recaptcha_error" class="form_error"></span>
                  <div class="lst_footer">
                    <div class="form-group">
                      <input type="submit" value="Register" class="btn_style" id="traveller_submit">
                    </div>
                  </form>
                  <span class="lsline text-center">By signing in or creating an account you agree to our <a
                    href="javascript:void(0)">Terms of Use</a> and our <a href="javascript:void(0)"> Privacy
                    Policy</a></span>
                  </div>
                </div>
                <div class="singupbgimg lsf_img">
                </div>
              </div>
          
        <!-- otp popup -->
               <div class="lsf_wrapper otpwr" id="otp_popup">
                      <div class="lsf_formfield">
                        <div class="logodiv">
                          <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
                        </div>
                        <div class="lsf_header">
                          <a href="javascript:void(0);" class="lsfactionbtn" data-text="backtosingup">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                              <path class="a"
                              d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                              transform="translate(-5.625 -6.33)" /></svg>
                            Back </a>
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
                            <span class="lsline text-center">Didn’t Received the Code? <a href="javascript:void(0)" id="resend">Resend
                            Now</a></span>
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
        <!-- otp popup end -->
      </body>
      </html>
      <script type="text/javascript">
       $(document).ready(function() { 
$('#lsfmodal').modal('show');
window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
recaptchaVerifier.render();
}); 
//=======country js===========//
var input = document.querySelector("#country_code");
var iti =window.intlTelInput(input, {
 allowDropdown: true,
 autoPlaceholder: "off",
 initialCountry: "US",
 separateDialCode: true,
 utilsScript: "<?php echo base_url();?>assets/js/utils.js",
});

$('i.toggle-password').on('click', function () {
$(this).toggleClass("fa-eye fa-eye-slash");
if ($(this).parents('.passwordfiled').find("input.passwordinput").attr("type") === "password") {
$(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "text");
} else {
$(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "password");
}
});

// otp verfication start here
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
  // otp verfication end here

//======Email================//
$('#traveller_email').on('keyup', function () {
  var traveller_email = $('#traveller_email').val();
  if(traveller_email != ''){
    $.ajax({
      type:'POST',
      url:'<?php echo base_url()?>web/Traveller/checkEmailExist1',
      data:{"email":traveller_email},
      success:function (data) {
        if(data == 1){
          $('#traveller_email_error').text('Email already exists.').show();
          $('#traveller_email').val('');
        }
      }
    });
  }
});

$('#traveller_phone').on('keyup', function () {
  var traveller_phone = $(this).val();
  if(traveller_phone != ''){
    $.ajax({
      type:'POST',

      url:'<?php echo base_url()?>web/Traveller/checkEmailExist1',
      data:{"phone":traveller_phone},
      success:function (response) {
        if(response == 1)
        {
          $('#traveller_phone_error').text(" Phone number already exists.").show();
          $('#traveller_phone').val('');
        }
      }
    });
  }
});

var name_exp =/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var filter = /^[1-9][0-9]*$/;
var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;


 //===========Traveller name=======//
 $('#traveller_name').on('keyup',function(){
   var traveller_name = $("#traveller_name").val();
   if (!name_exp.test(traveller_name)  && traveller_name!=''){ 
    $("#traveller_name_error" ).text( "Please enter characters only." ).show(); 
  }else if (traveller_name.length >25 ) { 
    $( "#traveller_name_error" ).text( "Name should be less than 26 characters." ).show(); 
  }
  else if(traveller_name.length<= 0 || traveller_name.length <=25 ){
   $("#traveller_name_error" ).hide();
 }
});

    //=========Email=============//
    $('#traveller_email').on('keyup',function(){
      var traveller_email = $("#traveller_email").val();
      if (!email_regex.test(traveller_email) && traveller_email!=''){ 
        $("#traveller_email_error" ).text( "Please enter valid email address." ).show(); 
      }else if(email_regex.test(traveller_email) || traveller_email.length<= 0){
       $("#traveller_email_error" ).hide();
     }
   });


//     //=========traveller_phone================//

$('#traveller_phone').on('keyup',function(){
  var traveller_phone = $("#traveller_phone").val();
  if (!filter.test(traveller_phone)  && traveller_phone!=''){ 
    $("#traveller_phone_error" ).text( "Please enter valid number." ).show(); 
  }else if (traveller_phone.length < 5 && traveller_phone.length!=0 ){ 
    $("#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
  }else if (traveller_phone.length >15 ) { 
    $( "#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
  }else if(traveller_phone.length<= 0 || traveller_phone.length <=15 ){
   $("#traveller_phone_error" ).hide();

 } 
});


 //===========Traveller password=======//
 $('#traveller_password').on('keyup',function(){
  var traveller_password = $("#traveller_password").val();
  if (!regExp.test(traveller_password)  && traveller_password!=''){ 
    $("#traveller_password_error" ).text( "Password should contain Upper case, Lower case letter." ).show(); 
  }
  else if (traveller_password.length < 6 ) { 
    $( "#traveller_password_error" ).text( "Password should be at least 6 characters." ).show(); 
  }
  else if (traveller_password.length >10 ) { 
    $( "#traveller_password_error" ).text( "Password should be less than 11 characters." ).show(); 
  }
  else if(traveller_password.length<= 0 || traveller_password.length >=6 || traveller_password.length <=8  ){
   $("#traveller_password_error" ).hide();
 }
});


 $('#traveller_confirm_password').on('keyup',function(){
  var traveller_confirm_password = $("#traveller_confirm_password").val();
  var traveller_password = $("#traveller_password").val();
  if (traveller_password !=traveller_confirm_password) 
  { 
    $("#traveller_confirm_error" ).text( "Password and Confirm password not match!." ).show(); 
  }
  else if(traveller_confirm_password.length<= 0 || traveller_password.length == traveller_confirm_password.length  ){
   $("#traveller_confirm_error" ).hide();
 }
});
 $("#traveller_submit").on('click',function(event){
  var formStatus=true;
  var traveller_name = $("#traveller_name").val();
  var traveller_password = $("#traveller_password").val();
  var traveller_phone = $("#traveller_phone").val();
  var traveller_email = $("#traveller_email").val();
  var traveller_confirm_password = $("#traveller_confirm_password").val();

  if(traveller_name==""){
    formStatus=false;
    $("#traveller_name_error" ).text( "Please enter name." ).show(); 
  }
  else if (!name_exp.test(traveller_name)  && traveller_name!=''){ 
    formStatus=false;
    $("#traveller_name_error" ).text( "Please enter characters only." ).show(); 
  }else if (traveller_name.length >25 ) {
   formStatus=false; 
   $( "#traveller_name_error" ).text( "Name should be less than 26 characters." ).show(); 
 }

    //=========Email=============//
    if(traveller_email==""){
      formStatus=false;
      $("#traveller_email_error" ).text( "Please enter email." ).show(); 
    }
    else if (!email_regex.test(traveller_email) && traveller_email!=''){ 
      formStatus=false;
      $("#traveller_email_error" ).text( "Please enter valid email address." ).show(); 
    }

//     //=========traveller_phone================//
if(traveller_phone==""){
  formStatus=false;
  $("#traveller_phone_error" ).text( "Please enter Phone No." ).show(); 
}
else if (!filter.test(traveller_phone)  && traveller_phone!=''){ 
  formStatus=false;
  $("#traveller_phone_error" ).text( "Please enter valid number." ).show(); 
}else if (traveller_phone.length < 5 && traveller_phone.length!=0 ){ 
  formStatus=false;
  $("#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
}else if (traveller_phone.length >15 ) { 
  formStatus=false;
  $( "#traveller_phone_error" ).text( "Phone number should be between 4 to 15 digits." ).show(); 
}



 //===========Traveller password=======//
 if(traveller_password==""){
  formStatus=false;
  $("#traveller_password_error" ).text( "Please enter password." ).show(); 
}
else if (!regExp.test(traveller_password)  && traveller_password!=''){ 
  formStatus=false;
  $("#traveller_password_error" ).text( "Password should contain Upper case, Lower case letter." ).show(); 
}
else if (traveller_password.length < 6 ) { 
  formStatus=false;
  $( "#traveller_password_error" ).text( "Password should be at least 6 characters." ).show(); 
}
else if (traveller_password.length >10 ) { 
  formStatus=false;
  $( "#traveller_password_error" ).text( "Password should be less than 11 characters." ).show(); 
}

if(traveller_confirm_password==""){
  formStatus=false;
  $("#traveller_confirm_error" ).text( "Please enter confirm password." ).show(); 
}else if (traveller_password !=traveller_confirm_password) 
{ 
  formStatus=false;
  $("#traveller_confirm_error" ).text( "Password and Confirm password not match!." ).show(); 
}else if( grecaptcha.getResponse() == ""){
 formStatus=false;
 $("#recaptcha_error" ).text( "Please verified recaptcha." ).show().fadeOut(4000);


}

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
  var traveller_phone=document.getElementById('traveller_phone').value;
  var firebase_number=countrycode.toString() + traveller_phone.toString();
  var recaptchaVerifier=window.recaptchaVerifier;
  console.log("recaptchaVerifier",recaptchaVerifier);
  firebase.auth().signInWithPhoneNumber(firebase_number,window.recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log("success");
    var recaptchaVerifier='';
    $(".loaderCntr").hide();
    var notification = alertify.notify('OTP has been send your mobile no', 'success', 3, function(){ 
      console.log('dismissed'); 
    })
$('#lsfmodal').removeClass('signupopen');
$('#lsfmodal').addClass('otpopen');
  }).catch(function (error) {
   console.log("error",error); 
   $(".loaderCntr").hide();
   var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
   return false; 
 });
} 

});

$("#resend").on('click',function(event){
 // $(".loaderCntr").show();
 alert();
 var number = iti.getNumber();
 var countryData = iti.getSelectedCountryData();
 var code =countryData.dialCode;
 var countrycode='+' + code;
 var traveller_phone=document.getElementById('traveller_phone').value;
 var firebase_number=countrycode.toString() + traveller_phone.toString();
 var recaptchaVerifier1=window.recaptchaVerifier;
 console.log("firebase_number",firebase_number);
 console.log("recaptchaVerifier1",recaptchaVerifier1);
 firebase.auth().signInWithPhoneNumber(firebase_number,recaptchaVerifier1).then (function (confirmationResult1) {
  console.log("shubham");
  window.confirmationResult = confirmationResult1;
  console.log("success");
  $(".loaderCntr").hide();
  var notification = alertify.notify('OTP has been send your mobile no', 'success', 3, function(){ 
    console.log('dismissed'); 
  })
}).catch(function (error) {
 console.log("error"); 
 $(".loaderCntr").hide();
 var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
 return false; 
});
});


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
    var data=[];
    var number = iti.getNumber();
    var countryData = iti.getSelectedCountryData();
    var code =countryData.dialCode;
    var country_lang_code=countryData.iso2;
    var data=$("#traveller_form").serializeArray();
    data.push({name:"country_code",value:code});
    data.push({name:"country_lang_code",value:country_lang_code});
    $.ajax({
      url: "<?php echo base_url()?>web/traveller/traveller_signup",
      type: 'POST',
      data:data,
      success: function(response){
        $(".loaderCntr").hide();
        if(response ==1){
          $('#traveller_submit').attr('disabled',true);
          var notification = alertify.notify('Signup Successfully', 'success', 3, function(){ 
           console.log('dismissed'); 
         })
         setTimeout(function() { 
             window.location.href = '<?php echo base_url();?>';
           }, 1000); 
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
</script>


</html>