<?php
$lineas = file("balanza.txt");
$lineas = array_reverse($lineas);
$datos = '';
if ($lineas) {
    $datos['peso'] = $lineas[0];
} else {
    $datos['peso']  = 'Sin Datos';
}

echo json_encode($datos);
?>