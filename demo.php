<?php
//ver1.0
	

$url = 'http://dev.whiteholic.net/torrent.json?q=ubuntu';

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

print_r(json_decode($result));



?>	
