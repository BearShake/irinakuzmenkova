<?php
/**
 * Created by PhpStorm.
 * User: BearShake
 * Date: 28.03.2018
 * Time: 17:58
 */

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$html = curl_exec($ch);
curl_close($ch);
*/


function getContent($url ){

	$login = '51Dapocelujonoks';
	$pass = 'Samsung56666228';
	$cookie = 'cookie.dat'; //nav izm.
	$post = array('username' => $login,
	              'password' => $pass,
	);
$c = curl_init();
$url_for = $url;
curl_setopt($c, CURLOPT_HEADER, 1);
curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($c, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($c, CURLOPT_URL, $url_for);
curl_setopt($c, CURLOPT_POSTREDIR, 3);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($c, CURLOPT_POSTFIELDS, $post);
$content = curl_exec($c);
curl_close($c);

return $content;
}


//PARSE func return parsed content
function parse_data(){
	$url = 'https://www.estudijas.rvt.lv/login/index.php';
	//
	//PARSING
	//
	echo getContent($url);
}
