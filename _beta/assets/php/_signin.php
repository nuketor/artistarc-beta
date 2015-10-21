<?php

include 'connect.php';

// select the collection
$collection = $db->art_user;
// pull a query
//$cursor = $collection->find();
// 
// echo "success!<br>";
//
// foreach ($cursor as $document) {
//      echo $document["name"] . "\n";
//   }

echo "wtf \n";

$username_pass = 'testtest';
$paswrd = 'test';

$art_login = array( 
      "username" => $_POST['input_username'],
      "paswrd" => $_POST['input_password']
   );
   
    
$cursor = $collection->findOne($art_login);
 
 echo "success!<br>";

 if($cursor){
 
      session_start();
      session_regenerate_id();
      $_SESSION['signed_in']= true;
      $_SESSION['id'] = $cursor["_id"];
      $_SESSION['UserName'] = $cursor["username"];
      $_SESSION['UserEmail']= $cursor["email"];
      $_SESSION['Class'] = $cursor["class"];
      $_SESSION['Name'] = $cursor["name"];
      $_SESSION['Lname'] = $cursor["lname"];
 
      echo $cursor["name"] . "\n";
      echo $cursor["id"] . "\n";
      
      header ("refresh:0;url=../../home.php" );
    }
  

?>