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

        switch ($fechaDescompuesta[1]) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
            case 2:
                if ($fechaDescompuesta[2] % 4 == 0) {
                    return 29;
                } else {
                    return 28;
                }
            default:
                return;
        }
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