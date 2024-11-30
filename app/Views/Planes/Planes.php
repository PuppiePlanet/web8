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
        <div class="container marketing">
          <br><br>
<div class="row featurette">
        <div class="row align-items-center">
        <div class="col-md-6">
            <object data="<?= base_url(); ?>assets/images/vector-02.png" width="600" height="600"></object>
        </div>
        <div class="col-md-6">
            <h2 class="featurette-heading">
                <span class="text-muted"> </span><object data="<?= base_url(); ?>assets/images/pre1.png" width="450" height="200"></object></h2>
            <p class="lead">
            
            </p>
        </div>
        
        </div>
    </div><br><br>
    <div class="row text-center">
        <div class="col-12">
            <h2 class="">Precios</h2>
            <h5>Encuentra el Plan mas adecuado para ti</h5>
        </div><br><br><br><br><br>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-1 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-xs btn-primary btn-puppie-color">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-1 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-xs btn-primary btn-puppie-color">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-1 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-xs btn-primary btn-puppie-color">Contact us</button>
          </div>
        </div>
      </div>
    </div>
      
      
    </div>

</div>
</div><br><br><br><br>
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