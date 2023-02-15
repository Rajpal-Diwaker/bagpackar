<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta name="viewport"
content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fav.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url();?>assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/style.css">
     <link rel="stylesheet" href="<?php echo base_url()?>admin_assets/css/alertify.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/validate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/media.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/bootstrap.css">
    <script src="<?php echo base_url();?>admin_assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>admin_assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>admin_assets/js/custom.js"></script>
     <script src="<?php echo base_url();?>admin_assets/js/validate.js"></script>
      <script src="<?php echo base_url()?>admin_assets/js/alertify.js"></script>
     <style type="text/css">
        label.errors{
        color: red;
        margin-top:-5px; 
     </style>
</head>
<body>
<div class="loaderCntr" style="display: none;">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
    <div id="wrapper">
        <!--Login Section Start Here-->
        <div class="login_wrap">
            <div class="login_bx">
                <div class="login_card">
                    <div class="logo_wrap">
                        <img src="<?php echo base_url();?>admin_assets/images/bagpackar_logo.png" alt="">
            </div>
            <div class=" login_cont">
                <label for="">Login</label>
                              <?php $msg=$this->session->flashdata('msg');?>
                            <h3><?php if(!empty($msg)){ echo $msg;}?></h3>
                      <form id="loginform" name="loginform" action="<?php echo base_url();?>admin/Login/login_process" method="post">
                            <input class="form-contorl" type="text" placeholder="Enter your Email" name="email" id="email">
                            <label for="">Password</label>
                            <input type="password" placeholder="Enter your password"
                             name="password" id="password" autocomplete="off">
                    </div>
                    <div class="btn_large_email">
                        <button>Login</button>
                    </div>
                    </form>
                    <a href="<?php echo base_url();?>admin/forgot"><h2>Forgot Password?</h2></a>

                </div>


            </div>



        </div>

    </div>


    <!--Login Section End Here-->
</body>
 <script>
    $("#loginform").validate({
      errorClass: 'errors',
      rules: {
            email: {
                    required: true,
                    email: true 
                    },
            password:
            { 
              required: true,
              minlength:6,
              maxlength:10
            }
          },
    message: {
              email: {
                       required:"Please fill the email id.",
                       email:"Please enter a valid email address"
                    },
              password:
              {
                  required:"Please fill the password.",
                  minlength: "Password must be at least 6 character.",
                 maxlength: "Password should not exceed 10 character."
              }
        },
      submitHandler: function(form){
      $(".loaderCntr").show();
      var data=[];
      var data=$("#loginform").serializeArray();
      $.ajax({
        url: "<?php echo base_url()?>admin/Login/login_process",
        type: 'POST',
        data:data,
        success: function(response)
        {
          if(response ==1){
            var notification = alertify.notify('Login Successfully', 'success', 3, function(){ 
               console.log('dismissed'); 
           })
            setTimeout(function() { 
               window.location.href = '<?php echo base_url();?>admin/dashboard';
           }, 100);              }
            if(response==0){
                $(".loaderCntr").hide();
                var notification = alertify.notify('Invalid Credentail!', 'error', 5, function(){  console.log('dismissed');
            });
                return false; 
            }

        }

    });

    }        

    });

</script>
</html>