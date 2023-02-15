    
    <div id="another_wrapper" class="static-page">
         <h1 class="text-center">About Us</h1>
         <?php $select=$this->db->select('body')
                                ->get('bgpkr_about_us');
                 $res = $select->row();
                 if ($res->body) {
                 	echo $res->body;
                 } ?>
   
      </div>
     