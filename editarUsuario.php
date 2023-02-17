<?php
include "Modelo/conexion.php";
$idUsuario = $_GET["id"];

$sql = $conexion->query("SELECT * FROM usuario WHERE idUsuario=$idUsuario");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Editar Usuario</title>
</head>

<body>


  <div class="col-lg-5 con2 d-flex flex-column align-items-left mx-auto">

    <div class="align-self-center w-100 px-lg-5 py-lg-2 p-3">
      <h1 class="font-weight-bold text-center mt-1 mb-3">Editar datos</h1>

      <form class="row g-3 needs-validation" method="POST" novalidate>


        <?php
        while ($datos = $sql->fetch_object()) {
        ?>

          <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

          <div class="mt-3">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre ?>" id="validationCustom01" required>
          </div>

          <div class="mt-3">
            <label for="validationCustom01" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?php echo $datos->Apellido ?>" id="validationCustom01" required>
          </div>

          <div class="mt-3">
            <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" class="form-control" name="usuario" value="<?php echo $datos->Usuario ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor, escribe un nombre de usuario.
              </div>
            </div>
          </div>

          <div class="mt-3">
            <label for="validationCustom01" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="correo" value="<?php echo $datos->Correo ?>" id="validationCustom01" required>
            <div class="invalid-feedback">
              ¡Verifica tu correo por favor!
            </div>
          </div>

          <div class="mt-3">
            <label for="validationCustom01" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contra" value="<?php echo $datos->Contra ?>" id="validationCustom01" required>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Debe tener entre 8 y 20 caracteres.
              </span>
            </div>
            <div class="invalid-feedback">
              ¡Escribe una contraseña válida!
            </div>
          </div>
          <div class="modal-footer">
            <div class="col-12">
              <button onclick="history.back()" class="btn btn-danger" type="button">Cancelar</button>
              <button class="btn btn-success" name="btn" value="ok" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Guardar cambios</button>
              <a href="admin.php"><button class="btn btn-primary" type="button">Aceptar</button></a>

            </div>
          </div>
        <?php }

        include_once "Controlador/modificarUsuario.php";

        ?>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
      // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
      (function() {
        'use strict'

        // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
        var forms = document.querySelectorAll('.needs-validation')

        // Bucle sobre ellos y evitar el envío
        Array.prototype.slice.call(forms)
          .forEach(function(form) {
            form.addEventListener('submit', function(event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
      })()
    </script>

    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
      })
    </script>


</body>

</html>