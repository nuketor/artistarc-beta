<?php

include 'connect.php';

session_start(); // Start the session

// select the collection
$collection = $db->art_status;

echo "wtf";

$document = array( 
      "post_body" => $_POST['post_body'],
      "post_username" => $_SESSION['UserName'],
      "post_type" => $_SESSION['id'],
      "post_circle" => "0",
      "post_media" => "0",
      "post_pic" => "0",
      "post_video" => "0",
      "post_music" => "",
      "post_time" => date('j-m-y h-i-s')
   );
    
$collection->insert($document);
   
 echo "success!<br>";
 
/*
 $cursor = $collection->find();
 
 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
 */
?>