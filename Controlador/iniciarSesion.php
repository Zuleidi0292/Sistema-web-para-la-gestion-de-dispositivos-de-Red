<?php
include_once("../Modelo/conexion.php");

if (isset($_POST["btn"])) {

    if (isset($_POST['usuario']) && isset($_POST['pass'])) {
        $usuario = htmlentities($_POST['usuario']);
        $pass = htmlentities($_POST['pass']);

        // Obtener el usuario y el tipo de usuario.
        $sql = 'SELECT idUsuario, idTipoUsuario FROM Usuario WHERE usuario = ? AND contra = ?';
        $consulta = $conexion->prepare($sql);
        $consulta->bind_param('ss', $usuario, $pass);

        $consulta->execute();
        $resultado = $consulta->get_result()->fetch_assoc();
        if (!is_null($resultado)) {
            session_start();
            $_SESSION['usuario'] = $resultado['idUsuario'];
            $_SESSION['tipo'] = $resultado['idTipoUsuario'];

            header("location: ../index.php");
            die();
        } else {
            echo '<div class="alert alert-danger text-center">Hubo un error al iniciar sesión</div>';
        }

        /* $sql=("SELECT idUsuario,idTipoUsuario FROM Usuario WHERE Usuario='$usuario' AND Contra = '$pass'");
        $res=mysqli_query($conexion,$sql);

        $filas = mysqli_num_rows($res);
        if($filas==TRUE){

            header("location: ../index.php");
            session_start();
            $_SESSION['usuario'] = $sql;

        }else{
            echo '<div class="alert alert-danger text-center">Hubo un error al iniciar sesión</div>';
        } */
    }
}
