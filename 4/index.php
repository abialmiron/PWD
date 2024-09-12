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
          <p class="card-text">Crear la capa de los datos, implementando el ORM (Modelo de datos) para la base de datos
            entregada. Recordar que se debe generar al menos, un clase php por cada tabla</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 2</h5>
          <p class="card-text">Crear la capa de control, que nos permitan acceder al ORM (Modelo de datos) y entregarle la
            informacion a las paginas de la interface.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 3</h5>
          <p class="card-text">Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
            mostrar todos los datos de los autos que se encuentran cargados.</p>
          <a href="Vista/ejercicio3/verAutos.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 4</h5>
          <p class="card-text">Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
            de patente de un auto, enviar datos a página “accionBuscarAuto.php” en donde se soliciten los datos completos del auto que se corresponda con
            la patente ingresada y mostrar los datos en una tabla.</p>
          <a href="Vista/ejercicio4/buscarAuto.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 5</h5>
          <p class="card-text">Crear una página "listaPersonas.php" que muestre un listado con las personas que se
            encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
            los datos de la persona y un listado de los autos que tiene asociados.</p>
          <a href="Vista/ejercicio5/listarPersonas.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 6</h5>
          <p class="card-text">Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
            los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
            un nuevo registro en la tabla persona de la base de datos.</p>
          <a href="Vista/ejercicio6/nuevaPersona.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 7</h5>
          <p class="card-text">Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
            todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
            “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos.</p>
          <a href="Vista/ejercicio7/nuevoAuto.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color: #201f1f; color: white;">
          <h5 class="card-title">Ejercicio 8</h5>
          <p class="card-text"> Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
            numero de patente de un auto y un numero de documento de una persona, enviar datos a página “accionCambioDuenio.php” en
            donde se realice cambio del dueño del auto de la patente ingresada en el formulario.</p>
          <a href="Vista/ejercicio8/CambiarDuenio.php" class="btn btn-primary btn-primaryMod">Ver</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body" style="background-color:#bebcbc;">
          <h5 class="card-title">Ejercicio 9</h5>
          <p class="card-text">Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
            numero de documento de una persona. Enviar datos a página “accionBuscarPersona.php” y buscar los datos de la persona cuyo
            documento sea el ingresado en el formulario los muestre en un nuevo formulario.</p>
          <a href="Vista/ejercicio9/buscarPersona.php" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
include('Vista/Templates/footer.php');
?>