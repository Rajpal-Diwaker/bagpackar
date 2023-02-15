
      <!--Header End Here-->
      <div id="another_wrapper" class="static-page">
         <h1 class="text-center">COVID-19 TRAVEL INFORMATION AND ADVISORY</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_covid19_guidelines');
                 $res = $select->row();
                 if ($res->body) {
                    echo $res->body;
                 } ?>
         
      </div>
     