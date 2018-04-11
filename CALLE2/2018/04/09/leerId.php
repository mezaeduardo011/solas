<?php
$proc = isset($_GET['proc'])  ? $_GET['proc'] : 'python3';
$cmd = 'ps axf | grep ' . $proc . ' | grep -v grep | awk \'{print $1}\'';
exec($cmd, $lineas);
$lineas = array_reverse($lineas);
$datos = [];
$datos['id'] = 0;
foreach($lineas as $l){
	$datos['id'] = $l;
}
echo json_encode($datos);
?>
