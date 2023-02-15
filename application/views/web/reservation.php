<style type="text/css">
 a[disabled] {
   cursor: default;
   pointer-events: none;        
   text-decoration: none;
   color: grey!important;
 } 
</style>
<!--on mobile view end here-->
<!--Header End Here-->
<div id="profile_wrapper">
  <div class="profile_section">
    <div class="profilepage_bg" style="background:url(assets/images/profilebg.png);">
      <div class="profilepinfowrapper">
       <span class="profilepimg">
        <?php
        $img = $_SESSION['webuser_bgpkr']['image'];
        $name = $_SESSION['webuser_bgpkr']['name'];
        if(!empty($img)){?>
          <img src="<?php echo $img;?>" alt="">
        <?php }else{ ?>
         <div class="profileifnotImage"><?php echo ucfirst($name[0]);?>  
       </div>
     <?php } ?>
   </span>
   <span class="profilepinfo">
    <span class="profilepname"><?php echo $name;?></span>
    <a href="<?php echo base_url();?>update-profile">View Account Details</a>
  </span>
</div>
<!--upcoming start here-->
<div class="upcoming" id="reservationpage">
  <div class="line_stip">
    <span>Upcoming Bookings (<?php echo $data['upcomingcount'];?>)</span><span class="line_span"></span>
  </div>
  <?php if(isset($data['Allupcomingdata']) && !empty($data['Allupcomingdata'])){ ?> 
    <div class="profileplace_mainslider" class="owl-carousel owl-theme">
      <?php  foreach ($data['Allupcomingdata'] as $key => $value) {
        $previousimage=[];
        if(!empty($value['bedimage'])){
          array_push($previousimage,$value['bedimage']);
        }
        if(!empty($value['bathimage'])){
          array_push($previousimage,$value['bathimage']);
        }
        if(!empty($value['kitimage'])){
          array_push($previousimage,$value['kitimage']);
        }
        if(!empty($value['otherimage'])){
          array_push($previousimage,$value['otherimage']);
        }
        $String = [];
        $show_string="";
        if($value['total_guest']>1){
         $String[]=$value['total_guest'].' Guests'; 
       }
       else if($value['total_guest']==1){
         $String[]=$value['total_guest'].' Guest'; 
       }else{
        $String[]=''; 
      }
      if($value['total_bedrooms']>1){
       $String[]=$value['total_bedrooms'].' Bedrooms'; 
     }
     else if($value['total_bedrooms']==1){
       $String[]=$value['total_bedrooms'].' Bedroom'; 
     }else{
      $String[]=""; 
    }
    if(!empty($value['kitimage'])){
      $String[]='Kitchen'; 
    }else{
      $String[]=""; 
    }
    if($value['total_bathrooms']>1){
     $String[]=$value['total_bathrooms'].' Bathrooms'; 
   }
   else if($value['total_bathrooms']==1){
    $String[]=$value['total_bathrooms'].' Bathroom'; 
  }else{
    $String[]=""; 
  }
  $show_string = implode(', ', array_filter($String)); 
  $pricetext="";  
  if($value['currency']=="Rupees"){
   $pricetext='fa fa-rupee';
 }else{
   $pricetext='fa fa-usd';
 }
 ?>
 <div class="item">
  <div class="place_contentwrapper">
    <div class="place_img">
     <div class="place_innerslider">
       <div class="carousel slide bootstrapcarousel" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { ?> 
            <li data-slide-to="<?php echo $i;?>" class="active"></li>
          <?php } ?>
        </ol>
        <div class="carousel-inner <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { 
            if($i==0){ ?>
              <div class="item active place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } else { ?>
             <div class="item place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } } ?>
         </div>
         <a class="left carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-left" aria-hidden="true"></i>
         </a>
         <a class="right carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-right" aria-hidden="true"></i>
         </a>
       </div>
     </div>
     <span class="img_bottombg"></span>
   </div>
   <!--tyagi -->
   <div class="place_divider <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
    <img src="assets/images/strip_bg.png" alt="">
  </div>
  <div class="place_content">
    <span class="place_heading <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $value['name_listing'];?></span>
    <span class="place_info <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $show_string;?></span>
    <div class="pay_price <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
     <span><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $value['base_price'];?> /night</span>
   </div>
   <div class="price_favinfo">
    <?php if($value['host_paid_status']=='1'){?>
      <a href="javascript:void(0);" class="messagen" value="<?php echo $value['user_id'];?>">Message owner</a>
    <?php }else {?>
      <a href="javascript:void(0);"  class="messagen" value="" disabled>Message owner</a>
    <?php } ?>
    <a href="javascript:void(0);" class="cancel" value="<?php echo base64_encode($value['booking_id']);?>">Cancel Booking</a>
    <span class="fav">
     <?php if($value['status']==1){?>   
      <i class="fa fa-heart" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
    <?php }else{ ?>
      <i class="fa fa-heart-o" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
    <?php } ?>
  </span>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
  <div class="notFoundata text_black">No Data Found</div>
<?php } ?>  
<!--upcoming end here-->
</div>
</div>
<!--referfriend heading start here-->
<input type="hidden" id="guest_id" value="<?php echo $_SESSION['webuser_bgpkr']['user_id'];?>">
<div class="refer_frndwrapper">
  <div class="referfrnd_text">
    <span class="refer_heading">
      Refer a friend 
    </span>
    <p>By using the below mentioned link, you agree to our<a href="<?php echo base_url();?>referral" target="_blank"> Referral program</a>, <a href="<?php echo base_url();?>cancel-refund-policy" target="_blank"> Cancellation and Guest Refund Policy</a>. You also agree to pay the total amount shown, which includes Service Fees.</p>
    <input type="text" class="referfrndemail" id="copythat" value="<?php echo $data['user_code'];?>">
    <div class="btnsharecopy">
      <div class="sharesdropdown dropdown">
        <button type="button" class="actionbtn" id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown"
        aria-haspopup="true" role="button" aria-expanded="false"><i class="fa fa-share-alt"
        aria-hidden="true"></i> Share</button>
        <ul class="dropdown-menu sharing-icon-menu text-center" role="menu" aria-labelledby="drop2">
         <li><a href="javascript:void(0);" onclick="SendLinkByMail()">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        &nbsp;&nbsp; Email</a></li>
        <li><a href="javascript:void(0);" onclick="shareOnFB()" ><i class="fa fa-facebook-square" aria-hidden="true"></i>
        &nbsp;&nbsp; Facebook</a>
      </li>
      <li><a href="javascript:void(0);" onclick="shareOntwitter()">
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
      &nbsp;&nbsp; Twitter</a>
    </li>
  </ul>
</div>
<button type="button" class="actionbtn" onclick="copyoffercode()"><i class="fa fa-clipboard"
  aria-hidden="true"></i> Copy</button>
</div>

<div>
  <span class="refer_amount">
    Referral Amount : $<?php echo $amount;?>
  </span>
</div>
</div>

<div class="referfrnd_img">
  <img src="assets/images/refered_img.png" alt="">
</div>
<span class="dottedline"></span>
</div>
<!--referfriend heading end here-->
<!--previous booking start here -->
<div class="previousbooking_wr">
  <div class="line_stip">
    <span>Previous Bookings (<?php echo $data['previouscount'];?>)</span><span class="line_span"></span>
  </div>
  <?php if(isset($data['Allpreviousdata']) && !empty($data['Allpreviousdata'])){ ?>
    <div class="profileplace_mainslider" class="owl-carousel owl-theme">
      <?php foreach ($data['Allpreviousdata'] as $key => $value) {
        $previousimage=[];
        if(!empty($value['bedimage'])){
          array_push($previousimage,$value['bedimage']);
        }
        if(!empty($value['bathimage'])){
          array_push($previousimage,$value['bathimage']);
        }
        if(!empty($value['kitimage'])){
          array_push($previousimage,$value['kitimage']);
        }
        if(!empty($value['otherimage'])){
          array_push($previousimage,$value['otherimage']);
        }
        $String = [];
        $show_string="";
        if($value['total_guest']>1){
         $String[]=$value['total_guest'].' Guests'; 
       }
       else if($value['total_guest']==1){
         $String[]=$value['total_guest'].' Guest'; 
       }else{
        $String[]=''; 
      }
      if($value['total_bedrooms']>1){
       $String[]=$value['total_bedrooms'].' Bedrooms'; 
     }
     else if($value['total_bedrooms']==1){
       $String[]=$value['total_bedrooms'].' Bedroom'; 
     }else{
      $String[]=""; 
    }
    if(!empty($value['kitimage'])){
      $String[]='Kitchen'; 
    }else{
      $String[]=""; 
    }
    if($value['total_bathrooms']>1){
     $String[]=$value['total_bathrooms'].' Bathrooms'; 
   }
   else if($value['total_bathrooms']==1){
    $String[]=$value['total_bathrooms'].' Bathroom'; 
  }else{
    $String[]=""; 
  }
  $show_string = implode(', ', array_filter($String)); 
  $pricetext="";  
  if($value['currency']=="Rupees"){
   $pricetext='fa fa-rupee';
 }else{
   $pricetext='fa fa-usd';
 }
 ?>
 <div class="item">
  <div class="place_contentwrapper">
    <div class="place_img">
     <div class="place_innerslider">
       <div class="carousel slide bootstrapcarousel" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { ?> 
            <li data-slide-to="<?php echo $i;?>" class="active"></li>
          <?php } ?>
        </ol>
        <div class="carousel-inner <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { 
            if($i==0){ ?>
              <div class="item active place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } else { ?>
             <div class="item place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } } ?>
         </div>
         <a class="left carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-left" aria-hidden="true"></i>
         </a>
         <a class="right carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-right" aria-hidden="true"></i>
         </a>
       </div> 
     </div>
     <span class="img_bottombg"></span>
   </div>
   <!--tyagi -->
   <div class="place_divider <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
    <img src="assets/images/strip_bg.png" alt="">
  </div>
  <div class="place_content">
    <span class="place_heading <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $value['name_listing'];?></span>
    <span class="place_info <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $show_string;?></span>
    <div class="pay_price <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
     <span><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $value['base_price'];?> /night</span>
   </div>
   <div class="price_favinfo">
    <a href="#" data-id="<?php echo $value['host_id'];?>" class="addfeed">Add Feedback</a>
    <span class="fav">
     <?php if($value['status']==1){?>   
      <i class="fa fa-heart" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
    <?php }else{ ?>
      <i class="fa fa-heart-o" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
    <?php } ?>
  </span>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
  <div class="notFoundata text_black">No Data Found</div>
<?php } ?> 
<span class="dottedline"></span>
</div>
<!--previous booking end here-->
<!--My Favourites start here -->
<div class="myfav_wr">
  <div class="line_stip">
    <span>My Favourites (<?php echo $data['Allfavouritecount'];?>)</span><span class="line_span"></span>
  </div>
  <?php if(isset($data['Allfavouritedata']) && !empty($data['Allfavouritedata'])){ ?> 
    <div class="profileplace_mainslider" class="owl-carousel owl-theme">
     <?php  foreach ($data['Allfavouritedata'] as $key => $value) {
      $previousimage=[];
      if(!empty($value['bedimage'])){
        array_push($previousimage,$value['bedimage']);
      }
      if(!empty($value['bathimage'])){
        array_push($previousimage,$value['bathimage']);
      }
      if(!empty($value['kitimage'])){
        array_push($previousimage,$value['kitimage']);
      }
      if(!empty($value['otherimage'])){
        array_push($previousimage,$value['otherimage']);
      }
      $String = [];
      $show_string="";
      if($value['total_guest']>1){
       $String[]=$value['total_guest'].' Guests'; 
     }
     else if($value['total_guest']==1){
       $String[]=$value['total_guest'].' Guest'; 
     }else{
      $String[]=''; 
    }
    if($value['total_bedrooms']>1){
     $String[]=$value['total_bedrooms'].' Bedrooms'; 
   }
   else if($value['total_bedrooms']==1){
     $String[]=$value['total_bedrooms'].' Bedroom'; 
   }else{
    $String[]=""; 
  }
  if(!empty($value['kitimage'])){
    $String[]='Kitchen'; 
  }else{
    $String[]=""; 
  }
  if($value['total_bathrooms']>1){
   $String[]=$value['total_bathrooms'].' Bathrooms'; 
 }
 else if($value['total_bathrooms']==1){
  $String[]=$value['total_bathrooms'].' Bathroom'; 
}else{
  $String[]=""; 
}
$show_string = implode(', ', array_filter($String)); 
$pricetext="";  
if($value['currency']=="Rupees"){
 $pricetext='fa fa-rupee';
}else{
 $pricetext='fa fa-usd';
}
?>
<div class="item">
  <div class="place_contentwrapper">
    <div class="place_img">
     <div class="place_innerslider">
       <div class="carousel slide bootstrapcarousel" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { ?> 
            <li data-slide-to="<?php echo $i;?>" class="active"></li>
          <?php } ?>
        </ol>
        <div class="carousel-inner <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
          <?php for ($i=0; $i <count($previousimage) ; $i++) { 
            if($i==0){ ?>
              <div class="item active place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } else { ?>
             <div class="item place_innersliderimg">
               <img src="<?php echo $previousimage[$i];?>" alt="">
             </div>
           <?php } } ?>
         </div>
         <a class="left carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-left" aria-hidden="true"></i>
         </a>
         <a class="right carousel-control" href="javascript:void(0)" role="button">
           <i class="fa fa-angle-right" aria-hidden="true"></i>
         </a>
       </div>
     </div>
     <span class="img_bottombg"></span>
   </div>
   <!--tyagi -->
   <div class="place_divider <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
    <img src="assets/images/strip_bg.png" alt="">
  </div>
  <div class="place_content">
    <span class="place_heading <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $value['name_listing'];?></span>
    <span class="place_info <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>"><?php echo $show_string;?></span>
    <div class="pay_price">
    </div>
    <div class="rating_div <?php if($value['is_delete']=="0"){ echo "newlink";}?>" value="<?php echo $value['host_id'];?>">
      <?php for($k=1;$k<=5;$k++){
        if ($value['rating']>=$k) {?>
          <i class="fa fa-star rating_yes" aria-hidden="true"></i>
        <?php }else{ ?>
          <i class="fa fa-star" aria-hidden="true"></i>      
        <?php } }?> 
      </div>
      <div class="price_favinfo">
       <span class="pricetext"><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $value['base_price'];?> /night</span>      
       <span class="fav">
         <?php if($value['status']==1){?>   
          <i class="fa fa-heart" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
        <?php }else{ ?>
          <i class="fa fa-heart-o" aria-hidden="true" data-id="<?php echo $value['host_id'];?>"></i>
        <?php } ?>
      </span>
    </div>
  </div>
</div>
</div>
<?php } ?>
</div>
<?php } else { ?>
  <div class="notFoundata text_black">No Data Found</div>
<?php } ?> 
<span class="dottedline"></span>
</div>
<!--My Favourites end here-->
</div>
</div>


<!-- end login modal -->
<script src="assets/js/script.js"></script>
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<script> 
  $(".bootstrapcarousel").carousel();
  $(".carousel-indicators li").click(function(){
    $(this).parents('.bootstrapcarousel').filter(".carousel").carousel(parseInt($(this).attr('data-slide-to')));
  });
  $(".bootstrapcarousel a.left").on('click',function(){
    $(this).parents('.bootstrapcarousel').filter(".carousel").carousel("prev");
  });
  $(".bootstrapcarousel a.right").on('click',function(){
    $(this).parents('.bootstrapcarousel').filter(".carousel").carousel("next");
  }); 
  function copyoffercode() {
    var copyText = document.getElementById("copythat");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    //console.log(copyText.value);
  }

//================message owner============================//
$(document).on('click', '.messagen', function (event) {
  <?php $checkLogin = @$_SESSION['webuser_bgpkr']['user_id']?$_SESSION['webuser_bgpkr']['user_id']:0;
  if($checkLogin==0){?>
   $('#lsfmodal').modal('show');
 <?php }else{ ?>
  var user_id='<?php echo $checkLogin;?>';
  var host_user_id=$(this).attr("value");
  if(host_user_id==""){
    alertify.alert("Something went wrong.", function() {
     window.location="<?php echo base_url();?>";
   });
    return;
  }
  $(".loaderCntr").show();
  event.preventDefault(); 
  $.ajax({
    url: "<?php echo base_url()?>msgowner",
    type: 'POST',
    data:{"user_id":user_id,"host_user_id":host_user_id},
    success: function(response){
      if(response==1){
        window.location.href="user-chat";
      }else{
       alertify.notify('Something went wrong!', 'error', 3)
       return false; 
     }  

   }
 });
<?php } ?>
});

//====================add feedback==========================//
$(document).on("click", ".addfeed", function(event){
 var host_id=window.btoa($(this).attr('data-id'));
 var first_date="";
 var second_date="";
 var adult_count=0;
 var children_count=0;
 var infant_count=0;
 event.preventDefault();
 window.open("getproperty-detail?host_id="+host_id+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count,'_blank');
});

//=======================share on fb========================//
function shareOnFB() {
  let code=$('#copythat').val(); 
  var title='Check out this home on Bagpackar!'+code;
  var url ='https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('<?php echo base_url();?>')+'&t='+title;
  window.open(url, 'FacebookWindow', '');
  return false;
}

//======================share on twitter=======================//
function shareOntwitter() {
  let code=$('#copythat').val();   
  var url ='https://twitter.com/share?url='+ encodeURIComponent('<?php echo base_url();?>')+'&text=Check out this home on Bagpackar!'+code;
  window.open(url, 'TwitterWindow', '');
  return false;
}
//=================share on mail===================//
function SendLinkByMail() {
  var url=$('#copythat').val();
  var subject= "Check out this home on Bagpackar!";
  var body = "Check out this home on Bagpackar!: "+url;
  var uri = "mailto:?subject=";
  uri += encodeURIComponent(subject);
  uri += "&body=";
  uri += encodeURIComponent(body);
  window.open(uri);
}

//=============property view===============//

$(document).on("click", ".newlink", function(event){
 var host_id=window.btoa($(this).attr('value'));
 var first_date="";
 var second_date="";
 var adult_count=0;
 var children_count=0;
 var infant_count=0;
 event.preventDefault();
 window.open("getproperty-detail?host_id="+host_id+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count,'_blank');
});
$(document).on("click", ".cancel", function(event){
  var booking_id=$(this).attr('value'); 
   alertify.confirm('Please check <a href="<?php echo base_url();?>cancel-refund-policy" target="_blank"> Cancellation & Refund policy</a> before proceeding further.<br><br>Do you really want to cancel the booking?', function(e){
    if (e) {
    $.ajax({
    url: "<?php echo base_url()?>cancelBooking",
    type: 'POST',
    data:{"booking_id":booking_id},
    success: function(response){
      if(response==1){
      alertify.notify('Booking Cancel successfully', 'success', 3)
      $("#reservationpage").load(" #reservationpage > *");
      }else{
      alertify.notify('Something Went Wrong.', 'success', 3) 
     }  
   }
 });
 }
});
});



</script>
