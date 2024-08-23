<?php
class CuentaHoras
{
    /**
     * Recibe arreglo con horas, retorna la suma de todas ellas en forma de mensaje
     * @param array $datos
     * @return string
     */
    public function sumarHoras($datos)
    {
        $total = 0;
        foreach ($datos as $horas) {
            $total += $horas;
        }
        $mensaje = "Cantidad total de horas en la cursada de Programación Web: " . $total;

        return $mensaje;
    }
}
