<!-- **************** MAIN CONTENT START **************** -->
<main>
  <!-- Container START -->
  <div class="container">
    <div class="row">

      <!-- Sidenav START -->
      <div class="col-lg-3">

        <!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<div class="d-flex align-items-center mb-4 d-lg-none">
					<button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="btn btn-primary"><i class="fa-solid fa-sliders-h"></i></span>
            <span class="h6 mb-0 fw-bold d-lg-none ms-2">Actualizar foto de perfil
            </span>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->

        <nav class="navbar navbar-light navbar-expand-lg mx-0">
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <!-- Offcanvas header -->
						<div class="offcanvas-header">
							<button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>

            <!-- Offcanvas body -->
            <div class="offcanvas-body p-0"> 
              <!-- Card START -->
              <div class="card overflow-hidden">
                <!-- Cover image -->                
                <!-- Card body START -->
                <div class="card-body pt-0">
                  <div class="text-center">                    
                    <br><br>
                    <h5 class="mb-0"> Actualizar Foto de perfil </h5>
            
                    <!-- User stat START -->
                    <div class="hstack gap-2 gap-xl-3 justify-content-center">
                      <!-- User stat item -->
                    </div>
                    <!-- User stat END -->
                  </div>
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
                      <div id="success-message" style="color: rgb(121, 205, 205); display: none; margin-top: 10px;">
                          <i class="bi bi-check-circle"></i> Imagen actualizada con éxito
                      </div>
                  </form>                                    
                </div>
                <!-- Card body END -->
                <!-- Card footer -->
                <div class="card-footer text-center py-2">                  
                </div>
              </div>
              <!-- Card END -->
            </div>
            <!-- Offcanvas body -->
          </div>
        </nav>
      </div>
      <!-- Sidenav END -->

        <!-- Main content START -->
        <div class="col-lg-6 vstack gap-4">
          <!-- Setting Tab content START -->
          <div class="tab-content py-0 mb-0">

            <!-- Account setting tab START -->
            <div class="tab-pane show active fade" id="nav-setting-tab-1">
              <!-- Account settings START -->
              <div class="card mb-4">
                
                <!-- Title START -->
                <div class="card-header border-0 pb-0">
                  <h4 >Configuraciones de la cuenta</h4>
                  <p class="mb-0">Mantén tu nombre, dirección de correo electrónico y detalles de contacto actualizados para asegurarte de que siempre estés informado sobre lo último en nuestro servicio.</p>
                </div>
                <!-- Card header START -->
                <!-- Card body START -->
                <div class="card-body">
                  <!-- Form settings START -->
                  <form class="row g-3" id="account">
                    <!-- First name -->
                    <div class="col-sm-6">
                      <label class="form-label" for="nombres_tutor">Nombres</label>
                      <input type="text" class="form-control" placeholder="Juan" id="nombres_tutor" name="nombres_tutor" value="<?= $nombres_tutor?>">
                      <span id="nombres_tutor-error" class="error-message"></span> <!-- Mensaje de error específico -->

                    </div>
                    <!-- Last name -->
                    <div class="col-sm-6">
                      <label class="form-label" for="apellidos_tutor">Apellidos</label>
                      <input type="text" class="form-control" placeholder="Pérez"  id="apellidos_tutor" name="apellidos_tutor" value="<?= $apellidos_tutor?>">
                      <span id="apellidos_tutor-error" class="error-message"></span>

                    </div>

                    <!-- User name -->
                    <div class="col-sm-6">
                      <label class="form-label" for="alias">Nombre usuario</label>
                      <input type="text" class="form-control" placeholder="@juanperez" id="alias" name="alias" value="<?= $alias?>">
                      <span id="alias-error" class="error-message"></span>

                    </div>
                    <!-- Birthday -->
                    <div class="col-lg-6">
                      <label class="form-label" for="fecha_nacimiento">Fecha de nacimiento </label>
                      <input type="date" class="form-control" placeholder="12/12/1990" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $fecha_nacimiento?>">
                      <span id="fecha_nacimiento-error" class="error-message"></span>

                    </div>
                    <!-- Allow checkbox -->
                    <?php
                      // Valores que son opciones predefinidas
                      $generos_predefinidos = ["Mujer", "Hombre", "Prefiero no decirlo",""];
                      // Verifica si $genero es una de las opciones predefinidas
                      $es_genero_personalizado = !in_array($genero, $generos_predefinidos);
                      ?>
                    <div class="col-sm-6">                         
                        <label class="form-label" for="genero">Género</label>                      
                        <div class="select-wrapper"> <!-- Contenedor envolvente -->
                          <select class="form-select  js-choice" data-search-enabled="true" id="genero" name="genero">
                              <option value="" <?php if ($genero == '') echo 'selected'; ?>></option>
                              <option value="Mujer" <?php if ($genero == 'Mujer') echo 'selected'; ?>>Mujer</option>
                              <option value="Hombre" <?php if ($genero == 'Hombre') echo 'selected'; ?>>Hombre</option>
                              <option value="Prefiero no decirlo" <?php if ($genero == 'Prefiero no decirlo') echo 'selected'; ?>>Prefiero no decirlo</option>
                              <option value="Personalizado" <?php if ($es_genero_personalizado) echo 'selected'; ?>>Personalizado</option>
                          </select>            
                          <span id="genero-error" class="error-message"></span>  
                        </div>
                    </div>
                    <!-- Campo para especificar género personalizado -->
                    <div class="col-sm-6" id="custom-gender-div" style="visibility: <?php echo $es_genero_personalizado ? 'visible' : 'hidden'; ?>;"> 
                        <label class="form-label" for="customGenero">Especifica tu género</label>                      
                        <input type="text" class="form-control" id="customGenero" name="customGenero" placeholder="Escribe tu género" value="<?php echo $es_genero_personalizado ? htmlspecialchars($genero) : ''; ?>">
                        <span id="customGenero-error" class="error-message"></span>
                    </div>
                  
                    <!-- Pais -->
                    <div class="col-sm-6">
                      <label class="form-label" for="cod_pais"> Pais </label> 
                      <div class="select-wrapper">
                        <select class="form-select js-choice" data-search-enabled="true" id="cod_pais" name="cod_pais">
                          <?= $comboCountries; ?>
                        </select>
                        <span id="cod_pais-error" class="error-message"></span>
                      </div>
                    </div>
                    <!-- Ciudad -->
                    <?php
                      if ($select_ciudad==1){
                        $div_ciudad_input="display:none;";
                        $div_ciudad_select="";
                        $ciudad_tutor="";
                      }else{
                        $div_ciudad_input="";
                        $div_ciudad_select="display:none;";
                        
                      }
                    ?>
                    <div class="col-sm-6" id="div_ciudad_input" style="<?= $div_ciudad_input?>">
                      <label class="form-label" for="ciudad_tutor">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad_tutor" name="ciudad_tutor"  value="<?= $ciudad_tutor?>">
                        <span id="ciudad_tutor-error" class="error-message"></span>
                    </div>

                    <div class="col-sm-6" id="div_ciudad_select" style="<?= $div_ciudad_select?>">
                      <label class="form-label" for="ciudad_tutor_select">Ciudad</label>                      
                      <div class="select-wrapper">
                        <select class="form-select " data-search-enabled="true" id="ciudad_tutor_select" name="ciudad_tutor_select">
                        <?= $comboCity; ?>
                        </select>      
                      </div>
                      <span id="ciudad_tutor_select-error" class="error-message"></span>              
                    </div>

                    <!-- Direccion -->
                    <div class="col-sm-12">
                      <label class="form-label" for="direccion_tutor">Dirección</label>
                      <input type="text" class="form-control" id="direccion_tutor" name="direccion_tutor"  value="<?= $direccion_tutor?>">                      
                      <span id="direccion_tutor-error" class="error-message"></span>
                    </div>

                      <!-- Phone number -->
                      <div class="col-sm-6">
                      <label class="form-label" for="fono_tutor"> Número de teléfono </label>
                      <input type="text" class="form-control" id="fono_tutor" name="fono_tutor" value="<?= $fono_tutor?>">
                      <span id="fono_tutor-error" class="error-message"></span>
                      
                    </div>
                    <!-- Email number -->
                    <div class="col-sm-6">
                      <label class="form-label" for="correo_tutor">Email</label>
                      <input type="text" class="form-control readonly-input" placeholder="tutor@puppieplanet.com" id="correo_tutor" name="correo_tutor"  value="<?= $correo_tutor?>" readonly="readonly">                      
                      <span id="correo_tutor-error" class="error-message"></span>

                    </div>
                    <!-- Page information -->
                    <div class="col-12">
                      <label class="form-label" for="presentacion"> Agregar presentación </label>
                      <textarea class="form-control" rows="4" id="presentacion" name="presentacion" placeholder="Describre quién eres"><?= $presentacion?></textarea>
                      <small>Character limit: 300</small>
                      <span id="presentacion-error" class="error-message"></span>
                      
                    </div>
                    <!-- Button  -->
                    <div class="col-6">
                      <div class="alert" sytle="display:none" role="alert">
                          
                      </div>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-sm btn-primary mb-0" id="guardar">Guardar</button>
                    </div>
                  </form>
                  <!-- Settings END -->
                </div>
              <!-- Card body END -->
              </div>
              <!-- Account settings END -->

          <!--aca estaba el cambio de pass-->
            </div>
          </div>
          <!-- Setting Tab content END -->
        </div>

    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>

<script>let baseUrl ="<?=base_url()?>";</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url()?>assets_feed/js/Tutor/settings.js"></script>