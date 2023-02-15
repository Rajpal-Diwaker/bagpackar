    
    <div id="another_wrapper" class="static-page">
         <h1 class="text-center">Why Host</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_why_host');
                 $res = $select->row();
                 if ($res->body) {
                 	echo $res->body;
                 } ?>
   
      </div>
     