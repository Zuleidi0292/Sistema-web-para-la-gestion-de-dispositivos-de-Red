<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="./css/login.css" />

    <title>Regístrate ahora</title>
</head>
<body>
  <section>
        <div class="row g-0">
          <!--Contenedor del slider del registro-->
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
          <!--Contenedor del formulario del registro-->
          <div class="col-lg-5 con2 d-flex flex-column align-items-left min-vh-100">

            <div class="align-self-center w-100 px-lg-5 py-lg-2 p-3">
                <h1 class="font-weight-bold text-center mt-1 mb-3">Regístrate</h1>

                <form class="row g-3 needs-validation" method="POST" novalidate>
                <div class="input-group mt-3">
                  <span class="input-group-text">Nombre y apellido</span>
                  <input type="text" aria-label="First name" class="form-control" name="nombre">
                  <input type="text" aria-label="Last name" class="form-control" name="apellido">
                </div>

                    <div class="mt-3">
                      <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="usuario" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Por favor, escribe un nombre de usuario.
                        </div>
                      </div>
                    </div>
          
                    <div class="mt-4">
                      <select class="form-select form-label" name="tipo" aria-label="Default select example">
                        <option selected>¿Qué tipo de usuario eliges?</option>
                        <option value="2" >Vendedor</option>
                        <option value="3">Comprador</option>
                      </select>
                    </div>

                    <div class="mt-3">
                      <label for="validationCustom01" class="form-label">Correo electrónico</label>
                      <input type="email" class="form-control" name="correo" id="validationCustom01" required>
                      <div class="invalid-feedback">
                        ¡Verifica tu correo por favor!
                      </div>
                    </div>

                    <div class="mt-3">
                      <label for="validationCustom01" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="contra" id="validationCustom01" required>
                      <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                          Debe tener entre 8 y 20 caracteres.
                        </span>
                      </div>
                      <div class="invalid-feedback">
                        ¡Escribe una contraseña válida!
                      </div>
                    </div>

                    <div class="col-12 mt-2">
                      <button class="btn btn-primary" name="btn" value="ok" type="submit">Registrarte</button>
                    </div>
                </form>

                <div class="text-center mt-3 mb-2">
                  <p class="d-inline-block mb-0">¿Ya tienes una cuenta?</p> <a href="Login.php" class="text-light font-weight-bold text-decoration-none">Inicia sesión</a>
              </div>  
                <?php
                  include_once "Modelo/conexion.php";
                  include_once "Controlador/registroUsuario.php";
                ?>
            </div>
            
          </div>
        </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
        (function () {
          'use strict'

          // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
          var forms = document.querySelectorAll('.needs-validation')

          // Bucle sobre ellos y evitar el envío
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()
    </script>

  </body>
</html>