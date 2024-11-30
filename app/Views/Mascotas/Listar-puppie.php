<main>
  <!-- Container START -->
  <div class="container">
  	<div class="row g-4">	
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-9 card-header border-0 pb-0">
					<h3 class="mb-0">Mis Mascotas</h3>
				</div>						
				<div class="col-sm-3 d-flex justify-content-end">
					<a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="<?= base_url(); ?>mascotas/create_puppie" type="button"><i class="fa-solid fa-plus"> </i></a>
				</div>
			</div>
			<br><br>
    		<form class="row g-3 h-50vh" id="myForm">	
				<?= $bodyTabla ?>				
            </form>
			<br><br>
  		</div>
  	</div>
  </div>
</main>

<script>let baseUrl = "<?= base_url() ?>";</script>
<script src="<?= base_url() ?>assets_feed/js/Mascotas/listar-puppie.js"></script>


