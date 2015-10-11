$('#login-nav').submit(function()
{
    $.ajax({
        url: "/srv/http/artistarc/beta/php/login.php",
        type:'POST',
        data:
        {
            PersonID: user_name,
            Address: user_pass
        },
        success: function(msg)
        {
            alert('Email Sent');
        }               
    });
});

