<form id="myForm">
    <div class="container">                              
        <div class="d-flex justify-content-between"> 
            <h2 class="align-self-end mr-4"><?= $titulo?></h2> 
            <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> 
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Contraseña actual</h6>
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    <input name="pass_tutor" id="pass_tutor" type="hidden"  value="<?= $pass_tutor ?>">
                    <input name="token_tutor" id="token_tutor" type="hidden"  value="<?= $token_tutor ?>">
                    <input class="form-control" name="cactual" type="text" id="cactual" maxlength="200" >
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores" type="button">Volver</a>&nbsp;&nbsp;
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Nueva contraseña</h6>
                    <input class="form-control" name="cnueva" type="text" id="cnueva" maxlength="200" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Repite contraseña</h6>
                    <input class="form-control" name="crepite" type="text" id="crepite" maxlength="200" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary btn-puppie-color" id="editar" type="button">Grabar</button>                    
            </div>
        </div>
    </div>         
    <br>   
</form>
<script>
    document.getElementById('editar').addEventListener('click', function(event){
        event.preventDefault();
        enviarPorAjax();
    });
    function enviarPorAjax(){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'tutores/actualizarc', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Modificar contraseña tutor','Registro editado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Modificar contraseña tutor','Registro no se pudo editar','error')
                        document.getElementById("myForm").reset();
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Modificar contraseña tutor','No se permite espacios en blanco','error')
                            document.getElementById("myForm").reset();
                        }else{
                            if (json['respuesta']=="no coincide actual"){
                                swal('Modificar contraseña tutor','Contraseña no coincide con la actual','error')
                                document.getElementById("myForm").reset();
                            }else{
                                if (json['respuesta']=="no coinciden"){
                                    swal('Modificar contraseña tutor','Contraseñas nuevas no coinciden entre sí','error')
                                    document.getElementById("myForm").reset();
                                }else{
                                    if (json['respuesta']=="minimo"){
                                    swal('Modificar contraseña tutor','La contraseña nueva debe tener un mínimo de 8 carateres','error')
                                    document.getElementById("myForm").reset();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        };
        xhr.send(formData);
    }
</script>