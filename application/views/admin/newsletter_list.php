       <div class="dashboard_data_wrap">
          <div class="dahaboard_heading">
              <span>News Letter List</span>
            </div>
           <div class="row">
            <div class="col-md-12">
               <a style="float:right;margin-top: 15px; margin-right: 40px;" href="<?php echo base_url();?>admin/newsletter"><button class="btn btn-success">Send-Email</button></a> 
            </div>
          </div>  
        <!-- New letter List Section Start Here-->
       <div class="dashbord_cont_wrapper">
          <div class="user_list_wrap table-responsive">
            <table class="table table-stripd" id="newsTable"> 
              <thead>
                <th>S.No</th>
                <th>E-mail</th>
                <th>Added ON</th>
              </thead>
            </table>

          </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
       var userDataTable = $('#newsTable').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         'ajax': {
            'url':'<?=base_url()?>admin/get_newsletter',
            'data': function(data){
            }
         },
         'columns': [
            {data: 'no'},
            { data: 'email' },
            {data:'added_on'},
           
         ],
         'columnDefs': [{
                "targets": [-3],
                "orderable": false
            }]
       });
    });
</script>