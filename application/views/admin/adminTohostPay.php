       <div class="dashboard_data_wrap">
          <div class="dahaboard_heading">
              <span>Host Payments List</span>
            </div>
        <!-- User List Section Start Here-->
       <div class="dashbord_cont_wrapper">
          <div class="user_list_wrap table-responsive">
            <table class="table table-stripd" id="userTable"> 
              <thead>
                <th>S.No</th>
                <th>Host Name</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Total Amount</th>
                <th>To be paid</th>
                <th>Commission</th>
                <th>Status</th>
              </thead>
            </table>

          </div>
        </div>


    <script type="text/javascript">
    $(document).ready(function(){
       var userDataTable = $('#userTable').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         'ajax': {
            'url':'<?=base_url()?>admin/hostpaylist',
            'data': function(data){
            }
         },
         'columns': [
            {data: 'no'},
            {data:'host_name' },
            {data: 'date'},
            {data: 'to_date'},
            {data: 'total_amount'},
            {data: 'to_be_paid'},
            {data:'admin_commission'},
            {data:'action'}
           
         ],
         'columnDefs': [{
                "targets": [-1],
                "orderable": false
            }]
       });
    });

</script>