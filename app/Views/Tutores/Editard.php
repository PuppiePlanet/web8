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
                    <h6>Rut</h6>
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    <input class="form-control" name="rut_tutor" type="text" id="rut_tutor" value="<?= $rut_tutor ?>" readonly >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Correo</h6>
                    <input class="form-control" name="correo_tutor" type="text" id="correo_tutor" value="<?= $correo_tutor ?>" readonly >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores" type="button">Volver</a>&nbsp;&nbsp;
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Nombres</h6>
                    <input class="form-control" name="nombres_tutor" type="text" id="nombres_tutor" maxlength="100" value="<?= $nombres_tutor ?>" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Apellidos</h6>
                    <input class="form-control" name="apellidos_tutor" type="text" id="apellidos_tutor" maxlength="100" value="<?= $apellidos_tutor ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Alias</h6>
                    <input class="form-control" name="alias" type="text" id="alias" maxlength="100" value="<?= $alias ?>" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Tipo de cuenta</h6>
                    <select name="cuenta" id="cuenta" class="form-select" aria-label="Cuenta">
                        <?= $stringCuenta ?>
                    </select>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Dirección</h6>
                    <input class="form-control" name="direccion_tutor" type="text" id="direccion_tutor" maxlength="100" value="<?= $direccion_tutor ?>" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Ciudad</h6>
                    <input class="form-control" name="ciudad_tutor" type="text" id="ciudad_tutor" maxlength="50" value="<?= $ciudad_tutor ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>País</h6>
                    <select name="cod_pais" id="cod_pais" class="form-select" aria-label="Pais">
                        <?= $stringCombo ?>
                    </select>  
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Fono</h6>
                    <input class="form-control" name="fono_tutor" type="text" id="fono_tutor" maxlength="20" value="<?= $fono_tutor ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Género</h6>
                    <?= $stringGenero ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Fecha de nacimiento</h6>
                    <input name="fecha_nacimiento" id="fecha_nacimiento" class="form-select" type="date" value="<?= $fecha_nacimiento ?>" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Sitio web</h6>
                    <input class="form-control" name="web" type="text" id="web" maxlength="100" value="<?= $web ?>" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Presentación</h6>
                    <textarea class="form-control" name="presentacion" id="presentacion" rows="5"><?= $presentacion ?></textarea>
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

    function handleRadioChange() {
        // Obtener el valor del radio button seleccionado
        var optM = document.getElementById('Masculino');
        var optF = document.getElementById('Femenino');
        var optP = document.getElementById('Prefiero');
        var optO = document.getElementById('Otro');
        var OtroG = document.getElementById('Otro_genero');
        // Habilitar o deshabilitar el campo de texto según el radio button seleccionado
        if (optM.checked) {OtroG.disabled = true;}
        if (optF.checked) {OtroG.disabled = true;}
        if (optP.checked) {OtroG.disabled = true;}
        if (optO.checked) {OtroG.disabled = false;}
    }

    document.getElementById('editar').addEventListener('click', function(event){
        event.preventDefault();
        enviarPorAjax();
    });
    function enviarPorAjax(){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'tutores/actualizard', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Modificar datos tutor','Registro editado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Modificar datos tutor','Registro no se pudo editar','error')
                        document.getElementById("myForm").reset();
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Modificar datos tutor','No se permite espacios en blanco','error')
                            document.getElementById("myForm").reset();
                        }else{
                            if (json['respuesta']=="repetido"){
                                swal('Modificar datos tutor','Alias ya se encuentra asignado a otro tutor','error')
                                document.getElementById("myForm").reset();
                            }
                        }
                    }
                }
            }
        };
        xhr.send(formData);
    }
</script>