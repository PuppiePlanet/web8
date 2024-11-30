

document.getElementById("imagen").addEventListener("change", () => {
    const imagenPreview = document.getElementById("imagen-preview");
    const archivoImagen = document.getElementById("imagen").files[0];
    const updateButton = document.getElementById("updateProfileImage");
    const showModeButton = document.getElementById("show_mode");
    const mostrarIcon = document.getElementById("mostrar");

    if (archivoImagen) {
        const urlImagen = URL.createObjectURL(archivoImagen);
        imagenPreview.src = urlImagen;
        updateButton.style.display = "block"; // Muestra el botón "Subir y Actualizar"
        showModeButton.style.zIndex = "2"; // Mantén el botón encima de la imagen
        mostrarIcon.style.opacity = "0.3"; // Cambia la opacidad del icono a 0.3
    } else {
        // Solo limpia la previsualización si ya hay una imagen visible
        if (!imagenPreview.src.startsWith("blob:")) {
            imagenPreview.src = "#"; // Restablece el src por defecto
        }
        updateButton.style.display = "none"; // Oculta el botón "Subir y Actualizar"
        showModeButton.style.zIndex = "2"; // Restablece el z-index del botón
    }
});


function subirFoto() {
    let formData = new FormData();
    let fileField = document.getElementById('imagen');
    let updateButton = document.getElementById('updateProfileImage');
    let successMessage = document.getElementById('success-message');
    
    if (fileField.files.length > 0) {
        formData.append('image', fileField.files[0]);
        let url = baseUrl + "tutores/subir_foto";
        fetch(url, {
            method: 'POST',
            body: formData 
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            if (data.response == 'success') {
                console.log("path:",data.newImagePath);
                // Muestra el mensaje de éxito
                successMessage.style.display = "block";
                successMessage.innerHTML = '<i class="bi bi-check-circle"></i> Imagen actualizada con éxito';
                
                // Oculta el botón de subir
                updateButton.style.display = "none";
                 // Actualiza todas las imágenes con la clase 'avatar-img'
                let avatarImgs = document.querySelectorAll('.avatar-img');
                avatarImgs.forEach(function(img) {
                    img.src = data.newImagePath; // 'newImagePath' es el campo en la respuesta JSON que contiene el path de la nueva imagen
                });
            } else {
                Swal.fire({
                    text: "Ocurrió un problema al subir la imagen. Por favor, inténtalo de nuevo.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "¡Aceptar!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }                                                       
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    } else {
        Swal.fire({
            text: "Por favor selecciona una imagen..",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "¡Aceptar!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
        
    }
}

document.addEventListener('DOMContentLoaded', function() {
    //inicializamos select cuidades
    if (typeof selectCiudadChoices !== 'undefined') {
        selectCiudadChoices.destroy(); // Destruye la instancia anterior si existe
    }
    selectCiudadChoices = new Choices('#ciudad_tutor_select', {
        searchEnabled: true,
        removeItemButton: true,
        itemSelectText: '',
        allowHTML: true
    });
});

const alert = document.querySelector('.alert');
submitButton = document.querySelector("#guardar");
const form = document.getElementById('account');
submitButton.addEventListener("click", function (e) {    
    e.preventDefault();      
    // Limpia los mensajes y estilos previos
    const inputs = form.querySelectorAll("input, select, textarea");
    inputs.forEach(input => {
        input.classList.remove('input-error');
        const errorSpan = document.getElementById(input.name + '-error');
        if (errorSpan) errorSpan.innerHTML = ''; // Limpia el mensaje previo
    });
    var datosFormulario = new FormData(document.getElementById('account'));
    var url =  baseUrl+'tutores/actualizard';
    fetch(url, {
        method: 'POST',
        body: datosFormulario
    })
    .then(response => response.json())
    .then(data => { 
        console.log(data)
        alert.innerHTML =data.message;
        if (data.status=='success'){   
            // Agregar clase alert-success y eliminar alert-danger
            alert.classList.add('alert-success');
            alert.classList.remove('alert-danger');            
            // Mostrar la alerta
            alert.style.display = 'block';  
            // Ocultar la alerta después de 5 segundos
            setTimeout(() => {
                alert.style.display = 'none';
            }, 5000);
        }else{                                    
            // Agregar clase alert-danger y eliminar alert-success
            alert.classList.add('alert-danger');
            alert.classList.remove('alert-success');
            // Mostrar la alerta
            alert.style.display = 'block';  
            if (data.fields) {
                // Muestra el mensaje de error debajo del campo y añade el borde rojo
                for (const field in data.fields) {
                    const input = form.querySelector(`[name="${field}"]`);
                    if (input) {
                        input.classList.add('input-error');
                        const errorSpan = document.getElementById(field + '-error');
                        if (errorSpan) errorSpan.innerHTML = data.fields[field];
                    }
                }
            }
        }        
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
var idCiudad="";
document.getElementById('cod_pais').addEventListener('change', function() {

    // Obtener los elementos input y select        
    var div_ciudad_input = document.getElementById('div_ciudad_input');
    var div_ciudad_select = document.getElementById('div_ciudad_select');               
    // Verifica si hay una instancia de Choices y limpia las opciones actuales.
    if (selectCiudadChoices) {
        selectCiudadChoices.clearChoices();
        selectCiudadChoices.clearStore();
        idCiudad="";
    }

    var datosFormulario = new FormData(document.getElementById('account'));
    var url =  baseUrl+'mantenedor/ciudades/get_ciudades';     
    fetch(url, {
        method: 'POST',
        body: datosFormulario
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        if (data.status=='success'){                    
            //si el pais tiene asociada cuidades
             // Asegúrate de que selectRazaChoices todavía existe y luego añade nuevas opciones.
            if (selectCiudadChoices) {
                selectCiudadChoices.setChoices(data.data.map(ciudad => ({
                    value: ciudad.cod_ciudad,
                    label: ciudad.nombre,
                    selected: false,
                    disabled: false,
                })), 'value', 'label', true);
            }
            
            // Mostrar el select de ciudades y ocultar el input
            div_ciudad_input.style.display = 'none';
            div_ciudad_select.style.display = 'block';
        }else{                   
            //si el pais no tiene asociada cuidades Mostrar el input de ciudades y ocultar el select
            div_ciudad_input.style.display = 'block';
            div_ciudad_select.style.display = 'none';                
        }            
        
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
document.getElementById('ciudad_tutor_select').addEventListener('change', function() {
    idCiudad = this.value;
})



document.getElementById('genero').addEventListener('change', function() {
    const customGenderDiv = document.getElementById('custom-gender-div');
    
    if (this.value === 'Personalizado') {
        customGenderDiv.style.visibility = 'visible'; // Mostrar el campo para ingresar el género personalizado
    } else {
        customGenderDiv.style.visibility = 'hidden';  // Ocultar el campo si seleccionan otra opción
        document.getElementById('customGenero').value = ''; // Limpiar el campo de texto
    }
});

