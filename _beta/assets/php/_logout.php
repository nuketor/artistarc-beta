<?php

include 'connect.php';
session_start();
unset ($_SESSION['signed_in']);
session_destroy();
echo "you successfully loged out";
header ("refresh:0;url=../../signin.php" );
mysqli_close($con);
exit ();

?>