
<div class="dashboard_data_wrap">
  <div class="dahaboard_heading">
    <span>COVID-19 Guidelines</span>
  </div>
  <!-- terms & condition Section Start Here-->
  <div class="add_blog_wrap">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="add_blog_form">
         <form id="terms_form" method="post">
          <input type="hidden" name="id" value="<?php echo $data['id'];?>"> 
          <div class="form-group">
            <textarea placeholder="Body" name="body" id="body" ><?php echo $data['body'];?></textarea>
            <span id="body_error" class="form_error"></span>
          </div>
          <br>
          <div class="popular_submit"><button id="submit">Send</button></div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- terms & condition Section End Here-->
</div>
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script>
var editor=CKEDITOR.replace('body');
$('#submit').click(function(event){  
  var formStatus=true;
  var body = CKEDITOR.instances["body"].getData();
if (body.length<=1) { 
 formStatus = false; 
 $("#body_error" ).text("Please enter required field").show().fadeOut(3000);
}
if (formStatus==false) 
{ 
  event.preventDefault(); 
  return false;
}
else if (formStatus == true) {
event.preventDefault();
var data=[];
var data=$("#terms_form").serializeArray();
data.push({name:"body",value:body});
$(".loaderCntr").show();
  $.ajax({
    url: "<?php echo base_url()?>admin/update-covid19-guidelines",
    type: 'POST',
    data:data,
    success: function(response){
     if(response ==1){
    alertify.notify('Updated Successfully', 'success', 3, function(){ 
          window.location.reload();
           })              
           }
      if(response==0){
        $(".loaderCntr").hide();
        alertify.notify('Something went wrong!', 'error', 3, function(){});
        return false; 
      }
     }
  });
}
});
</script>
