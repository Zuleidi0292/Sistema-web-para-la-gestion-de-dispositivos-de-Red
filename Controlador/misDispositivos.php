<?php

include_once './Modelo/bd.php';
include_once './Modelo/dispositivo.php';

$idUsuario = $_SESSION['usuario'];

$dispositivo = new Dispositivos(null, null, null, null, null, null, null, null, null, null, null, $idUsuario);

$dispositivos;
try {
    $dispositivos = $dispositivo->obtenerTodosDispositivos();
} catch (Exception $ex) {
    echo '<div class="alert alert-danger text-center">Hubo un error al obtener los dispositivos</div>';
}
