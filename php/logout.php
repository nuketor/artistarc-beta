<?php
include 'connect.php';
session_start();
unset ($_SESSION['signed_in']);
session_destroy();
echo "you successfully loged out";
header ("refresh:1;url=../login.php" );
mysqli_close($con);
exit ();
?>