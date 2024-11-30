<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Verificación de Número</title>
  <!-- Incluye Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos adicionales para las casillas cuadradas -->
  <style>
    .square-input {
      width: 3em;
      text-align: center;
      margin: 0 0.6em;
    }
    .square-container {
     
      border-radius: 10px; /* Bordes redondeados */
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2); /* Sombra con desplazamiento */
      padding: 20px; /* Espaciado interno para las casillas */
      margin: auto; /* Centra el contenedor horizontalmente */
      margin-top: 50px; /* margen superior  */

    }
    .text-justify{
        text-align: justify!important;
    }

  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
        <img class="theme-light-show mx-auto mw-100 w-100px w-lg-200px mb-10 mb-lg-20" width="150" height="150" src="<?=base_url()?>assets/images/logo.png" alt=""> 
        <h3 class="text-center mb-2">Correo Electrónico Ya Registrado</h3>        
        <div class="text-justify mt-4">
            <p>¡Hola! Parece que el correo electrónico que has ingresado ya está asociado con una cuenta en nuestro sistema. Aquí tienes un par de opciones para proceder:<p>
            <ol>
                <li>
                    <p><strong>¿Recuerdas tu contraseña?</strong>
                        Si recuerdas tu contraseña y deseas iniciar sesión, puedes hacerlo directamente desde aquí: <strong><a target="_new" href="<?=base_url()?>signin">Iniciar sesión</a></strong>.
                    </p>
                </li>
                <li>
                    <p>
                        <strong>¿Olvidaste tu contraseña?</strong>
                        Si no recuerdas tu contraseña, no hay problema. Puedes fácilmente restablecerla. Haz clic en este enlace para <strong><a target="_new" href="#">restablecer tu contraseña</a></strong>, y te enviaremos las instrucciones a tu correo electrónico.
                    </p>
                </li>
            </ol>
            <p>Si tienes algún problema o necesitas asistencia adicional, no dudes en contactarnos. Estamos aquí para ayudarte.</p>
            <p>¡Gracias por ser parte de nuestra comunidad!</p>
        </div>      
    </div>
  </div>
</div>

<!-- Incluye Bootstrap JS y Popper.js (necesario para algunos componentes de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>