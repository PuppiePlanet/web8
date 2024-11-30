<div class="container">                              
    <div class="d-flex justify-content-between"> 
        <h2 class="align-self-end mr-4"><?= $titulo?></h2> 
        <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128"> 
    </div>
    <br>
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <table style="text-align: left;" id="miTabla" class="table table-striped table-bordered">
                <tbody>
                <?= $comentarios ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mascotas/muro/<?= $id_mascota ?>" type="button">Volver</a>
            </div>
        </div>
    </div>
    <br>
</div>