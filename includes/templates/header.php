<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <?php
       $archivo = basename($_SERVER['PHP_SELF']);
       $pagina = str_replace(".php", "", $archivo);
       if ($pagina == "invitados" || $pagina == "index") {
           echo '<link rel="stylesheet" href="css/colorbox.css">';
       } elseif($pagina == 'conferencia'){
           echo '<link rel="stylesheet" href="css/lightbox.css">';
       }
    ?>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Barlow+Condensed|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    

    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina?>">

    <div class="barra">
        <div class="contenedor">
            <div class="barra2">
                <div class="logo">
                    <a href="index.php">
                     <img src="img/logo.svg" alt="logo GdlWebcamp">
                    </a>
                </div>

                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="navegacion-principal">
                    <a href="conferencia.php" >Conferencia</a>
                    <a href="calendario.php" >Calendario</a>
                    <a href="invitados.php" >Invitados</a>
                    <a href="registro.php" >Reservaciones</a>
                </div>
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>

                <div class="informacion-evento">
                    <div class="info">
                        <p class="fecha"><i class="fas fa-calendar-alt"></i> Enero del 2020</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Armenia, Quindio</p>
                    </div>

                    <div class="titulo">
                        <h1 class="nombre-sitio">GdlWebcamp</h1>
                        <p class="slogan">La mejor conferencia de <span>diseño Web</span></p>
                    </div>
                </div>

            </div>
        </div>
    </header>