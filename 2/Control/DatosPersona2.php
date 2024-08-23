<?php
class DatosPersona2
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

        //Verifico si el array con deportes no está vacío
        if (isset($datos['deporte'])) {
            $colDeportes = $datos['deporte'];
            $cadena = implode(", ", $colDeportes);
            $datos['deporte'] = "Practica los siguientes deportes: " . $cadena;
        } else {
            $datos['deporte'] = "No practica ningún deporte";
        }

        return $datos;
    }
}
