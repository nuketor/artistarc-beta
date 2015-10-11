 <?php
//login.php
include 'php/connect.php';
include 'php/header.php';
include 'php/navbar_s.php';

session_start(); // Start the session

        
//<!-- LOGIN -->

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="./php/logout.php">sign out</a> if you want.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{

echo'             
	<div class="logion" style="width:400px" align="center" onsubmit="return: false">
        <div class="col-md-12 text-center">
		<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">Email address</label>
		                <input type="text" class="form-control" name="user_name" placeholder="User Name" required="">
                        </div>
			<div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">Password</label>
		                <input type="password" class="form-control" name="user_pass" placeholder="Password" required="">
                        </div>
	                <div class="checkbox">
		                <label>
	                        <input type="checkbox"> Remember me
			</label>
			</div>
				<div class="form-group">
				<button type="submit" value="" class="btn btn-blck btn-block" >Sign in</button>
			</div>
		</form>
      </div>
      <div id="result-f"></div>
      </div>
      ';
      }
      else{
		      $sql = "SELECT 
						user_name,
						user_email,
						user_contact,
						user_city,
						user_pass,
						user_class
					FROM
						user
					WHERE
						user_name = '" .$_POST['user_name'] . "'
					AND
						user_pass = '" .$_POST['user_pass'] . "'";
						
			$result = mysqli_query($con,$sql) or trigger_error("Sorry there is an account assigned to that userid");
      
      

			if (mysqli_affected_rows($con) == 1) {

				echo "login success";

				$row = mysqli_fetch_array ($result, MYSQLI_NUM);
				$body = "Thank you for login. <br />";
				echo "<br /><h3>Thank you for login! .</h3>";
				
				session_start();
				//storing session
				$_SESSION['signed_in'] = true;
				
				$_SESSION['UserName'] 	= $row[0];
				$_SESSION['UserEmail'] 	= $row[1];
				$_SESSION['UserContact'] = $row[2];
				$_SESSION['UserCity'] = $row[3];
				$_SESSION['UserClass'] = $row[4];
				
// 				echo "UserName : ".$_SESSION['UserName'] . "</br>";
// 				echo "UserEmail : ".$_SESSION['UserEmail'] . "</br>";
// 				echo "UserContact : ".$_SESSION['UserContact'] . "</br>";
// 				echo "UserCity : ".$_SESSION['UserCity'] . "</br>";
// 				echo "UserClass : ".$_SESSION['UserClass'] . "</br>";
				
				$_SESSION['testVar'] = "wtf";
				echo "testVar : ".$_SESSION['testVar'] . "</br>";
				
				session_regenerate_id();
				
				header ("refresh:0;url=home.php" );
				
				
				mysqli_close($con); // Close the database connection.
				exit();

			}else {
				session_start();
			        $_SESSION["signed_in"] = false;
			}

	}      
}
include 'php/footer.php';
?>
    