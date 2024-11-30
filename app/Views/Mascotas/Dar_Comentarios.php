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
                    <h6>Comentario</h6>
                    <input name="id_post" id="id_post" type="hidden"  value="<?= $id_post ?>">
                    <input name="id_mascota" id="id_mascota" type="hidden"  value="<?= $id_mascota ?>">
                    <input name="id_tutor" id="id_tutor" type="hidden"  value="<?= $id_tutor ?>">
                    <textarea class="form-control" name="contenido" id="contenido" rows="5"></textarea>
                    <span style="font-size:12px;"><span id="cantidad">200</span> - 200</span>
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

    document.getElementById('editar').addEventListener('click', function(event){
        event.preventDefault();
        enviarPorAjax();
    });
    function enviarPorAjax(){
        var baseURL = "<?= base_url(); ?>";
        var xhr = new XMLHttpRequest();
        var formData = new FormData(document.getElementById('myForm'));
        xhr.open('POST', baseURL +'mascotas/guardar_comentarios', true);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200)
            { 
                console.log(xhr.responseText); 
                json=JSON.parse(xhr.responseText)
                if (json['respuesta']=="ok")
                {
                    swal('Agregar Comentario','Registro agregado con éxito','success')
                }
                else
                {
                    if (json['respuesta']=="no")
                    {
                        swal('Agregar Comentario','Registro no se pudo agregar','error')
                        document.getElementById("myForm").reset();
                    }
                    else
                    {
                        if (json['respuesta']=="blanco")
                        {
                            swal('Agregar Comentario','No se permite espacios en blanco','error')
                            document.getElementById("myForm").reset();
                        }
                    }
                }
            }
        };
        xhr.send(formData);
    }
</script>