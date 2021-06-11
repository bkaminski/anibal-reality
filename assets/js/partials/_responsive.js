(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 768) {
			$('#rick').width(150);
			$('#jeff').width(150);
			$('#andrea').width(150);
			$('.team').addClass('text-center');
		};
		if ($window.width() >= 768) {
			$('#rick').width(768);
			$('#jeff').width(768);
			$('#andrea').width(200);
			$('.team').removeClass('text-center');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );