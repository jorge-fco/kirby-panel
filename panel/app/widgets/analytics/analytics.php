<?php
return array(
	'title' => array(
		'text'   => 'Google Analytics',
		'link'   => 'https://analytics.google.com/',
		'target' => '_blank',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'analytics.html.php');
	}
);