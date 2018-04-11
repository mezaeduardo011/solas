<?php
exec('top -n 1 -b | grep python3', $lineas);
foreach($lineas as $linea){
	echo $linea."\n<br \>";
}
?>

