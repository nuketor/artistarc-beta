//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(document).scrollTop() > 180) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
// 	$(".navbar-header").show();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
// 	$(".navbar-header").hide();
    }
});

$(document).ready(function() {
// 	$(".navbar-header").hide();
});
/*
        	$(window).scroll(function() {
			if ($(document).scrollTop() > 150) {
			$('.navbar').addClass('shrink');
			}
			else {
			$('.navbar').removeClass('shrink'); }
			});
*/


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
