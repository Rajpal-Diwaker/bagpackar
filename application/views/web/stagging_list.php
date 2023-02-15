<!--Header End Here-->
<!--filter start here-->
<style type="text/css">
.gm-style-iw > button {
display: none !important;
}
</style>
<input type="hidden" id="page" value="2">
<link href="<?php echo base_url();?>assets/css/price.css" rel="stylesheet" type="text/css">
<?php $checkLogin=@ $_SESSION[ 'webuser_bgpkr'][ 'user_id']?$_SESSION[ 'webuser_bgpkr'][ 'user_id']:0; if($checkLogin!=0){?>
<input type="hidden" id="user_id" value="<?php echo $checkLogin;?>">
<?php } else { ?>
<input type="hidden" id="user_id" value="0">
<?php } ?>
<input type="hidden" id="location" value="<?php echo $location;?>">
<div class="top_filterdiv mobileviewshow">
<div class="filter_mapbtn">
<button type="button" id="mobfilterview" class="actionbtn"><i class="fa fa-filter" aria-hidden="true"></i>More Filter</button>
<button type="button" data-item="mapview" class="actionbtn" id="mapviewbtn"><i class="fa fa-map" aria-hidden="true"></i>Map view</button>
</div>
</div>
<div class="mobile_filter">
<div class="mobile_filter_header">
<a href="" id="filterback"> Back</a>
<a href=""> Clear</a>
</div>
<div class="mobile_filter_box containerbox">
<div class="top_filterdiv topbox clearfix">
<div class="anotheractionbtn">
<span class="customdropdown datedropdown">
<button type="button" data-item="calenderopen" class="actionbtn" id="getshow"><i class="fa fa-calendar"
aria-hidden="true"></i>Add dates</button>
<div class="customdropdownbox">
<span class="filterheading">Select Date </span>
<input id="daterangepicker1" type="hidden">
<div class="datepicker_dropdownwrapper">
<div id="daterangepicker1-container" class="embedded-daterangepicker"></div>
<span id="daterangepicker_error" class="form_error"></span>
</div>
<input type="hidden" id="first_date">
<input type="hidden" id="second_date">
</div>
</span>
<span class="customdropdown">
<button type="button" data-item="guestopen" class="actionbtn" id="guest_button"><i class="fa fa-users"
aria-hidden="true"></i>Add guests</button>
<div class="customdropdownbox">
<span class="filterheading">Select Guest </span>
<div class="guest_dropdownwrapper">
<div class="guest_dropdown">
<span class="labels">
Adults <span>Ages 13+</span>
</span>
<div class="number_input_box">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_adult">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
</svg>
</button>
<input type="number" name="adult_count" id="adult_count" min="0" max="16" autocomplete="off">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_adult">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
<rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
<div class="guest_dropdown">
<span class="labels">
Children <span>Ages 2–12</span>
</span>
<div class="number_input_box">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_children">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
</svg>
</button>
<input type="number" name="children_count" id="children_count" min="0" max="5" autocomplete="off">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_children">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
<rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
<div class="guest_dropdown">
<span class="labels">
Infants <span>Under 2</span>
</span>
<div class="number_input_box">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_infant">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
</svg>
</button>
<input type="number" name="infant_count" id="infant_count" min="0" autocomplete="off" max="5">
<button type="button" class=" numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_infant">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
<rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
</div>
<div class="customdropdownfooter">
<button class="btn_style btn_cancel" id="guest_cancel">Clear</button>
<button class="btn_style" id="guest_apply">Apply</button>
</div>
</div>
</span>
<span class="customdropdown entire_Placedrop">
<button type="button" data-item="entireplace" class="actionbtn"><i class="fa fa-home"
aria-hidden="true"></i>Entire Place
</button>
<input type="hidden" id="priceapply" value="0">
<div class="customdropdownbox">
<span class="filterheading">Select Price </span>
<div class="entire_Place">
<div class="checkboxdiv">
<label for="entireplace">
<input type="checkbox" name="entireplace" id="entireplace">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)"></path>
</svg>
</span>
<span class="checkinfo">
Entire place
<small> Have a place to yourself</small>
</span>
</label>
</div>
<div class="checkboxdiv">
<label for="hotelroom">
<input type="checkbox" name="hotelroom" id="hotelroom">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)"></path>
</svg>
</span>
<span class="checkinfo">
Hotel room
<small>Have a private or shared room in a boutique hotel, hostel, and more</small>
</span>
</label>
</div>
</div>
<div class="customdropdownfooter">
<button class="btn_style btn_cancel" id="place_cancel">Clear</button>
<button class="btn_style" id="place_apply">Apply</button>
</div>
</div>
</span>
<span class="customdropdown">
<?php $guest_country=(!empty($this->session->userdata('guest_country')))?$this->session->userdata('guest_country'):'USA';
if($guest_country=="India"){
$pricetext="fa fa-rupee";
}else{
$pricetext="fa fa-usd";
}?>

<button type="button" data-item="priceopen" class="actionbtn"><i class="<?php echo $pricetext;?>"
aria-hidden="true"></i>Price
</button>
<div class="customdropdownbox">
<span class="filterheading">Select Price </span>
<div class="price_dropdownwrapper">
<div id="histogramSlider"></div>
<div class="priceinput">
<div class="priceinput_field">
<input type="number" id="min_price" oninput="this.value = Math.abs(this.value)" max="1000"> <i class="<?php echo $pricetext;?>"></i>
</div> <span> - </span>
<div class="priceinput_field">
<input type="number" id="max_price" oninput="this.value =Math.abs(this.value)+'+'"> <i class="<?php echo $pricetext;?>"></i>
</div>
</div>
</div>
<div class="customdropdownfooter">
<button class="btn_style btn_cancel" id="price_cancel">clear</button>
<button class="btn_style" id="price_apply">Apply</button>
</div>
</div>
</span>
</div>
<div class="filter_mapbtn">
<button type="button" data-item="filterview" class="actionbtn"><i class="fa fa-filter" aria-hidden="true"></i>Filter</button>
<button type="button" data-item="mapview" class="actionbtn" id="mapviewbtn"><i class="fa fa-map" aria-hidden="true"></i>Map view</button>
</div>
</div>
<!--filter box start here-->
<div class="filter_box">
<div class="filter_header">
<span class="filterheading">
Refine your search Results
</span>
<button type="button" class="actionbtn" id="morefilter">View All Filters</button>
</div>
<div class="filter_body input_field">
<div class="col-md-6 col-xs-12 nopad">
<div class="form_group">
<div class="guest_dropdown">
<span class="labels">
Beds
</span>
<div class="number_input_box">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_beds">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
</svg>
</button>
<input type="number" name="beds_count" id="beds_count" min="0" max="16" autocomplete="off">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_beds">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
<rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
</div>
<div class="form_group">
<div class="guest_dropdown">
<span class="labels">
Bedrooms
</span>
<div class="number_input_box">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" id="less_bedrooms">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
</svg>
</button>
<input type="number" name="bedrooms_count" id="bedrooms_count" min="0" max="16" autocomplete="off">
<button type="button" class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" id="more_bedrooms">
<svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 22px; width: 22px; display: block; fill: currentcolor;">
<rect height="2" rx="1" width="12" x="6" y="11"></rect>
<rect height="12" rx="1" width="2" x="11" y="6"></rect>
</svg>
</button>
</div>
</div>
</div>
</div>
<div class="more_filter" style="display: inline-block;
width: 100%;">
<div class="more_filterinner" style="display:none;">
<!--repeat div start here-->
<div class="col-md-12 col-xs-12 nopad">
<div class="filter_bodyinner">
<span class="filterheading">
Amenities
</span>
<div class="checkboxwrapper">
<!--checkbox repeat start here-->
<div class="checkboxdiv">
<label for="Microwave_oven">
<input type="checkbox" id="Microwave_oven" value="15" class="kitchen_dining">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Microwave Oven
</span>
</label>
</div>
<!--checkbox repeat end here-->
<div class="checkboxdiv">
<label for="Toaster">
<input type="checkbox" id="Toaster" class="kitchen_dining" value="16">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Toaster
</span>
</label>
</div>
<div class="checkboxdiv">
<label for="Blender">
<input type="checkbox" id="Blender" class="kitchen_dining" value="17"> <span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Blender
</span>
</label>
</div>
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Coffee_Maker">
<input type="checkbox" id="Coffee_Maker" class="kitchen_dining" value="18"> <span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Coffee Maker
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Fridge">
<input type="checkbox" id="Fridge" class="kitchen_dining" value="19"> <span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Fridge
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Stove">
<input type="checkbox" id="Stove" class="kitchen_dining" value="20"> <span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Stove
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Dishes">
<input type="checkbox" id="Dishes" class="kitchen_dining" value="21">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Dishes
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Utensils">
<input type="checkbox" id="Utensils" class="kitchen_dining" value="22">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Utensils
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Tea">
<input type="checkbox" id="Tea" class="kitchen_dining" value="23">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Tea
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Spices">
<input type="checkbox" id="Spices" class="kitchen_dining" value="24">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Spices
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Oil">
<input type="checkbox" id="Oil" class="kitchen_dining" value="25">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Oil
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Pan">
<input type="checkbox" id="Pan" class="kitchen_dining" value="26">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Pan
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Bath_Tub">
<input type="checkbox" id="Bath_Tub" class="bed_baths" value="27">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Bath Tub
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Jacuzzi">
<input type="checkbox" id="Jacuzzi" class="bed_baths" value="28">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Jacuzzi
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Shampoo">
<input type="checkbox" id="Shampoo" class="bed_baths" value="30">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Shampoo
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Hair_Dryer">
<input type="checkbox" id="Hair_Dryer" class="bed_baths" value="31">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Hair Dryer
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Linens">
<input type="checkbox" id="Linens" class="bed_baths" value="32">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Linens
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Closet">
<input type="checkbox" id="Closet" class="bed_baths" value="33">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Closet
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for=" Cupboard">
<input type="checkbox" id="Cupboard" class="bed_baths" value="34">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Cupboard
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Extra_Pillow">
<input type="checkbox" id="Extra_Pillow" class="bed_baths" value="35">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Extra Pillow
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Blankets">
<input type="checkbox" id="Blankets" class="bed_baths" value="36">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Blankets
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Television">
<input type="checkbox" id="Television" class="entertainment" value="37">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Television
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Satellite">
<input type="checkbox" id="Satellite" class="entertainment" value="38">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Satellite
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Cable">
<input type="checkbox" id="Cable" class="entertainment" value="39">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Cable
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Stereo">
<input type="checkbox" id="Stereo" class="entertainment" value="40">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Stereo
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="DVD_Player">
<input type="checkbox" id="DVD_Player" class="entertainment" value="41">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
DVD Player
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Books">
<input type="checkbox" id="Books" class="entertainment" value="42">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Books
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Board_Games">
<input type="checkbox" id="Board_Games" class="entertainment" value="43">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Board Games
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for=" Music">
<input type="checkbox" id=" Music" class="entertainment" value="44">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Music
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Playstation">
<input type="checkbox" id="Playstation" class="entertainment" value="45">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Playstation
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="XBOX">
<input type="checkbox" id="XBOX" class="entertainment" value="46">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
XBOX
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="BBQ_Grill">
<input type="checkbox" id="BBQ_Grill" class="outside_amenities" value="47">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
BBQ Grill
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Fontyard">
<input type="checkbox" id="Fontyard" class="outside_amenities" value="48">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Fontyard
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Backyard">
<input type="checkbox" id="Backyard" class="outside_amenities" value="49">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
<path class="a"
d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
Backyard
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Patio">
<input type="checkbox" id="Patio" class="outside_amenities" value="50">
<span>
<svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
</span>
<span class="checkinfo">
 Patio
</span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Balcony">
<input type="checkbox" id="Balcony" class="outside_amenities" value="51">
<span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Balcony
 </span>
</label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
<label for="Deck">
 <input type="checkbox" id="Deck" class="outside_amenities" value="52">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Deck
 </span>
 </label>
</div>
<!--repeat div end here-->
<!-- amenties checkbox -->
<div class="checkboxdiv">
 <label for="Outdoor_Pool">
 <input type="checkbox" id="Outdoor_Pool" class="outside_amenities" value="53">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Outdoor Pool
 </span>
 </label>
 </div>
 <!--repeat div end here-->
 <!-- amenties checkbox -->
 <div class="checkboxdiv">
 <label for="Private_Pool">
 <input type="checkbox" id="Private_Pool" class="outside_amenities" value="54">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Private Pool
 </span>
 </label>
 </div>
 <!--repeat div end here-->
 <!-- amenties checkbox -->
 <div class="checkboxdiv">
 <label for="Outside_Chair">
 <input type="checkbox" id="Outside_Chair" class="outside_amenities" value="56">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Outside Chair
 </span>
 </label>
 </div>
 <!--repeat div end here-->
 </div>
 </div>
</div>
<!-- property filter -->
<div class="col-md-12 col-xs-12 nopad">
 <div class="filter_bodyinner">
 <span class="filterheading">
 Property type
 </span>
 <div class="checkboxwrapper">
 <!--checkbox repeat start here-->
 <div class="checkboxdiv">
 <label for="Flat">
 <input type="checkbox" class="property_type" value="Flat" id="Flat">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Flat
 </span>
 </label>
 </div>
 <!--checkbox repeat end here-->
 <div class="checkboxdiv">
 <label for="Apartment">
 <input type="checkbox" class="property_type" value="Apartment" id="Apartment">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Apartment
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Condominium">
 <input type="checkbox" class="property_type" value="Condominium" id="Condominium">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Condominium
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Serviced_Apartment">
 <input type="checkbox" class="property_type" value="Serviced Apartment" id="Serviced_Apartment">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Serviced Apartment
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Townhouse">
 <input type="checkbox" class="property_type" value="Townhouse" id="Townhouse">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Townhouse
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Farmhouse">
 <input type="checkbox" class="property_type" value="Farmhouse" id="Farmhouse">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Farmhouse
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Bungalow">
 <input type="checkbox" class="property_type" value="Bungalow" id="Bungalow">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Bungalow
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="House">
 <input type="checkbox" class="property_type" value="House" id="House">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 House
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Villa">
 <input type="checkbox" class="property_type" value="Villa" id="Villa">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Villa
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Barn">
 <input type="checkbox" class="property_type" value="Barn" id="Barn">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Barn
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Boat_houses">
 <input type="checkbox" class="property_type" value="Boat houses" id="Boat_houses">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Boat houses
 </span>
 </label>
 </div>
 <!--checkbox repeat end here-->
 <div class="checkboxdiv">
 <label for="Bus_House">
 <input type="checkbox" class="property_type" value="Bus House" id="Bus_House">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Bus House
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Camper">
 <input type="checkbox" class="property_type" value="Camper" id="Camper">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Camper
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="RV">
 <input type="checkbox" class="property_type" value="RV" id="RV">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 RV
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Campsite">
 <input type="checkbox" class="property_type" value="Campsite" id="Campsite">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Campsite
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Castle">
 <input type="checkbox" class="property_type" value="Castle" id="Castle">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Castle
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Cave">
 <input type="checkbox" class="property_type" value="Cave" id="Cave">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Cave
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Dome">
 <input type="checkbox" class="property_type" value="Dome" id="Dome">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Dome
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Igloo">
 <input type="checkbox" class="property_type" value="Igloo" id="Igloo">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Igloo
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Plane">
 <input type="checkbox" class="property_type" value="Plane" id="Plane">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Plane
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Tent">
 <input type="checkbox" class="property_type" value="Tent" id="Tent">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Tent
 </span>
 </label>
 </div>
 <!--checkbox repeat end here-->
 <div class="checkboxdiv">
 <label for="Train">
 <input type="checkbox" class="property_type" value="Train" id="Train">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Train
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Tree">
 <input type="checkbox" class="property_type" value="Tree" id="Tree">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Tree
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Windmill">
 <input type="checkbox" class="property_type" value="Windmill" id="Windmill">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Windmill
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Yurt">
 <input type="checkbox" class="property_type" value="Yurt" id="Yurt">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Yurt
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Hut">
 <input type="checkbox" class="property_type" value="Hut" id="Hut">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Hut
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Boutique_hotel">
 <input type="checkbox" class="property_type" value="Boutique hotel" id="Boutique_hotel">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Boutique hotel
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Aparthotel">
 <input type="checkbox" class="property_type" value="Aparthotel" id="Aparthotel">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Aparthotel
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Hostel">
 <input type="checkbox" class="property_type" value="Hostel" id="Hostel">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Hostel
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Hotel">
 <input type="checkbox" class="property_type" value="Hotel" id="Hotel">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Hotel
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Lodge">
 <input type="checkbox" class="property_type" value="Lodge" id="Lodge">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Lodge
 </span>
 </label>
 </div>
 <!--checkbox repeat end here-->
 <div class="checkboxdiv">
 <label for="Resort">
 <input type="checkbox" class="property_type" value="Resort" id="Resort">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Resort
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Lawn">
 <input type="checkbox" class="property_type" value="Lawn" id="Lawn">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Lawn
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Ground">
 <input type="checkbox" class="property_type" value="Ground" id="Ground">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Ground
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Front_yardBack_yard">
 <input type="checkbox" class="property_type" value="Front yard/Back yard" id="Front_yardBack_yard">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Front yard/Back yard
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="Banquet_Hall">
 <input type="checkbox" class="property_type" value="Banquet Hall" id="Banquet_Hall">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Banquet Hall
 </span>
 </label>
 </div>
 </div>
 </div>
 </div>
 <!-- end property filter -->
 <div class="col-md-12 col-xs-12 nopad">
 <div class="filter_bodyinner">
 <span class="filterheading">
 House rules
 </span>
 <div class="checkboxwrapper">
 <!--checkbox repeat start here-->
 <div class="checkboxdiv">
 <label for="suitable_child">
 <input type="checkbox" id="suitable_child">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Suitable for Children
 </span>
 </label>
 </div>
 <!--checkbox repeat end here-->
 <div class="checkboxdiv">
 <label for="suitable_infants">
 <input type="checkbox" id="suitable_infants">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Suitable for infants
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="suitable_pets">
 <input type="checkbox" id="suitable_pets">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Suitable for pets
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="allow_smoking">
 <input type="checkbox" id="allow_smoking">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Smoking allowed
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="allow_parties">
 <input type="checkbox" id="allow_parties">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Events/Parties allowed
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="noise_potential">
 <input type="checkbox" id="noise_potential">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Noise Potential
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="pet_live">
 <input type="checkbox" id="pet_live">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Pets live on property
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="have_weapon">
 <input type="checkbox" id="have_weapon">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Weapon on property
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="media_device">
 <input type="checkbox" id="media_device">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Surveillance or recording devices
 </span>
 </label>
 </div>
 <div class="checkboxdiv">
 <label for="other_animal">
 <input type="checkbox" id="other_animal">
 <span>
 <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
 <path class="a"
 d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
 transform="translate(0 -4.577)" /></svg>
 </span>
 <span class="checkinfo">
 Other animals on property
 </span>
 </label>
 </div>
 </div>
 </div>
 </div>
 <!-- property filter -->
 </div>
 </div>
 </div>
 <div class="filter_footer">
 <span class="dottedline"></span>
 <div class="filter_buttonwrapper">
 <button class="btn_style btn_cancel" id="filter_cancel">Clear</button>&nbsp
 <button class="btn_style" id="filter_apply">Apply</button>
 </div>
 </div>
 </div>
 <!--filter box end here-->
 </div>
 </div>
 <div class="containerbox">
 <div class="bgimg_div">
 <div id="filterpage_wrapper">
 <div class="stagging_listdiv">
 <div class="staggingli_view">
 <span class="result_count">
 </span>
 <div class="stagging_listwrapper"></div>
 <!--pagination start here -->
 <div class="pagination_nav text-right" id="pagination_link"></div>
 <input type="hidden" id="txt_rowid" value="0">
 <input type="hidden" id="txt_allcount" value="0">
 <!--pagination end here -->
 </div>
 <div class="stagging_mapview">
 <div id="map"></div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <script src="<?php echo base_url();?>assets/js/script.js"></script>
 <script src='<?php echo base_url();?>assets/js/price.js'></script>
 <script src="<?php echo base_url();?>assets/js/lottie.js"></script>
<script src="<?php echo base_url();?>assets/js/loader_script.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url();?>assets/js/alertify.js"></script>
 <script>
var shimmer='<div class="bottom_slider_mainwr"><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div><div class="bottom_slider_wr"><div class="bottom_sliderimg shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div><div class="bottom_slider_text shimmereffect"></div></div></div>';
 $('.stagging_listwrapper').html(shimmer); 
 var startDate;
 var endDate; 
 <?php if(!empty($first_date) && !empty($second_date)){ ?>
 startDate='<?php echo $first_date;?>';
 endDate='<?php echo $second_date;?>';
 <?php } else { ?>
 startDate=new Date();
 endDate=new Date();
 <?php } ?>
 var picker = $('#daterangepicker1').daterangepicker({
 "locale": {
 cancelLabel: 'Clear'
 },
 "parentEl": "#daterangepicker1-container",
 "startDate":startDate,
 "minDate": new Date(),
 "endDate":endDate
 });
 picker.data('daterangepicker').hide = function () { };
 picker.data('daterangepicker').show();
 picker.on('apply.daterangepicker', function (ev, picker) {
 var startDate = picker.startDate.format('MM/DD/YYYY');
 var endDate = picker.endDate.format('MM/DD/YYYY');
 var date1_ms = new Date(startDate).getTime();
 var date2_ms = new Date(endDate).getTime();
 var difference=date2_ms-date1_ms;
 if(difference==0){
 $('#daterangepicker_error').text("Please select valid date").show().fadeOut(3000); 
 }else{
 $('#first_date').val(picker.startDate.format('MM/DD/YYYY'));
 $('#second_date').val(picker.endDate.format('MM/DD/YYYY')); 
 $('#daterangepicker1').val(picker.startDate.format('MM/DD/YYYY') + '-' + picker.endDate.format('MM/DD/YYYY'))
 $('#getshow').html('<i class="fa fa-calendar" aria-hidden="true"></i> ' + picker.startDate.format('MM/DD/YYYY') + ' -' + picker.endDate.format('MM/DD/YYYY'));
 stagging_list(1); 
 }
 });
 $('#daterangepicker1').on('cancel.daterangepicker', function(ev, picker) {
 $(this).val('');
 $('#first_date').val('');
 $('#second_date').val(''); 
 $('button#getshow').html('<i class="fa fa-calendar" aria-hidden="true"></i>Add dates');
 stagging_list(1);
 });

//datepicker end here
$('#mobfilterview,#filterback').on('click', function () {
$('.mobile_filter').toggleClass('mobilefiteropen');
});

$('.filter_buttonwrapper .btn_cancel').on('click', function () {
$('.filter_box').removeClass('filteropen');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
});
$('button.actionbtn').on('click', function () {
if ($(this).attr('data-item') == 'mapview') {
$(this).toggleClass('performactionbtn');
$('.stagging_listdiv').toggleClass('map_viewshow');
// $('.staggingplace_innerslider2').data('owlCarousel').onThrottledResize();
}
else if ($(this).attr('data-item') == 'calenderopen') {
if ($(this).parents('.customdropdown').find('.customdropdownbox').is(":visible")) {
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$(this).removeClass('performactionbtn');
}
else {
$('.customdropdown').removeClass('customdropdownopen');
$('.anotheractionbtn button.actionbtn').removeClass('performactionbtn');
$('.filter_box').removeClass('filteropen');
$(this).addClass('performactionbtn');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
$(this).parents('.customdropdown').addClass('customdropdownopen');
}
}
else if ($(this).attr('data-item') == 'guestopen') {
if ($(this).parents('.customdropdown').find('.customdropdownbox').is(":visible")) {
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$(this).removeClass('performactionbtn');
}
else {
$('.customdropdown').removeClass('customdropdownopen');
$('.anotheractionbtn button.actionbtn').removeClass('performactionbtn');
$('.filter_box').removeClass('filteropen');
$(this).addClass('performactionbtn');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
$(this).parents('.customdropdown').addClass('customdropdownopen');
}
}
else if ($(this).attr('data-item') == 'entireplace') {
if ($(this).parents('.customdropdown').find('.customdropdownbox').is(":visible")) {
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$(this).removeClass('performactionbtn');
}
else {
$('.customdropdown').removeClass('customdropdownopen');
$('.anotheractionbtn button.actionbtn').removeClass('performactionbtn');
$('.filter_box').removeClass('filteropen');
$(this).addClass('performactionbtn');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
$(this).parents('.customdropdown').addClass('customdropdownopen');
}
}
else if ($(this).attr('data-item') == 'priceopen') {
if ($(this).parents('.customdropdown').find('.customdropdownbox').is(":visible")) {
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$(this).removeClass('performactionbtn');
}
else {
$('.customdropdown').removeClass('customdropdownopen');
$('.anotheractionbtn button.actionbtn').removeClass('performactionbtn');
$('.filter_box').removeClass('filteropen');
$(this).addClass('performactionbtn');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
$(this).parents('.customdropdown').addClass('customdropdownopen');
}
}
else if ($(this).attr('data-item') == 'filterview') {
$(this).toggleClass('performactionbtn');
$('.filter_box').toggleClass('filteropen');
}
})
const $dropmenubox = $('.customdropdownbox');
$(document).mouseup(e => {
if (!$dropmenubox.is(e.target)
&& $dropmenubox.has(e.target).length === 0) {
$('.customdropdown').removeClass('customdropdownopen');
$('.anotheractionbtn button.actionbtn').removeClass('performactionbtn');
}
});
</script>
<script>
$(document).ready(function(){
$('#less_adult').attr("disabled","disabled");
$('#less_children').attr("disabled","disabled");
$('#less_infant').attr("disabled","disabled");
$('#adult_count').val(0);
$('#children_count').val(0);
$('#infant_count').val(0);
$('#less_beds').attr("disabled","disabled");
$('#less_bedrooms').attr("disabled","disabled");
$('#beds_count').val(0);
$('#bedrooms_count').val(0);
<?php if(!empty($first_date)){ ?>
$('#getshow').text('<?php echo $first_date;?>' + ' - ' + '<?php echo $second_date;?>');
$('#daterangepicker1').val('<?php echo $first_date;?>' + ' - ' + '<?php echo $second_date;?>');
$('#first_date').val('<?php echo $first_date;?>');
$('#second_date').val('<?php echo $second_date;?>'); 
<?php } if($adult_count >0){ ?>
$('#adult_count').val(<?php echo $adult_count;?>);
$('#less_adult').removeAttr('disabled'); 
<?php } if($children_count >0){ ?>
$('#children_count').val(<?php echo $children_count;?>);
$('#less_children').removeAttr('disabled'); 
<?php } if($infant_count >0){ ?>
$('#infant_count').val(<?php echo $infant_count;?>);
$('#less_infant').removeAttr('disabled'); 
<?php } ?>
<?php $guest_country=(!empty($this->session->userdata('guest_country')))?$this->session->userdata('guest_country'):'USA';
if($guest_country=="India"){?>
var max=50000;
<?php }else{ ?>
var max=10000;  
<?php }?>
var min =parseInt(<?php echo $data['min_price'];?>); 
price_filter(min,max);
$('#min_price').val(<?php echo $data['min_price'];?>);
$('#max_price').val(max);
stagging_list(1);
}); 

//=======use for format=================//

function stagging_list(page){
var data=[]; 
var kitchen_dining =[];
var bed_baths =[];
var entertainment =[];
var outside_amenities =[];
var property_type=[];
$('.kitchen_dining:checked').each(function(i){
kitchen_dining.push($(this).val());
});
$('.bed_baths:checked').each(function(i){
bed_baths.push($(this).val());
});
$('.entertainment:checked').each(function(i){
entertainment.push($(this).val());
});
$('.outside_amenities:checked').each(function(i){
outside_amenities.push($(this).val());
});
$('.property_type:checked').each(function(i){
property_type.push($(this).val());
});
var minimum=$('#min_price').val();
var maximum=$('#max_price').val();
var adult_count=$('#adult_count').val();
var children_count=$('#children_count').val();
var infant_count=$('#infant_count').val();
var first_date=$('#first_date').val();
var second_date=$('#second_date').val();
var user_id=$('#user_id').val();
var location=$('#location').val();
let beds_count=parseInt($('#beds_count').val());
let bedrooms_count=parseInt($('#bedrooms_count').val());
data.push({name:"user_id",value:user_id});
data.push({name:"location",value:location});
if (kitchen_dining.length >0) {
data.push({name:"kitchen_dining",value:kitchen_dining});
}if (bed_baths.length >0) {
data.push({name:"bed_baths",value:bed_baths});
}if (entertainment.length >0) {
data.push({name:"entertainment",value:entertainment});
}if (outside_amenities.length >0) {
data.push({name:"outside_amenities",value:outside_amenities});
}
if (property_type.length >0) {
data.push({name:"property_type",value:property_type});
}
var All_guest= Number(adult_count) + Number(children_count);
if(All_guest>0){
data.push({name:"all_guest",value:All_guest});
}
if($('#entireplace').is(':checked') == true){
data.push({name:"entireplace",value:1});
}
if($('#hotelroom').is(':checked') == true){
data.push({name:"hotelroom",value:1});
}
if(first_date!=""){
data.push({name:"first_date",value:first_date});
}
if(second_date!=""){
data.push({name:"second_date",value:second_date});
}
if(beds_count>0){
data.push({name:"beds_count",value:beds_count});
}
if(bedrooms_count>0){
data.push({name:"bedrooms_count",value:bedrooms_count});
}
if($('#priceapply').val()==1){
data.push({name:"minimum",value:minimum}); 
data.push({name:"maximum",value:maximum});
}
if($('#suitable_child').is(':checked') == true){
data.push({name:"suitable_child",value:1});
}
if($('#suitable_infants').is(':checked') == true){
data.push({name:"suitable_infants",value:1});
}
if($('#suitable_pets').is(':checked') == true){
data.push({name:"suitable_pets",value:1});
}
if($('#allow_smoking').is(':checked') == true){
data.push({name:"allow_smoking",value:1});
}
if($('#allow_parties').is(':checked') == true){
data.push({name:"allow_parties",value:1});
}
if($('#noise_potential').is(':checked') == true){
data.push({name:"noise_potential",value:1});
}
if($('#have_weapon').is(':checked') == true){
data.push({name:"have_weapon",value:1});
}
if($('#pet_live').is(':checked') == true){
data.push({name:"pet_live",value:1});
}
if($('#media_device').is(':checked') == true){
data.push({name:"media_device",value:1});
}
if($('#other_animal').is(':checked') == true){
data.push({name:"other_animal",value:1});
}
// console.log("dta",data)
var change_url= '<?php echo base_url();?>stagging-list?location='+location+'&first_date='+first_date+'&second_date='+second_date+'&adult_count='+adult_count+'&children_count='+children_count+'&infant_count='+infant_count;
var page=page;
$('.loaderCntr').show();
$.ajax({
url: "<?php echo base_url();?>Welcome/get_stagging_list/"+page,
type:'post',
data:data,
dataType: "JSON",
success: function(response){
if(change_url!=window.location){
window.history.pushState({path:change_url},'',change_url);    
}	
// console.log("response",response)
$('.loaderCntr').hide();
$(".stagging_listwrapper").html('');
$('#pagination_link').html('');
$('.result_count').text('');
var resDiv='';
var gmarkers =[];
if (response.data.result !== undefined && response.data.result.length > 0){
$('#pagination_link').html(response.pagination_link);
var locations = [];
var reslength=response.all_count;
if(reslength==1){
var restext="Result";
}else{
var restext="Results";
}
$('.result_count').text(reslength+' '+restext);
var latArray = [];
var lngArray = [];
var property_price=[];
$.each(response.data.result, function(key, value) {
resDiv+='<div class="place_contentwrapper imgbx" id="'+value.lat+'_'+value.lng+'" data-id="'+key+'"><div class="place_img"><div class="place_innerslider"><div id="myCarousel'+value.host_id+'" class="carousel slide new_link" data-ride="carousel" value="'+value.host_id+'" data-interval="false"><ol class="carousel-indicators">';
var images=[];
if(value.bathimage!=null){
images.push(value.bathimage);
}if(value.bedimage!=null){
images.push(value.bedimage);
}if(value.kitimage!=null){
images.push(value.kitimage);
}if(value.otherimage!=null){
images.push(value.otherimage);
}
for (var i = 0; i < images.length; i++) {
resDiv+='<li data-target="#myCarousel'+value.host_id+'" data-slide-to="'+i+'"></li>';
}
resDiv+='</ol><div class="carousel-inner">';
for (var j = 0; j < images.length; j++) {
if(j==0){
resDiv+='<div class="item active place_innersliderimg"><img src="'+images[j]+'" alt=""></div>';
}else{
resDiv+='<div class="item place_innersliderimg"><img src="'+images[j]+'" alt=""></div>';
}
}
resDiv+=''
var name_lsiting="";
name_lsiting = (value.name_listing !=null) ? value.name_listing : '';
resDiv+='</div></div><a class="left carousel-control" href="#myCarousel'+value.host_id+'" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a class="right carousel-control" href="#myCarousel'+value.host_id+'" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div><span class="img_bottombg"></span></div><div class="place_divider new_link" value="'+value.host_id+'"><img src="<?php echo base_url();?>assets/images/strip_bg.png" alt=""></div><div class="place_content"><span class="place_heading new_link" value="'+value.host_id+'">'+name_lsiting+'</span>';
var arrSt = [];
(value.total_guest>1) ? arrSt.push(value.total_guest+' Guests') : arrSt.push(value.total_guest+' Guest');
(value.total_bedrooms>1) ? arrSt.push(value.total_bedrooms+' Bedrooms') : arrSt.push(value.total_bedrooms+' Bedroom');
(value.vehicle_id!=null) ? arrSt.push('Vehicle') : '' ;
(value.kitimage!=null) ? arrSt.push('Kitchen') : '';
var str = arrSt.join(", ");
resDiv+='<span class="place_info new_link" value="'+value.host_id+'">'+str+'</span><div class="rating_div new_link" value="'+value.host_id+'">';
for (var i = 0; i < 5; i++) {
if(i<value.rating){
resDiv+='<i class="fa fa-star rating_yes" aria-hidden="true"></i>';
}else{
resDiv+='<i class="fa fa-star" aria-hidden="true"></i>'; 
}
} 
var pricetext="";
if(value.currency=="Rupees"){
pricetext='fa fa-rupee';
}else{
pricetext='fa fa-usd';
} 
resDiv+='</div><div class="price_favinfo"><span class="pricetext new_link" value="'+value.host_id+'"><i class="'+pricetext+'"></i> '+value.base_price+' /night</span>';

if(value.status==1){
resDiv+='<span class="fav"><i class="fa fa-heart" aria-hidden="true" data-id="'+value.host_id+'"></i></span></div></div></div>';
}else{
resDiv+='<span class="fav"><i class="fa fa-heart-o" aria-hidden="true" data-id="'+value.host_id+'"></i></span></div></div></div>'; 
}
})
$(".stagging_listwrapper").append(resDiv);
LoadMap();
//===============map========================//
function LoadMap() {
var mapOptions = {
center: new google.maps.LatLng(parseFloat(response.data.result[0].lat), parseFloat(response.data.result[0].lng)),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP,
streetViewControl: false,
mapTypeControl: false
};
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
//Create and open InfoWindow.
var infoWindow = new google.maps.InfoWindow();
for (var i = 0; i < response.data.result.length; i++) {
var value = response.data.result[i];
var myLatlng = new google.maps.LatLng(parseFloat(value.lat), parseFloat(value.lng));
var icon = {
url: "<?php echo base_url();?>assets/images/pinicon.svg",
scaledSize: new google.maps.Size(30, 30)
};
var hover_icon = {
url: "<?php echo base_url();?>assets/images/pinicon.svg",
scaledSize: new google.maps.Size(50, 50)
};
var marker = new google.maps.Marker({
position: myLatlng,
map: map,
icon:icon,
markerID:i.toString()
});
gmarkers[i.toString()]=marker;
//Attach click event to the marker.
(function (marker, value) {
google.maps.event.addListener(marker, 'onmouseover', function() {
marker.setIcon(hover_icon);
});
google.maps.event.addListener(marker, 'onmouseleave', function() {
marker.setIcon(icon);
})
google.maps.event.addListener(marker, "click", function (e) {
var resDivnew="";
var rand;
rand=Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
resDivnew+='<div class="place_contentwrapper imgbx" id="'+value.lat+'_'+value.lng+'"><div class="place_img"><div class="place_innerslider" id="id="'+value.lat+'"><div id="myCarousel'+rand+'" class="carousel slide new_link" value="'+value.host_id+'" data-ride="carousel" data-interval="false"><ol class="carousel-indicators">';
var images=[];
if(value.bathimage!=null){
images.push(value.bathimage);
}if(value.bedimage!=null){
images.push(value.bedimage);
}if(value.kitimage!=null){
images.push(value.kitimage);
}if(value.otherimage!=null){
images.push(value.otherimage);
}
for (var i = 0; i < images.length; i++) {
resDivnew+='<li data-target="#myCarousel'+rand+'" data-slide-to="'+i+'"></li>';
}
resDivnew+='</ol><div class="carousel-inner">';
for (var j = 0; j < images.length; j++) {
if(j==0){
resDivnew+='<div class="item active place_innersliderimg"><img src="'+images[j]+'" alt=""></div>';
}else{
resDivnew+='<div class="item place_innersliderimg"><img src="'+images[j]+'" alt=""></div>';
}
}
resDivnew+=''
var name_lsiting="";
name_lsiting = (value.name_listing !=null) ? value.name_listing : '';
resDivnew+='</div></div><a class="left carousel-control" href="#myCarousel'+rand+'" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a class="right carousel-control" href="#myCarousel'+rand+'" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></div><span class="img_bottombg"></span></div><div class="place_divider new_link" value="'+value.host_id+'"><img src="<?php echo base_url();?>assets/images/strip_bg.png" alt=""></div><div class="place_content"><span class="place_heading new_link" value="'+value.host_id+'">'+name_lsiting+'</span>';
var arrSt = [];
(value.total_guest>1) ? arrSt.push(value.total_guest+' Guests') : arrSt.push(value.total_guest+' Guest');
(value.total_bedrooms>1) ? arrSt.push(value.total_bedrooms+' Bedrooms') : arrSt.push(value.total_bedrooms+' Bedroom');
(value.vehicle_id!=null) ? arrSt.push('Vehicle') : '' ;
(value.kitimage!=null) ? arrSt.push('Kitchen') : '';
var str = arrSt.join(", ");
resDivnew+='<span class="place_info new_link" value="'+value.host_id+'">'+str+'</span><div class="rating_div new_link" value="'+value.host_id+'">';
for (var i = 0; i < 5; i++) {
if(i<value.rating){
resDivnew+='<i class="fa fa-star rating_yes" aria-hidden="true"></i>';
}else{
resDivnew+='<i class="fa fa-star" aria-hidden="true"></i>'; 
}
} 
var pricetext="";
if(value.currency=="Rupees"){
pricetext='fa fa-rupee';
}else{
pricetext='fa fa-usd';
} 
resDivnew+='</div><div class="price_favinfo"><span class="pricetext new_link" value="'+value.host_id+'"><i class="'+pricetext+'"></i> '+value.base_price+' /night</span>';

if(value.status==1){
resDivnew+='<span class="fav"><i class="fa fa-heart" aria-hidden="true" data-id="'+value.host_id+'"></i></span></div></div></div>';
}else{
resDivnew+='<span class="fav"><i class="fa fa-heart-o" aria-hidden="true" data-id="'+value.host_id+'"></i></span></div></div></div>'; 
}
//Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
infoWindow.setContent(resDivnew);
infoWindow.open(map, marker);
});
})(marker, value);


google.maps.event.addListener(map, "click", function(event) {
infoWindow.close();
});

}
//=============hover section==================//
$(document).on('mouseenter', '.imgbx', function() {
let markerID=$(this).attr('data-id');
google.maps.event.trigger(gmarkers[markerID.toString()], 'onmouseover');
})
$(document).on('mouseleave', '.imgbx', function() {
let markerID=$(this).attr('data-id');
google.maps.event.trigger(gmarkers[markerID.toString()], 'onmouseleave');
})

}//=========loop close=============//
//==========end map=======================//
}else{ 
$('#map').html(''); 
var new_map;
var markersArray = [];
var new_map = new google.maps.Map(document.getElementById('map'), {
center: new google.maps.LatLng(52.5167, 13.3833),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP,
streetViewControl: false,
mapTypeControl: false
});
resDiv+='<div class="notFoundata text_black">No Data Found</div>';
$(".stagging_listwrapper").append(resDiv);
// $('.stagging_listdiv').removeClass('map_viewshow');
}
}
});
} 
//===========map=======================================//
//==============pagination======================//
$(document).on("click", ".pagination li a", function(event){
event.preventDefault();
var page = $(this).data("ci-pagination-page");
stagging_list(page);
});

function propertyView(lat,lng){
var scroll_id=document.getElementById(lat+'_'+lng);
window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});

}

//===========locations[i][2]=======================//
$(document).on("click", ".new_link", function(event){
var host_id=window.btoa($(this).attr('value'));
var first_date=$('#first_date').val();
var second_date=$('#second_date').val();
var adult_count=$('#adult_count').val();
var children_count=$('#children_count').val();
var infant_count=$('#infant_count').val();
event.preventDefault();
window.open("getproperty-detail?host_id="+host_id+"&first_date="+first_date+"&second_date="+second_date+"&adult_count="+adult_count+"&children_count="+children_count+"&infant_count="+infant_count,'_blank'); 
});

//========adult image===============//
$('#more_adult').on('click',function(){
let adult_count=$('#adult_count').val();
if(adult_count>=1){
$('#less_adult').removeAttr('disabled');
}
if(adult_count>=16){
$("#more_adult").attr("disabled","disabled");
}
});

$('#less_adult').on('click',function(){
let adult_count=$('#adult_count').val();
if(adult_count<16){
$("#more_adult").removeAttr('disabled'); 
}
if(adult_count<=0){
$("#less_adult").attr("disabled","disabled");
}
});

// //===========children===============//

$('#more_children').on('click',function(){
let children_count=$('#children_count').val();
if(children_count>=1){
$("#less_children").removeAttr('disabled'); 
}
if(children_count>=5){
$("#more_children").attr("disabled","disabled");
}
});

$('#less_children').on('click',function(){
let children_count=$('#children_count').val();
if(children_count<5){
$("#more_children").removeAttr('disabled'); 
}
if(children_count<=0){
$("#less_children").attr("disabled","disabled");
}
});
// //============infants=================//
$('#more_infant').on('click',function(){
let infant_count=$('#infant_count').val();
if(infant_count>=1){
$("#less_infant").removeAttr('disabled'); 
}
if(infant_count>=5){
$("#more_infant").attr("disabled","disabled");
}
});

$('#less_infant').on('click',function(){
let infant_count=$('#infant_count').val();
if(infant_count<5){
$("#more_infant").removeAttr('disabled'); 
}
if(infant_count<=0){
$("#less_infant").attr("disabled","disabled");
}
});

$('#guest_apply').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
let adult_count=$('#adult_count').val();
let children_count=$('#children_count').val();
let infant_count=$('#infant_count').val();
if(infant_count>0 && adult_count==0){
$('#adult_count').val(1);
$("#less_adult").removeAttr('disabled'); 
}
if(children_count>0 && adult_count==0){
$('#adult_count').val(1);
$("#less_adult").removeAttr('disabled'); 
}
let adult_count1=$('#adult_count').val();
if(adult_count1 >0 ||children_count >0 || infant_count >0 ){
var guest= Number(adult_count1) + Number(children_count);
if(guest==0 || guest< 2){
var guest_text='guest';
}else{
var guest_text='guests';
}
if(infant_count==0 || infant_count <2){
var infant_text='infant';
}else{
var infant_text='infants';
}
$('#guest_button').text(guest + ' ' + guest_text + ',' + infant_count + ' ' + infant_text); 
}
stagging_list(1);
});

//===========guest cancel===============//
$('#guest_cancel').click(function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen'); 
$('#adult_count').val(0);
$('#children_count').val(0);
$('#infant_count').val(0);
$('#less_adult').attr("disabled","disabled");
$('#less_children').attr("disabled","disabled");
$('#less_infant').attr("disabled","disabled");
$('#guest_button').text('Add guests');
stagging_list(1);
});


//=========bed bedroom filter======================//

$('#more_beds').on('click',function(){
let beds_count=$('#beds_count').val();
if(beds_count>=1){
$('#less_beds').removeAttr('disabled');
}
if(beds_count>=16){
$("#more_beds").attr("disabled","disabled");
}
});

$('#less_beds').on('click',function(){
let beds_count=$('#beds_count').val();
if(beds_count<16){
$("#more_beds").removeAttr('disabled'); 
}
if(beds_count<=0){
$("#less_beds").attr("disabled","disabled");
}
});

// //===========bedrooms===============//

$('#more_bedrooms').on('click',function(){
let bedrooms_count=$('#bedrooms_count').val();
if(bedrooms_count>=1){
$("#less_bedrooms").removeAttr('disabled'); 
}
if(bedrooms_count>=16){
$("#more_bedrooms").attr("disabled","disabled");
}
});

$('#less_bedrooms').on('click',function(){
let bedrooms_count=$('#bedrooms_count').val();
if(bedrooms_count<16){
$("#more_bedrooms").removeAttr('disabled'); 
}
if(bedrooms_count<=0){
$("#less_bedrooms").attr("disabled","disabled");
}
});
$('#price_apply').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$('#priceapply').val('1');
stagging_list(1); 
});
$('#price_cancel').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$('#priceapply').val('0');
stagging_list(1); 
});
$('#place_apply').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
stagging_list(1); 
});
$('#place_cancel').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$('#entireplace').attr('checked', false);
$('#hotelroom').attr('checked', false);
stagging_list(1); 
})
//===========filter aplly==================//
$('#filter_apply').on('click',function(){
stagging_list(1); 
$('.filter_box').removeClass('filteropen');
$('button.actionbtn[data-item="filterview"]').removeClass('performactionbtn');
});
//====filter cancel================//
$('#filter_cancel').on('click',function(){
$(this).parents('.customdropdown').removeClass('customdropdownopen');
$('#suitable_child').attr('checked', false);
$('#suitable_infants').attr('checked', false);
$('#suitable_pets').attr('checked', false);
$('#allow_smoking').attr('checked', false);
$('#allow_parties').attr('checked', false);
$('#noise_potential').attr('checked', false);
$('#pet_live').attr('checked', false);
$('#have_weapon').attr('checked', false);
$('#media_device').attr('checked', false);
$('#other_animal').attr('checked', false);
$('#entireplace').attr('checked', false);
$('#less_beds').attr("disabled","disabled");
$('#less_bedrooms').attr("disabled","disabled");
$('#beds_count').val(0);
$('#bedrooms_count').val(0);
$('.kitchen_dining').attr('checked', false);
$('.bed_baths').attr('checked', false);
$('.entertainment').attr('checked', false);
$('.outside_amenities').attr('checked', false);
$('.property_type').attr('checked', false);
stagging_list(1); 
});

//=========more filter================//
$('#morefilter').on('click',function(){
$('.more_filterinner').slideToggle('slow');
var button = $(this);
button.text(button.text() == "Hide All Filters" ? "View All Filters" : "Hide All Filters") 
});
//price range 
function price_filter(price1=10,price2=100){ 
var numBins = 40,
data = dataFactory(500, numBins, false,price1,price2);
$("#histogramSlider").histogramSlider({
data: data,
sliderRange: [price1, price2],
selectedRange: [price1, price2],
numberOfBins: numBins,
showTooltips: false,
showSelectedRange: true
});
renderData(data);
function dataFactory(itemCount, numberOfBins, group,price1,price2) {
var data = { "items": [] };

for (var i = 0; i < itemCount; i++) {
var rnd = Math.floor(Math.random() * numberOfBins) + 1;
var rnd2 = Math.floor(Math.random() * 12);
var v = ((price2 / numberOfBins) - rnd2) * rnd;
if (group) {
data.items.push({ "value": v, "count": rnd });
} else {
data.items.push({ "value": v });
}
}

return data;
}

function renderData(data) {
var dataArray = [];

for (var i = 0; i < data.items.length; i++) {
dataArray.push(data.items[i].value);
}

dataArray = dataArray.sort(function (a, b) {
return b - a;
});

var count = 0,
dataTable = $("#data");

for (var i = 0; i < dataArray.length; i++) {
count++;
dataTable.after("<tr><td>" + dataArray[i] + "</td><td>" + count + "</td></tr>");

if (round25000(dataArray[i]) > round25000(dataArray[i + 1])) {
count = 0;
dataTable.after("<tr><td>----------</td></tr>");
}
}
}

function round25000(x)
{
return Math.ceil(x/25)*25;
}
$("#min_price,#max_price").on("paste keyup", function () { 
var min_price_range = parseInt($("#min_price").val());
var max_price_range = parseInt($("#max_price").val());
$("#histogramSlider-slider").slider({
values: [min_price_range, max_price_range]
}); 
$("#histogramSlider").histogramSlider({
selectedRange: [min_price_range, max_price_range]
});
});
}

</script>