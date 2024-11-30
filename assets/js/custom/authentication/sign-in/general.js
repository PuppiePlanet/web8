"use strict";
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

togglePassword.addEventListener('click', function () {    
    // Cambia el tipo de input entre "password" y "text"
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Alterna el ícono del ojo
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

// Función principal para el manejo de inicio de sesión
var KTSigninGeneral = function () {
    var form, submitButton, validator, btn, icon;
    return {
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitButton = document.querySelector("#kt_sign_in_submit");
            // Validaciones del formulario
            validator = FormValidation.formValidation(form, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Se requiere Dirección de correo electrónico"
                            },
                            emailAddress: {
                                message: "El valor no es una dirección de correo electrónico válida"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "La contraseña es obligatoria"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            });
            // Manejo del evento click en el botón de envío
            submitButton.addEventListener("click", function (e) {
                e.preventDefault();
                validator.validate().then(function (status) {
                    
                    if (status == "Valid") {
                        e.preventDefault();
                        var datosFormulario = new FormData(document.getElementById('kt_sign_in_form'));
                        var url =  hostUrl+'user/login';
                        fetch(url, {
                            method: 'POST',
                            body: datosFormulario
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data)
                            btn="Ok, got it!!."
                            if (data.status=='success'){                            
                                window.location.href = hostUrl+'wall';       
                                //icon="success"
                            }else{
                                Swal.fire({
                                    text: data.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "¡Aceptar!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                                //form-control bg-transparent is-valid
                                //form-control bg-transparent is-invalid
                                document.getElementById("email").value=""
                                document.getElementById("email").classList.remove("is-valid");
                                document.getElementById("email").classList.add("is-invalid");
                                document.getElementById("password").value=""
                                document.getElementById("password").classList.remove("is-valid");
                                document.getElementById("password").classList.add("is-invalid");

                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;
                        // Simulación de un proceso de inicio de sesión
                        setTimeout(function () {
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;                        
                        }, 2000);
                    } else {
                        // Alerta de error
                        Swal.fire({
                            text: "Lo sentimos, parece que se han detectado algunos errores. Inténtalo de nuevo.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "¡Aceptar!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        document.getElementById("email").value("")
                    }
                });
            });
        }
    };
}();

// Cuando el contenido del DOM esté cargado, inicializa la función
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
