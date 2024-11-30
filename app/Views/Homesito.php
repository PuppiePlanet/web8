
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRARSE EN PUPPIE PLANET</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FormRegistro">
          <div class="d-grid gap-2 col-12 mx-auto">
            <input type="text" name="mail" id="mail" class="form-control" placeholder="Mail">
            <br>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" >
            <br>
            <button type="button" id="btnRegistro" class="btn btn-lg btn-primary btn-puppie-color">Crear Cuenta</button>
          </div>
            <br>
          <span>O</span>
          <br><br>
          <div class="d-grid gap-2 col-12 mx-auto">
            <button type="button" id="btnRegGoogle"class="btn btn-outline-danger btn-lg">
              <img src="<?= base_url(); ?>assets/icons/google.png" alt="" class="me-2">
              Iniciar con Google
            </button>
          </div>
        </form>
      </div>       
    </div>
  </div>
</div><!-- fin modal -->

  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <br>
        <img src="<?= base_url(); ?>assets/images/vector.png" height="800" width="800" class="img-fluid" alt="">
        <h1 class="opacity-75">UNETE A NUESTRA COMUNIDAD</h1><br>
        <p><a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-02.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>
      </div>
      <!--<div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-03.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>                  </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/images/vector-04.png" class="img-fluid" height="800" width="800" alt="">
        <h1 class="opacity-75">ANADIR TEXTO AQUI</h1><br>
        <p><a class="btn btn-lg btn-primary btn-puppie-color" href="<?= base_url(); ?>registro">REGISTRAR</a></p><br><br>
      </div>-->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span style="background-color: #99d9d9" class="carousel-control-prev-icon" aria-hidden="true"></span>      
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span style="background-color: #99d9d9" class="carousel-control-next-icon" aria-hidden="true"></span>                        
    </button>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <!--<button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExample" style="background-color: #99d9d9" data-bs-slide-to="3" aria-label="Slide 4"></button>-->
    </div>
  </div>

