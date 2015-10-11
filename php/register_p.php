<?php
  include 'connect.php';
  
  $sql = "INSERT INTO
		user(user_name, user_email, user_contact, user_city, user_pass, user_class)
			VALUES(
				'" . $_POST['user_name'] . "',
				'" . $_POST['user_email'] . "',
				'" . $_POST['user_contact'] . "',
			        '" . $_POST['user_city'] . "',
			        '" . $_POST['user_pass'] . "',
			        '" . $_POST['user_class'] . "'
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