 <?php
//signup.php
include 'php/connect.php';
include 'php/header.php';
include 'php/navbar_s.php';
?>

        <!-- REGISTER -->
             
	<div class="logion" style="width:400px" align="center" onsubmit="return: false">
        <div class="col-md-12 text-center">
		<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">Email address</label>
				<div class="input-group">
				<div class="input-group-addon" style="width: 87px;">Name</div>
		                <input type="text" class="form-control" name="user_name" placeholder="Name" required="">
		                </div>
                        </div>
			<div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">Email</label>
		                <div class="input-group">
				<div class="input-group-addon" style="width: 87px;">Email</div>
		                <input type="text" class="form-control" name="user_email" placeholder="Email address" required="">
		                </div>
                        </div>
                        <div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">Contact</label>
		                <div class="input-group">
				<div class="input-group-addon" style="width: 87px;">Contact</div>
		                <input type="text" class="form-control" name="user_contact" placeholder="Contact" required="">
		                </div>
                        </div>
                        <div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">City</label>
		                <div class="input-group">
				<div class="input-group-addon" style="width: 87px;">City</div>
		                <input type="text" class="form-control" name="user_city" placeholder="City" required="">
		                </div>
                        </div>
                        <div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">Password</label>
		                <div class="input-group">
				<div class="input-group-addon" style="width: 87px;">Password</div>
		                <input type="password" class="form-control" name="user_pass" placeholder="Password" required="">
		                </div>
                        </div>
			<label class="radio-inline" style="float: left;padding-left: 81px;">
				<input type="radio" name="user_class" value="A">User
			</label>
			<label class="radio-inline" style="float: left;">
				<input type="radio" name="user_class" value="B">Artist
			</label>
			<label class="radio-inline"  style="float: left;">
				<input type="radio" name="user_class" value="C">Vendor
			</label>
			</br></br>
			<div class="form-group">
				<button type="submit" value="" class="btn btn-blck btn-block" style="width: 298px;">Sign in</button>
			</div>
		</form>
      </div>
      <div id="result-f"></div>
      </div>

    <script>
    $('#login-nav').submit(function(){
        var data = $(this).serialize();
        
        $.ajax({
	        url  : "./php/register_p.php",
	        type : "POST",
	        async: false,
	        data : data,
	        
	        success: function() {
	                //display message back to user here
	                $('#result-f').html(data);
		    }
	    });
	      return false;
       });


      </script>

    <?php include 'php/footer.php';   ?>
    