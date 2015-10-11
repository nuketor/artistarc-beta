 <?php
//signup.php
include 'php/connect.php';
include 'php/header.php';

session_start(); // Start the session

if($_SESSION['signed_in'] == false)
{
	include 'php/navbar_s.php';
	
	//the user is not signed in
	header ("refresh:0;url=./login.php" );
	echo "sorry you are not signed in";
}
else
{
// 	echo "Name ?".$_SESSION['UserName'];
	//the user is signed in
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
	$sql = "SELECT
			user.user_name,
			user.user_email,
			user.user_contact,
			user.user_city,
			user.user_pass,
			user.user_class,
			use_data.user_dob,
			user_data.user_follower
		FROM user
		FULL OUTER JOIN user_data
		ON user.userID=user_data.ID
		ORDER BY user.ID
		";
	
$result = mysqli_query($con, $sql);
}

include 'php/navbar_h.php';

echo '<div class="container p_top">';


echo "UserName : ".$_SESSION['UserName'] . "</br>";				
echo "UserEmail : ".$_SESSION['UserEmail'] . "</br>";
echo "UserContact : ".$_SESSION['UserContact'] . "</br>";
echo "UserCity : ".$_SESSION['UserCity'] . "</br>";
echo "UserClass : ".$_SESSION['UserClass'] . "</br>"; 
echo "testVar : ".$_SESSION['testVar'] . "</br>";



}

include 'php/footer.php';

?>