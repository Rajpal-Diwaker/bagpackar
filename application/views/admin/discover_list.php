       <div class="dashboard_data_wrap">
          <div class="dahaboard_heading">
              <span>Discover List</span>
            </div>
           <div class="row">
            <div class="col-md-12">
               <a style="float:right;margin-top: 15px; margin-right: 40px;" href="<?php echo base_url();?>admin/discover"><button class="btn btn-success">Add Discover Image</button></a> 
            </div>
          </div>  
        <!-- Popular List Section Start Here-->
       <div class="dashbord_cont_wrapper">
          <div class="user_list_wrap table-responsive">
            <table class="table table-stripd" id="popular_table"> 
              <thead>
                <th>S.No</th>
                <th>Discover Images</th>
                <th>Address</th>
                <th>Country</th>
                <th>City</th>
                <th class="table_data_center">Action</th>
              </thead>
            </table>

          </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
       var userDataTable = $('#popular_table').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         'ajax': {
            'url':'<?=base_url()?>admin/Admin/get_discover',
            'data': function(data){
            }
         },
         'columns': [
            {data: 'no'},
            { data: 'discover_image' },
             { data: 'address' },
            { data: 'country' },
            {data:'city'},
            {data:'action'}
           
         ],
         'columnDefs': [{
                "targets": [-1,-2,-5],
                "orderable": false
            }]
       });
    });

   function deletediscover(d_id){
  var d_id=d_id;
    bootbox.confirm("<b>Do you really want to delete this Image?</b>", function(result) {
       if(result==true){
         $(".loaderCntr").show();
        location.href = 'admin/deletediscover?d_id='+d_id;
       }
    });
 }

</script>