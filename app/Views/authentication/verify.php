<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Verificación de Número</title>
  <!-- Incluye Bootstrap CSS -->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="<?=base_url()?>assets/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/css/button.css" rel="stylesheet" type="text/css" />
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
    .pp-verify-general-link-box span {      
      cursor: pointer;
      color: rgba(127, 203, 203, 1) !important; /* Color del enlace */
      text-decoration-color: rgba(127, 203, 203, 1) !important; /* Color de la línea de subrayado */
    }

  </style>
</head>
<body>

<div class="container mt-5">
  <form class="form w-100 fv-plugins-bootstrap5" id="kt_verify_form" data-kt-redirect-url="<?=base_url()?>signin" action="#">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
      <img class="theme-light-show mx-auto mw-100 w-100px w-lg-200px mb-10 mb-lg-20" width="150" height="200" src="<?=base_url()?>assets/images/logo.png" alt=""> 
        <h2 class="text-center mb-2">Verificación de Código de Confirmación</h2>
        <div class="text-muted fw-semibold fs-5 mb-5">Ingrese el código de verificación que le enviamos al correo ingresado</div>
        <!-- Casillas cuadradas para ingresar el número -->
        <input type="hidden" name="email" id="email" value="<?= $correo_tutor ?>" />
        <input type="hidden" name="token" id="token" value="<?= $token_tutor ?>" />
        
        <div class="square-container d-flex justify-content-center">
          <input type="text" class="form-control square-input" name="digit1" id="digit1" maxlength="1" oninput="focusNext(this)" />
          <input type="text" class="form-control square-input" name="digit2" id="digit2" maxlength="1" oninput="focusNext(this)" />
          <input type="text" class="form-control square-input" name="digit3" id="digit3" maxlength="1" oninput="focusNext(this)" />
          <input type="text" class="form-control square-input" name="digit4" id="digit4" maxlength="1" oninput="focusNext(this)" />
          <input type="text" class="form-control square-input" name="digit5" id="digit5" maxlength="1" oninput="focusNext(this)" />
          <input type="text" class="form-control square-input" name="digit6" id="digit6" maxlength="1" />
        </div>
        <!-- Botón de verificación -->
        <div class="text-center mt-4">
          <button class="btn btn-puppie-color" id="validate">Verificar</button>
        </div>
          <!-- Contador de tiempo -->
        <div class="text-center mt-4" id="resend">
          <p id="timer">Volver a enviar código (<span id="countdown">60</span>)</p>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Incluye Bootstrap JS y Popper.js (necesario para algunos componentes de B;ootstrap) -->
<script src="<?=base_url()?>assets/global/plugins.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/scripts.bundle.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->
<script src="<?=base_url()?>assets/js/custom/authentication/verify/general.js"></script>
<script>
  const hostUrl = "<?=base_url()?>";        
</script>
</body>
</html> 