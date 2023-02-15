       <div class="dashboard_data_wrap">
          <div class="dahaboard_heading">
              <span>Active Property List</span>
            </div>
        <!-- User List Section Start Here-->
       <div class="dashbord_cont_wrapper">
        <div class="user_list_wrap table-responsive">
        <table class="table table-stripd" id="active_property_list">
              <thead>
                <th>S.No</th>
                <th>Property Name</th>
                <th>Host Name</th>
                <th>Host Email</th>
                <th>Created Date</th>
                <th class="table_data_center">Action</th>
              </thead>
            </table>

          </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
       var userDataTable = $('#active_property_list').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         'ajax': {
          'url':'<?=base_url()?>admin/Admin/active_property',
            'data': function(data){
            }
         },
         'columns': [
            {data: 'no'},
            { data: 'property_name' },
            { data: 'host_name' },
            { data: 'host_email' },
            { data: 'created_on' },
            {data:'action'}
         ],
         'columnDefs': [{
                "targets": [-1,-2],
                "orderable": false
            }]
       });
    });

//=============status function==================//
function status(element,host_id) {
var host_id=host_id; 
var hasclass=$(element).hasClass('btn-success');
var showtext ="<b>Do you really want to Approved this Property?<b>";
bootbox.confirm(showtext, function(result) {
if(result==true){
$(".loaderCntr").show();
$.ajax({
type: 'POST',
url: '<?php echo base_url(); ?>admin/admin/approve_property',
data: {
'host_id': host_id,
'status':1
},
success: function(response) {
          if(response ==1){
            var notification = alertify.notify('Property Approved Successfully', 'success', 3, function(){ 
               console.log('dismissed'); 
               $(".loaderCntr").hide();
               window.location.reload();
           })
           }
            if(response==0){
                var notification = alertify.notify('Something went wrong!', 'error', 3, function(){  console.log('dismissed');
                  $(".loaderCntr").hide();
            });
            }

        }
});
}
});
}
</script>
