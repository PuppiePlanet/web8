<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Tutores</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url(); ?>assets/css/button.css" rel="stylesheet"/>
    <style>
      
    </style>
</head>
<body>    
    <form id="myForm">
        
        <div class="container">                              
            
            <div class="d-flex justify-content-between"> <!-- Añade 'd-flex' para activar flexbox y 'justify-content-between' para separar el título de la imagen -->
                <h2 class="align-self-end mr-4">Registrate Aquí...</h2> <!-- 'align-self-end' alinea el título a la parte inferior y 'mb-0' elimina el margen inferior por defecto del título -->
                <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> <!-- 'mr-3' añade un margen a la derecha -->
            </div>
            <br>
  
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="mb-3">                        
                        <input class="form-control" name="rut" type="text" id="rut" maxlength="20" placeholder="Rut"  oninput="this.value = this.value.toUpperCase();" autofocus required>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>registro/listar" type="button">Listar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">                        
                        <input class="form-control" name="nombres" id="nombres" type="text"  maxlength="100" placeholder="Nombres" >
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="apellidos" id="apellidos" type="text"  maxlength="100" placeholder="Apellidos">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="direccion" id="direccion" type="text"  maxlength="100" placeholder="Dirección">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="ciudad" id="ciudad" type="text"  maxlength="100" placeholder="Ciudad">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                    <select name="pais" id="pais" class="form-select" aria-label="Pais">
                        <option selected>Selecciona tu país.</option>
                        <?= $stringCombo ?>
                      </select>                                              
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="fono" id="fono" type="text"  maxlength="100" placeholder="Fono">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="correo" id="correo" type="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        
                        <input class="form-control" name="password" id="password" type="password"  maxlength="100" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">                        
                        <input class="form-control" name="password2" id="password2" type="password"  maxlength="100" placeholder="Repite password">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary btn-puppie-color" id="sendBtn" type="button">Registrar</button>                    
                </div>
            </div>
        </div>            
        
    </form>

</body>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validarut.js"></script>
<script>
    document.getElementById('rut').addEventListener('change', function() {
        Rut(this.value);
    });

    

    document.getElementById('sendBtn').addEventListener('click', function(event) {
        event.preventDefault();
        enviarPorAjax('insert');
        
    });
    
    document.getElementById('actualizar').addEventListener('click', function(event) {
        event.preventDefault();
        enviarPorAjax('update');
        
    });
    function enviarPorAjax(valor) {
        var baseURL = "<?= base_url(); ?>";
        // Crear objeto XMLHttpRequest
        var xhr = new XMLHttpRequest();
        // Capturar los datos del formulario
        var formData = new FormData(document.getElementById('myForm'));
        if (valor == "insert"){
            xhr.open('POST', baseURL +'registro/grabar', true);
        }else{
            xhr.open('POST', baseURL +'registro/actualizar', true);
        }
        
        // Función que se ejecuta al cambiar el estado del objeto
        xhr.onreadystatechange = function() {
            // Si la petición finalizó correctamente y la respuesta es 200 (OK)
            if (xhr.readyState == 4 && xhr.status == 200) {                
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                //let respuesta = json['respuesta']
                if (json['respuesta']=="ok"){
                    alert("registro ok")
                }else{
                    alert("no se pudo registrar")
                }
            }
        };

        // Enviar la petición
        xhr.send(formData);
    }



</script>   
</html>
