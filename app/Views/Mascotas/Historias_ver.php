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
                    <tr>
                        <td>
                            <h3><small><?= $hist_contenido?></small></h3>
                            <h5><small><?= $hist_fecha?></small></h5>

                            <?php if ($hist_tipo === 'video/mp4'): ?>
                                <video width="70%" controls autoplay onended="redirectToHome()">
                                    <source src="<?= $hist_archivo ?>" type="video/mp4">
                                    Tu navegador no soporta la etiqueta de video.
                                </video>
                                <script>
                                    function redirectToHome() {
                                        window.location.href = '<?= base_url(); ?>tutores';
                                    }
                                </script>
                            <?php else: ?>
                                <img width="70%" src="<?= $hist_archivo ?>" alt="Imagen">
                                <script>
                                    setTimeout(function() {
                                        window.location.href = '<?= base_url(); ?>tutores';
                                    }, 5000);
                                </script>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-end">
            <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>tutores" type="button">Volver</a>
            </div>
        </div>
    </div>
    <br>
</div>