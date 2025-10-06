<?php
require 'fecha.php';

$fecha = new Fecha();
$formato = $fecha->formatoFecha($_GET['fecha']);
$bisiesto = $fecha->esBisiesto($_GET['fecha']);
$diasMes = $fecha->calcularDias($_GET['fecha']);


echo "La fecha es: " . $formato . "</br>";
echo $bisiesto . "</br>";
echo "El mes tiene: " . $diasMes . " dias.";

?>