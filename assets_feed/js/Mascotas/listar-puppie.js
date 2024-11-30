function sendPetId(idMascota) {
    // Crear el formulario de manera dinámica
    var form = document.createElement('form');
    form.setAttribute('method', 'post');
    form.setAttribute('action', baseUrl+'mascotas/edit_puppie');
    
    // Crear un campo input de tipo hidden para enviar el id de la mascota
    var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
    input.setAttribute('name', 'id_mascota');
    input.setAttribute('value', idMascota);
    
    // Añadir el input al formulario
    form.appendChild(input);
    
    // Añadir el formulario al body (es necesario para enviarlo)
    document.body.appendChild(form);
    
    // Enviar el formulario
    form.submit();
}

