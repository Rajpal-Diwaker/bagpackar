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
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <script src="<?php echo base_url();?>assets/js/alertify.js"></script>
</head>
<body>
<div class="loaderCntr" style="display: none;">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
 <div id="lsfmodal" class="modal fade forgotopen" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <!--login popup start here-->
        <div class="lsf_wrapper forgotwr">
          <div class="lsf_formfield">
            <div class="logodiv">
              <a href="<?php echo base_url();?>">
              <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
            </a>
            </div>
            <div class="lsf_header">
              <a href="<?php echo base_url();?>login" class="lsfactionbtn" data-text="backtosingup">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
                  <path class="a"
                  d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                  transform="translate(-5.625 -6.33)" /></svg>
                Back </a>
                <span class="clearfix"> Forgot Password</span>
                <p>Enter your registered Email ID</p>
              </div>
              <form id="forgot_form">
                <div class="lsf_body">
                  <div class="form-group">
                    <input type="text" class="lsfinput_field" name="forgot_email" id="forgot_email" placeholder="E-mail ID" >
                    <span id="forgot_email_error" class="form_error"></span>
                  </div>
                  <div class="form-group">
                    <span class="lsfnote">*A link to reset password will be sent to the provided email id</span>
                  </div>
                </div>
                <div class="lst_footer">
                  <div class="form-group">
                    <a href="javascript:void(0)" class="btn_style">Submit</a>
                  </form>
                  <!-- <input type="submit" value="Submit" class="btn_style" data-text="otpopen"> -->
                </div>
              </div>
            </div>
            <div class="forgotbgimg lsf_img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
  <script type="text/javascript">
   $(document).ready(function() { 
     $('#lsfmodal').modal('show')
   });

  var name_exp =/^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/;
var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var filter = /^[1-9][0-9]*$/;
var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/; 
   $('#forgot_email').on('keyup',function(){
    var forgot_email = $("#forgot_email").val();
    if (!email_regex.test(forgot_email) && forgot_email!=''){
      $("#forgot_email_error" ).text( "Please enter valid email address." ).show(); 
    }else if(email_regex.test(forgot_email) || forgot_email.length<= 0){
     $("#forgot_email_error" ).hide();
   }
 });

   $("#forgot_form").on('click',function(event){
    var formStatus=true;
    var forgot_email = $("#forgot_email").val();

    //=========forgot_email=============//
    if(forgot_email==""){
      formStatus=false;
      $("#forgot_email_error" ).text( "Please enter email." ).show(); 
    }
    else if (!email_regex.test(forgot_email) && forgot_email!=''){ 
      formStatus=false;
      $("#forgot_email_error" ).text( "Please enter valid email address." ).show(); 
    }

    if (formStatus==false) { 
      event.preventDefault(); 
      return false;
    }
    else if(formStatus==true) { 
      var data=[];
      var data=$("#forgot_form").serializeArray();
      $(".loaderCntr").show();
      $.ajax({
        url: "<?php echo base_url()?>web/Traveller/forgot_process",
        type: 'POST',
        data:data,
        success: function(response)
        {
          if(response ==1)
          {
            var notification = alertify.notify('Link has been successfully send', 3, function(){ 
             console.log('dismissed'); 
           })
            $('#forgot_email').val('');
            $(".loaderCntr").hide();
            setTimeout(function() { 
             window.location.href = '<?php echo base_url();?>login';
           }, 100); 
            }
            if(response==0){
              $(".loaderCntr").hide();
              var notification = alertify.notify("Email doesn't exist!",'error', 3, function(){  console.log('dismissed'); });
              return false; 
            }

          }
          
        });
      return false;
    }    
  });
</script>              