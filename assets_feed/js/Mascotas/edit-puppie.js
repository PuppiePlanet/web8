document.addEventListener('DOMContentLoaded', function() {
    if (typeof selectRazaChoices !== 'undefined') {
        selectRazaChoices.destroy(); // Destruye la instancia anterior si existe
    }
    selectRazaChoices = new Choices('#cod_raza', {
        searchEnabled: true,
        removeItemButton: true,
        itemSelectText: '',
        allowHTML: true}
    );
});

document.getElementById('cod_especie').addEventListener('change', function() {
    var especieId = this.value;
    var url = baseUrl + 'mascotas/mostrar_razas/' + especieId;
    // Verifica si hay una instancia de Choices y limpia las opciones actuales.
    if (selectRazaChoices) {
        selectRazaChoices.clearChoices();
        selectRazaChoices.clearStore();
    }

    if (especieId) {
        fetch(url)
        .then(response => response.json())
        .then(data => {
            // Asegúrate de que selectRazaChoices todavía existe y luego añade nuevas opciones.
            if (selectRazaChoices) {
                selectRazaChoices.setChoices(data.map(raza => ({
                    value: raza.cod_raza,
                    label: raza.raza,
                    selected: false,
                    disabled: false,
                })), 'value', 'label', true);
            }
        })
        .catch(error => console.error('Error:', error));
    } else {
        // Si no hay un ID de especie válido, asegúrate de que el select de razas está vacío.
        if (selectRazaChoices) {
            selectRazaChoices.clearChoices();
            selectRazaChoices.clearStore();
        }
    }
});

const alert = document.querySelector('.alert');
const form = document.getElementById('formMascota');
form.addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe de la manera tradicional
    
     // Limpia los mensajes y estilos previos
     const inputs = form.querySelectorAll("input, select, textarea");
     inputs.forEach(input => {
         input.classList.remove('input-error');
         const errorSpan = document.getElementById(input.name + '-error');
         if (errorSpan) errorSpan.innerHTML = ''; // Limpia el mensaje previo
     });
    var formData = new FormData(this);
    var url = baseUrl + 'mascotas/update';
    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => { 
        alert.innerHTML =data.message;       
        if (data.status == 'success') {
            id_mascota = data.id_mascota;            
            alert.classList.add('alert-success');
            alert.classList.remove('alert-danger');
            alert.style.display = 'block';              
            setTimeout(() => {
                alert.style.display = 'none';
            }, 5000);
        } else {                      
            alert.classList.add('alert-danger');
            alert.classList.remove('alert-success');
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
    .catch((error) => {
        console.error('Error:', error);
    });
});

function subirFoto() {
    let formData = new FormData();
    let fileField = document.getElementById('imagen');
    let id_mascota = document.getElementById('id_mascota').value;
    let imageMessage = document.getElementById('image-message');
    let updateButton = document.getElementById('updateProfileImage');

    if (fileField.files.length > 0) {
        formData.append('image', fileField.files[0]);
        url = baseUrl + "mascotas/subir_foto/" + id_mascota
        fetch(url, {
            method: 'POST',
            body: formData 
        })
        .then(response => response.json())
        .then(data => { 
            console.log(data);
            if (data.status === 'success') {
                imageMessage.style.display = "block";
                imageMessage.style.color = "rgb(121, 205, 205)"; // Color verde suave para éxito
                imageMessage.innerHTML = '<i class="bi bi-check-circle"></i> Imagen actualizada con éxito';
                updateButton.style.display = "none";                                
            } else {
                imageMessage.style.display = "block";
                imageMessage.style.color = "rgb(255, 102, 102)"; // Color rojo suave para error
                imageMessage.innerHTML = data.message;
            }                               
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    } else {        
        Swal.fire({
            text: "Por favor, selecciona una imagen para tu mascota.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "¡Aceptar!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    }
}

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
