jQuery(document).ready(function($){

	/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

		* ------- Smooth scroll to hash ------- *

	-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

	function goToHash(event) {
		// On-page links
		if (
		  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname
		) {
		  // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  // Does a scroll target exist?
		  if (target.length) {
		    // Only prevent default if animation is actually gonna happen
		    event.preventDefault();
		    $('html, body').animate({
		      scrollTop: target.offset().top
		    }, 1000, function() {
		      // Callback after animation
		      // Must change focus!
		      var $target = $(target);
		      $target.focus();
		      if ($target.is(":focus")) { // Checking if the target was focused
		        return false;
		      } else {
		        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		        $target.focus(); // Set focus again
		      }
		    });
		  }
		}
	}

	// Select all links with hashes
	$(document).on('click', 'a[href*="#"]:not([href="#"]):not([href="#0"])', goToHash);


	/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

	    * ------- Prevent moving when clicking # ------- *

	-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

	$(document).on('click', 'a[href="#"]', function(e) {

		e.preventDefault();

	});



});