

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="./css/index.css" />
    <script src="https://kit.fontawesome.com/c8d70e4cd4.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <!-- <div id="carouselExampleCaptions" class="carousel slide position-absolute top-0 start-50 translate-middle-x" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img1.jpg" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etiqueta de la primera diapositiva</h5>
              <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img2.jpg" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etiqueta de la segunda diapositiva</h5>
              <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img3.jpg" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Etiqueta de la tercera diapositiva</h5>
              <p>Algún contenido placeholder representativo para la tercera diapositiva.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>-->

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
            include_once "Modelo/conexion.php";
            $sql=$conexion->query("SELECT * FROM usuario");
            
            while($datos = mysqli_fetch_array($sql)){
          ?>
        <tr>
          <td><?= $datos['idUsuario']?></td>
          <td><?= $datos['Nombre']?></td>
          <td><?= $datos['Apellido'] ?></td>
          <td><?= $datos['Usuario'] ?></td>
          <td><?= $datos['Correo'] ?></td>
          <td><?= $datos['Contra'] ?></td>
          <td><?= $datos['idTipoUsuario'] ?></td>
          <td>
            <!-- Botones del modal -->
          <button  type="button" class="btn btn-small btn-warning fa-solid fa-user-pen" data-bs-toggle="modal" data-bs-target="#exampleModal" data-target="#editChildresn<?php echo $datos['idUsuario']; ?>"></button>
          <button type="button" class="btn btn-small btn-danger fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal" data-target="#editChildresn<?php echo $datos['idUsuario']; ?>"></button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $datos['idUsuario']; ?>">
                                  Modificar
          </button>
        </td>
        </tr>
<!--Ventana Modal para Actualizar--->
<?php  include_once "Controlador/ModalEditar.php"; ?>

<!--Ventana Modal para la Alerta de Eliminar--->
<?php //include_once "Controlador/ModalEliminar.php"; ?>
<?php } ?>
            
        
      </tbody>
      
    </table>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   <script>
    var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
   </script>



</body>
</html>