<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/login.css" />

  <title>Iniciar sesión</title>
</head>

<body>
  <section>
    <div class="row g-0">
      <!--Contenedor del slider del inicio de sesión-->
      <div class="col-lg-7 con1 align-self-start d-none d-lg-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item img-1 min-vh-100 active">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Conectando lo que más te importa</h5>
                <a class="text-white text-decoration-none">Visita nuestra tienda</a>
              </div>
            </div>
            <div class="carousel-item img-2 min-vh-100">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Expertos en redes</h5>

                <a class="text-white text-decoration-none">Visita nuestra tienda</a>
              </div>
            </div>
            <div class="carousel-item img-3 min-vh-100">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Conexión al siguiente nivel</h5>
                <a class="text-white text-decoration-none">Visita nuestra tienda</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
      <!--Contenedor del formulario del inicio de sesión-->
      <div class="col-lg-5 con2 d-flex flex-column align-items-left min-vh-100 padre">

        <div class="align-self-center w-100 px-lg-5 py-lg-2 p-3 hijo">
          <h1 class="font-weight-bold text-center mt-5">Iniciar Sesión</h1>

          <form class="row mt-3 g-3 needs-validation" action="Controlador/iniciarSesion.php" method="POST" novalidate>

            <div class="mt-3">
              <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="usuario" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Por favor, elije un nombre de usuario.
                </div>
              </div>
            </div>

            <div class="mt-4">
              <label for="validationCustom01" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="pass" id="validationCustom01" required>
              <div class="invalid-feedback">
                ¡Escribe una contraseña válida!
              </div>
            </div>

            <div class="col-12 mt-5 mb-4">
              <button class="btn btn-primary" name="btn" value="ok" type="submit">Iniciar sesión</button>
            </div>
          </form>

          <div class="text-center mt-3">
            <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="Registro.php" class="text-light font-weight-bold text-decoration-none">Crea una ahora</a><br>
            <p class="d-inline-block mb-0">¿Olvidaste tu contraseña?</p><button class="btn btn-info" id="open">Recuperala ahora</button>
          </div>
        </div>
      </div>
    </div>
  </section>

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
    const open = document.getElementById('open');
    const modal_container = document.getElementById('modal_container');
    const close = document.getElementById('close');

    open.addEventListener('click', () => {
      modal_container.classList.add('show');
    });

    close.addEventListener('click', () => {
      modal_container.classList.remove('show');
    });
  </script>

</body>

</html>