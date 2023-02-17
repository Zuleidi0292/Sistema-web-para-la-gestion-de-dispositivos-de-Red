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
  <!--Mostramos los dispositivos del usuario.-->
  <?php include_once "Modelo/conexion.php";?>

  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Las mejores ofertas las encuentras aquí</p>
    <?php
    $sql = $conexion->query("SELECT * FROM dispositivo inner join marca on dispositivo.idMarca = marca.idMarca inner join categoria on categoria.idCategoria = dispositivo.idCategoria 
            inner join usuario on dispositivo.idUsuario = usuario.idUsuario");
    while ($datos = $sql->fetch_object()) {
    ?>
      <div class="card ms-2 me-2 mt-1" style="max-width: 400px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="img-fluid rounded-start" src="./Public/<?php echo $datos->img1; ?>" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title"><?php echo  $datos->Caracteristicas ?></h4>
              <p class="card-text">Precio: $<?php echo ($datos->Precio) - ($datos->Precio * $datos->Descuento / 100) ?> <?php echo "<FONT COLOR='red'>" . $datos->Descuento . "% </FONT>"; ?></p>
              <p class="card-text">Existencias: <?php echo  $datos->Existencia ?></p>
              <p class="card-text"><small class="text-muted"><strike>$<?php echo  $datos->Precio ?></strike></small></p>
              <button type="button" class="btn btn-primary">Comprar</button>
            </div>
          </div>
        </div>
      </div>  
    <?php }
    ?>
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