<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reset Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css">
  <link rel="shortcut icon" href="<?php echo base_url()?>admin_assets/images/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/alertify.css">
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/media.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/bootstrap.css">
  <script src="<?php echo base_url();?>admin_assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/materialize.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/custom.js"></script>
  <script src="<?php echo base_url();?>admin_assets/js/validate.js"></script>
  <script src="<?php echo base_url()?>admin_assets/js/alertify.js"></script>
  <style type="text/css">
   label.errors{
    color: red;
    left: 52px;
    margin-top: -2px;
  } 
</style>
</head>
<body>
  <div id="wrapper">
    <div class="login_wrap">
      <div class="login_bx">
        <div class="login_card">
          <div class="logo_wrap">
            <img src="<?php echo base_url();?>admin_assets/images/bagpackar_logo.png" alt="">
          </div>
          <div class="login_cont">
            <h2><b>Reset Password</b></h2>
            <form id="resetform" name="resetform" action="<?php echo base_url();?>admin/Admin_forgot/reset_process" method="post">
              <input type="hidden" name="email" value="<?php echo $data;?>">
              <label for="password">New Password</label>
              <input type="password" placeholder="New Password" name="password" id="password" autocomplete="off">

              <label for="password_confirm">Confirm Password</label>
              <input type="password" placeholder="Confirm password" id="password_confirm" name="password_confirm" autocomplete="off">
            </div>
            <div class=" btn_large_email">
             <button type="submit" id="submit" class="btn btn-next">SUBMIT</button>
           </div>
         </div>
       </form>


     </div>

   </div>
   <!--Change Password Section End Here-->
 </div>

</body>

</html>
<script>
  $(function()
  {
    $("#resetform").validate({
      errorClass: 'errors',
      rules: {
        password: {
          required: true,
          minlength:6,
          maxlength: 10
        },

        password_confirm: {
          required:true,
          equalTo: "#password"

        }
      },
      messages: {
        password: { 
          required: " Enter New Password",
          minlength: "Password must be at least 6 character.",
          maxlength: "Password should not exceed 10 character."

        },
        password_confirm:{

          required: 'Enter Confirm Password',
          equalTo: "Password and confirm password does not match."
        },
      },
    });
  });
</script>