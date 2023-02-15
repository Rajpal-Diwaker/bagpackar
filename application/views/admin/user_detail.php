<div class="dashboard_data_wrap">
  <div class="dahaboard_heading">
    <span>User Detail</span>   
  </div>
  <!-- terms & condition Section Start Here-->
  <div class="inners_pages">
   <div class="col-md-12 col-sm-12">
     <label>Image</label>
     <div class="uploadimage_div">
       <?php if(!empty($data['user_image'])){ ?>
         <img  src="<?php echo $data['user_image'];?>" alt="">
       <?php }else{ ?>
        <div class="profileifnotImage"><?php echo ucfirst($data['name'][0]);?>  
      </div>
    <?php } ?> 
  </div>
</div>
<div class="col-md-12 col-sm-12">
 <label>Name</label>
 <p><?php echo $data['name'];?></p>
</div>
<div class="col-md-12 col-sm-12">
 <label>Email</label>
 <p><?php echo $data['email'];?></p>
</div>
<div class="col-md-12 col-sm-12">
 <label>Phone No</label>
 <p><?php echo $data['country_code'].'-'.$data['phone'];?></p>
</div>
<div class="col-md-12 col-sm-12">
 <label>DOB</label>
 <p><?php echo $data['dob'];?></p>
</div>
</div>
<!-- terms & condition Section End Here-->
</div>