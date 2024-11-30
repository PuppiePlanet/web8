<style>
    #preview img, #preview video {
    max-width: 20%;
    height: auto;
}
</style>

<form id="myForm" enctype="multipart/form-data">
    <div class="container">                              
        <div class="d-flex justify-content-between"> 
            <h2 class="align-self-end mr-4"><?= $titulo?></h2> 
            <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> 
        </div>
        <br>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="mb-3">                        
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    <input name="id_mascota" id="id_mascota" type="hidden"  value="<?= $id_mascota ?>">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores" type="button">Volver</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Archivo</h6>
                    <input class="form-control" type="file" name="userfile" id="userfile" accept="image/*,video/*" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Contenido</h6>
                    <textarea class="form-control" name="contenido" id="contenido" rows="5"></textarea>
                    <span style="font-size:12px;"><span id="cantidad">200</span> - 200</span>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Vista previa</h6>
                    <div id="preview"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">  
                <input class="btn btn-primary btn-puppie-color" type="button" value="Subir Archivo" id="uploadHistoria" />     
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="uploadMessage"></div>           
            </div>
        </div>
    </div>
    <br>
</form>

<script>
        var maximo = 200;
        var limite = 5;
        cuadro = document.getElementById('contenido');
        cuadro.addEventListener("keyup",function(){
            var cantidad = cuadro.value.length;
            restantes = maximo-cantidad;
            document.getElementById('cantidad').innerHTML = restantes;
            cuadro.maxLength = maximo;
            (restantes<=limite) ? document.getElementById('cantidad').style.color = "#FF0000" : document.getElementById('cantidad').style.color = "#000000"
        })

        const file = document.getElementById("userfile");
        file.addEventListener('change', e => {
            var xfile = e.target.files[0];
            console.log(xfile);
            document.getElementById("preview").innerHTML = "";
            if (xfile.type.startsWith('image/')) {
                var ximg = document.createElement('img');
                ximg.src = URL.createObjectURL(xfile);
                ximg.onload = function() {
                    URL.revokeObjectURL(ximg.src);
                };
                preview.appendChild(ximg);
            } else if (xfile.type.startsWith('video/')) {
                var video = document.createElement('video');
                video.src = URL.createObjectURL(xfile);
                video.controls = true;
                video.autoplay = true;
                video.muted  = true;
                video.onloadstart = function() {
                    URL.revokeObjectURL(video.src);
                };
                preview.appendChild(video);
            }
        });
        document.getElementById('uploadHistoria').addEventListener('click', function(event){
            event.preventDefault();
            enviarPorAjax();
        });
        function enviarPorAjax(){
            var inputFile = document.getElementById("userfile").files[0];
            if (inputFile) {
                //var baseURL = "<?= base_url(); ?>";
                var xhr = new XMLHttpRequest();
                var formData = new FormData(document.getElementById('myForm'));
                formData.append("userfile", inputFile);
                //xhr.open('POST', baseURL +'mascotas/subir', true);
                xhr.open("POST", "<?php echo site_url('mascotas/subir_historia'); ?>", true);
                xhr.onreadystatechange = function(){
                    if (xhr.readyState == 4 && xhr.status == 200){ 
                        console.log(xhr.responseText); 
                        json=JSON.parse(xhr.responseText)
                        if (json['respuesta']=="ok"){
                            swal('Agregar historia','Registro agregado con éxito','success')
                        }else{
                            if (json['respuesta']=="error"){
                                causa = json['causa'];
                                mensaje = causa['error'];
                                mensaje = mensaje.replace("<p>","");
                                mensaje = mensaje.replace("</p>","");
                                swal('Agregar historia',mensaje,'error')
                            }
                        }
                        document.getElementById("img").src = "";
                        document.getElementById("myForm").reset();
                    }
                };
                xhr.send(formData);
            }else{swal('Agregar historia','Seleccione un archivo para subir','error')}
        }        
    </script>
