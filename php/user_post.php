<?php
  include 'connect.php';
  
  $sql = "INSERT INTO
		user_post(post_user, post_media, post_data)
			VALUES(
				'" . $_SESSION ['UserName'] . "',
				'" . $_SESSION['UserContact'] . "',
			        '" . $_POST['user_post'] . "'
			      )";
						
		$result = mysqli_query($con, $sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Something went wrong while registering. Please try again later.';
			//echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			echo 'Successfully registered. You can now <a href="signin.php">sign in</a> and start posting! :-)';
		}

?>