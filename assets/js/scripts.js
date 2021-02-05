//jQuery no-conflict mode!
(function( $ ) {




})( jQuery );
(function( $ ) {
	$( document ).ready(function() {
		$('.anibal--team--img').waypoint(function() {
			$('.anibal--team--img').find('img').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.anibal--mission').waypoint(function() {
			$('.anibal--mission').addClass('animated fadeInRight');
		}, {
			offset: '100%'
		});
		$('.parallax--text').waypoint(function() {
			$('.parallax--text').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
		$('.customers--saying').waypoint(function() {
			$('.customers--saying').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.testimonial--plugin').waypoint(function() {
			$('.testimonial--plugin').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
		$('.helpful--links').waypoint(function() {
			$('.helpful--links').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.featured--listings').waypoint(function() {
			$('.featured--listings').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
	});
})( jQuery );
