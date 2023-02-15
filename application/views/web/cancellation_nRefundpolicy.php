      <!--Header End Here-->
      <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Cancellation and Refund Policy</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_cancel_refund');
                 $res = $select->row();
                 if ($res->body) {
                    echo $res->body;
                 } ?>
         
      </div>
      