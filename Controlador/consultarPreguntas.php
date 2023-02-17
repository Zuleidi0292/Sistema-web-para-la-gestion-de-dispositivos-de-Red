<?php

/**
 * Consulta las preguntas de la base de datos.
 * @return Array preguntas.
 */
function consultarPreguntas()
{
    $conexion = new mysqli('localhost', 'root', '', 'bdtienda');
    /*  $sql = $conexion->prepare('SELECT * FROM respuestas inner join usuario on respuestas.idUsuario = usuario.idUsuario inner join encuesta on encuesta.idPregunta = respuestas.idPregunta'); */
    $sql = $conexion->prepare('SELECT * FROM encuesta');
    $sql->execute();
    return $sql->get_result()->fetch_all(MYSQLI_ASSOC);
}

$preguntas = consultarPreguntas();
