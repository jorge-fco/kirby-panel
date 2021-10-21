<?php
return array(
	'title' => array(
		'text'   => 'Google Analytics',
		'link'   => 'pages/analytics/edit',
		'role' => 'button',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'analytics.html.php');
	}
);