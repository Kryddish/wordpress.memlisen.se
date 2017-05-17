$(document).ready(function() {
	var content = $('.content');
var chosen = 1;

	var movementStrength = 25,
	height = movementStrength / $(window).height(),
	width = movementStrength / $(window).width(),
	headerHeight = $('.header-bg').height(),
	scrolling = false,
	nav = $(".header-menu"),
	stickyNavTop = nav.offset().top;

	// $(".header-bg").mousemove(function(e){
	// 	if(!scrolling) {
	// 		var pageX = e.pageX - ($(window).width() / 2),
	//         pageY = e.pageY - ($(window).height() / 2),
	//         newvalueX = width * pageX * -1 - 25,
	//         newvalueY = height * pageY * -1 - 50;

	//         $('.header-bg').css("background-position", newvalueX+"px     "+newvalueY+"px");
	// 	}
	// });

	window.onscroll = function() {
		var scroll = window.scrollY;
		stickyNavTop = $('.header-bg').height();

		if (scroll < $('.header-bg').height()) {
			$('.header-bg').css({
				'background-position-y' : scroll / 10 + '%',
				'height' : headerHeight - scroll + 'px'
			});
		}

		if ($(window).scrollTop() > stickyNavTop) {
  			$(".header-menu").addClass("sticktotop");
  		} else {
  			$(".header-menu").removeClass("sticktotop");
  		}
	}

	

});