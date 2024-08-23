<?php
class PositividadNumero
{
    //CONSTRUCTOR
    public function __construct() {}

    /**
     * Recibe arreglo con un número, retorna si es positivo, negativo o igual a 0
     * @param array $dato
     * @return string
     */
    public function clasificarNumero($dato)
    {
        $numero = $dato['numero'];

        if ($numero > 0) {
            $tipoNumero = "El número es positivo";
        } elseif ($numero < 0) {
            $tipoNumero = "El número es negativo";
        } else {
            $tipoNumero = "El número es cero";
        }

        return $tipoNumero;
    }
}
