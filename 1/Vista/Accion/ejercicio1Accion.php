<?php
    $datos = data_submitted();
    $num = $datos['numero'];
    if($num > 0){
        $mensaje = "El número es positivo.";
    } else {
            if($num  == 0){
                $mensaje = "El número es cero.";
            } else {
                $mensaje = "El número es negativo.";
            }
        }
?>
