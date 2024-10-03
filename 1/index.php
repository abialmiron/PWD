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
    <div class="card" >
      <div class="card-body" style="background-color:#bebcbc;">
        <h5 class="card-title">Ejercicio 1</h5>
        <p class="card-text">Formulario que solicita número.</p>
        <a href="Vista/ejercicio1/form.php" class="btn btn-primary">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body" style="background-color: #201f1f; color: white;">
        <h5 class="card-title">Ejercicio 2</h5>
        <p class="card-text">Formulario que permite cargar horas de la cursada por cada día de la semana.</p>
        <a href="Vista/ejercicio2/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body" style="background-color:#bebcbc;">
        <h5 class="card-title">Ejercicio 3</h5>
        <p class="card-text">Formulario que te permite visualizar la información ingresada.</p>
        <a href="Vista/ejercicio3/form.php" class="btn btn-primary">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #201f1f; color: white;">
        <h5 class="card-title">Ejercicio 4</h5>
        <p class="card-text">Formulario que determina si el usuario es mayor de edad o no.</p>
        <a href="Vista/ejercicio4/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color:#bebcbc;">
        <h5 class="card-title">Ejercicio 5</h5>
        <p class="card-text">Formulario anterior modificado para que ingrese más datos (estudios y sexo).</p>
        <a href="Vista/ejercicio5/form.php" class="btn btn-primary">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #201f1f; color: white;">
        <h5 class="card-title">Ejercicio 6</h5>
        <p class="card-text">Formulario anterior modificado para que ingrese más datos (deportes que realiza).</p>
        <a href="Vista/ejercicio6/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color:#bebcbc;">
        <h5 class="card-title">Ejercicio 7</h5>
        <p class="card-text">Formulario que realiza operaciones matemáticas</p>
        <a href="Vista/ejercicio7/form.php" class="btn btn-primary">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" style="background-color: #201f1f; color: white;">
        <h5 class="card-title">Ejercicio 8</h5>
        <p class="card-text">Formulario para la empresa Cinem@s.</p>
        <a href="Vista/ejercicio8/form.php" class="btn btn-primary btn-primaryMod">Ver</a>
      </div>
    </div>
  </div>
</div>
</main>

<?php
include('Vista/Estructura/footer.php');
?>