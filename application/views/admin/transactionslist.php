       <div class="dashboard_data_wrap">
          <div class="dahaboard_heading">
              <span>Booking Transactions List</span>
            </div>
        <!-- User List Section Start Here-->
       <div class="dashbord_cont_wrapper">
          <div class="user_list_wrap table-responsive">
            <table class="table table-stripd" id="userTable"> 
              <thead>
                <th>S.No</th>
                <th>Property</th>
                <th>Guest</th>
                <th>Host</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Total Amount</th>
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
            'url':'<?=base_url()?>admin/transactionslist',
            'data': function(data){
            }
         },
         'columns': [
            {data: 'no'},
            {data: 'name_listing' },
            {data: 'guest_name' },
            {data:'host_name'},
            {data:'date'},
            {data: 'to_date'},
            {data:'amount'},
            {data:'action'}
           
         ],
         'columnDefs': [{
                "targets": [-1],
                "orderable": false
            }]
       });
    });

</script>