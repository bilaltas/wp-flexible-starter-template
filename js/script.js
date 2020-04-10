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



	/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

	    * ------- Popups ------- *

	-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

	$(document).on('click', '[data-popup]', function() {

		var popupID = $(this).attr('data-popup');

		// Disable scrolling
		$('body').addClass('no-scroll');

		// Close all popups first
		$('.popup').removeClass('active');

		// Open the selected popup
		$('#' + popupID).addClass('active');

	});

	$(document).on('click', '[close-popup]', function() {

		// Close all popups
		$('.popup').removeClass('active');

		// Enable scrolling
		$('body').removeClass('no-scroll');

	});



	/*--*--*--*--*--*--*--*--*--*--*-*--*--*--*--*--*--*--*--*

	    * -------  Video Player  ------- *

	-*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

	function stopVideo(video) {

		var videoElement = $(video);

		videoElement.prop('muted', true);
		video.currentTime = 0;
		video.play();

	}

	function playVideo(video) {

		var videoElement = $(video);
		var wrapper = videoElement.parents('.video-wrapper');


		// Pause other videos
		$(".video-wrapper.playing video").each(function() {

			pauseVideo(this);

		});

		if ( videoElement.prop('muted') ) {
			video.currentTime = 0;
			wrapper.addClass('playing');
		}

		video.play();
		videoElement.prop('muted', false);

	}

	function pauseVideo(video) {

		var videoElement = $(video);
		video.pause();

	}


	// When playing
	$('.video-wrapper video').on('play', function() {

		var video = this;
		var videoElement = $(video);
		var wrapper = videoElement.parents('.video-wrapper');

		if ( videoElement.prop('muted') ) video.currentTime = 0;
		if ( !videoElement.prop('muted') ) wrapper.addClass('playing');

	}).on('pause', function() {

		var video = this;
		var videoElement = $(video);
		var wrapper = videoElement.parents('.video-wrapper');

		wrapper.removeClass('playing');

	}).on('ended', function() {

		var video = this;

		stopVideo(video);

	}).on('click', function(e) {

		var video = this;
		var videoElement = $(video);
		var wrapper = videoElement.parents('.video-wrapper');

		if ( wrapper.hasClass('bg-video') ) {
			e.preventDefault();
			return false;
		}

		if ( !video.paused && !videoElement.prop('muted') ) pauseVideo(video);
		else if ( video.paused && !videoElement.prop('muted') ) playVideo(video);
		else if ( !video.paused && videoElement.prop('muted') ) playVideo(video);

	}).each(function() {

		var video = this;
		var videoElement = $(video);
		var wrapper = videoElement.parents('.video-wrapper');

		var playButton = wrapper.find('.play-button');
		var pauseButton = wrapper.find('.pause-button');
		var stopButton = wrapper.find('.stop-button');
		var restartButton = wrapper.find('.restart-button');

		playButton.click(function(e) {

			playVideo(video);
			e.preventDefault();

		});

		pauseButton.click(function(e) {

			pauseVideo(video);
			e.preventDefault();

		});

		stopButton.click(function(e) {

			stopVideo(video);
			e.preventDefault();

		});

		restartButton.click(function(e) {

			stopVideo(video);
			playVideo(video);
			e.preventDefault();

		});

	});



});