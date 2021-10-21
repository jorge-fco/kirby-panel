<?php
return array(
	'title' => array(
		'text'   => 'Facebook Píxel',
		'link'   => 'https://business.facebook.com/',
		'target' => '_blank',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'facebook-pixel.html.php');
	}
);