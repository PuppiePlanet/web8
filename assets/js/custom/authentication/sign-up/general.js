
"use strict";
const toggleConfirm = document.getElementById('toggleConfirm');
const confirmPassword = document.getElementById('confirm-password');
const togglePassword = document.getElementById('togglePassword');
const password = document.getElementById('password');

toggleConfirm.addEventListener('click', function () {    
    // Cambia el tipo de input entre "password" y "text"
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPassword.setAttribute('type', type);
    // Alterna el ícono del ojo
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});



togglePassword.addEventListener('click', function () {    
    // Cambia el tipo de input entre "password" y "text"
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Alterna el ícono del ojo
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});

var KTSignupGeneral = function () {
    var form, submitButton, passwordMeter, validationInstance;

    var isValidPassword = function () {
        return 100 === passwordMeter.getScore();
    };

    var sendFormData = function () {
        const formData = new FormData(form);

        fetch(hostUrl + 'user/signup', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                window.location.href = `${hostUrl}user/verify/${data.token}/${document.getElementById('email').value}`;
            } else {                
                Swal.fire({
                    text: "¡Usuario duplicado!",
                    icon: "error",                    
                    buttonsStyling: !1,
                    confirmButtonText: "Aceptar",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(() => {
                    // Limpiar el formulario si el usuario está duplicado
                    form.reset();
                    // Reinicializar el medidor de contraseñas
                    passwordMeter.reset();
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    };

    var initializeValidation = function () {
        validationInstance = FormValidation.formValidation(form, {
            fields: {
                "first-name": {
                    validators: {
                        notEmpty: {
                            message: "First Name is required"
                        }
                    }
                },
                "last-name": {
                    validators: {
                        notEmpty: {
                            message: "Last Name is required"
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: "Se requiere una dirección de correo electrónico."
                        },
                        emailAddress: {
                            message: "No es una dirección de correo electrónico válida."
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Se requiere la contraseña."
                        },
                        callback: {
                            message: "Por favor, introduce una contraseña válida.",
                            callback: isValidPassword
                        }
                    }
                },
                "confirm-password": {
                    validators: {
                        notEmpty: {
                            message: "Se requiere la confirmación de la contraseña."
                        },
                        identical: {
                            compare: () => form.querySelector('[name="password"]').value,
                            message: "The password and its confirm are not the same"
                        }
                    }
                },
                toc: {
                    validators: {
                        notEmpty: {
                            message: "La contraseña y su confirmación no coincide."
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger({
                    event: {
                        password: !1
                    }
                }),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: ""
                })
            }
        });

        form.querySelector('input[name="password"]').addEventListener("input", function () {
            if (this.value.length > 0) {
                validationInstance.updateFieldStatus("password", "NotValidated");
            }
        });
    };

    var handleSubmit = function () {
        submitButton.addEventListener("click", function (event) {
            event.preventDefault();
            validationInstance.revalidateField("password");
            validationInstance.validate().then(function (status) {
                if (status === "Valid") {
                    submitButton.setAttribute("data-kt-indicator", "on");
                    submitButton.disabled = true;

                    setTimeout(function () {
                        submitButton.removeAttribute("data-kt-indicator");
                        submitButton.disabled = false;
                        sendFormData();                                                
                    }, 1500);
                } else {
                    Swal.fire({
                        text: "Lo sentimos, parece que se han detectado algunos errores. Inténtalo de nuevo.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Aceptar",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    };

    return {
        init: function () {
            form = document.querySelector("#kt_sign_up_form");
            submitButton = document.querySelector("#kt_sign_up_submit");
            passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter="true"]'));

            initializeValidation();
            handleSubmit();
        }
    };
}();



KTUtil.onDOMContentLoaded(function () {
    KTSignupGeneral.init();
});
