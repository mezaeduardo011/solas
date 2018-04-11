<?php
$ip = $_GET['ip'] ?? 'www.google.com';
$cmd = 'ping '.$ip;
exec($cmd, $lineas);
$lineas = array_reverse($lineas);
$tiempo = [];
$tiempo['ms'] = 0;
foreach($lineas as $l){
	preg_match("/time[=<]\d+ms/", $l, $datos);
	if(count($datos) > 0){
		preg_match("/\d+/", $datos[0], $ms);
		$tiempo['ms'] = $ms[0];
	}	
}
echo json_encode($tiempo);
?>