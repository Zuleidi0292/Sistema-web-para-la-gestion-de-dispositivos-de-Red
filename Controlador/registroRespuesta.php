<?php

session_start();

function registroRespuesta(string $respuesta, string $id, string $usuario)
{
    $conexion = new mysqli('localhost', 'root', '', 'bdtienda');
    $sql = $conexion->prepare('INSERT INTO respuestas(respuesta, idPregunta, idUsuario) VALUES(?, ?, ?)');
    $sql->bind_param('sii', $respuesta, $id, $usuario);
    $sql->execute();
    return $sql->affected_rows > 0;
}

if (registroRespuesta(
    htmlspecialchars($_POST['respuesta'], ENT_QUOTES, 'UTF-8'),
    htmlspecialchars($_POST['idPregunta'], ENT_QUOTES, 'UTF-8'),
    htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8')
)) {
    echo '<script>alert("Se registró correctamente.");</script>';
} else {
    echo '<script>alert("No se registró.");</script>';
}

header("Refresh:0; ../preguntas.php");
die();
