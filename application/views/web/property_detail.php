
<input type="hidden" id="page" value="3">
<div id="another_wrapper">
 <div class="stay_detailheaderwr">
  <div class="stay_detail_header">
   <?php 
   $string = [];
   $string[] = @$data['result']['total_guest']?(($data['result']['total_guest']>1)? $data['result']['total_guest'].' Guests':$data['result']['total_guest'].' Guest'):'';

   $string[] = @$data['result']['total_bedrooms']?(($data['result']['total_bedrooms']>1)? $data['result']['total_bedrooms'].' Bedrooms':$data['result']['total_bedrooms'].' Bedroom'):'';
   $string[] = @$data['result']['kitimage']? 'Kitchen':'';
   $string[] = @$data['result']['total_bathrooms']?(($data['result']['total_bathrooms']>1)? $data['result']['total_bathrooms'].' Bathrooms':$data['result']['total_bathrooms'].' Bedroom'):'';
   $showString = implode(', ', $string);
   ?>
   <h1><?php echo $data['result']['name_listing'];?></h1>
   <p><?php echo $showString?></p>
   <input type="hidden" id="host_id" value="<?php echo base64_encode($data['result']['host_id']);?>">
   <input type="hidden" id="user_id" value="<?php echo $data['result']['user_id'];?>">
   <input type="hidden" id="first_date">
   <input type="hidden" id="second_date">
 </div>
 <div class="stay_actionbtn getproperty">
   <div class="btnsharecopy">
    <div class="sharesdropdown dropdown">
     <button type="button" class="actionbtn" id="drop2"  data-toggle="dropdown" aria-haspopup="true"
     role="button" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</button>
     <ul class="dropdown-menu sharing-icon-menu text-center" role="menu" aria-labelledby="drop2">
      <li><a href="javascript:void(0);" onclick="copylink()" id="copylink">
       <i class="fa fa-copy" style="font-size:15px;"></i>
     &nbsp;&nbsp;Copy Link</a>
   </li>
   <li><a href="javascript:void(0);" onclick="SendLinkByMail()">
     <i class="fa fa-envelope" aria-hidden="true"></i>
   &nbsp;&nbsp; Email</a>
 </li>
 <li><a href="javascript:void(0);" onclick="shareOnFB()" ><i class="fa fa-facebook-square" aria-hidden="true"></i>
 &nbsp;&nbsp; Facebook</a>
</li>
<li><a href="javascript:void(0);" onclick="shareOntwitter()">
 <i class="fa fa-twitter-square" aria-hidden="true"></i>
&nbsp;&nbsp; Twitter</a>
</li>
</ul>
</div>
<button type="button" class="actionbtn" id="like_btn" data-id="<?php echo $data['result']['host_id'];?>">
  <?php if($data['result']['status']=='0'){ ?> 
    <i class="fa fa-heart-o" aria-hidden="true"></i>
  <?php }else { ?>
    <i class="fa fa-heart" aria-hidden="true"></i>  
  <?php } ?>
Favourite</button>
</div>
</div>
<span class="stay_detailpr">
  <?php  
  if($data['result']['currency']=="Rupees"){
   $pricetext='fa fa-rupee';
 }else{
   $pricetext='fa fa-usd';
 }   
 $price = number_format($data['result']['base_price'], 2, '.', ',');
 $price = preg_replace('/\.00/', '', $price);
 ?>
 <span class="pricetext"><i class="<?php echo $pricetext;?>"></i> <?php echo $price;?> /night</span>
</span>
</div>
<input type="hidden" id="check_validation">
<div class="staydetail_banner">
  <div class="banner_countwr">
   <div class="staydetail_bannerdiv" id="animated-thumbnials">
    <div class="staydetail_bannerlt">
     <div class="item_img" data-src="<?=$data['allimage'][0]['image'];?>">
      <img src="<?=$data['allimage'][0]['image'];?>"
      alt="">
    </div>
  </div>
  <div class="staydetail_bannermd">
   <div class="item_img" data-src="<?=$data['allimage'][1]['image'];?>">
    <img src="<?=$data['allimage'][1]['image'];?>"
    alt="">
  </div>
  <div class="item_img" data-src="<?=$data['allimage'][2]['image'];?>">
    <img src="<?=$data['allimage'][2]['image'];?>"
    alt="">
  </div>
</div>
<div class="staydetail_bannerrt">
 <?php if (isset($data['allimage'][3]['image'])) { ?>
   <div class="item_img" data-src="<?=$data['allimage'][3]['image'];?>">
    <img src="<?=$data['allimage'][3]['image'];?>"
    alt="">
  </div>
<?php } if (isset($data['allimage'][4]['image'])) { ?>
 <div class="item_img" data-src="<?=$data['allimage'][4]['image'];?>">
  <img src="<?=$data['allimage'][4]['image'];?>"
  alt="">
</div>
<?php } ?>
</div>
<!-- show other all image -->
<?php if(count($data['allimage'])>5){
 for ($i=4; $i < count($data['allimage']); $i++){ ?>
  <div class="item_img" style="display: none;" data-src="<?php echo $data['allimage'][$i]['image'];?>">
   <img src="<?php echo $data['allimage'][$i]['image'];?>"
   alt="">
 </div>
<?php } } ?>
<!-- end show other image -->
</div>
<span id="imagecount"><?php if(count($data['allimage'])>5){ $imgc = count($data['allimage'])-5; echo '+ '.$imgc; } ?></span>
</div>

<!-- mob view slider start here -->

<div id="propert-on-mob" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active">
      <div class="item_img"  data-src="<?=$data['allimage'][0]['image'];?>">
        <img src="<?=$data['allimage'][0]['image'];?>"
        alt="">
      </div>
    </div>
    <div class="item">
     <div class="item_img"  data-src="<?=$data['allimage'][1]['image'];?>">
      <img src="<?=$data['allimage'][1]['image'];?>"
      alt="">
    </div>
  </div>
  <div class="item">
   <div class="item_img"  data-src="<?=$data['allimage'][2]['image'];?>">
    <img src="<?=$data['allimage'][2]['image'];?>"
    alt="">
  </div>
</div>
<?php if(@$data['allimage'][3]['image']){?>
  <div class="item">
   <div class="item_img"  data-src="<?=$data['allimage'][3]['image'];?>">
    <img src="<?=$data['allimage'][3]['image'];?>"
    alt="">
  </div>
</div>
<?php } if(@$data['allimage'][4]['image']){?>
  <div class="item">
   <div class="item_img"  data-src="<?=$data['allimage'][4]['image'];?>">
    <img src="<?=$data['allimage'][4]['image'];?>"
    alt="">
  </div>
</div>
<?php } ?>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#propert-on-mob" data-slide="prev">
  <i class="fa fa-angle-left" aria-hidden="true"></i>
</a>
<a class="right carousel-control" href="#propert-on-mob" data-slide="next">
  <i class="fa fa-angle-right" aria-hidden="true"></i>
</a>
<span class="more-num"><?php if(count($data['allimage'])>5){ $imgc = count($data['allimage'])-5; echo '+ '.$imgc; } ?></span>
<!-- <span class="more-num">3more+</span> -->
</div>


<!-- mob view slider end here -->






</div>
<div class="stay_detailpinfo">
  <div class="staydeinfoimg">
   <div class="staypimgdiv">
    <?php
    if(!empty($data['result']['user_image'])){?>
      <img src="<?php echo $data['result']['user_image'];?>" alt="">
    <?php }else{ ?>
      <span id="profileImage"><?php echo ucfirst($data['result']['name'][0]);?></span>
    <?php } ?>
  </div>
  <div class="staypimginfo">
    <span class="stayhostname">Hosted by</span>
    <?php echo $data['result']['name'];?>
  </div>
</div>
<div class="staydetprating">
 <span><?php echo $data['result']['rating'];?></span> 
 <ul class="list-inline ratingul">
  <?php for($k=1;$k<=5;$k++){
   if ($data['result']['rating']>=$k) {?>
    <li><i class="fa fa-star ratingyes" aria-hidden="true"></i></li>
  <?php }else{ ?>
    <li><i class="fa fa-star ratingno" aria-hidden="true"></i></li>
  <?php } }?>
</ul>
</div>
</div>
<div class="description" id="desfirst">
  <?php echo $data['result']['description'];?>
</div>
<span class="dottedline"></span>
<div class="staypaymentdetail">
  <div class="stay_payinfo">
   <span class="staypayheading">Amenities</span>
   <div class="amenities_div">
    <?php 
    if(isset($data['all_amenties']) && count($data['all_amenties'])>0 ){
     $Allamenties=count($data['all_amenties']);   
     for ($i=0; $i<8; $i++) { ?> 
      <span class="menities_span">
        <img src="<?php echo $data['all_amenties'][$i]['image'];?>" alt=""><?php echo $data['all_amenties'][$i]['name']; ?></span>
      <?php }if($Allamenties>7) {?>
        <div class="text-left">
         <button type="button" class="actionbtn" data-toggle="modal" data-target="#amentiesmodal">Show all <?php echo $Allamenties;?> amenities</button>
       </div>
     <?php } } ?>
   </div>
   <!-- end amenties div -->
   <span class="dottedline"></span>
   <span class="staypayheading">Sleeping Arrangements</span>
   <div class="bedroomdiv">
    <div class="owl-carousel owl-theme bedroomli">
     <?php  for ($i=1; $i <=count($data['result']['bedrooms']);$i++) { 
      $bedcount = count(explode(',',$data['result']['bedrooms'][1]));
      $dummy_array=["Double Bed","Queen Bed","Single Bed","Sofa Bed","King Bed","Twin Bed","Air Bed"];?>
      <div class="item">
        <span class="bedroom">
          Bedroom <?php echo $i;?>
          <button type="button" class="actionbtn">
            <?php for ($j=0; $j <$bedcount; $j++) { 
             if($data['result']['bedrooms'][$i][$j*2]!=0){ ?>
              <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['bedrooms'][$i][$j*2] .' '.$dummy_array[$j];?></span>
            <?php }
          }
          ?>
        </button>
      </span>
    </div>
  <?php } 
  if($data['result']['total_kingbed']>0 || $data['result']['total_queenbed']>0 || $data['result']['total_doublebed']>0 || $data['result']['total_twinbed']>0 || $data['result']['total_airbed']>0){
    $dummy_array1=["King Bed","Queen Bed","Double Bed","Twin Bed","Air Bed"];?>
    <div class="item">
      <span class="bedroom">
        Common Space
        <button type="button" class="actionbtn">
          <?php if($data['result']['total_kingbed']>0){ ?>  
            <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['total_kingbed'] .' '.$dummy_array1[0];?></span>
          <?php } if($data['result']['total_queenbed']>0){ ?>  
            <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['total_queenbed'] .' '.$dummy_array1[1];?></span>
          <?php } if($data['result']['total_doublebed']>0){ ?>  
            <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['total_doublebed'] .' '.$dummy_array1[2];?></span>
          <?php } if($data['result']['total_twinbed']>0){ ?>  
            <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['total_twinbed'] .' '.$dummy_array1[3];?></span>
          <?php }if($data['result']['total_airbed']>0){ ?>  
            <span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $data['result']['total_airbed'] .' '.$dummy_array1[4];?></span>
          <?php } ?>
        </button>
      </span>
    </div>
  <?php } ?>
</div>
</div>
<span class="dottedline"></span>
<div class="availabledates_div">
  <span class="staypayheading">Available Dates</span>
  <input id="staydate_times" type="hidden">
  <div id="daterangepicker1-container" class="embedded-daterangepicker"></div>
  <span id="left_date_error" style="font-size:15px;font-weight: bold"></span>
</div>
<span class="dottedline"></span>
<div class="row">
 <div class="col-md-6">
   <div class="details_section">
    <span class="staypayheading">Things to take care</span>
    <ul>
     <?php if($thingtakecare){?>
       <li><?php echo $np=($thingtakecare['suitable_child']=='1')?'Suitable for Children':'Not Suitable for Children';?></li>
       <li><?php echo $np=($thingtakecare['suitable_infants']=='1')?'Suitable for Infants':'Not Suitable for infants';?></li>
       <li><?php echo $np=($thingtakecare['suitable_pets']=='1')?'Suitable for Pets':'Not Suitable for Pets';?></li>
       <li><?php echo $np=($thingtakecare['allow_smoking']=='1')?'Smoking allowed':'Smoking not allowed';?></li>
       <li><?php echo $np=($thingtakecare['allow_parties']=='1')?'Events/Parties allowed':'Events/Parties are not allowed';?></li>
       <?php if(@$data['result']['add_more']){?>
         <li><?php echo $data['result']['add_more'];?></li>
       <?php } ?>

     <?php } ?>
   </ul>
 </div>
</div>
<div class="col-md-6">
 <div class="details_section">
  <span class="staypayheading">Thinks guest should know</span>
  <ul>
   <?php if($guestknow){?>
     <li><?php echo $np=($guestknow['noise_potential']=='1')?'Noise Potential':'Noise Potential are not allowed';?></li>
     <li><?php echo $np=($guestknow['pet_live']=='1')?'Pets live on property':'Pets are not allowed to live on property';?></li>
     <li><?php echo $np=($guestknow['have_weapon']=='1')?'Weapon on property':'Weapons are not allowed on property';?></li>
     <li><?php echo $np=($guestknow['media_device']=='1')?'Surveillance or recording devices':'Surveillance or recording devices are not allowed';?></li>
     <li><?php echo $np=($guestknow['other_animal']=='1')?'Other animals on property':'Other animals are not allowed on property';?></li>

     <?php if(@$data['result']['if_any']){?>
       <li><?php echo $data['result']['if_any'];?></li>
     <?php } ?>

   <?php } ?>
 </ul>
</div>
</div>
</div>

<span class="dottedline"></span>
<div class="details_section">
  <span class="staypayheading">Property Damage and Accidental</span>
  <div class="description">
    You will be responsible for any damage to the rental property or accidents caused by you or guest travelling with you.
  </div>
</div>

<span class="dottedline"></span>
<div class="details_section">
  <span class="staypayheading">About Host</span>
  <div class="stay_detailpinfo">
   <div class="staydeinfoimg">
    <div class="staypimgdiv">
     <img src="<?php echo $data['result']['profile_img'];?>" alt="">
   </div>
   <div class="staypimginfo">
     <?php echo $data['result']['host_name'];?>
   </div>
 </div>
</div>
<div class="description" id="desSecond">
 <?php echo $data['result']['introduction'];?>
</div>
<div class="input_field aboutform row">
  <div class="col-md-9 col-xs-12">
   <textarea name="message" id="message" class="form-control" placeholder="Type your message....." cols="2" rows="2"></textarea>
   <span id="message-error" style="color:red;font-weight:bold;"></span>
 </div>
 <div class="col-md-3 col-xs-12">
  <button type="button" class="btn_style btn-block" id="chat_inputsubmit">Send</button>
</div>
</div>
</div>
</div>
<div class="pselectbasesamount formsecond">
 <div class="pselamountdiv input_field" id="new_append">
  <div class="form_group">
   <p>Select Date</p>
   <div class="select_tag select-tag-daterangepicker"><!--changes-->
    <input type="text" name="datetimes" id="datetimes" class="form-control" placeholder="Please Select Date">
    <i class="fa fa-caret-down" aria-hidden="true"></i>
  </div>
</div>
<input type="hidden" id="booking_hidden">
<div class="form_group" id="timing_div">

</div>
<!--guest Start Here --> <!--changes -->
<div class="form_group dropdown guest_drop">
 <p>Select Guests</p>
 <button class="btn dropdown-toggle form-control select_tag" id="guest_button" type="button" data-toggle="dropdown">
   <span></span>  <i class="fa fa-caret-down" aria-hidden="true"></i></button>
   <div class="dropdown-menu">
    <div class="guest_dropdownwrapper">
      <div class="guest_div">
        <div class="incrementinput">
         <span class="labels">Adult <span>Age 13+</span></span>
         <div class="number_input_box">
          <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_adult">
           <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
           style="height: 22px; width: 22px; display: block; fill: currentcolor;">
           <rect height="2" rx="1" width="12" x="6" y="11"></rect>
         </svg>
       </button>
       <input type="number" name="adult_count" id="adult_count" min="0" max="16" autocomplete="off">
       <button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_adult">
         <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
         style="height: 22px; width: 22px; display: block; fill: currentcolor;">
         <rect height="2" rx="1" width="12" x="6" y="11"></rect>
         <rect height="12" rx="1" width="2" x="11" y="6"></rect>
       </svg>
     </button>
   </div>
 </div>
 <div class="incrementinput">
   <span class="labels">Children <span>Age 2–12</span></span>
   <div class="number_input_box">
    <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_children">
     <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
     style="height: 22px; width: 22px; display: block; fill: currentcolor;">
     <rect height="2" rx="1" width="12" x="6" y="11"></rect>
   </svg>
 </button>
 <input type="number" name="children_count" id="children_count" min="0" max="5" autocomplete="off">
 <button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_children">
   <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
   style="height: 22px; width: 22px; display: block; fill: currentcolor;">
   <rect height="2" rx="1" width="12" x="6" y="11"></rect>
   <rect height="12" rx="1" width="2" x="11" y="6"></rect>
 </svg>
</button>
</div>
</div>
<div class="incrementinput">
 <span class="labels">Infants <span>Under 2yrs</span></span>
 <div class="number_input_box">
  <button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_infant">
   <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
   style="height: 22px; width: 22px; display: block; fill: currentcolor;">
   <rect height="2" rx="1" width="12" x="6" y="11"></rect>
 </svg>
</button>
<input type="number" name="infant_count" id="infant_count" min="0" autocomplete="off" max="5">
<button  type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_infant">
 <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
 style="height: 22px; width: 22px; display: block; fill: currentcolor;">
 <rect height="2" rx="1" width="12" x="6" y="11"></rect>
 <rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<!--Quest End Here -->
</div>
<div class="new_append" 
></div>
</div>
</div>
<span class="dottedline"></span>
<div class="details_section">
  <span class="staypayheading">About Neighborhood</span>
  <div class="description" id="desThird">
    <?php echo $data['result']['about_neighborhood'];?>
  </div>
</div>

<span class="dottedline"></span>

<div class="reviewrating_div review_wrapper clearfix">
  <span class="heading">Reviews</span>
  <div class="reviewleft">
   <div class="rating_view">
    <div class="rating_number">
     <span><?php echo $data['result']['rating'];?></span>
     <ul class="list-inline ratingul">
      <?php for($k=1;$k<=5;$k++){
       if ($data['result']['rating']>=$k) {?>
        <li><i class="fa fa-star ratingyes" aria-hidden="true"></i></li>
      <?php }else{ ?>
        <li><i class="fa fa-star ratingno" aria-hidden="true"></i></li>
      <?php } }?>
    </ul>
  </div>
  <div class="rating_progress">
   <div class="ratingprogressdiv">
    <span class="rating_nu"><i class="fa fa-star ratingyes" aria-hidden="true"></i> 1</span>
    <div class="progress">
     <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" <?php if($data['result']['one_rating']>100){ echo 'style=" "width:100%"';}else { echo 'style="width:'.$data['result']['one_rating'].'%'.'"';}?>>
     </div>
   </div>
 </div>
 <div class="ratingprogressdiv">
  <span class="rating_nu"><i class="fa fa-star ratingyes" aria-hidden="true"></i> 2</span>
  <div class="progress">
   <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" <?php if($data['result']['two_rating']>100){ echo 'style=" "width:100%"';}else { echo 'style="width:'.$data['result']['two_rating'].'%'.'"';}?>>
   </div>
 </div>
</div>
<div class="ratingprogressdiv">
  <span class="rating_nu"><i class="fa fa-star ratingyes" aria-hidden="true"></i> 3</span>
  <div class="progress">
   <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" <?php if($data['result']['three_rating']>100){ echo 'style=" "width:100%"';}else { echo 'style="width:'.$data['result']['three_rating'].'%'.'"';}?>>
   </div>
 </div>
</div>
<div class="ratingprogressdiv">
  <span class="rating_nu"><i class="fa fa-star ratingyes" aria-hidden="true"></i> 4</span>
  <div class="progress">
   <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" <?php if($data['result']['four_rating']>100){ echo 'style=" "width:100%"';}else { echo 'style="width:'.$data['result']['four_rating'].'%'.'"';}?>>
   </div>
 </div>
</div>
<div class="ratingprogressdiv">
  <span class="rating_nu"><i class="fa fa-star ratingno" aria-hidden="true"></i> 5</span>
  <div class="progress">
   <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" <?php if($data['result']['five_rating']>100){ echo 'style=" "width:100%"';}else { echo 'style="width:'.$data['result']['five_rating'].'%'.'"';}?>>
   </div>
 </div>
</div>
</div>
</div>
<?php 
$All_review=count($data['allrating']);
if(isset($data['allrating']) && !empty($data['allrating'])){
  $loop=($All_review==1)?1:2;  
  for ($i=0; $i<$loop; $i++) { ?>
   <div class="person_rating">
    <div class="person_rating_li">
     <span class="pratimg">
       <img src="<?php echo $data['allrating'][$i]['user_image'];?>" alt="">
     </span>
     <span class="pratinginfo">
      <span class="name"><?php echo $data['allrating'][$i]['name'];?></span>
      <ul class="list-inline ratingul">
       <?php
       $rating=$data['allrating'][$i]['rating'];
       for($k=1;$k<=5;$k++){
        if ($rating>=$k) {?>
         <li><i class="fa fa-star ratingyes" aria-hidden="true"></i></li>
       <?php }else{ ?>
         <li><i class="fa fa-star ratingno" aria-hidden="true"></i></li>
       <?php } }?>
     </ul>
     <span class="des show-read-more"><?php echo $data['allrating'][$i]['review'];?></span>
   </span>
 </div>
</div>
<?php } } 
if($All_review>2){ ?>   
 <div class="text-left">
  <button type="button" class="actionbtn ratingseemore" data-toggle="modal" data-target="#ratingmodal">Show all <?php echo $All_review;?> reviews</button>
</div>
<?php } ?>
</div>
<!-- comment section -->
<?php if($data['comment']=="1"){ ?> 
  <div class="reviewrgt">
   <div class="comment_box input_field">
    <div class="comment_img"> 
     <?php if(!empty($_SESSION['webuser_bgpkr']['image'])){ ?> 
      <img src="<?php echo $_SESSION['webuser_bgpkr']['image'];?>" alt="">
    <?php }else { ?>
      <div class="profileifnotImage"><?php echo ucfirst($_SESSION['webuser_bgpkr']['name'][0]);?>
    </div>
  <?php } ?>
</div>
<div class="comment_input">
 <div class="form-group">
  <div class="staricon">
   <i class="fa fa-star filled" data-value="1" id="star1" title="Poor"></i>
   <i class="fa fa-star filled" data-value="2" id="star2" title="Fair"></i>
   <i class="fa fa-star filled" data-value="3" id="star3" title="Good"></i>
   <i class="fa fa-star filled" data-value="4" id="star4" title="Excellent"></i>
   <i class="fa fa-star filled" data-value="5" id="star5" title="WOW!!!"></i>
 </div>
 <input type="hidden" id="all_rating">
 <span id="star_error" style="color:red;"></span>
 <textarea name="comment" class="form-control" placeholder="Write your comment" id="comment" cols="30" rows="5"></textarea>
 <span id="comment_error" style="color:red"></span>
</div>
<input type="button" value="Send" id="btn_comment" class="btn_style text-center">
</div>
</div>
</div>
<?php } ?>
<!-- comment section -->
</div>
<span class="dottedline"></span>
<!-- map -->

<input type="hidden" id="lat" value="<?php echo $data['result']['lat'];?>">
<input type="hidden" id="lng" value="<?php echo $data['result']['lng'];?>">
<div class="reviewrating_div review_wrapper clearfix">
  <span class="heading">Location</span>
  <div id="property_viewmap">
   <div id="hostmap">
   </div>
 </div>
</div>


<!-- map end -->

</div>
<div class="bdr_review"></div>



</div>
<!-- amenties div -->
<div id="amentiesmodal" class="modal fade amentiesmodal" role="dialog">
 <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Amenties</h4>
  </div>
  <div class="modal-body">
    <div class="amenities_div">
     <?php 
     if(isset($data['all_amenties'])){
      for ($i=0; $i < count($data['all_amenties']); $i++) { ?>
       <span class="menities_span">
         <img src="<?php echo $data['all_amenties'][$i]['image'];?>" alt=""><?php echo $data['all_amenties'][$i]['name']; ?></span>  
       <?php  } }?>
     </div>
   </div>
 </div>
</div>
</div>
<!-- end amenties div -->
<!-- review div -->
<div id="ratingmodal" class="modal fade ratingmodal" role="dialog">
 <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Review List</h4>
  </div>
  <div class="modal-body">
    <?php 
    if(isset($data['allrating'])){
     for ($i=0; $i < count($data['allrating']); $i++) { ?>
      <div class="person_rating_li">
       <span class="pratimg">
         <img src="<?php echo $data['allrating'][$i]['user_image'];?>" alt="">
       </span>
       <span class="pratinginfo">
        <span class="name"><?php echo $data['allrating'][$i]['name'];?></span>
        <ul class="list-inline ratingul">
         <?php
         $rating=[];
         $rating=$data['allrating'][$i]['rating'];
         for($k=1;$k<=5;$k++){
          if ($rating>=$k) {?>
           <li><i class="fa fa-star ratingyes" aria-hidden="true"></i></li>
         <?php }else{ ?>
           <li><i class="fa fa-star ratingno" aria-hidden="true"></i></li>
         <?php } }?>
       </ul>
       <span class="des"><?php echo $data['allrating'][$i]['review'];?></span>
     </span>
   </div>
 <?php } } ?>
</div>
</div>
</div>
</div>
<!-- end review div -->
<link href="<?php echo base_url();?>assets/css/lightgallery.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/lightgallery-all.min.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<script src="<?php echo base_url();?>chat/js/socket.io-1.4.5.js"></script>
<style type="text/css">
 .show-read-more .more-text{
   display: none;
 }
</style>
<script>
  var txt = $('#desfirst').html();
  var txttostore = '<p>' + txt.replace(/\n/g, "</p>\n<p>") + '</p>';
  $('#desfirst').html(txttostore);

  var txt1 = $('#desSecond').html();
  var txttostore1 = '<p>' + txt1.replace(/\n/g, "</p>\n<p>") + '</p>';
  $('#desSecond').html(txttostore1);

  var txt2 = $('#desThird').html();
  var txttostore2 = '<p>' + txt2.replace(/\n/g, "</p>\n<p>") + '</p>';
  $('#desThird').html(txttostore2);

  $(document).ready(function(){
    google.maps.event.addDomListener(window, "load", initAutocomplete);

    function initAutocomplete(){
      var iconimg = {
       url: "<?php echo base_url();?>assets/images/pinicon.svg",
       scaledSize: new google.maps.Size(30, 30)
     };
     var lat = 28.7041;
     if ($('#lat').val() != '') {
      lat = $('#lat').val();
    }
    var lng = 77.1025;
    if ($('#lng').val() != '') {
      lng = $('#lng').val();
    }
    var position = [lat, lng];

    var latlng = new google.maps.LatLng(position[0], position[1]);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      radius : 100
    };
    
    map = new google.maps.Map(document.getElementById("hostmap"), myOptions);  
    var CicleOption = {
      strokeColor: "#000",
      strokeWeight: 0,
      fillColor: '#7999f2',
      fillOpacity: 0.3,
      map: map,
      center: latlng,
      radius: 100
    };

    AOICircle=new google.maps.Circle(CicleOption); 
    // marker = new google.maps.Marker({
    //             position: latlng,
    //             map: map,
    //             icon: iconimg,
    //             title: "Latitude:"+position[0]+" | Longitude:"+position[1]
    //             });
  }
});
   //===========use for rating====================//
   
   $(document).ready(function(){
     $('.bedroomli').owlCarousel({
       loop: $('.bedroomli .item').size() > 1 ? true:false,
       margin: 10,
       nav: $('.bedroomli .item').size() > 4 ? true:false,
       navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
       dots: true,
       autoplay: false,
       responsive: {
         0: {
           items: 2,
           mouseDrag: true,
           touchDrag: true,
         },
         768: {
           items: 3,
           mouseDrag: true,
           touchDrag: false
         },
         992: {
           items: 3,
           mouseDrag: false,
           touchDrag: false
         },
         1024: {
           items: 4,
           mouseDrag: false,
           touchDrag: false
         }
       }
     });
     var new_html='<?php echo $data['html_code'];?>';
     $('.new_append').append(new_html);
     var new_html2='<?php echo $data['html_code2'];?>';
     $('#timing_div').html(new_html2);
     if(new_html2!=""){
      $('#booking_hidden').val('1');
    }else{
     $('#booking_hidden').val('0');
   }
   $('#less_adult').attr("disabled","disabled");
   $('#less_children').attr("disabled","disabled");
   $('#less_infant').attr("disabled","disabled");
   $('#adult_count').val(1);
   $('#children_count').val(0);
   $('#infant_count').val(0);
   <?php if(!empty($first_date)){ ?>
    $('#datetimes').val('<?php echo $first_date;?>' + ' - ' + '<?php echo $second_date;?>');
    rightsidedateset('<?php echo $first_date;?>','<?php echo $second_date;?>');
    dateset('<?php echo $first_date;?>','<?php echo $second_date;?>');
    $('#first_date').val('<?php echo $first_date;?>');
    $('#second_date').val('<?php echo $second_date;?>');  
  <?php }else{ ?>
   dateset('','');
   rightsidedateset('','');
 <?php } if($adult_count >1){ ?>
   $('#adult_count').val(<?php echo $adult_count;?>);
   $('#less_adult').removeAttr('disabled'); 
 <?php }if($children_count >0){ ?>
   $('#children_count').val(<?php echo $children_count;?>);
   $('#less_children').removeAttr('disabled'); 
 <?php }if($infant_count >0){ ?>
   $('#infant_count').val(<?php echo $infant_count;?>);
   $('#less_infant').removeAttr('disabled'); 
 <?php }if($infant_count>=5) { ?>
   $("#more_infant").attr("disabled","disabled");
 <?php }?>
 let Total_guest=<?php echo $data['result']['total_guest'];?>;  
 let adult_count=$('#adult_count').val();
 let children_count=$('#children_count').val();
 let all_guest=parseInt(adult_count)+parseInt(children_count);
 if(all_guest>=Total_guest){
   $("#more_adult").attr("disabled","disabled");
   $("#more_children").attr("disabled","disabled");
 }
 $('#guest_button').text('Number of Guests'); 
 if($('#infant_count').val()>"0"){
   var string = (all_guest >1) ? ' guests,' :' guest,'; 
   var string1 = (<?php echo $infant_count;?> > 1) ? ' infants' :' infant';  
   $('#guest_button').text(<?php echo $adult_count;?>+<?php echo $children_count;?>+string+' '+<?php echo $infant_count;?>+string1);
 }else{
   var string = (all_guest >1) ? ' guests' :' guest'; 
   $('#guest_button').text(all_guest+string); 
 } 
});
   

   $('#more_adult').on('click',function(){
    let Total_guest=<?php echo $data['result']['total_guest'];?>;  
    let adult_count=$('#adult_count').val();
    let children_count=$('#children_count').val();
    let all_guest=parseInt(adult_count)+parseInt(children_count);
    let infant_count=$('#infant_count').val();
    if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 =''; 
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);
    if(adult_count>1){
      $('#less_adult').removeAttr('disabled');
    }
    if(all_guest>=Total_guest){
      $("#more_adult").attr("disabled","disabled");
      $("#more_children").attr("disabled","disabled");
      $("#less_children").removeAttr('disabled'); 
    }
    if(adult_count>=16){
      $("#more_adult").attr("disabled","disabled");
    }
    if(children_count<=0){
      $("#less_children").attr("disabled","disabled");
    }
    mainRequest();
  });
   
   $('#less_adult').on('click',function(){
    let Total_guest=<?php echo $data['result']['total_guest'];?>;
    let adult_count=$('#adult_count').val();
    let children_count=$('#children_count').val();
    let all_guest=parseInt(adult_count)+parseInt(children_count);
    let infant_count=$('#infant_count').val();
    if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 = '';
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);
    if(adult_count<16){
      $("#more_adult").removeAttr('disabled'); 
    }
    if(all_guest>=Total_guest){
      $("#more_adult").attr("disabled","disabled");
      $("#more_children").attr("disabled","disabled");
    }
    if(all_guest<Total_guest){
      $("#more_adult").removeAttr('disabled');
      $("#more_children").removeAttr('disabled');
    }
    if(adult_count<=1){
      $("#less_adult").attr("disabled","disabled");
    }
    mainRequest();
  });

   // //===========children===============//
   
   $('#more_children').on('click',function(){
     let Total_guest=<?php echo $data['result']['total_guest'];?>;  
     var adult_count=$('#adult_count').val();
     let children_count=$('#children_count').val();
     let all_guest=parseInt(adult_count)+parseInt(children_count);
     let infant_count=$('#infant_count').val();
     if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 = ''; 
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);
    if(children_count>=1){
     $("#less_children").removeAttr('disabled'); 
   }
   if(all_guest>=Total_guest){
     $("#more_adult").attr("disabled","disabled");
     $("#more_children").attr("disabled","disabled");
     if(adult_count>1){
       $("#less_adult").removeAttr('disabled'); 
     }
   }
   if(children_count>=5){
     $("#more_children").attr("disabled","disabled");
   }
   mainRequest();
 });
   
   $('#less_children').on('click',function(){
     let Total_guest=<?php echo $data['result']['total_guest'];?>;  
     let adult_count=$('#adult_count').val();
     let children_count=$('#children_count').val();
     let all_guest=parseInt(adult_count)+parseInt(children_count);
     let infant_count=$('#infant_count').val();
     if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 = '';
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);
    if(children_count<5){
     $("#more_children").removeAttr('disabled'); 
   }
   if(all_guest<Total_guest){
     $("#more_adult").removeAttr('disabled');
     $("#more_children").removeAttr('disabled');
   }
   if(children_count<=0){
     $("#less_children").attr("disabled","disabled");
   }
   mainRequest();
 });
   // //============infants=================//
   $('#more_infant').on('click',function(){
     let adult_count=$('#adult_count').val();
     let children_count=$('#children_count').val();
     let all_guest=parseInt(adult_count)+parseInt(children_count);
     let infant_count=$('#infant_count').val();
     if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 = '';
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);

    if(infant_count>=1){
     $("#less_infant").removeAttr('disabled');  
   }
   if(infant_count>=5){
     $("#more_infant").attr("disabled","disabled");
   }
   mainRequest();
 });
   
   $('#less_infant').on('click',function(){
    let adult_count=$('#adult_count').val();
    let children_count=$('#children_count').val();
    let all_guest=parseInt(adult_count)+parseInt(children_count);
    let infant_count=$('#infant_count').val();
    if(infant_count>0){
      var string = (all_guest >1) ? ' guests,' :' guest,';
      var string1 = (infant_count> 1) ? ' infants' :' infant'; 
    }else{
      var string = (all_guest >1) ? ' guests' :' guest';
      var string1 = ''; 
    }
    let infant_counts=(infant_count >0) ? infant_count : ''; 
    $('#guest_button').text(all_guest+string+' '+infant_counts+string1);
    if(infant_count<5){
     $("#more_infant").removeAttr('disabled'); 
   }
   if(infant_count<=0){
     $("#less_infant").attr("disabled","disabled");
   }
   mainRequest();
 });
   //===========payment data================//
   
   var mainRequest = function(){
     var host_id =$('#host_id').val();
     var first_date = $('#first_date').val();
     var second_date = $('#second_date').val();
     var adult_count = $('#adult_count').val();
     var children_count = $('#children_count').val();
     var infant_count = $('#infant_count').val();
     var bookingtime = ($('#bookingtime').val()!="") ? $('#bookingtime').val() :''; 
     var change_url= '<?php echo base_url();?>getproperty-detail?host_id='+host_id+'&first_date='+first_date+'&second_date='+second_date+'&adult_count='+adult_count+'&children_count='+children_count+'&infant_count='+infant_count;
     // $(".loaderCntr").show();
     $.ajax({
       url: "<?php echo base_url()?>welcome/getproperty_detail",
       type: 'POST',
       data:{"host_id":host_id,"first_date":first_date,"second_date":second_date,"adult_count":adult_count,"children_count":children_count,"infant_count":infant_count,"bookingtime":bookingtime},
       success: function(data){
         // $(".loaderCntr").hide();
         $(".new_append").html('');
         $(".new_append").append(data);
         if(change_url!=window.location){
           window.history.pushState({path:change_url},'',change_url);    
         }

       } 
     });
   }
   //===========payment data================//
   
   
   $('#animated-thumbnials').lightGallery({
     thumbnail: true,
     selector: '.item_img'
   });
   
   $(document).on('click', '#check_date', function () {
     $("#datetimes").click();
   });
   
   $(document).on('click', '#change_date', function () {
     $("#datetimes").click();
   });

 //===============date time change function=============//
 $(document).on('change', '#bookingtime', function() {
   mainRequest();
 });

   //===============payment=====================//
   function payment(){
     var guest_id=document.getElementById('guest_id').value;
     var user_id=document.getElementById('user_id').value;
     if($('#booking_hidden').val()=='1' && $('#bookingtime').val()==""){
      alertify.notify('Please select booking time', 'error', 3)
      return false;
    }
    $('#check_validation').val('0');
    if(guest_id==""){
     $('#check_validation').val('1');
     $('#lsfmodal').removeClass('signupopen');
     $('#lsfmodal').removeClass('forgotopen');
     $('#lsfmodal').removeClass('otpopen');
     $('#lsfmodal').addClass('loginopen');
     $('#lsfmodal').modal('show');
   }else if (guest_id===user_id){
     alertify.alert("Host can't book his own property.", function() {
       window.location="<?php echo base_url();?>";
       return false;
     });
   }else { 
     let adult_count=$("#adult_count").val();
     let children_count=$("#children_count").val();
     let infant_count=$("#infant_count").val();
     let first_date=$("#first_date").val();
     let second_date=$("#second_date").val();
     let booking_amount=$("#booking_amount").attr("value");
     let cleaning_fee=$("#cleaning_fee").attr("value");
     let total_amount=$("#total_amount").attr("value");
     let host_id=document.getElementById('host_id').value;
     if($('#booking_hidden').val()=='1'){
      var booking_time=$('#bookingtime').val();
    }else{
      var booking_time='0';
    }
    $(".loaderCntr").show();
    $.ajax({
     url: "<?php echo base_url()?>payment/payment_detail",
     type: 'POST',
     data:{"host_id":host_id,"booking_amount":booking_amount,"cleaning_fee":cleaning_fee,"total_amount":total_amount,"first_date":first_date,"second_date":second_date,"adult_count":adult_count,"children_count":children_count,"infant_count":infant_count,"booking_time":booking_time},
     success: function(response){
       window.location.href = "payment";
     }
   });
  }
}


function rightsidedateset(sidestartdate,sideenddate){
 var disabledates = [<?php echo $data['result']['unavilable_date'];?>];
 var check_out=[];
 var check_in=[];
 <?php if(!empty($data['result']['check_out']) && !empty($data['result']['check_in'])){?> 
   check_out=[<?php echo $data['result']['check_out'];?>];
   check_in=[<?php echo $data['result']['check_in'];?>];
 <?php } ?> 
 if(sidestartdate=="" && sideenddate==""){
   $('input[name="datetimes"]').daterangepicker({
     timePicker: false,
     autoUpdateInput: false,
     autoApply:true,
     parentEl:'.select-tag-daterangepicker',//changes
     minDate: new Date(),
     opens: 'left',
     isCustomDate: function(d) {
      for (var i = 0; i < check_in.length; i++) {
       if (d.format('MM/DD/YYYY') == check_in[i]) {
         return 'check_in'; 
       }
       else if (d.format('MM/DD/YYYY') == check_out[i]) {
         return 'check_out'; 
       }
     }
   },
   isInvalidDate: function (date) {
     for (var i = 0; i < disabledates.length; i++) {
       if (date.format('MM/DD/YYYY') == disabledates[i]) {
         return true;
       }
     }
   }
 }).on('show.daterangepicker', function(ev, picker) {
   $(picker.container[0]).find(".check_in").attr("title","checkIN");
   $(picker.container[0]).find(".check_out").attr("title","checkOUT").removeClass('available').addClass('off');
 });
}else{
 $('input[name="datetimes"]').daterangepicker({
   timePicker: false,
   autoUpdateInput: false,
   autoApply:true,
   minDate: new Date(),
   singleClasses: "",
   opens: 'left',
   "startDate": sidestartdate,
   "endDate": sideenddate,
   locale: {
     format: 'MM/DD/YYYY'
   },
   isCustomDate: function(d) {
    for (var i = 0; i < check_in.length; i++) {
     if (d.format('MM/DD/YYYY') == check_in[i]) {
       return 'check_in'; 
     }
     else if (d.format('MM/DD/YYYY') == check_out[i]) {
       return 'check_out'; 
     }
   }
 },
 isInvalidDate: function (date) {
   for (var i = 0; i < disabledates.length; i++) {
     if (date.format('MM/DD/YYYY') == disabledates[i]) {
       return true;
     }
   }
 }
}).on('show.daterangepicker', function(ev, picker) {
 $(picker.container[0]).find(".check_in").attr("title","checkIN");
 $(picker.container[0]).find(".check_out").attr("title","checkOUT").removeClass('available').addClass('off');
});
}
if(sidestartdate=="" && sideenddate==""){
 $('#datetimes').val('');
}
$('input[name="datetimes"]').on('cancel.daterangepicker', function (ev, picker2) {
 $(this).val('');
 $('#first_date').val('');
 $('#second_date').val(''); 
});
//=============apply=====================//
$('input[name="datetimes"]').on('apply.daterangepicker', function (ev, picker2) {
 let min_day=<?php echo $data['result']['min_day'];?>;
 let max_day=<?php echo $data['result']['max_day'];?>;  
 let date1= new Date(picker2.startDate);
 let date2=new Date(picker2.endDate);
 let diffDays=parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
 if(diffDays==0){
  $(".date-error-span").html('Select valid end date').css('display', 'block').fadeOut(5000);
  $('#datetimes').val('');
  $('#first_date').val('');
  $('#second_date').val(''); 
  mainRequest();
  return false;
}
//=================use for check booking date=======================//
let from_date=picker2.startDate.format('YYYY-MM-DD');
let to_date=picker2.endDate.format('YYYY-MM-DD');
let host_id=$('#host_id').val();
// $(".loaderCntr").show();   
$.ajax({
  url: "<?php echo base_url()?>welcome/check_date",
  type: 'POST',
  data:{"host_id":host_id,"from_date":from_date,"to_date":to_date,"day":diffDays},  
  success: function(response){ 
    // $(".loaderCntr").hide();     
    if(response==0){
      $(".date-error-span").html("Booking date can't include unavailable dates").css('display', 'block').fadeOut(5000);
      $('#datetimes').val('');
      $('#first_date').val('');
      $('#second_date').val(''); 
      mainRequest();
      return false;
    }
    else{ 
//============min max check===================// 
if(diffDays<min_day || diffDays>max_day){
  $('#datetimes').val('');
  $('#first_date').val('');
  $('#second_date').val(''); 
  $(".date-error-span").html("Please select min "+min_day+" and max "+max_day+" days").css('display', 'block').fadeOut(5000);
  $('#datetimes').val('');
  $('#first_date').val('');
  $('#second_date').val(''); 
  mainRequest();
  return false;
} 
else if(diffDays>1){
  $('#timing_div').hide();
  $('#booking_hidden').val('0');
  $('#bookingtime').val('');
  $('#datetimes').val(picker2.startDate.format('MM/DD/YYYY') + ' - ' + picker2.endDate.format('MM/DD/YYYY'));
  $('#first_date').val(picker2.startDate.format('MM/DD/YYYY'));
  $('#second_date').val(picker2.endDate.format('MM/DD/YYYY')); 
  dateset($('input[name="datetimes"]').data('daterangepicker').startDate.format('M/DD/YYYY'),$('input[name="datetimes"]').data('daterangepicker').endDate.format('M/DD/YYYY'));
  mainRequest();
}
//==============use 1 day===================//
else {
  $('#timing_div').show();   
  // $(".loaderCntr").show();   
  let host_id=$('#host_id').val();
  let check_date=picker2.startDate.format('YYYY-MM-DD');
  $.ajax({
    url: "<?php echo base_url()?>welcome/check_host_timing",
    type: 'POST',
    data:{"host_id":host_id,"check_date":check_date},  
    success: function(response){ 
      if(response!=""){
        $('#booking_hidden').val('1');
      }else{
        $('#booking_hidden').val('0');
      }
      // $(".loaderCntr").hide()  
      $('#timing_div').html('');
      $('#timing_div').html(response);
      $('#datetimes').val(picker2.startDate.format('MM/DD/YYYY') + ' - ' + picker2.endDate.format('MM/DD/YYYY'));
      $('#first_date').val(picker2.startDate.format('MM/DD/YYYY'));
      $('#second_date').val(picker2.endDate.format('MM/DD/YYYY')); 
      dateset($('input[name="datetimes"]').data('daterangepicker').startDate.format('M/DD/YYYY'),$('input[name="datetimes"]').data('daterangepicker').endDate.format('M/DD/YYYY'));
      mainRequest();
//=====================use for max=================//   
}//ajax sucess==========//
});//ajax close===============//

}//else use for more than 1 day==========//
} //else=============//
}//ajax sucess========//
});//ajax close==========//
});//=====picker apply-------//
}// close function=======//

//===================dateset==============================//
function dateset(startdate,enddate){
 var disabledates = [<?php echo $data['result']['unavilable_date'];?>];
 var check_out=[];
 var check_in=[];
 <?php if(!empty($data['result']['check_out']) && !empty($data['result']['check_in'])){?> 
   check_out=[<?php echo $data['result']['check_out'];?>];
   check_in=[<?php echo $data['result']['check_in'];?>];
 <?php } ?>
 if(startdate=="" && enddate==""){
   var picker = $('#staydate_times').daterangepicker({
     "parentEl": "#daterangepicker1-container",
     "autoUpdateInput": false,
     "minDate": new Date(),
     "autoApply": true,
     locale: {
       cancelLabel:'clear'
     },
     isCustomDate: function(d) {
      for (var i = 0; i < check_in.length; i++) {
       if (d.format('MM/DD/YYYY') == check_in[i]) {
         return 'check_in'; 
       }
       else if (d.format('MM/DD/YYYY') == check_out[i]) {
         return 'check_out'; 
       }
     }
   },
   isInvalidDate: function (date) {
     for (var i = 0; i < disabledates.length; i++) {
       if (date.format('MM/DD/YYYY') == disabledates[i]) {
         return true;
       }
     }
   }
 }).on('show.daterangepicker', function(ev, picker) {
   $(picker.container[0]).find(".check_in").attr("title","checkIN");
   $(picker.container[0]).find(".check_out").attr("title","checkOUT").removeClass('available').addClass('off');
 });
}else{
 var picker = $('#staydate_times').daterangepicker({
   "parentEl": "#daterangepicker1-container",
   "autoApply": true,
   "autoUpdateInput": false,
   "startDate": startdate,
   "endDate": enddate,
   "minDate": new Date(),
   locale: {
     cancelLabel:'clear'
   },
   isInvalidDate: function (date) {
     for (var i = 0; i < disabledates.length; i++) {
       if (date.format('MM/DD/YYYY') == disabledates[i]) {
         return true;
       }
     }
   }
 }).on('show.daterangepicker', function(ev, picker) {
   $(picker.container[0]).find(".check_in").attr("title","checkIN");
   $(picker.container[0]).find(".check_out").attr("title","checkOUT").removeClass('available').addClass('off');
 });
}
picker.on('apply.daterangepicker', function (ev, picker1) {
  let min_day=<?php echo $data['result']['min_day'];?>;
  let max_day=<?php echo $data['result']['max_day'];?>;  
  let date1= new Date(picker1.startDate);
  let date2=new Date(picker1.endDate);
  let diffDays=parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
  if(diffDays==0){
    $("#left_date_error").html('Select valid end date').css('display', 'block').fadeOut(5000);
    $('#datetimes').val('');
    $('#first_date').val('');
    $('#second_date').val(''); 
    mainRequest();
    return false;
  }
//=================use for check booking date=======================//
let from_date=picker1.startDate.format('YYYY-MM-DD');
let to_date=picker1.endDate.format('YYYY-MM-DD');
let host_id=$('#host_id').val();
// $(".loaderCntr").show();   
$.ajax({
  url: "<?php echo base_url()?>welcome/check_date",
  type: 'POST',
  data:{"host_id":host_id,"from_date":from_date,"to_date":to_date,"day":diffDays},  
  success: function(response){ 
    // $(".loaderCntr").hide();     
    if(response==0){
      $("#left_date_error").html("Booking date can't include unavailable dates").css('display', 'block').fadeOut(5000);
      $('#datetimes').val('');
      $('#first_date').val('');
      $('#second_date').val(''); 
      mainRequest();
      return false;
    }
    else{
//============min max check===================// 
if(diffDays<min_day || diffDays>max_day){
  $('#datetimes').val('');
  $('#first_date').val('');
  $('#second_date').val(''); 
  $("#left_date_error").html("Please select min "+min_day+" and max "+max_day+" days").css('display', 'block').fadeOut(5000);
  $('#datetimes').val('');
  $('#first_date').val('');
  $('#second_date').val(''); 
  mainRequest();
  return false;
} 

//=====================use for max=================//   
else if(diffDays>1){
  $('#timing_div').hide();
  $('#booking_hidden').val('0');
  $('#bookingtime').val('');
  $('input[name="datetimes"]').val(picker1.startDate.format('M/DD/YYYY') + '-' + picker1.endDate.format('M/DD/YYYY'));
  $('#first_date').val(picker1.startDate.format('MM/DD/YYYY'));
  $('#second_date').val(picker1.endDate.format('MM/DD/YYYY')); 
  rightsidedateset($('input#staydate_times').data('daterangepicker').startDate.format('M/DD/YYYY'),$('input#staydate_times').data('daterangepicker').endDate.format('M/DD/YYYY'));
  mainRequest();
}
//==============use 1 day===================//
else{
  $('#timing_div').show(); 
  // $(".loaderCntr").show();   
  let host_id=$('#host_id').val();
  let check_date=picker1.startDate.format('YYYY-MM-DD');
  $.ajax({
    url: "<?php echo base_url()?>welcome/check_host_timing",
    type: 'POST',
    data:{"host_id":host_id,"check_date":check_date},  
    success: function(response){ 
      if(response!=""){
        $('#booking_hidden').val('1');
      }else{
        $('#booking_hidden').val('0');
      }
      // $(".loaderCntr").hide()  
      $('#timing_div').html('');
      $('#timing_div').html(response);
      $('input[name="datetimes"]').val(picker1.startDate.format('M/DD/YYYY') + '-' + picker1.endDate.format('M/DD/YYYY'));
      $('#first_date').val(picker1.startDate.format('MM/DD/YYYY'));
      $('#second_date').val(picker1.endDate.format('MM/DD/YYYY')); 
      rightsidedateset($('input#staydate_times').data('daterangepicker').startDate.format('M/DD/YYYY'),$('input#staydate_times').data('daterangepicker').endDate.format('M/DD/YYYY'));
      mainRequest();
}//ajax sucess==========//
});//ajax close===============//
}//else use for 1 day==========//

} //else=============//
}//ajax sucess========//
});//ajax close==========//
});//=====picker apply-------//

picker.data('daterangepicker').hide = function () { };
picker.data('daterangepicker').show();
/* datepicker end here */
}// close function=======// 

   //=============use for rating================//
   var maxLength = 100;
   $(".show-read-more").each(function(){
     var myStr = $(this).text();
     if($.trim(myStr).length > maxLength){
       var newStr = myStr.substring(0, maxLength);
       var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
       $(this).empty().html(newStr);
       $(this).append('<a href="javascript:void(0);" class="read-more">....<br><button type="button">See more</button></a>');
       $(this).append('<span class="more-text">'+removedStr+'</span>');
     }
   });
   $(".read-more").click(function(){
     $(this).siblings(".more-text").contents().unwrap();
     $(this).remove();
   });
   
   //==============rating=======================//
   $('.staricon i').on('click', function(){
     var onStar = parseInt($(this).data('value'), 10);
     $('#all_rating').val(onStar);
     for (i = 1; i <=5; i++) {
       if(i<=onStar){
         $('#star'+i).addClass('filled');
         $('#star'+i).removeClass('filled');
       }else{
         $('#star'+i).addClass('filled');
       }
     }  
   });
   
   
   //===========use for comment===================//
   $("#comment").keyup(function (e) {
     e.preventDefault();
     var proceed = true;
     $("#comment_error").html('');
     var max = 300;
     var len = $(this).val().length;
     if (this.value.length == max) {
     } else if (this.value.length > max) {
   // Maximum exceeded
   this.value = this.value.substring(0, max);
 }
 if(len < max){
   $("#intial_des").html(len); 
 }else{
   $("#intial_des").html(max); 
   $("#comment_error").html('* The maximum number of characters allowed is 300.').show().fadeOut(3000);
   proceed = false;
 }
});
   
  //===============btn comment==============================// 
  $('#btn_comment').on('click',function(){
   if($('#star1').hasClass('fa fa-star filled')){
     $("#star_error").html('Please select star rating').show().fadeOut(3000); 
     return false; 
   }   
   if($('#comment').val()==""){
     $("#comment_error").html('Please enter comment').show().fadeOut(3000);
     return false;
   }
   <?php $user_id=(isset($_SESSION['webuser_bgpkr']['user_id']) && !empty($_SESSION['webuser_bgpkr']['user_id']))?$_SESSION['webuser_bgpkr']['user_id']:'0';?>
   let guest_id='<?php echo $user_id;?>';
   let host_id=$('#host_id').val();
   let rating=$('#all_rating').val();
   let review=$('#comment').val();
   $(".loaderCntr").show();
   $.ajax({
     url: "<?php echo base_url()?>property_comment",
     type: 'POST',
     data:{guest_id,host_id,rating,review},
     success: function(response){
      $(".loaderCntr").hide()  
      if(response ==1){
       $('.reviewrgt').hide();
       alertify.notify('Thanks for rating', 'success',5)
     }else if(response==0){
      alertify.notify("Something went wrong",'error', 3)
      return false; 
    }
  }
});
 });
//===========================share on fb========================//

function shareOnFB() {
  var title='<?php echo $data['result']['name_listing'];?>';
  var img='<?=$data['allimage'][0]['image'];?>';
  var url ='https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(window.location.href)+'&t='+title+'&img='+img;
  window.open(url, 'FacebookWindow', '');
  return false;
}

 //======================share on twitter=========================//  

 function shareOntwitter() {
   var url ='https://twitter.com/share?url='+ encodeURIComponent(window.location.href)+'&text=Check out this home on Bagpackar!';
   window.open(url, 'TwitterWindow', '');
   return false;
 }
 //====================share on email=======================//

 function SendLinkByMail() {
   var subject= "Check out this home on Bagpackar!";
   var body = "Check out this home on Bagpackar!: "+window.location.href;
   var uri = "mailto:?subject=";
   uri += encodeURIComponent(subject);
   uri += "&body=";
   uri += encodeURIComponent(body);
   window.open(uri);
 }
  //========================copy link========================// 
  function copylink() {
   var dummy = document.createElement('input'),
   text = window.location.href;
   document.body.appendChild(dummy);
   dummy.value = text;
   dummy.select();
   document.execCommand('copy');
   document.body.removeChild(dummy);
   $('#copylink').html('<i class="fa fa-copy" style="font-size:15px;"></i>&nbsp;&nbsp;</i>Link Copied');
 }
   //=================dropdown hide show=======================//
   $('.dropdown-menu.sharing-icon-menu, .pselamountdiv .dropdown-menu, .pselamountdiv .select-tag-daterangepicker').on('click', function (event) {
     event.stopPropagation();
   });
//===============chat message==================//
$('textarea').on('keydown', function(event) {
 if(event.keyCode == 13) {
   if (!event.shiftKey) {
     $('#chat_inputsubmit').click();
   }
 }
});
$('#message').on('keyup',function(){
  $('#message-error').text("");  
})

$("#chat_inputsubmit").on('click', function(event){ 
 var chatStatus = true;
 if ($( "#message" ).val() === "") {
  $('#message-error').text("Please enter msg.");
  chatStatus = false;
}
var message =$("#message").val();
if(message === ""){
  chatStatus = false;
}
if (!chatStatus) {
 event.preventDefault();
} else {
 let guest_id=$('#guest_id').val();
 if(guest_id==""){
  $('#lsfmodal').removeClass('signupopen');
  $('#lsfmodal').removeClass('forgotopen');
  $('#lsfmodal').removeClass('otpopen');
  $('#lsfmodal').addClass('loginopen');
  $('#lsfmodal').modal('show'); 
  return false; 
}
let s_id=parseInt(guest_id);
let r_id=parseInt($('#user_id').val());
let host_id=window.atob($('#host_id').val());
if (s_id==r_id){
  alertify.alert("Host can't msg his own property.", function() {
    window.location="<?php echo base_url();?>";
  });
  return false; 
}
var argument={"s_id":s_id,"r_id":r_id,"msg":message,"action":"","sender_type":"guest","reciver_type":"host","host_id":host_id,"type":"simple"};
$(".loaderCntr").show(); 
var socket = io.connect('https://www.bagpackar.in:3637', {secure: true});
socket.emit('sendMessage', argument);
setTimeout(function(){ $('#message').val('').focus(); }, 1);
$('#message-error').text('');
socket.on("receiveMessage", function(obj){
$(".loaderCntr").hide();
$('#message').text('');
window.location.href = '<?php echo base_url();?>user-chat';  
})



// $.ajax({
//  url: "<?php echo base_url()?>user-msg",
//  type: 'POST',
//  data:argument,
//  success: function(response){  
//    if(response ==1){
//      $('#message').text('');
//      window.location.href = '<?php echo base_url();?>user-chat';
//    }else if(response==0){
//      $(".loaderCntr").hide(); 
//      alertify.notify("Something went wrong",'error', 3)
//      return false; 
//    }
//  }
// });

}
});

</script>