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
                        <select name="cod_pais" id="cod_pais" class="form-select" aria-label="País">
                        <option value="0">País</option>
                            <?= $stringCombo ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mantenedor/tipo_documento" type="button">Agregar</a>&nbsp;&nbsp;
                        <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mantenedor/tipo_documento/listar" type="button">Listar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <input class="form-control" name="descripcion_tipo_documento" type="text" id="descripcion_tipo_documento" maxlength="200" placeholder="Raza" value="<?= $descripcion_tipo_documento ?>">
                        <input name="id_tipo_documento" id="id_tipo_documento" type="hidden"  value="<?= $id_tipo_documento ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary btn-puppie-color" id="editar" type="button">Grabar</button>                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">                    
                    <hr>
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>Maintainer" type="button">Volver al menú principal</a>
                    <hr>
                </div>
            </div>
        </div>            
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
        xhr.open('POST', baseURL +'mantenedor/tipo_documento/actualizar', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Mantenedor de Tipo de Documento','Registro editado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Mantenedor de Tipo de Documento','Registro no se pudo editar','error')
                        document.getElementById("myForm").reset();
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Mantenedor de Tipo de Documento','No se permite espacios en blanco','error')
                            document.getElementById("myForm").reset();
                        }else{
                            if (json['respuesta']=="existe"){
                                swal('Mantenedor de Tipo de  Documento','Sin cambios','error')
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
