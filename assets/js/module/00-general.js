var GENERAL = (function(general) {

	var $Images = $('.bg-img');


	general = {
		init: function(){
			general.Images();
			console.log('::: GENERAL :::');
		},
		Images: function(){
			$Images.imgLiquid();
		}
	}

	return general;

}(GENERAL || {}));
