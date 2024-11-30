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
                    <h6>Nombre</h6>
                    <input name="id_mascota" id="id_mascota" type="hidden"  value="">
                    <input class="form-control" name="nombre_m" type="text" id="nombre_m" maxlength="100" placeholder="Nombre" value="">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Sexo</h6>
                    <select name="sexo_m" id="sexo_m" class="form-select" aria-label="Sexo">
                                       
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores" type="button">Volver</a>&nbsp;&nbsp;
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Especie</h6>
                    <select name="cod_especie" id="cod_especie" class="form-select" aria-label="Especie">
                                       
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mb-3">
                    <h6>Raza</h6>
                    <select name="cod_raza" id="cod_raza" class="form-select" aria-label="Raza">
                                       
                    </select>
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