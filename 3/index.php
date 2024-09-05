<?php
include('configuracion.php');
include('Vista/Templates/head.php');
?>

<main class="index">
  <div class="row">
    <p></p>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 1</h5>
          <p class="card-text">Crea un formulario HTML para subir archivos, validando en el servidor que sean .doc o .pdf y no superen los 2 MB. Muestra un enlace al archivo si es válido o un mensaje de error si no lo es.</p>
          <a href="Vista/ejercicio1/form.php" class="btn btn-primary btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 2</h5>
          <p class="card-text">Crea un formulario HTML para subir archivos. En el servidor, valida que el archivo sea de tipo .txt. Si es válido, abre el archivo y muestra su contenido en un textarea.</p>
          <a href="./Vista/ejercicio2/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 3</h5>
          <p class="card-text">Agrega un input para subir una imagen al formulario del ejercicio 10 del práctico 2. Al enviar el formulario, procesa y muestra la imagen de la película junto con el archivo cargado.</p>
          <a href="./Vista/ejercicio3/form.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include('Vista/Templates/footer.php');
?>