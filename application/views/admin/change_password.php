 <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/css/validate.css">
 <script src="<?php echo base_url();?>admin_assets/js/validate.js"></script>
<style type="text/css">
    label.errors1 {
    color: red;
   font-size: 14px;
   display: block;
   font-weight: bold;
   margin-top:0px;
 } 
</style>
<body>
<div class="login_wrap">
<div class="login_bx">
<div class="login_card">
<form id="change_password_form" name="change_password_form">
<div class="login_cont">
<label for="">Old Password</label>
<input type="password" placeholder="Old Password" id="old_password" name="old_password" autocomplete="off">
<label for="">New Password</label>
<input type="password"   placeholder="New Password" id="new_password" name="new_password" autocomplete="off">
<label for="">Confirm Password</label>
<input type="password" placeholder="Confirm password" id="confirm_password" name="confirm_password" autocomplete="off">
</div>
<div class=" btn_large_email">
<button>Submit</button>
</div>
</form>
</div>
</div>
</div>
<script>
  $("#change_password_form").validate({
    errorClass: 'errors1',
    rules: {
     old_password: {
      required: true,
      minlength:6,
      maxlength: 10
    },
    new_password: {
      required: true,
      minlength:6,
      maxlength: 10
    },

    confirm_password: {
      required:true,
      equalTo: "#new_password"

    }
  },
  messages: {
   old_password: { 
    required: "Enter Old Password",
    minlength: "Password must be at least 6 characters.",
    maxlength: "Password should not exceed 10 characters."

  },
  new_password: { 
    required: "Enter New Password",
    minlength: "Password must be of at least 6 characters.",
    maxlength: "Password should not exceed 10 characters."

  },
  confirm_password:{
    required: 'Enter Confirm password',
    equalTo: "New and Confirm password does not match."
  },
},
submitHandler: function(form){
  event.preventDefault();
  $(".loaderCntr").show();
  $.ajax({
    url: "<?php echo base_url()?>admin/change_password_process",
    type: 'POST',
    data:$("#change_password_form").serialize(),
    success: function(response)
        {
          if(response ==1){
            var notification = alertify.notify('Password Successfully Changed', 'success', 4, function(){ 
               console.log('dismissed'); 
           })
            setTimeout(function() { 
               window.location.href = '<?php echo base_url();?>admin/login';
           }, 1000);              
          }
            if(response==0){
                $(".loaderCntr").hide();
                var notification = alertify.notify(' Old password is incorrect please try again!', 'error', 5, function(){  console.log('dismissed');
            });
                return false; 
            }
          }
 }); 
}       
});
 
</script>

</div>
</body>

</html>