<?php

class MostrarDatos
{
    /**
     * Retorrna string anunciando una película
     * @return string
     */
    public function mensaje()
    {
        $mensaje = "<h1>La pelicula introducida es</h1>";
        return $mensaje;
    }

    /**
     * Recibe array con datos de una película, retorna cadena de string
     * con datos de la misma
     * @param array $datos
     * @return string
     */
    public function generarCartelera($datos)
    {
        $titulo = $datos['titulo'];
        $actores = $datos['actores'];
        $director = $datos['director'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos["anio"];
        $nacionalidad = $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion = $datos['duracion'];
        $restriccion = $datos['edad'];
        $sinopsis = $datos['sinopsis'];

        $pelicula = "
        <link rel='stylesheet' href='../estructura/css/bootstrap-5.3.3-dist/css/bootstrap.min.css'>
        <div class='container mt-4'>
            <div class='card p-4' style='background-color: #D8F1CF'>
                <button type='reset' class='btn-close position-absolute top-0 end-0' aria-label='Close'></button>
                <div class='fs-2 text-primary'>
                La película introducida es
                </div>
                </br>
                <div class='text-success'>
                <span class='fw-bold'>Título:</span> " . $titulo . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Actores:</span> " . $actores . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Director:</span> " . $director . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Guión:</span> " . $guion . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Producción:</span> " . $produccion . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Año:</span> " . $anio . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Nacionalidad:</span> " . $nacionalidad . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Género:</span> " . $genero . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Duración:</span> " . $duracion . "
                </div>
                <div class='text-success'>
                <span class='fw-bold'>Restricciones de edad:</span> " . $restriccion . "
                </div>
                <div class='text-success'><span class='fw-bold'>Sinópsis:</span> " . $sinopsis . "
                </div>
            </div>
        </div>";

        return $pelicula;
    }
}
