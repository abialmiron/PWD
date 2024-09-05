<?php
include('../../configuracion.php');
include('../Templates/head.php');
include('../../Control/SubirPdfDoc.php');

//Obtengo los datos del formulario que encapsulé
$archivoCargado = data_submitted();

//Creo instancia del objeto y proceso los datos
$objPdfDoc = new SubirPdfDoc();
$resultado = $objPdfDoc->subir($archivoCargado);

?>
<main class="index">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <div class="mb-1">
              <?php echo $resultado['mensaje']; ?>
            </div>
            <div>
              <?php
              //Creo la dirección de la imagen hacia el directorio donde se encuentra
              if ($resultado['pudo'] == 'si'):
                $dir = "../uploads/";
                $nombreArchivo = $archivoCargado['archivo']['name'];
                $archivo = $dir . $nombreArchivo; ?>
                <a href="<?php echo $archivo ?>">Visualizar</a>
              <?php endif; ?>
            </div>
            <div class="text-center p2">
              <br /><a class="btn btn-primary" href="form.php">Volver <a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
include('../Templates/footer.php');
?>