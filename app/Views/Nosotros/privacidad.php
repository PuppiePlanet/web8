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
                                    <img src="<?= base_url(); ?>assets/icons/Muro.png" alt="" class="me-2">
                                    <a class="nav-link" href="<?= base_url(); ?>servicios">Servicios</a>
                                </li>
                                <li class="nav-item d-flex align-items-center">
                                    <img src="<?= base_url(); ?>assets/icons/Mensajes.png" alt="" class="me-2">
                                    <a class="nav-link" href="<?= base_url(); ?>contacto">Contáctanos</a>
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
                             
    <div class="d-flex justify-content-between"> 
        <h2 class="align-self-end mr-4">POLÍTICAS DE PRIVACIDAD</h2> 
        
    </div>
    <br>
    <div class="row">
        <h5>Introducción:</h5>
        <p>Bienvenido/a PuppiePlanet. Nuestra prioridad es garantizar la seguridad y la privacidad de nuestros usuarios. Esta política establece las pautas y las prácticas que seguimos para proteger su información personal y proporcionar un entorno seguro mientras utiliza nuestros servicios.</p>

        <h5>Recopilación de Datos Personales:</h5>
        <p>
            <strong>1. Información que Recopilamos:</strong> En PuppiePlanet, recopilamos información personal de los usuarios solo cuando es necesario para proporcionar nuestros servicios. Esto puede incluir su nombre, dirección de correo electrónico, información de contacto y otra información relevante.<br>
            <strong>2. Uso de Datos:</strong> Utilizamos los datos personales para mejorar nuestros servicios, brindar soporte al cliente, enviar comunicaciones importantes y garantizar el funcionamiento seguro del sitio web.<br>
            <strong>3. Seguridad de Datos:</strong> Implementamos medidas de seguridad técnicas y organizativas para proteger sus datos personales contra el acceso no autorizado, la divulgación o la modificación. Su información se almacena de manera segura y se cifra cuando sea necesario.<br>
        </p>
        <h5>Cookies y Tecnologías Similares:</h5>
        <p>Utilizamos cookies y tecnologías similares para mejorar su experiencia en nuestro sitio web y recopilar información no personal sobre su actividad en línea. Puede administrar la configuración de cookies en su navegador.</p>

        <h5>Compartir Datos con Terceros:</h5>
        <p>En algunos casos, podemos compartir datos con terceros de confianza, como proveedores de servicios técnicos y de pago. Estos terceros solo tienen acceso a la información necesaria para prestar los servicios solicitados y están obligados a proteger sus datos de acuerdo con las leyes aplicables.</p>

        <h5>Sus Derechos:</h5>
        <p>
            <strong>1. Acceso y Rectificación:</strong> Tiene el derecho de acceder a sus datos personales y corregir cualquier información inexacta.<br>
            <strong>2. Eliminación de Datos:</strong> Puede solicitar la eliminación de sus datos personales, sujeto a restricciones legales y reglamentarias.<br>
        </p>
        
        <h5> Cambios en la Política de Seguridad y Privacidad:</h5>
        <p>Esta política puede actualizarse ocasionalmente para reflejar cambios en nuestras prácticas de seguridad y privacidad. Notificaremos cualquier cambio significativo y le proporcionaremos la oportunidad de revisar y aceptar las nuevas condiciones antes de continuar utilizando nuestros servicios.</p>

        <h5>Contacto:</h5>
        <p>Si tiene preguntas o inquietudes sobre nuestras políticas de seguridad y privacidad, no dude en ponerse en contacto con nosotros a través de contacto@puppieplanet.com.</p>
        <p>Al usar PuppiePlanet, usted acepta las políticas y prácticas descritas en este documento. Su privacidad y seguridad son importantes para nosotros, y estamos comprometidos en protegerlos mientras disfruta de nuestros servicios.</p>
        <br>
        <p>Fecha de última actualización: 06 de noviembre 2023</p>

    </div>
    
</div>                
<footer class="container-fluid text-white mt-auto d-flex flex-wrap justify-content-between py-3 border-top">
  
    
  
  <div class="col-md-4">
    <img src="<?= base_url(); ?>assets/images/logoblanco.png" class="footer-logo" alt="Puppieplanet"   width="128" height="128">
    <ul class="nav">
      <li class="nav-item"><a href="<?= base_url(); ?>condiciones" class="nav-link px-2 footerPuppie">Términos y Condiciones</a></li>
      <li class="nav-item"><a href="<?= base_url(); ?>privacidad" class="nav-link px-2 footerPuppie">Política de Privacidad</a></li>
    </ul>
  </div>
  
  <div class="col-md-2">
    <ul class="nav">
      <li class="nav-item"><a href="<?= base_url(); ?>condiciones" class="nav-link px-2 footerPuppie">Términos y Condiciones</a></li>
      <li class="nav-item"><a href="<?= base_url(); ?>privacidad" class="nav-link px-2 footerPuppie">Política de Privacidad</a></li>
    </ul>
  </div>
  


</footer>
</body>
