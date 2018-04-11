<?php
$calle = isset($_GET['calle']) ? $_GET['calle'] : '' ;
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '' ;
$ano = isset($_GET['ano']) ? $_GET['ano'] : date('Y');
$mes = isset($_GET['mes']) ? $_GET['mes'] : date('m');
$dia = isset($_GET['dia']) ? $_GET['dia'] : date('d');
$cant = isset($_GET['cant']) ? $_GET['cant'] : '10' ;
switch($tipo){
	case 'b':
		$tipo = 'balanza';
		break;
	case 'l':
		$tipo = 'log';
		break;
}

$log = '/home/solas/'.$calle.'/'.$ano.'/'.$mes.'/'.$dia.'/'.$tipo.'.txt';
//echo $log;
$cmd = 'tail -n '.$cant.' '.$log;
//echo $cmd;
exec($cmd, $lineas);
$lineas = array_reverse($lineas);
foreach($lineas as $l){
	#$f = "/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}\. /";
	#$l = preg_replace($f,'',$l);
	echo $l."<br />\n";
}
?>

