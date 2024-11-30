<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Tutores</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url(); ?>assets/css/button.css" rel="stylesheet"/>
    <!-- CSS de DataTables para Bootstrap 5 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/vanilla-datatables@2/dist/vanilla-dataTables.min.css">


</head>
<body>    
    <form id="myForm">
        
        <div class="container">                              

            <div class="d-flex justify-content-between"> <!-- Añade 'd-flex' para activar flexbox y 'justify-content-between' para separar el título de la imagen -->
                <h2 class="align-self-end mr-4">Listar </h2> <!-- 'align-self-end' alinea el título a la parte inferior y 'mb-0' elimina el margen inferior por defecto del título -->
                <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> <!-- 'mr-3' añade un margen a la derecha -->
            </div>
            
            <div class="row">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>registro" type="button">Nuevo</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <table id="miTabla" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $bodyTabla ?>
                    </tbody>
                </table>

                </div>                
            </div>
        
        </div>            
        
    </form>

</body>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- JS de Bootstrap 5 (junto con Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@2/dist/vanilla-dataTables.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dataTable = new DataTable("#miTabla");
    });

    function editar(id){
        window.location.href = "<?php echo base_url(); ?>registro/editar/"+id;
    }



</script>   
</html>
