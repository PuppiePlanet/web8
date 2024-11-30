// Lógica para la verificación del código
document.getElementById('validate').addEventListener('click', function(e) {
    e.preventDefault();
    var datosFormulario = new FormData(document.getElementById('kt_verify_form'));
    var url =  hostUrl+'user/validate';
    
    fetch(url, {
        method: 'POST',
        body: datosFormulario
    })
    .then(response => response.json())
    .then(data => {
        if (data.status=='ok'){
          if (tipoDispositivo=="app"){
            btn="¡Todo listo! dirígete a la aplicación para continuar con el registro."          
          }else{
            btn="Serás redireccionado en breve a la página de inicio de sesión."
          }          
          icon="success"
        }else{
          btn="Reintentar"
          icon="error"
        }
        Swal.fire({
            text:data.message,
            icon:icon,
            buttonsStyling:!1,
            confirmButtonText:btn,
            customClass:{
              confirmButton:"btn btn-primary"                        
            }                    
        }).then((function(t){                                    
            if (data.status=='ok'){
              if (tipoDispositivo!="app"){
                window.location.href = hostUrl;       
              }else{
                window.close();
              }
            }else{
              var inputs = document.querySelectorAll('.square-input');
              inputs.forEach(function(input) {
                  input.value = '';
              });
            }
        }))
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

document.addEventListener('DOMContentLoaded', function() {
  // Adjunta el event listener al cuerpo del documento o a un elemento padre
  document.body.addEventListener('click', function(e) {
      // Verifica si el elemento clickeado es el botón 'reenviar'
      if (e.target && e.target.id === 'pp_btn_resend') {
          e.preventDefault();
          // Aquí va la lógica de reenviar
          var datosFormulario = new FormData(document.getElementById('kt_verify_form'));
          var url =  hostUrl+'user/resend';
          
          fetch(url, {
              method: 'POST',
              body: datosFormulario
          })
          .then(response => response.json())
          .then(data => {
              if (data.status=='ok'){
                btn="Revisa tu bandeja de entrada para continuar con el proceso."
              }else{
                btn="Reintentar"
              }
              Swal.fire({
                  text:data.message,
                  icon:"success",
                  buttonsStyling:!1,
                  confirmButtonText:btn,
                  customClass:{
                    confirmButton:"btn btn-primary"                        
                  }                    
              }).then((function(t){                                    
                  if (data.status=='ok'){
                    //window.location.href = hostUrl;       
                  }else{
                    var inputs = document.querySelectorAll('.square-input');
                    inputs.forEach(function(input) {
                        input.value = '';
                    });
                  }
              }))
          })
          .catch(error => {
              console.error('Error:', error);
          });
      }
  });
});

//para avanzar por lo input sin tab
function focusNext(input) {
  const nextInput = input.nextElementSibling;
  if (nextInput && input.value.length === 1) {
    nextInput.focus();
  }
}

  // Lógica para el contador de tiempo para reenviar codigo
  let secondsRemaining = 5;
  const countdownElement = document.getElementById("countdown");
  const reEnviar='<div class="pp-verify-general-link-box span">\
  <span id="pp_btn_reenviar" class="">Volver a enviar código</span>\
  </div>'
  
  function updateCountdown() {
    countdownElement.textContent = secondsRemaining;
    if (secondsRemaining > 0) {
      secondsRemaining--;
      setTimeout(updateCountdown, 1000);
    } else {      
      // Obtener el div contenedor
      var divContenedor = document.getElementById('resend'); // Reemplaza con el ID de tu div contenedor      
      // Limpiar el contenido anterior del contenedor
      divContenedor.innerHTML = '';
      // Crear el nuevo div
      var nuevoDiv = document.createElement('div');
      nuevoDiv.className = 'link-puppie-primary pp-verify-general-link-box span';

      // Crear el span y añadirlo al div
      var span = document.createElement('span');
      span.id = 'pp_btn_resend';
      span.className = '';
      span.textContent = 'Volver a enviar código';
      nuevoDiv.appendChild(span);

      // Añadir el nuevo div al div contenedor      
      divContenedor.appendChild(nuevoDiv);

    }
  }

  // Inicia el contador cuando la página se carga
  document.addEventListener("DOMContentLoaded", function () {
    updateCountdown();
  });

  function detectarDispositivo() {
    const esMovil = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  
    if (esMovil) {
      return "app";      
    } else {
      return "web";      
    }
  }
  
  const tipoDispositivo = detectarDispositivo();

  