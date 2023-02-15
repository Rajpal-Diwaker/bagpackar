
<!--Header End Here-->
<div id="another_wrapper">
  <div class="earnwr">
    <div class="earnlistwr">
      <span class="earnheading">
        Earnings
      </span>
      <div class="earnltli">
        <?php if(isset($data['EarningData']) && !empty($data['EarningData'])){ 
        foreach ($data['EarningData'] as $key => $value) {
         $pricetext=''; 
         if($value['paid_currency']=="INR"){
           $pricetext='fa fa-rupee';
         }else{
        $pricetext='fa fa-usd';
         }
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
     $NewAmount=number_format($value['paid_amount'], 2, '.', ',');
      $NewAmount = preg_replace('/\.00/', '', $NewAmount);

    ?>
    <div class="earnli">
      <div class="coastdate">
        <span class="earncs"><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $NewAmount;?></span>
        <span class="earndt"><?php echo date('d',strtotime($value['from_date'])).' '.date('M',strtotime($value['from_date'])).' - '.date('d',strtotime($value['to_date'])).' '.date('M',strtotime($value['to_date']));?></span>
      </div>
      <div class="palcestay">
        <span class="earnpla"><?php echo $value['name_listing'];?></span>
        <span class="earnsta"><?php echo $show_string;?> </span>
      </div>
    </div>
  <?php } } else { ?>
  <div class="notFoundata text_black text-center">No Data Found</div>
<?php } ?> 
</div>
</div>
<div class="earndiv">
  <div class="totalrevenue_thismonth">
    <div class="totalrevenue">
      <span class="totalmonicon">
        <i class="fa fa-money" aria-hidden="true"></i>
      </span>
      <span class="totalmoninfo">
        <?php if (isset($data['TotalRevenue']['paid_currency'])) {
          $pricetext="";
          if($data['TotalRevenue']['paid_currency']=="INR"){
               $pricetext='fa fa-rupee';
             }else{
               $pricetext='fa fa-usd';
             }
           }else{
            $pricetext="";
           }
        $TotalRevenue=number_format($data['TotalRevenue']['paid_amount'], 2, '.', ',');
        $TotalRevenue = preg_replace('/\.00/', '', $TotalRevenue);
            ?>
        <span class="totalmonheading"><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $TotalRevenue ;?></span>
        <span class="totalmontext">Total Revenue</span>
      </span>
    </div>
    <div class="totalrevenuethis">
      <span class="totalmonicon">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      </span>
      <span class="totalmoninfo">
        <?php $newMOnthRevenue=number_format($data['newMOnthRevenue'], 2, '.', ',');
        $newMOnthRevenue = preg_replace('/\.00/', '', $newMOnthRevenue);?>
        <span class="totalmonheading"><i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $newMOnthRevenue;?></span>
        <span class="totalmontext">Total Revenue for this month</span>
      </span>
    </div>
  </div>
  <div class="chart_div">
    <div class="chart_header">
      <div class="chart_info">
        <span class="neticome">Net Income</span>
        <?php $Avgamount=number_format($data['AVGRevenue']['paid_amount'], 2, '.', ',');
        $Avgamount = preg_replace('/\.00/', '', $Avgamount);?>
        <span class="avg">Avg. <i class="<?php echo $pricetext;?>" aria-hidden="true">&nbsp;</i><?php echo $Avgamount;?></span>
      </div>
      <div class="chart_change input_field">
        <div class="form_group">
          <div class="select_tag">
            <select class="form-control" name="Last Year" id="income_graph">
              <option value="1">Month</option>
              <option value="2">Last Year</option>
            </select>
            <i class="fa fa-caret-down" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="chart_content">
      <canvas id="myStackedChart"></canvas>
    </div>
  </div>
</div>
</div>
</div>

<script src="<?php echo base_url();?>assets/js/Chart.js"></script>
<script src="<?php echo base_url();?>assets/js/chartradius.js"></script>
<script>
  var user_id='<?php echo $_SESSION['webuser_bgpkr']['user_id'];?>';
  var newcount=[];
  var newmonth=[];
  $('#income_graph').on('change',function(event){
   event.preventDefault();
   var income_graph=$('#income_graph').val();
   $.ajax({
    url: "<?php echo base_url()?>host/year_graph",
    'type': "POST",
    data:{income_graph,user_id},
    success: function(myObj){
      var reponse2 = JSON.parse(myObj);  
      myChart.data.labels=reponse2.newmonth;
      myChart.data.datasets[0].data=reponse2.newcount;
      myChart.update();
    }
  });
 });
  newcount=<?php if(!empty($data['newcount'])){ echo json_encode($data['newcount']);}else{ echo "";}?>;
  newmonth=<?php if(!empty($data['newmonth'])){ echo json_encode($data['newmonth']);}else{ echo "";}?>;
  var labeldates = newmonth;
  var databind =  newcount;
var ctx = document.getElementById("myStackedChart");
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: labeldates,
datasets: [
{
data: databind,
backgroundColor: '#000'
}
]
},
options: {
responsive: true,
maintainAspectRatio: true,
cornerRadius: 5,
scales: {
xAxes: [{
gridLines: {
display:false
},
stacked: true,
ticks: {
fontColor: '#000000',
fontFamily: 'Manrope',
fontSize: 14
},
barPercentage: 0.5
}],
yAxes: [{
stacked: true,
ticks: {
fontColor: '#000000',
beginAtZero: true,
fontFamily: 'Manrope',
fontSize: 14,
// stepSize: 500
},
}],
},
legend: { display: false }
}
});
</script>






