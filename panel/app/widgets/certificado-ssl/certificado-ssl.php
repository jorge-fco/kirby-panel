<?php
return array(
	'title' => array(
		'text'   => 'Certificado SSL',
		'link'   => 'https://mx.godaddy.com/web-security/ssl-certificate',
		'target' => '_blank',
	),
	'html'  => function() {
		return tpl::load(__DIR__ . DS . 'certificado-ssl.html.php');
	}
);