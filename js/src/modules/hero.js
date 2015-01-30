app.herogallery = (function($){
	'use strict';

	function owlgallery() {
		// The hero gallery
		var herogallery = $('.gallery.gallery-hero');
		herogallery.owlCarousel({
			navigation : false, // Hide next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			items : 1,
			itemsDesktop : false,
			itemsDesktopSmall : false,
			itemsTablet: false,
			itemsMobile : false,
			autoHeight: false
		});
	}

	/* Document ready
	/* + + + + + + + + + + + + + + + + + + + + + + + + + + + */

	$(document).on('ready pjax:end', function() {
		owlgallery();
	});


})(jQuery);
