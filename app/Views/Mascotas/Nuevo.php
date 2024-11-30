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
                    <h6>Nombre</h6>
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    <input class="form-control" name="nombre_m" type="text" id="nombre_m" maxlength="100" oninput="this.value = this.value.toUpperCase();" autofocus>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Sexo</h6>
                    <select name="sexo_m" id="sexo_m" class="form-select" aria-label="Sexo">
                        <option value="Macho" selected>Macho</option>
                        <option value="Hembra" >Hembra</option>
                    </select>
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
                    <h6>Especie</h6>
                    <select name="cod_especie" id="cod_especie" class="form-select" aria-label="Especie" >
                    <?= $stringCombo ?>       
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Raza</h6>
                    <select name="cod_raza" id="cod_raza" class="form-select" aria-label="Raza">
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Fecha de nacimiento</h6>
                    <input name="fecha_nacimiento_m" id="fecha_nacimiento_m" class="form-select" type="date" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Estado</h6>
                    <select name="estado_m" id="estado_m" class="form-select" aria-label="Estado">
                        <option value="Viva" selected>Viva</option>
                        <option value="Muerta" >Muerta</option>    
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Fecha de inscripción</h6>
                    <input name="fecha_inscrip_m" id="fecha_inscrip_m" class="form-select" type="date" >
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>N° chip</h6>
                    <input class="form-control" name="chip_m" type="text" id="chip_m" maxlength="15">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Esterilizado</h6>
                    <select name="esterilizado" id="esterilizado" class="form-select" aria-label="Esterilizado">
                        <option value="No" selected>No</option>
                        <option value="Sí" >Sí</option>    
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Cruce</h6>
                    <select name="cruce" id="cruce" class="form-select" aria-label="Cruce">
                        <option value="No" selected>No</option>
                        <option value="Sí" >Sí</option>    
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Tipo de alimentación</h6>
                    <select name="alimento_m" id="alimento_m" class="form-select" aria-label="Alimento" >
                        <option value="Comercial" selected>Comercial</option>
                        <option value="Casera" >Casera</option>
                        <option value="Mixta" >Mixta</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Kennel</h6>
                    <input class="form-control" name="kennel" type="text" id="kennel" maxlength="20">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary btn-puppie-color" id="nuevo" type="button">Grabar</button>                    
            </div>
        </div>
    </div>
    <br>
</form>
<script>
    document.getElementById('cod_especie').addEventListener('change', function(event){
        event.preventDefault();
        cargar_razas(document.getElementById('cod_especie').value);
    });
    document.getElementById('nombre_m').addEventListener('focus', function(event){
        event.preventDefault();
        cargar_razas(document.getElementById('cod_especie').value);
    });
    function cargar_razas(especie){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'mascotas/mostrar_razas/'+especie, true);
        xhr.onreadystatechange = function() {            
            if (xhr.readyState == 4 && xhr.status == 200){                
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)                
                stringOption=""
                for (razas of json){
                    codigo = razas.cod_raza;
                    descripcion = razas.raza;
                    stringOption+='<option value ="'+codigo+'">'+descripcion+'</option>';
                }
                document.getElementById('cod_raza').innerHTML=stringOption
            }
        };
        xhr.send(formData);
    }
    document.getElementById('nuevo').addEventListener('click', function(event){
        event.preventDefault();
        enviarPorAjax();
    });
    function enviarPorAjax(){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'mascotas/nuevo', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText);
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Agregar Mascota','Registro agregado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Agregar Mascota','Registro no se pudo agregar','error')
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Agregar Mascota','No se permite espacios en blanco','error')
                        }else{
                            if (json['respuesta']=="existe"){
                                swal('Agregar Mascota','Ya tienes una mascota con ese nombre','error')
                            }else{
                                if (json['respuesta']=="chip"){
                                    swal('Agregar Mascota','El n° de chip debe ser de largo 15','error')
                                }   
                            }
                        }
                    }
                }
                document.getElementById("myForm").reset();
            }
        };
        xhr.send(formData);
    }
</script>