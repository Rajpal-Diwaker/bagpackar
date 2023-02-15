       <div class="dashboard_data_wrap">
        <div class="dahaboard_heading">
          <span>User List</span>
        </div>
        <!-- User List Section Start Here-->
        <div class="dashbord_cont_wrapper">
          <div class="user_list_wrap table-responsive">
            <table class="table table-stripd" id="userTable"> 
              <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Status</th>
                <th class="table_data_center">Action</th>
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
              'url':'<?=base_url()?>admin/get_users',
              'data': function(data){
              }
            },
            'columns': [
            {data: 'no'},
            { data: 'name' },
            { data: 'email' },
            {data:'manage'},
            {data:'action'}

            ],
            'columnDefs': [{
              "targets": [-1,-2],
              "orderable": false
            }]
          });
         });

           function deleteuser(user_id){
            var user_id=user_id;
            bootbox.confirm({
              title: "Delete User?",
              message: "Do you really want to delete this User?",
              buttons: {
               confirm: {
                label: 'Yes',
                className: 'btn-confirm'
              },
              cancel: {
                label: 'No',
                className: 'btn-cancel'
              }
            },
            callback: function (result) {
              if(result==true){
               $(".loaderCntr").show();
               location.href = 'admin/deleteUser?user_id='+user_id;
             }
           }
         });

          }

//=============status function==================//
function status(element,user_id) {
 var hasclass=$(element).hasClass('btn-success');
 if(hasclass ==false){
  var showtext ="<b>Do you really want to Block this User?<b>";
}else{
  var showtext ="<b>Do you really want to Un-Block this User?<b>";
}
bootbox.confirm(showtext, function(result) {
  if(result==true){
    if( $(element).hasClass('btn-success')){
      var status='1';
      $(element).text('Block');
      $(element).removeClass('btn-success').addClass('btn-danger');
    }
    else 
    {
      var status = '0';
      $(element).text('Unblock');
      $(element).removeClass('btn-danger').addClass('btn-success');
    }
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url(); ?>admin/admin/block_user',
      data: {
        'id': user_id,
        'active':status
      },
      success: function(data) {
      }
    });
  }
});
}

$(document).on("click", ".edit", function (event) {
 $('select option:nth-child(1)').prop("selected", true).change();
});


</script>