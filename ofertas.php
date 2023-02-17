<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/ofertas.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <title>Ofertas</title>
</head>

<body>
  <?php include_once '../Project/plantillabarradenavegacion.php'; ?>

  <!--Se verifica el tipo de usuario-->
  <?php if ($_SESSION['tipo'] == 2) : ?>
    <!--Es coordinador-->
    <?php include_once './ofertaCoordinador.php'; ?>
  <?php else : ?>
    <!--Es cliente-->
    <?php include_once './ofertaCliente.php'; ?>
  <?php endif; ?>
</body>

</html>