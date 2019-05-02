( function( $ ) {
	$( '.owl-cars' ).owlCarousel({
		loop: true,
		margin: 5,
		nav: false,
		dots: true,
		navText: [
			'<i class=\'fa fa-chevron-left\'></i>',
			'<i class=\'fa fa-chevron-right\'></i>'
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	});

	$( '.owl-concesionarios' ).owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		dots: false,
		navText: [
			'<i class=\'fa fa-chevron-left\'></i>',
			'<i class=\'fa fa-chevron-right\'></i>'
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	});
}( jQuery ) );
