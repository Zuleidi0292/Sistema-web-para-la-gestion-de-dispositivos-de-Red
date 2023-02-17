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
  <title>Oferta</title>
</head>
<body>
  <!--Encabezado de la página-->
  <?php
  include_once "Modelo/dispositivo.php";
  sleep(1.5);
  ?>


  <!--Vista del Coordinador-->
  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Ofertas de mis dispositivos</p>

    <!--Mostramos los dispositivos del usuario.-->
    <?php $num_dispositivos = sizeof($dispositivos); ?>
    <?php for ($i = 0; $i < $num_dispositivos; $i++) : ?>
      <?php /* var_dump($dispositivos); */  ?>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <div class="card-body">
          <center><img id="img-margen" src="<?php echo "./Public/" . $dispositivos[$i]['img1']; ?>" class="rounded mx-auto d-block" alt="..." width="200px" height="200px">
            <p class="card-text text-center fs-4"> <?php echo $dispositivos[$i]['Caracteristicas']; ?> </p>
            <p class="card-text text-center fs-4">
            <h5>Descuento:  <?php echo  "<FONT COLOR='red'>". $dispositivos[$i]['Descuento'] . "% </FONT>"; ?></h5>
            <a href="editarDispositivo.php?id=<? $dispositivos[$i]['idDispositivo'] ?>"><button type="button" class="btn btn-small btn-warning fa-solid fa-user-pen">Editar</button></a>
            </p>
            <p class="card-text text-center fs-4">
            <h5>Precio final: </h5><?php echo "$" . (($dispositivos[$i]['Precio']) + (($dispositivos[$i]['Precio'] * $dispositivos[$i]['Descuento'] / 100))); ?> </p>
          </center>
        </div>
      </div>
    <?php endfor; ?>
  </div>


  <!--Footer-->
  <footer class="bg-dark mt-5">
    <div class="row g-0">
      <h2 class="text-white">Aqui va el footer xd</h2>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>