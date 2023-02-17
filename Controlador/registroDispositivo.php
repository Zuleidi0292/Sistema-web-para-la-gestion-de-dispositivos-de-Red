<?php

include_once '../Modelo/bd.php';
include_once '../Modelo/dispositivo.php';

// Obtenemos los datos del formulario.
$caract = htmlentities($_POST['caracteristicas']);
$pre = htmlentities($_POST['precio']);
$exis = htmlentities($_POST['existencia']);
$desc = htmlentities($_POST['descuento']);
$cant = htmlentities($_POST['CantVendida']);
$marc = htmlentities($_POST['idMarca']);
$cat = htmlentities($_POST['idCategoria']);

//Mover la imagen al servidor
$carpeta_destino = "../Public/";
$nombre_img1 = $_FILES['img1']['name'];
$nombre_img2 = $_FILES['img2']['name'];
$nombre_img3 = $_FILES['img3']['name'];

$archivo_destinoimg1 = $carpeta_destino . basename($nombre_img1);
$archivo_destinoimg2 = $carpeta_destino . basename($nombre_img2);
$archivo_destinoimg3 = $carpeta_destino . basename($nombre_img3);
$tipo_archivo1 = strtolower(pathinfo($archivo_destinoimg1, PATHINFO_EXTENSION));
$tipo_archivo2 = strtolower(pathinfo($archivo_destinoimg2, PATHINFO_EXTENSION));
$tipo_archivo3 = strtolower(pathinfo($archivo_destinoimg3, PATHINFO_EXTENSION));
$img1 ="";
$img2 ="";
$img3 ="";
//Movemos la imagen a la carpeta
if(move_uploaded_file($_FILES['img1']['tmp_name'], $archivo_destinoimg1) && move_uploaded_file($_FILES['img2']['tmp_name'], $archivo_destinoimg2) && move_uploaded_file($_FILES['img3']['tmp_name'], $archivo_destinoimg3)){
    echo "Logramos subir la imagen<br>";
    $img1 = $nombre_img1;
    $img2 = $nombre_img2;
    $img3 = $nombre_img3;
}

// Obtenemos el id del coordinador.
session_start();
$idU = $_SESSION['usuario'];

// Creamos el dispositivo para registrarlo en la bd.
$dispositivo = new Dispositivos(NULL, $caract, $pre, $exis, $desc, $cant, $img1, $img2, $img3, $marc, $cat, $idU);
try {
    if ($dispositivo->registrar()) {
        echo '<script>alert("Se registró correctamente.");</script>';
    } else {
        echo '<div class="alert alert-danger text-center">Hubo un error al registrar el dispositivo</div>';
    }
} catch (Exception $ex) {
    echo '<div class="alert alert-danger text-center">' . $ex->getMessage() . '</div>';
}

header("Refresh:0; ../index.php");
die();