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
<body class="d-flex flex-column">
        <div class="container text-center">
            <div class="row align-items-center">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                                    <a class="nav-link" href="<?= base_url(); ?>servicios">Servicio</a>
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
                                <a id="btnLogin" class="btn btn-lg btn-primary btn-puppie-color">INGRESAR</a>
                            </form>
                        </div>
                    </div>
                </nav><br><br>
            </div>
        </div>
    
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Contenido para Login -->
      <div class="modal-body" id="loginContent">
        <h5 class="modal-title" id="authModalLabel">Login</h5>
        <!-- Aquí tu formulario de login -->
        <form id="FormLogin">
          <div class="d-grid gap-2 col-12 mx-auto">
            <input type="text" name="mail" id="mail" class="form-control" placeholder="Mail">
            <br>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" >
            <br>
            <button type="button" id="btnIngresar" class="btn btn-lg btn-primary btn-puppie-color">Ingresar</button>
          </div>
            <br>
          <span>O</span>
          <br><br>
          <div class="d-grid gap-2 col-12 mx-auto">
          <div class="g-signin2" data-onsuccess="onSignIn"></div>

            <button type="button" id="btnIngGoogle"class="btn btn-outline-danger btn-lg">
              <img src="<?= base_url(); ?>assets/icons/google.png" alt="" class="me-2">
              Ingresar con Google
            </button>
          </div>
        </form>
      </div>
      
      <!-- Contenido para Registro -->
      <div class="modal-body" id="registerContent" style="display: none;">
        <h5 class="modal-title" id="authModalLabel">Registro</h5>
        <!-- Aquí tu formulario de registro -->
        <form id="FormRegistro">
          <div class="d-grid gap-2 col-12 mx-auto">
            <input type="text" name="mail" id="mailReg" class="form-control" placeholder="Mail">
            <br>
            <input type="password" name="pass" id="passReg" class="form-control" placeholder="Password" >
            <br>
            <button type="button" id="btnRegistro" class="btn btn-lg btn-primary btn-puppie-color">Crear Cuenta</button>
          </div>
            <br>
          <span>O</span>
          <br><br>
          <div class="d-grid gap-2 col-12 mx-auto">
            <button type="button" id="btnRegGoogle"class="btn btn-outline-danger btn-lg">
              <img src="<?= base_url(); ?>assets/icons/google.png" alt="" class="me-2">
              Iniciar con Google
            </button>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal-->

<div class="col-12 container text-center align-items-center flex-grow-1 min-vh-100 mb-auto">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <br>
        <img src="<?= base_url(); ?>assets/images/vector.png" height="800" width="800" class="img-fluid" alt="">
        <h1 class="opacity-75">UNETE A NUESTRA COMUNIDAD</h1><br>
        <p><a id="btnRegister" class="btn btn-lg btn-primary btn-puppie-color">REGISTRAR</a></p><br><br>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-02.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-03.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>                  </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-04.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span style="background-color: #99d9d9" class="carousel-control-prev-icon" aria-hidden="true"></span>      
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span style="background-color: #99d9d9" class="carousel-control-next-icon" aria-hidden="true"></span>                        
    </button>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>
</div>

<footer class="container-fluid text-white mt-auto d-flex flex-wrap justify-content-between py-3 my-4 border-top">
  
    
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
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/vanilla-datatables/dist/vanilla-dataTables.min.js"></script>
  <script>
    // Referencia al modal
    var authModal = new bootstrap.Modal(document.getElementById('authModal'));

    // Mostrar modal para Login
    document.querySelector("#btnLogin").addEventListener('click', function() {
    document.getElementById('loginContent').style.display = 'block';
    document.getElementById('registerContent').style.display = 'none';
    authModal.show();
    });

    // Mostrar modal para Registro
    document.querySelector("#btnRegister").addEventListener('click', function() {
    document.getElementById('loginContent').style.display = 'none';
    document.getElementById('registerContent').style.display = 'block';
    authModal.show();
    });
  </script>
  
</html>
