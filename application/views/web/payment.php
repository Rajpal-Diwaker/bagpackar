<style type="text/css">
  
    .modal-confirm .modal-content {
      padding: 20px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
    }
    .modal-confirm .modal-header {
      background: #000;
      border-bottom: none;   
      position: relative;
      text-align: center;
      margin: -20px -20px 0;
      border-radius: 5px 5px 0 0;
      padding: 35px;
    }
    .modal-confirm h4 {
      text-align: center;
      font-size: 36px;
      margin: 10px 0;
	  color: #000;
    }
    .modal-confirm .close:hover {
      opacity: 0.8;
    }
    .modal-confirm .icon-box {
      color: #fff;    
      width: 95px;
      height: 95px;
      display: inline-block;
      border-radius: 50%;
      z-index: 9;
      border: 5px solid #fff;
      padding: 15px;
      text-align: center;
    }
    .modal-confirm .icon-box i {
      font-size: 64px;
      margin: -4px 0 0 -4px;
    }
	.modal-confirm p{
		color:#ccc;
	    margin-bottom: 30px;
	}
    .modal-confirm .actionbutton {
        font: 13px 'Manrope';
		font-weight: 500!important;
		color:#fff;
		background: #000;
		border: 1px solid #000000;
		border-radius: 30px;
		padding: 10px;
		-webkit-transition: all 400ms linear;
		transition: all 400ms linear;
		outline: none;
        min-width: 153px;
        display: inline-block;
    }
</style>
<div id="another_wrapper">
  <section class="preview_booking prevselpay">
    <div class="prevselpayheader">
      <?php 
      $string = [];
      $string[] = @$data['total_guest']?(($data['total_guest']>1)? $data['total_guest'].' Guests':$data['total_guest'].' Guest'):'';

      $string[] = @$data['total_bedrooms']?(($data['total_bedrooms']>1)? $data['total_bedrooms'].' Bedrooms':$data['total_bedrooms'].' Bedroom'):'';
      $string[] = @$data['kitimage']? '1 Kitchen':'';
      $string[] = @$data['total_bathrooms']?(($data['total_bathrooms']>1)? $data['total_bathrooms'].' Bathrooms':$data['total_bathrooms'].' Bedroom'):'';
      $showString = implode(', ', $string);
      ?>
      <h1><?php echo $data['name_listing'];?></h1>
      <p><?php echo $showString?></p>
    </div>
    <div class="person_dayselect">
      <div class="pinfowr">
        <span class="pdat"><?php echo date("M", strtotime($first_date));?><span><?php echo date("j", strtotime($first_date));?></span>
      </span>
      <span class="pinfo"><?php echo date("l", strtotime($first_date));?> check-in<span><?php echo $_SESSION['host_data']['checkin_from'];?></span>
    </span>
  </div>  
  <div class="pinfowr">
    <span class="pdat"><?php echo date("M", strtotime($second_date));?><span><?php echo date("j", strtotime($second_date));?></span>
  </span>
  <span class="pinfo"><?php echo date("l", strtotime($second_date));?> check-out<span><?php echo $_SESSION['host_data']['checkout_to'];?></span>
</span>
</div>
<div class="pinfowr">
  <?php 
  $Guests = [];
  if($adult_count>1){
   $Guests[]=$adult_count.' Adults'; 
 }
 else if($adult_count==1){
   $Guests[]=$adult_count.' Adult'; 
 }else{
  $Guests[]=''; 
}
if($children_count>1){
 $Guests[]=$children_count.' Childrens'; 
}
else if($children_count==1){
 $Guests[]=$children_count.' Children'; 
}else{
  $Guests[]=""; 
}
if($infant_count>1){
 $Guests[]=$infant_count.' Infants'; 
}
else if($infant_count==1){
  $Guests[]=$infant_count.' Infant'; 
}else{
  $Guests[]=""; 
}
 $showGuest = implode(', ', array_filter($Guests));
?>
<span class="pdat"><?php echo $All_guest?></span>
<span class="pinfo">Guests<span><?php echo $showGuest;?></span>
</span>
</div>
</div>
<div class="pselect_wr">
  <div class="thinkingmind">
    <span class="heading">Things to keep in mind</span>
    <?php if(!empty($data['safty_amenities'])){ ?>
    <p><?php echo $data['safty_amenities'];?></p>
    <?php } else{ ?>
    <p>The host hasn't reported smoke or carbon monoxide detectors on the property.</p>
    <?php } ?>
    <ul class="thinkingmindli list-unstyled">
      <?php if($data['suitable_child']=='1'){ ?>
      <li>Suitable for children</li>
      <?php } if($data['suitable_infants']=='1'){ ?> 
      <li>Suitable for children</li>
      <?php } if($data['suitable_pets']=='1'){ ?>
      <li>Pets allowed</li>
      <?php } if($data['allow_smoking']=='1'){ ?> 
      <li>Smoking allowed</li>
      <?php } if($data['allow_parties']=='1'){ ?>
     <li>Parties and events allowed</li>
      <?php } ?>
    </ul>
  </div>
<?php  
if($data['currency']=="Rupees"){
$pricetext='fa fa-rupee'; 
}else{
$pricetext='fa fa-usd'; 
}  
?>
 <div class="pselectbasesamount">
  <div class="pselamountdiv">
    <span class="pselhead"> Booking Amount</span>
    <span class="pselam">  <span class="<?php echo $pricetext;?>"> <?php echo $booking_amount;?></span>
  </div>
  <div class="pselamountdiv">
    <span class="pselhead">Service fee </span>
    <span class="pselam">  <span class="<?php echo $pricetext;?>"> <?php echo $cleaning_fee;?></span>
  </div>
  <?php if ($discount>0){?>
   <div class="pselamountdiv">
    <span class="pselhead">Discount </span>
    <span class="pselam">  <span class="<?php echo $pricetext;?>"> <?php echo $discount;?></span>
   </div>
   <?php } ?>
  <div class="pselamountdiv fammedium">
    <span class="pselhead">Total</span>
    <span class="pselam"> <span class="<?php echo $pricetext;?>"> <?php echo $total_amount;?></span>
  </div>
  <!--<a href="<?php echo base_url();?>payment" class="btn_style" id="payemenbtn">ACCEPT & CONTINUE</a>-->
  <div class="fnpaymentbtn">
  <form id="payment_form" method="POST">
  <script
  src="https://checkout.stripe.com/checkout.js" 
  class="stripe-button"
  data-key="pk_test_obhumbo6FxjJfcCing2oWZYN00OAkVxRPg"
  data-image="https://bagpackar.com/assets/images/fav.png"
  data-name="bagpackar.com"
  data-description="Bagpackar"
  data-amount="<?php echo $stripe_amount;?>"
  data-label="Proceed to Pay"
  data-currency="<?php echo $currency;?>"
  data-locale="auto"
  data-email="<?php echo $_SESSION['webuser_bgpkr']['email'];?>">
</script>
</form>
</div>
</div>
</div>
<span class="dottedline"></span>
</section>
</div>
<script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
<script>
  window.onbeforeunload = function(e) {
   $(".loaderCntr").show(); 
 }
 $('#payemenbtn').on('click',function(){
	 $('button.stripe-button-el')
 })
var form = document.getElementById('payment_form');
form.submit = function() {
 $(".loaderCntr").show();   
var data = $(this).serializeArray();
 $.ajax({
    type: 'POST',
    url: '<?php echo base_url();?>payment_process',
     data:data,
    success: function(response){
    $(".loaderCntr").hide();   
    if(response==1){
    $('#confirmpopup').modal('show');
    }if(response==0){
    $('#declinepopup').modal('show');
    }
    if(response==2){
    $('#declinepopup1').modal('show');
    }   
    }
  });
}
</script>
  <div id="confirmpopup" class="modal fade  modal-confirm" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="icon-box">
           <i class="fa fa-check" aria-hidden="true"></i>
          </div>
        </div>
        <div class="modal-body text-center">
          <h4>Great!</h4> 
          <p>Your transaction has been completed successfully.</p>
          <a href="<?php echo base_url();?>reservation" class="actionbutton">Click to proceed</a>
        </div>
      </div>
    </div>
  </div> 


<div id="declinepopup" class="modal fade  modal-confirm" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                   <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <h4>Ooops!</h4> 
                <p>Your transaction has been failed. Please try again!</p>
               <a href="<?php echo base_url();?>payment" class="actionbutton">Click to proceed</a>
            </div>
        </div>
    </div>
</div>

<div id="declinepopup1" class="modal fade  modal-confirm" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                   <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <h4>Ooops!</h4> 
                <p>Something went wrong. Please try again!</p>
               <a href="<?php echo base_url();?>payment" class="actionbutton">Click to proceed</a>
            </div>
        </div>
    </div>
</div>