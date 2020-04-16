jQuery( document ).ready( function( $ ) {
	$( 'a[href^="#"]' ).on( 'click', function( e ) {
		e.preventDefault();

		var target = this.hash;
		var $trget = $( target );

		// desired distance adjustment
		var newTop = $trget.offset().top - 200;

		// Scroll and show hash
		$('html, body').animate ({
			scrollTop: newTop
		}, 500, 'swing', function() {
			window.location.hash = target;
		} );
	} );
} );
