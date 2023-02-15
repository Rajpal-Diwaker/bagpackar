  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/2.0.4/css/Jcrop.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/2.0.4/js/Jcrop.min.js"></script> 
  <!-- User Details Section Start Here-->
  <style type="text/css">
    .errors_form{
      display: block;
      font-size: 14px;
      color:red;
      font-weight: bold;
      margin-left: 1px;
      margin-top: -11px;
    }
  </style>
  <div class="dashboard_data_wrap">
    <div class="dahaboard_heading">
      <span>Popular Destination</span>
    </div>
    <!-- User Details Section Start Here-->
    <div class="dashbord_cont_wrapper">
      <div class="user_details_sec clearfix">
        <div class="row">
         <form method="post" enctype="multipart/form-data" id="most_popular_form">
          <div class="col-sm-9 col-lg-6 col-md-8 col-xs-12">

           <div class="user_profile_wrap clearfix ">
            <label for="">Popular Image</label>  
            <div class="edit_profile_img_wrapper">
              <div class="edit_profile_img">
                <img id="profileimg" src="../assets/images/upload_img.png" alt="">
              </div>
              <div class="edit_profile_upload-icon-img">
                <i id="profileuploadicon" class="fa fa-camera" aria-hidden="true"></i>
              </div>
              <input id="profile_img_Upload" type="file" class="hidden-lg hidden-md hidden-sm hidden-xs" placeholder="Photo" capture="">
              <span style="margin-top: 2px;color:red;font-weight: bold;" id="image_error"></span>

            </div>
          </div>
          <input type="hidden" name="latitude" id="latitude">
          <input type="hidden" name="longitude" id="longitude">

          <div class="user_profile_wrap clearfix ">
            <label for="">Address</label>
            <input class="form-control" type="text" name="address" id="address" placeholder="Please enter address">
            <span class="errors_form" id="address_error"></span>
          </div>
          <div class="user_profile_wrap clearfix ">
            <label for="">Country</label>
            <input class="form-control" type="text" id="country" name="country" placeholder="Please enter country">
            <span class="errors_form" id="country_error"></span>
          </div>
          <div class="user_profile_wrap clearfix ">
            <label for="">City</label>
            <input class="form-control" type="text" id="city" name="city" placeholder="Please enter city">
            <span class="errors_form" id="city_error"></span>
          </div> 
          <div class="user_profile_wrap clearfix">
            <label for="">Title</label>
            <input class="form-control" type="text" id="title" name="title" placeholder="Please enter title">
            <span class="errors_form" id="title_error"></span>
          </div> 
          <div class="user_profile_wrap clearfix ">
            <label for="">Body</label>
            <textarea id="body" name="body" rows="10" cols="110"></textarea>
            <span class="errors_form" id="body_error"></span>
          </div> 

          <div class="row">
            <div class="input-field col s12">
              <div class="popular_submit">
                <input type="submit"  id="submit" value="Submit"></div> 
              </div>
            </div>     
          </div>
          <input type="hidden" id="hidden_image" name="image"> 
        </form>
      </div>
    </div>
  </div>
  <!-- User Details Section End Here-->
</div>
<!--for edit image start here-->
<div id="editimage" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Image</h4>
      </div>
      <div class="modal-body">
       <div class="image_upload">
        <label for="image_loader">
          Choose File
        </label>
      </div>
      <div id="image_input"></div>
      <input type="file" class="hidden-lg hidden-md hidden-sm hidden-xs" id="image_loader" name="image_loader"/>
      <img id="image_output" style="display:none;"/>

    </div>
    <div class="modal-footer">
      <label for="image_loader" class="btns_style">ChooseFile</label>
      <button type="button" class="btn btns_style filesavebtn">Save</button>
    </div>
  </div>

</div>
</div>
<!--for edit image end here-->
<script>
  $(document).on('click', '.edit_profile_img_wrapper', function () {
    $('#editimage').modal('show');
  });
//============image loader=================//
var imageLoader = document.getElementById('image_loader');
imageLoader.addEventListener('change', handleImage, false);
var gettingCropedimage = '';
function handleImage(e){
  var reader = new FileReader();
  reader.onload = function(event){
    var image = new Image();
    image.onload = function(){
      if(image.width<100 && image.height<100){
        $('#editimage').modal('hide');  
        $('#image_error').text('Please check Valid Image');
        return false;
      } 
      var canvas = document.createElement('canvas');
      canvas.width = image.width;
      console.log(image.height);
      canvas.height = image.height;
      var ctx = canvas.getContext('2d');
      ctx.drawImage( image, 0, 0, canvas.width, canvas.height );
      $('#image_input').html(['<img src="', canvas.toDataURL(), '"/>'].join(''));
      $('.image_upload').hide();
      $('#image_input').show();
      var img = $('#image_input img')[0]
      var box_width = $('#image_input').width();
      var canvas = document.createElement('canvas');	            
      $('#image_input img').Jcrop({
        boxWidth: box_width,
        boxHeight: 570,
        bgColor: 'black',
        minSize: [100, 200],
        maxSize: [570, 670],
        bgOpacity: .3,
        setSelect: [0, 0, 200, 200],
        aspectRatio: 5 / 6,
        onChange: imgSelect
      });
      function imgSelect(selection) {
       canvas.width = 250;
       canvas.height = 300;
       var ctx = canvas.getContext('2d');
       ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvas.width, canvas.height);						
       $('#image_output').attr('src', canvas.toDataURL());
       gettingCropedimage = canvas.toDataURL()
     }
   }
   image.src = event.target.result;
 }
 reader.readAsDataURL(e.target.files[0]);     
// console.log(e.target.files[0]);     
}


$(document).on('click','.filesavebtn', function(){
  $('#hidden_image').val(''); 
  $('#image_error').html('');	
  $('#hidden_image').val(gettingCropedimage); 
 // console.log("gettingCropedimage",gettingCropedimage);

 $('#profileimg').attr('src', gettingCropedimage);
 $('#editimage').modal('hide');
});
//=========validation=======//

var IsplaceChange = true;
$(document).ready(function(){
  var input = document.getElementById('address');
  var autocomplete = new google.maps.places.Autocomplete(input);
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var place = autocomplete.getPlace();
    IsplaceChange = true;
    $('#country').val('');
    $('#city').val('');
    $('#latitude').val('');
    $('#longitude').val('');
    for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) { 
        if (place.address_components[i].types[j] == "locality") {
         $("#city").val(place.address_components[i].long_name);
       }
       if (place.address_components[i].types[j] == "country") {
        $("#country").val(place.address_components[i].long_name);
      }
    }
  }
  var lat = place.geometry.location.lat();
  var lng= place.geometry.location.lng();
  $('#latitude').val(lat);
  $('#longitude').val(lng);
});
  $("#address").keydown(function () {
    IsplaceChange = false;
  });    
});
$('#address').on('keyup',function(){
  var address=$('#address').val();
  if(address=='')
  {
    $('#country').val('');
    $('#city').val('');
    $('#address_error').hide();

  }
  else if(address.length > 0){
   $('#address_error').hide();
   $('#city_error').hide();
   $('#country_error').hide();
 } 
})


$('#country').on('keyup',function(){
  var country = $("#country").val();
  if (country.length < 3 && country.length!=0 ) { 
    $( "#country_error" ).text( "Country must be of 3 to 30 characters." ).show(); 
  }
  else if (country.length >30 ) 
  { 
    $( "#country_error" ).text( "Country must be of 3 to 30 characters." ).show(); 
  }

  else if(country.length<= 0 || country.length <=30 ){
   $("#country_error" ).hide();

 } 
});

//=========city===========//

$('#city').on('keyup',function(){
  var city = $("#city").val();

  if (city.length < 4 && city.length!=0 ) 
  { 

    $( "#city_error" ).text( "City must be of 4 to 30 characters." ).show(); 
  }

  else if (city.length >30 ) 
  { 

    $( "#city_error" ).text( "City must be of 4 to 30 characters." ).show(); 
  }

  else if(city.length<= 0 || city.length <=30 ){
   $("#city_error" ).hide();

 } 
});

$('#title').on('keyup',function(){
  var title = $("#title").val();
  if (title.length < 10 && title.length!=0){ 
   $('#title_error').text('Please enter minimum 10 character').show();
 }
 else if(title.length>100){
  var  limit=100;
  var len= $(this).val().length;
  $(this).val($(this).val().substring(0,limit));
  remain = limit - parseInt(len);
  $('#title').text(remain);
  $("#title_error").text('The maximum 100 character are allowed').show().fadeOut(3000); 
}

else if(title.length<=0 ||title.length>=10){
  $('#title_error').hide();  
}
});
$('#body').on('keyup',function(){
  var body = $("#body").val();
  if (body.length < 20 && body.length!=0){ 
   $('#body_error').text('Please enter minimum 20 character').show();
 }
 else if(body.length>250){
  var  limit=250;
  var len= $(this).val().length;
  $(this).val($(this).val().substring(0,limit));
  remain = limit - parseInt(len);
  $('#body').text(remain);
  $("#body_error").html('The maximum 250 character are allowed').show().fadeOut(3000);
}
else if(body.length<=0 ||body.length>=20){
  $('#body_error').hide();  
}
});


$("#most_popular_form").on('submit',function(event){
  var formStatus=true;
  var address = $("#address").val();
  var country = $("#country").val();
  var city = $("#city").val();
  var title = $("#title").val();
  var body = $("#body").val();
  var image = $("#hidden_image").val();

  if(image==''){
    formStatus=false;
    $('#image_error').text("Please select image").show(); 
  }
//============== address===========//


if(address==''){
  formStatus=false;
  $('#address_error').text("Please enter address").show();
}
else if (IsplaceChange == false) {
 formStatus = false; 
 $("#address").val('');
 $("#address_error" ).text( "Please enter valid address." ).show();
 $('#address').focus();
}

//============Country=============//
if(country==''){
  formStatus=false;
  $( "#country_error" ).text( "Please enter country." ).show();
}else if (country.length < 3 && country.length!=0 ){
 formStatus=false; 
 $( "#country_error" ).text( "Country must be of 3 to 30 characters." ).show(); 
}else if (country.length >30 ) { 
  formStatus=false;
  $( "#country_error" ).text( "Country must be of 3 to 30 characters." ).show(); 
}



 //=============city===============//     
 if(city.length==0){
  formStatus=false;
  $( "#city_error" ).text( "Please enter city." ).show();
}  
else if (city.length < 4 && city.length!=0 ){
 formStatus=false; 
 $( "#city_error" ).text( "City must be of 4 to 30 characters." ).show(); 
}
else if (city.length >30 ) { 
  formStatus=false;
  $( "#city_error" ).text( "City must be of 4 to 30 characters." ).show(); 
}

//===========title================//
if(title.length==0){
formStatus = false;
$("#title_error" ).text( "Please enter title").show();
}
else if (title.length < 10 && title.length!=0){ 
formStatus=false;
$('#title_error').text('Please enter minimum 10 character');
}

if (body.length==0) 
{ 
formStatus = false;
$("#body_error" ).text("Please enter description").show();
}
else if (body.length < 20 && body.length!=0){ 
formStatus=false;
$('#body_error').text('Please enter minimum 20 character');
}  
if ($('#address').val() == '') {
  $('#address').focus();
}
else if ($('#country').val() == '') {
  $('#country').focus();
}
else if ($('#city').val() == '') {
  $('#city').focus();
}
else if($('#title').val()==""){
$('#title').focus();
}else if($('#body').val()==''){
$('#body').focus();  
} 
if (formStatus==false) 
{ 
  event.preventDefault(); 
  return false;
}
else if(formStatus===true) {
  event.preventDefault(); 
  $(".loaderCntr").show();
  var data=[];
  var data=$("#most_popular_form").serializeArray();
  $.ajax({
    url: "<?php echo base_url()?>admin/Admin/most_popular_process",
    type: 'POST',
    data:data,
    success: function(response){
      if(response ==1){
        alertify.notify('Upload Successfully', 'success', 4); 
        setTimeout(function() { 
          window.location.href = '<?php echo base_url();?>admin/most-popular-list';
        }, 500); 
      }
      else if(response==0){
       $(".loaderCntr").hide();
      alertify.notify('Something went wrong!', 'error', 5)
      return false; 
     }
   }
 });
  return false;
}    
});
</script>
</body>