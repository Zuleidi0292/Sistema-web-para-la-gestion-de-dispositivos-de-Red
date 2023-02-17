<?php
if (isset($_POST["btn"])) {
  /* if (
        isset($_POST['caracteristicas']) && isset($_POST['precio'])
        && isset($_POST['existencia']) && isset($_POST['descuento'])
        && isset($_POST['CantVendida']) && isset($_POST['idMarca']) && isset($_POST['idCategoria'])
    ) { */
  $caract = htmlentities($_POST['caracteristicas']);
  $pre = htmlentities($_POST['precio']);
  $exis = htmlentities($_POST['existencia']);
  $desc = htmlentities($_POST['descuento']);
  $cant = htmlentities($_POST['CantVendida']);
  $marc = htmlentities($_POST['idMarca']);
  $cat = htmlentities($_POST['idCategoria']);

$idDispositivo = $_GET["id"];
  $sql = $conexion->query("UPDATE dispositivo SET caracteristicas='$caract', precio='$pre', existencia='$exis', descuento='$desc', CantVendida='$cant', idMarca='$marc', idCategoria='$cat' WHERE idDispositivo = $idDispositivo");
  if ($sql == TRUE) {
    header("Location: http://localhost/project/index.php");
    die();
  } else {

    echo '<div class="alert alert-danger text-center">Hubo un error al actualizar</div>';
  }
  /* } */
}
