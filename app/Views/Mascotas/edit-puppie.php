<!-- **************** MAIN CONTENT START **************** -->
<main>
  <!-- Container START -->
  <div class="container">
    <div class="row g-4">

      <!-- Sidenav START -->
      <div class="col-lg-3">

        <!-- Advanced filter responsive toggler START -->
        <div class="d-flex align-items-center d-lg-none">
          <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
            <span class="btn btn-primary"><i class="fa-solid fa-sliders-h"></i></span>
            <span class="h6 mb-0 fw-bold d-lg-none ms-2">Imagen mascota</span>
          </button>
        </div>
        <!-- Advanced filter responsive toggler END -->

        <!-- Navbar START-->
        <nav class="navbar navbar-expand-lg mx-0">
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
            <!-- Offcanvas header -->
            <div class="offcanvas-header">
              <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!-- Offcanvas body -->
            <div class="offcanvas-body d-block px-2 px-lg-0">
              <!-- Card START -->
              <div class="card overflow-hidden">
                <!-- Cover image -->                
                <!-- Card body START -->
                <div class="card-body pt-0">
                  <div class="text-center">
                    <!-- Avatar -->
                    <!--div class="avatar avatar-lg mt-n5 mb-3">                      
                    </!div-->
                    <!-- Info -->
                    <br><br>
                    <h5 class="mb-0"> Sube la foto de tu Mascota </h5>
            
                    <!-- User stat START -->
                    <div class="hstack gap-2 gap-xl-3 justify-content-center">
                      <!-- User stat item -->

                    </div>
                    <!-- User stat END -->
                  </div>

                  <!-- Divider -->
                  <hr>
                  <br>
                  <form class="row g-3 d-flex justify-content-center align-items-center" id="formTutorFoto" style="text-align: center;">
                      <div class="preview-container" style="position: relative; width: 150px; height: 150px;">
                          <!-- Imagen para previsualización -->
                          <img id="imagen-preview" src="<?=$imagen?>" alt="Vista previa de la imagen" style="width: 100%; height: 100%; object-fit: cover; background-color: white; border-radius: 10px; border: 2px solid rgb(121, 205, 205);display: block;" />

                          <!-- Botón para seleccionar la imagen -->
                          <button type="button" id="show_mode" class="btn btn-default btn-sm show_more_images" 
                              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;" 
                              onClick="document.getElementById('imagen').click();">
                              
                              <img id="mostrar" src="<?=base_url();?>assets/icons/camera.png" style="max-width: 50%; max-height: 50%; display:inline; opacity:<?=$opacityAvatar;?>;">
                          </button>
                      </div>

                      <!-- Input file oculto -->
                      <input class="rounded-sm" hidden type="file" id="imagen" accept="image/png, image/gif, image/jpeg, image/jpg" name="imagen">

                      <!-- Botón para actualizar la imagen del perfil -->
                      <div class="mt-3 d-flex justify-content-center">
                          <button type="button" id="updateProfileImage" onClick="subirFoto()" class="btn btn-primary" style="display: none;">Subir y Actualizar</button>
                      </div>
                      <div id="image-message" style="display: none; margin-top: 10px;">
                          <i class="bi bi-check-circle"></i> Imagen actualizada con éxito
                      </div>
                  </form>
                  <br><br><br><br><br>
                  <!-- Side Nav END -->
                </div>
                <!-- Card body END -->
                <!-- Card footer -->
                <div class="card-footer text-center py-2">
                  <br>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar END-->
      </div>
      <!-- Sidenav END -->

      <!-- Main content START -->
      <div class="col-md-8 col-lg-6 vstack gap-4">
        <!-- Create a page START -->
        <div class="card">
          <!-- Title START -->
          <div class="card-header border-0 pb-0">
            <h3 class=" mb-0">Actualizar tu Puppie</h3>
          </div>
          <!-- Title END -->
          <!-- Create a page form START -->
          <div class="card-body">
            <form class="row g-3" id="formMascota">
              <!-- Nombre mascota -->
              <input type="hidden" id="id_mascota" name="id_mascota" value="<?= $id_mascota; ?>">
              <div class="col-12">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre de tu mascota" id="nombre_m" name="nombre_m" value="<?= $nombre_m; ?>">
                <small>¿Cuál es el nombre de tu Puppie?</small><span id="nombre_m-error" class="error-message"></span>
              </div>
              <!-- Sexo -->
              <?php
                // Valores que son opciones predefinidas
                $sexos_predefinidos = ["MACHO", "HEMBRA"];
                // Verifica si $genero es una de las opciones predefinidas
                $es_sexos_predefinidos = !in_array($sexo_m, $sexos_predefinidos);
              ?>
              <div class="col-sm-6">
                <label class="form-label">Sexo</label>
                <div class="select-wrapper">
                  <select class="form-select js-choice" data-search-enabled="true" id="sexo_m" name="sexo_m">
                    <option value=""></option>                  
                    <option value="MACHO" <?php if ($sexo_m == 'MACHO') echo 'selected'; ?>>Macho</option>
                    <option value="HEMBRA" <?php if ($sexo_m == 'HEMBRA') echo 'selected'; ?>>Hembra</option>                  
                  </select>
                  <span id="sexo_m-error" class="error-message"></span>
                </div>
              </div>
              <!-- Fecha de nacimiento -->
              <div class="col-lg-6  col-lg-4">
                <label class="form-label">Fecha de nacimiento </label>
                <input type="date" class="form-control" placeholder="12/12/1980" id="fecha_nacimiento_m" name="fecha_nacimiento_m" value="<?= $fecha_nacimiento_m; ?>">
                <span id="fecha_nacimiento_m-error" class="error-message"></span>
              </div>
              <!-- Especie -->
              <div class="col-sm-6">
                <label class="form-label">Especie</label>
                <div class="select-wrapper">
                  <select class="form-select js-choice" data-search-enabled="true" id="cod_especie" name="cod_especie">
                    <?= $especies; ?>
                  </select>
                  <span id="cod_especie-error" class="error-message"></span>
                </div>
              </div>
              <!-- Raza -->
              <div class="col-sm-6" id="divRaza">
                <label class="form-label">Raza</label>
                <div class="select-wrapper">
                  <select class="form-select" data-search-enabled="true" id="cod_raza" name="cod_raza">
                  <?= $razas; ?>
                  </select>
                  <span id="cod_raza-error" class="error-message"></span>
                </div>
              </div>
          
              <!-- Button  -->
              <div class="col-8">
                <div class="alert" sytle="display:none" role="alert">
                </div>
              </div>
              <div class="col-2 text-end">
                <button type="submit" class="btn btn-primary mb-0" id="sendBtn">Actualizar Puppie</button>
              </div>
            </form>
          </div>
          <!-- Create a page form END -->
        </div>
        <!-- Create a page END -->
      </div>

    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>let baseUrl = "<?= base_url() ?>";</script>
<script src="<?= base_url() ?>assets_feed/js/Mascotas/edit-puppie.js"></script>
