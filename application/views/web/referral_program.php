       <!--Header End Here-->
      <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Bagpackar Referral Program</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_referral_program');
                 $res = $select->row();
                 if ($res->body) {
                  echo $res->body;
                 }?>
         
      </div>
      