<?php
class DatosPersona1
{
    /**
     * Recibe array con datos, retorna cadena de string con ellos
     * @param array $datos
     * @return string
     */
    public function datosPersonales($datos)
    {
        $edad = $datos['edad'];

        if ($edad >= 18) {
            $datos['mensajeEdad'] = "Es mayor de edad";
        } else {
            $datos['mensajeEdad'] = "Es menor de edad";
        }

        return $datos;
    }
}
