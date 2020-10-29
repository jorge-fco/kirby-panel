/*!

	📐 A P P —  J A V A S C R I P T

	We are the creative agency
	that your business deserves™.

	Plan a project // Work together — hello@avec.mx

*/
(function($){

	Pages = [
		'.js-home',
		'.js-contact'
	];

	APP = {
		init: function(){
			console.log('📐 A P P —  J A V A S C R I P T\nWe are the creative agency\nthat your business deserves™.\nPlan a project // Work together — hello@avec.mx');
			console.log('-----------------------------------------------');

			NAVIGATION.init();
			GENERAL.init();

			if($(Pages[0]).length){
				HOME.init();
				console.log('::: HOME :::');
			}

			if($(Pages[1]).length){
				CONTACT.init();
				console.log('::: CONTACT :::');
			}
		}
	};

	window.theme = APP;

	window.onload = function() {
		APP.init();
	};

})(jQuery);

//@prepros-prepend module/*.js
