<?php
return array(
	'title' => array(
		'text'   => 'Facebook Píxel',
		'link'   => 'pages/pixel/edit',
		'role' => 'button',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'facebook-pixel.html.php');
	}
);