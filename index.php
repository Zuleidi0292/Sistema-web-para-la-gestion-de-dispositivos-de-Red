<?php session_start(); ?>

<!--Si es coordinador includimos el controlador para obtener sus dispositivos.-->
<?php if ($_SESSION['tipo'] == 2) : ?>
  <?php include_once './Controlador/misDispositivos.php'; ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/index.css" />
  <title>Inicio</title>

  <style>
    #img-dispositivo {
      height: 100px;
    }
    tr, th, td {
      border: solid 1px #000;
    }
  </style>
</head>

<body>
  <!--Encabezado de la página-->
  <?php include_once './plantillabarradenavegacion.php'; ?>


  <!--Vista del Coordinador-->
  <div class="row g-0 justify-content-center mt-5">
    <?php if ($_SESSION['tipo'] == 2) : ?>
      <p class="text-center fs-3">Mis dispositivos</p>

      <!--Mostramos los dispositivos del usuario.-->
      <div class="col-5 mx-auto">
        <?php
        include_once "Modelo/conexion.php";
        include_once "Controlador/eliminarDispositivo.php";
        sleep(3);
        ?>
      </div>
      <div class="col-10 mx-auto">
        <table class="table table-striped table-hover">
          <thead class=" table-success">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Caracteristicas</th>
              <th scope="col">Precio</th>
              <th scope="col">Existencia</th>
              <th scope="col">Descuento</th>
              <th scope="col">CantVendida</th>
              <th scope="col">img1</th>
              <th scope="col">img2</th>
              <th scope="col">img3</th>
              <th scope="col">Marca</th>
              <th scope="col">Categoria</th>
              <th scope="col">Usuario</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php

            $sql = $conexion->query("SELECT * FROM dispositivo");

            while ($datos = $sql->fetch_object()) {
            ?>
              <tr>
                <td><?= $datos->idDispositivo ?></td>
                <td><?= $datos->Caracteristicas ?></td>
                <td><?= $datos->Precio ?></td>
                <td><?= $datos->Existencia ?></td>
                <td><?= $datos->Descuento ?></td>
                <td><?= $datos->CantVendida ?></td>
                <td>
                  <img id="img-dispositivo" src="./Public/<?php echo $datos->img1; ?>" alt="<?php echo $datos->Caracteristicas; ?>">
                </td>
                <td>
                  <img id="img-dispositivo" src="./Public/<?php echo $datos->img2; ?>" alt="<?php echo $datos->Caracteristicas; ?>">
                </td>
                <td>
                  <img id="img-dispositivo" src="./Public/<?php echo $datos->img3; ?>" alt="<?php echo $datos->Caracteristicas; ?>">
                </td>
                <td><?= $datos->idMarca ?></td>
                <td><?= $datos->idCategoria ?></td>
                <td><?= $datos->idUsuario ?></td>
                <td>
                  <a href="editarDispositivo.php?id=<?= $datos->idDispositivo ?>"><button type="button" class="btn btn-small btn-warning fa-solid fa-user-pen"></button></a>
                  <a href="index.php?id=<?= $datos->idDispositivo ?>"><button type="button" class="btn btn-small btn-danger fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="return eliminarDispositivo()"></button></a>

                </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>

    <?php else : ?>

      <!-- Apartir de aqui comienza la interfaz del comprador o cliente -->
      <p class="text-center fs-3">Ùltimas novedades</p>
      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/router.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Routers</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">HUBs</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>
  </div>

  <!--Te puede interesar-->
  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Te puede interesar</p>
    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/router.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Routers</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/switch.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Switches</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">HUBs</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/access.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Acces point</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>
  </div>


  <!--Buscar por marca-->
  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Marcas más vendidas</p>
    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/router.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Routers</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/switch.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Switches</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">HUBs</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/access.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Acces point</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>
  </div>

  <!--Se muestra el foro para el usuario comprador-->
  <?php include_once './Controlador/consultarPreguntas.php'; ?>
  <?php if ($_SESSION['tipo'] == 3) : ?>
    <div id="foro" class="container">
      <section>
        <header>
          <h2>Foro</h2>
        </header>

        <div>
          <button id="addPregunta">Agregar pregunta</button>
        </div>

        <div id="ver  Preguntas">
          <?php $num_preguntas = sizeof($preguntas); ?>
          <?php if ($num_preguntas > 0) : ?>
            <table>
              <tr>
                <th>Pregunta</th>
              </tr>
              <?php for ($i = 0; $i < $num_preguntas; $i++) : ?>
                <tr>
                  <td><?php echo $preguntas[$i]['Pregunta']; ?></td>
                </tr>
              <?php endfor; ?>
            </table>
          <?php endif; ?>
        </div>
      </section>
    </div>

    <!-- Button trigger modal -->
    <button id="mostrarModal" style="visibility: hidden;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal para agregar una pregunta -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agrega una nueva pregunta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="./Controlador/registroPregunta.php" method="POST" class="row g-3">
              <div class="mb-3">
                <label for="pregunta" class="form-label">Pregunta:</label>
                <textarea class="form-control" name=" pregunta" id="pregunta" rows="3" required></textarea>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!--Footer-->
  <footer class="bg-dark mt-5">
    <div class="row g-0">
      <h2 class="text-white">Aqui va el footer xd</h2>
    </div>
  </footer>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
  })

  function eliminarDispositivo() {
    var respuesta = confirm("¿Desea elminar este dispositivo?");
    if (respuesta == true) {
      return true;
    } else {
      return false;
    }
  }
</script>
<script type="text/javascript">
  document.getElementById('addPregunta').addEventListener('click', () => {
    document.getElementById('mostrarModal').click();
  });
</script>
</body>

</html>