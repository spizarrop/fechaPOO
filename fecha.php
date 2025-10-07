<?php

class Fecha
{

    private $mesesDias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    public function formatoFecha($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        $bisiesto = $this->esBisiesto($fecha);
        $dias = $this->calcularDias($fecha);
        $fechaFinal = $fechaDescompuesta[0] . '/' . $meses[$fechaDescompuesta[1] - 1] . '/' . $fechaDescompuesta[2];

        return 'La fecha es: '.$fechaFinal.'</br>'.$bisiesto.'</br>'.'El mes tiene: '.$dias.' días.';
    }

    private function esBisiesto($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        if ($fechaDescompuesta[2] % 4 == 0) {
            $this->mesesDias[1] = 29;
            return "Es un año bisiesto.";
        } else {
            $this->mesesDias[1] = 28;
            return "No es año bisiesto.";
        }
    }

    private function calcularDias($fecha)
    {
        $fechaDescompuesta = $this->descomponerFecha($fecha);

        return $this->mesesDias[$fechaDescompuesta[1] - 1];
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