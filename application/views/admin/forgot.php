<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" href="<?php echo base_url()?>admin_assets/images/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/alertify.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/media.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/bootstrap.css">
    <script src="<?php echo base_url();?>admin_assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>admin_assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin_assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>admin_assets/js/alertify.js"></script>
</head>
<body>
<div class="backslidemenu"></div>
  <div class="loaderCntr" style="display: none;">
    <div class="lds-hourglass"></div>
  </div>
<div id="wrapper">
<div class="login_wrap">
<div class="login_bx">
<div class="login_card">
<div class="logo_wrap">
<img src="<?php echo base_url();?>admin_assets/images/bagpackar_logo.png" alt="">
</div>
<div class="login_cont">
 <form id="forgotform" name="forgotform" action="" method="post">
    <label for="">Enter Your Registered Email</label>
    <input type="text" placeholder="Email" name="email" id="email" autocomplete="off">
    <span id="email_error" style="color: red;font-weight: bold;margin-right: 170px;font-size: 16px;"></span>
     <div class="btn_large_email">
    <button type="submit" id="submit">Forgot</button>
</div>
 </form>
  <a href="<?php echo base_url();?>admin/login"><h2>Login</h2></a>
 </div>
</div>
</div>
</div>
</div>
 <script>
 var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    //========Email=============//
   $('#email').on('keyup',function(){
      //formStatus=true;
        var email = $("#email").val();
        if (!email_regex.test(email) && email!=''){ 
        $("#email_error" ).text( "Please enter valid email." ).show(); 
       }
       else if(email_regex.test(email) || email.length<= 0){
       $("#email_error" ).hide();
       }
     });


$('#submit').click(function(event){
var formStatus=true;
var email=$('#email').val();
//===========Email=================//

      if(email==''){
      formStatus=false;
       $('#email_error').text("Please enter email address").show();
     }

      else if (!email_regex.test(email) && email!='') 
      { 
        formStatus = false; 
        $("#email_error" ).text( "Please enter valid email." ).show(); 
       }
      
if (formStatus==false) 
{ 
event.preventDefault(); 
return false;

} 
else if (formStatus == true) {
   $(".loaderCntr").show(); 
   event.preventDefault(); 
          $.ajax({
            url: "<?php echo base_url()?>admin/Login/forgot_process",
            type: 'POST',
            data:$("#forgotform").serialize(),
             success: function(response)
        {
          if(response ==1){
            var notification = alertify.notify('A Password Reset Link has been sent to your registered email address', 'success', 4, function(){ 
               console.log('dismissed'); 
           })
            setTimeout(function() { 
               window.location.href = '<?php echo base_url();?>admin/login';
           }, 1000);              }
            if(response==0){
                $(".loaderCntr").hide();
                var notification = alertify.notify("Email-ID doesn't exits!", 'error', 5, function(){  console.log('dismissed');
            });
                return false; 
            }

        }
          });
        }

});
</script>
</body>