 <?php
//signup.php
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
	<div class="panel panel-default center-block" style="width:380px;margin-top:100px">
		<div class="panel-heading bg-login" style="height:130px">
			<h3 class="text-center text-white m-t-40">Sign In to <strong>Artistarc</strong></h3></div>
			<div class="panel-body">
			<!-- forum -->
			<form class="form-horizontal m-t-20" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " type="text" name="user_name" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" name="user_pass" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary text-left m-l-25">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a class="no-deco" href="recoverpw.html"><i class=" glyphicon glyphicon-user"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a class="no-deco" href="register.html">Create an account</a>
                        </div>
                    </div>
                </form> 
		</div>
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
				
//				session_start();
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
    