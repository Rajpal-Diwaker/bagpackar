<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport"
    content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no;" />
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/media.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>
 <div class="reset_popup">
 <div class="lsf_wrapper">
      <div class="col-md-12 logodiv">
         <img src="<?php echo base_url();?>assets/images/logo.png" alt="">
	  </div>
	  <div class="col-md-12  lsf_header">
            <span class="clearfix"> Reset Password</span>
      </div>
     <form id="reset_form" method="post" action="<?php echo base_url();?>web/Traveller/reset_process">
  <input type="hidden" name="email" value="<?php echo $data;?>">   
	  <div class="col-md-12">
		  <div class="form-group">
			   <input type="password" class="lsfinput_field" placeholder="New Password" id="password" name="password">
         <span id="password_error" class="form_error"></span>
		  </div>
      </div>
	  <div class="col-md-12">
		   <div class="form-group">
			   <input type="password"  class="lsfinput_field" placeholder="Confirm Password" id="confirm_password" name="confirm_password">
          <span id="confirm_error" class="form_error"></span>
		  </div>
      </div>
	  <div class="col-md-12">
	    <div class="lst_footer">
           <div class="form-group">
              <input type="submit" value="Submit" class="btn_style">
           </div>
        </div>
      </div>
    </form>
 </div>
 </div>
</body>
<script type="text/javascript">
var regExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;  
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

$("#reset_form").on('click',function(event){
  var formStatus=true;
  var password = $("#password").val();
  var confirm_password = $("#confirm_password").val();

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
    $(".loaderCntr").show(); 
     } 

  });    



</script>
</html>