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
        <?php $con = !empty($hostData)?count($hostData):0; ?>
          <input type="hidden" id="pcount" value="<?=$con?>">
        <span class="result_count" id="reCount">
          <?php if ($con>1) {
             echo $con." Properties";
           }else{
             echo $con.' Property';
           }
          ?>
           
        </span>
        <div class="stagging_listwrapper">
         <?php if($hostData){
          $pc = 1;
          foreach ($hostData as $key => $value) {
            //echo base64_encode($value['host_id']);die;
           $allImage=[];
           
          $allImage[]=@$value['bedimage']?$value['bedimage']:base_url().'assets/images/mainstay.png';
           
          $allImage[]=@$value['kitimage']?$value['kitimage']:base_url().'assets/images/mainstay.png';
           
          $allImage[]=@$value['bathimage']?$value['bathimage']:base_url().'assets/images/mainstay.png';
            
          $allImage[]=@$value['otherimage']?$value['otherimage']:base_url().'assets/images/mainstay.png';
           
         // echo'<pre>';print_r($allImage);die;
         // 4 Guests , 2 Bedroom , 1 Vehicle , Kitchen 2 Bathroom
         $string = [];
         
         if (@$value['total_guest']) {
           $string[] = ($value['total_guest']>1)? $value['total_guest'].' Guests':$value['total_guest'].' Guest';
         }

         
          if (@$value['total_bedrooms']) {
            $string[] = ($value['total_bedrooms']>1)? $value['total_bedrooms'].' Bedrooms':$value['total_bedrooms'].' Bedroom';
          }
         // $string[] = @$value['vehicle_id']? 'Vehicle':'';

         if (@$value['kitimage']) {
           $string[] = 'Kitchen'; 
         }

         if (@$value['total_bathrooms']) {
           $string[] = ($value['total_bathrooms']>1)? $value['total_bathrooms'].' Bathrooms':$value['total_bathrooms'].' Bathroom';
         }
         $rand = rand(10,100000);
         $showString = implode(', ', $string);
         $showString=@$showString?$showString:'0 Guset, 0 Bedroom, 0 Kitchen, 0 Bathroom';

         $price = $value['base_price'];
          $amnt = $value['base_price'];
          if ( intval($amnt) == $amnt ) {
              $price = number_format($amnt, 0, ".", ",");
          }
          else {
              $price = number_format($amnt, 2, ".", ",");
              $price = rtrim($price, 0);
          }
           $pagelink = '#';
             //base_url().'edit-host?host='.base64_decode($value['host_id']);

             if($value['is_complete'] == '1'){ 
              $pagelink = base_url().'view-property?host='.base64_encode($value['host_id']);
             }else{
              $pagelink = base_url().'incomplete-property?host='.base64_encode($value['host_id']);
             } ?>
          
          <div class="place_contentwrapper" id="property<?=$pc;?>">
          <div class="place_img">
          <div class="place_innerslider">
          <div id="myCarousel_<?php echo $rand;?>" class="carousel slide" data-ride="carousel" data-interval="false">
          <ol class="carousel-indicators">
          <?php for ($i=0; $i <count($allImage) ; $i++) { ?> 
          <li data-target="#myCarousel_<?php echo $rand;?>" data-slide-to="<?php echo $i;?>" class="active"></li>
          <?php } ?>
          </ol>
          <a href="<?php echo $pagelink;?>">
          <div class="carousel-inner">
          <?php if(!empty($allImage)){
          for ($i=0; $i <count($allImage) ; $i++) { 
          if($i==0){ ?>
          <div class="item active place_innersliderimg">
          <img src="<?php echo $allImage[$i];?>" alt="">
          </div>
          <?php } else { ?>
          <div class="item place_innersliderimg">
          <img src="<?php echo $allImage[$i];?>" alt="">
          </div>
          <?php } } } ?>
          </div>
          </a>
          </div>
          <a class="left carousel-control" href="#myCarousel_<?php echo $rand;?>" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          </a>
          <a class="right carousel-control" href="#myCarousel_<?php echo $rand;?>" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          </a>
          </div>
          <span class="img_bottombg"></span>
          </div>
            <a href="<?php echo $pagelink;?>" class="linkcolor">
            <div class="place_divider">
              <img src="<?php echo base_url();?>assets/images/strip_bg.png" alt="">
            </div>
           </a>
          <div class="place_content">
            <a href="<?php echo $pagelink;?>" class="linkcolor">
            <span class="place_heading"><?php $nstr=@$value['name_listing']?$value['name_listing']:'New Property'; echo $nstr;?>
              </span>
              <span class="place_info"><?php echo $showString;?></span>
              

              <div class="rating_div">
                <?php for($k=1;$k<=5;$k++){
                   if ($value['rating']>=$k) {
                ?>
                <i class="fa fa-star rating_yes" aria-hidden="true"></i>
              <?php }else{ ?>
                <i class="fa fa-star" aria-hidden="true"></i>
                <?php } }
               $class = 'fa fa-usd';
               switch($value['currency']) {
                case 'Dollar':
                $class='fa fa-usd';
                break;

                case 'Rupees':
                $class='fa fa-rupee';
                break;
               }
              ?>
              </div>
            </a>

              <div class="price_favinfo">
                <a href="<?php echo $pagelink;?>" class="linkcolor">
               <span class="pricetext"><i aria-hidden="true" class="<?php echo $class;?>"></i> <?php echo $price;?>/night
                </span>
              </a>
              <?php if($value['is_complete'] == '0'){ ?> 
              <a href="<?php echo $pagelink;?>" class="linkcolor">
              <span class="form_error"><?php echo '(  Incomplete  )';?></span></a><?php }else{ 
               if($value['is_approve'] == '0'){ ?> 
               <a href="<?php echo $pagelink;?>" class="linkcolor"><span><?php echo '( Pending )';?></span> </a>
              <?php } } ?>
              <i class="fa fa-trash fa-lg" aria-hidden="true" onclick="trashplace('<?php echo base64_encode($value['host_id'])?>','<?=$pc;?>')" title="Delete" style="cursor:pointer;"></i>
              <!-- <span class="fav"><i class="fa fa-heart-o" aria-hidden="true"></i></span> -->
              </div>
              </div>
            
            </div>
        <?php $pc++; } }else{ ?>
          <div class="notFoundata text_black text-center">No Data Found</div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<!--   <script src="<?php echo base_url();?>assets/js/script.js"></script>
<script src='<?php echo base_url();?>assets/js/vue.min.js'></script>
<script src="<?php echo base_url();?>assets/js/price.js"></script> -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1hKM9oa_2BLZ0IMJIjq6H94PIoaDNuIU&libraries=places"></script> -->

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
function trashplace(placeId,pno){
  alertify.defaults.glossary.title = '';
     alertify.confirm('Are you sure want to delete this property?',function(e){
        if(e) {
         $.ajax({
                url : '<?php echo base_url()?>web/property/trashUserProperty',
                type:'POST',
                async:false,
                data:{'id':placeId},
                success:function(data){
                  if(data == 1){
                      var cn = parseInt($('#pcount').val())-1;
                      var str = '';
                      if (cn>1) {
                          str = cn+' Properties';
                      }else{
                          str = cn+' Property';
                      }
                      $('#reCount').html(str);
                      $('#pcount').val(cn)
                      $('#property'+pno).remove();
                    }else if(data == 2){
                      alertify.alert("You can't delete this property").setHeader('');
                    }
                    else{
                      alertify.alert('Something went wrong').setHeader('');
                    }
                }
         })
        return true;
        }
        else {
            return false;
           }  
            });
}
</script>


