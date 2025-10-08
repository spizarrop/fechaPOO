<?php
require 'fecha.php';

$fecha = new Fecha();
$formato = $fecha->formatoFecha($_GET['fecha']);

echo "{$formato} </br>";
echo "{$fecha->bisiesto} </br>";
echo "El mes tiene {$fecha->dias} dias.";

?>