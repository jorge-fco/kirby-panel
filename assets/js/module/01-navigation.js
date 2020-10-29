var NAVIGATION = (function(navigation) {

	var $Page = $('.js-page');
	var _delay = 0.3
	var _time = 0.5;

	var $Menu = $('.js-menu');
	var $MenuContainer = $('.js-menu-container');
	var $MenuOpen = $('.js-menu-open');
	var $MenuClose = $('.js-menu-close');

	navigation = {
		init: function(){
			navigation.Page();
			navigation.Menu();
			console.log('::: NAVIGATION :::');
		},
		Page: function(){
			TweenMax.to($Page, _time,{
				delay: _delay,
				autoAlpha: 1,
				ease: Power4.easeInOut
			});
		},
		Menu: function(){

			// Open menu Mobile
			$MenuOpen.click(function(event) {
				event.preventDefault();
				MenuOpen();
			});

			// Close menu Mobile
			$MenuClose.click(function(event) {
				event.preventDefault();
				MenuClose();
			});

			function MenuOpen(){

			}

			function MenuClose(){
				TweenMax.to($MenuContainer, 0.25,{
					delay: 0.25,
					autoAlpha: 0,
					ease: Expo.easeInOut
				});
				TweenMax.to($Menu, 0.5,{
					delay: 0.5,
					autoAlpha: 0,
					ease: Expo.easeInOut
				});
			}

			document.onkeydown = function(evt) {
				evt = evt || window.event;

				//= Click key [ E S C ]
				if (evt.keyCode == 27) {
					MenuClose();
				}
			};
		}
	}

	return navigation;

}(NAVIGATION || {}));