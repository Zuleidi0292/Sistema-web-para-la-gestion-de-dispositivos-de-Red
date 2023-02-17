<?php session_start(); ?>

<!--Si es coordinador includimos el controlador para obtener sus dispositivos.-->
<?php if ($_SESSION['tipo'] == 2) : ?>
  <?php include_once './Controlador/misDispositivos.php'; ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/index.css" />
  <title>Inicio</title>
</head>

<body>
  <!--Encabezado de la página-->
  <?php include_once './plantillabarradenavegacion.php';
  include_once "Modelo/dispositivo.php";
  sleep(1.5);
  ?>


  <!--Vista del Coordinador-->
  <div class="row g-0 justify-content-center mt-5">
    <?php if ($_SESSION['tipo'] == 2) : ?>
      <p class="text-center fs-3">Mis dispositivos</p>

      <!--Mostramos los dispositivos del usuario.-->
      <?php $num_dispositivos = sizeof($dispositivos); ?>
      <?php for ($i = 0; $i < $num_dispositivos; $i++) : ?>
        <?php /* var_dump($dispositivos); */  ?>

        <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
          <div class="card-body">
            <center><img src="<?php echo "./Public/" . $dispositivos[$i]['img1']; ?>" class="rounded mx-auto d-block" alt="..." width="200px" height="200px"></center>
            <p class="card-text text-center fs-4"> <?php echo $dispositivos[$i]['Caracteristicas']; ?> </p>
            <p class="card-text text-center fs-4"> <?php echo "$" . $dispositivos[$i]['Precio']; ?> </p>
            <a href="Controlador/eliminarDispositivo.php?php echo $dispositivos->idDispositivo;?> " onclick = "return eliminarMateria()"><input class="ElP" type="button" value="Eliminar"></a>
          </div>
        </div>
      <?php endfor; ?>
    <?php else : ?>

      <!-- Apartir de aqui comienza la interfaz del comprador o cliente -->
      <p class="text-center fs-3">Ùltimas novedades</p>
      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/router.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Routers</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">HUBs</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>

      <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
        <img src="img/access.jpg" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <p class="card-text text-center fs-4">Acces point</p>
        </div>
        <div class="card-footer">
          <p class="card-text text-center txt">Ver más</p>
        </div>
      </div>
  </div>

  <!--Te puede interesar-->
  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Te puede interesar</p>
    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/router.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Routers</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/switch.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Switches</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">HUBs</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/access.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Acces point</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>
  </div>


  <!--Buscar por marca-->
  <div class="row g-0 justify-content-center mt-5">
    <p class="text-center fs-3">Marcas más vendidas</p>
    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/router.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Routers</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/switch.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Switches</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/hub.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">HUBs</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>

    <div class="card ms-2 me-2 mt-1" style="width: 18rem;">
      <img src="img/access.jpg" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <p class="card-text text-center fs-4">Acces point</p>
      </div>
      <div class="card-footer">
        <p class="card-text text-center txt">Ver más</p>
      </div>
    </div>
  </div>
<?php endif; ?>

<!--Footer-->
<footer class="bg-dark mt-5">
  <div class="row g-0">
    <h2 class="text-white">Aqui va el footer xd</h2>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
  function eliminarDispositivo(){
				var respuesta = confirm("¿Desea elminar este producto?");
				if(respuesta == true){
					return true;
				}else{
					return false;
				}
			}
</script>
</body>

</html>