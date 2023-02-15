
      <!--Header End Here-->
      <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Help and Support</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_help_support');
                 $res = $select->row();
                 if ($res->body) {
                    echo $res->body;
                 } ?>
         

      </div>
     