<?php
include('db.php');

 if(isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction']!=''){
$actionfunction = $_REQUEST['actionfunction'];
  
   call_user_func($actionfunction,$_REQUEST,$con,$limit);
}
function showData($data,$con,$limit){
  $page = $data['page'];
   if($page==1){
   $start = 0;  
  }
  else{
  $start = ($page-1)*$limit;
  }
  
  $sql = "select * from user order by ID asc limit $start,$limit";
  $str='';
  $data = $con->query($sql);
  if($data!=null && $data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
//      $str.="<div class='data-container'><p>".$row['ID']."</p><p>".$row['user_name']."</p><p>".$row['user_class']."</p></div>";
//      $str.="<p>qwertyuiop[sdfghjkl;</p></br>";
	$str.= "<div class='col-md-12'>
				<div class='panel panel-default panel-fill'>
					<div class='panel-heading'> 
						<h3 class='panel-title'>Post #1</h3> 
					</div>
					<div class='panel-body'>
							Panel content
					</div>
				</div>
		</div>";
// 	echo $row . "</br>";
   }
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
    $str .= "<input type='hidden' class='isload' value='false'><p>Finished</p>";
   }
  
   
 echo $str; 

}

?>