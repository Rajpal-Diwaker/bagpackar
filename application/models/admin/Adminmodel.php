<?php
class Adminmodel extends CI_Model
{

 //================change_password_process=========//

  function change_password_process($data){
   $select=$this->db->where('admin_id',$data['admin_id'])
   ->where('password',md5($data['old_password']))
   ->get('bgpkr_admin');
   if($select->num_rows()>0){
    $update=$this->db->where('admin_id',$data['admin_id'])
    ->set('password',md5($data['new_password']))
    ->update('bgpkr_admin');
    if($update==1){
     return 1;
   }else{
     return 0;
   }                  
 }else{
  return 0;
}                  
}

//=========Dashbaord============//no of booking

function dashboardData(){
  $all_bgpkr_users=$this->db->from("bgpkr_users")->where('delete_status','0')->count_all_results();

  $properties=$this->db->from("bgpkr_host_placetype")->where('is_approve','1')->count_all_results();

  $reqproperties=$this->db->from("bgpkr_host_placetype")->where('is_complete','1')->where('is_approve','0')->count_all_results();

  $booking=$this->db->from("bgpkr_booking")->where('confirm_status !=','2')->count_all_results();

  $select=$this->db->select('ROUND(SUM(b.paid_amount),2) as allamount,ROUND(SUM(hp.base_price), 2) as baseprice')
  ->from("bgpkr_booking as b")
  ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
  ->where('b.confirm_status','1')
  ->where('b.paid_currency','INR')
  ->get();
  $res = $select->result();   
  $earning = $res[0]->allamount-$res[0]->baseprice; 

  $select1=$this->db->select('ROUND(SUM(b.paid_amount),2) as allamount,ROUND(SUM(hp.base_price), 2) as baseprice')
  ->from("bgpkr_booking as b")
  ->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left')
  ->where('b.confirm_status','1')
  ->where('b.paid_currency','USD')
  ->get();
  $res1 = $select1->result();   
  $earning1 = $res1[0]->allamount-$res1[0]->baseprice;
  $earn = array('rupee' => $earning,
   'dollar' => $earning1 );                  

  $result=["all_bgpkr_users"=>$all_bgpkr_users,"properties"=>$properties,"req_properties"=>$reqproperties,"booking"=>$booking,"earning"=>$earn];
  return $result;
}

//=========Dashbaord============//

function dashboard(){
  $all_bgpkr_users=$this->db->from("bgpkr_users")->where('delete_status','0')->count_all_results();
  $all_posts=$this->db->from("posts")->count_all_results();
  $all_add=$this->db->from("advertisements")->count_all_results(); 
  $active_add=$this->db->where('ads_status','1')->from("advertisements")->count_all_results();  
  $result=["all_bgpkr_users"=>$all_bgpkr_users,"all_posts"=>$all_posts,"all_add"=>$all_add,"active_add"=>$active_add];
  return $result;
}
//==========get bgpkr_users============//
function getUsers($postData){
 $response = array();
 $draw = $postData['draw'];
 $start = $postData['start'];
  $rowperpage = $postData['length']; // Rows display per page
   $columnIndex = $postData['order'][0]['column']; // Column index
   $columnName = $postData['columns'][$columnIndex]['data'];
   // $columnSortOrder = $postData['order'][0]['dir']; // asc or desc 
    $columnSortOrder = 'DESC'; // asc or desc 
    if($columnName=='no'){
      $columnName='user_id';
    }
    $searchValue = $postData['search']['value']; // Search value
    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(name like '%".$searchValue."%' or 
     email like '%".$searchValue."%' or 
     phone like'%".$searchValue."%' ) ";
   }
   
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('user_id,name,email,user_status,delete_status,added_on');
  $select=$this->db->get('bgpkr_users');
  $records=$select->result();
  $totalRecords =$select->num_rows();

     ## Total number of record with filtering
  $this->db->select('user_id,name,email,user_status,delete_status,added_on');
  if($searchQuery != '')
   $this->db->where($searchQuery);
 $select1=$this->db->get('bgpkr_users');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

     ## Fetch records
 $this->db->select('user_id,name,email,user_status,delete_status,added_on');
 if($searchQuery != '')
   $this->db->where($searchQuery);
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_users');
 $records=$select2->result();

 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  if ($record->user_status == '1') {
    $user_status='<button class="btn btn-danger" id="status_'.$record->user_id.'" onclick="status(this,'.$record->user_id.');">Block</button>';
  }else{
    $user_status='<button class="btn btn-success" id="status_'.$record->user_id.'"  onclick="status(this,'.$record->user_id.');">Unblock</button>';
  }
  $action='<div class="view_del"><a href="'.base_url().'admin/user-detail?id='.$record->user_id.'" class="edit"><i class="fa fa-eye" aria-hidden="true"></i></a>';
  // <button onclick="deleteuser('.$record->user_id.')" id="delete_'.$record->user_id.'"><i id="delete" class="fa fa-trash" aria-hidden="true"></i></button></div>

  $data[] = array( 
    "no"=>$no,
    "name"=>$record->name,
    "email"=>$record->email,
    "manage"=>$user_status,
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);
return $response; 
}


//==========get get_newsletter============//
function get_newsletter($postData){
 $response = array();
 $draw = $postData['draw'];
 $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
   $columnIndex = $postData['order'][0]['column']; // Column index
   $columnName = $postData['columns'][$columnIndex]['data'];
   if($columnName=='no'){
    $columnName='news_id';
  }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(email like '%".$searchValue."%') ";
   }
   
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('news_id,email,added_on');
  $select=$this->db->get('bgpkr_newsletter');
  $records=$select->result();
  $totalRecords =$select->num_rows();

     ## Total number of record with filtering
  $this->db->select('news_id,email,added_on');
  if($searchQuery != '')
   $this->db->where($searchQuery);
 $select1=$this->db->get('bgpkr_newsletter');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

     ## Fetch records
 $this->db->select('news_id,email,added_on');
 if($searchQuery != '')
   $this->db->where($searchQuery);
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_newsletter');
 $records=$select2->result();

 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $data[] = array( 
    "no"=>$no,
    "email"=>$record->email,
    "added_on"=>date("d M Y", strtotime($record->added_on))

  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);
return $response; 
}

//============deleteuser================//

function deleteuser($user_id){
  $this->db->where('user_id',$user_id)->set('delete_status','1')->update('bgpkr_users');
  return 1;  
}

//=========block bgpkr_users============//

function block_user($data){
  $select=$this->db->where('user_id',$data['user_id'])
  ->get('bgpkr_users');
  if($select->num_rows()>0){
    $this->db->where('user_id',$data['user_id']);
    $this->db->set('user_status',$data['user_status']);
    $this->db->set('updated_on',date('Y-m-d'));
    if($data['user_status']=='0'){            
     $this->db->set('device_token','');
   }           
   $update=$this->db->update('bgpkr_users');
   if($update==1){
    return 1;
  }else{
    return 0;
  }        
}
else{
  return 0;
}
}

//===========user_detail===========//

function user_detail($user_id){
 $select=$this->db->select('user_id,name,user_image,email,phone,country_code,dob')->where('user_id',$user_id)->get('bgpkr_users');
 if($select->num_rows()>0){
  $result=$select->row_array();
  return $result;
}else{
  return [];
}               
}


//=======edit_user================//

function edit_user($data){
  $select=$this->db->where('user_id',$data['user_id'])
  ->get('bgpkr_users');
  if($select->num_rows()>0){
    $update=$this->db->where('user_id',$data['user_id'])->update('bgpkr_users',$data);
    if($update==1){
      return 1;
    }else{
      return 0;
    } 
  }else{
    return 0;
  } 
}

//===========get_popular_destination===============//

function get_popular_destination($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='pd_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(address like '%".$searchValue."%' or 
     country like '%".$searchValue."%' or city like '%".$searchValue."%') ";
   }
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('pd_id,image,address,country,city');
  $select=$this->db->get('bgpkr_popular_destination');
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('pd_id,address,country,city');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $select1=$this->db->get('bgpkr_popular_destination');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();
// print_r($totalRecordwithFilter);die;
     ## Fetch records
 $this->db->select('pd_id,image,address,country,city');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_popular_destination');
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $image='<div class="report_posts"><img src="'.$record->image.'" alt=""></div>';
  $action='<div class="view_del"><a href="'.base_url().'admin/edit-image?id='.$record->pd_id.'&page='.base64_encode('popular_destination').'" id="edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <button onclick="deletepopular('.$record->pd_id.')" id="delete_'.$record->pd_id.'"><i id="delete" class="fa fa-trash" aria-hidden="true"></i></button></div>';
  $data[] = array( 
    "no"=>$no,
    "image"=>$image,
    "address"=>$record->address,
    "country"=>$record->country,
    "city"=>$record->city,
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}


//============popular_destination_process======//

function popular_destination_process($data){
 $insert=$this->db->insert('bgpkr_popular_destination',$data);
 $insert_id=$this->db->insert_id();
 if($insert_id>0){
  return 1;
}else{
  return 0;
}  
}

//============deletepopular================//

function deletepopular($pd_id){
  $this->db->where('pd_id',$pd_id)->delete('bgpkr_popular_destination');
  return 1;  
}



//===========get Discover===============//

function get_discover($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='d_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(address like '%".$searchValue."%' or 
     country like '%".$searchValue."%' or city like '%".$searchValue."%') ";
   }
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('d_id,image,address,country,city');
  $select=$this->db->get('bgpkr_discover');
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('d_id,address,country,city');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $select1=$this->db->get('bgpkr_discover');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();
// print_r($totalRecordwithFilter);die;
     ## Fetch records
 $this->db->select('d_id,image,address,country,city');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_discover');
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $discover_image='<div class="report_posts"><img src="'.$record->image.'" alt=""></div>';
  $action='<div class="view_del"><a href="'.base_url().'admin/edit-image?id='.$record->d_id.'&page='.base64_encode('discover').'" id="edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <button onclick="deletediscover('.$record->d_id.')" id="delete_'.$record->d_id.'"><i id="delete" class="fa fa-trash" aria-hidden="true"></i></button></div>';
  $data[] = array( 
    "no"=>$no,
    "discover_image"=>$discover_image,
    "address"=>$record->address,
    "country"=>$record->country,
    "city"=>$record->city,
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}


//============discover_process======//

function discover_process($data){
 $insert=$this->db->insert('bgpkr_discover',$data);
 $insert_id=$this->db->insert_id();
 if($insert_id>0){
  return 1;
}else{
  return 0;
}  
}

//============deletediscover================//

function deletediscover($d_id){
  $this->db->where('d_id',$d_id)->delete('bgpkr_discover');
  return 1;  
}


//===========get_stay_home===============//

function get_stay_home($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='sh_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(address like '%".$searchValue."%' or 
     country like '%".$searchValue."%' or city like '%".$searchValue."%') ";
   }
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('sh_id,image,address,country,city');
  $select=$this->db->get('bgpkr_stay_home');
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('sh_id,address,country,city');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $select1=$this->db->get('bgpkr_stay_home');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();
 $this->db->select('sh_id,image,address,country,city');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_stay_home');
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $stay_home_image='<div class="report_posts"><img src="'.$record->image.'" alt=""></div>';
  $action='<div class="view_del"><a href="'.base_url().'admin/edit-image?id='.$record->sh_id.'&page='.base64_encode('stay_home').'" id="edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <button onclick="deletestay_home('.$record->sh_id.')" id="delete_'.$record->sh_id.'"><i id="delete" class="fa fa-trash" aria-hidden="true"></i></button></div>';
  $data[] = array( 
    "no"=>$no,
    "stay_home_image"=>$stay_home_image,
    "address"=>$record->address,
    "country"=>$record->country,
    "city"=>$record->city,
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}


//============popular_destination_process======//

function stay_home_process($data){
 $insert=$this->db->insert('bgpkr_stay_home',$data);
 $insert_id=$this->db->insert_id();
 if($insert_id>0){
  return 1;
}else{
  return 0;
}  
}


//============deletestay_home================//

function deletestay_home($sh_id){
  $this->db->where('sh_id',$sh_id)->delete('bgpkr_stay_home');
  return 1;  
}


//===========get_most_popular===============//

function get_most_popular($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='mp_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(address like '%".$searchValue."%' or 
     country like '%".$searchValue."%' or city like '%".$searchValue."%'  or title like '%".$searchValue."%'  or body like '%".$searchValue."%') ";
   }
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('mp_id,image,address,country,city,title,body');
  $select=$this->db->get('bgpkr_most_popular');
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('mp_id,address,country,city,title,body');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $select1=$this->db->get('bgpkr_most_popular');
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();
 $this->db->select('mp_id,image,address,country,city,title,body');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get('bgpkr_most_popular');
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $most_image='<div class="report_posts"><img src="'.$record->image.'" alt=""></div>';
  $action='<div class="view_del"><a href="'.base_url().'admin/edit-most-popular?id='.base64_encode($record->mp_id).'" id="edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <button onclick="deletemost_popular('.$record->mp_id.')" id="delete_'.$record->mp_id.'"><i id="delete" class="fa fa-trash" aria-hidden="true"></i></button></div>';
  $data[] = array( 
    "no"=>$no,
    "image"=>$most_image,
    "address"=>$record->address,
    "country"=>$record->country,
    "city"=>$record->city,
    "title"=>mb_strimwidth($record->title, 0, 50,'...'),
    "body"=>mb_strimwidth($record->body, 0, 100,'...'),
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}


//============most_popular_process======//

function most_popular_process($data){
 $insert=$this->db->insert('bgpkr_most_popular',$data);
 $insert_id=$this->db->insert_id();
 if($insert_id>0){
  return 1;
}else{
  return 0;
}  
}

//===========edit_most_popular==================//

function edit_most_popular($mp_id){
  $select=$this->db->select('*')
  ->where('mp_id',$mp_id)
  ->get('bgpkr_most_popular');
  if($select->num_rows()>0){
   $result=$select->row_array();
   return $result; 
 }else{
  return [];
}               
}


//===========edit_popular_process==================//

function edit_popular_process($data){
  $select=$this->db->select('mp_id')
  ->where('mp_id',$data['mp_id'])
  ->get('bgpkr_most_popular');
  if($select->num_rows()>0){
   $update=$this->db->where('mp_id',$data['mp_id'])->update('bgpkr_most_popular',$data); 
   if($update==1){
    return 1;
  }else{
    return 0;
  } 
}else{
  return 0;
}               
}


//============deletemost_popular================//

function deletemost_popular($mp_id){
  $this->db->where('mp_id',$mp_id)->delete('bgpkr_most_popular');
  return 1;  
}

//=========edit_image===========//

function edit_image($id,$path){  
  if($path=="popular_destination"){
    $select=$this->db->select('pd_id as id,image,address,country,city,latitude,longitude')
    ->where('pd_id',$id)
    ->get('bgpkr_popular_destination');
    if($select->num_rows()>0){
      $result=$select->row_array();
      return $result;
    }else{
      return 0;
    }                   
  }else if($path=="discover"){

    $select=$this->db->select('d_id as id,image,address,country,city,latitude,longitude')
    ->where('d_id',$id)
    ->get('bgpkr_discover');
    if($select->num_rows()>0){
      $result=$select->row_array();
      return $result;
    }else{
      return 0;
    }  

  }else if($path=="stay_home"){
    $select=$this->db->select('sh_id as id,image,address,country,city,latitude,longitude')
    ->where('sh_id',$id)
    ->get('bgpkr_stay_home');
    if($select->num_rows()>0){
      $result=$select->row_array();
      return $result;
    }else{
      return 0;
    }  
  }else{
    return 0;
  }
}

//=========edit_image_process==============//

function edit_image_process($data,$path){
 $id=$data['id'];
 unset($data['id']);
 if($path=="popular_destination"){
  $update=$this->db->where('pd_id',$id)->update('bgpkr_popular_destination',$data);
}else if($path=="discover"){
  $update=$this->db->where('d_id',$id)->update('bgpkr_discover',$data);
}else if($path=="stay_home"){
  $update=$this->db->where('sh_id',$id)->update('bgpkr_stay_home',$data);
}
if($update==1){
  return 1;
}else{
  return 0;
}

}

//========send_push==============//

function send_push(){
 $select=$this->db->select('user_id,name')
 ->where('user_status','1')
 ->where('delete_status','0')
 ->get('bgpkr_users');
 if($select->num_rows()>0){
  $result=$select->result_array();
  return $result;
}else{
  return [];
}                 
}


//=========approve_property=============//

function approve_property($host_id,$status){ 
 $update=$this->db->where('host_id',$host_id)->set('is_approve',$status)->update('bgpkr_host_placetype');
 if($update==1){
  return 1;
}else{
  return 0;
}
}

//=========reject_property=============//

function reject_property($host_id){ 
 $update=$this->db->where('host_id',$host_id)->set('is_approve','2')->update('bgpkr_host_placetype');
 if($update==1){
  return 1;
}else{
  return 0;
}
}


function get_property_request($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='hp.host_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(hp.name_listing like '%".$searchValue."%' or 
     hp.host_name like '%".$searchValue."%' or bu.email like '%".$searchValue."%' or hp.added_on like '%".$searchValue."%')";
   }

   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
  $this->db->from('bgpkr_host_placetype as hp');
  $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
  $this->db->where('hp.is_approve','0');
  $this->db->where('hp.is_complete','1');
  $select=$this->db->get();
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
  $this->db->from('bgpkr_host_placetype as hp');
  $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->where('hp.is_approve','0');
 $this->db->where('hp.is_complete','1');
 $select1=$this->db->get();
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

 $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
 $this->db->from('bgpkr_host_placetype as hp');
 $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->where('hp.is_approve','0');
 $this->db->where('hp.is_complete','1');
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get();
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $action='<button class="btn btn-success" id="status_'.$record->host_id.'" onclick="status(this,'.$record->host_id.');">Approved</button>
  <button class="btn btn-danger" data-name="'.$record->host_name.'" onclick="statusreject(this,'.$record->host_id.');" data-email="'.$record->email.'">Reject</button>';

  $view='<div class="view_del"><a href="'.base_url().'admin/view-property?id='.$record->host_id.'" id="edit"><i class="fa fa-eye" aria-hidden="true"></i></a></div>';
  $data[] = array( 
    "no"=>$no,
    "property_name"=>$record->name_listing,
    "host_name"=>$record->host_name,
    "host_email"=>$record->email,
    "created_on"=>date("d M Y", strtotime($record->added_on)),
    "view"=>$view,
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}
//=====active_property============//
function active_property($postData){
  $response = array();
  $draw = $postData['draw'];
  $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data'];
    if($columnName=='no'){
      $columnName='hp.host_id';
    }
    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value'];

    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(hp.name_listing like '%".$searchValue."%' or 
     hp.host_name like '%".$searchValue."%' or bu.email like '%".$searchValue."%' or hp.added_on like '%".$searchValue."%')";
   }

   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
  $this->db->from('bgpkr_host_placetype as hp');
  $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
  $this->db->where('hp.is_approve','1');
  $this->db->where('hp.is_complete','1');
  $select=$this->db->get();
  $totalRecords=$select->num_rows();
  $records=$select->result();
     ## Total number of record with filtering
  $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
  $this->db->from('bgpkr_host_placetype as hp');
  $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
  if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->where('hp.is_approve','1');
 $this->db->where('hp.is_complete','1');
 $select1=$this->db->get();
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

 $this->db->select('hp.host_id,hp.name_listing,hp.host_name,hp.added_on,bu.email');
 $this->db->from('bgpkr_host_placetype as hp');
 $this->db->join('bgpkr_users as bu','hp.user_id=bu.user_id','left');
 if($searchQuery != ''){
   $this->db->where($searchQuery);
 }
 $this->db->where('hp.is_approve','1');
 $this->db->where('hp.is_complete','1');
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get();
 $records=$select2->result();
 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;
  $action='<div class="view_del"><a href="'.base_url().'admin/view-property?id='.$record->host_id.'" id="edit"><i class="fa fa-eye" aria-hidden="true"></i></a></div>';
  $data[] = array( 
    "no"=>$no,
    "property_name"=>$record->name_listing,
    "host_name"=>$record->host_name,
    "host_email"=>$record->email,
    "created_on"=>date("d M Y", strtotime($record->added_on)),
    "action"=>$action
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);

return $response;  
}


//=========view_property================//

function view_property($host_id){
  $date_time=date('Y-m-d H:i:s'); 
  $Allresult=[]; 
  $AllAmenties=[];   
  $allrating=[];
  $Allimages=[];                        
//===========rating============//
  $query=$this->db->select('br.rating,br.review,br.added_on,bu.name,IFNULL(bu.user_image,"") as user_image')
  ->from('bgpkr_review_rating as br')
  ->join('bgpkr_users as bu','br.guest_id=bu.user_id','left')
  ->where('host_id',$host_id)
  ->get();
  $allrating=$query->result_array();
  $Allresult['allrating']=$allrating;                 
//============result================//     
  $select = $this->db->select('hp.host_id,hp.user_id,bu.name,IFNULL(bu.user_image,"") as user_image,hp.name_listing,hp.total_guest,hp.total_bedrooms,hp.guest_bed,hp.doublebeds,hp.queenbeds,hp.singlebeds,hp.sofabeds,hp.kingbeds,hp.twinbeds,hp.airbeds,hp.total_kingbed,hp.total_queenbed,hp.total_doublebed,hp.total_twinbed,hp.total_airbed,hp.total_bathrooms,hp.location,hp.lat,hp.lng,hp.description,hp.host_name,hp.profile_img,hp.introduction,hp.base_price,hp.currency,hp.basic_amenities,hp.kitchen_dining,hp.bed_baths,hp.entertainment,hp.outside_amenities,hp.safty_amenities,IFNULL((select AVG(rating) from bgpkr_review_rating where hp.host_id = host_id),0) as rating,IFNULL(GROUP_CONCAT(distinct DATE_FORMAT(und.unavailable_date,"%m/%d/%Y")),"") as unavilable_date,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=1),0) as one_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=2),0) as two_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=3),0) as three_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=4),0) as four_rating,IFNULL((select count(id) from bgpkr_review_rating where host_id='.$host_id.' and rating=5),0) as five_rating,(select image from bgpkr_host_place_images where (hp.host_id = host_id and is_cover = "1" and image_type="kitchen") LIMIT 1) as kitimage,hp.cleaning_fee,hp.stay_min_night as min_day,hp.stay_max_night as max_day,hp.about_neighborhood')
  ->from('bgpkr_host_placetype as hp')
  ->join('bgpkr_users as bu','hp.user_id=bu.user_id','left')
  ->join('bgpkr_host_unavailable_date as und','hp.host_id=und.host_id','left')
  ->where('hp.host_id',$host_id)
  ->where('hp.is_complete','1')
  ->order_by('hp.host_id','desc')
  ->get();
// echo $this->db->last_query();die;
  if($select->num_rows()>0){
    $result=$select->row_array();
    $bedrooms=[];
    $Totalbedroom=$result['total_bedrooms'];
    $doublebeds = explode(",", $result['doublebeds']);
    $queenbeds = explode(",", $result['queenbeds']);
    $singlebeds = explode(",", $result['singlebeds']);
    $sofabeds = explode(",", $result['sofabeds']);
    $kingbeds = explode(",", $result['kingbeds']);
    $twinbeds = explode(",", $result['twinbeds']);
    $airbeds = explode(",", $result['airbeds']);
    for ($i=1; $i<=$Totalbedroom ; $i++) {
      $bedrooms[$i]=$doublebeds[$i-1].','.$queenbeds[$i-1].','.$singlebeds[$i-1].','.$sofabeds[$i-1].','.$kingbeds[$i-1].','.$twinbeds[$i-1].','.$airbeds[$i-1];
    }
    $result['bedrooms']=$bedrooms;
    $result['unavilable_date']=explode(',',$result['unavilable_date']);
    $result['unavilable_date'] = "'" . implode ( "','",$result['unavilable_date']) . "'";
    if(isset($final_array) && !empty($final_array)){
      $result['unavilable_date']=$result['unavilable_date'].",".$final_array;
    }  
    if($result['currency']=="Dollar" && $result['base_price']<=100){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
    }else if($result['currency']=="Dollar" && $result['base_price']>100 && $result['base_price']<=300 ){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
    }else if($result['currency']=="Dollar" && $result['base_price']>300){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
    }else if($result['currency']=="Rupees" && $result['base_price']<=700){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*5; 
    }else if($result['currency']=="Rupees" && $result['base_price']>700 && $result['base_price']<=2100 ){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*10; 
    }else if($result['currency']=="Rupees" && $result['base_price']>2100){
      $result['base_price']=$result['base_price']+($result['base_price']/100)*15; 
    }
    $AllAmenties=$this->all_amenties_name($result['basic_amenities'],$result['kitchen_dining'],$result['bed_baths'],$result['entertainment'],$result['outside_amenities']);
    $Allresult['all_amenties']=$AllAmenties;
    $Allresult['result']=$result;
    $selectbImg = $this->db->select('image,is_cover')
    ->where('host_id',$host_id)
    ->get('bgpkr_host_place_images');
    $Allimages=$selectbImg->result_array();
    $sorting = array_column($Allimages, 'is_cover');
    array_multisort($sorting, SORT_DESC, $Allimages);
    $Allresult['allimage']= $Allimages;
    return $Allresult;  
  }else{
    return [];
  }
}
//============all amenties name=========================//
function all_amenties_name($basic_amenities,$kitchen_dining,$bed_baths,$entertainment,$outside_amenities){
 $Alldata=[]; 
 $amenties_url =base_url().'assets/all_amenties/';
 $AllAmenties =$basic_amenities.','.$kitchen_dining.','.$bed_baths.','.$entertainment.','.$outside_amenities; 
 $AllIDarray=explode(',', $AllAmenties);
 foreach ($AllIDarray as $value) {
  $select = $this->db->select("name,image")
  ->where('id',$value)
  ->get('bgpkr_all_amenities');
  $result=$select->row_array();
  if($result['image']!=""){
    $result['image']=$amenties_url.$result['image'];
  }
  $Alldata[]=$result;
}
return $Alldata;
}




//==============send notification process===================//
function send_notification_process($user_id,$messages){
  $notitype="Customized";
  $title="Bagpackar";
  $select=$this->db->select('user_id,device_token,device_type')->where_in('user_id',$user_id)->where('user_status','1')->where('delete_status','0')->get('bgpkr_users');
  if($select->num_rows()>0){
    $result=$select->result_array();
    foreach ($result as $key => $value) {
      if ($value['device_token'] != '') {
        $device_token=$value['device_token'];
        $device_type=$value['device_type'];
        $message=["title"=>$title, "msg"=>$messages, "type"=>"normal"];
        $res=$this->common->notification($device_token,$device_type,$message,$notitype);
      }
      $dataNoti=array('receiver_id' =>$value['user_id'],'title' =>$title,'message' =>$messages,'type' =>$notitype);
      $this->db->insert('bgpkr_notification',$dataNoti);
    }
    return 1; 
  }else{
    return 0;
  }
}

//==============terms& condition=============//

function terms_condition(){
  $select=$this->db->select('terms_id,body')
  ->order_by('terms_id','desc')
  ->limit('1')  
  ->get('bgpkr_terms_condition');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============update_terms==================//

function update_terms($post){
  $update=$this->db->where('terms_id',$post['terms_id'])->set('body',$post['body'])->update('bgpkr_terms_condition');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}


//==============privacy_policy=============//

function privacy_policy(){
  $select=$this->db->select('privacy_id,body')
  ->order_by('privacy_id','desc')
  ->limit('1')  
  ->get('bgpkr_privacy_policy');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============update_privacy==================//

function update_privacy($post){
  $update=$this->db->where('privacy_id',$post['privacy_id'])->set('body',$post['body'])->update('bgpkr_privacy_policy');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}


//==============privacy_policy=============//

function helpNsupport(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_help_support');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============update help and Support==================//

function update_helpSupport($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_help_support');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}


//==============cancel and Refund=============//

function cancelRefund(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_cancel_refund');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}


//============update cancel and Refund==================//

function update_cancelRefund($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_cancel_refund');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}

//==============covid-19 guidelines=============//

function covid19_guidelines(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_covid19_guidelines');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============update covid-19 guidelines==================//

function update_covid19_guidelines($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_covid19_guidelines');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}

//==============referral program=============//

function referral(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_referral_program');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}
//============update referral program==================//

function update_referral($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_referral_program');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}


//==========get booking transactions list============//
function transactionslist($postData){
 $response = array();
 //print_r($postData);die;
 $draw = $postData['draw'];
 $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
   $columnIndex = $postData['order'][0]['column']; // Column index
   $columnName = $postData['columns'][$columnIndex]['data'];
   if($columnName=='no'){
    $columnName='b.booking_id';
  }

  if($columnName=='date'){
    $columnName='b.from_date';
  }

  if($columnName=='to_date'){
    $columnName='b.to_date';
  }

  if($columnName=='amount'){
    $columnName='b.paid_amount';
  }

    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(hp.name_listing like '%".$searchValue."%' or 
     u.name like '%".$searchValue."%' or 
     b.from_date like '%".$searchValue."%' or
     b.paid_amount like '%".$searchValue."%' or 
     uh.name like'%".$searchValue."%' ) ";
   }
   
   // Booking list—>> property name, guest name, host name, date of booking (from and to date), amount paid, status (Accepted or Rejected).

   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
           // $this->db->order_by('b.booking_id','desc');
  $select=$this->db->get(); 
  $records=$select->result();
  $totalRecords =$select->num_rows();

     ## Total number of record with filtering
  $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
  if($searchQuery != '')
   $this->db->where($searchQuery);
 $select1=$this->db->get();
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

     ## Fetch records
 $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
 $this->db->from('bgpkr_booking as b');
 $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
 $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
 $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
 $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
 $this->db->where('bp.payment_status','1');
 if($searchQuery != '')
   $this->db->where($searchQuery);
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get();
 $records=$select2->result();

 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;

  $date=date('d M Y',strtotime($record->from_date));
  $to_date = date('d M Y',strtotime($record->to_date));

  if ($record->paid_currency == 'INR') {
    $amount = '<i class="fa fa-inr" aria-hidden="true"></i> '.$record->paid_amount;
  }else{
    $amount = '<i class="fa fa-usd" aria-hidden="true"></i> '.$record->paid_amount;
  }

  if ($record->confirm_status == '1') {
    $user_status='<button class="btn btn-success" id="status_'.$no.'">Accepted</button>';
  }
  elseif($record->confirm_status == '0') {
    $user_status='<button class="btn btn-warning" id="status_'.$no.'">Pending</button>';
  }
  else{
    $user_status='<button class="btn btn-danger" id="status_'.$no.'">Rejected</button>';
  }
  
  $data[] = array( 
    "no"=>$no,
    "name_listing"=>$record->name_listing,
    "guest_name"=>$record->guest_name,
    "host_name"=>$record->host_name,
    "date"=>$date,
    "to_date"=>$to_date,
    "amount"=>$amount,
    "action"=>$user_status
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);
return $response; 
}


//==========get payment admin to host list============//
function hostpaylist($postData){
 $response = array();
 //print_r($postData);die;
 $draw = $postData['draw'];
 $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
   $columnIndex = $postData['order'][0]['column']; // Column index
   $columnName = $postData['columns'][$columnIndex]['data'];
   if($columnName=='no'){
    $columnName='b.booking_id';
  }

  if($columnName=='date'){
    $columnName='b.from_date';
  }

  if($columnName=='to_date'){
    $columnName='b.to_date';
  }

  if($columnName=='amount' || $columnName=='to_be_paid' || $columnName=='total_amount' || $columnName=='admin_commission'){
    $columnName='b.paid_amount';
  }

    $columnSortOrder ='DESC'; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(hp.name_listing like '%".$searchValue."%' or 
     b.from_date like '%".$searchValue."%' or
     b.paid_amount like '%".$searchValue."%' or 
     u.name like'%".$searchValue."%' ) ";
   }
   
   // Admin to host payment —>> Date(From and To), host name, Total amount, To be paid, Admin Commission, Status(Paid or Pending)

   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }

  $this->db->select('b.booking_id,hp.host_id,u.name as host_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status,hp.base_price,b.host_paid_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
  $select=$this->db->get(); 
  $records=$select->result();
  $totalRecords =$select->num_rows();

     ## Total number of record with filtering
  $this->db->select('b.booking_id,hp.host_id,u.name as host_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status,hp.base_price,b.host_paid_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
  if($searchQuery != '')
   $this->db->where($searchQuery);
 $select1=$this->db->get();
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

     ## Fetch records
 $this->db->select('b.booking_id,hp.host_id,u.name as host_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status,hp.base_price,b.host_paid_status');
 $this->db->from('bgpkr_booking as b');
 $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
 $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
 $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
 $this->db->where('bp.payment_status','1');
 if($searchQuery != '')
   $this->db->where($searchQuery);
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get();
 $records=$select2->result();

 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;

  $date=date('d M Y',strtotime($record->from_date));
  $to_date = date('d M Y',strtotime($record->to_date));
  if ($record->paid_currency == 'INR') {
    $amount = '<i class="fa fa-inr" aria-hidden="true"></i> '.$record->paid_amount;
    $paidAmount = '<i class="fa fa-inr" aria-hidden="true"></i> '.$record->base_price; 
    $admin_commissiond = (int)$record->paid_amount-(int)$record->base_price;
    $admin_commission = '<i class="fa fa-usd" aria-hidden="true"></i> '.$admin_commissiond;
  }else{
    $amount = '<i class="fa fa-usd" aria-hidden="true"></i> '.$record->paid_amount;
    $paidAmount = '<i class="fa fa-usd" aria-hidden="true"></i> '.$record->base_price; 
    $admin_commissiond = (int)$record->paid_amount-(int)$record->base_price;
    $admin_commission = '<i class="fa fa-usd" aria-hidden="true"></i> '.$admin_commissiond;
  }

  if ($record->host_paid_status == '1') {
    $user_status='<button class="btn btn-success" id="status_'.$no.'">Paid</button>';
  }
  elseif($record->host_paid_status == '0') {
    $user_status='<button class="btn btn-warning" id="status_'.$no.'">Pending</button>';
  }
  
  

  $data[] = array( 
    "no"=>$no,
    "host_name"=>$record->host_name,
    "date"=>$date,
    "to_date"=>$to_date,
    "total_amount"=>$amount,
    "to_be_paid"=>$paidAmount,
    "admin_commission"=>$admin_commission,
    "action"=>$user_status
  ); 

}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);
return $response; 
}


 //================view property booking detail =====================//      
function guestKnow($host_id){
  $select = $this->db->select('noise_potential,pet_live,have_weapon,media_device,other_animal')
  ->where('host_id',$host_id)
  ->get('bgpkr_host_placetype');
  if ($select->num_rows()>0) {
   $result = $select->result_array();
   return $result[0];  
 }                

}            

//================view property booking detail =====================//      
function thingTakeCare($host_id){
  $select = $this->db->select('suitable_child,suitable_infants,suitable_pets,allow_smoking,allow_parties')
  ->where('host_id',$host_id)
  ->get('bgpkr_host_placetype');
  if ($select->num_rows()>0) {
   $result = $select->result_array();
   return $result[0];  
 } 
} 

//==========CancelBooking list============//
function CancelBooking($postData){
 $response = array();
 //print_r($postData);die;
 $draw = $postData['draw'];
 $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
   $columnIndex = $postData['order'][0]['column']; // Column index
   $columnName = $postData['columns'][$columnIndex]['data'];
   if($columnName=='no'){
    $columnName='b.booking_id';
  }

  if($columnName=='date'){
    $columnName='b.from_date';
  }
  
  if($columnName=='to_date'){
    $columnName='b.to_date';
  }

  if($columnName=='amount'){
    $columnName='b.paid_amount';
  }

    $columnSortOrder = 'DESC'; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    $search_arr = array();
    $searchQuery = "";
    if($searchValue != ''){
     $search_arr[] = "(hp.name_listing like '%".$searchValue."%' or 
     u.name like '%".$searchValue."%' or 
     b.from_date like '%".$searchValue."%' or
     b.paid_amount like '%".$searchValue."%' or 
     uh.name like'%".$searchValue."%' ) ";
   }
   if(count($search_arr) > 0){
    $searchQuery = implode(" and ",$search_arr);
  }
  $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
  $where="(b.confirm_status='2' or b.confirm_status='3')";
  $this->db->where($where);
           // $this->db->order_by('b.booking_id','desc');
  $select=$this->db->get(); 
  $records=$select->result();
  $totalRecords =$select->num_rows();

     ## Total number of record with filtering
  $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
  $this->db->from('bgpkr_booking as b');
  $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
  $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
  $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
  $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
  $this->db->where('bp.payment_status','1');
  $where="(b.confirm_status='2' or b.confirm_status='3')";
  $this->db->where($where);
  if($searchQuery != '')
   $this->db->where($searchQuery);
 $select1=$this->db->get();
 $records=$select1->result();
 $totalRecordwithFilter =$select1->num_rows();

     ## Fetch records
 $this->db->select('b.booking_id,hp.host_id,b.guest_id,u.name as host_name,uh.name as guest_name,hp.name_listing,b.from_date,b.to_date,b.paid_amount,b.paid_currency,b.confirm_status');
 $this->db->from('bgpkr_booking as b');
 $this->db->join('bgpkr_host_placetype as hp','hp.host_id=b.host_id','left');
 $this->db->join('bgpkr_users as u','u.user_id=b.user_id','left');
 $this->db->join('bgpkr_users as uh','uh.user_id=b.guest_id','left');
 $this->db->join('bgpkr_payment as bp','bp.booking_id=b.booking_id','left');
 $this->db->where('bp.payment_status','1');
 $where="(b.confirm_status='2' or b.confirm_status='3')";
 $this->db->where($where);
 if($searchQuery != '')
   $this->db->where($searchQuery);
 $this->db->order_by($columnName, $columnSortOrder);
 $this->db->limit($rowperpage, $start);
 $select2=$this->db->get();
 $records=$select2->result();

 $data = array();
 $no = $_POST['start'];
 foreach($records as $record ){
  $no++;

  $date=date('d M Y',strtotime($record->from_date));
  $to_date = date('d M Y',strtotime($record->to_date));

  if ($record->paid_currency == 'INR') {
    $amount = '<i class="fa fa-inr" aria-hidden="true"></i> '.$record->paid_amount;
  }else{
    $amount = '<i class="fa fa-usd" aria-hidden="true"></i> '.$record->paid_amount;
  }
  $user_status='<button class="btn btn-success">Cancel</button>';
  $data[] = array( 
    "no"=>$no,
    "name_listing"=>$record->name_listing,
    "guest_name"=>$record->guest_name,
    "host_name"=>$record->host_name,
    "date"=>$date,
    "to_date"=>$to_date,
    "amount"=>$amount,
    "action"=>$user_status
  ); 
}

     ## Response
$response = array(
 "draw" => intval($draw),
 "iTotalRecords" => $totalRecords,
 "iTotalDisplayRecords" => $totalRecordwithFilter,
 "aaData" => $data
);
return $response; 
}

//================newsletter====================//

function newsletter(){
  $this->db->select('news_id,email,added_on');
  $select=$this->db->get('bgpkr_newsletter');
  $result=$select->result_array(); 
  return $result;
}

//==============for Update payment =================//
function host_previous_month_payment(){
  $todaydate=date('Y-m-d');
  $PaymentResult=[];
  $select=$this->db->select('host_id,base_price,cleaning_fee,added_on')->where('is_complete','1')->where('is_approve','1')->get('bgpkr_host_placetype');
  $result=$select->result_array();
//=======use for all host ID============//
  foreach ($result as $key => $value) {
    $prevmonth = date('n', strtotime("last month"));
    $prevyear=date("Y", strtotime("-1 months"));
    $dateObj=DateTime::createFromFormat('!m', $prevmonth);
    $monthName=$dateObj->format('F');
    $this->db->select("host_id,year(created_on) as payment_year, MONTHNAME(created_on) as payment_month, ((sum(total_days)*".$value['base_price'].")+(count(booking_id)*".$value['cleaning_fee'].")) as total_amount");
    $this->db->where('year(created_on)',$prevyear);
    $this->db->where('MONTHNAME(created_on)',date('F',strtotime($monthName)));
    $this->db->where('host_id',$value['host_id']);
    $this->db->where('payment_status','1');
    $this->db->where('confirm_status','1');
    $query=$this->db->get('bgpkr_booking');
    $bookingResult=[];
    $bookingResult=$query->row_array();
    $bookingResult['last_updated']=date('Y-m-d H:i:s');
//==========if not empty user_id===============//
    if(!empty($bookingResult['host_id'])){
      $newQuery=$this->db->select('host_id')->where('payment_month',$bookingResult['payment_month'])->where('payment_year',$bookingResult['payment_year'])->where('host_id',$value['host_id'])->get('bgpkr_host_monthly_payment');
      if($newQuery->num_rows()>0){
        $this->db->where('payment_month',$bookingResult['payment_month'])->where('payment_year',$bookingResult['payment_year'])->where('host_id',$value['host_id'])->update('bgpkr_host_monthly_payment',$bookingResult);
      }else{
        $this->db->insert('bgpkr_host_monthly_payment',$bookingResult);
      }
//if no payment avilable
    }else{
//==============payment not avilable in current month==========//
      $newResult=[];
      $newResult=["host_id"=>$value['host_id'],"payment_month"=>$monthName,"payment_year"=>$prevyear,"total_amount"=>0,"last_updated"=>date('Y-m-d H:i:s')];
      $this->db->insert('bgpkr_host_monthly_payment',$newResult);
    }
  }
  return true;
}

//============== all host current month payment==========//
function host_current_month_payment(){
  $todaydate=date('Y-m-d');
  $PaymentResult=[];
  $select=$this->db->select('host_id,base_price,cleaning_fee,added_on')->where('is_complete','1')->where('is_approve','1')->get('bgpkr_host_placetype');
  $result=$select->result_array();
//=======use for all host ID============//
  foreach ($result as $key => $value) {
    $dateObj=DateTime::createFromFormat('!m', date('n'));
    $monthName=$dateObj->format('F');
    $this->db->select("host_id,year(created_on) as payment_year, MONTHNAME(created_on) as payment_month, ((sum(total_days)*".$value['base_price'].")+(count(booking_id)*".$value['cleaning_fee'].")) as total_amount");
    $this->db->where('year(created_on)',date('Y'));
    $this->db->where('MONTHNAME(created_on)',date('F',strtotime($monthName)));
    $this->db->where('host_id',$value['host_id']);
    $this->db->where('payment_status','1');
    $this->db->where('confirm_status','1');
    $query=$this->db->get('bgpkr_booking');
    $bookingResult=[];
    $bookingResult=$query->row_array();
    $bookingResult['last_updated']=date('Y-m-d H:i:s');
//==========if not empty user_id===============//
    if(!empty($bookingResult['host_id'])){
      $newQuery=$this->db->select('host_id')->where('payment_month',$bookingResult['payment_month'])->where('payment_year',$bookingResult['payment_year'])->where('host_id',$value['host_id'])->get('bgpkr_host_monthly_payment');
      if($newQuery->num_rows()>0){
        $this->db->where('payment_month',$bookingResult['payment_month'])->where('payment_year',$bookingResult['payment_year'])->where('host_id',$value['host_id'])->update('bgpkr_host_monthly_payment',$bookingResult);
      }else{
        $this->db->insert('bgpkr_host_monthly_payment',$bookingResult);
      }
//if no payment avilable
    }else{
//==============payment not avilable in current month==========//
      $newResult=[];
      $newResult=["host_id"=>$value['host_id'],"payment_month"=>$monthName,"payment_year"=>date('Y'),"total_amount"=>0,"last_updated"=>date('Y-m-d H:i:s')];
      $this->db->insert('bgpkr_host_monthly_payment',$newResult);
    }
  }
  return true;
}


//==============career=============//

function career(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_career');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============ update_career program==================//

function update_career($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_career');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}

//==============about_us=============//

function about_us(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_about_us');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}


//============ update_about_us==================//

function update_about_us($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_about_us');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}


//==============business_travel=============//

function business_travel(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_business_travel');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}

//============ update_business_travel==================//

function update_business_travel($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_business_travel');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}

//==============why_host=============//

function why_host(){
  $select=$this->db->select('id,body')
  ->order_by('id','desc')
  ->limit('1')  
  ->get('bgpkr_why_host');
  if($select->num_rows()>0){
    $result=$select->row_array();
    return $result;
  }else{
    return [];
  }                 
}


//============ update_why_host==================//

function update_why_host($post){
  $update=$this->db->where('id',$post['id'])->set('body',$post['body'])->update('bgpkr_why_host');
  if($update==1){
    return 1;
  }else{
    return 0;
  }  
}



}//========class=======//