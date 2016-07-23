$(document).ready(function() {


  /* SCROLL TO CALL TO ACTION SECTION WHEN CLICKED*/

    $('.js--scroll-to-plans').click(function() {

        $('html, body').animate({scrollTop: $('#call_to_action').offset().top}, 1000);

    });

  /* Scroll to features when tell me more button is pressed */

    $('.js--scroll-to-get-food-fast').click(function () {

        $('html, body').animate({scrollTop: $('#get_food_fast').offset().top}, 500);

    });


    /* Navigation menu scroll from css-tricks.com (Smooth Scrolling) */

    $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
      }
    }
  });
});

	/*Animate on scroll css (https://daneden.github.io/animate.css/) */

	$('.js--wp-1').waypoint(function(direction) {

		$('.js--wp-1').addClass('animated fadeIn');

	}, {

		offset: '48%'
	});

	/*Animate iPhone on scroll css (https://daneden.github.io/animate.css/) */

	$('.js--wp-2').waypoint(function(direction) {

		$('.js--wp-2').addClass('animated fadeInUp')

	}, {

		offset: '80%'
	});

	/*Animate on scroll fadeIn cities css (https://daneden.github.io/animate.css/) */

	$('.js--wp-3').waypoint(function(direction) {

		$('.js--wp-3').addClass('animated fadeIn')
	}, {

		offset: '80%'
	});

	/*Animate on scroll pulse premium plan css (https://daneden.github.io/animate.css/) */

	$('.js--wp-4').waypoint(function(direction) {

		$('.js--wp-4').addClass('animated pulse')
	}, {

		offset: '48%'
	});

	/*Mobil Navigation */

	$('.js--mobile-nav').click(function () {

		var nav = $('.js--main-nav');
		var icon = $('.js--mobile-nav i');

		nav.slideToggle(200);

		if (icon.hasClass('ion-navicon-round')) {

			icon.removeClass('ion-navicon-round');
			icon.addClass('ion-close-round');


		} else {

			icon.removeClass('ion-close-round');
			icon.addClass('ion-navicon-round');

		}


	});

$(function() {
	//cached th window object
	var $window = $(window);

	/*The parallax background effect
	http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	*/
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); //assigning the object
		$($window).scroll(function(){
//			scroll the background at var speed
//			the ypos is negative because of scrolling up

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
//			Put together final background position
			var coords = '50% '+ yPos + 'px';
//			move the background
			$bgobj.css({backgroundPosition: coords });
		}); //End the scroll
	});
});

});
