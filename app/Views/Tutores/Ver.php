<style>
        .histcontainer {
            text-align: center;
            /*height: 100vh; Establece la altura del contenedor al 100% del viewport height */
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .image-container {
            display: inline-block;
            vertical-align: middle;
            background-color: black;
            border-radius: 80px;
            overflow: hidden;
            /*cursor: pointer;*/
            margin-right: 10px;
        }
    </style>
<div class="container">                              
    <div class="d-flex justify-content-between"> 
        <h2 class="align-self-end mr-4">Tus Datos</h2> 
        <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="mb-3">                        
            <?= $tutor ?>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores/foto_perfil/<?= $id_tutor ?>" type="button">Foto perfil</a>&nbsp;&nbsp;
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores/editard/<?= $id_tutor ?>" type="button">Editar datos</a>&nbsp;&nbsp;             
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores/editarc/<?= $id_tutor ?>" type="button">Editar contraseña</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="mb-3">                        
                <h2 class="align-self-end mr-4">Tus Historias (<?= $num_historias ?>)</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="mb-3">                        
                <div class="histcontainer">
                    <?= $historias ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="mb-3">                        
                <h2 class="align-self-end mr-4">Tus Mascotas</h2>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mascotas/agregar/<?= $id_tutor ?>" type="button">Agregar mascota</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <table style="text-align: center;" id="miTabla" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="10%">FOTO</th>
                        <th width="20%">NOMBRE</th>
                        <th width="15%">ESPECIE</th>
                        <th width="15%">RAZA</th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                <?= $mascotas ?>
                </tbody>
            </table>
        </div>                
    </div>
</div>