<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        tr,
        th,
        td {
            border: solid 0.5px #000;
        }
    </style>
</head>

<body>
    <!--Encabezado de la página-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid ms-6">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="./ofertas.php">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Cotizar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="dispositivo.php">Dispositivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="preguntas.php">Preguntas</a>
                        </li>
                    </ul>

                    <div class="col justify-content-end busc input-group mb-1 mt-1">
                        <form class="d-flex form" role="search">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Categoría</option>
                                <option value="1">Enrutadores</option>
                                <option value="2">Repetidores</option>
                                <option value="3">Puerta de enlace</option>
                                <option value="4">Puente (brigde)</option>
                                <option value="5">Conmutadores</option>
                            </select>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" value="">
                            <button class="btn btn-outline-success me-1" type="submit">Buscar</button>
                        </form>
                        <div class="log d-flex">
                            <?php if (!isset($_SESSION['usuario'])) : ?>
                                <a href="./Registro.php"><button type="button" class="btn btn-outline-light">Registrate</button></a>
                                <a href="./Login.php"><button type="button" class="btn btn-warning">Acceder</button></a>
                            <?php endif; ?>
                            <a href="Controlador/cerrarSesion.php"><button type="button" class="btn btn-danger">CERRAR SESIÓN</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Apartado para responder las preguntas del comprador -->
    <br><br><br><br>
    <?php include_once './Controlador/consultarPreguntas.php'; ?>
    <div id="foro" class="container">
        <section>
            <header>
                <center>
                    <h2>Las dudas que expusó el comprador las puedes ver y/o responder aquí:</h2><br>
                </center>
            </header>

            <div id="ver Preguntas">
                <?php $num_preguntas = sizeof($preguntas); ?>
                <?php if (($num_preguntas > 0)) : ?>
                    <table class="table table-light table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Preguntas de los usuarios</th>
                            <th></th>
                        </tr>
                        <?php for ($i = 0; $i < $num_preguntas; $i++) : ?>
                            <tr>
                                <td><?php echo $preguntas[$i]['idPregunta']; ?></td>
                                <td><?php echo $preguntas[$i]['Pregunta']; ?></td>
                                <td><button class="btn btn-primary" idPregunta="<?php echo $preguntas[$i]['idPregunta']; ?>" id="responderPregunta">Responder</button></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                <?php endif; ?>
            </div>

            <?php include_once './Controlador/consultarRespuestas.php'; ?>
            <div id="ver Respuestas">
                <?php $num_respuestas = sizeof($respuestas); ?>
                <?php if ($num_respuestas > 0) : ?>
                    <table class="table table-primary table-sm">
                        <tr>
                            <th>No. de pregunta</th>
                            <th>Respuesta</th>
                            <th>Responde el coordinador:</th>
                        </tr>
                        <?php for ($i = 0; $i < $num_respuestas; $i++) : ?>
                            <tr>
                                <td><?php echo $respuestas[$i]['idPregunta']; ?></td>
                                <td><?php echo $respuestas[$i]['Respuesta']; ?></td>
                                <td><?php echo $respuestas[$i]['Nombre']; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <!-- Button trigger modal -->
    <button id="mostrarModal" style="visibility: hidden;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal para agregar una pregunta -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agrega una nueva respuesta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./Controlador/registroRespuesta.php" method="POST" class="row g-3">
                        <div class="mb-3">
                            <label for="pregunta" class="form-label">Respuesta:</label>
                            <textarea class="form-control" name=" respuesta" id="respuesta" rows="3" required></textarea>
                        </div>
                        <input type="hidden" id="idPregunta" name="idPregunta">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const botones = document.querySelectorAll('#responderPregunta');
        botones.forEach(boton => {
            boton.addEventListener('click', event => {
                document.getElementById('idPregunta').value = event.target.getAttribute('idPregunta');
                document.getElementById('mostrarModal').click();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>