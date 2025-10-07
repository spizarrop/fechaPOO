<?php

class Fecha
{

    public function formatoFecha($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        return $fechaDescompuesta[0] . '/' . $meses[$fechaDescompuesta[1] - 1] . '/' . $fechaDescompuesta[2];
    }

    public function esBisiesto($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        if ($fechaDescompuesta[2] % 4 == 0) {
            $resultado = "Es un año bisiesto.";
        } else {
            $resultado = "No es año bisiesto.";
        }

        return $resultado;
    }

    public function calcularDias($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        $mesesDias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if ($fechaDescompuesta[2] % 4 == 0) {
            $mesesDias[1] = 29;
        } else {
            $mesesDias[1] = 28;
        }

        return $mesesDias[$fechaDescompuesta[1] - 1];

    }

    private function descomponerFecha($fecha)
    {
        $dia = substr($fecha, 0, 2);
        $mes = substr($fecha, 3, 2);
        $anio = substr($fecha, 6, 2);

        $fechaDescompuesta = [$dia, $mes, $anio];
        return $fechaDescompuesta;
    }
}

?>