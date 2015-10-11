 
             
	<div class="logion" style="width:400px" align="center" onsubmit="return: false">
        <div class="col-md-12 text-center">
		<form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav" >
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail2">Email address</label>
		                <input type="text" class="form-control" name="user_name" placeholder="Email address" required="">
                        </div>
			<div class="form-group">
		                <label class="sr-only" for="exampleInputPassword2">Password</label>
		                <input type="text" class="form-control" name="user_pass" placeholder="Password" required="">
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

    