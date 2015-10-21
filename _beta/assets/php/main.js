$(document).ready(function() {
    $('#form_sign_up').submit(function(){
         var data = $(this).serialize();
//          alert (data);
        $.ajax({
	        url  : 'assets/php/_register.php',
	        type : 'POST',
	        data:data,
	        
	        success: function() {
	                //display message back to user here
	                //$('#result-f').html(data);
			alert ('sucess!');
		    }
	    });
	      return false;
          });
});

/*-----------------Sign In------------------*/
/*
$(document).ready(function() {
    $('#form_sign_in').submit(function(){
         var data = $(this).serialize();
         alert (data);
        $.ajax({
	        url  : 'assets/php/_signin.php',
	        type : 'POST',
	        data:data,
	        success: function() {
	                //display message back to user here
	                //$('#result-f').html(data);
			alert ('sucess!');
		    }
	    });
	      return false;
          });
});
*/
/*--------------- /Sign In------------------*/

/*---------------Post Update----------------*/

$(document).ready(function() {
    $('#form_update_post').submit(function(){
         var data = $(this).serialize();
         alert (data);
        $.ajax({
	        url  : 'assets/php/_updatestatus.php',
	        type : 'POST',
	        data:data,
	        success: function() {
	                //display message back to user here
	                //$('#result-f').html(data);
			alert ('sucess!');
		    }
	    });
	      return false;
          });
});

/*------------ / Post Update -------------*/


/*-------------Create Troop---------------*/

$(document).ready(function() {
    $('#form_create_troop').submit(function(){
         var data = $(this).serialize();
         alert (data);
        $.ajax({
	        url  : 'search/artist.php',
	        type : 'POST',
	        data:data,
	        success: function() {
	                //display message back to user here
	                //$('#result-f').html(data);
			alert ('sucess!');
		    }
	    });
	      return false;
          });
});

/*----------- / Create Troop -------------*/


$(document).ready(function() {
 	$('#nav-main').addClass('wat');
	$('#faker').addClass('expand');
});
    