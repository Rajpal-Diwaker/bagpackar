
<!--Header End Here-->
<div id="another_wrapper">
  <div class="earnwr singleearnwr">
    <div class="singleearnlistwr"> 
      <span class="earnheading">
        Transactions
      </span>
      <?php if(isset($data) && !empty($data)){ ?> 
        <div class="earnltli">
          <?php foreach ($data as $key => $value) {
           $pricetext=''; 
           if($value['paid_currency']=="INR"){
            $pricetext='fa fa-rupee';
          }else{
            $pricetext='fa fa-usd';
          }
          $price="";
          $price = number_format($value['paid_amount'], 2, '.', ',');
          $price = preg_replace('/\.00/', '', $price);
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
        if($value['total_infant']>1){
         $String[]=$value['total_infant'].' Infants'; 
       }
       else if($value['total_infant']==1){
         $String[]=$value['total_infant'].' Infant'; 
       }else{
        $String[]=''; 
      }
      $show_string = implode(', ', array_filter($String)); 
      ?>
      <div class="earnli">
        <div class="coastdate">
          <span class="earncs"><i class="<?php echo $pricetext;?>">&nbsp;</i><?php echo $price;?></span>
          <span class="earndt"><?php echo date('d',strtotime($value['from_date'])).' '.date('M',strtotime($value['from_date'])).' - '.date('d',strtotime($value['to_date'])).' '.date('M',strtotime($value['to_date']));?></span>
        </div>
        <div class="palcestay">
          <span class="earnpla"><?php echo $value['name_listing'];?></span>
          <span class="earnsta"><?php echo $show_string;?> </span>
        </div>
      </div>
    <?php } ?>
  </div>
<?php } else { ?>
  <div class="notFoundata text_black">No Data Found</div>
<?php } ?> 
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

