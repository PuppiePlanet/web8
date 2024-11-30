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

  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
    <img class="theme-light-show mx-auto mw-100 w-100px w-lg-200px mb-10 mb-lg-20" width="150" height="150" src="<?=base_url()?>assets/images/logo.png" alt=""> 
      <h2 class="text-center mb-2">Verificación de Número</h2>
      <!-- Casillas cuadradas para ingresar el número -->
      <div class="square-container d-flex justify-content-center">
        <input type="text" class="form-control square-input" id="digit1" maxlength="1" oninput="focusNext(this)" />
        <input type="text" class="form-control square-input" id="digit2" maxlength="1" oninput="focusNext(this)" />
        <input type="text" class="form-control square-input" id="digit3" maxlength="1" oninput="focusNext(this)" />
        <input type="text" class="form-control square-input" id="digit4" maxlength="1" oninput="focusNext(this)" />
        <input type="text" class="form-control square-input" id="digit5" maxlength="1" oninput="focusNext(this)" />
        <input type="text" class="form-control square-input" id="digit6" maxlength="1" />
      </div>

      <!-- Contador de tiempo -->
      <div class="text-center mt-4">
        <p id="timer">Tiempo restante: <span id="countdown">60</span> segundos</p>
      </div>

      <!-- Botón de verificación -->
      <div class="text-center mt-4">
        <button class="btn btn-primary" onclick="verifyNumber()">Verificar</button>
      </div>
    </div>
  </div>
</div>

<!-- Incluye Bootstrap JS y Popper.js (necesario para algunos componentes de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Lógica para enfocar la siguiente casilla al ingresar un dígito
  function focusNext(input) {
    const nextInput = input.nextElementSibling;
    if (nextInput && input.value.length === 1) {
      nextInput.focus();
    }
  }

  // Lógica para la verificación del número
  function verifyNumber() {
    // Aquí debes agregar la lógica para enviar el número ingresado al servidor (usando Ajax, por ejemplo)
    // y para manejar la respuesta del servidor.
    // Puedes utilizar JavaScript y CodeIgniter para esto.
    alert("Lógica de verificación no implementada aún.");
  }

  // Lógica para el contador de tiempo
  let secondsRemaining = 60;
  const countdownElement = document.getElementById("countdown");

  function updateCountdown() {
    countdownElement.textContent = secondsRemaining;
    if (secondsRemaining > 0) {
      secondsRemaining--;
      setTimeout(updateCountdown, 1000);
    } else {
      alert("Tiempo caducado. Por favor, intente nuevamente.");
      // Puedes agregar más lógica aquí, como restablecer las casillas y reiniciar el contador.
    }
  }

  // Inicia el contador cuando la página se carga
  document.addEventListener("DOMContentLoaded", function () {
    updateCountdown();
  });
</script>

</body>
</html>