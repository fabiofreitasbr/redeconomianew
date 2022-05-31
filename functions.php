<?php
require_once 'inc/load.php';

/* Links */
$argVar = array(
	'radio' => 'http://www.redeconomia.com.br/player',
	'email' => 'https://webmail.exchange.locaweb.com.br/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.exchange.locaweb.com.br%2fowa%2f',
	'facebook' => 'https://pt-br.facebook.com/redeconomia',
	'instagram' => 'https://www.instagram.com/souredeconomia/',
	'youtube' => 'https://www.youtube.com/user/souredeconomia',
	'appstore' => 'https://itunes.apple.com/br/app/clube-redeconomia/id1458527719?mt=8',
	'googleplay' => 'https://play.google.com/store/apps/details?id=com.valedesconto.redeconomia2',
	'cartao' => 'https://meucartao.senff.com.br/redeconomia/bem-vindo',

	'quebracabeca' => 'http://redeconomia.com.br/download/quebra-cabeca-redeconomia.pdf',

	'inicio' => 2,
	'ofertas' => 11,
	'encarte' => 11,
	'encarteapp' => 11,
	'lamina' => 75,
	'sobre' => 7,
	'sac' => 17,
	'contato' => 17,
	'lojas' => 13,
	'trabalhe' => 15,
	'promocoes' => 19,
	'privacidade' => 3,
);
InfoVar::save($argVar);
