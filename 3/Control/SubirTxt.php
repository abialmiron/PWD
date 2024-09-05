<?php
class SubirTxt
{
    /**
     * Analiza si el archivo ingresado corresponde a un archivo .txt,
     * retorna booleano
     * @param string $archivoCargado
     * @return boolean
     */
    function controlarFormato($archivoCargado)
    {
        $archivoCargado = strtolower($archivoCargado['archivo']['name']);

        $formato   = '.txt';
        $pudo = strpos($archivoCargado, $formato);

        //Si es .txt, el archivo se subirá al directorio temporal indicado
        if ($pudo === false) {
            $pudo = false;
        } else if (move_uploaded_file($_FILES['archivo']['tmp_name'], '../uploads/' . $archivoCargado)) {
            $pudo = true;
        }
        return $pudo;
    }

    /**
     * Se encarga de subir el archivo al directorio temporal en caso de ser exitosa la carga, y notifica.
     * En caso de fallar, retornará un mensaje indicando el motivo.
     * @param string $archivoCargado
     * @return array
     */
    public function subir($archivoCargado)
    {
        $formato = $this->controlarFormato($archivoCargado);
        $archivo = "";

        if ($formato) {
            //Se convierte el contenido del archivo en un textarea
            $archivo = file_get_contents('../uploads/' . $archivoCargado['archivo']['name']);
            $mensaje = $archivo;
            $pudo = "si";
        } else {
            $mensaje = "Solo se permiten archivos txt.";
            $pudo = "no";
        }

        $salida = ['pudo' => $pudo, 'mensaje' => $mensaje];
        return $salida;
    }

    /**
     * 
     * 
     */
    public function mostrarMensaje() {}
}
