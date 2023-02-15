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
  <link href="<?php echo base_url();?>assets/css/alertify.min.css
  " rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/js/alertify.js"></script>
  <link rel="manifest" href="<?php echo base_url();?>WebPushNotifications/manifest.json">
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script>
<script src="<?php echo base_url();?>WebPushNotifications/script.js"></script>
</head>
<body>
  <div class="loaderCntr" style="display: none;">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
<div id="lsfmodal" class="modal fade loginopen" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <!--login popup start here-->
        <div class="lsf_wrapper loginwr">
          <div class="lsf_formfield">
            <div class="logodiv">
              <a href="<?php echo base_url();?>">
              <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
            </a>
            </div>
            <div class="lsf_header">
              <span class="clearfix"> Log in</span>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard </p>
            </div>
            <div class="lsf_body">
              <form id="login_form">
                <div class="form-group">
                  <input type="text" class="lsfinput_field" name="login_email" id="login_email"  placeholder="Email">
                  <span id="login_email_error" class="form_error"></span>
                </div>
                <div class="form-group">
                  <div class="passwordfiled">
                  <input type="password" class="lsfinput_field passwordinput " id="login_password" name="login_password"
                  placeholder="Password" autocomplete="off">

                  <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>
                </div>
                 <span id="login_password_error" class="form_error"></span>
                </div>
                <input type="hidden" name="device_token" id="device_token1">
                <div class="form-group singnforgotdiv">
                  <div class="checkboxdiv">
                    <label for="signed">
                      <input type="checkbox" value="remember-me" id="signed">
                      <span>
                        <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                          <path class="a"
                          d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                          transform="translate(0 -4.577)" /></svg>
                        </span>
                        <span class="checkinfo">
                          Remember Me
                        </span>
                      </label>
                    </div>
                  </form> 
                  <a href="<?php echo base_url();?>forgot" class="aforgot" data-text="forgotpassword">Forgot password?</a>
                </div>
              </div>
              <div class="lst_footer">
                <div class="form-group">
                  <input type="submit" value="Sign in" class="btn_style" id="login_submit">
                </div>
                <div class="form-group fbgogwrapper">
                  <a href="<?php echo $this->facebook->login_url();?>" class="fbbtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.813 16.301">
                      <path class="a"
                      d="M30.558,0,28.444,0a3.712,3.712,0,0,0-3.91,4.012v1.85H22.409a.332.332,0,0,0-.332.333v2.68a.332.332,0,0,0,.332.332h2.125v6.762a.332.332,0,0,0,.332.332H27.64a.332.332,0,0,0,.332-.332V9.206h2.485a.332.332,0,0,0,.332-.332V6.194a.333.333,0,0,0-.333-.333H27.973V4.293c0-.754.18-1.136,1.161-1.136h1.424a.332.332,0,0,0,.332-.332V.336A.332.332,0,0,0,30.558,0Z"
                      transform="translate(-22.077)" /></svg>
                      Facebook
                    </a>
                    <a href="<?php echo base_url();?>google/google_login" class="gogbtn">
                      <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false">
                        <g fill="none" fill-rule="evenodd">
                          <path
                          d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z"
                          fill="#EA4335"></path>
                          <path
                          d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z"
                          fill="#4285F4"></path>
                          <path
                          d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z"
                          fill="#FBBC05"></path>
                          <path
                          d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z"
                          fill="#34A853"></path>
                          <path d="M0 0h18v18H0V0z"></path>
                        </g>
                      </svg>
                      Google
                    </a>
                  </div>
                  <span class="lsline text-center"> Not a member yet? <a href="<?php echo base_url();?>signup"
                    data-text="singup">Sign up</a></span>
                  </div>
                </div>
                <div class="loginbgimg lsf_img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
      </html>
<?php 
$msg=$this->session->flashdata('error');
if(!empty($msg)){ ?>
<script>
  var notification = alertify.notify('Something Went wrong!', 'error', 3, function(){  console.log('dismissed'); });
</script>  
<?php } ?>
      <script type="text/javascript">
       $(document).ready(function() { 
         $('#lsfmodal').modal('show')
       });
       $(function() {

if (localStorage.chkbox && localStorage.chkbox != '') {
    $('#signed').attr('checked', 'checked');
    $('#login_email').val(localStorage.login_email);
    $('#login_password').val(localStorage.login_password);
} else {
    $('#signed').removeAttr('checked');
    $('#login_email').val('');
    $('#login_password').val('');
}

$('#signed').click(function() {
    if ($('#signed').is(':checked')) {
        // save username and password
        localStorage.login_email = $('#login_email').val();
        localStorage.login_password = $('#login_password').val();
        localStorage.chkbox = $('#signed').val();
    } else {
        localStorage.login_email = '';
        localStorage.login_password = '';
        localStorage.chkbox = '';
    }
});
});
$('i.toggle-password').on('click', function () {
$(this).toggleClass("fa-eye fa-eye-slash");
if ($(this).parents('.passwordfiled').find("input.passwordinput").attr("type") === "password") {
$(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "text");
} else {
$(this).parents('.passwordfiled').find("input.passwordinput").attr("type", "password");
}  
});

 //=========Email=============//
 $('#login_email').on('keyup',function(){
  var login_email = $("#login_email").val();
  if (!email_regex.test(login_email) && login_email!=''){ 
    $("#login_email_error" ).text( "Please enter valid email address." ).show(); 
  }else if(email_regex.test(login_email) || login_email.length<= 0){
   $("#login_email_error" ).hide();
 }
});
 var name_exp =/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
 var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
 var filter = /^[1-9][0-9]*$/;
 var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
   //===========Traveller password=======//
   $('#login_password').on('keyup',function(){
    var login_password = $("#login_password").val();
    if (!regExp.test(login_password)  && login_password!=''){ 
      $("#login_password_error" ).text( "Password should contain Upper case, Lower case letter." ).show(); 
    }
    else if (login_password.length < 6 ) { 
      $( "#login_password_error" ).text( "Password should be at least 6 characters." ).show(); 
    }
    else if (login_password.length >10 ) { 
      $( "#login_password_error" ).text( "Password should be less than 11 characters." ).show(); 
    }
    else if(login_password.length<= 0 || login_password.length >=6 || login_password.length <=8  ){
     $("#login_password_error" ).hide();
   }
 }); 

   $("#login_submit").on('click',function(event){
    var formStatus=true;
    var login_email = $("#login_email").val();
    var login_password = $("#login_password").val();
 //===========Traveller password=======//
 if(login_password==""){
  formStatus=false;
  $("#login_password_error" ).text( "Please enter password." ).show(); 
}
else if (!regExp.test(login_password)  && login_password!=''){ 
  formStatus=false;
  $("#login_password_error" ).text( "Password should contain Upper case, Lower case letter." ).show(); 
}
else if (login_password.length < 6 ) { 
  formStatus=false;
  $( "#login_password_error" ).text( "Password should be at least 6 characters." ).show(); 
}
else if (login_password.length >10 ) { 
  formStatus=false;
  $( "#login_password_error" ).text( "Password should be less than 11 characters." ).show(); 
}


    //=========login_email=============//
    if(login_email==""){
      formStatus=false;
      $("#login_email_error" ).text( "Please enter email." ).show(); 
    }
    else if (!email_regex.test(login_email) && login_email!=''){ 
      formStatus=false;
      $("#login_email_error" ).text( "Please enter valid email address." ).show(); 
    }


    if (formStatus==false) { 
      event.preventDefault(); 
      return false;
    }
    else if(formStatus==true) {
      var data=[];
      var data=$("#login_form").serializeArray();
      $(".loaderCntr").show();
      $.ajax({
        url: "<?php echo base_url()?>web/Traveller_login/login_process",
        type: 'POST',
        data:data,
        success: function(response)
        {
          if(response ==1)
          {
            var notification = alertify.notify('Login Successfully', 'success', 4, function(){ 
             console.log('dismissed'); 
           })
            setTimeout(function() { 
             window.location.href = '<?php echo base_url();?>';
           }, 100);              }
            if(response==0){
              $(".loaderCntr").hide();
              var notification = alertify.notify('Invalid Credentail!', 'error', 5, function(){  console.log('dismissed'); });
              return false; 
            }

          }
          
        });
      return false;
    }    
  });

</script>
