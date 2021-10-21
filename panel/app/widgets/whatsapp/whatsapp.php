<?php
return array(
	'title' => array(
		'text'   => 'WhatsApp Business',
		'link'   => 'pages/whatsapp/edit',
		'role' => 'button',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'whatsapp.html.php');
	}
);