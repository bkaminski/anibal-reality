(function( $ ) {
	$( document ).ready(function() {
		$('.logo-img').waypoint(function() {
			$('.logo-img').addClass('animated fadeIn');
		}, {
			duration: '4000'
		});
		
		$('.anibal--team--img').waypoint(function() {
			$('.anibal--team--img').find('img').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.anibal--mission').waypoint(function() {
			$('.anibal--mission').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});



	});

})( jQuery );
