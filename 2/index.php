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
    <div class="card" >
      <div class="card-body" style="background-color:#bebcbc;">
        <h5 class="card-title">Ejercicio 1</h5>
        <p class="card-text">Formulario que solicita número.</p>
        <a href="Vista/ejercicio1/index.php" class="btn btn-primary">Ver</a>
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
</main>

<?php
include('Vista/Templates/footer.php');
?>