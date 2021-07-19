$(document).ready (function() {

	$('#open-mobile-menu').on('click', function() {

		$('div.slide-out').show().animate({width:"300px"},200);
		$('div.slide-out div.container').fadeIn(700);
		$('div.faded-layer').fadeIn(100);
		$('#open-mobile-menu').hide();
		$('#close-mobile-menu').fadeIn(100);

	});

	$('#close-mobile-menu').click(function() {

		$('div.slide-out').animate({width:"0px"},200);
		$('div.slide-out div.container').fadeOut(100);
		$('div.faded-layer').fadeOut(100);
		$('#close-mobile-menu').fadeOut(100);
		$('#open-mobile-menu').fadeIn(100);
		$(this).fadeOut(200);

	});

	$('div.faded-layer').click(function() {

			$('div.slide-out').animate({width:"0px"},200);
			$('div.slide-out div.container').fadeOut(100);
			$('div.faded-layer').fadeOut(100);
			$('#close-mobile-menu').fadeOut(100);
			$('#open-mobile-menu').fadeIn(100);
			$(this).fadeOut(200);

	});

});
