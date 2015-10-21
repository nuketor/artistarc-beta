<?php

include '../assets/php/connect.php';

echo "Search \n";

$query =  $_POST['search_querry'];
// $x =  $_POST['search_x'];

$collection = $db->art_user;

$test_querry = array( 
      "name" => $query
   );

$cursor = $collection->find($test_querry);
 
 foreach ($cursor as $document) {
      echo "<h3><a href='artist.php/&artist=" . $document["username"] . "'>" . $document["name"] . "</a></h3><br>";
   }

?>