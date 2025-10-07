<?php
require 'fecha.php';

$fecha = new Fecha();
$formato = $fecha->formatoFecha($_GET['fecha']);

echo $formato;

?>