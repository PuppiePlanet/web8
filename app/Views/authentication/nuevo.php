<?php
    /*echo $nombre;
    echo '<pre>';
    
    echo '<select>';
    foreach($especies as $row){
        echo '<option value="'.$row['cod_especie'].'">'.$row['especie'].'</option>';
    }
    echo '</select>';
    exit;*/
?>
<button onclick="listar()">Listar</button>
<input type="text" id="cod_especie">
<button onclick="obtener()">Obtener</button>
<div id="especie"></div>
<table>
    <tr>
        <th>codigo</th>    
        <th>descripcion</th>
    </tr>
    <tbody id="detalle">
    </tbody>
</table>

<form id="formulario">
    <input type="text" id="email" name="email">
    <input type="text" id="nombre" name="nombre">
    <div id="retorno"></div>
    
</form>
<button onclick="insertar()">Agregar</button>
<button onclick="update()">Actualizar</button>
<button onclick="eliminar()">Eliminar</button>
<script>
    function listar(){    
        var url = "<?php echo base_url().'ejemplo/listar' ?>"; 
        fetch( url, {
            method: 'GET', // o GET, dependiendo de tu configuración                                        
        })
        .then(response => response.json())
        .then(data => {            
            var str=""
            for (registro of data){
                console.log(registro)
                email = registro.email;
                nombre = registro.nombre;
                str+="<tr><td>"+email+"</td><td>"+nombre+"</td></tr>";
            }
            //document.getElementById("detalle").innerHtml=str;
            document.getElementById("detalle").innerHTML = str; // Corrección aquí

        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function obtener(){    
        var codigo= document.getElementById("cod_especie").value;
        var url = "<?php echo base_url().'ejemplo/obtener/'?>"+codigo; 
        fetch( url, {
            method: 'GET', // POST o GET, dependiendo de tu configuración                                        
        })
        .then(response => response.json())
        .then(data => {            
            console.log(data)
            nombre = data.nombre;
            document.getElementById("especie").innerHTML = nombre;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function insertar(){            
        var url = "<?php echo base_url().'ejemplo/insertar/'?>"; 
        var datosFormulario = new FormData(document.getElementById('formulario'));
        fetch( url, {
            method: 'POST', // POST o GET, dependiendo de tu configuración     
            body: datosFormulario // Tus datos enviados al servidor                                   
        })
        .then(response => response.json())
        .then(data => {            
            console.log(data)
            retorno = data.success;
            document.getElementById("retorno").innerHTML = retorno;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function update(){            
        var url = "<?php echo base_url().'ejemplo/actualizar/'?>"; 
        var datosFormulario = new FormData(document.getElementById('formulario'));
        fetch( url, {
            method: 'POST', // POST o GET, dependiendo de tu configuración     
            body: datosFormulario // Tus datos enviados al servidor                                   
        })
        .then(response => response.json())
        .then(data => {            
            console.log(data)
            retorno = data.success;
            document.getElementById("retorno").innerHTML = retorno;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function eliminar(){            
        var url = "<?php echo base_url().'ejemplo/eliminar/'?>"; 
        var datosFormulario = new FormData(document.getElementById('formulario'));
        fetch( url, {
            method: 'POST', // POST o GET, dependiendo de tu configuración     
            body: datosFormulario // Tus datos enviados al servidor                                   
        })
        .then(response => response.json())
        .then(data => {            
            console.log(data)
            retorno = data.success;
            document.getElementById("retorno").innerHTML = retorno;
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }
</script>
