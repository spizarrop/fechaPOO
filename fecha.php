<?php

class Fecha
{

    private $mesesDias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    private $dias;

    public function formatoFecha($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        return $fechaDescompuesta[0] . '/' . $meses[$fechaDescompuesta[1] - 1] . '/' . $fechaDescompuesta[2];
    }

    private function esBisiesto($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        if ($fechaDescompuesta[2] % 4 == 0) {
            $mesesDias[1] = 29;
        } else {
            $mesesDias[1] = 28;
        }
    }

    private function calcularDias($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        $dias = $this->mesesDias[$fechaDescompuesta[1] - 1];
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