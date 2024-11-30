<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Puppie Planet</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="google-signin-client_id" content="342708568954-r3jldm37eugcnsgbg1d48d48006fncvi.apps.googleusercontent.com">
    <link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url(); ?>assets/css/button.css" rel="stylesheet"/>
    <link href="<?= base_url(); ?>assets/css/logo.css" rel="stylesheet"/>
    <link href="<?= base_url(); ?>assets/css/footer.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/vanilla-datatables/dist/vanilla-dataTables.min.css">
    <!--<link href="<?= base_url(); ?>assets/css/carousel.css" rel="stylesheet"/>-->
</head>
<style>
        /* CSS para centrar el logo en el footer usando Flexbox */
        .footer {
            display: flex;                  /* Utiliza Flexbox */
            justify-content: center;        /* Centra horizontalmente */
            align-items: center;            /* Centra verticalmente */
            height: 100px;                  /* Ajusta la altura del footer */
            background-color: #f1f1f1;      /* Color de fondo opcional */
        }

        .footer-logo {
            max-width: 100px;               /* Tamaño máximo del logo */
            height: auto;                   /* Mantiene la proporción del logo */
        }
    </style>

<body class="d-flex flex-column">
<div class="container text-center">
            <div class="row align-items-center">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Inicio.png" alt="" class="me-2">
                                    <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Inicio</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Mensajes.png" alt="" class="me-2">
                                    <a class="nav-link" href="<?= base_url(); ?>contacto">Contáctanos</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Mensajes.png" alt="" class="me-2">
                                    <a class="nav-link" href="<?= base_url(); ?>privacidad">Políticas de Privacidad</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/privacidad.png" alt="" class="me-2">
                                    <a class="nav-link" href="<?= base_url(); ?>condiciones">Términos y Condiciones</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128">
                            </form>
                        </div>
                    </div>
                </nav><br><br>
            </div>
        </div>
<div class="container marketing">
<br><br><br>
<div class="row featurette">
    <div class="row align-items-center">
        <div class="col-md-7">
            <object data="<?= base_url(); ?>assets/images/mascotasfelices.png" width="700" height="500"></object>
        </div>
    
        <div class="col-md-5">
            <h2 class="featurette-heading">
                <span class="text-muted"> </span><object data="<?= base_url(); ?>assets/images/serv.png" width="370" height="200"></object></h2>
            <p class="lead">
            
            </p>
        </div>
        
        </div>
    </div>
    <br><br><br>
    <!-- Three columns of text below the carousel -->
    <div class="row text-center">
        <div class="col-12">
            <h2 class="">Nuestros Servicios</h2>
            <h5>Felicidad garantizada para ti y tu pequeño</h5>
        </div><br><br><br><br><br><br>
      <div class="col-lg-1">
        
      </div>
      <div class="col-lg-2">
        <img src="<?= base_url(); ?>assets/images/icon-57.png" class="rounded-circle text-center" height="140" width="140" alt="">
        <br><br><br>
        <h5>Historial Médico</h5>
        <!--<p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2">
      <img src="<?= base_url(); ?>assets/images/icon-59.png" class="rounded-circle text-center" height="140" width="140" alt="">
        <br><br><br>
        <h5>Agenda de Citas</h5>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2">
      <img src="<?= base_url(); ?>assets/images/icon-60.png" class="rounded-circle text-center" height="140" width="140" alt="">
        <br><br><br>
        <h5>Consulta con Expertos</h5>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2">
      <img src="<?= base_url(); ?>assets/images/icon-58.png" class="rounded-circle text-center" height="140" width="140" alt="">
        <br><br><br>
        <h5>Citas y Playdates</h5>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2">
      <img src="<?= base_url(); ?>assets/images/icon-61.png" class="rounded-circle text-center" height="140" width="140" alt="">
        <br><br><br>
        <h5>Chatea y Comparte</h5>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <br><br><br><br><br><br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Registro y seguimiento al
            <span class="text-muted">alcance de tu... ¿pata?</span></h2>
        <p class="lead">¡Da vida a la identidad única de tu peludo amigo con un perfil personalizado y
mantén al día su expediente médico. Olvídate de las fechas de vacunación
gracias a nuestras alertas. Además, ¡hacer citas es pan comido! Elige el
momento que mejor te venga y conecta con los expertos para mantener a tu
mascota feliz y saludable.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <object data="<?= base_url(); ?>assets/images/rs.png" width="500" height="500"></object>

      </div>
    </div>
    <br><br><br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¡Sé parte de la Puppie
            <span class="text-muted">Community!</span></h2>
        <p class="lead">¡Forma parte de una comunidad dedicada 100% a tu mascota! Comparte el amor
por tu amigo y crea nuevas redes con otros amantes de los animales, con quienes
podrás interactuar, hacer preguntas y compartir consejos sobre el cuidado de tus
mascotas, además de conocer nuevos amigos para tu pequeño amigo.</p>
      </div>
      <div class="col-md-5">
      <object data="<?= base_url(); ?>assets/images/pc.png" width="500" height="500"></object>

      </div>
    </div>

    <br><br><br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">¡Match
            <span class="text-muted"><em>Pawfecto!</em></span></h2>
        <p class="lead">¿Estás buscando un compañero fiel para tu mascota? Crea perfiles, desliza y
encuentra las mejores amistades y organizar divertidas playdates. La diversión
para tus mascotas nunca había sido tan fácil. ¡Únete a la diversión y deja que
las colas comiencen a moverse!</p>
      </div>
      <div class="col-md-5 order-md-1">
      <object data="<?= base_url(); ?>assets/images/mt.png" width="500" height="500"></object>

      </div>
    </div>

    
    <br><br><br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Puppie Premium:<span class="text-muted">¡Más diversión
y cuidados!</span></h2>
        <p class="lead">¿Quieres elevar la experiencia Puppie? Experimenta una nueva forma de disfrutar
con tu mascota: participa en emocionantes concursos, comparte videos adorables
y accede a una red completa de peluqierías, clínicas y veterinarias dedicadas a
cuidar de tu compañero peludo en todo momento. Además, te proporcionamos
información sobre alojamientos pet friendly para que tus pequeños amigos estén
cómodos cuando estés fuera de casa. ¡Así que despreocúpate, Puppie se encargará
del resto!</p>
      </div>
      <div class="col-md-5">
      <object data="<?= base_url(); ?>assets/images/pr.png" width="500" height="500"></object>

      </div>
    </div>

    <br><br><br>

    <!-- /END THE FEATURETTES -->
    

  </div><!-- /.container -->

  <footer class="container-fluid text-white mt-auto d-flex flex-wrap justify-content-between py-3 border-top">
  
    
  
  <div class="col-md-4">
    <img src="<?= base_url(); ?>assets/images/logoblanco.png" class="footer-logo" alt="Puppieplanet"   width="128" height="128">
  </div>
  <div class="col-md-2">
    <ul class="nav">
      <li class="nav-item"><a href="<?= base_url(); ?>condiciones" class="nav-link px-2 footerPuppie">Términos y Condiciones</a></li>
      <li class="nav-item"><a href="<?= base_url(); ?>privacidad" class="nav-link px-2 footerPuppie">Política de Privacidad</a></li>
    </ul>
  </div>
  
  


</footer>
</body>