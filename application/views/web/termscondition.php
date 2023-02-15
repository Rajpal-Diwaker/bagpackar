
  <!--Header End Here-->
  <div id="another_wrapper" class="static-page">
       <h1 class="text-center">Terms & Condition</h1>
       <?php $select=$this->db->select('body')
                                ->get('bgpkr_terms_condition');
                 $res = $select->row();
                 if ($res->body) {
                 	echo $res->body;
                 }?>
   </div>
  