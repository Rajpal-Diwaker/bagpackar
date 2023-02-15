<style type="text/css">
  a{
    color: #040404!important;
    text-decoration: none!important;
   }
</style>
<div id="profile_wrapper">
<div class="profile_section">

  <div class="profilepage_bg listbg" style="background:url(./assets/images/profilebg.png);">
  
  <div id="filterpage_wrapper" class="listwrapperdiv">
  <div class="profilepinfowrapper">
	  <span class="profilepimg">

     <?php  $img = $_SESSION['webuser_bgpkr']['image'];
            $name = $_SESSION['webuser_bgpkr']['name'];
           if(!empty($img)){?>
          <img src="<?php echo $img;?>" alt="">
          <?php }else{ ?>
        <input type="hidden" value="<?php echo $name;?>" id="fName">
        <div id="p_Image"><?php echo ucfirst($name[0]);?></div>
          <?php } ?>

		<!-- <img src="<?php echo base_url();?>assets/images/person.png" alt=""> -->
	  </span>
	  <span class="profilepinfo">
		<span class="profilepname"><?=$name;?></span>
		<a href="<?php echo base_url();?>update-profile">View Account Details</a>
	  </span>
  </div>
    <div class="user_stagging_listdiv">
      <div class="staggingli_view">
        <span class="result_count">My Favourites(
          <?php $con = !empty($data['Allfavouritedata'])?count($data['Allfavouritedata']):0;
           echo $con;
          ?> )</span>
       <?php if(isset($data['Allfavouritedata']) && !empty($data['Allfavouritedata'])){ ?> 
       <div class="stagging_listwrapper">
         <?php $pc = 1;  foreach ($data['Allfavouritedata'] as $key => $value) {
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
    $rand = rand(10,100000);
   ?>
   <!-- <div class="item"> -->
    <div class="place_contentwrapper" id="property<?=$pc;?>">
          <div class="place_img">
          <div class="place_innerslider">
          <div id="myCarousel_<?php echo $rand;?>" class="carousel slide" data-ride="carousel" data-interval="false">
          <ol class="carousel-indicators">
              <?php for ($i=0; $i <count($previousimage) ; $i++) { ?> 
              <li data-target="#myCarousel_<?php echo $rand;?>" data-slide-to="<?php echo $i;?>" class="active"></li>
            <?php } ?>
            </ol>
            <div class="carousel-inner">
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
          <a class="left carousel-control" href="#myCarousel_<?php echo $rand;?>" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          </a>
          <a class="right carousel-control" href="#myCarousel_<?php echo $rand;?>" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          </a>
        </div>
     </div>
     <span class="img_bottombg"></span>
   </div>
   <!--tyagi -->
   <div class="place_divider">
    <img src="assets/images/strip_bg.png" alt="">
  </div>
  <div class="place_content">
    <span class="place_heading"><?php echo $value['name_listing'];?></span>
    <span class="place_info"><?php echo $show_string;?></span>
    <div class="pay_price">
   </div>
   <div class="rating_div">
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
<!-- </div> -->
<?php $pc++; } ?>
</div>
<?php } else { ?>
<div class="notFoundata text_black">No Data Found</div>
<?php } ?> 
      </div>
      <input type="hidden" id="guest_id" value="<?php echo $_SESSION['webuser_bgpkr']['user_id'];?>">
    </div>
  </div>
</div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>

<script>
     $(document).ready(function(){
   $(".loaderCntr").hide();
  });

$('#staggingplace_innerslider,#staggingplace_innerslider2,#staggingplace_innerslider3,#staggingplace_innerslider4,#staggingplace_innerslider5').owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    nav: true,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    touchDrag: false,
    mouseDrag: false,
    dots: true,
    autoplay: true
  });
</script>


