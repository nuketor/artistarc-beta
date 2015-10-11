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
	$sql2 = "SELECT
			user.user_name,
			user.user_email,
			user.user_contact,
			user.user_city,
			user.user_pass,
			user.user_class,
			user_data.user_dob,
			user_data.user_follower,
			user_data.user_art
		FROM
			user
		JOIN
			user_data
		ON
			user.ID=user_data.ID;
		";
	
		$result2 = mysqli_query($con, $sql2) or trigger_error("Sorry !! Error");
			
		if(!$result2)
		{
			echo '<br>The posts could not be displayed, please try again later.</b>';
			
		}
		else
		{
			while($row2 = mysqli_fetch_assoc($result2))
			{
// 				$row2 = mysqli_query($result2);
			
// 				echo "posted row : ";
// 				echo $row2['user_follower'] . " <br>";
			}
		}
}

include 'php/navbar_h.php';

//<!-- [ Post Body ] -->
include 'stream.php';
include 'container.php';

		echo "UserName : ".$_SESSION['UserName'] . "</br>";				
		echo "UserEmail : ".$_SESSION['UserEmail'] . "</br>";
		echo "UserContact : ".$_SESSION['UserContact'] . "</br>";
		echo "UserCity : ".$_SESSION['UserCity'] . "</br>";
		echo "UserClass : ".$_SESSION['UserClass'] . "</br>"; 
		echo "testVar : ".$_SESSION['testVar'] . "</br>";

}

include 'php/footer.php';

?>