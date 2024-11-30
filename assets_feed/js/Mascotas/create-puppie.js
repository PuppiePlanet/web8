document.addEventListener('DOMContentLoaded', function() {
    if (typeof selectRazaChoices !== 'undefined') {
        selectRazaChoices.destroy(); // Destruye la instancia anterior si existe
    }
    selectRazaChoices = new Choices('#cod_raza', {
        searchEnabled: true,
        removeItemButton: true,
        itemSelectText: '',
        allowHTML: true
    });
});

document.getElementById('cod_especie').addEventListener('change', function() {
    var especieId = this.value;
    var url = baseUrl + 'mascotas/mostrar_razas/' + especieId;
    // Verifica si hay una instancia de Choices y limpia las opciones actuales.
    if (selectRazaChoices) {
        selectRazaChoices.clearChoices();
        selectRazaChoices.clearStore();
    }

    // Procede a cargar nuevas razas solo si el ID de la especie es válido (no vacío).
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

const alertBox = document.querySelector('.alert');
const form = document.getElementById('formMascota');
let mensaje="";
form.addEventListener('submit', function(e) {    
    e.preventDefault(); 
    let fileField = document.getElementById('imagen');
    if (fileField.files.length > 0) {
        const inputs = form.querySelectorAll("input, select, textarea");
        inputs.forEach(input => {
            input.classList.remove('input-error');
            const errorSpan = document.getElementById(input.name + '-error');
            if (errorSpan) errorSpan.innerHTML = ''; // Limpia el mensaje previo
        });
        var formData = new FormData(this);
        var url = baseUrl + 'mascotas/upsert';
        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => { 
            
            mensaje=data.message;
            if (data.status == 'success') {
                id_mascota = data.id_mascota;
                subir_foto(id_mascota);                
            } else {    
                alertBox.innerHTML=mensaje;                  
                alertBox.classList.add('alert-danger');
                alertBox.classList.remove('alert-success');
                alertBox.style.display = 'block'; 
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
            // Manejo post-envío aquí, como mostrar un mensaje de éxito
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    } else {
        alertBox.innerHTML ="Por favor, selecciona una imagen para tu mascota.";  
        alertBox.classList.add('alert-danger');
        alertBox.classList.remove('alert-success');
        alertBox.style.display = 'block';         
    }
});

function subir_foto(id_mascota) {
    let formData = new FormData();
    let fileField = document.getElementById('imagen');
    let urlList = baseUrl + 'mascotas/index';                              
    if (fileField.files.length > 0) {
        formData.append('image', fileField.files[0]);
        
            url = baseUrl + "mascotas/subir_foto/" + id_mascota
            fetch(url, {
                method: 'POST',
                body: formData 
            })
            .then(response => response.json())
            .then(data => {                
                if (data.status === 'success') {
                    alertBox.innerHTML=mensaje;
                    alertBox.classList.add('alert-success');
                    alertBox.classList.remove('alert-danger');
                    alertBox.style.display = 'block';  
                    // redirecciona después de 5 segundos
                    setTimeout(() => {                    
                        window.location.href = urlList;
                    }, 5000);                
                }else{                    
                    alertBox.innerHTML =data.message;
                    alertBox.classList.add('alert-danger');
                    alertBox.classList.remove('alert-success');
                    alertBox.style.display = 'block'; 
                    setTimeout(() => {                    
                        window.location.href = urlList;
                    }, 5000);                
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        
    } else {
        alertBox.innerHTML ="Por favor, selecciona una imagen para tu mascota.";  
        alertBox.classList.add('alert-danger');
        alertBox.classList.remove('alert-success');
        alertBox.style.display = 'block';         
    }
}

document.getElementById("imagen").addEventListener("change", () => {
    const imagenPreview = document.getElementById("imagen-preview");
    const archivoImagen = document.getElementById("imagen").files[0];

    if (archivoImagen) {
        const urlImagen = URL.createObjectURL(archivoImagen);
        imagenPreview.src = urlImagen;
        imagenPreview.style.display = "block";
        //document.getElementById("userfile").value = archivoImagen.name; //agregé
    } else {
        imagenPreview.src = "";
        imagenPreview.style.display = "none";
        //document.getElementById("userfile").value = ""; //agregé
    }
});