<?php
include 'connect.php';
$limit=10;
 if(isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction']!=''){
$actionfunction = $_REQUEST['actionfunction'];
  
   call_user_func($actionfunction,$_REQUEST,$con,$limit);
}
function showData($data,$con,$limit){
session_start();
  $page = $data['page'];
   if($page==1){
   $start = 0;  
  }
  else{
  $start = ($page-1)*$limit;
  }
  
  $sql = "select * from user_post order by PID asc limit $start,$limit";
   $str='';
  $data = $con->query($sql);
  if($data!=null && $data->num_rows>0){
   while( $row = $data->fetch_array(MYSQLI_ASSOC)){
//      $str.="<div class='data-container'><p>".$row['ID']."</p><p>".$row['user_name']."</p><p>".$row['user_class']."</p></div>";
//      $str.="<p>qwertyuiop[sdfghjkl;</p></br>";
	$str.= "<div class='col-md-12'>
				<div class='panel panel-default panel-fill'>
					<div class='panel-heading post-head'> 
					
						<a href='' style='padding: 10px;' class='p-0 dropdown-toggle dropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					                    <img src='./img/user_profile/0001.jpg' class='img-circle post-usr-pic'>
							</a>
					
						<h3 class='panel-title post-user'>" . $_SESSION['UserName'] . "</h3> 
						
						<small class='post-time'><p class='text-muted'>5hrs ago</p></small>
					</div>
					<div class='panel-body post-body'>
					
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet sodales dolor, non suscipit mi. Fusce sem tellus, feugiat in arcu ut, molestie malesuada augue. Aenean laoreet leo vitae urna iaculis eleifend. Integer facilisis vulputate mauris in molestie. Nunc sit amet dapibus elit.
					</br>
						<span class='label label-default'>#tag1</span>
						<span class='label label-primary'>#tag2</span>
						<span class='label label-success'>#tag3</span>
						<span class='label label-info'>#tag4</span>
						<span class='label label-warning'>#tag5</span>
						<span class='label label-danger'>#tag6</span>
						</br>
					<div class='post-social' >
						 <span class='glyphicon glyphicon-star-empty' aria-hidden='true'></span>
						 <span class='glyphicon glyphicon-comment m-l-15' aria-hidden='true'></span>
						 <span class='glyphicon glyphicon-share m-l-20' aria-hidden='true'></span>
					</div>
					</div>
					<div class='panel-footer text-muted'>
							COMMENT!
					</div>
				</div>
		</div>";
// 	echo $row . "</br>";
   }
   $str.="<input type='hidden' class='nextpage' value='".($page+1)."'><input type='hidden' class='isload' value='true'>";
   }else{
    $str .= "<input type='hidden' class='isload' value='false'><p>Finished</p>";
//     echo $data;
   }
  
//  echo "test";
 echo $str; 

}

?>