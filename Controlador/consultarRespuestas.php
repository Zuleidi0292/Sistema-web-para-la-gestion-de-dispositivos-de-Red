<?php

/**
 * Consulta las respuestas de la base de datos.
 * @return Array respuestas.
 */
function consultarRespuestas()
{
    $conexion = new mysqli('localhost', 'root', '', 'bdtienda');
    $sql = $conexion->prepare('SELECT * FROM respuestas inner join usuario on respuestas.idUsuario = usuario.idUsuario');
    $sql->execute();
    return $sql->get_result()->fetch_all(MYSQLI_ASSOC);
}

$respuestas = consultarRespuestas();
