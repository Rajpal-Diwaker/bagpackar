<style type="text/css">
  .grecaptcha-badge {
display: none;
}
 .resendtext{   
    border: 0;
    background: transparent;
    padding: 0;
    font-weight:700;
  }
</style>
<div id="host_wrapper" class="hostform1">
    <div class="host_formwr">
      <span class="hostpname">Hi, <?php echo $_SESSION['webuser_bgpkr']['name'];?>! Let’s get started</span>
      <div class="host_headingwr">
        <span class="form_heading">
          Listing your place
        </span>
        <div id="hostformProgress">
          <div id="hostBar"></div>
        </div>
      </div>
      
      <!--host form1 start here-->
      <!-- <form action="<?php echo base_url()?>web/host/hostDetailAdd" method="post" enctype="multipart/form-data" id="validForm"> -->
      
      <div id="hostform1">
        <div class="host_formdiv input_field">
          <span class="form_heading">What kind of place do you have ?</span>
          <div class="form_group">
            <p>Type of place</p>
            <div class="select_tag">
              <select class="form-control" name="typeplace" id="typePlace" required>
                <option value="">Select place type</option>
                <?php if($places){
                   foreach ($places as $key => $value) {
                ?>
                <option value="<?=$value['place_type']?>" <?php if ($value['place_type'] == $all_data['place_type']) {?> selected <?php } ?>><?=$value['place_type']?></option>
                <?php } } ?>
              </select>
              
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
             <div id="typePlace-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>Property Type</p>
            <div class="select_tag">
              <select class="form-control" name="propertytype" id="propertyType" required>
              <option value="">Select Place type</option>
              <?php if($property){
                   foreach ($property as $key => $value) {
                ?>
                <option value="<?=$value['property_type']?>" <?php if ($value['property_type'] == $all_data['property_type']) {?> selected <?php } ?>><?=$value['property_type']?></option>
                <?php } } ?>
            </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
             <div id="propertyType-error" class="form_error"></div>
             <div class="form_group">
             <div id="propertyText"><?=$protext;?></div>
             </div>
          </div>
         </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" class="btn_style" data-next="hostform2"> Next</a>
        </div>
      </div>
      <!--host form1 end here-->
      <!--host form2 start here-->
      <div id="hostform2">
        <div class="host_formdiv input_field">
          <div class="form_group">
            <p>Type of room</p>
            <div class="select_tag">
            <select class="form-control" name="roomType" id="roomType" required>
                <option value="">Select type of room </option>
                <option value="Shared room"<?php if ($all_data['room_type'] == 'Shared room') {?> selected <?php } ?>>Shared room</option>
                <option value="Single room"<?php if ($all_data['room_type'] == 'Single room') {?> selected <?php } ?>>Single room</option>
                <option value="Whole apartment"<?php if ($all_data['room_type'] == 'Whole apartment') {?> selected <?php } ?>>Whole apartment</option>
                <option value="Whole area"<?php if ($all_data['room_type'] == 'Whole area') {?> selected <?php } ?>>Whole area</option>
                <!-- <option value="Triple">Triple</option>
                <option value="Connecting rooms">Connecting rooms</option>
                <option value="Villa">Villa</option> -->
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
           <div id="roomType-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>Dedicated for</p>
            <div class="select_tag">
              <select class="form-control" name="dedicatedGuest" id="dedicatedGuest" required>
                <option value="">Select guests</option>
                <option value="Guest Entirely" <?php if ($all_data['dedicated_for'] == 'Guest Entirely') {?> selected <?php } ?>>Guest Entirely</option>
                <option value="Host Belongings"<?php if ($all_data['dedicated_for'] == 'Host Belongings') {?> selected <?php } ?>>Host Belongings</option>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div id="dedicatedGuest-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>Parking</p>
            <div class="select_tag">
              <select class="form-control" name="parkingType" id="parkingType" required>
                <option value="">Select parking</option>
                <option value="Dedicated parking area" <?php if ($all_data['parking_type'] == 'Dedicated parking area') {?> selected <?php } ?>>Dedicated parking area</option>
                <option value="Front door parking"<?php if ($all_data['parking_type'] == 'Front door parking') {?> selected <?php } ?>>Front door parking</option>
                <option value="Garage"<?php if ($all_data['parking_type'] == 'Garage') {?> selected <?php } ?>>Garage</option>
                <option value="Roadside parking"<?php if ($all_data['parking_type'] == 'Roadside parking') {?> selected <?php } ?>>Roadside parking</option>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div id="parkingType-error" class="form_error"></div>
          </div>
        </div>
        <div class="host_formfooter">
          <a ref="javascript:void(0);" data-next="hostform1" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform3" class="btn_style"> Next</a>
        </div>
      </div>
      <!--host form2 end here-->
      <!--host form4 start here-->
      

        <div id="hostform4">
        <form id="bedroomData">
        <div class="host_formdiv input_field">
          <div class="form_group">
       <div class="guest_dropdown">
      <span class="labels">Guest(s)</span>
      <div class="number_input_box">
        <?php $guestC = !empty($all_data['total_guest'])?$all_data['total_guest']:1; ?>
        <div class="numbers_icon <?php if($guestC <= 1){?>svg_disable<?php } ?>" id="dGuest" 
        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downGuest('guestPm','dGuest','min');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
        </svg>
        </div>
        
        <input type="number" name="noGuest" id="noGuest" min="1" value="<?=$guestC;?>">
        <input type="hidden" id="guestPm" value="<?=$guestC;?>">
        <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp();
        downGuest('guestPm','dGuest','plus');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
          <rect height="12" rx="1" width="2" x="11" y="6"></rect>
        </svg>
        </div>
      </div>
      </div>
            <div id="noGuest-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>How many bedrooms can guests use?</p>
      <div class="guest_dropdown">
      <span class="labels">Bedrooms</span>
      <div class="number_input_box">
        <?php $all_data['total_bedrooms'] = !empty($all_data['total_bedrooms'])?$all_data['total_bedrooms']:1; ?>
        <div class="numbers_icon <?php if($all_data['total_bedrooms'] <= 1){?>svg_disable<?php } ?>" id="dbed" 
        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downGuest('bedPm','dbed','min');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
        </svg>
        </div>
        
    <input type="number" name="noBedRoom" id="noBeds" min="1" value="<?=$all_data['total_bedrooms'];?>" max="100">
        <input type="hidden" id="bedPm" value="<?=$all_data['total_bedrooms'];?>">
        <div class="numbers_icon noBeds" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); downGuest('bedPm','dbed','plus');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
          <rect height="12" rx="1" width="2" x="11" y="6"></rect>
        </svg>
        </div>
      </div>
      </div>
            
            <div id="noBeds-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>How many beds can guests use?</p>
            <div class="select_tag">
              <select class="form-control" name="noBedsGuset" id="noBedsGuset" required>
                <option value="">Select beds</option>
                <option value="1"<?php if ($all_data['guest_bed'] == '1') {?> selected <?php } ?>>1 bed</option>
                <option value="2"<?php if ($all_data['guest_bed'] == '2') {?> selected <?php } ?>>2 beds</option>
                <option value="3"<?php if ($all_data['guest_bed'] == '3') {?> selected <?php } ?>>3 beds</option>
                <option value="4"<?php if ($all_data['guest_bed'] == '4') {?> selected <?php } ?>>4 beds</option>
                <option value="5"<?php if ($all_data['guest_bed'] == '5') {?> selected <?php } ?>>5 beds</option>
                <option value="6"<?php if ($all_data['guest_bed'] == '6') {?> selected <?php } ?>>6 beds</option>
                <option value="7"<?php if ($all_data['guest_bed'] == '7') {?> selected <?php } ?>>7 beds</option>
                <option value="8"<?php if ($all_data['guest_bed'] == '8') {?> selected <?php } ?>>8 beds</option>
                <option value="9"<?php if ($all_data['guest_bed'] == '9') {?> selected <?php } ?>>9 beds</option>
                <option value="10"<?php if ($all_data['guest_bed'] == '10') {?> selected <?php } ?>>10 beds</option>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div id="noBedsGuset-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>Sleeping Arrangements</p>
            <div class="sleeping_agr">
              <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500sWhere does it come from?</p> -->
            </div>
          </div>
          <div id="addBedsCount"> 
      
      <?php if ($all_data['total_bedrooms']) {

              $doublebeds = explode(',', $all_data['doublebeds']);
              $queenbeds = explode(',', $all_data['queenbeds']);
              $singlebeds = explode(',', $all_data['singlebeds']);
              $sofabeds = explode(',', $all_data['sofabeds']);
              $kingbeds = explode(',', $all_data['kingbeds']);
              $twinbeds = explode(',', $all_data['twinbeds']);
              $floor_mattress = explode(',', $all_data['floor_mattress']);
              $airbeds = explode(',', $all_data['airbeds']);
              $couch = explode(',', $all_data['couch']);

              for ($bd=0; $bd < $all_data['total_bedrooms']; $bd++) {

              $allCount = ($doublebeds[$bd]?$doublebeds[$bd]:0)+($queenbeds[$bd]?$queenbeds[$bd]:0)+($singlebeds[$bd]?$singlebeds[$bd]:0)+($sofabeds[$bd]?$sofabeds[$bd]:0)+($kingbeds[$bd]?$kingbeds[$bd]:0)+($twinbeds[$bd]?$twinbeds[$bd]:0)+($floor_mattress[$bd]?$floor_mattress[$bd]:0)+($airbeds[$bd]?$airbeds[$bd]:0)+($couch[$bd]?$couch[$bd]:0);

              $strVcount = ($allCount>1)?$allCount.' Beds':$allCount.' Bed';

              $id = $bd+1;

          ?>
         <div class="bedroom_count" id="mainId<?=$id;?>">
        <div class="bedroomlabels">
        <span class="labels">
          Bedroom <?=$id;?><span id="showText<?=$id;?>"><?=$strVcount;?></span>
        </span>
        <button type="button" class="actionbtn" id="btn<?=$id;?>" onclick="addDiffbed('<?=$id;?>','allbed<?=$id;?>','btn<?=$id;?>')"> <?php if($allCount>0){echo 'Edit';}else {echo 'Add';}?> Beds </button>
        <input type="hidden" class="totalbed" id="allbed<?=$id;?>" value="<?=$allCount;?>"/>
      </div>
       <div class="bedroom_count_div" id="bedroom_count_div<?=$id;?>">
        <div class="form_group">

            <div class="incrementinput">
              <span class="labels">King Bed</span>
              <div class="number_input_box">
          <?php $kingbeds[$bd]=@$kingbeds[$bd]?$kingbeds[$bd]:0; ?>    
        <div class="numbers_icon <?php if($kingbeds[$bd] == 0){?>svg_disable<?php } ?>" id="king_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','kingBedq<?=$id;?>','king_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="kingBedq[]" min="0" value="<?=$kingbeds[$bd];?>" max="15">
                <input type="hidden" id="kingBedq<?=$id;?>" value="<?=$kingbeds[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','kingBedq<?=$id;?>','king_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

            <div class="incrementinput">
              <span class="labels">Queen Bed</span>
              <div class="number_input_box">
          <?php $queenbeds[$bd]=@$queenbeds[$bd]?$queenbeds[$bd]:0; ?>      
              <div class="numbers_icon <?php if($queenbeds[$bd] == 0){?>svg_disable<?php } ?>" id="qb_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','queenBedq<?=$id;?>','qb_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="queenBedq[]" min="0" value="<?=$queenbeds[$bd];?>" max="15">
                <input type="hidden" id="queenBedq<?=$id;?>" value="<?=$queenbeds[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','queenBedq<?=$id;?>','qb_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

            <div class="incrementinput">
              <span class="labels">Full/Double Bed</span>
              <div class="number_input_box">
             <?php $doublebeds[$bd]=@$doublebeds[$bd]?$doublebeds[$bd]:0; ?>   
            <div class="numbers_icon <?php if($doublebeds[$bd] == 0){?>svg_disable<?php } ?>" id="db_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','doubleBedq<?=$id;?>','db_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
              <input type="number" name="doubleBedq[]" min="0" value="<?=$doublebeds[$bd];?>" max="15">
                <input type="hidden" id="doubleBedq<?=$id;?>" value="<?=$doublebeds[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','doubleBedq<?=$id;?>','db_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

            <div class="incrementinput">
              <span class="labels">Single Bed</span>
              <div class="number_input_box">
              <?php $singlebeds[$bd]=@$singlebeds[$bd]?$singlebeds[$bd]:0; ?>   
                <div class="numbers_icon <?php if($singlebeds[$bd] == 0){?>svg_disable<?php } ?>" id="sb_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','singleBedq<?=$id;?>','sb_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
              <input type="number" name="singleBedq[]" min="0" value="<?=$singlebeds[$bd];?>" max="15">
                <input type="hidden" id="singleBedq<?=$id;?>" value="<?=$singlebeds[$bd];?>">
                <div class="numbers_icon" value="1" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','singleBedq<?=$id;?>','sb_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
     
            <!-- left -->
           <div class="incrementinput">
              <span class="labels">Twin Bed</span>
              <div class="number_input_box">
           <?php $twinbeds[$bd]=@$twinbeds[$bd]?$twinbeds[$bd]:0; ?>      
            <div class="numbers_icon <?php if($twinbeds[$bd] == 0){?>svg_disable<?php } ?>" id="twin_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','twinBedq<?=$id;?>','twin_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="twinBedq[]" min="0" value="<?=$twinbeds[$bd];?>" max="15">
                <input type="hidden" id="twinBedq<?=$id;?>" value="<?=$twinbeds[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','twinBedq<?=$id;?>','twin_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div> 

           <div class="incrementinput">
              <span class="labels">Floor Mattress</span>
              <div class="number_input_box">
             <?php $floor_mattress[$bd]=@$floor_mattress[$bd]?$floor_mattress[$bd]:0; ?>   
          <div class="numbers_icon <?php if($floor_mattress[$bd] == 0){?>svg_disable<?php } ?>" id="floor_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','floorBedq<?=$id;?>','floor_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
            <input type="number" name="floorBedq[]" min="0" value="<?=$floor_mattress[$bd];?>" max="15">
                <input type="hidden" id="floorBedq<?=$id;?>" value="<?=$floor_mattress[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','floorBedq<?=$id;?>','floor_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>


               <div class="incrementinput">
              <span class="labels">Sofa Bed</span>
              <div class="number_input_box">
            <?php $sofabeds[$bd]=@$sofabeds[$bd]?$sofabeds[$bd]:0; ?>    
              <div class="numbers_icon <?php if($sofabeds[$bd] == 0){?>svg_disable<?php } ?>" id="sob_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','sofaBedq<?=$id;?>','sob_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="sofaBedq[]" min="0" value="<?=$sofabeds[$bd];?>" max="15">
                <input type="hidden" id="sofaBedq<?=$id;?>" value="<?=$sofabeds[$bd];?>">
                <div class="numbers_icon" value="1" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','sofaBedq<?=$id;?>','sob_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

           <!-- left -->
           <div class="incrementinput">
              <span class="labels">Air Mattress</span>
              <div class="number_input_box">
             <?php $airbeds[$bd]=@$airbeds[$bd]?$airbeds[$bd]:0; ?>   
            <div class="numbers_icon <?php if($airbeds[$bd] == 0){?>svg_disable<?php } ?>" id="air_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','airBedq<?=$id;?>','air_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="airBedq[]" min="0" value="<?=$airbeds[$bd];?>" max="15">
                <input type="hidden" id="airBedq<?=$id;?>" value="<?=$airbeds[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','airBedq<?=$id;?>','air_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
           <div class="incrementinput">
              <span class="labels">Couch</span>
              <div class="number_input_box">
            <?php $couch[$bd]=@$couch[$bd]?$couch[$bd]:0; ?>
          <div class="numbers_icon <?php if($couch[$bd] == 0){?>svg_disable<?php } ?>" id="couch_inDis<?=$id;?>" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('<?=$id;?>','couchBedq<?=$id;?>','couch_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="couchBedq[]" min="0" value="<?=$couch[$bd];?>" max="15">
                <input type="hidden" id="couchBedq<?=$id;?>" value="<?=$couch[$bd];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('<?=$id;?>','couchBedq<?=$id;?>','couch_inDis<?=$id;?>');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

         </div>
        </div>
       
      <div id="totalbed-error1" class="form_error"></div></div>
      <?php } } ?>

      </div> 
 



<!-- <div class="form_group">
  <p>Comman Spaces</p>
</div> -->

<div class="bedroom_count">
        <?php  $allCountC = ($all_data['total_sofa']?$all_data['total_sofa']:0)+($all_data['total_couch']?$all_data['total_couch']:0)+($all_data['total_floor_mattress']?$all_data['total_floor_mattress']:0)+($all_data['total_kingbed']?$all_data['total_kingbed']:0)+($all_data['total_queenbed']?$all_data['total_queenbed']:0)+($all_data['total_doublebed']?$all_data['total_doublebed']:0)+($all_data['total_twinbed']?$all_data['total_twinbed']:0)+($all_data['total_airbed']?$all_data['total_airbed']:0); 
          $allStrV = ($allCountC>1)?$allCountC.' Beds':$allCountC.' Bed';
         ?>
        <div class="bedroomlabels">
        <span class="labels">
          Comman Spaces<span id="showTextcommon"><?=$allStrV;?></span>
        </span>
        <button type="button" class="actionbtn" id="btn_space" onclick="addDiffbed('common','allbedcommon','btn_space')"> <?php if($allCountC>0){echo 'Edit';}else {echo 'Add';}?> Beds </button>
        <input type="hidden" id="allbedcommon" value="<?=$allCountC;?>"/>
      </div>
       <div class="bedroom_count_div" id="bedroom_count_divcommon">
        <div class="form_group">
         <div class="form_group">


             <div class="incrementinput">
              <span class="labels">King Bed</span>
              <div class="number_input_box">
          <?php $all_data['total_kingbed']=@$all_data['total_kingbed']?$all_data['total_kingbed']:0; ?>
          <div class="numbers_icon <?php if($all_data['total_kingbed'] == 0){?>svg_disable<?php } ?>" id="king_inDisco" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','kingBedco','king_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="kingBedco" min="0" value="<?=$all_data['total_kingbed'];?>" max="15">
                <input type="hidden" id="kingBedco" value="<?=$all_data['total_kingbed'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','kingBedco','king_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

          
          <div class="incrementinput">
              <span class="labels">Queen Bed</span>
              <div class="number_input_box">
        <?php $all_data['total_queenbed']=@$all_data['total_queenbed']?$all_data['total_queenbed']:0; ?>
              <div class="numbers_icon <?php if($all_data['total_queenbed'] == 0){?>svg_disable<?php } ?>" id="qb_inDisco" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','queenBedco','qb_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
              <input type="number" name="queenBedco" min="0" value="<?=$all_data['total_queenbed'];?>" max="15">
                <input type="hidden" id="queenBedco" value="<?=$all_data['total_queenbed'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','queenBedco','qb_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

            <div class="incrementinput">
              <span class="labels">Full/Double Bed</span>
              <div class="number_input_box">
    <?php $all_data['total_doublebed']=@$all_data['total_doublebed']?$all_data['total_doublebed']:0; ?>    <div class="numbers_icon <?php if($all_data['total_doublebed'] == 0){?>svg_disable<?php } ?>" id="db_inDisco" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','doubleBedco','db_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
            <input type="number" name="doubleBedco" min="0" value="<?=$all_data['total_doublebed'];?>" max="15">
                <input type="hidden" id="doubleBedco" value="<?=$all_data['total_doublebed'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','doubleBedco','db_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
   

          <div class="incrementinput">
              <span class="labels">Twin Bed</span>
              <div class="number_input_box">
    <?php $all_data['total_twinbed']=@$all_data['total_twinbed']?$all_data['total_twinbed']:0; ?>      
    <div class="numbers_icon <?php if($all_data['total_twinbed'] == 0){?>svg_disable<?php } ?>" id="twin_inDisco" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','twinBedco','twin_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="twinBedco" min="0" value="<?=$all_data['total_twinbed'];?>" max="15">
                <input type="hidden" id="twinBedco" value="<?=$all_data['total_twinbed'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','twinBedco','twin_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

   
           <div class="incrementinput">
              <span class="labels">Floor Mattress</span>
              <div class="number_input_box">
    <?php $all_data['total_floor_mattress']=@$all_data['total_floor_mattress']?$all_data['total_floor_mattress']:0; ?>      
        <div class="numbers_icon <?php if($all_data['total_floor_mattress'] == 0){?>svg_disable<?php } ?>" id="flo_space" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','floorQuantity','flo_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="floorQuantity" min="0" value="<?=$all_data['total_floor_mattress'];?>" max="15">
                <input type="hidden" id="floorQuantity" value="<?=$all_data['total_floor_mattress'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','floorQuantity','flo_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>




            <div class="incrementinput">
              <span class="labels">Sofa Bed</span>
              <div class="number_input_box">
              <?php $all_data['total_sofa']=@$all_data['total_sofa']?$all_data['total_sofa']:0; ?>   
                <div class="numbers_icon <?php if($all_data['total_sofa'] == 0){?>svg_disable<?php } ?>" id="sob_space" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','sofaQuantity','sob_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="sofaQuantity" min="0" value="<?=$all_data['total_sofa'];?>" max="15">
                 <input type="hidden" id="sofaQuantity" value="<?=$all_data['total_sofa'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','sofaQuantity','sob_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>


            <div class="incrementinput">
              <span class="labels">Air Mattress</span>
              <div class="number_input_box">
    <?php $all_data['total_airbed']=@$all_data['total_airbed']?$all_data['total_airbed']:0; ?>      
         <div class="numbers_icon <?php if($all_data['total_airbed'] == 0){?>svg_disable<?php } ?>" id="air_inDisco" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','airBedco','air_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="airBedco" min="0" value="<?=$all_data['total_airbed'];?>" max="15">
                <input type="hidden" id="airBedco" value="<?=$all_data['total_airbed'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','airBedco','air_inDisco');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>


            <div class="incrementinput">
              <span class="labels">Couch</span>
              <div class="number_input_box">
      <?php $all_data['total_couch']=@$all_data['total_couch']?$all_data['total_couch']:0; ?>    
         <div class="numbers_icon <?php if($all_data['total_couch'] == 0){?>svg_disable<?php } ?>" id="co_space" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('common','couchQuantity','co_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="couchQuantity" min="0" value="<?=$all_data['total_couch'];?>" max="15">
                <input type="hidden" id="couchQuantity" value="<?=$all_data['total_couch'];?>">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('common','couchQuantity','co_space');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


        <div class="form_group">
            <div class="guest_dropdown">
      <span class="labels">Bathrooms</span>
      <div class="number_input_box">
        <div class="numbers_icon" id="dbathr" 
        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbath('bathrPm','dbathr','min');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
        </svg>
        </div>
        <?php $guestBath = !empty($all_data['total_bathrooms'])?$all_data['total_bathrooms']:0.5; ?>
        <input type="number" name="noOfBathroom" id="noOfBathroom" min="0" step="0.5" value="<?=$guestBath;?>">
        <input type="hidden" id="bathrPm" value="<?=$guestBath;?>">
        <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); downbath('bathrPm','dbathr','plus');">
        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
          style="height: 22px; width: 22px; display: block; fill: currentcolor;">
          <rect height="2" rx="1" width="12" x="6" y="11"></rect>
          <rect height="12" rx="1" width="2" x="11" y="6"></rect>
        </svg>
        </div>
      </div>
      </div>
        <div id="noOfBathroom-error" class="form_error"></div>
          </div>
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" class="hostbtnback" data-next="hostform2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" class="btn_style" data-next="hostform5"> Next</a>
        </div>
        </form>
      </div>
      <!--host form3 end here-->
      <!--host form4 start here-->
      <div id="hostform5">
        <form id="addressData">
        <div class="host_formdiv input_field">
    <span class="form_heading">Where is your place located?</span>

    <!-- host mobile map view --> 
         
    <div class="host_img mobmap" id="mobclass">
      <div id="hostmapwrmob">
         <div id="hostmapmob" style="height: 200px;">
         </div>
      </div>
    </div>
  
    <!--end host mobile map view -->
          
          <div class="form_group"><p>Street Address</p>
            <div class="location_input">
              <input type="text" name="location" id="location" class="form-control" placeholder="House name/No., street, road" value="<?=$all_data['location'];?>" autocomplete="off">
         <span class="spanlocsvg">
            <svg width="33" height="33" id="curruntLocation" viewBox="0 0 33 33" onclick="">
                <path
                  d="M18,12a6,6,0,1,0,6,6A6,6,0,0,0,18,12Zm13.41,4.5A13.491,13.491,0,0,0,19.5,4.59V1.5h-3V4.59A13.491,13.491,0,0,0,4.59,16.5H1.5v3H4.59A13.491,13.491,0,0,0,16.5,31.41V34.5h3V31.41A13.491,13.491,0,0,0,31.41,19.5H34.5v-3ZM18,28.5A10.5,10.5,0,1,1,28.5,18,10.492,10.492,0,0,1,18,28.5Z"
                  transform="translate(-1.5 -1.5)"></path>
              </svg>
        </span>
            </div>
            <div id="location-error" class="form_error"></div>
          </div>
        <div class="form_group">
          <div>Tip:Drag the Pin and mark your place. This will help guests to 
             accurately locate your place.</div>
        </div>   
          <input type="hidden" id="icon" value="<?php echo base_url();?>assets/images/pinicon.svg">
          <input type="hidden" name="lat" id="lat" value="<?=$all_data['lat'];?>">
          <input type="hidden" name="lng" id="lng" value="<?=$all_data['lng'];?>">
          

          <div class="form_group">
            <p>Apt, Suite.(optional)</p>
            <input type="text" name="apt" id="apt" class="form-control" value="<?=$all_data['apt'];?>" placeholder="Apt, Suite.(optional)" autocomplete="off">
            <div id="apt-error" class="form_error"></div>
          </div>
          <div class="flexdiv">
            <div class="form_group">
              <p>State</p>
             
            <input type="text" name="state" id="stateId" class="form-control" placeholder="Enter State" value="<?=$all_data['state'];?>">
              <div id="stateId-error" class="form_error"></div>
            </div>
            <div class="form_group">
              <p>City</p>
              
            <input type="text" name="city" id="cityId" class="form-control" placeholder="Enter city" value="<?=$all_data['city'];?>">
               <div id="cityId-error" class="form_error"></div>
            </div>
          </div>
          <div class="form_group">
            <p>Zipcode</p>
            <input type="text" name="zipcode" id="zipcode" class="form-control" onkeypress="return isNumberKey(event)" placeholder="201301" value="<?=$all_data['zipcode'];?>">
            <div id="zipcode-error" class="form_error"></div>
          </div>

          <div class="form_group">
            <p>Country/Region</p>
            <div class="select_tag">
              <input type="hidden" id="countryHid" value="<?=$all_data['country'];?>">
              <select class="countries form-control" name="countryregion" id="countryId" required>
                <option value="">Select Country</option>
                <?php if ($countries) {
                  foreach ($countries as $valco) { ?>
                  <option value="<?=$valco['country_name'];?>" <?php if ($valco['country_name'] == $all_data['country']) {?> selected <?php } ?>><?=$valco['country_name'];?></option>
               <?php 
             } } ?>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div id="countryId-error" class="form_error"></div>
          </div>

        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0)" data-next="hostform3" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform6" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      
      <div id="hostform6">
        <form id="amenitiesData">
        <div class="chekboxhost_formdiv input_field">
          <p>What amenities do you offer ?</p>
          <p>Tip:These are the amenities guests usually expect, but you can add more in other sections also.</p>
          <span class="spanheading" id="basic">Basic Amenities</span>
          <div class="checkboxwrapper">
          <?php if($basic_am){
             foreach ($basic_am as $value) {
            ?>
          <div class="checkboxdiv">
              <label for="<?=$value['name']?>">
                <input type="checkbox" name="basic[]" value="<?=$value['id']?>" id="<?=$value['name']?>" checked>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  <?=$value['name']?>
                </span>
              </label>
            </div>
          <?php } } ?>
            <!--checkbox repeat end here-->
            <div id="basic-error" class="form_error"></div>
          </div>
          <!-- <span class="spanheading">What amenities do you offer?</span>
          <span class="spannote">These are just the amenities guests usually expect, but you can add even more after you
            publish.</span> -->

          <span class="spanheading" id="kitchen">Kitchen/Dining Amenities</span>  
          <div class="checkboxwrapper">
            <!--checkbox repeat start here-->
           <?php if($kitchen_dining){
             foreach ($kitchen_dining as $value) {
             $kitam = explode(',', $all_data['kitchen_dining']);
            ?>
            <div class="checkboxdiv">
              <label for="<?=$value['name']?>">
                <input type="checkbox" name="kitchenDining[]" value="<?=$value['id']?>" id="<?=$value['name']?>" <?php if (in_array( $value['id'] ,$kitam )) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  <?=$value['name']?>
                </span>
              </label>
            </div>
      <?php } } ?>
             <div id="kitchenDining-error" class="form_error"></div>
          </div>
          <span class="spanheading" id="bed_n_bath">Bed and Baths Amenities</span>
          <div class="checkboxwrapper">
          <?php if($bedBaths){
             foreach ($bedBaths as $value) {
              $bedBaths = explode(',', $all_data['bed_baths']);
            ?>
             <div class="checkboxdiv">
              <label for="<?=$value['name']?>">
                <input type="checkbox" name="bedBaths[]" value="<?=$value['id']?>" id="<?=$value['name']?>" <?php if (in_array( $value['id'] ,$bedBaths)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  <?=$value['name']?>
                </span>
              </label>
            </div>
           <?php } } ?>
            
           <div id="bedBaths-error" class="form_error"></div>
          </div>

        <span class="spanheading" id="entertainment">Entertainment Amenities</span>
          <div class="checkboxwrapper">
          <?php if($entertainment){
             foreach ($entertainment as $value) {
              $entam = explode(',', $all_data['entertainment']);
            ?>
             <div class="checkboxdiv">
              <label for="<?=$value['name']?>">
                <input type="checkbox" name="entertainment[]" value="<?=$value['id']?>" id="<?=$value['name']?>" <?php if (in_array( $value['id'] ,$entam)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  <?=$value['name']?>
                </span>
              </label>
            </div>
           <?php } } ?>
            
           <div id="entertainment-error" class="form_error"></div>
          </div>
     
       <span class="spanheading" id="outside">Outside Amenities</span>
          <div class="checkboxwrapper">
          <?php if($outside){
             foreach ($outside as $value) {
              $outam = explode(',', $all_data['outside_amenities']);
            ?>
             <div class="checkboxdiv">
              <label for="<?=$value['name']?>">
                <input type="checkbox" name="outside[]" value="<?=$value['id']?>" id="<?=$value['name']?>"<?php if (in_array( $value['id'] ,$outam)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  <?=$value['name']?>
                </span>
              </label>
            </div>
           <?php } } ?>
           <div id="outside-error" class="form_error"></div>
          </div>

        <span class="spanheading">Safety Amenities</span>
          <div class="safety_anemities">
            <div class="checkboxdiv">
              <label for="Smoke">
                <?php $safam = explode(',', $all_data['safty_amenities']); ?>
                <input type="checkbox" name="amenitiesSafty[]" value="57" id="Smoke" <?php if (in_array( "57" ,$safam)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Smoke detector
                  <span class="checknote">Tip:Check your local laws, which may require a working smoke detector in every
                    room.</span>
                </span>
              </label>
            </div>

            <div class="checkboxdiv">
              <label for="first_aid">
                <input type="checkbox" name="amenitiesSafty[]" value="59" id="first_aid" <?php if (in_array( "59" ,$safam)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  First Aid Kit
                  <span class="checknote">Tip:Check your local laws, which may require a First Aid Kit in every
                    room.</span>
                </span>
              </label>
            </div>

            <div class="checkboxdiv">
              <label for="Carbon">
                <input type="checkbox" name="amenitiesSafty[]" value="58" id="Carbon" <?php if (in_array( "58" ,$safam)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Carbon monoxide detector
                  <span class="checknote">Tip:Check your local laws, which may require a working carbon monoxide detector in
                    every room.</span>
                 </span>
              </label>
            </div>
            <div id="amenitiesSafty-error" class="form_error"></div>
          </div></div>

        <div class="host_formdiv input_field"> 
        <div class="form_group">
          <p>Other Amenities</p>
        
        <?php $otham = explode(',', $all_data['other_amenities']); 
           $otherf =!empty($otham)?$otham[0]:'';
        ?>
        <div class="otherAmenities_mainwr">
        <div class="otherAmenities_wr">
          <div class="otherAmenities_div">
          <input type="text" name="otherAmenities[]" class="form-control other" placeholder="Other Amenities" value="<?=$otherf;?>">
          </div>
          <div class="otherAmenities_btn" id="amenitiesaddbtn">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </div>
        </div>
        </div>
         <?php if (isset($otham[1]) && !empty($otham[1])) {
         for ($i=1; $i < count($otham); $i++) { ?>
          <div class="otherAmenities_wr">
            <div class="otherAmenities_div">
              <input type="text" name="otherAmenities[]" class="form-control other" placeholder="Other Amenities" value="<?=$otham[$i];?>">
            </div>
            <div class="otherAmenities_btn amenitiesremovebtn">
              <i class="fa fa-times-circle" aria-hidden="true"></i>
            </div>
          </div>
      <?php } } ?>
      
      <div id="other-error" class="form_error"></div>
          </div>

      <div class="form_group">
        <p>Things to be taken care by guests.</p>
          <div class="form_group">
            <textarea name="place_rule" id="place_rule" cols="20" class="form-control" placeholder="Place Rules" rows="10" maxlength="1000"><?=$all_data['place_rules'];?></textarea>
            <div id="place_rule-error" class="form_error"></div>
          </div>
          </div>
      
    </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform5" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform7" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form5 end here-->
      <!--host form6 start here-->

      <div id="hostform7">
        <form id="otherPlaceSpaces">
        <div class="host_formdiv input_field">
          <span class="spanheading" id="space">Space guests can use</span>
          <div class="questuses">
            <div class="checkboxdiv">
              <label for="Kitchen">
                <?php $otsp = explode(',', $all_data['other_space']); ?>
                <input type="checkbox" name="guestSpaces[]" value="Kitchen" id="Kitchen" <?php if (in_array( "Kitchen" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Kitchen
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="washingmachine">
                <input type="checkbox" name="guestSpaces[]" value="Washingmachine" id="washingmachine" <?php if (in_array( "Washingmachine" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Laundry – Washing Machine
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="dryer">
                <input type="checkbox" name="guestSpaces[]" value="Dryer" id="dryer" <?php if (in_array( "Dryer" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Laundry – Dryer
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="Parking1">
                <input type="checkbox" name="guestSpaces[]" value="Parking" id="Parking1" <?php if (in_array( "Parking" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Parking
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="Gym1">
                <input type="checkbox" name="guestSpaces[]" value="Gym" id="Gym1" <?php if (in_array( "Gym" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Gym
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="Pool1">
                <input type="checkbox" name="guestSpaces[]" value="Pool" id="Pool1" <?php if (in_array( "Pool" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Pool
                </span>
              </label>
            </div>
            <div class="checkboxdiv">
              <label for="Hot1">
                <input type="checkbox" name="guestSpaces[]" value="Hot" id="Hot1" <?php if (in_array( "Hot" ,$otsp)) {?> checked <?php } ?>>
                <span>
                  <svg width="10.225" height="7.625" viewBox="0 0 10.225 7.625">
                    <path class="a"
                      d="M3.473,12.052.15,8.729a.511.511,0,0,1,0-.723l.723-.723a.511.511,0,0,1,.723,0L3.834,9.522,8.629,4.727a.511.511,0,0,1,.723,0l.723.723a.511.511,0,0,1,0,.723L4.2,12.052A.511.511,0,0,1,3.473,12.052Z"
                      transform="translate(0 -4.577)"></path>
                  </svg>
                </span>
                <span class="checkinfo">
                  Hot Tub
                </span>
              </label>
            </div>
            
            <div id="guestSpaces-error" class="form_error"></div>
           </div>
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform6" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform8" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form6 end here-->
      <!--host form7 start here-->
      <div id="hostform8">
        <form id="bedbathkitchen">
          <a href="javascript:void(0);" data-next="skipImages" id="skipImages" class="btn_skip"> Skip <i class="fa fa-forward"></i></a>
        <div class="host_formdiv input_field">

          
          <div class="form_group">
            <p id="bedimgFocus">Add Bedroom Images</p>
            <div class="four_upload beds">
              <input type="hidden" name="bedchange" id="bedchange" value="notchange">

        <!--  yha loop chlega -->
          <?php  if($all_data['bedimage']){
            $ik=1;
             foreach ($all_data['bedimage'] as $value) {
            ?>
          <div class="img_ipload img_uploadyes">
          <input type="file" name="bedroomImages[]" onchange="readimg(this);" id="Bedroomimg<?php echo $ik;?>" accept="image/*">
          <label for="Bedroomimg<?php echo $ik;?>" class="uploadimgdiv">
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          <img src="<?php echo $value['image'];?>" alt="">
          </label>
          <div class="img_upload_overlay">
          <span class="set_cover">
          <input type="hidden" name="imageBed[]" value="<?php echo $value['image'];?>">  
          <input type="radio" name="bedroomCover" value="<?php echo $value['image'];?>" onchange="changeSte('bedchange')" id="bedcov<?php echo $ik;?>" <?php if ($value['is_cover'] == '1') {?> checked <?php } ?> >
          <label for="bedcov<?php echo $ik;?>"><i class="fa fa-stop" aria-hidden="true"></i>
          <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>
          <label for="Bedroomimg<?php echo $ik;?>" class="replaceImg">
          <i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
          <span class="del_img bedsImage"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span></div>
          </div>
          <?php $ik++; } } if(count($all_data['bedimage'])<7){ $count=count($all_data['bedimage'])+1; ?>
               
               <div class="img_ipload">
                <input type="file" name="bedroomImages[]" onchange="createimg(this);" id="Bedroomimg<?php echo $count;?>" accept="image/*"/>
                <label for="Bedroomimg<?php echo $count;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="" alt="">
                </label>
                <div class="img_upload_overlay">
          <span class="set_cover">
          <input type="radio" name="bedroomCover" value="" id="bedcov<?php echo $count;?>" onchange="changeSte('bedchange')" <?php if($count<=1){?> checked <?php } ?>>
          <label for="bedcov<?php echo $count;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
          </span>
          <label for="Bedroomimg<?php echo $count;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
          <span class="del_img bedsImage"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
          </div>
          </div>
          <?php } ?>
          </div>
            <div id="bedroomImages-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p id="bimgFocus">Add Bathroom Images</p>
            <div class="four_upload bathrooms">
              <input type="hidden" name="bathchange" id="bathchange" value="notchange">

         <?php  if($all_data['bathimage']){
             $ik=1;
             foreach ($all_data['bathimage'] as $value) {
            ?>
                <div class="img_ipload img_uploadyes">
                <input type="file" name="bathsroomImages[]" onchange="readimg(this);" id="Bathroomimg<?php echo $ik;?>" accept="image/*">
                <label for="Bathroomimg<?php echo $ik;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $value['image'];?>" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
              <input type="hidden" name="bathimage[]" value="<?php echo $value['image'];?>">
            <input type="radio" name="bathroomCover" value="<?php echo $value['image'];?>" onchange="changeSte('bathchange')" id="bathcov<?php echo $ik;?>" <?php if ($value['is_cover'] == '1') {?> checked <?php } ?>>
            <label for="bathcov<?php echo $ik;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="Bathroomimg<?php echo $ik;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img bathImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
            </div>


        <?php $ik++; } } if(count($all_data['bathimage'])<7){ $count=count($all_data['bathimage'])+1; ?>

              <div class="img_ipload">
                <input type="file" name="bathsroomImages[]" onchange="createImgBath(this);" id="Bathroomimg<?php echo $count;?>" accept="image/*" />
                <label for="Bathroomimg<?php echo $count;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
            <input type="radio" name="bathroomCover" value="" onchange="changeSte('bathchange')" id="bathcov<?php echo $count;?>" <?php if($count<=1){?> checked <?php } ?>>
            <label for="bathcov<?php echo $count;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="Bathroomimg<?php echo $count;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img bathImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
            </div>
        <?php } ?>
            </div>
            <div id="bathsroomImages-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p id="kimgFocus">Add Kitchen Images</p>
            <div class="four_upload kitchen">
              <input type="hidden" name="kitchange" id="kitchange" value="notchange">

             <?php  if($all_data['kitimage']){
              $ik=1;
             foreach ($all_data['kitimage'] as $value) {
            ?>

              <div class="img_ipload img_uploadyes">
                <input type="file" name="kitchenImages[]" onchange="readimg(this);" id="kitchen<?php echo $ik;?>" accept="image/*">
                <label for="kitchen<?php echo $ik;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $value['image'];?>" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
            <input type="hidden" name="kitimage[]" value="<?php echo $value['image'];?>">  
            <input type="radio" name="kitchenCover" value="<?php echo $value['image'];?>" onchange="changeSte('kitchange')" id="kitchencov<?php echo $ik;?>" <?php if ($value['is_cover'] == '1') {?> checked <?php } ?>>
            <label for="kitchencov<?php echo $ik;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="kitchen<?php echo $ik;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img kitchenImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
              </div>   

        <?php $ik++; } } if(count($all_data['kitimage'])<7){ $count=count($all_data['kitimage'])+1; ?>

        <div class="img_ipload">
                <input type="file" name="kitchenImages[]" onchange="createImgKit(this);" id="kitchen<?php echo $count;?>" accept="image/*" />
                <label for="kitchen<?php echo $count;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
            <input type="radio" name="kitchenCover" value="0" onchange="changeSte('kitchange')" id="kitchencov<?php echo $count;?>" <?php if($count<=1){?> checked <?php } ?>>
            <label for="kitchencov<?php echo $count;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="kitchen<?php echo $count;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img kitchenImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
              </div>

          <?php } ?>

             </div>
            <div id="kitchenImages-error" class="form_error"></div>
          </div>

        <div class="form_group">
            <p id="oimgFocus">Add Others Images</p>
            <div class="four_upload others">
              <input type="hidden" name="otherchange" id="otherchange" value="notchange">

        
            <?php  if($all_data['otherimage']){
              $ik=1;
             foreach ($all_data['otherimage'] as $value) {
            ?>

             <div class="img_ipload img_uploadyes">
                <input type="file" name="otherImages[]" onchange="readimg(this);" id="otherImg<?php echo $ik;?>" accept="image/*">
                <label for="otherImg<?php echo $ik;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $value['image'];?>" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
            <input type="hidden" name="otheimage[]" value="<?php echo $value['image'];?>">  
            <input type="radio" name="otherImgCover" value="<?php echo $value['image'];?>" onchange="changeSte('otherchange')" id="otherImgCover<?php echo $ik;?>" <?php if ($value['is_cover'] == '1') {?> checked <?php } ?>>
            <label for="otherImgCover<?php echo $ik;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="otherImg<?php echo $ik;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img otherImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
              </div>

            <?php $ik++; } } if(count($all_data['otherimage'])<7){ $count=count($all_data['otherimage'])+1; ?>

            <div class="img_ipload">
                <input type="file" name="otherImages[]" onchange="createImgOther(this);" id="otherImg<?php echo $count;?>" accept="image/*" />
                <label for="otherImg<?php echo $count;?>" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="" alt="">
                </label>
            <div class="img_upload_overlay">
            <span class="set_cover">
            <input type="radio" name="otherImgCover" value="" onchange="changeSte('otherchange')" id="otherImgCover<?php echo $count;?>" <?php if($count<=1){?> checked <?php } ?>>
            <label for="otherImgCover<?php echo $count;?>"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>
            </span>
            <label for="otherImg<?php echo $count;?>" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>
            <span class="del_img otherImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>
            </div>
              </div>

           <?php } ?>

              </div>
            <div id="otherImages-error" class="form_error"></div>
          </div>

        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform7" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
      <span>
          <!-- <a href="javascript:void(0);" data-next="skipImages" class="btn_skip"> Skip <i class="fa fa-forward"></i></a> -->
          <a href="javascript:void(0);" data-next="hostform9" class="btn_style"> Next</a>
      </span>
        </div>
        </form>
      </div>
      <!--host form7 end here-->
      <!--host form8 start here-->
      <div id="hostform9">
        <form id="listDescription">
        <div class="host_formdiv input_field">
          <span class="spanheading">Describe your place to guest</span>
          <div class="form_group">
          <input type="text" name="listingDescribe" id="listingDescribe" class="form-control" placeholder="Name of Listing" value="<?=$all_data['name_listing'];?>" maxlength="50">
          <div id="listingDescribe-error" class="form_error"></div>
          </div>

          <div class="form_group">
            <textarea name="description" id="description" cols="20" class="form-control" placeholder="Description" rows="10" maxlength="25000"><?=$all_data['description'];?></textarea>
            <div id="description-error" class="form_error"></div>
          </div>
       
        <div class="form_group">
         <p>About Neighborhood</p>
          <div class="form_group">
            <textarea name="about_neighborhood" id="aboutNeighborhood" cols="20" class="form-control" placeholder="About Neighborhood" rows="10" maxlength="25000"><?=$all_data['about_neighborhood'];?></textarea>
            <div id="aboutNeighborhood-error" class="form_error"></div>
          </div>
        </div>
    
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform8" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform10" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form8 end here-->
      <!--host form9 start here-->
      <div id="hostform10">
        <form id="hostDetail">
        <div class="host_formdiv input_field">
          <span class="form_heading" style="font: 20px 'Manrope';">Introduce yourself</span>
          <div class="form_group">
            <p id="hostImg">Add Host image</p>
        <input type="hidden" id="hostuserImg" name="hostuserImg" value="<?=$all_data['profile_img'];?>">
             <input type="hidden" name="hostimgchange" id="hostimgchange" value="notchange">
            <div class="img_ipload <?php if(@$all_data['profile_img']){echo 'img_uploadyes';}?>">
              <input type="file" name="hostImage" onchange="readimg(this);" id="Host_img" accept="image/*" />

              <label for="Host_img" class="uploadimgdiv">
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <img src="<?=$all_data['profile_img'];?>" alt="">
              </label>
              <div id="Host_img-error" class="form_error"></div>
            </div>
          </div>
          <div class="form_group">
          <p>Tip:Please make sure you add a photo with a face clearly visible otherwise this may lead to disapproval of your listing.</p>
        </div>
          <div class="form_group">
            <p>Host name</p>
            <input type="text" name="hostname" id="hostname" class="form-control" placeholder="Name" value="<?=$all_data['host_name'];?>">
            <div id="hostname-error" class="form_error"></div>
          </div>
          <div class="form_group countrypickern">
            <p>Primary Contact</p>
            <!-- <div class="phone_number_code_select countrycode">
            <input id="country_code" type="tel" class="form-control">
            </div>
            <input type="text" name="primaryphone" id="primaryphone" class="form-control" placeholder="1234567890" onkeypress="return isNumberKey(event)"> -->
            <?php $mobp = $all_data['primary_phone']?$all_data['primary_phone']:'';?>
            <div class="countrycodephone">
              <div class="phone_number_code_select countrycode">
                <input id="country_code" type="tel" value="<?=$all_data['country_code'];?>" class="form-control">
                        </div>
                <div class="countryphone">
              <input type="hidden" id="mobV" value="0">
              <input type="text" name="primaryphone" id="primaryphone" value="<?=$mobp;?>"  class="form-control" placeholder="1234567890" onkeypress="return isNumberKey(event)">
                        </div>
                      </div>

            <div id="primaryphone-error" class="form_error"></div>
          </div>
          <div class="form_group countrypickern">
            <p>Other Contact</p>
            <!-- <input type="text" name="otherphone" id="otherphone" class="form-control" placeholder="1234567890" onkeypress="return isNumberKey(event)"> -->
            <div class="countrycodephone">
                <div class="phone_number_code_select countrycode">
                    <input id="country_code2" type="tel" value="<?=$all_data['other_phone_code'];?>" class="form-control">
                </div>
                <div class="countryphone">
                  <?php $otmob = ($all_data['other_phone'] != 0)?$all_data['other_phone']:'';?>
              <input type="text" name="otherphone" id="otherphone" value="<?=$otmob;?>" class="form-control" placeholder="1234567890" onkeypress="return isNumberKey(event)">
                        </div>
                      </div>
            <div id="otherphone-error" class="form_error"></div>
          </div>

        <?php $gvImg = explode(', ', $govImg['gov_id']); 
               if (!isset($gvImg[1])) {
                 $gvImg[1]='';
               }
              ?>
         <input type="hidden" name="govimage[]" value="<?php echo $gvImg[0];?>">
          <input type="hidden" name="govimage[]" value="<?php echo $gvImg[1];?>">

          <div class="form_group">
            <p id="govImg">Govt Issued ID</p>
            <div class="four_upload">
              <input type="hidden" name="idchange" id="idchange" value="notchange">
              

             <div class="img_ipload <?php if(@$gvImg[0]){echo 'img_uploadyes';}?>">
        <input type="file" name="govtId[]" onchange="readimg(this);" id="govtid1" accept="image/*"/>
                <label for="govtid1" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $gvImg[0];?>" alt="">
                </label>
              </div>

              <div class="img_ipload <?php if(@$gvImg[1]){echo 'img_uploadyes';}?>">
                <input type="file" name="govtId[]" onchange="readimg(this);" id="govtid2" accept="image/*" />
                <label for="govtid2" class="uploadimgdiv">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                  <img src="<?php echo $gvImg[1];?>" alt="">
                </label>
              </div>
            </div>
           <div id="govtId-error" class="form_error"></div>
          </div>

          

        <div class="form_group">
          <p>Tip:False information may lead to scam and strict action will be taken on the person listing the property.</p>
        </div>

          <div class="form_group">
        <p>About Hosts</p>
          <div class="form_group">
            <textarea name="intro" id="intro" cols="20" class="form-control" placeholder="Introduction" rows="10" maxlength="25000"><?=$all_data['introduction'];?></textarea>
            <div id="intro-error" class="form_error"></div>
          </div>
          </div>
          <div id="reCaptcharef">
              <div id="reCaptchaContainer"></div>
          </div>
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform9" id="backImages" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform11" id="hostmob" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form9 end here-->
      <!--host form10 start here-->
      <div id="hostform11">
        <form id="guestCare">
        <div class="host_formdiv input_field">
          <span class="form_heading">Things to take care by guest.</span>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="childFocus">Suitable for Children</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="chilyes">
                  <input type="radio" name="suitableChild" value="1" id="chilyes" <?php if ($all_data['suitable_child']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="chilno">
                  <input type="radio" name="suitableChild" value="0" id="chilno" <?php if ($all_data['suitable_child']== '0') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="suitableChild-error" class="form_error"></div>
          </div>
          <div class="form_group">
       <div class="flexdiv">
            <div class="f_heading">
              <p id="infantsFocus">Suitable for infants</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="sinyes">
                  <input type="radio" name="suitableInfants" value="1" id="sinyes" <?php if ($all_data['suitable_infants']== '1') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="sinno">
                  <input type="radio" name="suitableInfants" value="0" id="sinno" <?php if ($all_data['suitable_infants']== '0') { ?> checked <?php } ?>>
                  <span>
                     <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="suitableInfants-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="petFocus">Suitable for pets</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="spetyes">
                  <input type="radio" name="suitablePets" value="1" id="spetyes" <?php if ($all_data['suitable_pets']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="spetno">
                  <input type="radio" name="suitablePets" value="0" id="spetno" <?php if ($all_data['suitable_pets']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="suitablePets-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="smokingFocus"> Smoking allowed</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="smokeyes">
                  <input type="radio" name="allowSmoking" value="1" id="smokeyes" <?php if ($all_data['allow_smoking']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="smokeno">
                  <input type="radio" name="allowSmoking" value="0" id="smokeno" <?php if ($all_data['allow_smoking']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="allowSmoking-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="partyFocus"> Events/Parties allowed</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="epyes">
                  <input type="radio" name="allowParties" value="1" id="epyes" <?php if ($all_data['allow_parties']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="epno">
                  <input type="radio" name="allowParties" value="0" id="epno" <?php if ($all_data['allow_parties']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="allowParties-error" class="form_error"></div>
          </div>

          <!-- <div class="form_group">
          <p>Add More</p>
          <input type="text" name="addMore" id="addMore" class="form-control" value="<?=$all_data['add_more'];?>" placeholder="Add More">
          </div> -->
          <div class="form_group">
            <textarea name="addMore" id="addMore" cols="20" class="form-control" placeholder="Add More" rows="10" maxlength="1000"><?=$all_data['add_more'];?></textarea>
         </div>

        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform10" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform12" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form10 end here-->
      <!--host form11 start here-->
      <div id="hostform12">
        <form id="guestNoiseKnow">
        <div class="host_formdiv input_field">
          <span class="form_heading">Things Guest should know</span>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="noiseFocus">Noise Potential</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="nsyes">
                  <input type="radio" name="noisePotential" value="1" id="nsyes" <?php if ($all_data['noise_potential']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="nsno">
                  <input type="radio" name="noisePotential" value="0" id="nsno" <?php if ($all_data['noise_potential']== '0') { ?> checked <?php } ?>>
                  <span>
                 <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="noisePotential-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="petLiveFocus">Pets live on property</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="plpyes">
                  <input type="radio" name="petLive" value="1" id="plpyes" <?php if ($all_data['pet_live']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="plpno">
                  <input type="radio" name="petLive" value="0" id="plpno" <?php if ($all_data['pet_live']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="petLive-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="weaponFocus">Weapon on property</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="wpyes">
                  <input type="radio" name="haveWeapon" value="1" id="wpyes" <?php if ($all_data['have_weapon']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="wpno">
                  <input type="radio" name="haveWeapon" value="0" id="wpno" <?php if ($all_data['have_weapon']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="haveWeapon-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="mediaFocus"> Surveillance or recording devices</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="srdyes">
                  <input type="radio" name="mediaDevice" value="1" id="srdyes" <?php if ($all_data['media_device']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="srdno">
                  <input type="radio" name="mediaDevice" value="0" id="srdno" <?php if ($all_data['media_device']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="mediaDevice-error" class="form_error"></div>
          </div>
          <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="otherAnimalFocus"> Other animals on property</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="olpyes">
                  <input type="radio" name="otherAnimal" value="1" id="olpyes" <?php if ($all_data['other_animal']== '1') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
						 viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
						<g>
							<path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
								c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
								c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
								C382.156,186.854,381.561,174.322,373.451,166.965z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="olpno">
                  <input type="radio" name="otherAnimal" value="0" id="olpno" <?php if ($all_data['other_animal']== '0') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
						 viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

					<g>
						<g>
							<path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
								c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
								c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
								c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
								c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
						</g>
					</g>
					</svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
             <div id="otherAnimal-error" class="form_error"></div>
          </div>

          <!-- <div class="form_group">
          <p>If Any</p>
      <input type="text" name="ifany" id="ifany" class="form-control" value="<?=$all_data['if_any'];?>" placeholder="If Any Other">
         </div> -->
         <div class="form_group">
            <textarea name="ifany" id="ifany" cols="20" class="form-control" placeholder="If Any Other" rows="10" maxlength="1000"><?=$all_data['if_any'];?></textarea>
       </div>

        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform11" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform13" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form11 end here-->
      <!--host form12 start here-->
      <div id="hostform13">
        <form id="bookingDetails">
        <div class="host_formdiv input_field">
          <span class="form_heading">Booking details</span>
          <div class="form_group">
            <p>1. How much notice should host need before guest arrives?</p>
           
            <div class="select_tag">
              <select class="form-control" name="samedm" id="samedm" onchange="checkSameDay()" required>
                <option value="">Select Days</option>
              
                <option value="Same day"<?php if ($all_data['day_before_arrives'] == 'Same day') {?> selected <?php } ?>>Same day</option>
                <option value="1"<?php if ($all_data['day_before_arrives'] == '1') {?> selected <?php } ?>>1 day</option>
                <option value="2"<?php if ($all_data['day_before_arrives'] == '2') {?> selected <?php } ?>>2 days</option>
                <option value="3"<?php if ($all_data['day_before_arrives'] == '3') {?> selected <?php } ?>>3 days</option>
                <option value="4"<?php if ($all_data['day_before_arrives'] == '4') {?> selected <?php } ?>>4 days</option>
                <option value="5"<?php if ($all_data['day_before_arrives'] == '5') {?> selected <?php } ?>>5 days</option>
                <option value="6"<?php if ($all_data['day_before_arrives'] == '6') {?> selected <?php } ?>>6 days</option>
                <option value="7"<?php if ($all_data['day_before_arrives'] == '7') {?> selected <?php } ?>>7 days</option>
                <option value="8"<?php if ($all_data['day_before_arrives'] == '8') {?> selected <?php } ?>>8 days</option>
                <option value="9"<?php if ($all_data['day_before_arrives'] == '9') {?> selected <?php } ?>>9 days</option>
                <option value="10"<?php if ($all_data['day_before_arrives'] == '10') {?> selected <?php } ?>>10 days</option>
                <option value="11"<?php if ($all_data['day_before_arrives'] == '11') {?> selected <?php } ?>>11 days</option>
                <option value="12"<?php if ($all_data['day_before_arrives'] == '12') {?> selected <?php } ?>>12 days</option>
                <option value="13"<?php if ($all_data['day_before_arrives'] == '13') {?> selected <?php } ?>>13 days</option>
                <option value="14"<?php if ($all_data['day_before_arrives'] == '14') {?> selected <?php } ?>>14 days</option>
                <option value="15"<?php if ($all_data['day_before_arrives'] == '15') {?> selected <?php } ?>>15 days</option>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
          <div id="samedm-error" class="form_error"></div>
          </div>

         <div class="form_group">
          <p>
            Note: This option is helpful for Guests who make last minute booking. This option will not allows hosts to "accept or decline" booking for same day reservation, reservation will be accepted automatically, but this will allow your listing appear most in the search result and provides more earning.
          </p>
            <p>2. Guest can book before.</p>
            <div class="form_group">
                <p>a) Start Time</p>
                <div class="select_tag">
                  <select id="bookingStart" class="form-control" name="bookingStart" onchange="checkValidTime()" required>
                    <option value="">Select Start time</option>
                     <?php
                  for($hours=0; $hours<24; $hours++) {
          for($mins=0; $mins<60; $mins+=30){ 
            $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    ?>
                    <option value="<?=$valT;?>" <?php if($all_data['booking_start_time'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                    <?php } } ?>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div id="bookingStart-error" class="form_error"></div>
            </div>
            <div class="form_group">
                <p>b) End Time</p>
                <div class="select_tag">
                  <select id="bookingEnd" class="form-control" name="bookingEnd" onchange="checkValidTime()" required>
                   <option value="">Select End Time</option> 
                   <?php
                  for($hours=0; $hours<24; $hours++) {
          for($mins=0; $mins<60; $mins+=30){ 
            if ($mins==0 && $hours==0) {
              $mins=30;
            }
            $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    ?>
                    <option value="<?=$valT;?>" <?php if($all_data['booking_end_time'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                    <?php } } ?>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
            </div>
            <div id="bookingEnd-error" class="form_error"></div>
          </div>



          <div class="form_group">
            <p>3. How far can guest book the apartment.</p>
             <div class="select_tag">
              <select class="form-control" name="anytime" id="anytime" required>
                <option value="">Select time</option>
                <option value="anytime"<?php if ($all_data['apt_booking_before'] == 'anytime') {?> selected <?php } ?>>Anytime</option>
                <option value="1 month"<?php if ($all_data['apt_booking_before'] == '1 month') {?> selected <?php } ?>>1 month</option>
               <?php for($m=2;$m<13;$m++){
                 $mStr = $m.' months'; ?>
                <option value="<?=$mStr;?>"<?php if ($all_data['apt_booking_before'] == $mStr) {?> selected <?php } ?>><?=$mStr;?></option>
               <?php } ?>
                </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div id="anytime-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <p>4. How long guest can stay.</p>
            <div class="form_group">
                <p>a) Nights Minimum</p>
                <div class="select_tag">
    <select id="nightCount" class="form-control" name="nightMin" onchange="checkNightMinMax()" required>
                    <option value="">Select Minimum Nights</option>
                    <option value="1" <?php if($all_data['stay_min_night'] == '1') {?> selected <?php } ?>>01</option>
                    <option value="2"<?php if($all_data['stay_min_night'] == '2') {?> selected <?php } ?>>02</option>
                    <option value="3"<?php if($all_data['stay_min_night'] == '3') {?> selected <?php } ?>>03</option>
                    <option value="4"<?php if($all_data['stay_min_night'] == '4') {?> selected <?php } ?>>04</option>
                    <option value="5"<?php if($all_data['stay_min_night'] == '5') {?> selected <?php } ?>>05</option>
                    <option value="6"<?php if($all_data['stay_min_night'] == '6') {?> selected <?php } ?>>06</option>
                    <option value="7"<?php if($all_data['stay_min_night'] == '7') {?> selected <?php } ?>>07</option>
                    <option value="8"<?php if($all_data['stay_min_night'] == '8') {?> selected <?php } ?>>08</option>
                    <option value="9"<?php if($all_data['stay_min_night'] == '9') {?> selected <?php } ?>>09</option>
                    <option value="10"<?php if($all_data['stay_min_night'] == '10') {?> selected <?php } ?>>10</option>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div id="nightCount-error" class="form_error"></div>
            </div>
            <div class="form_group">
                <p>b) Nights Maximum</p>
                <div class="select_tag">
                  <select id="dayCount" class="form-control" name="dayMin" onchange="checkNightMinMax()" required>
                   <option value="">Select Maximum Nights</option> 
                    <?php for($n=1;$n<91;$n++){
                    $night = $n>9?$n:'0'.$n; ?>
                    <option value="<?=$n?>"<?php if($all_data['stay_max_night'] == $n) {?> selected <?php } ?>><?=$night?></option>
                    <?php } ?>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
            </div>
            <div id="dayNight-error" class="form_error"></div>
          </div>

          <div class="form_group">
            <p>5. When can guests check in and check out?</p>
            <p>a) Check In</p>
            <div class="row">
            <div class="col-md-6">
            <div class="form_group">
                <p>From</p>
                <div class="select_tag">
                  <select id="inFrom" class="form-control" name="inFrom" onchange="checkInValidTime()" required>
                    <option value="">Select..</option>
                   <?php
                  for($hours=0; $hours<24; $hours++) {
          for($mins=0; $mins<60; $mins+=30){ 
            $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    ?>
                    <option value="<?=$valT;?>"<?php if($all_data['checkin_from'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                    <?php } } ?>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div id="inFrom-error" class="form_error"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form_group">
                <p>To</p>
                <div class="select_tag">
                  <select id="inTo" class="form-control" name="inTo" onchange="checkInValidTime()" required>
                   <option value="">Select..</option> 
                    <?php
                  for($hours=0; $hours<24; $hours++) {
          for($mins=0; $mins<60; $mins+=30){ 
            
            $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    ?>
                    <option value="<?=$valT;?>"<?php if($all_data['checkin_to'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                    <?php } } ?>>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
         <div id="inTo-error" class="form_error"></div>
            </div>
            </div>
            </div>
            </div>
           
            <div class="form_group">
            <p>b) Check Out</p>
            <div class="row">
            <div class="col-md-6">
            <div class="form_group">
                <p>From</p>
                <div class="select_tag">
                  <select id="outFrom" class="form-control" name="outFrom" onchange="checkOutValidTime()" required>
                    <option value="">Select..</option>
                     <?php
                 for($hours=0; $hours<24; $hours++) {
  for($mins=0; $mins<60; $mins+=30){ 
      $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    ?>
                    <option value="<?=$valT;?>"<?php if($all_data['checkout_from'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                    <?php } } ?>
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div id="outFrom-error" class="form_error"></div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form_group">
                <p>To</p>
                <div class="select_tag">
                  <select id="outTo" class="form-control" name="outTo" onchange="checkOutValidTime()" required>
                   <option value="">Select..</option> 
                     <?php
                   
                  for($hours=0; $hours<24; $hours++) {
          for($mins=0; $mins<60; $mins+=30){ 
            $valT = date('h:i A',strtotime(str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT)));
                    
                    ?>
                    <option value="<?=$valT;?>"<?php if($all_data['checkout_to'] == $valT) {?> selected <?php } ?>><?=$valT;?></option>
                   <?php } }
                     ?>
                    
                 
                  </select>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                </div>
                <div id="outTo-error" class="form_error"></div>
            </div>
            </div>
            </div>
          </div>

        <div class="form_group">
          <div class="flexdiv">
            <div class="f_heading">
              <p id="halfdayFocus">6. Available for half-day booking?</p>
            </div>
            <div class="checkboxwrapper">
              <div class="checkboxdiv">
                <label for="hdbyes">
                  <input type="radio" name="half_day_booking" value="1" id="hdbyes" <?php if ($all_data['half_day_booking']== '1') { ?> checked <?php } ?>>
                  <span>
                   <svg x="0px" y="0px"
             viewBox="0 0 512 512"  xml:space="preserve">
                       <g>
            <g>
              <path d="M373.451,166.965c-8.071-7.337-20.623-6.762-27.999,1.348L224.491,301.509l-58.438-59.409
                c-7.714-7.813-20.246-7.932-28.039-0.238c-7.813,7.674-7.932,20.226-0.238,28.039l73.151,74.361
                c3.748,3.807,8.824,5.929,14.138,5.929c0.119,0,0.258,0,0.377,0.02c5.473-0.119,10.629-2.459,14.297-6.504l135.059-148.722
                C382.156,186.854,381.561,174.322,373.451,166.965z"/>
            </g>
          </g>
          </svg>
                  </span>
                </label>
              </div>
              <div class="checkboxdiv">
                <label for="hdbno">
                  <input type="radio" name="half_day_booking" value="0" id="hdbno" <?php if ($all_data['half_day_booking']== '0') { ?> checked <?php } ?>>
                  <span>
                    <svg x="0px" y="0px"
             viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">

          <g>
            <g>
              <path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
                c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
                c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
                c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
                c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
            </g>
          </g>
          </svg>
                  </span>
                </label>
              </div>
            </div>
            </div>
            <div id="halfday-error" class="form_error"></div>
          </div>
         <div class="form_group">
       <p>Tip:This option will allow Guest to book your listing for half day either from 6AM to 8PM or 8PM to 6PM. You can change this setting in Manage Property at anytime.</p>
      </div>
        </div>

        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform12" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform14" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form12 end here-->
      <!--host form13 start here-->
      <div id="hostform14">
        <form id="calendarUnavailable">
        <div class="host_formdiv input_field">
          <span class="form_heading">Calendar: Select unavailable Days</span>
          <input type="hidden" class="date" name="date_av">
          <div id="date"></div>
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform13" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" data-next="hostform15" class="btn_style"> Next</a>
        </div>
        </form>
      </div>
      <!--host form13 end here-->
      <!--host form14 start here-->
      <div id="hostform15">
        <form id="hostPrice">
        <div class="host_formdiv input_field">
          <div class="form_group">
            <p>Set Price</p>
            <div class="select_tag">
              <select class="form-control" name="currency" id="currency" required>
                <option value="">Select Currency</option>
                <option value="Dollar" <?php if ($all_data['currency'] == 'Dollar') {?> selected <?php } ?>>Dollar</option>
                <!-- <option value="Euro"<?php if ($all_data['currency'] == 'Euro') {?> selected <?php } ?>>Euro</option>
                <option value="Pound"<?php if ($all_data['currency'] == 'Pound') {?> selected <?php } ?>>Pound</option> -->
                <option value="Rupees"<?php if ($all_data['currency'] == 'Rupees') {?> selected <?php } ?>>Rupees</option>
              </select>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
             </div>
            <div id="currency-error" class="form_error"></div>
          </div>
          <div class="form_group">
            <div class="cost_field">
              <input type="text" name="basePrice" id="basePrice" value="<?=$all_data['base_price']?$all_data['base_price']:'';?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Base Price">
              <i aria-hidden="true" id="changeIcons" class="fa fa-usd"></i>
            </div>
            <div id="basePrice-error" class="form_error"></div>
          </div>
      
          <div class="form_group" id="halfdayCheck">
            <div class="cost_field">
              <input type="text" name="halfDayPrice" id="halfDayPrice" value="<?=$all_data['half_day_price']?$all_data['half_day_price']:'';?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Half Day Price">
              <i aria-hidden="true" id="changeIconsH" class="fa fa-usd"></i>
            </div>
            <div id="halfDayPrice-error" class="form_error"></div>
          </div>

          <div class="flexdiv">
            <div class="form_group">
              <p>Min<small>*when there is low demand</small></p>
              <div class="cost_field">
              <input type="text" name="minPrice" id="minPrice" value="<?=$all_data['min_price']?$all_data['min_price']:'';?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="4500">
              <i aria-hidden="true" id="changeIcons2" class="fa fa-usd"></i>
              </div>
              <div id="minPrice-error" class="form_error"></div>
            </div>
            <div class="form_group">
              <p>Max<small>*when there is high demand</small></p>
              <div class="cost_field">
              <input type="text" name="maxprice" id="maxprice" value="<?=$all_data['max_price']?$all_data['max_price']:'';?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="8900">
              <i aria-hidden="true" id="changeIcons3" class="fa fa-usd"></i>
              </div>
              <div id="maxprice-error" class="form_error"></div>
            </div>
          </div>

          <div class="form_group">
            <div class="cost_field">
            <input type="text" name="cleanFee" id="cleanFee" value="<?=$all_data['cleaning_fee']?$all_data['cleaning_fee']:'';?>" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Cleaning Fee">
            <i aria-hidden="true" id="changeIcons4" class="fa fa-usd"></i>
            </div>
            <div id="cleanFee-error" class="form_error"></div>
          </div>
          <div class="form_group">
        <div>Tip:Please keep the cleaning fees to its actual price and as low as possible since most of the travelers find cleaning fees as an overhead. This can help your listing to get more bookings.</div>
      </div>
        </div>
        <div class="host_formfooter">
          <a href="javascript:void(0)" data-next="hostform14" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" id="btnafter_submit" class="btn_style"> Next</a>
        </div>
        </form>
      </div>


      <div id="hostform16">
        <form id="hostInsurance">
        <div class="host_formdiv input_field">
          <input type="hidden" name="insurance" value="1">
          
          
<span class="form_heading"><h4>Insurance(Proper Insurance):</h4></span>
<div class="text-justify">

<p>Bagpackar is committed to guide host to get their property insured. Bagpackar has worked together with “Proper Insurance” to provide best insurance and coverage for your property. We highly recommend getting your property covered through Proper Insurance.
</p>
<p>Proper Insurance is a commercial business policy that is designed to entirely replace the current insurance you have for your home. It provides comprehensive coverage for your building(s), contents, business income, and comes with $1,000,000 of commercial general liability standard. </p>

<p>Please click the button below to get your home insured. All the coverage is listed under the Proper Insurance page. To get the insurance, please get the quote and enter all the required details in the “Proper Insurance” page to get your property covered. </p>

<p><a href="https://proper.ositracker.com/160692/8728" class="btn_style" target="_blank">Get Insurance</a></p>

</div>
<span class="form_heading"><h4>Why insurance is important?</h4></span>

<div class="text-justify">
<p>Commercial short-term rental insurance comes with a higher level of underwriting which ultimately means safer properties for the public. Proper Insurance offers a level of protection unmatched in the industry, but not every property is a fit. Having a commercial insurance requirement for short-term rentals is good for the owners and good for the city. Other hospitality entities including bed and breakfasts and hotels carry commercial insurance, short-term rentals should be no different.</p>
</div>
<span class="form_heading"><h4>Proper Insurance Policy Highlights:</h4></span>
<div class="text-justify">
<ul>
<li>Commercial policy designed to replace your current coverage</li>
<li>Special cause of loss (all-risk) for the building and contents</li>
<li>Replacement cost valuation (new for old)</li>
<li>$1,000,000 of commercial general liability standard</li>
<li>Optional $2,000,000 of commercial general liability</li>
<li>No limit on damage caused by a guest</li>
<li>No limit on theft or vandalism</li>
<li>Liquor liability coverage and pet liability</li>
<li>Liability extended to amenities such as pools, hot tubs, bicycles, exercise equipment, small watercraft + more</li>
<li>Actual loss sustained business income with no time limit</li>
<li>Bed bug enhancement which triggers lost business income</li>
<li>Underwritten by Lloyd’s of London, AM Best’s Rated A</li>
</ul>
<p>Above mentioned details are the overview of some coverage under Proper Insurance. These insurance coverages may vary depending upon the homeowner’s property type. Please read all the details on the Proper Insurance’s website before proceeding further. Bagpackar is not responsible for resolving any conflicts between property owner and Proper Insurance. All Property owners, as of now, have the option to get their property covered through Proper Insurance. Bagpackar continue to work on getting homeowners property more secure and insured.</p>
  </div> 
   
      </div>
        <div class="host_formfooter">
          <a href="javascript:void(0);" data-next="hostform15" class="hostbtnback">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.846 17.778">
              <path class="a"
                d="M22.838,13.505H11.377l4.445-4.252a1.771,1.771,0,0,0,0-2.421,1.584,1.584,0,0,0-2.314,0l-7.4,7.177a1.631,1.631,0,0,0-.482,1.2v.021a1.631,1.631,0,0,0,.482,1.2l7.4,7.177a1.584,1.584,0,0,0,2.314,0,1.771,1.771,0,0,0,0-2.421l-4.445-4.252H22.833a1.677,1.677,0,0,0,1.639-1.714A1.659,1.659,0,0,0,22.838,13.505Z"
                transform="translate(-5.625 -6.33)"></path>
            </svg>
            Back
          </a>
          <a href="javascript:void(0);" id="insuranceSubmit" class="btn_style"> Next</a>
        </div>
        </form>
      </div>


      <input type="hidden" id="hostId" value="<?=$all_data['host_id']?>">
      <input type="hidden" id="userId" value="<?php echo $_SESSION['webuser_bgpkr']['user_id'];?>">
      <input type="hidden" id="hostlastform" value="0">
    <!-- </form> -->
      <!--host form14 end here-->
    </div>
    <div class="host_img">
      <div id="hostmapwr">
          <div id="hostmap">
         
         </div>
    </div>
    </div>
  </div>
  
  <div class="modal fade" id="aftersubmit" role="dialog" data-keybord="false" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="<?php echo base_url();?>assets/images/after_hostformsucess.png" alt="">
          <p id="popText">
            <span class="hostsubnote">Property submitted successfully! </span>
            Once approved from admin, it will be shown to the travelers
          </p>
          <a href="<?php echo base_url();?>property" class="btn_style">Ok</a>
        </div>
      </div>
    </div>
  </div>
  <!--after submit end here-->
   <div id="lsfmodal" class="modal otpopen" role="dialog" data-keybord="false" data-backdrop="static">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-body">
              <div class="lsf_wrapper otpwr" id="otp_popup">
                  <div class="lsf_formfield">
                    <div class="logodiv">
                      <img src="https://www.bagpackar.in/assets/images/logo.png" alt="">
                    </div>
                    <div class="lsf_header">
                        <span class="clearfix"> OTP Verification</span>
                      </div>
                      <form method="post" id="otp_form">
                        <div class="lsf_body">
                          <div class="form-group">
                            <div class="digit-group">
                              <input type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
                              <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
                              <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
                              <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
                              <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" maxlength="1">
                              <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" maxlength="1">
                            </div>
                            <span id="otp_error" class="form_error"></span>
                          </div>
                          <div class="form-group">
                            <span class="lsline text-left">Didn’t Received the Code?<button type="button" class="resendtext" id="resend">Resend
                            Now</button></span>
               
                      <div id="recaptcha-container1" data-sitekey="6LehK-wUAAAAAHCEyAOzzx8st9rvIzpRx79EHbsJ
                            "data-callback="verifyCaptcha1" style="transform:scale(1.01);-webkit-transform:scale(1.01);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                              <input type="hidden" id="reCaptcha1">
                            <span id="recaptcha_error1" class="form_error"></span> 
                            <div id="time_left" >Time left  <span id="timer"></span></div>  
    
                      
                          </div>
                        </div>
                        <div class="lst_footer">
                          <div class="form-group">
                            <input type="submit" value="Submit" class="btn_style" id="otp_submit">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="otpbgimg lsf_img"></div>
                  </div>
                </div>
                <!--otp popup end here-->
              </div>
            </div>
          </div>

</body>
 <!-- <script src="<?php echo base_url();?>assets/js/countrystatecity.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script> -->
<script>
   $(document).ready(function(){
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });
  });

 var form2="<?php echo $form_status['form_2'];?>";
 var form4="<?php echo $form_status['form_4'];?>";
 var form5="<?php echo $form_status['form_5'];?>";
 var form6="<?php echo $form_status['form_6'];?>";
 var form7="<?php echo $form_status['form_7'];?>";
 var form8="<?php echo $form_status['form_8'];?>";
 var form9="<?php echo $form_status['form_9'];?>";
 var form10="<?php echo $form_status['form_10'];?>";
 var form11="<?php echo $form_status['form_11'];?>";
 var form12="<?php echo $form_status['form_12'];?>";
 var form13="<?php echo $form_status['form_13'];?>";
 var form14="<?php echo $form_status['form_14'];?>";
 var form15="<?php echo $form_status['form_15'];?>";
 var form16="<?php echo $form_status['form_16'];?>";
  var formval='0';
 $( document ).ready(function() {
     switch(formval) {
              case form2:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform2');
              break;

              case form4:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform4');
              break;

              case form5:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform5');
              break;

              case form6:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform6');
              break;

              case form7:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform7');
              break;

              case form8:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform8');
              break;

              case form9:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform9');
              break;

              case form10:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform10');
              break;

              case form11:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform11');
              break;

              case form12:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform12');
              break;

              case form13:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform13');
              break;

              case form14:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform14');
              break;

              case form15:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform15');
              break;

              default:
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform16');
            }

  });


 $(document).ready(function(){
   $(".loaderCntr").hide();
   $("html").animate({scrollTop: 0}, 500);
   checkSameDay();
  });

<?php $country_code1=@$all_data['lang_code']?$all_data['lang_code']:'';
    $guest_country = $this->session->userdata('guest_country');
if ($country_code1 == '') {
if($guest_country == "India"){
  $country_code1 = 'IN'; 
 } else{
 $country_code1 = 'US';
}
}
?>
 var input = document.querySelector("#country_code");
 var iti =window.intlTelInput(input, {
 allowDropdown: true,
 autoPlaceholder: "off",
 initialCountry: "<?php echo $country_code1;?>",
 separateDialCode: true,
 utilsScript: "<?php echo base_url();?>assets/js/utils.js",
});

<?php $country_code=@$all_data['lang_code_other']?$all_data['lang_code_other']:'';
$guest_country = $this->session->userdata('guest_country');
if ($country_code == '') {
if($guest_country == "India"){
  $country_code = 'IN'; 
 } else{
 $country_code = 'US';
}
}
?>
 var input22 = document.querySelector("#country_code2");
 var iti2 =window.intlTelInput(input22, {
 allowDropdown: true,
 autoPlaceholder: "off",
 initialCountry: "<?php echo $country_code;?>",
 separateDialCode: true,
 utilsScript: "<?php echo base_url();?>assets/js/utils.js",
});

//  $('.loaderCntr').bind('ajaxStart', function(){
//     $(this).show();
// }).bind('ajaxStop', function(){
//     $(this).hide();
// });

  function changeRadioValue(valDrop){
      var valSelectBox = $(this).val();
      $('#'+valDrop).val(valSelectBox);
  }
   

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
            
            return true;
      
      }
    $(document).on('keypress', '#hostname', function (event) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

  $('#skipImages').on('click', function (event) {
      $("html").animate({scrollTop: 0}, 500);
      $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
      $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform9')
      $('#backImages').attr('data-next','backImages');
    });

  $('.host_formfooter a[data-next]').on('click', function (event) {
    
    if ($(this).attr('data-next') == 'hostform1') {
      //alert('1')
      $("html").animate({scrollTop: 0}, 500);
      $(this).parents('#host_wrapper').removeClass();
      $(this).parents('#host_wrapper').addClass('hostform1');
    }

    // else if ($(this).attr('data-next') == 'skipVehicle') {
    //   $(this).parents('#host_wrapper').removeClass();
    //   $(this).parents('#host_wrapper').addClass('hostform4');
    // }

    // else if ($(this).attr('data-next') == 'skipImages') {
    //   //alert('1')
    //   $("html").animate({scrollTop: 0}, 500);
    //   $(this).parents('#host_wrapper').removeClass();
    //   $(this).parents('#host_wrapper').addClass('hostform9');
    //   $('#skipBack').attr('data-next','backImages');
    // }

    else if ($(this).attr('data-next') == 'backImages') {
      //alert('1')
      $("html").animate({scrollTop: 0}, 500);
      $(this).parents('#host_wrapper').removeClass();
      $(this).parents('#host_wrapper').addClass('hostform9');
      $('#backImages').attr('data-next','hostform9');
    }
//first page
    else if ($(this).attr('data-next') == 'hostform2') {
       var formStatus = true;
       if ($("#typePlace").val().trim() == "") 
        {    
        formStatus = false;      
        $("#typePlace-error" ).text( "Please select the type of place" ).show().fadeOut( 5000 );
        $("#typePlace" ).first().focus();
        // $("#typePlace").focus();
        // $('#typePlace').blur();
        }

        if ($("#propertyType").val().trim() == "") 
        {      
        formStatus = false;      
        $("#propertyType-error" ).text( "Please select the type of property" ).show().fadeOut( 5000 );
        }
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
         var typeOfPlace = $('#typePlace').val();
         var property = $("#propertyType").val();
         var hostId = $('#hostId').val();
         $(".loaderCntr").show();
         $.ajax({
    
         url: '<?php echo base_url('web/host/hostplaceDetail'); ?>',
         type: 'POST',
         data:{"place":typeOfPlace,"property":property,"hostId":hostId},
         success: function (data) {
     
         $(".loaderCntr").hide();
         if (data == 'load') {
          location.reload();
         }
         else if(data != false){
              $('#hostId').val(data);
              $("html").animate({scrollTop: 0}, 500);
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform2');
             }
         }
         });
      }

    }

//second page
    else if ($(this).attr('data-next') == 'hostform3') {
       var formStatus = true;
        if ($("#parkingType").val().trim() == "") 
        {      
        formStatus = false;      
        $("#parkingType-error" ).text( "Please select the parking type" ).show().fadeOut( 5000 );
        $("#parkingType" ).first().focus();
        }
     
        if ($("#dedicatedGuest").val().trim() == "") 
        {      
        formStatus = false;      
        $("#dedicatedGuest-error" ).text( "Please select the dedicated guest" ).show().fadeOut( 5000 );
        $("#dedicatedGuest" ).first().focus();
        }

       if ($("#roomType").val().trim() == "") 
        {    
        formStatus = false;      
        $("#roomType-error" ).text( "Please select the type of room" ).show().fadeOut( 5000 );
        $("#roomType" ).first().focus();
        }

        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
    var room = $('#roomType').val();
    var dedicated = $("#dedicatedGuest").val();
    var parking = $("#parkingType").val();
    var hostId = $('#hostId').val();
    $(".loaderCntr").show();
   $.ajax({
  //async: false,
  url: '<?php echo base_url('web/host/hostPlace2nd'); ?>',
  type: 'POST',
  data:{"room":room,"dedicated":dedicated,"parking":parking,"hostId":hostId},
  success: function (data) {
   dataVal = data;
   $(".loaderCntr").hide();
   if(data != false){
        $("html").animate({scrollTop: 0}, 500);
        $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
        $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform4');
      }
   }
   });
       
        }
    }

 //third page
//     else if ($(this).attr('data-next') == 'hostform4') {
//      var formStatus = true;
//        if ($("#vehicleCost").val().trim() == "") 
//         {      
//         formStatus = false;      
//         $("#vehicleCost-error" ).text( "Please select the parking type" ).show().fadeOut( 5000 );
//         $("#vehicleCost" ).first().focus();
//         }

//         var vehicle_img = [];
//         $("input[name='vehicle_img[]']").each(function() {
//         var val = $(this).val();
//         if (val) {
//         vehicle_img.push(val);
//         }
//         });
  
//         if (vehicle_img.length === 0) 
//         {
//         formStatus = false; 
//         $("#vehicle_img-error" ).text( "Please select at least one vehicle image." ).show().fadeOut( 5000 );
//         $("#vehicleModel" ).first().focus();
//         }

//         if ($("#vehicleModel").val().trim() == "") 
//         {      
//         formStatus = false;      
//         $("#vehicleModel-error" ).text( "Please select the model of vehicle" ).show().fadeOut( 5000 );
//         $("#vehicleModel" ).first().focus();
//         }

//         if ($("#vehicleBrand").val().trim() == "") 
//         {      
//         formStatus = false;      
//         $("#vehicleBrand-error" ).text( "Please select the brand of vehicle" ).show().fadeOut( 5000 );
//         $("#vehicleBrand" ).first().focus();
//         }

//        if ($("#vehicleType").val().trim() == "") 
//         {    
//         formStatus = false;      
//         $("#vehicleType-error" ).text( "Please select the type of vehicle" ).show().fadeOut( 5000 );
//         $("#vehicleType" ).first().focus();
//         }

        
//         if (!formStatus) 
//         {     
//           event.preventDefault();    
//         }
//         else{
// //showLoader();
// var hostId = $('#hostId').val();
// var fd = new FormData($("#vehicleData")[0]);
// // var allData = $("#vehicleData").serializeArray();

// // $.each($('input[name="vehicle_img[]"]'), function(i, obj) {
// //     $.each(obj.files,function(j, file){
// //             fd.append('allImage['+i+']', file);
// //         })
// // });
              
// // $.each(allData,function(key,input){
// //     fd.append(input.name,input.value);
// // }); 
// fd.append('hostId',hostId);   
// $(".loaderCntr").show();
// $.ajax({
//   //async: false,
//   url: '<?php echo base_url('web/host/hostVehicleDetail'); ?>',
//   type: 'POST',
//   data: fd,
//   contentType: false,
//   processData: false,
  
//   success: function (data) {
//    console.log(data)
//    //dataVal = data;
//    $(".loaderCntr").hide();
//    if(data != false){
//         $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
//         $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform4');
//           }
//    }
//    });
       
//         }
//     }

    else if ($(this).attr('data-next') == 'hostform5') {

       var formStatus = true; 
       var ib=1;
        $( ".totalbed" ).each(function( index ) {
          var valBed = $(this).val();
          if (valBed == 0) {
        formStatus = false;    
        $("#totalbed-error"+ib).text("Please select at least 1 bed for bedroom "+ib).show().fadeOut( 5000 );  
        var scroll_id=document.getElementById('showText'+ib);
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'})
          }
          ib++;
        });

       if ($("#noOfBathroom").val() < 0.5) 
        {      
        
        formStatus = false;      
        $("#noOfBathroom-error" ).text( "Please select the bathrooms" ).show().fadeOut( 5000 );
        //$("#noOfBathroom" ).first().focus();
        var scroll_id=document.getElementById('noOfBathroom');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'})
        }

        if ($("#noBedsGuset").val().trim() == "") 
        {      
        formStatus = false;      
        $("#noBedsGuset-error" ).text( "Please select the guest's beds" ).show().fadeOut( 5000 );
        $("#noBedsGuset" ).first().focus();
        }

        if ($("#noBeds").val() < 0) 
        {      
        formStatus = false;      
        $("#noBeds-error" ).text( "Please select the number of beds" ).show().fadeOut( 5000 );
        //$("#noBeds" ).first().focus();
        var scroll_id=document.getElementById('noBeds');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'})
        }

       if ($("#noGuest").val() < 1) 
        {    
        formStatus = false;      
        $("#noGuest-error" ).text( "Please select the number of guest" ).show().fadeOut( 5000 );
        //$("#noGuest" ).first().focus();
        var scroll_id=document.getElementById('noGuest');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'})
        }

        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
  
        var hostId = $('#hostId').val();
        var fd = new FormData($("#bedroomData")[0]);
        // var allData = $("#bedroomData").serializeArray();
        
        // $.each(allData,function(key,input){
        //   fd.append(input.name,input.value);
        // }); 
        fd.append('hostId',hostId);   
        $(".loaderCntr").show();
        
        $.ajax({
         // async: false,
          url: '<?php echo base_url('web/host/hostBedroomsDetail'); ?>',
          type: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
           //dataVal = data;
           $(".loaderCntr").hide();
            if(data != false){
              $("html").animate({scrollTop: 0}, 500);
            $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
            $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform5');
           }
           }
           });
            
        }
    }
    else if ($(this).attr('data-next') == 'hostform6') {
       var formStatus = true;
       if ($("#zipcode").val().trim() == "") 
        {      
        formStatus = false;      
        $("#zipcode-error" ).text( "Please enter the zipcode" ).show().fadeOut( 5000 );
        $("#zipcode" ).focus();
        }

        if ($("#cityId").val().trim() == "") 
        {      
        formStatus = false;      
        $("#cityId-error" ).text( "Please enter the city" ).show().fadeOut( 5000 );
        $("#cityId" ).focus();
        } 

        if ($("#stateId").val().trim() == "") 
        {      
        formStatus = false;      
        $("#stateId-error" ).text( "Please enter the state" ).show().fadeOut( 5000 );
        $("#stateId").focus();
        }

        // if ($("#streetaddresss").val().trim() == "") 
        // {      
        // formStatus = false;      
        // $("#streetaddresss-error" ).text( "Please enter the street addresss" ).show().fadeOut( 5000 );
        // $("#streetaddresss").focus();
        // }

        if ($("#countryId").val().trim() == "") 
        {      
        formStatus = false;      
        $("#countryId-error" ).text( "Please select the country" ).show().fadeOut( 5000 );
        $("#countryId" ).first().focus();
        }
   
        if ($("#location").val().trim() == "") 
        {    
        formStatus = false;      
        $("#location-error" ).text( "Please enter the location" ).show().fadeOut( 5000 );
        $("#location").focus();
        }

        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#addressData")[0]);
        fd.append('hostId',hostId);
        $(".loaderCntr").show();   
        
        $.ajax({
          url: '<?php echo base_url('web/host/hostAddressDetail'); ?>',
          type: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
           //dataVal = data;
        $(".loaderCntr").hide();
        if(data != false){
        $("html").animate({scrollTop: 0}, 500);
        $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
        $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform6');
         }
           }
           });
        }
     }
    else if ($(this).attr('data-next') == 'hostform7') {
        var formStatus = true;
        var amenitiesSafty = [];
        $("input[name='amenitiesSafty[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        amenitiesSafty.push(val);
        }
        });
       
        if (amenitiesSafty.length === 0) 
        {
        formStatus = false; 
        $("#amenitiesSafty-error" ).text( "Please select at least one safty amenities." ).show().fadeOut( 5000 );
        //document.getElementById('outside').scrollIntoView();
        var scroll_id=document.getElementById('outside');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }
     
        var outside = [];
        $("input[name='outside[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        outside.push(val);
        }
        });
       
        if (outside.length === 0) 
        {
        formStatus = false; 
        $("#outside-error" ).text( "Please select at least one Outside amenities." ).show().fadeOut( 5000 );
        //document.getElementById('outside').scrollIntoView();
        var scroll_id=document.getElementById('outside');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }


        var entertainment = [];
        $("input[name='entertainment[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        entertainment.push(val);
        }
        });
       
        if (entertainment.length === 0) 
        {
        formStatus = false; 
        $("#entertainment-error" ).text( "Please select at least one Entertainment amenities." ).show().fadeOut( 5000 );
        //document.getElementById('entertainment').scrollIntoView();
        var scroll_id=document.getElementById('entertainment');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

     
        var amenitiesSafty1 = [];
        $("input[name='bedBaths[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        amenitiesSafty1.push(val);
        }
        });
       
        if (amenitiesSafty1.length === 0) 
        {
        formStatus = false; 
$("#bedBaths-error" ).text( "Please select at least one Bed and Baths amenities." ).show().fadeOut( 5000 );
        //document.getElementById('bed_n_bath').scrollIntoView();
        var scroll_id=document.getElementById('bed_n_bath');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        
        var amenitiesList = [];
        $("input[name='kitchenDining[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        amenitiesList.push(val);
        }
        });
       
        if (amenitiesList.length === 0) 
        {
        formStatus = false; 
        $("#kitchenDining-error" ).text( "Please select at least one kitchen/Dining amenities." ).show().fadeOut( 5000 );
        //document.getElementById('kitchen').scrollIntoView();
        var scroll_id=document.getElementById('kitchen');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        var amenitiesAll = [];
        $("input[name='basic[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        amenitiesAll.push(val);
        }
        });
       
        if (amenitiesAll.length < 14) 
        {
        formStatus = false; 
        $("#basic-error" ).text( "Please select all of these amenities." ).show().fadeOut( 5000 );
        // document.getElementById('basic').scrollIntoView();
        var scroll_id=document.getElementById('basic');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }
       
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
         var hostId = $('#hostId').val();
         var fd = new FormData($("#amenitiesData")[0]);
        fd.append('hostId',hostId);  
        $(".loaderCntr").show(); 
        
        $.ajax({
          //async: false,
          url: '<?php echo base_url('web/host/hostamenitiesDetail'); ?>',
          type: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          success: function (data) {
            console.log(data);
           $(".loaderCntr").hide();
           if(data != false){
              $("html").animate({scrollTop: 0}, 500);
              $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
              $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform7');
           }
           }
           });
      
      }
    }
    else if ($(this).attr('data-next') == 'hostform8') {
        var formStatus = true;
        var guestSpaces = [];
        $("input[name='guestSpaces[]']:checked").each(function() {
        var val = $(this).val();
        if (val) {
        guestSpaces.push(val);
        }
        });
       
        if (guestSpaces.length === 0) 
        {
        formStatus = false; 
        $("#guestSpaces-error" ).text( "Please select at least one space for use of guests." ).show().fadeOut( 5000 );
        document.getElementById('space').scrollIntoView();
        }
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
      else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#otherPlaceSpaces")[0]);
        fd.append('hostId',hostId);   
        $(".loaderCntr").show();

        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostSpacesDetail'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
          if(data != false){
            $("html").animate({scrollTop: 0}, 500);
            $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
            $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform8');
          }
         }
         });
        
      }
        
    }
    else if ($(this).attr('data-next') == 'hostform9') {
        var formStatus = true;
        var otherImages = [];
        var postotherImages = [];

        
        $("input[name='otheimage[]']").each(function() {
        var valp = $(this).val();
        if (valp) {
        postotherImages.push(valp);
        }
        });

        $("input[name='otherImages[]']").each(function() {
        var val1 = $(this).val();
        if (val1) {
        otherImages.push(val1);
        }
        });
        if ($('input[name="otherImgCover"]:checked').length == 0) {
         formStatus = false;
         $("#otherImages-error").text('Please select others images cover').show().fadeOut(5000);
         //document.getElementById('oimgFocus').scrollIntoView();
         var scroll_id=document.getElementById('oimgFocus');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }
    
        if (postotherImages.length == 0 && otherImages.length == 0) 
        {
        formStatus = false; 
        $("#otherImages-error" ).text( "Please select at least one other image." ).show().fadeOut( 5000 );
        //document.getElementById('kimgFocus').scrollIntoView();
        var scroll_id=document.getElementById('oimgFocus');
        window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }
        
        var kitchenImages = [];
        var postkitchenImages = [];
        
        $("input[name='kitimage[]']").each(function() {
        var valp = $(this).val();
        if (valp) {
        postkitchenImages.push(valp);
        }
        });
        $("input[name='kitchenImages[]']").each(function() {
        var val1 = $(this).val();
        if (val1) {
        kitchenImages.push(val1);
        }
        });
        if ( $('input[name="kitchenCover"]:checked').length == 0) {
         formStatus = false;
         $("#kitchenImages-error").text('Please select kitchen cover image').show().fadeOut(5000);
         //document.getElementById('kimgFocus').scrollIntoView();
         var scroll_id=document.getElementById('kimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        if (postkitchenImages.length === 0 && kitchenImages.length === 0) 
        {
        formStatus = false; 
        $("#kitchenImages-error" ).text( "Please select at least one kitchen image." ).show().fadeOut( 5000 );
        //document.getElementById('kimgFocus').scrollIntoView();
        var scroll_id=document.getElementById('kimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

       
        var bathsroomImages = [];
        var postbathsroomImages = [];
        $("input[name='bathimage[]']").each(function() {
        var val2p = $(this).val();
        if (val2p) {
        postbathsroomImages.push(val2p);
        }
        });

        $("input[name='bathsroomImages[]']").each(function() {
        var val2 = $(this).val();
        if (val2) {
        bathsroomImages.push(val2);
        }
        });
        
        if ( $('input[name="bathroomCover"]:checked').length == 0) {
         formStatus = false;
         $("#bathsroomImages-error").text('Please select bathroom cover image').show().fadeOut(5000);
         //document.getElementById('bimgFocus').scrollIntoView();
         var scroll_id=document.getElementById('bimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        if (postbathsroomImages.length === 0 && bathsroomImages.length === 0) 
        {
        formStatus = false; 
        $("#bathsroomImages-error" ).text( "Please select at least one bathsroom image." ).show().fadeOut( 5000 );
        //document.getElementById('bimgFocus').scrollIntoView();
        var scroll_id=document.getElementById('bimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        
        var bedroomImages = [];
        var postbedroomImages = [];

        $("input[name='imageBed[]']").each(function() {
        var valp1 = $(this).val();
        if (valp1) {
        postbedroomImages.push(valp1);
        }
        });
        $("input[name='bedroomImages[]']").each(function() {
        var val = $(this).val();
        if (val) {
        bedroomImages.push(val);
        }
        });

       
        if ( $('input[name="bedroomCover"]:checked').length == 0) {
         formStatus = false;
         $("#bedroomImages-error").text('Please select bedrooms cover image').show().fadeOut(5000);
         //document.getElementById('bedimgFocus').scrollIntoView();
         var scroll_id=document.getElementById('bedimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        if (postbedroomImages.length === 0 && bedroomImages.length === 0) 
        {
        formStatus = false; 
        $("#bedroomImages-error" ).text( "Please select at least one bedroom image." ).show().fadeOut( 5000 );
        //document.getElementById('bedimgFocus').scrollIntoView();
        var scroll_id=document.getElementById('bedimgFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        // if (otherImages.length === 0) 
        // {
        // formStatus = false; 
        // $("#otherImages-error" ).text( "Please select at least one kitchen image." ).show().fadeOut( 5000 );
        // }


        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#bedbathkitchen")[0]);
        fd.append('hostId',hostId); 
        $(".loaderCntr").show();  
        
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/editplacesImages'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
         if(data != false){
          $("html").animate({scrollTop: 0}, 500);
           $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
           $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform9');
           $('#bedchange').val('notchange');
           $('#bathchange').val('notchange');
           $('#kitchange').val('notchange');
           $('#otherchange').val('notchange');
          }
         }
         });
        
        }  
    }
    else if ($(this).attr('data-next') == 'hostform10') {
       var formStatus = true;
        
        if ($("#aboutNeighborhood").val().trim() == "") 
        {      
        formStatus = false;      
        $("#aboutNeighborhood-error" ).text( "Please enter about your neighborhood" ).show().fadeOut( 5000 );
        $("#aboutNeighborhood" ).focus();
        }

        if ($("#description").val().trim() == "") 
        {      
        formStatus = false;      
        $("#description-error" ).text( "Please enter the description" ).show().fadeOut( 5000 );
        $("#description" ).focus();
        }

        if ($("#listingDescribe").val().trim() == "") 
        {    
        formStatus = false;      
        $("#listingDescribe-error" ).text( "Please enter the list" ).show().fadeOut( 5000 );
        $("#listingDescribe" ).focus();
        }
        
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
       else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#listDescription")[0]);
        fd.append('hostId',hostId); 
        $(".loaderCntr").show();  
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostListDescription'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
         if(data != false){
          $("html").animate({scrollTop: 0}, 500);
           $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
           $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform10');
         }
         }
         });
       }
     }
    else if ($(this).attr('data-next') == 'hostform11') {
        var formStatus = true;
        // var valImgh = $("#Host_img").val();
        // if (!valImgh.match(/(?:jpeg|jpg|png|bmp)$/)) {
        // formStatus = false;      
        // $("#Host_img-error" ).text( "Please Choose the valid image" ).show().fadeOut( 5000 ); 
        // }
        var verifyMob = 1;
        if ($("#intro").val().trim() == "") 
        {   
        verifyMob = 3;   
        formStatus = false;      
        $("#intro-error" ).text( "Please introduce yourself" ).show().fadeOut( 5000 );
        $("#intro").focus();
        }

        var govtIdImages = [];
        var postgovtIdImages = [];

        $("input[name='govimage[]']").each(function() {
        var val = $(this).val();
        if (val) {
        postgovtIdImages.push(val);
        }
        });

        $("input[name='govtId[]']").each(function() {
        var val = $(this).val();
        if (val) {
        govtIdImages.push(val);
        }
        });
        var totalGovid = govtIdImages.length+postgovtIdImages.length;

        if (totalGovid < 2) 
        {
          verifyMob = 3;
        formStatus = false; 
        $("#govtId-error" ).text( "Please select government id images." ).show().fadeOut( 5000 );
        //document.getElementById('govImg').scrollIntoView();
        var scroll_id=document.getElementById('govImg');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }
   
        var other_phone = $('#otherphone').val();
        if($.isNumeric(other_phone) && other_phone != '' )
       {
      
        var countryData = iti2.getSelectedCountryData();
        var lang_code=countryData.iso2;
        $.ajax({
          async: false,
          type:'POST',
          url:'<?php echo base_url()?>web/host/phone_verification',
          data:{"phone":other_phone,"country_code":lang_code},
          success:function (data) {
            dataval2 = data;
          }
         });
        if(dataval2 == 0)
            {
              verifyMob = 3;
              formStatus = false; 
              $("#otherphone-error").text('Please enter valid number.').show().fadeOut(5000);
              $("#otherphone").focus();
            }
        }

        var business_phone = $('#primaryphone').val();
        if($.isNumeric(business_phone) && business_phone != '' )
       {
      
        var countryData = iti.getSelectedCountryData();
        var lang_code=countryData.iso2;
        var code =countryData.dialCode;
        var countrycode='+' + code;

        $.ajax({
          async: false,
          type:'POST',
          url:'<?php echo base_url()?>web/host/phone_verification',
          data:{"phone":business_phone,"country_code":lang_code},
          success:function (data) {
            dataval = data;
            
          }
         });
        if(dataval == 0)
            { 
              verifyMob = 3;
              formStatus = false; 
              $("#primaryphone-error").text('Please enter valid number.').show().fadeOut(5000);
              $("#primaryphone").focus();
            }
        }

        if ($("#primaryphone").val().trim() == "") 
        { 
        verifyMob = 3;     
        formStatus = false;      
        $("#primaryphone-error" ).text( "Please enter the mobile number" ).show().fadeOut( 5000 );
        $("#primaryphone").focus();
        }

        if ($("#hostname").val().trim() == "") 
        {
        verifyMob = 3;    
        formStatus = false;      
        $("#hostname-error" ).text( "Please enter the list" ).show().fadeOut( 5000 );
        $("#hostname").focus();
        }

        if ($("#Host_img").val().trim() == '' && $('#hostuserImg').val().trim() == '') 
        {  
        verifyMob = 3;   
        formStatus = false;      
        $("#Host_img-error" ).text( "Please select the image" ).show().fadeOut( 5000 ); 
        //document.getElementById('hostImg').scrollIntoView();
        var scroll_id=document.getElementById('hostImg');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
        }

        // if ($("#otherphone").val().trim() == "") 
        // {      
        // formStatus = false;      
        // $("#otherphone-error" ).text( "Please enter the description" ).show().fadeOut( 5000 );
        // }
        var bphone = $('#primaryphone').val();
        var hostId = $('#hostId').val();
        if ($('#primaryphone').val().trim() != '') {
        $.ajax({
        async: false,
        url: '<?php echo base_url('web/host/hostmobcheck'); ?>',
        type: 'POST',
        data:{"hostId":hostId,"mobno":bphone},
        success: function (data) {
          datavalv = data;
          }
         });

        if (verifyMob == 1 && $("#mobV").val() != bphone && datavalv == '0') {
              formStatus = false;
              var firebase_number=countrycode.toString() + business_phone.toString();
              $(".loaderCntr").show();
              send_otp(firebase_number);
          }
        
        }
        
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
        var hostId = $('#hostId').val();
        var userId = $('#userId').val();
        var countryData = iti.getSelectedCountryData();
        var country_code = countryData.dialCode;
        var lang_code=countryData.iso2;

        var countryData2 = iti2.getSelectedCountryData();
        var country_code2 = countryData2.dialCode;
        var lang_code_other=countryData2.iso2;

        var fd = new FormData($("#hostDetail")[0]);
        fd.append('hostId',hostId);
        fd.append('userId',userId);
        fd.append('country_code',country_code);
        fd.append('lang_code',lang_code);
        fd.append('country_code2',country_code2);
        fd.append('lang_code_other',lang_code_other);   
        $(".loaderCntr").show(); 
        $.ajax({
        url: '<?php echo base_url('web/host/editHostAllDetail'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
         if(data != false){
          $("html").animate({scrollTop: 0}, 500);
           $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
           $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform11');
           $('#hostimgchange').val('notchange');
           $('#idchange').val('notchange');
          }
         }
         });
       }
    }
    else if ($(this).attr('data-next') == 'hostform12') {
      var formStatus = true;  
      if ($('input[name="allowParties"]:checked').length == 0) {
       formStatus = false;
       $("#allowParties-error").text('Please select is suitable or not for event or parties').show().fadeOut(5000);
       //document.getElementById('partyFocus').scrollIntoView();
       var scroll_id=document.getElementById('partyFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="allowSmoking"]:checked').length == 0) {
        formStatus = false;
        $("#allowSmoking-error").text('Please select is suitable or not for pets').show().fadeOut(5000);
        //document.getElementById('smokingFocus').scrollIntoView();
        var scroll_id=document.getElementById('smokingFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }
      
      if ($('input[name="suitablePets"]:checked').length == 0) {
        formStatus = false;
        $("#suitablePets-error").text('Please select is suitable or not for pets').show().fadeOut(5000);
        //document.getElementById('petFocus').scrollIntoView();
        var scroll_id=document.getElementById('petFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="suitableInfants"]:checked').length == 0) {
       formStatus = false;
       $("#suitableInfants-error").text('Please select is suitable or not for fants').show().fadeOut(5000);
       //document.getElementById('childFocus').scrollIntoView();
       var scroll_id=document.getElementById('childFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="suitableChild"]:checked').length == 0) {
      formStatus = false;
      $("#suitableChild-error").text('Please select is suitable or not for child').show().fadeOut(5000);
      //document.getElementById('childFocus').scrollIntoView();
      var scroll_id=document.getElementById('childFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }
      
      if (!formStatus) 
        {     
          event.preventDefault();    
        }
      else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#guestCare")[0]);
        fd.append('hostId',hostId);  
        $(".loaderCntr").show(); 
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostGuestCare'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
          if(data != false){
            $("html").animate({scrollTop: 0}, 500);
           $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
           $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform12');
         }
         }
         });
       
     }
    }
    else if ($(this).attr('data-next') == 'hostform13') {
     // alert('13')
      //noisePotential,petLive,haveWeapon,mediaDevice,otherAnimal
       var formStatus = true; 
      if ($('input[name="otherAnimal"]:checked').length == 0) {
      formStatus = false;
      $("#otherAnimal-error").text('Please select is other animals on property or not').show().fadeOut(5000);
      //document.getElementById('otherAnimalFocus').scrollIntoView();
      var scroll_id=document.getElementById('otherAnimalFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="mediaDevice"]:checked').length == 0) {
      formStatus = false;
      $("#mediaDevice-error").text('Please select is surveillance or recording devices or not').show().fadeOut(5000);
      //document.getElementById('mediaFocus').scrollIntoView();
      var scroll_id=document.getElementById('mediaFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }
      
      if ($('input[name="haveWeapon"]:checked').length == 0) {
      formStatus = false;
      $("#haveWeapon-error").text('Please select is weapon on property or not').show().fadeOut(5000);
      //document.getElementById('weaponFocus').scrollIntoView();
      var scroll_id=document.getElementById('weaponFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="petLive"]:checked').length == 0) {
      formStatus = false;
      $("#petLive-error").text('Please select is pets live on property or not').show().fadeOut(5000);
      //document.getElementById('petLiveFocus').scrollIntoView();
      var scroll_id=document.getElementById('petLiveFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }

      if ($('input[name="noisePotential"]:checked').length == 0) {
      formStatus = false;
      $("#noisePotential-error").text('Please select is noise potential or not').show().fadeOut(5000);
      //document.getElementById('noiseFocus').scrollIntoView();
      var scroll_id=document.getElementById('noiseFocus');
         window.scroll({top: scroll_id.offsetTop, behavior: 'smooth'});
      }
      
      if (!formStatus) 
        {     
          event.preventDefault();    
        }
      else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#guestNoiseKnow")[0]);
        fd.append('hostId',hostId);   
        $(".loaderCntr").show();
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostGuestKnow'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
         if(data != false){
          $("html").animate({scrollTop: 0}, 500);
          $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
          $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform13');
         }
         }
         });
        
       }
    }
    else if ($(this).attr('data-next') == 'hostform14') {
     
      var formStatus = true;

      if ($('input[name="half_day_booking"]:checked').length == 0) {
       formStatus = false;
       $("#halfday-error").text('Please select is half day booking').show().fadeOut(5000);
      }
      
      if ($('#outTo').val().trim() == '') {
      formStatus = false;
      $("#outTo-error").text('Please select the checkout to time').show().fadeOut(5000);
      $("#outTo" ).first().focus();
      }
     
      if ($('#outFrom').val().trim() == '') {
      formStatus = false;
      $("#outFrom-error").text('Please select the checkout from time').show().fadeOut(5000);
      $("#outFrom" ).first().focus();
      }

      if ($('#inTo').val().trim() == '') {
      formStatus = false;
      $("#inTo-error").text('Please select the checkin to time').show().fadeOut(5000);
      $("#inTo" ).first().focus();
      }

      if ($('#inFrom').val().trim() == '') {
      formStatus = false;
      $("#inFrom-error").text('Please select the checkin from time').show().fadeOut(5000);
      $("#inFrom" ).first().focus();
      }

      if ($('#dayCount').val().trim() == '') {
      formStatus = false;
      $("#dayNight-error").text('Please select minimum day for guest can stay').show().fadeOut(5000);
      $("#dayCount" ).first().focus();
      }

      if ($('#nightCount').val().trim() == '') {
      formStatus = false;
    $("#nightCount-error").text('Please select minimum night for guest can stay').show().fadeOut(5000);
      $("#nightCount" ).first().focus();
      }

      if ($('#anytime').val().trim() == '') {
      formStatus = false;
      $("#anytime-error").text('Please select how far can guest book the apartment').show().fadeOut(5000);
      $("#anytime" ).first().focus();
      }
      
      var checkvar = $('#samedm').val();
      if (checkvar =='Same day') {
      if ($('#bookingEnd').val().trim() == '') {
      formStatus = false;
      $("#bookingEnd-error").text('Please select the end time for booking').show().fadeOut(5000);
      $("#bookingEnd" ).first().focus();
      }

      if ($('#bookingStart').val().trim() == '') {
      formStatus = false;
      $("#bookingStart-error").text('Please select the start time for booking').show().fadeOut(5000);
      $("#bookingStart" ).first().focus();
      }

      }

      if ($('#samedm').val().trim() == '') {
      formStatus = false;
      $("#samedm-error").text('Please select the notice period of host need before guest arrives').show().fadeOut(5000);
      $("#samedm" ).first().focus();
      }

      if (!formStatus) 
        {     
          event.preventDefault();    
        }
      else{
        var hostId = $('#hostId').val();
        var fd = new FormData($("#bookingDetails")[0]);
        fd.append('hostId',hostId); 
        $(".loaderCntr").show();  
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostbookingDetails'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         //dataVal = data;
         $(".loaderCntr").hide();
         if(data != false){
          $("html").animate({scrollTop: 0}, 500);
           $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
           $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform14');
         }
         }
         });
       }
    }
    else if ($(this).attr('data-next') == 'hostform15') {
     // alert('15')

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
            $("html").animate({scrollTop: 0}, 500);
            $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
            $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform15');
         }
         }
         });
       
    }
  })
  function readimg(input) {
    var name = input.files[0].name;
    $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
    $(input).parents('.img_ipload').find('input[type=radio]').val(name);
    $(input).parents('.img_ipload').find('input[type=hidden]').remove();
    //$(input).parents('.img_ipload').find('input[type=hidden]').val('change');
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=otherchange]').val('change');
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=kitchange]').val('change');
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=bathchange]').val('change');
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=bedchange]').val('change');
$(input).parents('.img_ipload').parents('.form_group').find('input[name=hostimgchange]').val('change');
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=idchange]').val('change');
    $(input).parents('.img_ipload').removeClass('img_uploadyes');
    $(input).parents('.img_ipload').addClass('img_uploadyes');
  }

  // function readimgVe(input) {
  //   $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
  //   $(input).parents('.img_ipload').removeClass('img_uploadyes');
  //   $(input).parents('.img_ipload').addClass('img_uploadyes');
  // }

  // $(document).on('click','span.del_img', function () {
  //   $(this).parents('.img_ipload').remove();
  // })

  $('.customDropdown,#aftersubmit').on('show.bs.dropdown', 'show.bs.modal', function () {
    $('body').addClass('dropdownopennow');
  })
  $('.customDropdown,#aftersubmit').on('hide.bs.dropdown', 'hide.bs.modal', function () {
    $('body').removeClass('dropdownopennow');
  })
  $('#aftersubmit').on('show.bs.modal', function () {
    $('body').addClass('dropdownopennow');
  })
  $('#aftersubmit').on('hide.bs.modal', function () {
    $('body').removeClass('dropdownopennow');
  })
  $('#btnafter_submit').on('click', function () {
        var formStatus = true; 

        if ($("#cleanFee").val().trim() == "") 
        {      
        formStatus = false;      
        $("#cleanFee-error" ).text( "Please enter the cleaning fees" ).show().fadeOut( 5000 );
        $("#cleanFee").focus();
        }
        
        if ($("#maxprice").val().trim() == "") 
        {      
        formStatus = false;      
        $("#maxprice-error" ).text( "Please enter the max price" ).show().fadeOut( 5000 );
        $("#maxprice").focus();
        }
        
        if ($("#minPrice").val().trim() == "") 
        {      
        formStatus = false;      
        $("#minPrice-error" ).text( "Please enter the min price" ).show().fadeOut( 5000 );
        $("#minPrice").focus();
        }
        
        if ($('input[name="half_day_booking"]:checked').val() == '1') {
        if ($("#halfDayPrice").val().trim() == "") 
        {    
        formStatus = false;      
        $("#halfDayPrice-error" ).text( "Please enter the half day price" ).show().fadeOut( 5000 );
        $("#halfDayPrice").focus();
        }
        }

        if ($("#basePrice").val().trim() == "") 
        {    
        formStatus = false;      
        $("#basePrice-error" ).text( "Please enter the base price" ).show().fadeOut( 5000 );
        $("#basePrice").focus();
        }

        if ($("#currency").val().trim() == '') 
        {     
        formStatus = false;      
        $("#currency-error" ).text( "Please select the currency" ).show().fadeOut( 5000 ); 
        $("#currency").first().focus();
        }

        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
          //$('#validForm').submit();
         var hostId = $('#hostId').val();
        var fd = new FormData($("#hostPrice")[0]);
        fd.append('hostId',hostId);   
        $(".loaderCntr").show();
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostPrice'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         $(".loaderCntr").hide();
         $("html").animate({scrollTop: 0}, 500);
         if(data != false){
          $('.host_formfooter a[data-next]').parents('#host_wrapper').removeClass();
          $('.host_formfooter a[data-next]').parents('#host_wrapper').addClass('hostform16');
         }
        //  if(data != false){
        //   $('#hostlastform').val(1);
        //  $('#aftersubmit').modal('show');
        // }
         }
         });
        
      }
    
  })

   $('#insuranceSubmit').on('click', function () {
        var formStatus = true; 
        
        
        if (!formStatus) 
        {     
          event.preventDefault();    
        }
        else{
          //$('#validForm').submit();
         var hostId = $('#hostId').val();
        var fd = new FormData($("#hostInsurance")[0]);
        fd.append('hostId',hostId);   
        $(".loaderCntr").show();
        $.ajax({
        //async: false,
        url: '<?php echo base_url('web/host/hostInsurance'); ?>',
        type: 'POST',
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
         console.log(data)
         $(".loaderCntr").hide();
         
         if (data == 'notDone') {
          $('#hostlastform').val(1);
          var str ='<p>Thanks for filling out the details. Unfortunately, Some details are still needs to be filled before admin approval.</p>'+
            '<p>Take your time to fill them out & submit again.</p>';
            $('#popText').text('');
            $('#popText').append(str);
            $('#aftersubmit').modal('show');
         }

         else if(data !='notDone' && data != false){
          $('#hostlastform').val(1);
          $('#aftersubmit').modal('show');
        }
         }
         });
        
      }
    
  })

var halfdayVal = "<?php echo $all_data['half_day_booking']?>";
    if (halfdayVal == '1') {
        $('#halfdayCheck').show();
    }
    else {
        $('#halfdayCheck').hide();
    }   

$('input[type=radio][name=half_day_booking]').change(function() {
    if (this.value == '1') {
        $('#halfdayCheck').show();
    }
    else if (this.value == '0') {
        $('#halfdayCheck').hide();
    }
});


google.maps.event.addDomListener(window, "load", initAutocomplete);
var lat = 28.7041;
if ($('#lat').val() != '') {
  lat = $('#lat').val();
}
var lng = 77.1025;
if ($('#lng').val() != '') {
  lng = $('#lng').val();
}
var autocomplete;
var stateAdd, cityAdd, country, postalCode 
                        
var position = [lat, lng];
var geocoder;
var iconimg = $('#icon').val();


function codeLatLng(lat, lng, checkMarker) {
    geocoder = new google.maps.Geocoder();
    // console.log(lat,'-----',lng)

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        'latLng': latlng
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            //console.log(results)
            if (results[0]) {
               
                for (var i = 0; i < results[0].address_components.length; i++) {
                    for (var b = 0; b < results[0].address_components[i].types.length; b++) {

                        //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                        if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                            //this is the object you are looking for
                      var stateAdd = results[0]['address_components'][i].long_name;
                      //var cityAdd = results[0]['address_components'][1]['long_name'];
                           // break;
                          }
                    //var street = results[0]['address_components'][0]['long_name'];
                   var fulladd = results[0].formatted_address;

                   if (results[0].address_components[i].types[0] === 'locality') {
                    cityAdd = results[0].address_components[i].long_name;
                   }

                  if (results[0].address_components[i].types[0] === 'country') {
                    country = results[0].address_components[i].long_name;
                   }
                   if (results[0].address_components[i].types[0] === "postal_code") {
                    postalCode = results[0].address_components[i].long_name;
                   }
                    }
                    
                }
                //console.log('country--->',country,'state----->',postalCode,'----------',cityAdd)
                $('#location').val(fulladd);
                $('#cityId').val(cityAdd);
                $('#stateId').val(stateAdd);
                // $('#streetaddresss').val(street);
                $('#countryId').val(country);
                //console.log('lat------->',lat,'lng-------->',lng)
                $('#lat').val(lat);
                $('#lng').val(lng);

                $('#zipcode').val(postalCode);

                //alert(city.short_name + " " + city.long_name)
                if (checkMarker == 'real') {
                position = [lat, lng]
                // console.log('lat--------',lat,'long--------',lng)  
                latlng = new google.maps.LatLng(position[0], position[1]);
                myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                radius : 100
                };
                //map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
                if (window.matchMedia("(max-width: 767px)").matches)  
                { 
                  $('#mobclass').show();
                  $('#mapweb').hide();
                 map = new google.maps.Map(document.getElementById("hostmapmob"), myOptions);
                }else{
                  $('#mobclass').hide();
                  $('#mapweb').show();
                  map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
                }
                iconimg = {
                     url: "<?php echo base_url();?>assets/images/pinicon.svg",
                     scaledSize: new google.maps.Size(30, 30)
                 };
                marker = new google.maps.Marker({
                position: latlng,
                map: map,
                draggable: true,
                icon:iconimg,
                title: "Latitude:"+position[0]+" | Longitude:"+position[1]
                });

                var CicleOption = {
          					strokeColor: '#000',
          					strokeWeight: 1,
          					fillColor: '#7999f2',
          					fillOpacity: 0.3,
                    clickable: true,
                    map: map,
                    center: latlng,
                    radius: 100
                    };

                    AOICircle=new google.maps.Circle(CicleOption);
                    marker.setMap(map);

            google.maps.event.addListener(marker,'dragend',function(event) {
              var currlat = marker.getPosition().lat();
              var currlng = marker.getPosition().lng();
              
              // var currPos = new google.maps.LatLng(currlat, currlng);
              // var dist = getDistance(currPos, CicleOption.center);
              // if(dist > CicleOption.radius){
              // alertify.alert('Please move pin within the 100 meter circle to help guest to accurately locate your place.').setHeader('');
              // marker.setPosition(CicleOption.center);
              // map.setCenter(CicleOption.center);
              // }else{
              $('#lat').val(currlat);
              $('#lng').val(currlng);
              //}
              });
              }

             } else {
                console.log("No results found");
            }
        } else {
            console.log("Geocoder failed due to: " + status);
        }
    });
}


function initAutocomplete() {
    new Promise((resolve, reject) => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function successFunction(position) {
                lat = position.coords.latitude;
                lng = position.coords.longitude;
                $('#curruntLocation').attr('onclick',`codeLatLng(${lat}, ${lng}, "real")`);
                resolve("success")
            }, function errorFunction() {
                console.log("Geocoder failed");
                resolve("success")
            });
        } else {
            resolve("success")
        }
    }).then(res => {
        
    iconimg = {
     url: "<?php echo base_url();?>assets/images/pinicon.svg",
     scaledSize: new google.maps.Size(30, 30)
   };
   
    lat = $('#lat').val();
    lng = $('#lng').val();

    position = [lat, lng];
    //console.log(position)
    var latlng = new google.maps.LatLng(position[0], position[1]);
    var myOptions = {
        zoom: 18,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        radius : 100
    };
    //map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
   
    if (window.matchMedia("(max-width: 767px)").matches)  
                { 
                  $('#mobclass').show();
                  $('#mapweb').hide();
                 map = new google.maps.Map(document.getElementById("hostmapmob"), myOptions);
                }else{
                  $('#mobclass').hide();
                  $('#mapweb').show();
                  map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
                }

    marker = new google.maps.Marker({
        position: latlng,
        icon:iconimg,
        draggable: true,
        map: map,
        title: "Latitude:"+position[0]+" | Longitude:"+position[1]
    });

         var CicleOption = {
          			    strokeColor: '#000',
          					strokeWeight: 1,
          					fillColor: '#7999f2',
          					fillOpacity: 0.3,
                    clickable: true,
                    map: map,
                    center: latlng,
                    radius: 100
                    };

               AOICircle=new google.maps.Circle(CicleOption);
                    marker.setMap(map);
               
              google.maps.event.addListener(marker,'dragend',function(event) {
                var currlat = marker.getPosition().lat();
                var currlng = marker.getPosition().lng();
                
                 $('#lat').val(currlat);
                 $('#lng').val(currlng);
                //}
                });

    
        // Create the search box and link it to the UI element.
        var input = document.getElementById('location');
        var searchBox = new google.maps.places.SearchBox(input);
        // console.log(searchBox);

        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {

            var places = searchBox.getPlaces();
            //console.log(places)
            var results = places;
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng(); 
            //console.log(results[0]);
            if (results[0]) {
                for (var i = 0; i < results[0].address_components.length; i++) {
                    for (var b = 0; b < results[0].address_components[i].types.length; b++) {

                        //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                     if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                            //this is the object you are looking for
                      var stateAdd = results[0]['address_components'][i].long_name;
                      //var cityAdd = results[0]['address_components'][1]['long_name'];
                           // break;
                          }
                    //var street = results[0]['address_components'][0]['long_name'];
                  // var fulladd = results[0].formatted_address;

                   if (results[0].address_components[i].types[0] === 'locality') {
                    cityAdd = results[0].address_components[i].long_name;
                   }

                  if (results[0].address_components[i].types[0] === 'country') {
                    country = results[0].address_components[i].long_name;
                   }
                   if (results[0].address_components[i].types[0] === "postal_code") {
                    postalCode = results[0].address_components[i].long_name;
                   }
                    }
                    
                }
                
                $('#cityId').val(cityAdd);
                $('#stateId').val(stateAdd);
                // $('#streetaddresss').val(street);
                $('#countryId').val(country);
                // console.log('lat------->',latitude,'lng-------->',longitude)
                $('#lat').val(latitude);
                $('#lng').val(longitude);
                $('#zipcode').val(postalCode);

            }
             

            //console.log(places);
            if (places.length == 0) {
                return;
            }
            
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];
            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            //console.log(bounds)
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
              
              //console.log(place.geometry.location.lat())
              lat = place.geometry.location.lat();
              lng = place.geometry.location.lng();
               
                position = [lat, lng]
                // console.log('lat--------',lat,'long--------',lng)  
                latlng = new google.maps.LatLng(position[0], position[1]);
                myOptions = {
                zoom: 18,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                radius : 100
                };
                //map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
                if (window.matchMedia("(max-width: 767px)").matches)  
                { 
                  $('#mobclass').show();
                  $('#mapweb').hide();
                 map = new google.maps.Map(document.getElementById("hostmapmob"), myOptions);
                }else{
                  $('#mobclass').hide();
                  $('#mapweb').show();
                  map = new google.maps.Map(document.getElementById("hostmap"), myOptions);
                }
                
                marker = new google.maps.Marker({
                position: latlng,
                map: map,
                draggable: true,
                icon: iconimg,
                title: "Latitude:"+position[0]+" | Longitude:"+position[1]
                });

                var CicleOption = {
          					strokeColor: '#000',
          					strokeWeight: 1,
          					fillColor: '#7999f2',
          					fillOpacity: 0.3,
                    clickable: true,
                    map: map,
                    center: latlng,
                    radius: 100
                    };

                    AOICircle=new google.maps.Circle(CicleOption);
                    marker.setMap(map);

            google.maps.event.addListener(marker,'dragend',function(event) {
            var currlat = marker.getPosition().lat();
            var currlng = marker.getPosition().lng();
            // var currPos = new google.maps.LatLng(currlat, currlng);
            // var dist = getDistance(currPos, CicleOption.center);
            // if(dist > CicleOption.radius){
            // alertify.alert('Please move pin within the 100 meter circle to help guest to accurately locate your place.').setHeader('');
            // marker.setPosition(CicleOption.center);
            // map.setCenter(CicleOption.center);
            // }else{
              $('#lat').val(currlat);
              $('#lng').val(currlng);
            //}
            });

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    })
}


// var rad = function(x) {
// return x * Math.PI / 180;
// };
// //==============getDis tance==================// 
// var getDistance = function(p1, p2) {
//           var R = 6378137; // Earth’s mean radius in meter
//           var dLat = rad(p2.lat() - p1.lat());
//           var dLong = rad(p2.lng() - p1.lng());
//           var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
//             Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
//             Math.sin(dLong / 2) * Math.sin(dLong / 2);
//           var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
//           var d = R * c;
//           return d; // returns the distance in meter
//         };


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
  }
  
 var calenderDate = "<?php echo $all_data['unav_date'];?>";
  
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


</script>
 <script>
               $( "#propertyType" ).change(function() {
               var typePlace = $( "#propertyType" ).val();
               $('#propertyText').text('');
               $(".loaderCntr").show();
               $.ajax({
               //async: false,
               url: '<?php echo base_url('web/host/getPropertyText'); ?>',
               type: 'POST',
               data:{"place":typePlace},
               success: function (data) {
               $(".loaderCntr").hide();
                if(data != false){
                  
                  $('#propertyText').text(data);  
                   }
               }
               });
             });

              $( "#typePlace" ).change(function() {
               var placeTy = $( "#typePlace" ).val();
               if (placeTy == '') {
                $('#propertyText').text('');
               }
               $(".loaderCntr").show();
               $.ajax({
               //async: false,
               url: '<?php echo base_url('web/host/getProperty'); ?>',
               type: 'POST',
               data:{"place":placeTy},
               success: function (data) {
               $(".loaderCntr").hide();
                if(data != false){

                    $('#propertyType').html(data);
                   }
               }
               });

            });


            function addDiffbed(id,checkBeds,btnText){
                $('#bedroom_count_div'+id).slideToggle();
               
                  if($('#'+btnText).html() == 'Done'){
                  if($('#'+checkBeds).val()>0){
                   $('#'+btnText).html('Edit Beds');
                  }else{
                   $('#'+btnText).html('Add Beds');
                  }
                }else{
                   $('#'+btnText).html('Done');
                }
                //}
              }
       
            function downGuest(hidId,miId,in_dc){
              var inputVal = parseInt($('#'+hidId).val());
              if (in_dc == 'plus') {
               $('#'+hidId).val(inputVal+1);
               if ($('#'+hidId).val() == 2) {
                $('#'+miId).removeClass("svg_disable");
               }
              }else{
               
               if (miId == 'dbed') {
               var id = parseInt($("#bedPm").val());
               $('#mainId'+id).remove();
               }

               $('#'+hidId).val(inputVal-1);
               if ($('#'+hidId).val() == 1) {
                $('#'+miId).addClass("svg_disable");
               }
              }
            }

            function downbath(hidId,miId,in_dc){
              var inputVal = parseFloat($('#'+hidId).val());
              if (in_dc == 'plus') {
               $('#'+hidId).val(inputVal+.5);
               if ($('#'+hidId).val() == .5) {
                $('#'+miId).removeClass("svg_disable");
               }
              }else{
               $('#'+hidId).val(inputVal-.5);
               if ($('#'+hidId).val() == 0) {
                $('#'+miId).addClass("svg_disable");
               }
              }
            }


            function downbed(id,hidId,inDis){
             var inputVal = parseInt($('#'+hidId).val());
             // console.log(inputVal)
             var str = '';
             var valBed = parseInt($('#allbed'+id).val());
             if (valBed>0 && inputVal>0) {
               if (valBed-1>1) {
                str = ' Beds';
               }else{
                str = ' Bed';
               }
               
               var decVal = valBed-1;
               $('#showText'+id).text(decVal+str);
               $('#allbed'+id).val(decVal);
               $('#'+hidId).val(inputVal-1);

               if ($('#'+hidId).val() == 0) {
                $('#'+inDis).addClass("svg_disable");
               }

             }
          }

           
            function bedup(id,hidId,inDis){
               var inputVal = parseInt($('#'+hidId).val());
               // console.log(inputVal)
               var str = '';
               var valBed = parseInt($('#allbed'+id).val());
               if (valBed+1>1) {
                str = ' Beds';
               }else{
                str = ' Bed';
               }
               
               var addval = valBed+1;
               $('#showText'+id).text(addval+str);
               $('#allbed'+id).val(addval);
               $('#'+hidId).val(inputVal+1);
               if ($('#'+hidId).val() == 1) {
                $('#'+inDis).removeClass("svg_disable");
               }
          }    
         
     

       $( ".noBeds" ).click(function() {
                 var room = parseInt($("#noBeds").val());
                 var bedsText = '';
                 var i=room-1;
                 //for (var i = 0; i < room; i++) {
                  bedsText = bedsText+`<div class="bedroom_count" id="mainId${i+1}">
                  <div class="bedroomlabels">
        <span class="labels">
          Bedroom ${i+1}<span id="showText${i+1}">0 Bed</span>
        </span>
        <input type="hidden" class="totalbed" id="allbed${i+1}" value="0"/>
        <button type="button" class="actionbtn" id="btn${i+1}" onclick="addDiffbed('${i+1}','allbed${i+1}','btn${i+1}')"> Add Beds </button>
      </div>
       <div class="bedroom_count_div" id="bedroom_count_div${i+1}">
        <div class="form_group">
           
           <div class="incrementinput">
              <span class="labels">King Bed</span>
              <div class="number_input_box">
            <div class="numbers_icon svg_disable" id="king_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','kingBedq${i+1}','king_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="kingBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="kingBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','kingBedq${i+1}','king_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

           <div class="incrementinput">
              <span class="labels">Queen Bed</span>
              <div class="number_input_box">
                <div class="numbers_icon svg_disable" id="qb_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','queenBedq${i+1}','qb_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="queenBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="queenBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','queenBedq${i+1}','qb_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

           <div class="incrementinput">
              <span class="labels">Full/Double Bed</span>
              <div class="number_input_box">
                <div class="numbers_icon svg_disable" id="db_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','doubleBedq${i+1}','db_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="doubleBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="doubleBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','doubleBedq${i+1}','db_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
             
            <div class="incrementinput">
              <span class="labels">Single Bed</span>
              <div class="number_input_box">
                <div class="numbers_icon svg_disable" id="sb_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','singleBedq${i+1}','sb_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="singleBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="singleBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','singleBedq${i+1}','sb_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

            <div class="incrementinput">
              <span class="labels">Twin Bed</span>
              <div class="number_input_box">
            <div class="numbers_icon svg_disable" id="twin_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','twinBedq${i+1}','twin_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="twinBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="twinBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','twinBedq${i+1}','twin_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div> 

           <div class="incrementinput">
              <span class="labels">Floor Mattress</span>
              <div class="number_input_box">
          <div class="numbers_icon svg_disable" id="floor_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','floorBedq${i+1}','floor_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="floorBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="floorBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','floorBedq${i+1}','floor_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
            
            <div class="incrementinput">
              <span class="labels">Sofa Bed</span>
              <div class="number_input_box">
                <div class="numbers_icon svg_disable" id="sob_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','sofaBedq${i+1}','sob_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="sofaBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="sofaBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','sofaBedq${i+1}','sob_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

    
            <div class="incrementinput">
              <span class="labels">Air Mattress</span>
              <div class="number_input_box">
            <div class="numbers_icon svg_disable" id="air_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','airBedq${i+1}','air_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="airBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="airBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','airBedq${i+1}','air_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>

           <div class="incrementinput">
              <span class="labels">Couch</span>
              <div class="number_input_box">
          <div class="numbers_icon svg_disable" id="couch_inDis${i+1}" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); downbed('${i+1}','couchBedq${i+1}','couch_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                  </svg>
                </div>
                <input type="number" name="couchBedq[]" min="0" value="0" max="15">
                <input type="hidden" id="couchBedq${i+1}" value="0">
                <div class="numbers_icon" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); bedup('${i+1}','couchBedq${i+1}','couch_inDis${i+1}');">
                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                    style="height: 22px; width: 22px; display: block; fill: currentcolor;">
                    <rect height="2" rx="1" width="12" x="6" y="11"></rect>
                    <rect height="12" rx="1" width="2" x="11" y="6"></rect>
                  </svg>
                </div>
              </div>
            </div>
          </div>
       </div><div id="totalbed-error${i+1}" class="form_error"></div></div>` ;
                // }
                // console.log(bedsText)
               //$('#addBedsCount').text('');
               $('#addBedsCount').append(bedsText);
                 
              });
              </script>


   <?php $curn=$all_data['currency'];
   if ($curn == '') {
   $curn='Dollar';
if(!empty($this->session->userdata('guest_country')) && $this->session->userdata('guest_country')== "India"){
  $curn = 'Rupees'; } }
 ?> 

<script>
   var valCur = '<?php echo $curn;?>';
    $('#currency').val(valCur);
    var clsVal = $('#currency').val();
    switch(clsVal) {
              case 'Dollar':
              $('#changeIcons').attr('class','fa fa-usd');
              $('#changeIconsH').attr('class','fa fa-usd');
              $('#changeIcons2').attr('class','fa fa-usd');
              $('#changeIcons3').attr('class','fa fa-usd');
              $('#changeIcons4').attr('class','fa fa-usd');
              break;

              case 'Rupees':
              $('#changeIcons').attr('class','fa fa-rupee');
              $('#changeIconsH').attr('class','fa fa-rupee');
              $('#changeIcons2').attr('class','fa fa-rupee');
              $('#changeIcons3').attr('class','fa fa-rupee');
              $('#changeIcons4').attr('class','fa fa-rupee');
              break;

              default:
              $('#changeIcons').attr('class','fa fa-usd');
              $('#changeIconsH').attr('class','fa fa-usd');
              $('#changeIcons2').attr('class','fa fa-usd');
              $('#changeIcons3').attr('class','fa fa-usd');
              $('#changeIcons4').attr('class','fa fa-usd');
            }
  
    $( "#currency" ).change(function() {
    var clsVal = $('#currency').val();
    switch(clsVal) {
              case 'Dollar':
              $('#changeIcons').attr('class','fa fa-usd');
              $('#changeIconsH').attr('class','fa fa-usd');
              $('#changeIcons2').attr('class','fa fa-usd');
              $('#changeIcons3').attr('class','fa fa-usd');
              $('#changeIcons4').attr('class','fa fa-usd');
              break;

              case 'Rupees':
              $('#changeIcons').attr('class','fa fa-rupee');
              $('#changeIconsH').attr('class','fa fa-rupee');
              $('#changeIcons2').attr('class','fa fa-rupee');
              $('#changeIcons3').attr('class','fa fa-rupee');
              $('#changeIcons4').attr('class','fa fa-rupee');
              break;

              default:
              $('#changeIcons').attr('class','fa fa-usd');
              $('#changeIconsH').attr('class','fa fa-usd');
              $('#changeIcons2').attr('class','fa fa-usd');
              $('#changeIcons3').attr('class','fa fa-usd');
              $('#changeIcons4').attr('class','fa fa-usd');
            }
    });

   
// var iv = 2;
//   var arrayVehicle = [];
//   function createVehicleimg(input) {
//   $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
//    $(input).attr('onchange',"readimg(this);")
//   var name = input.files[0].name;
//     $(input).parents('.img_ipload').removeClass('img_uploadyes');
//     $(input).parents('.img_ipload').addClass('img_uploadyes');
//     arrayVehicle.push(iv);
//     if (arrayVehicle.length < 7) {
//   $(input).parents('.four_upload').append('<div class="img_ipload">'+
//               '<input type="file" onchange="createVehicleimg(this);" class="Vehicle_img" name="vehicle_img[]" id="vehicle_img'+iv+'" accept="image/*" />'+
//               '<label for="vehicle_img'+iv+'" class="uploadimgdiv">'+
//               '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
//               '<img src="" alt=""></label>'+
//               '<div class="img_upload_overlay">'+
//               '<span class="del_img vehicleImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
//               '</div></div>');
//       iv++;
//    }
//   }
//   $(document).on('click','span.vehicleImg', function () {
//    $(this).parents('.img_ipload').remove();
//    if (arrayVehicle.length == 7) {
//     $('.vehicle').append('<div class="img_ipload">'+
//               '<input type="file" onchange="createVehicleimg(this);" class="Vehicle_img" name="vehicle_img[]" id="vehicle_img'+iv+'" accept="image/*" />'+
//               '<label for="vehicle_img'+iv+'" class="uploadimgdiv">'+
//               '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
//               '<img src="" alt=""></label>'+
//               '<div class="img_upload_overlay">'+
//               '<span class="del_img vehicleImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
//               '</div></div>');
//     iv++;
//    }
//    arrayVehicle.pop()
//   })

  
  var arrayBed = [];
  var countbedImage = <?php echo count($all_data['bedimage']);?>;
    for (var bimg = 0; bimg < countbedImage; bimg++) {
        arrayBed.push(bimg);
    }
    var i = arrayBed.length+2;
    // if (i==1) {
    //   i++;
    // }
    var bedchange = "changeSte('bedchange')";
  function createimg(input) {
  $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
   $(input).attr('onchange',"readimg(this);")
  var name = input.files[0].name;
  var j = i-1;
    $('#bedcov'+j).val(name)
  
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=bedchange]').val('change');
  
    //$(input).parents('.img_ipload').parents('.four_upload').find('input[type=hidden]').val('change');
    $(input).parents('.img_ipload').removeClass('img_uploadyes');
    $(input).parents('.img_ipload').addClass('img_uploadyes');
    arrayBed.push(i);
    if (arrayBed.length < 7) {
  $(input).parents('.four_upload').append('<div class="img_ipload">'+
     '<input type="file" name="bedroomImages[]" onchange="createimg(this);" id="Bedroomimg'+i+'" accept="image/*"/>'+
     '<label for="Bedroomimg'+i+'" class="uploadimgdiv">'+
     '<i class="fa fa-picture-o" aria-hidden="true"></i><img src="" alt=""></label>'+
     '<div class="img_upload_overlay"><span class="set_cover">'+
     '<input type="radio" name="bedroomCover" value="" id="bedcov'+i+'" onchange="'+bedchange+'">'+
     '<label for="bedcov'+i+'"><i class="fa fa-stop" aria-hidden="true"></i>'+
     '<i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
     '<label for="Bedroomimg'+i+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
     '<span class="del_img bedsImage"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span></div></div>');
   i++;
   }
  }
  $(document).on('click','span.bedsImage', function () {
   $(this).parents('.img_ipload').remove();
   if (arrayBed.length == 7) {
    $('.beds').append('<div class="img_ipload">'+
     '<input type="file" name="bedroomImages[]" onchange="createimg(this);" id="Bedroomimg'+i+'" accept="image/*"/>'+
     '<label for="Bedroomimg'+i+'" class="uploadimgdiv">'+
     '<i class="fa fa-picture-o" aria-hidden="true"></i><img src="" alt=""></label>'+
     '<div class="img_upload_overlay"><span class="set_cover">'+
     '<input type="radio" name="bedroomCover" value="" id="bedcov'+i+'" onchange="'+bedchange+'">'+
     '<label for="bedcov'+i+'"><i class="fa fa-stop" aria-hidden="true"></i>'+
     '<i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
     '<label for="Bedroomimg'+i+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
     '<span class="del_img bedsImage"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span></div></div>');
    i++;
   }
   arrayBed.pop()
  })
  // $(document).on('click','.fa-times-circle',function(){
  //   alert()
   //  $(this).parent().remove();
  // })
  
  var arrayBath = [];
  var countbathImage = <?php echo count($all_data['bathimage']);?>;
    for (var baimg = 0; baimg < countbathImage; baimg++) {
        arrayBath.push(baimg);
    }
    var ib = arrayBath.length+2;
    // if (ib==1) {
    //   ib++;
    // }
    var bathchange = "changeSte('bathchange')";
  function createImgBath(input) {
  $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
   $(input).attr('onchange',"readimg(this);")
  var name = input.files[0].name;
  var jb = ib-1;
    $('#bathcov'+jb).val(name)
    
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=bathchange]').val('change');
    //$(input).parents('.img_ipload').parents('.four_upload').find('input[type=hidden]').val('change');
    $(input).parents('.img_ipload').removeClass('img_uploadyes');
    $(input).parents('.img_ipload').addClass('img_uploadyes');
    arrayBath.push(ib);
    if (arrayBath.length < 7) {
  $(input).parents('.four_upload').append('<div class="img_ipload">'+
        '<input type="file" name="bathsroomImages[]" onchange="createImgBath(this);" id="Bathroomimg'+ib+'" accept="image/*" />'+
        '<label for="Bathroomimg'+ib+'" class="uploadimgdiv">'+
        '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
        '<img src="" alt="">'+
        '</label>'+
        '<div class="img_upload_overlay">'+
        '<span class="set_cover">'+
        '<input type="radio" name="bathroomCover" value="" id="bathcov'+ib+'" onchange="'+bathchange+'">'+
        '<label for="bathcov'+ib+'"><i class="fa fa-stop" aria-hidden="true"></i>'+
        '<i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
        '<label for="Bathroomimg'+ib+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
        '<span class="del_img bathImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
        '</div></div>');
   ib++;
   }
  }
  $(document).on('click','span.bathImg', function () {
   $(this).parents('.img_ipload').remove();
   if (arrayBath.length == 7) {
    $('.bathrooms').append('<div class="img_ipload">'+
        '<input type="file" name="bathsroomImages[]" onchange="createImgBath(this);" id="Bathroomimg'+ib+'" accept="image/*" />'+
        '<label for="Bathroomimg'+ib+'" class="uploadimgdiv">'+
        '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
        '<img src="" alt="">'+
        '</label>'+
        '<div class="img_upload_overlay">'+
        '<span class="set_cover">'+
        '<input type="radio" name="bathroomCover" value="" id="bathcov'+ib+'" onchange="'+bathchange+'">'+
        '<label for="bathcov'+ib+'"><i class="fa fa-stop" aria-hidden="true"></i>'+
        '<i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
        '<label for="Bathroomimg'+ib+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
        '<span class="del_img bathImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
        '</div></div>');
    ib++;
   }
   arrayBath.pop()
  })

  
  var arrayKit = [];
  var countkitImage = <?php echo count($all_data['kitimage']);?>;
    for (var kiimg = 0; kiimg < countkitImage; kiimg++) {
        arrayKit.push(kiimg);
    }
    var ik = arrayKit.length+2;
    // if (ik==1) {
    //   ik++;
    // }
    var kitchange = "changeSte('kitchange')";
  function createImgKit(input) {
  $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
   $(input).attr('onchange',"readimg(this);")
  var name = input.files[0].name;
  var jk = ik-1;
    $('#kitchencov'+jk).val(name)

  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=kitchange]').val('change');
   // $(input).parents('.img_ipload').parents('.four_upload').find('input[type=hidden]').val('change');
    $(input).parents('.img_ipload').removeClass('img_uploadyes');
    $(input).parents('.img_ipload').addClass('img_uploadyes');
    arrayKit.push(ik);
    if (arrayKit.length < 7) {
  $(input).parents('.four_upload').append('<div class="img_ipload">'+
        '<input type="file" name="kitchenImages[]" onchange="createImgKit(this);" id="kitchen'+ik+'" accept="image/*" />'+
          '<label for="kitchen'+ik+'" class="uploadimgdiv">'+
          '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
          '<img src="" alt=""></label>'+
          '<div class="img_upload_overlay">'+
          '<span class="set_cover">'+
          '<input type="radio" name="kitchenCover" value="0" id="kitchencov'+ik+'" onchange="'+kitchange+'">'+
          '<label for="kitchencov'+ik+'"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>'+
          '</span>'+
          '<label for="kitchen'+ik+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
        '<span class="del_img kitchenImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
          '</div></div>');
   ik++;
   }
  }
  $(document).on('click','span.kitchenImg', function () {
   $(this).parents('.img_ipload').remove();
   if (arrayKit.length == 7) {
    $('.kitchen').append('<div class="img_ipload">'+
        '<input type="file" name="kitchenImages[]" onchange="createImgKit(this);" id="kitchen'+ik+'" accept="image/*" />'+
          '<label for="kitchen'+ik+'" class="uploadimgdiv">'+
          '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
          '<img src="" alt=""></label>'+
          '<div class="img_upload_overlay">'+
          '<span class="set_cover">'+
          '<input type="radio" name="kitchenCover" value="0" id="kitchencov'+ik+'" onchange="'+kitchange+'">'+
          '<label for="kitchencov'+ik+'"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label>'+
          '</span>'+
          '<label for="kitchen'+ik+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
        '<span class="del_img kitchenImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
          '</div></div>');
    ik++;
   }
   arrayKit.pop()
  })


  
  var arrayOth = [];
  var countothImage = <?php echo count($all_data['otherimage']);?>;
    for (var otimg = 0; otimg < countkitImage; otimg++) {
      arrayOth.push(otimg);
    }
    var io = arrayOth.length+2;
    // if (io==1) {
    //   io++;
    // }
    var otherchange = "changeSte('otherchange')";
  function createImgOther(input) {
  $(input).parents('.img_ipload').find('label.uploadimgdiv img').attr('src', window.URL.createObjectURL(input.files[0]));
   $(input).attr('onchange',"readimg(this);")
  var name = input.files[0].name;
  var jo = io-1;
    $('#otherImgCover'+jo).val(name)
  $(input).parents('.img_ipload').parents('.four_upload').find('input[name=otherchange]').val('change');
    //$(input).parents('.img_ipload').parents('.four_upload').find('input[type=hidden]').val('change');
    $(input).parents('.img_ipload').removeClass('img_uploadyes');
    $(input).parents('.img_ipload').addClass('img_uploadyes');
    arrayOth.push(io);
    if (arrayOth.length < 7) {
  $(input).parents('.four_upload').append('<div class="img_ipload">'+
              '<input type="file" name="otherImages[]" onchange="createImgOther(this);" id="otherImg'+io+'" accept="image/*" />'+
              '<label for="otherImg'+io+'" class="uploadimgdiv">'+
              '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
              '<img src="" alt=""></label>'+
              '<div class="img_upload_overlay">'+
              '<span class="set_cover">'+
              '<input type="radio" name="otherImgCover" value="0" id="otherImgCover'+io+'" onchange="'+otherchange+'">'+
              '<label for="otherImgCover'+io+'"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
            '<label for="otherImg'+io+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
          '<span class="del_img otherImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
            '</div></div>');
   io++;
   }
  }
  $(document).on('click','span.otherImg', function () {
   $(this).parents('.img_ipload').remove();
   if (arrayOth.length == 7) {
    $('.others').append('<div class="img_ipload">'+
              '<input type="file" name="otherImages[]" onchange="createImgOther(this);" id="otherImg'+io+'" accept="image/*" />'+
              '<label for="otherImg'+io+'" class="uploadimgdiv">'+
              '<i class="fa fa-picture-o" aria-hidden="true"></i>'+
              '<img src="" alt=""></label>'+
              '<div class="img_upload_overlay">'+
              '<span class="set_cover">'+
              '<input type="radio" name="otherImgCover" value="" id="otherImgCover'+io+'" onchange="'+otherchange+'">'+
              '<label for="otherImgCover'+io+'"><i class="fa fa-stop" aria-hidden="true"></i> <i class="fa fa-check-square-o" aria-hidden="true"></i> Set as cover</label></span>'+
            '<label for="otherImg'+io+'" class="replaceImg"><i class="fa fa-refresh" aria-hidden="true"></i> Replace</label>'+
          '<span class="del_img otherImg"><i class="fa fa-trash" aria-hidden="true"></i> Remove</span>'+
          '</div></div>');
    io++;
   }
   arrayOth.pop()
  })


</script>
      <script>
      $('#amenitiesaddbtn').on('click',function(){
        var checkVal = 0;
         $("input[name='otherAmenities[]']").each(function() {
          if ($(this).val().trim()=='') {
           ++checkVal;
        }
        });        
       if (checkVal == 0) {
        $('.otherAmenities_mainwr').after('<div class="otherAmenities_wr"><div class="otherAmenities_div"><input type="text" name="otherAmenities[]" class="form-control other" placeholder="Other Amenities"></div><div class="otherAmenities_btn amenitiesremovebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></div></div>');
      }else{
        $('#other-error').text( "Please fill the blank input first" ).show().fadeOut( 5000 );
      }
      });
      $(document).on('click','.amenitiesremovebtn',function(){
        $(this).parents('.otherAmenities_wr').remove();
      });


      $( "#basePrice" ).keyup(function() {
        var minVal = 0;
         var maxVal = 0;
        var pVal = $( "#basePrice" ).val();
        if (pVal > 0 && pVal <= 100) {
          minVal = parseInt(pVal)-parseFloat(pVal*5/100);
          maxVal = parseInt(pVal)+parseFloat(pVal*5/100);
          var min = (minVal != NaN)?minVal:0;
          var max = (maxVal != NaN)?maxVal:0;
          $( "#minPrice" ).val(min);
          $( "#maxprice" ).val(max)
        }
        else if (pVal > 100 && pVal <= 300) {
          minVal = parseInt(pVal)-parseFloat(pVal*10/100);
          maxVal = parseInt(pVal)+parseFloat(pVal*10/100);
          $( "#minPrice" ).val(minVal);
          $( "#maxprice" ).val(maxVal)
        }
        else if (pVal > 300) {
          minVal = parseInt(pVal)-parseFloat(pVal*15/100);
          maxVal = parseInt(pVal)+parseFloat(pVal*15/100);
          $( "#minPrice" ).val(minVal);
          $( "#maxprice" ).val(maxVal)
        }
        else{
          $( "#minPrice" ).val(0);
          $( "#maxprice" ).val(0)
        }
      });
//       For listing between $0 - $100 -> 5%
// $100 - $300 -> 10%
// $300 - about -> 15%
   function checkValidTime(){
    var start_time = $('#bookingStart').val();
    var end_time = $('#bookingEnd').val();

    var stt = new Date("November 13, 2020 " + start_time);
    stt = stt.getTime();

    var endt = new Date("November 13, 2020 " + end_time);
    endt = endt.getTime();
    
    if(start_time !='' && end_time !='' && endt<=stt){
    $('#bookingEnd').val('');
    $("#bookingEnd-error" ).text( "Please select the valid time for booking" ).show().fadeOut( 5000 );
    $("#bookingEnd").first().focus();
    }
  }

 $('#basePrice').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

  $('#minPrice').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

   $('#maxprice').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

$('#cleanFee').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

$('#zipcode').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

$('#primaryphone').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

$('#otherphone').on('paste', function (event) {
  if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
    event.preventDefault();
  }
});

 //var checkinF ;

  function checkInValidTime(){
    var start_time = $('#inFrom').val();
    var end_time = $('#inTo').val();
    
    // if (checkinF != start_time) {
    //   $('#inTo').val('');
    //   // $('#outFrom').val('');
    //   // $('#outTo').val('');
    //   checkinF = start_time;
    // }

    var stt = new Date("November 13, 2020 " + start_time);
    stt = stt.getTime();

    var endt = new Date("November 13, 2020 " + end_time);
    endt = endt.getTime();

    var diff =(endt - stt) / 1000;
    diff /= (60 * 60);
    var hrdiff = Math.abs(Math.round(diff));
    if (start_time !='' && end_time !='' && hrdiff > 2) {
     $('#inTo').val('');
    $("#inTo-error" ).text( "Max 2 hour of diffrence" ).show().fadeOut( 5000 );
    $("#inTo").first().focus();
    }

  //   var end_timein = $('#outTo').val();
  //   var endtin = new Date("November 14, 2020 " + end_timein);
  //   endtin = endtin.getTime();

  //   var diffin =(endtin - stt) / 1000;
  //   diffin /= (60 * 60);
  //   var hrdiffin = Math.abs(Math.round(diffin));
  //   // console.log(hrdiffin)
  //   if (start_time !='' && end_timein !='' && hrdiffin != 24) {
  //    $('#outTo').val('');
  // $("#outTo-error" ).text( "Min 24 hour of diffrence in check in checkout time" ).show().fadeOut( 5000 );
  //   $("#outTo").first().focus();
  //   return false;
  //   }

  //   var end_timein1 = $('#outFrom').val();
  //   var endtin1 = new Date("November 14, 2020 " + end_timein1);
  //   endtin1 = endtin1.getTime();

  //   var diffin1 =(endtin1 - stt) / 1000;
  //   diffin1 /= (60 * 60);
  //   var hrdiffin1 = Math.abs(Math.round(diffin1));
  //   // console.log(hrdiffin)
  //   if (start_time !='' && end_timein1 !='' && hrdiffin1 < 22) {
  //    $('#outFrom').val('');
  // $("#outTo-error" ).text( "Min 22 hour of diffrence in check in checkout from" ).show().fadeOut( 5000 );
  //   $("#outTo").first().focus();
  //   return false;
  //   }
    
    if(start_time !='' && end_time !='' && endt<=stt){
    $('#inTo').val('');
    $("#inTo-error" ).text( "Please select the valid time" ).show().fadeOut( 5000 );
    $("#inTo").first().focus();
    }

  }


   function checkOutValidTime(){
    var start_time = $('#outFrom').val();
    var end_time = $('#outTo').val();

    var stt = new Date("November 14, 2020 " + start_time);
    stt = stt.getTime();

    var endt = new Date("November 14, 2020 " + end_time);
    endt = endt.getTime();

  //   var end_timein = $('#inFrom').val();
  //   var endtin = new Date("November 13, 2020 " + end_timein);
  //   endtin = endtin.getTime();

  //   var diffin =(endt - endtin) / 1000;
  //   diffin /= (60 * 60);
  //   var hrdiffin = Math.abs(Math.round(diffin));

  //   var diffin1 =(stt - endtin) / 1000;
  //   diffin1 /= (60 * 60);
  //   var hrdiffin1 = Math.abs(Math.round(diffin1));
  //   //console.log('---->',hrdiffin1,'--------->',hrdiffin)
  //   if (end_time !='' && end_timein !='' && hrdiffin != 24) {
  //    $('#outTo').val('');
  // $("#outTo-error" ).text( "Min 24 hour of diffrence in check in checkout to" ).show().fadeOut( 5000 );
  //   $("#outTo").first().focus();
  //   return false;
  //   }

  //   if (start_time !='' && end_timein !='' && hrdiffin1 < 22) {
  //    $('#outFrom').val('');
  // $("#outTo-error" ).text( "Min 22 hour of diffrence in check in checkout from" ).show().fadeOut( 5000 );
  //   $("#outTo").first().focus();
  //   return false;
  //   }
    
    var diff =(endt - stt) / 1000;
    diff /= (60 * 60);
    var hrdiff = Math.abs(Math.round(diff));
    if (start_time !='' && end_time !='' && hrdiff > 2) {
     $('#outTo').val('');
    $("#outTo-error" ).text( "Max 2 hour of diffrence" ).show().fadeOut( 5000 );
    $("#outTo").first().focus();
    return false;
    }
    
    if(start_time !='' && end_time !='' && endt<=stt){
    $('#outTo').val('');
    $("#outTo-error" ).text( "Please select the valid time" ).show().fadeOut( 5000 );
    $("#outTo").first().focus();
    return false;
    }
  }

  function checkNightMinMax(){
    var start_time = $('#nightCount').val();
    var end_time = $('#dayCount').val();
    var stt = parseInt(start_time);
    var endt = parseInt(end_time);
   if(start_time !='' && end_time !='' && endt<stt){
    $('#dayCount').val('');
    $("#dayNight-error" ).text( "Please select the valid number" ).show().fadeOut( 5000 );
    $("#dayCount").first().focus();
    }
  }

  function checkSameDay(){
      var checkVar = $('#samedm').val();
      if (checkVar == 'Same day') {
        $("#bookingStart").prop("disabled", false);
        $("#bookingEnd").prop("disabled", false);
      }else{
       $('#bookingStart').val('');
       $('#bookingEnd').val('');
       $("#bookingStart").prop("disabled", true);
       $("#bookingEnd").prop("disabled", true);
      }
  }

$(document).ready(function(){

  var checkVar = $('#samedm').val();
      if (checkVar == 'Same day') {
       $('#bookingStart').val('');
       $('#bookingEnd').val('');
       $("#bookingStart").prop("disabled", true);
       $("#bookingEnd").prop("disabled", true);
      }

$(window).bind("beforeunload",function(event) {
  var xd = $('#hostlastform').val();
  if (xd == 0) {
    return "You have some unsaved changes";
    }
  });
});

 $('.guest_drop .dropdown-menu').on('click', function (event) {
    event.stopPropagation();
  });


  function changeSte(changeSteId){
     $('#'+changeSteId).val('change');
   }

// otp verfication start here
$('.digit-group').find('input').each(function () {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function (e) {
    var parent = $($(this).parent());
    if (e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));

      if (prev.length) {
        $(prev).select();
      }
    } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));

      if (next.length) {
        $(next).select();
      } else {
        if (parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});

//======disabled resend==================//
function disableResend(){
$("#resend").attr('disabled',true);
timer(60);
setTimeout(function() {
$('#resend').attr('disabled',false);
$('#recaptcha-container1').show();
window.recaptchaVerifier1=new firebase.auth.RecaptchaVerifier('recaptcha-container1');
recaptchaVerifier1.render(); 
}, 60000);
}

//============timer===================//
let timerOn = true;
function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  remaining -= 1;
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
      timer(remaining);
    }, 1000);
    return;
  }
  if(!timerOn) {
    return;
  }
  $('#time_left').hide();
}

//===============end timer=================//  

$('#resend').on('click',function(){
  if(grecaptcha.getResponse(1)== ""){
  $("#recaptcha_error1" ).text("Please verify captcha.").show().fadeOut(4000);
   return false;
}
  $('#time_left').show(); 
  disableResend();
  timer(60);  
  $(".loaderCntr").show();
  var number = iti.getNumber();
  var countryData = iti.getSelectedCountryData();
  var code =countryData.dialCode;
  var countrycode='+' + code;
  var traveller_phone=document.getElementById('primaryphone').value;
  var firebase_number=countrycode.toString() + traveller_phone.toString();
  send_otp1(firebase_number); 
});

function send_otp1(phone){
  var phone=phone; 
  var recaptchaVerifier=window.recaptchaVerifier1;
  firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log("success");
    $(".loaderCntr").hide();
    alertify.notify('OTP has been send on your mobile number', 'success', 3);
     $('#recaptcha-container1').hide();
     disableResend();
      $('#time_left').show();
     timer(60);
  }).catch(function (error) {
    console.log("error",error); 
    $(".loaderCntr").hide();
    alertify.notify('Something went wrong!', 'error', 3);
    return false; 
  });
}

function send_otp(phone){
  var phone=phone; 
  var recaptchaVerifier=window.recaptchaVerifier;
  firebase.auth().signInWithPhoneNumber(phone,recaptchaVerifier).then(function (confirmationResult) {
    window.confirmationResult = confirmationResult;
    console.log("success");
    $(".loaderCntr").hide();
    alertify.notify('OTP has been send on your mobile number', 'success', 3);
    
    $('#reCaptchaContainer').remove();
    $('#reCaptcharef').append('<div id="reCaptchaContainer"></div>');

    window.recaptchaVerifier.clear();
    //console.log(recaptchaVerifier);
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });

    $('#lsfmodal').modal('show');
    $('#recaptcha-container1').hide();
    disableResend();
    $('#time_left').show();
    timer(60);
  }).catch(function (error) {
    console.log("error",error); 
    $(".loaderCntr").hide();
    
    alertify.notify('Something went wrong!', 'error', 3);

    $('#reCaptchaContainer').remove();
    $('#reCaptcharef').append('<div id="reCaptchaContainer"></div>');

    window.recaptchaVerifier.clear();
    console.log(recaptchaVerifier);
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });

    return false; 
  });
}


//======end resen otp==================//

$('#digit-1, #digit-2, #digit-3, #digit-4, #digit-5,#digit-6').on('keyup',function(){
  $("#otp_error" ).hide();
})

$("#otp_submit").on('click',function(event){
  event.preventDefault();
  var filter1 = /^[0-9]*$/; 
  var formStatus1=true; 
  var digit1=$('#digit-1').val();
  var digit2=$('#digit-2').val();
  var digit3=$('#digit-3').val();
  var digit4=$('#digit-4').val();
  var digit5=$('#digit-5').val();
  var digit6=$('#digit-6').val();
  if(digit1=="" || digit2=="" || digit3=="" ||  digit4=="" || digit5=="" || digit6==""){
    $('#otp_error').text("Please enter valid otp").show();
    return false;
  }else if (!filter1.test(digit1)  || !filter1.test(digit2) || !filter1.test(digit3) || !filter1.test(digit4) || !filter1.test(digit5) || !filter1.test(digit6) ){
    $("#otp_error").text( "Please enter only number." ).show();
    return false;
  }
  else {
    $(".loaderCntr").show();
    var enter_otp=digit1.toString() + digit2.toString() + digit3.toString() + digit4.toString() + digit5.toString() + digit6.toString();
    
    confirmationResult.confirm(enter_otp).then(function (result) {
      console.log("success",result);
      $('#mobV').val($('#primaryphone').val());
      $('#lsfmodal').modal('hide');
      $(".loaderCntr").hide();
      
      alertify.notify('OTP Verified Successfully', 'success', 3);
      $('#hostmob').click();

      $('#digit-1').val('');
      $('#digit-2').val('');
      $('#digit-3').val('');
      $('#digit-4').val('');
      $('#digit-5').val('');
      $('#digit-6').val('');

     }).catch(function (error) {
      $(".loaderCntr").hide();
      console.log("error");
      $('#reCaptchaContainer').remove();
    $('#reCaptcharef').append('<div id="reCaptchaContainer"></div>');
     window.recaptchaVerifier.clear();
     window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('reCaptchaContainer', {
              'size': 'invisible'
              });
      alertify.notify('Invalid OTP!', 'error', 3);
      return false; 
    });

  }
}); 

  </script>

