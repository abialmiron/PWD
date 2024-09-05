<?php

class SubirJpgPng
{
    /**
     * Analiza si el archivo recibido es admitido. En caso de éxito, retorna dirección de la imagen,
     * caso contrario, retorna mensaje indicando error.
     * @param array $archivoCargado
     * @return mixed
     */
    function generarImagen($archivoCargado)
    {
        $archivoCargado = strtolower($archivoCargado['name']);

        //Genero condiciones para controlar que sea .jpg o .png
        $formatoJpg   = '.jpg';
        $formatoPng   = '.png';
        $esJpg = strpos($archivoCargado, $formatoJpg);
        $esPng = strpos($archivoCargado, $formatoPng);

        //Controlo formatos
        if ($esJpg === false && $esPng === false) {
            $imagen = "Ha ocurrido un error generando la imagen.";
        } else if (move_uploaded_file($_FILES['archivo']['tmp_name'], '../uploads/' . $archivoCargado)) {
            //Genero ubicación del archivo para buscarla en el directorio y retornarla
            $nombreArchivo = $archivoCargado;
            $dir = "../uploads/";
            $imagen = $dir . $nombreArchivo;
        }

        return $imagen;
    }
}
