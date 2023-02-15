<!-- <div class="dashboard_data_wrap">
<h2 style="text-align:center;">Coming Soon</h2>
</div> -->
<div class="dashboard_data_wrap">
    <div class="dahaboard_heading">
      <span>Dashboard</span>
    </div>  
	<div class="row dashboard-section-wr">
	   <a href="#" class="col-md-4">
	      <div class="total-div">
		  <i class="fa fa-user" aria-hidden="true"></i>
	      <h2>Total Users</h2>
		  <h3> <?=$all_bgpkr_users;?> </h3>
		  </div>
	   </a>
	   <a href="#" class="col-md-4">
          <div class="total-div">
		   <i class="fa fa-building" aria-hidden="true"></i>
	      <h2>Total Properties</h2>
		  <h3><?=$properties;?></h3>	

		  </div>
	   </a>
	   <a href="#" class="col-md-4">
	      <div class="total-div">
		  <i class="fa fa-cart-plus" aria-hidden="true"></i>
	      <h2>Total Bookings</h2>
		  <h3><?=$booking;?></h3>

		  </div>
	   </a>
	  <a href="#" class="col-md-4">
	      <div class="total-div">
		   <i class="fa fa-building" aria-hidden="true"></i>
	       <h2>Total Requested Property </h2>
		  <h3><?=$req_properties;?></h3>
		  </div>
	   </a>
	   <a href="#" class="col-md-4">
          <div class="total-div">
		  <i class="fa fa-money" aria-hidden="true"></i>
	      <h2>Total Earned Amount</h2>
		  <h3><i class="fa fa-inr" aria-hidden="true" style="font-size: 16px;"></i><?=$earning['rupee'];?> & <i class="fa fa-usd" aria-hidden="true" style="font-size: 16px;"></i><?=$earning['dollar'];?></h3>
		  </div>
	   </a>
	</div>
</div>