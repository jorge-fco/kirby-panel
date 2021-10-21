<?php
return array(
	'title' => array(
		'text'   => 'Messenger',
		'link'   => 'pages/messenger/edit',
		'role' => 'button',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'messenger.html.php');
	}
);