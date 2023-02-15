<style type="text/css">
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

  .linkcolor{
    color: #040404!important;
    text-decoration: none!important;
   }

</style>
<div id="profile_wrapper">
    <div class="profileanother">
      <div class="profilepage_bg" style="background:url('../assets/images/profilebg.png');">
      </div>
      <div class="profile_anotherinnerdiv">
        <div class="profile_section">
          <div class="profilepinfowrapper">
            <span class="profilepimg">
             <?php  $img = $_SESSION['webuser_bgpkr']['image'];
            $name = $_SESSION['webuser_bgpkr']['name'];
           if(!empty($img)){?>
          <img src="<?php echo $img;?>" alt="">
          <?php }else{ ?>
        <div id="p_Image"><?php echo ucfirst($name[0]);?></div>
          <?php } ?>

            </span>
            <span class="profilepinfo">
              <span class="profilepname"> <?=$name;?></span>
              <a href="<?php echo base_url();?>update-profile">View Account Details</a>
            </span>
          </div>
          <div class="booking_status">
              <?php if($monthAmount){
                $amount = 0;
                foreach ($monthAmount as $val) {
                $amount=$amount+$val['paid_amount'];
               $classm = 'fa fa-usd';
               switch($val['paid_amount_currency']) {
                case 'usd':
                $classm='fa fa-usd';
                break;

                case 'inr':
                $classm='fa fa-rupee';
                break;
               }

               } 
               $amounts = 0;
               if ( intval($amount) == $amount ) {
                $amounts = number_format($amount, 0, ".", ",");
               }
               else {
               $amounts = number_format($amount, 2, ".", ",");
               $amounts = rtrim($amount, 0);
              }
              
              ?>

          <i aria-hidden="true" class="<?php echo $classm;?>"></i><?=$amounts;?>
          <span><?php echo count($monthAmount);?> Bookings in <?=date('F');?></span>
             <?php } ?>
          </div>
          <!--profile half start here-->
          <div class="line_stip">
            <span>My Listings</span><span class="line_span"></span>
          </div>
          <div class="profilehalfslider">
           
          <?php if($hostData){
          foreach ($hostData as $key => $value) {
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
           $string[] = ($value['total_bathrooms']>1)? $value['total_bathrooms'].' Bedrooms':$value['total_bathrooms'].' Bedroom';
         }

          $price = $value['paid_amount'];
          $amnt = $value['paid_amount'];
          if ( intval($amnt) == $amnt ) {
              $price = number_format($amnt, 0, ".", ",");
          }
          else {
              $price = number_format($amnt, 2, ".", ",");
              $price = rtrim($price, 0);
          }
         // $price = number_format($value['paid_amount'], 2, '.', ',');
         // $price = preg_replace('/.00/', '', $price);
         $rand = rand(10,100000);
         $showString = implode(', ', $string);
         $pagelink = base_url().'view-property?host='.base64_encode($value['host_id']);
          ?>
          <div class="place_contentwrapper">
          <div class="place_img">
          <div class="place_innerslider">
          <div id="myCarousel_<?php echo $rand;?>" class="carousel slide" data-ride="carousel" data-interval="false">
          <ol class="carousel-indicators">
          <?php for ($i=0; $i <count($allImage) ; $i++) { ?> 
          <li data-target="#myCarousel_<?php echo $rand;?>" data-slide-to="<?php echo $i;?>" class="active"></li>
          <?php } ?>
          </ol>
          <a href="<?php echo $pagelink;?>" class="linkcolor">
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
              <span class="place_heading"><?php echo $value['name_listing'];?>
              </span>
              <span class="place_info"><?php echo $showString;?></span>
              
                
              <?php 
               $class = 'fa fa-usd';
               switch($value['paid_amount_currency']) {
                case 'usd':
                $class='fa fa-usd';
                break;

                case 'inr':
                $class='fa fa-rupee';
                break;
               }
              ?>
              <div class="pay_price">
          <i aria-hidden="true" class="<?php echo $class;?>"></i> <?php echo $price;?>/- <span> paid via Paypal </span>
                </div>
              </a>
                <div class="price_favinfo">
            <a href="javascript:void(0)" class="messagen" value="<?php echo $value['guest_id'];?>">Message Guest</a>
                  <!-- <span class="fav"><i class="fa fa-heart-o" aria-hidden="true"></i></span> -->
                </div>
              </div>
            </div>

          <?php } }else{ ?>
          <div class="notFoundata text_black text-center height200">No Data Found</div>
          <?php } ?>
        </div>
        <!--profile half end here-->
        </div>
        <!--profile half info start here-->
        <div class="profilehalfinfo">
          <div class="profilehalfinfo_header">
            <span class="heading">Pending</span>
            <div class="pending_itemdiv">
            <?php if($pendingBooking){
              $i=1;
                  foreach ($pendingBooking as $valp) {
                  $dat=date('d',strtotime($valp['from_date']));
                  $month=date('M',strtotime($valp['from_date']));
              ?>
              <div id="pending<?=$i?>">
              <span class="section_heading"><?=$valp['name_listing'];?></span>
              <div class="pending_header">
                <span class="date"><?=$month;?> <?=$dat;?></span>
                <span class="accept_dec">
      <button type="button" class="actionbtn" onclick="acceptDeclineBooking('1','<?=$i?>','<?=base64_encode($valp['booking_id'])?>')">Accept</button>
      <button type="button" class="actionbtn" onclick="acceptDeclineBooking('2','<?=$i?>','<?=base64_encode($valp['booking_id'])?>')">Decline</button>
                </span>
              </div>
              <div class="pending_body">
                <table>
                  <tbody>
                    <tr>
                    <td width="150"><i class="fa fa-check" aria-hidden="true"></i> Booking</td>
                      <td width="150"><?=$valp['days'];?> Nights <?=$valp['total_guest'];?> Guests</td>
                      <td width="40">
                        <span class="tdimg">

          <?php if(!empty($valp['user_image'])){?>
          <img src="<?php echo $valp['user_image'];?>" alt="">
          <?php }else{ ?>
        <div class="p_Imagemsg" id="p_Image<?php echo $i;?>"><?php echo ucfirst($valp['name'][0]);?></div>
          <?php } ?>
             
                        </span>
                      </td>
                    <td width="30"><a href="<?php echo base_url();?>user-chat?guestId=<?=base64_encode($valp['guest_id'])?>"><i class="fa fa-comment" aria-hidden="true"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
           <?php $i++; } }else{ ?>
            <div class="notFoundata text_black text-center height200">No Data Found</div>
           <?php } ?>
           </div>
          </div>
          <div class="preser_div">
            <!-- <span class="section_heading">The Pond House</span> -->
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
                      <!-- <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option> -->
                    </select>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="month_list">
                <div class="radio_wrapper">
                  <div class="radioboxdiv">
                    <label for="dayfilter">
                      <input type="radio" name="daymonth" id="dayfilter" value="1" checked>
                      <span> <i></i></span>
                      <span class="radioinfo">
                        Days
                      </span>
                    </label>
                  </div>
                  <div class="radioboxdiv">
                    <label for="monthfilter">
                      <input type="radio" name="daymonth" value="2" id="monthfilter">
                      <span> <i></i></span>
                      <span class="radioinfo">
                        Month
                      </span>
                    </label>
                  </div>
                </div>
                <div class="form_group">
                  <div class="select_tag">
                  <select class="form-control" name="typeList" id="typeList">
                      <option value="1">All Listings</option>
                      <option value="2">Arrival</option>
                      <option value="3">Departure</option>
                    </select>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            
            <!--repeat div start here-->
            <!-- <div id="pdDiv"></div> -->
            <div class="reserlistdiv">
          
            </div>

            <!--repeat div end here-->
            
          </div>
        </div>
        <!--profile half info end here-->
      </div>
    </div>
  </div>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1hKM9oa_2BLZ0IMJIjq6H94PIoaDNuIU&libraries=places"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script> -->
 <script>
  // $('.customDropdown').on('show.bs.dropdown', function () {
  //   $('body').addClass('dropdownopennow');
  // })
  // $('.customDropdown').on('hide.bs.dropdown', function () {
  //   $('body').removeClass('dropdownopennow');
  // })

  function copyoffercode() {
    var copyText = document.getElementById("copythat");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
    
  }
 
 function acceptDeclineBooking(status,dId,id){
    // console.log(status,'---status---',dId,'--sn--',id,'----------bid')
  if(status == 1){
    var msg_str = 'Accept the selected Booking?';
   }else{
    var msg_str = 'Decline the selected Booking?';
   }
     var i = makeid(5);
     alertify.defaults.glossary.title = '';
     alertify.confirm(msg_str,function(e){
        if(e) {
         $.ajax({
                url : '<?php echo base_url()?>web/property/acceptDeclineBooking',
                type:'POST',
                async:false,
                data:{'status':status,'id':id,'genId':i},
                success:function(data){
                  if(data == 1){
                      $('#pending'+dId).remove();
                      filterBooking();
                    }else{
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
      $( document ).ready(function() {
      filterBooking();
      });

      $("#typeList").change(function(){
          filterBooking();
      });
   
      $("#monthyear").change(function(){
          filterBooking();
      });

      $("input[name='daymonth']").change(function(){
          filterBooking();
      });

     function filterBooking(){
      var list = $("#typeList").val();
      var datev = $("#monthyear").val();
      var radio = $("input[name='daymonth']:checked").val();
      $(".loaderCntr").show();
      $.ajax({
                url : '<?php echo base_url()?>web/property/bookingFilter',
                type:'POST',
                async:false,
                data:{'listtype':list,'date':datev,'radiotype':radio},
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

  function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}


 $(document).on('click', '.messagen', function (event) {
    var user_id="<?php echo $_SESSION['webuser_bgpkr']['user_id']?>";
    var host_user_id=$(this).attr("value");
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
         var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed'); });
         return false; 
       }  

     }
   });
  
})


</script>
