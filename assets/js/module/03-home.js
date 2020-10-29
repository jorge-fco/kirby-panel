var HOME = (function(home) {

	// Loader
	var $Body = $('.js-body');
	var _nameCookie = 'name';
	var $Loader = $('.js-loader');
	var $containerLoader = $('.js-loader-container');

	// Slider
	var $Slider = $('.js-home-slider');
	var $btnPrevSlider;
	var $btnNextSlider;

	home = {
		init: function(){
			home.Slider();
			home.Loader();
		},
		Slider: function(){
			// Init slider
			$Slider.flickity({
				cellAlign: 'left',
				contain: true,
				cellSelector: '.home__slider__item',

				// Navs
				draggable: false,
				prevNextButtons: false,
				pageDots: false,

				// Style
				autoPlay: false,
				selectedAttraction: 0.2,
				friction: 0.8
			});

			// Show component slider
		},
		Intro: function(){
			// Intro animations
		},
		Loader: function(){
			if (Cookies.get(_nameCookie)) {
				// Intro call animations
				home.Intro();
			} else {
				// Set Cookie
				//Cookies.set(_nameCookie, 'true');

				// Not scroll
				$Body.addClass("overflow");

				// Loader animations
				TweenMax.to($containerLoader, 0.3,{
					delay: 0.8,
					autoAlpha: 0
				});

				TweenMax.to($Loader, 0.5,{
					delay: 1.5,
					autoAlpha: 0,
					onComplete: function(){
						home.Intro();
						$Body.removeClass("");
					}
				});
			}
		}
	}

	return home;

}(HOME || {}));