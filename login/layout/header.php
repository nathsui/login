<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="assets/css/stylefaro.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <title>El Faro</title>
    </head>
 <header>
<body>
<nav class="navbar navbar-expand-lg navbar-light fidex-top" style="background-color: #e4f4f4;"> <!--Navbar-->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/minifaro.png" alt width="30" height="24"
                        class="d-inline-block align-text-top">El Faro</a>

                <div class="reloj"> <!--Reloj-->
                    <p class="fecha"></p>
                    <p class="tiempo"></p>
                </div>
                <script src="assets/js/reloj.js"></script>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" 
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="bienvenida.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entretenimiento.php">Entretenimiento</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Novedades
                            </a>
                            <ul class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="login.php">Iniciar Sesión</a></li>
                                <li><a class="dropdown-item" href="publicidad.php">Nuevos Articulos</a></li>
                                <li><a class="dropdown-item" href="formcontacto.php">Contacto</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="conf/cerrar_sesion.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselE" class="carousel slide" data-bs-ride="carousel"> <!--Carrusel-->
            <div class="carousel-indicators">
                <button type="button"
                    data-bs-target="#carouselE"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="slide 1"></button>
                <button type="button"
                    data-bs-target="#carouselE"
                    data-bs-slide-to="1"
                    aria-current="true"
                    aria-label="slide 2"></button>
                <button type="button"
                    data-bs-target="#carouselE"
                    data-bs-slide-to="2"
                    aria-current="true"
                    aria-label="slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="assets/img/eclipce.jpg.avif" class="d-block w-100"
                        alt>
                    <div class="carousel-caption">
                        <h5>Eclipce solar</h5>
                        <p> Cuándo será el eclipse solar más largo en varios miles de años
                            Conoce aquí la fecha clave para los seguidores de este tipo de evento astronómicos.
                        </p>
                        <a href="https://www.adnradio.cl/2024/04/08/segundo-eclipse-solar-de-2024-en-que-fecha-ocurrira-y-donde-se-vera-mejor-en-chile/" target="_blank" class="btn btn-primary mt-3">Leer más</a>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="assets/img/laU.jpeg" class="d-block w-100" alt>
                    <div class="carousel-caption">
                        <h5>LO MEJOR DEL DEPORTE</h5>
                        <p>El último campeón del fútbol chileno recibe en 
                        Talcahuano al líder del torneo en lo que será el 
                        partido más atractivo de la jornada 10. Transmite ADN Deportes.</p>
                        <a href="https://www.adnradio.cl/2024/04/27/el-partido-de-la-fecha-cuando-y-como-ver-en-vivo-el-partido-de-huachipato-ante-la-u-por-el-campeonato-nacional/" target="_blank" class="btn btn-primary mt-3">Leer más</a>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="assets/img/40horas.jpg.avif" class="d-block w-100" alt>
                    <div class="carousel-caption">
                        <h5>40 horas semanales</h5>
                        <p>¿Afecta la reducción a los trabajadores part time? 
                            Esto es lo que dice el Ministerio del Trabajo
                            El primer ajuste de la norma ya entró en vigor, 
                            permitiendo a los empleados reducir de 45 a 44 horas de trabajo a la semana.</p>
                        <a href="https://www.adnradio.cl/2024/04/28/40-horas-semanales-afecta-la-reduccion-a-los-trabajadores-part-time-esto-es-lo-que-dice-el-ministerio-del-trabajo/" target="_blank" class="btn btn-primary mt-3">Leer más</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-next" type="button"
                data-bs-target="#carouselE"
                data-bs-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>