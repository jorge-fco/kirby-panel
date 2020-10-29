var CONTACT = (function(contact) {

	var _lat = 20.6676534;
	var _lng = -103.3524626;
	var _zoom = 15;
	var _image;
	var _title = 'Application';
	var API_KEY = "AIzaSyCav4aP8_L4hI0YYUDgbXuRB6obsSkUqDM";

	// Form
	var $Form = $('.js-contact-form');
	var $FormMessage = $('.js-form-message');
	var $Name = $('.js-input-name');
	var _Name = false;

	var $Email = $('.js-input-email');
	var _Email = false;

	var $Phone = $('.js-input-phone');
	var _Phone = false;

	var $Message = $('.js-input-message');

	contact = {
		init: function(){
			contact.Form();
			contact.GoogleMaps();
		},
		Form: function(){
			$Form.submit(function(event) {
				event.preventDefault();
				var _url = $(this).attr('action');
				var _method = $(this).attr('method');
				var _data = $(this).serialize();

				// NAME
				if($Name.val()!=''){
					// Remove class
					$Name.removeClass('input-error');

					// Text remove
					$Name.siblings('.input-message').text('');

					// Hidden text
					TweenMax.to($Name.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 0,
						ease: Expo.easeInOut
					});

					// Boolean
					_Name = true;
				}else{
					// Add Text
					$Name.siblings('.input-message').text('Error!');

					// Input error
					$Name.addClass('input-error');

					// Show text
					TweenMax.to($Name.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 1,
						ease: Expo.easeInOut
					});

					// Boolean
					_Name = false;
				}

				// EMAIL
				if($Email.val()!=''){
					// Remove class
					$Email.removeClass('input-error');

					// Text remove
					$Email.siblings('.input-message').text('');

					// Hidden text
					TweenMax.to($Email.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 0,
						ease: Expo.easeInOut
					});

					// Boolean
					_Email = true;
				}else{
					// Add Text
					$Email.siblings('.input-message').text('Error!');

					// Input error
					$Email.addClass('input-error');

					// Show text
					TweenMax.to($Email.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 1,
						ease: Expo.easeInOut
					});

					// Boolean
					_Email = false;
				}

				// PHONE
				if($Phone.val()!=''){
					// Remove class
					$Phone.removeClass('input-error');

					// Text remove
					$Phone.siblings('.input-message').text('');

					// Hidden text
					TweenMax.to($Phone.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 0,
						ease: Expo.easeInOut
					});

					// Boolean
					_Phone = true;
				}else{
					// Add Text
					$Phone.siblings('.input-message').text('Error!');

					// Input error
					$Phone.addClass('input-error');

					// Show text
					TweenMax.to($Phone.siblings('.input-message'), 0.3,{
						delay: 0,
						autoAlpha: 1,
						ease: Expo.easeInOut
					});

					// Boolean
					_Phone = false;
				}

				if (_Name==true && _Email==true) {
					$.ajax({
						url: _url,
						data: _data,
						type: _method,
						success: function(response){
							$FormMessage.addClass('is-success');
							$FormMessage.text('Mensaje enviado correctamente.');
							TweenMax.to($FormMessage, 0.3,{
								delay: 0,
								autoAlpha:1,
								ease: Expo.easeInOut
							});
							$Form.each (function(){this.reset();});
						},
						error: function(response){
							$FormMessage.addClass('is-error');
							$FormMessage.text('Hubo algún error vuelve a intentarlo nuevamente.');
							TweenMax.to($FormMessage, 0.3,{
								delay: 0,
								autoAlpha:1,
								ease: Expo.easeInOut
							});
						}
					});
				}
			});


		},
		GoogleMaps: function(){
			// M A P
			var Mapa = new google.maps.Map(document.getElementById('maps'), {
				center: {lat: _lat, lng: _lng},
				zoom: _zoom,
				draggable: false,
				//styles: _style
			});

			// M A R K E R
			var Marker = new google.maps.Marker({
				position: new google.maps.LatLng(_lat, _lng),
				map: Mapa,
				title: _title,
				//icon: ''
			});
		}
	}

	return contact;

}(CONTACT || {}));