<?php
include('configuracion.php');
include('Vista/Estructura/head.php');
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
          <p class="card-text">Investigue y pruebe la validación de formularios usando alguna librería o framework
            javaScript (JQuery, Mootools, Dojo, Prototype, etc)..</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 2</h5>
          <p class="card-text">Selección de una librería y validación del Trabajo Práctico 1.</p>
          <a href="Vista/ejercicio2/index.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 3</h5>
          <p class="card-text">Crear una página php con un formulario HTML de login en la que solicitan el usuario
            y la password para loguearse.</p>
          <a href="Vista/ejercicio3/form.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 4</h5>
          <p class="card-text">Diseñar un formulario que permita cargar las películas de la empresa Cinem@s.</p>
          <a href="Vista/ejercicio4/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include('Vista/Estructura/footer.php');
?>