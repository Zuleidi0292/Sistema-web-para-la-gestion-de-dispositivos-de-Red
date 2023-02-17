<!--Slider de promociones-->
<?php if ($_SERVER["REQUEST_URI"] != '/project/dispositivo.php') : ?>

    <div class="row g-0">
        <div id="carouselExampleCaptions" class="carousel slide mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img1.jpg" class="d-block w-100 image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <?php if ($_SESSION['tipo'] == 2) : ?>
                            <h5>Bienvenido Coordinador</h5>
                            <p>En este apartado podras visualizar tus dispositivos.</p>
                        <?php else : ?>
                            <h5>Productos más vendidos</h5>
                            <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img2.jpg" class="d-block w-100 image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Productos más vendidos</h5>
                        <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img3.jpg" class="d-block w-100 image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Productos más vendidos</h5>
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
        </div>
    </div>
<?php endif; ?>

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
                    <?php if (
                        $_SESSION['tipo'] == 3
                    ) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Mis compras</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="dispositivo.php">Dispositivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="preguntas.php">Preguntas</a>
                        </li>
                    <?php endif; ?>
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