$(window).load(function() {
	$('.tp-preload').fadeIn("slow");
	$('.tp-preload-pos').remove();
});

// Main Configuration of tpScript
$(document).ready(function() {
	$('.tp-header li > a:link').addClass('hvr-pop');
	$('.tp-blocks').addClass('hvr-pulse-shrink');

	// Init Method Function()
	// Basic Required Method
	tpSlider();
	tpBackTop();


	var counter = 1;
	// Toggle Nav on Click
    $('.tp-mobile-menu-toggle').click(function() { 
    	// Calling a function in case you want to expand upon this.        	        
	    tpToggleMenu();	
	    $('.tp-mobile-menu-wrapper').toggle("slide", {direction: 'left'}, 600);
    });

	/*$('.tp-blocks-description a').click(function() {
		$('html body').animate({
			scrollTop: $('#aboutme').offset().top
		}, 750);

	});*/

	/* tpSlider.js 
	Version 1.0 - Initial Build 
	This slider can be use for images or contents 
	---------------------------------------------
	*/
	var slideVar = "left";

	function tpSlider() {
		var count = parseInt($('.tp-slider-content').length);
		$('.tp-slider-content:first-child').show().addClass('tp-slide-current');
		var index = parseInt($('.tp-slider-content.tp-slide-current').index());
		// Hide except first child of slider content
		$('.tp-slider-content:not(.tp-slide-current').hide();
		// Add Slider Selector
		sliderSelector();
		var selected = 0;

		$('.tp-slider-next').click(function() {	
			slideVar = "right";	

			if(index + 1 < count) {
				index = index + 1;
				$('.tp-slider-content').removeClass('tp-slide-current');
				$('.tp-slider-content:eq('+index+')').addClass('tp-slide-current');
				// checkCurrentSlide
				checkCurrentSlider();

				selected = selected + 1;
				if(selected == index) {
					$('.tp-slider-selector-o').removeClass('selected');
					$('.tp-slider-selector-o:eq('+selected+')').addClass('selected');
				}
			}

			else if(index + 2 > count) {
				index = 0;
				$('.tp-slider-content').removeClass('tp-slide-current');
				$('.tp-slider-content:eq('+index+')').addClass('tp-slide-current');
				// checkCurrentSlide
				checkCurrentSlider();

				selected = 0;
				if(selected == index) {
					$('.tp-slider-selector-o').removeClass('selected');
					$('.tp-slider-selector-o:eq(0)').addClass('selected');
				}
			}
		});

		$('.tp-slider-prev').click(function() {
			slideVar = "left";
			if(index >= 1) {
				index = index - 1;

				$('.tp-slider-content').removeClass('tp-slide-current');
				$('.tp-slider-content:eq('+index+')').addClass('tp-slide-current');

				// checkCurrentSlide
				checkCurrentSlider();

				selected = selected - 1;
				if(selected == index) {
					$('.tp-slider-selector-o').removeClass('selected');
					$('.tp-slider-selector-o:eq('+selected+')').addClass('selected');
				}
			}

			else if(index == 0) {
				index = count - 1;

				$('.tp-slider-content').removeClass('tp-slide-current');
				$('.tp-slider-content:eq('+index+')').addClass('tp-slide-current');

				// checkCurrentSlide
				checkCurrentSlider();

				selected = count - 1;
				if(selected == index) {
					$('.tp-slider-selector-o').removeClass('selected');
					$('.tp-slider-selector-o:eq('+selected+')').addClass('selected');
				}
			}
		});

		function checkCurrentSlider() {	
			if($('.tp-slider-content').hasClass('tp-slide-current')) {			
				$('.tp-slider-content:not(.tp-slide-current').hide();
				$('.tp-slider-content.tp-slide-current').show("slide", {
		             direction: slideVar
		         }, 500);
			}
			else {
				return false;
			}
		}

		function sliderSelector() {
			var count = parseInt($('.tp-slider-content').length);
			var index = parseInt($('.tp-slider-content.tp-slide-current').index());

			$('.tp-slider-selector').empty();

			for(var i=0; i < count; i++) {
				$('.tp-slider-selector').append('<div id=selector-'+i+' class=tp-slider-selector-o></div>');		

				if(i == index) {
					$('.tp-slider-selector-o').addClass('selected');
				}
			}
		}
	}

	/* backTop.js
	Version 1.0 Initial Build
	Smooth Scrolling Back to Top of the page
	----------------------------------------
	*/
	function tpBackTop() {
		$(document).ready(function() {
			if($('#tp-backtop').length == 0) {
				var content = '<div id=tp-backtop class=hvr-pulse><span class="tp-icon fa-arrow-up"></span></div>';
				$('body').append(content);
				$('#tp-backtop').hide();
			}

			$('#tp-backtop').click(function() {
				$('html, body').animate({
		        	scrollTop: $('body').offset().top
		    	}, 800);
			});
		});
		$(window).scroll(function() {
			$this = $(this);
			
			if($this.scrollTop() > 200) {
				$('#tp-backtop').show("slide", {
					direction: "up"
				}, 200);
			}	

			else if($this.scrollTop() < 200) {
				$('#tp-backtop').hide("slide", {
					direction: "down"
				}, 100);
			}
		});
	}

	/* tpClock.js 
	Version 1.0 - Initial Build
	Timing event of clock
	----------------------------
	*/

	function tpClock() {
		var today = new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
		m = checkTime(m);
		s = checkTime(s);
		var res = '<h3 class=tp-clock-txt>'+ h+":"+m+":"+s+'</h3>';

		return res;	
	}

	function checkTime(i) {
	    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
	    return i;
	}

	$.fn.extend( {
		tpClock: function() {
			var $this = $(this);
			setInterval(function() {
				$this.empty();
				$this.append(tpClock());
			}, 1000);
		}
	});

	/* 
	** tpMobileMenu.js
	** Version 1.0 - Init Build
	** Mobile menu toggle
	*/
	function tpToggleMenu() {
	    $('.tp-preload').toggleClass('show-nav');
	}

});