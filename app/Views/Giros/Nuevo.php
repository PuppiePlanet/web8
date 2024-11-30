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
                        <input class="form-control" name="giro" type="text" id="giro" maxlength="50" placeholder="Giro" autofocus >
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mantenedor/giros/listar" type="button">Listar</a>
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
        xhr.open('POST', baseURL +'mantenedor/giros/agregar', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){ 
                console.log(xhr.responseText);
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok"){
                    swal('Mantenedor de Giros','Registro agregado con éxito','success')
                }else{
                    if (json['respuesta']=="no"){
                        swal('Mantenedor de Giros','Registro no se pudo agregar','error')
                    }else{
                        if (json['respuesta']=="blanco"){
                            swal('Mantenedor de Giros','No se permite espacios en blanco','error')
                        }else{
                            if (json['respuesta']=="existe"){
                                swal('Mantenedor de Giros','Giro ya existe en la base de datos','error')
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