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
    <link href="<?= base_url(); ?>assets/css/subrayado.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/vanilla-datatables/dist/vanilla-dataTables.min.css">
    <!--<link href="<?= base_url(); ?>assets/css/carousel.css" rel="stylesheet"/>-->
</head>

  <style>
    
    .imageUser {
      width: 100px;
    height: 100px;
   border-radius: 80px;
   margin-left: 3px;
    }

    .card {
      border: none;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .post-author {
      font-size: 12px;
    }
    
    .post-location {
      font-size: 10px;
    }
  </style>

</head>

<body class="d-flex flex-column">
    <div class="container text-center">
            <div class="row align-items-center">
                <nav class="navbar navbar-expand-md ">
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
                                    <img src="<?= base_url(); ?>assets/icons/Muro.png" alt="" class="me-2">
                                    <a class="nav-link" href="#">Servicio</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Precio.png" alt="" class="me-2">
                                    <a class="nav-link" href="#">Planes</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Mensajes.png" alt="" class="me-2">
                                    <a class="nav-link" href="#">Contacto</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <a id="btnLogin" class="btn btn-xs btn-primary btn-puppie-color">INGRESAR</a>
                            </form>
                        </div>
                    </div>
                </nav><br><br>
            </div>
        </div>

        <div class="col-2 bg-light">

<!-- Menú lateral -->
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Inicio</a>
  <a href="#" class="list-group-item list-group-item-action">Servicios</a> 
  <a href="#" class="list-group-item list-group-item-action">Planes</a>
  <a href="#" class="list-group-item list-group-item-action">Contacto</a>
</div>
<!-- Fin menú lateral -->

</div>

<div class="col-10">
<div class="container py-5">

    <div class="row">

      <div class="col-12 col-md-6">

        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title mb-2">Gasparthecat <small class="text-muted post-author">10 hrs</small></h5>
            <p class="post-location mb-3">Quilpué</p>
            <p class="card-text">Descansando bajo el solcito! Merecido relajo (: </p>

            <p>
              <small class="text-muted">45 Likes</small>
            </p>

            <p>
              <small class="text-muted">34 Comentarios</small>
            </p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-2">DoggoFlojo <small class="text-muted post-author">2 días</small></h5>
            <p class="post-location mb-3">Viña del Mar</p>
            <p class="card-text">De chill en la playa :*</p>

            <p>
              <small class="text-muted">123 Likes</small>
            </p>

            <p>
              <small class="text-muted">68 Comentarios</small>
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

</div>





  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <footer class="container-fluid text-white mt-auto d-flex flex-wrap justify-content-between py-3 border-top">
        <div class="col-md-4">
            <img src="<?= base_url(); ?>assets/images/logoblanco.png"  alt="Puppieplanet"   width="128" height="128">
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Servicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Planes</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Contacto</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <form>
                <h5>NEWSLETTER</h5>
                <p>Súscribete para recibir ofertas exclusivas y noticias de PuppiePlanet</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Correo electrónico">
                    <button class="btn btn-primary btn-puppie-color" type="button">Subscribirse</button>
                </div>
            </form>
        </div>
        <div class="col-md-12 border-top">
            <ul class="nav">
                <li class="nav-item"><a href="<?= base_url(); ?>condiciones" class="nav-link px-2 footerPuppie">Términos & Condiciones &nbsp;&nbsp;|</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>privacidad" class="nav-link px-2 footerPuppie">Políticas de privacidad &nbsp;&nbsp;|</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Accesibilidad &nbsp;&nbsp;|</a></li>
                <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
                <li class="nav-item"><a href="#" class="nav-link px-2 footerPuppie">Legalidad &nbsp;&nbsp;|</a></li>
            </ul>
        </div>
    </footer>
  </body>
</html>