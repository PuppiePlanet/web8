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
                    
                    <input name="id_post" id="id_post" type="hidden"  value="<?= $id_post ?>">
                    <input name="id_mascota" id="id_mascota" type="hidden"  value="<?= $id_mascota ?>">
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    
                    <input type="radio" id="Me_gusta.png" name="tipo_like" value="Me_gusta.png" checked>
                    <label for="Me_gusta.png"><img width="30%" src="/medvetlink/img_likes/Me_gusta.png"> Me gusta</label><br><br>

                    <input type="radio" id="Me_asombra.png" name="tipo_like" value="Me_asombra.png" >
                    <label for="Me_asombra.png"><img width="23%" src="/medvetlink/img_likes/Me_asombra.png"> Me asombra</label><br><br>

                    <input type="radio" id="Me_divierte.png" name="tipo_like" value="Me_divierte.png" >
                    <label for="Me_divierte.png"><img width="23%" src="/medvetlink/img_likes/Me_divierte.png"> Me divierte</label><br><br>

                    <input type="radio" id="Me_encanta.png" name="tipo_like" value="Me_encanta.png" >
                    <label for="Me_encanta.png"><img width="23%" src="/medvetlink/img_likes/Me_encanta.png"> Me encanta</label><br><br>

                    <input type="radio" id="Me_enoja.png" name="tipo_like" value="Me_enoja.png" >
                    <label for="Me_enoja.png"><img width="25%" src="/medvetlink/img_likes/Me_enoja.png"> Me enoja</label><br><br>

                    <input type="radio" id="Me_entristece.png" name="tipo_like" value="Me_entristece.png" >
                    <label for="Me_entristece.png"><img width="20%" src="/medvetlink/img_likes/Me_entristece.png"> Me entristece</label><br><br>

                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mascotas/muro/<?= $id_mascota ?>" type="button">Volver</a>
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
        xhr.open('POST', baseURL +'mascotas/guardar_likes', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200)
            { 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok")
                {
                    swal('Agregar Like','Registro agregado con éxito','success')
                }
                else
                {
                    if (json['respuesta']=="no")
                    {
                        swal('Agregar Like','Registro no se pudo agregar','error')
                        document.getElementById("myForm").reset();
                    }
                }
            }
        };
        xhr.send(formData);
    }
</script>