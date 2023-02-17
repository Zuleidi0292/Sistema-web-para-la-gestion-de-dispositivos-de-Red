<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c8d70e4cd4.js" crossorigin="anonymous"></script>
  <title>Administrador</title>
</head>

<body>
  <!-- Tabla donde se muestran los usuarios -->
  <div class="col-5 mx-auto">
    <?php
    include_once "Modelo/conexion.php";
    include_once "Controlador/eliminarUsuario.php";
    sleep(1.5);
    ?>
  </div>
  <div class="col-10 mx-auto">
    <table class="table table-striped table-hover">
      <thead class=" table-success">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Usuario</th>
          <th scope="col">Correo</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Tipo de Usuario</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = $conexion->query("SELECT * FROM usuario");

        while ($datos = $sql->fetch_object()) {
        ?>
          <tr>
            <td><?= $datos->idUsuario ?></td>
            <td><?= $datos->Nombre ?></td>
            <td><?= $datos->Apellido ?></td>
            <td><?= $datos->Usuario ?></td>
            <td><?= $datos->Correo ?></td>
            <td><?= $datos->Contra ?></td>
            <td><?= $datos->idTipoUsuario ?></td>
            <td>
              <a href="editarUsuario.php?id=<?= $datos->idUsuario ?>"><button type="button" class="btn btn-small btn-warning fa-solid fa-user-pen"></button></a>
              <a href="admin.php?id=<?= $datos->idUsuario ?>"><button type="button" class="btn btn-small btn-danger fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="return eliminarUsuario()"></button></a>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
      myInput.focus()
    })

    function eliminarUsuario() {
      var respuesta = confirm("¿Desea elminar este usuario?");
      if (respuesta == true) {
        return true;
      } else {
        return false;
      }
    }
  </script>

</body>

</html>