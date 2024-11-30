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
                                    <a class="nav-link" href="<?= base_url(); ?>servicios">Servicios</a>
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
                <object data="<?= base_url(); ?>assets/images/conejo-13.png" width="700" height="700"></object>
            </div>
    
            <div class="col-md-5">
            
                <p class="lead">
                    <h2 class="">Contáctanos</h2>
                    <h5>¡No te quedes con la duda! Estamos para atenderte, escribenos a hola@puppieplanet.com</h5>
                </p>
            </div> 
        </div>
    </div>
    <br><br><br>
    
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