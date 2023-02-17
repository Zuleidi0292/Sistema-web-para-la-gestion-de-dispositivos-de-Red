<?php

    if(isset($_POST["btn"])){
        if(isset($_POST['nombre']) && isset($_POST['apellido'])
        && isset($_POST['usuario']) && isset($_POST['tipo'])
        && isset($_POST['correo']) && isset($_POST['contra'])){

        $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES,'UTF-8');
        $apellido = htmlspecialchars($_POST['apellido'], ENT_QUOTES,'UTF-8');
        $usuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES,'UTF-8');
        $tipo = htmlspecialchars($_POST['tipo'], ENT_QUOTES,'UTF-8');
        $correo = htmlspecialchars($_POST['correo'], ENT_QUOTES,'UTF-8');
        $pass = htmlspecialchars($_POST['contra'], ENT_QUOTES,'UTF-8');

        $sql=$conexion->query("INSERT INTO usuario(Nombre,Apellido,Usuario,Correo,Contra,idTipoUsuario) VALUE('$nombre','$apellido','$usuario','$correo','$pass',$tipo)");
            if($sql==TRUE){
                echo '<div class="alert alert-success text-center">Registro exitoso</div>';
            }else{
                echo '<div class="alert alert-danger text-center">Hubo un error al registrar</div>';
            }
        }
    }
?>