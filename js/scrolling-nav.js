//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
	$('#bs-example-navbar-collapse-1').removeClass("shrink");
	$('#nav-main').removeClass('wat');
	$('#faker').removeClass('expand');
// 	$(".navbar-header").show();
// 	$("#header2").hide();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
	$('#bs-example-navbar-collapse-1').addClass("shrink");
	$('#nav-main').addClass('wat');
	$('#faker').addClass('expand');
// 	$(".navbar-header").hide();
// 	$("#header2").show();
    }
});

$(document).ready(function() {
 	$('#nav-main').addClass('wat');
	$('#faker').addClass('expand');
});
/*
        	$(window).scroll(function() {
			if ($(document).scrollTop() > 50) {
			$('#header2').addClass("shrink");
			$('#bs-example-navbar-collapse-1').removeClass("shrink");
			$('#header-logo').removeClass("shrink");
			}
			else {
			$('#header2').removeClass("shrink");
			$('#bs-example-navbar-collapse-1').addClass("shrink");
			$('#header-logo').addClass("shrink");
			}
			});*/


$(document).ready(function(){
    $('#commnt-box1').click(function(){
//         $(this).parent().find('.collapse').fadeToggle(); 
	alert('wtf');
    });
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
