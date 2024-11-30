  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/carrusel_historia.css" rel="stylesheet"/>
    <title>Carrusel de Historias</title>
  </head>
  <body>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div id="contenedorCarrusel" style="position: relative;">
                <div id="ig_header_stories" class="carousel">
                    <!-- Aquí se agregarán las imágenes de las historias dinámicamente -->
                </div>

                <!-- Botones fuera del div de desplazamiento pero dentro del contenedor relativo -->
                <span id="btnIzquierda" class="fas fa-arrow-left"></span>
                <span id="btnDerecha" class="fas fa-arrow-right"></span>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <br>
</body>

  </html>
  <script>
    const hostUrl = "<?=base_url()?>";        
  </script>
  <script src="<?=base_url()?>assets/js/carrusel_historia.js"></script>