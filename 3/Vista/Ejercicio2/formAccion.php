<?php
include('../../configuracion.php');
include('../Templates/head.php');
include('../../Control/SubirTxt.php');

//Obtengo los datos del formulario que encapsulé
$archivoCargado = data_submitted();

//Creo instancia del objeto y proceso los datos
$objPdfDoc = new SubirTxt();
$resultado = $objPdfDoc->subir($archivoCargado);
?>
<main class="index">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <!-- Mostrar el contenido del archivo en un textarea -->
            <?php if ($resultado['pudo'] == "si"): ?>
              <!-- Mostrar el contenido del archivo en un textarea -->
              <h3>Contenido del archivo subido</h3>
              <textarea class="form-control" rows="10"><?php echo $resultado['mensaje']; ?></textarea>
            <?php else: ?>
              <!-- Mostrar el mensaje de error si el archivo no es válido -->
              <p><?php echo $resultado['mensaje']; ?></p>
            <?php endif; ?>
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