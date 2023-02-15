
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<style type="text/css">
 label.checkbox{
   width: 100%!important;
 }
 .multi_error{
  color: red;
  font-weight: bold;
  display: block;
  margin-left: 209px;
}
</style>

<div class="dashboard_data_wrap">
  <h2 align="center"><b>All Newsletter</b></h2>
  <div class="dashbord_cont_wrapper">
    <div class='send_notification_wrap'>
      <form method="post" id="newsletter_form">
        <div class="form-group form-inline">
          <label>To</label>
          <div class="multi_drop_down_wrap">
            <i class="fa fa-caret-down" aria-hidden="true"></i>
            <select id="multiselect" class="form-control check" multiple="multiple" name="email[]">
              <?php foreach ($data as $value) { ?>
                <option value="<?php echo $value['email'];?>"><?php echo $value['email'];?></option><?php } ?>
              </select>
            </div> 
            <span id="multiselect_error" class="multi_error"></span> 
          </div>
          <div class="form-group form-inline">
            <label>Message</label>
            <textarea placeholder="Body" name="body" id="body" ></textarea>
            <span id="body_error" class="form_error"></span>
          </div>
          <button type="submit" id="submit" class="send">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript">
   $('#multiselect').multiselect({
    includeSelectAllOption: true,
    maxHeight: 150,
    buttonWidth: 150,
    numberDisplayed: 2,
    enableFiltering: true,
    enableCaseInsensitiveFiltering: true,
    nSelectedText: 'selected',
    nonSelectedText: 'Select email'
  });
   $(document).on('change','#multiselect',function(){
     $('#multiselect_error').hide();
   });
   CKEDITOR.replace('body', {
     on: {
       change: function() {
        $( "#body_error" ).html('');
      }
    }
  });
   $('#submit').click(function(){
     var formStatus=true;
     var count1 = 0;
     var body = CKEDITOR.instances["body"].getData();
     $("#multiselect").each(function() {
      var val = $(this).val();
      if(val!=''){
        count1 = count1+1;
      }
    })
     if (count1 <=0){
       formStatus = false; 
       $("#multiselect_error" ).text( "Please select minimum one user.").show();
     }
     if (body.length==0) { 
       formStatus = false; 
       $("#body_error" ).text("Please enter required field").show();
     }
     if(formStatus==false){
       event.preventDefault();
     }else{
      event.preventDefault();
      var data=[];
      var data=$("#newsletter_form").serializeArray();
      data.push({name:"body",value:body});
      $(".loaderCntr").show();
      $.ajax({
        url: "<?php echo base_url()?>admin/send-newsmail",
        type: 'POST',
        data:data,
        success: function(response){
         if(response ==1){
          alertify.notify('Send Mail Successfully', 'success', 3, function(){ 
            window.location.reload();
          })              
        }
        if(response==0){
          $(".loaderCntr").hide();
          alertify.notify('Something went wrong!', 'error', 3);
          return false; 
        }
      }
    });
    }
})//===submit end======//
</script>
