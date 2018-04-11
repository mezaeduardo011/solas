<?php
$lineas = file("log.txt");
$lineas = array_reverse($lineas);
$datos = [];
$datos['codigo'] = '';
if ($lineas) {
	$cant = count($lineas);
	for($i = 0; $i <= $cant; $i++){
		$linea = $lineas[$i];
        if($datos['codigo'] == ''){
        	if(strpos($linea, "Codigo Leido") !== false){
        		$datos['codigo'] = $linea;
        		$i = $cant + 1;
        	}
        }
	}
} else {
    $datos['codigo'] = 'Sin Datos';
}

echo json_encode($datos);
?>