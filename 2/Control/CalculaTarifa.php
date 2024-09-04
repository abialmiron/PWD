<?php
class CalculaTarifa
{
    /**
     * Recibe array con datos, retorna monto de tarifa
     * @param array $datos
     * @return string
     */
    public function calcularTarifa($datos)
    {
        $edad = $datos['edad'];
        $estudios = $datos['estudios'];

        $tarifa = 300;

        if ($estudios == "si" || $edad < 12) {
            $tarifa = 160;
            if ($edad >= 12) {
                $tarifa = 180;
            }
        }
        $mensaje = "Su tarifa es de $" . $tarifa;
        return $mensaje;
    }
}
