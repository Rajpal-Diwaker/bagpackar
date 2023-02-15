 <style type="text/css">
  .show-read-more .more-text{
   display: none;
  } 
 
  .p_Imagemsg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
    font-size: 25px;
    color: #fff;
}
.tdimg {
   background: #ABABAB;
}
</style>
 
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
       <div class="stay_actionbtn">
        <div class="btnsharecopy">
          <a href="<?php echo base_url();?>edit-host?host=<?php echo $_GET['host']?>">
          <button type="button" class="actionbtn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
          <div class="sharesdropdown dropdown">
            <button type="button" class="actionbtn" id="drop2" href="#" data-toggle="dropdown" aria-haspopup="true"
              role="button" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</button>
            <ul class="dropdown-menu sharing-icon-menu text-center" role="menu" aria-labelledby="drop2">
            <li><a href="javascript:void(0);" onclick="SendLinkByMail('<?php echo base64_encode($data['result']['host_id']);?>')">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            &nbsp;&nbsp; Email</a></li>
            <li><a href="javascript:void(0);" onclick="shareOnFB('<?php echo base64_encode($data['result']['host_id']);?>')"><i class="fa fa-facebook-square" aria-hidden="true"></i>
            &nbsp;&nbsp; Facebook</a>
          </li>
          <li><a href="javascript:void(0);" onclick="shareOntwitter('<?php echo base64_encode($data['result']['host_id']);?>')">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
          &nbsp;&nbsp; Twitter</a>
              </li>
            </ul>
          </div>
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
            <form id="calendarUnavailable">
            <span class="staypayheading">Unavailable Dates</span>
            <input type="hidden" class="date" name="date_av">
            <div id="date"></div>
          </form>
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
  </div>
      
</div>
</div>
<span class="dottedline"></span>
  <!-- new added start here -->
  <div class="details_section">
    <span class="staypayheading">About Neighborhood</span>
  <div class="description" id="desThird">
      <?php echo $data['result']['about_neighborhood'];?>
    </div>
  </div>
      
<span class="dottedline"></span>

<div class="profileanother details_section stay-detailpage-user-info">
  <span class="staypayheading">Bookings</span>
 <input type="hidden" id="host" value="<?=$_GET['host'];?>">
 <input type="hidden" id="hostId" value="<?=base64_decode($_GET['host']);?>">
<div class="reser_filterdiv input_field">
<div class="filter_year">
<div class="form_group">
               <div class="select_tag">
                    <select class="form-control" name="monthyear" id="monthyear">
                      <?php 
                      $date=date('Y-m-d');
                      $mY = date('F Y',strtotime($date));
                      for($i=0;$i<12;$i++){
                      ?>
                        <option value="<?=$date;?>"><?php echo $mY;?></option>
                      <?php 
                        $mY = date('F Y',strtotime($date . ' - 1 month'));
                        $date = date('Y-m-d',strtotime($date . ' - 1 month'));
                      } ?>
                     </select>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
               </div>
</div>
</div>
</div>
<div class="reserlistdiv">

</div>
</div>
<span class="dottedline"></span>
        <!-- new added end here -->
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
                <img src="<?php echo $_SESSION['webuser_bgpkr']['image'];?>" alt="">
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
     <!-- map -->
     <span class="dottedline"></span>

      <input type="hidden" id="lat" value="<?php echo $data['result']['lat'];?>">
      <input type="hidden" id="lng" value="<?php echo $data['result']['lng'];?>">
      <div class="reviewrating_div review_wrapper clearfix">
      <span class="heading">Location</span>
      <div id="property_viewmap">
         <div id="hostmap"></div>
    </div>
  </div>
    
   
   <!-- map end -->
    <div class="bdr_review"></div>
    </div>
  </div>

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
  filterBooking();

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
});
//===========payment data================//

$('#animated-thumbnials').lightGallery({
  thumbnail: true,
  selector: '.item_img'
});

//===============payment=====================//
var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
 $('#date').datepicker({
    multidate: true,
    format: 'dd-mm-yyyy',
    startDate: today
  }).on('changeDate', getDate);
  function getDate() {
    var value = $('#date').datepicker('getFormattedDate');
    $("input.date").val(value);

    var hostId = $('#hostId').val();
        var fd = new FormData($("#calendarUnavailable")[0]);
        fd.append('hostId',hostId);
        $(".loaderCntr").show();   
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostCalendar'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
          if(data != false){
            console.log('done');
         }
         }
         });

  }
  
 var calenderDate = "<?php echo $data['result']['unav_date']?>";
  
  var xCalender = calenderDate.split(", ");
  var arrdates = [];
  for (var i = 0; i < xCalender.length; i++) {
   var d = new Date(xCalender[i]),
         month = '' + (d.getMonth() + 1),
         day = '' + d.getDate(),
         year = d.getFullYear();
     if (month.length < 2) month = '0' + month;
     if (day.length < 2) day = '0' + day;
    newDate = day + '-' + month + '-' + year;
    arrdates.push(newDate);
  }
   $('#date').datepicker('setDates',arrdates);

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


function shareOnFB(host_id) {
var host_id=host_id;
var send_url='<?php echo base_url();?>getproperty-detail?'+'host_id='+host_id+'&first_date=&second_date=&adult_count=0&children_count=0&infant_count=0';  
 var title='<?php echo $data['result']['name_listing'];?>';
 var img='<?=$data['allimage'][0]['image'];?>';
 var url ='https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(send_url)+'&t='+title+'&img='+img;
 window.open(url, 'FacebookWindow', '');
 return false;
}


function shareOntwitter(host_id) {
var host_id=host_id;
var send_url='<?php echo base_url();?>getproperty-detail?'+'host_id='+host_id+'&first_date=&second_date=&adult_count=0&children_count=0&infant_count=0';
  var url ='https://twitter.com/share?url='+ encodeURIComponent(send_url)+'&text=Check out this home on Bagpackar!';
  window.open(url, 'TwitterWindow', '');
  return false;
}
function SendLinkByMail(host_id) {
  var host_id=host_id;
var send_url='<?php echo base_url();?>getproperty-detail?'+'host_id='+host_id+'&first_date=&second_date=&adult_count=0&children_count=0&infant_count=0';
  var subject= "Check out this home on Bagpackar!";
  var body = "Check out this home on Bagpackar!: "+send_url;
  var uri = "mailto:?subject=";
  uri += encodeURIComponent(subject);
  uri += "&body=";
  uri += encodeURIComponent(body);
  window.open(uri);
}
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
$('.dropdown-menu.sharing-icon-menu').on('click', function (event) {
  event.stopPropagation();
});


      $("#monthyear").change(function(){
          filterBooking();
      });

     function filterBooking(){
      var host = $('#host').val();
      var list = '1';
      var datev = $("#monthyear").val();
      var radio = '2';
      $(".loaderCntr").show();
      $.ajax({
                url : '<?php echo base_url()?>web/property/viewbookingFilter',
                type:'POST',
                async:false,
                data:{'listtype':list,'date':datev,'radiotype':radio,'host':host},
                success:function(data){
                 $(".loaderCntr").hide();
                 if (data) {
                 $('.reserlistdiv').html(data);
                 }else{
                  var str = '<div class="notFoundata text_black text-center height200">No Data Found</div>';
                  $('.reserlistdiv').html(str);
                 }
                }
         })
     }
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
        zoom: 18,
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

    marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: iconimg,
                title: "Latitude:"+position[0]+" | Longitude:"+position[1]
                });
  }
});
</script>
