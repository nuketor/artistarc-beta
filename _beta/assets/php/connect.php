<?php
// Config
$dbhost = 'localhost';
$dbname = 'artistarc_beta';
 
// connect to mongodb
$m = new MongoClient();
//  echo "Connection to database successfully<br>";
//select database
$db = $m->$dbname;
//  echo "Database ". $dbname ." selected<br>";
/*
// select the collection
$collection = $db->art_user;
// pull a query
$cursor = $collection->find();
 
 echo "success!<br>";

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
*/
?>