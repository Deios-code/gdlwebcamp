<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <title></title>
    <meta name="description" content="" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/pushbar.css">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php","",$archivo);
      if($pagina == 'invitado' || $pagina == 'index'){
        echo '<link rel="stylesheet" href="css/colorbox.css" />';
      } else if($pagina == 'conferencia'){
        echo '<link rel="stylesheet" href="css/lightbox.css" />';
      }
    ?>

    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <meta name="theme-color" content="#fafafa" />
  </head>
  <body class="<?php echo $pagina;?>">
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fas fa-calendar-alt"></i> 30-04-2020</p>
            <p class="ciudad">
              <i class="fas fa-map-marker"></i> Yopal, Casanare
            </p>
          </div>
          <h1 class="nombre-sitio nomargin">PracticaWeb</h1>
          <p class="slogan">El mejor sitio web <span>Sobre diseño</span></p>
        </div>
        <!-- Fin informacion evento -->
      </div>
    </div>
  </header>
    <div class="barra">
      <div class="logo">
        <a href="index.php"><img src="img/logo.svg" alt="" /></a>
      </div>
      <div class="btn-movil">
      <a href="#" id="burger" data-pushbar-target="mypushbar1" class="burger">
          <i class="fas fa-bars"></i>
        </a>
      </div>
      <nav class="menu-principal">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitado.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div>
    <div data-pushbar-id="mypushbar1" data-pushbar-direction="left">
      <a data-pushbar-close="mypushbar1">
        <i class="btn-close fas fa-times" data-pushbar-close="mypushbar1"></i>
      </a>
      <nav class="menu-movil">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitado.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div>