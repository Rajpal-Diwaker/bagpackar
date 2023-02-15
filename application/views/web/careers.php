    
    <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Career</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_career');
                 $res = $select->row();
                 if ($res->body) {
                 	echo $res->body;
                 } ?>
   
      </div>
     