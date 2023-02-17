<?php

function registroPregunta(string $pregunta)
{
    $conexion = new mysqli('localhost', 'root', '', 'bdtienda');
    $sql = $conexion->prepare('INSERT INTO encuesta(pregunta) VALUES(?)');
    $sql->bind_param('s', $pregunta);
    $sql->execute();
    return $sql->affected_rows > 0;
}

if (registroPregunta(htmlspecialchars($_POST['pregunta'], ENT_QUOTES, 'UTF-8'))) {
    echo '<script>alert("Se registró correctamente.");</script>';
} else {
    echo '<script>alert("No se registró.");</script>';
}

header("Refresh:0; ../index.php");
die();
