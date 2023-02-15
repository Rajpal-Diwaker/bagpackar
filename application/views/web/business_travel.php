    
    <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Business Travel</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_business_travel');
                 $res = $select->row();
                 if ($res->body) {
                 	echo $res->body;
                 } ?>
   
      </div>
     