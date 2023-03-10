<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <title>Ofertas</title>
  <style>
    .form-register {
      width: 500px;
      background: white;
      margin: auto;
      margin-top: 100px;
      font-family: 'calibri';
      color: black;
      position: center;
    }
  </style>
</head>

<body>
  <?php include_once './plantillabarradenavegacion.php'; ?>
  <div class="row align-items-stretch">
    <form action="./Controlador/registroDispositivo.php" method="POST" enctype="multipart/form-data">
      <section class="form-register">
        <h4>Registrar nuevo dispositivo</h4>
        <label for="caracteristicas" class="form-label">Caracteristicas</label>
        <input class="form-control" type="text" id="caracteristicas" name="caracteristicas">

        <label for="precio" class="form-label">Precio</label>
        <input class="form-control" type="text" id="precio" name="precio">

        <label for="existencia" class="form-label">Existencia</label>
        <input class="form-control" type="text" id="existencia" name="existencia">

        <label for="descuento" class="form-label">Descuento</label>
        <input class="form-control" type="text" id="descuento" name="descuento">

        <label for="CantVendida" class="form-label">Cantidad Vendida</label>
        <input class="form-control" type="text" id="CantVendida" name="CantVendida">

        <label class="form-label">Imagen 1:</label>
        <input class="form-control" type="file" name="img1" id="img1">

        <label class="form-label">Imagen 2:</label>
        <input class="form-control" type="file" name="img2" id="img2">

        <label class="form-label">Imagen 3:</label>
        <input class="form-control" type="file" name="img3" id="img3">

        <label for="idMarca" class="form-label">Marca</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="idMarca" id="idMarca">
          <option class="option" value=1>Aruba</option>
          <option class="option" value=2>Cisco</option>
          <option class="option" value=3>Dahua</option>
          <option class="option" value=4>DELL</option>
          <option class="option" value=5>Hikvision</option>
          <option class="option" value=6>HP Enterprise</option>
          <option class="option" value=7>Linksis</option>
          <option class="option" value=8>Planet</option>
          <option class="option" value=9>TP-Link</option>
          <option class="option" value=10>Utepo</option>
          <option class="option" value=11>X-Media</option>
          <option class="option" value=12>Zyxel</option>
        </select>

        <label for="idCategoria" class="form-label">Categoria</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="idCategoria" id="idCategoria">
          <option class="option" value=1>Switches</option>
          <option class="option" value=2>Routers</option>
          <option class="option" value=3>Puntos de acceso</option>
          <option class="option" value=4>Extensores inal??mbricos</option>
          <option class="option" value=5>Antenas</option>
          <option class="option" value=6>Transceptores</option>
          <option class="option" value=7>Convertidores</option>
          <option class="option" value=8>Adaptadores</option>
          <option class="option" value=9>Accesorios para redes</option>
          <option class="option" value=10>Herramientas y cableado para redes</option>
        </select>

        <div>
          <input class="btn btn-success" type="submit" value="Registrar"> <input class="btn btn-info" type="button" onclick="history.back()" name="volver atr??s" value="Volver atr??s">
        </div>
      </section>
    </form>
    <div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>