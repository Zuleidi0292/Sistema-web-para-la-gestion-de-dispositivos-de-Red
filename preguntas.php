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
            border: solid 1px #000;
        }
    </style>
</head>

<body>
    <?php include_once './Controlador/consultarPreguntas.php'; ?>
    <div id="foro" class="container">
        <section>
            <header>
                <h2>Foro</h2>
            </header>

            <div>
                <button id="addPregunta">Agregar pregunta</button>
            </div>

            <div id="ver  Preguntas">
                <?php $num_preguntas = sizeof($preguntas); ?>
                <?php if ($num_preguntas > 0) : ?>
                    <table>
                        <tr>
                            <th>Pregunta</th>
                        </tr>
                        <?php for ($i = 0; $i < $num_preguntas; $i++) : ?>
                            <tr>
                                <td><?php echo $preguntas[$i]['Pregunta']; ?></td>
                                <td><button idPregunta="<?php echo $preguntas[$i]['idPregunta']; ?>" id="responderPregunta">Responder</button></td>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agrega una nueva pregunta</h1>
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