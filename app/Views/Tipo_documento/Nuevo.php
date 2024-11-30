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
                        <select name="cod_pais" id="cod_pais" class="form-select" aria-label="Pais" placeholder="País">
                            <option value="0">País</option>
                            <?= $stringCombo ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mantenedor/tipo_documento/listar" type="button">Listar</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <input class="form-control" name="descripcion_tipo_documento" type="text" id="descripcion_tipo_documento" maxlength="50" placeholder="Tipo Documento" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary btn-puppie-color" id="sendBtn" type="button">Grabar</button>                    
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
    document.getElementById('sendBtn').addEventListener('click', function(event){
        event.preventDefault();
        enviarPorAjax();
    });
    function enviarPorAjax(){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'mantenedor/tipo_documento/agregar', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Mantenedor de Tipo de documento','Registro agregado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Mantenedor de Tipo de documento','Registro no se pudo agregar','error')
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Mantenedor de Tipode documento','No se permite registros en blanco','error')
                        }else{
                            if (json['respuesta']=="existe"){
                                swal('Mantenedor de Tipo de documento','Tipo de documento ya existe en la base de datos','error')
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
