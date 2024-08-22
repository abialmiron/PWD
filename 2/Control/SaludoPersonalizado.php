<?php
class SaludoPersonalizado
{
    /**
     * Recibe array con datos personales, retorna string con saludo
     * @param array $datos
     * @return string
     */
    public function crearSaludo($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

        return $respuesta;
    }
}
