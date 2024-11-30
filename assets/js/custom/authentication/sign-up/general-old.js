"use strict";
var KTSignupGeneral=function(){
    var e,t,a,s,r=function(){
        return 100===s.getScore()
    };
        var enviar=function(){
        const formData = new FormData(e);   
        console.log(hostUrl)        
        // Realiza la solicitud POST al controlador de CodeIgniter
        fetch(hostUrl+'user/signup', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.status === 'success') {                                
                var emailElement = document.getElementById('email');
                var url =  hostUrl+'user/verify/'+data.token+'/'+emailElement.value;
                console.log( url);
                window.location.href = url;
            }else if (data.status === 'duplicate') {
                alert('Usuario duplicado');
            } else {
                alert('Error al crear el usuario');
            }
        })
        .catch(error => {
            // Maneja los errores de la solicitud
            console.error('Error:', error);

        });                

    };
    return{
        init:function(){
        e=document.querySelector("#kt_sign_up_form"),
        t=document.querySelector("#kt_sign_up_submit"),
        s=KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')),
        a=FormValidation.formValidation(e,{
            fields:{
                "first-name":{
                    validators:{
                        notEmpty:{
                        message:"First Name is required"
                        }
                    }
                },"last-name":{
                    validators:{
                        notEmpty:{
                            message:"Last Name is required"
                        }
                    }
                },email:{
                    validators:{
                        notEmpty:{
                            message:"Email address is required"
                        },emailAddress:{
                            message:"The value is not a valid email address"
                        }
                    }
                },password:{
                    validators:{
                        notEmpty:{
                            message:"The password is required"
                        },callback:{
                            message:"Please enter valid password",
                            callback:function(e){
                                if(e.value.length>0)return r()
                            }
                        }
                    }
                },"confirm-password":{
                    validators:{
                        notEmpty:{
                            message:"The password confirmation is required"
                        },identical:{
                            compare:function(){
                                return e.querySelector('[name="password"]').value
                            },message:"The password and its confirm are not the same"
                        }
                    }
                },toc:{
                    validators:{
                        notEmpty:{
                            message:"You must accept the terms and conditions"
                        }
                    }
                }
            },plugins:{
                trigger:new FormValidation.plugins.Trigger({
                    event:{
                        password:!1
                    }
                }),
                bootstrap:new FormValidation.plugins.Bootstrap5({
                    rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""
                })
            }
        }),t.addEventListener("click",(function(r){
            r.preventDefault(),
            a.revalidateField("password"),
            a.validate().then((function(a){
                "Valid"==a?(t.setAttribute("data-kt-indicator","on"),
                t.disabled=!0,
                setTimeout((function(){                    
                    t.removeAttribute("data-kt-indicator"),
                    t.disabled=!1,                    
                    Swal.fire({
                        text:"Formulario validado!",
                        icon:"success",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, lo crearemos !",
                        customClass:{
                            confirmButton:"btn btn-primary"                        
                        }                    
                    }).then((function(t){                        
                        t.isConfirmed&&(
                            enviar()                                                                                    
                        )
                    
                    }))
                }),1500)):Swal.fire({                    
                    text:"Lo sentimos, parece que se han detectado algunos errores. Inténtalo de nuevo.",
                    icon:"error",
                    buttonsStyling:!1,
                    confirmButtonText:"Ok, aqui vamos!",
                    customClass:{
                        confirmButton:"btn btn-primary"                    
                    }
                })
            }))
        })),e.querySelector('input[name="password"]').addEventListener("input",(function(){
            this.value.length>0&&a.updateFieldStatus("password","NotValidated")            
        }))
    }
}
}();
KTUtil.onDOMContentLoaded((function(){
    KTSignupGeneral.init()
}));