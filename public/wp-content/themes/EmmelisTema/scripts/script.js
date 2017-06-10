$(document).ready(function() {
	var content = $('.content')
	var chosen = 1

	// var movementStrength = 25,
	// height = movementStrength / $(window).height(),
	// width = movementStrength / $(window).width(),
	var headerHeight = $('.header-bg').height()
	// scrolling = false,
	// nav = $('.header-menu'),
	// stickyNavTop = nav.offset().top

	// $('.header-bg').mousemove(function(e){
	// 	if(!scrolling) {
	// 		var pageX = e.pageX - ($(window).width() / 2),
	//         pageY = e.pageY - ($(window).height() / 2),
	//         newvalueX = width * pageX * -1 - 25,
	//         newvalueY = height * pageY * -1 - 50;

	//         $('.header-bg').css('background-position', newvalueX+'px     '+newvalueY+'px');
	// 	}
	// });

	window.onscroll = function() {
		var scroll = window.scrollY,
		stickyNavTop = $('.header-bg').height()

		if (scroll < $('.header-bg').height()) {
			$('.header-bg').css({
				'top': scroll / 32 + '%'
			})
		}

		if ($(window).scrollTop() > stickyNavTop) {
  			$('.header-menu').addClass('sticktotop')
  		} else {
  			$('.header-menu').removeClass('sticktotop')
  		}
	}

	var images =  [
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/subaru06.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/green.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/blacksubaru.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/bluesubaru.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/DSC_0126.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/evoulution.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/quantic.jpg',
			category: 'Cars'
		},
			{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/redcar.jpg',
			category: 'Cars'
		},
		{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/1.jpg',
			category: 'Animals'
		},
		{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/191.jpg',
			category: 'Animals'
		},

{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/222.jpg',
			category: 'Animals'
		},

{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/261.jpg',
			category: 'Animals'
		},
{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/Bamse.jpg',
			category: 'Animals'
		},

{
			url: '../wp-content/themes/EmmelisTema/scripts/../images/anka.jpg',
			category: 'Animals'
		},

		{
			url: 'http://daypic.ru/pars/20130215/20130215_1532/12.jpg',
			category: 'Nature'
		},
		{
			url: 'https://i.imgur.com/vcnVaVV.png',
			category: 'Other'
		}			
	]

	var info = [{
			category: 'Info'
		}]

	/* Ladda in alla bilder */
    for (var i = 0; i < images.length; i++) {
		$('.images').append(`<img src='${images[i].url}' />`)
	}

	$('.categories button').click(function(e) {

		switch( $(e.target).html() ) { // Vad som ska kollas

		    case 'Bilar': // Om bilar

		        $('.images').empty() // Töm diven
		        $('.info').css('display', 'none')

				/* Gå igenom bilderna */
				for (var i = 0; i < images.length; i++) {

					/* Visa endast om katagorin är bilar */
					if (images[i].category === 'Cars')
						$('.images').append(`<img src='${images[i].url}' />`)
				}
		        break;

		    case 'Djur':
		        $('.images').empty() // Töm diven
		        $('.info').css('display', 'none')

				for (var i = 0; i < images.length; i++) {
					if (images[i].category === 'Animals')
						$('.images').append(`<img src='${images[i].url}' />`)
				}
		        break;

		    case 'Natur':
		    	$('.images').empty() // Töm diven
		    	$('.info').css('display', 'none')

				for (var i = 0; i < images.length; i++) {
					if (images[i].category === 'Nature')
						$('.images').append(`<img src='${images[i].url}' />`)
				}
		    	break;

		    case 'Övrigt':
		    	$('.images').empty() // Töm diven
		    	$('.info').css('display', 'none')

				for (var i = 0; i < images.length; i++) {
					if (images[i].category === 'Other')
						$('.images').append(`<img src='${images[i].url}' />`)
				}
		    	break;

		    case 'Info':
		    	$('.images').empty() // Töm diven
		    	$('.info').css('display', 'block')
				
		    	break;
		    	
		    default: // Alla
		    	$('.images').empty() // Töm diven
		    	$('.info').css('display', 'none')

		    	/* Ladda in alla bilder */
		        for (var i = 0; i < images.length; i++) {
					$('.images').append(`<img src='${images[i].url}' />`)
				}
		}
	})

$.get('http://www.wordpress.memlisen.se/wp-json/wp/v2/posts', (data) => {
	for (var i = 0; i < data.length; i++) {
		if (data[i].categories == 5 ) {
			$('.post-container').append(
				`<div class="portfolio-post">
					<h1>${data[i].title.rendered}</h1>
					${data[i].content.rendered}
				</div>`)
			console.log(data[i])
		}
		
	}
})

})