<?php session_start(); ?>
<?php
include "Modelo/conexion.php";

$idDispositivo = $_GET["id"];

$sql = $conexion->query("SELECT * FROM dispositivo WHERE idDispositivo=$idDispositivo");

echo "<script>console.log('" . $_SERVER["REQUEST_URI"] . "');</script>";

?>

<?php include_once "Controlador/modificarDispositivo.php"; ?>

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
 <!--Encabezado de la página-->
 <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid ms-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="./ofertas.php">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Cotizar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Perfil</a>
                        </li>
                        <?php if (
                            $_SESSION['tipo'] == 3
                        ) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Mis compras</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="dispositivo.php">Dispositivos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="preguntas.php">Preguntas</a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <div class="col justify-content-end busc input-group mb-1 mt-1">
                        <form class="d-flex form" role="search">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Categoría</option>
                                <option value="1">Enrutadores</option>
                                <option value="2">Repetidores</option>
                                <option value="3">Puerta de enlace</option>
                                <option value="4">Puente (brigde)</option>
                                <option value="5">Conmutadores</option>
                            </select>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" value="">
                            <button class="btn btn-outline-success me-1" type="submit">Buscar</button>
                        </form>
                        <div class="log d-flex">
                            <?php if (!isset($_SESSION['usuario'])) : ?>
                                <a href="./Registro.php"><button type="button" class="btn btn-outline-light">Registrate</button></a>
                                <a href="./Login.php"><button type="button" class="btn btn-warning">Acceder</button></a>
                            <?php endif; ?>
                            <a href="Controlador/cerrarSesion.php"><button type="button" class="btn btn-danger">CERRAR SESIÓN</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  <div class="row align-items-stretch">
    <form method="POST" enctype="multipart/form-data">

      <?php
      while ($datos = $sql->fetch_object()) {
      ?>
        <br><br><br><br>
        <h4>Editar dispositivos</h4><br><br>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

        <label for="caracteristicas" class="form-label">Caracteristicas</label>
        <input class="form-control" type="text" id="caracteristicas" name="caracteristicas" value="<?= $datos->Caracteristicas ?>" required>

        <label for="precio" class="form-label">Precio</label>
        <input class="form-control" type="text" id="precio" name="precio" value="<?= $datos->Precio ?>" required>

        <label for="existencia" class="form-label">Existencia</label>
        <input class="form-control" type="text" id="existencia" name="existencia" value="<?= $datos->Existencia ?>" required>

        <label for="descuento" class="form-label">Descuento</label>
        <input class="form-control" type="text" id="descuento" name="descuento" value="<?= $datos->Descuento ?>" required>

        <label for="CantVendida" class="form-label">Cantidad Vendida</label>
        <input class="form-control" type="text" id="CantVendida" name="CantVendida" value="<?= $datos->CantVendida ?>" required>

        <label for="idMarca" class="form-label">Marca</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="idMarca" id="idMarca" value="<?= $datos->idMarca ?>" required>
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
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="idCategoria" id="idCategoria" value="<?= $datos->idCategoria ?>"required>
          <option class="option" value=1>Switches</option>
          <option class="option" value=2>Routers</option>
          <option class="option" value=3>Puntos de acceso</option>
          <option class="option" value=4>Extensores inalámbricos</option>
          <option class="option" value=5>Antenas</option>
          <option class="option" value=6>Transceptores</option>
          <option class="option" value=7>Convertidores</option>
          <option class="option" value=8>Adaptadores</option>
          <option class="option" value=9>Accesorios para redes</option>
          <option class="option" value=10>Herramientas y cableado para redes</option>
        </select>

        <div>
          <button onclick="history.back()" class="btn btn-danger" type="button">Cancelar</button>
          <button class="btn btn-success" name="btn" value="ok" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Guardar cambios</button>
          <a href="index.php"><button class="btn btn-primary" type="button">Aceptar</button></a>
        </div>
      <?php }


      ?>
    </form>
    <div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>