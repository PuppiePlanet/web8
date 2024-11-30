    <div class="container">                              
        <div class="d-flex justify-content-between">             
            <h2 class="align-self-end mr-4"><?= $titulo?></h2> 
            <img src="<?= base_url(); ?>assets/images/logo.png"  alt="Puppieplanet"   width="128" height="128">
        </div>
        <div class="row">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>mantenedor/razas" type="button">Agregar</a>
            </div>
        </div>
       
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <table style="text-align: center;" id="miTabla" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>CODIGO ESPECIE</th>
                            <th>ESPECIE</th>
                            <th>CODIGO RAZA</th>
                            <th>RAZA</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $bodyTabla ?>
                    </tbody>
                </table>
            </div>                
        </div>
        <div class="row">
            <div class="col-12">                    
                <hr>
                <a class="btn btn-primary btn-puppie-color" href="<?= base_url(); ?>Maintainer" type="button">Volver al menú principal</a>
                <hr>
            </div>
        </div>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        const dataTable = new DataTable("#miTabla");
    });
    function editar(id){
        window.location.href = "<?php echo base_url(); ?>mantenedor/razas/editar/"+id;
    }
    document.addEventListener('DOMContentLoaded', () => {
		document.querySelectorAll('input[type=text]').forEach( node => node.addEventListener('keypress', e => {
			if(e.keyCode == 13){
				e.preventDefault();
			}
		}))
	});
    function doSearch(){
        const tableReg = document.getElementById('miTabla');
        const searchText = document.getElementById('searchTerm').value.toLowerCase();
    	let total = 0;
        for (let i = 1; i < tableReg.rows.length; i++){
            let found = false;
            const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
            for (let j = 0; j < cellsOfRow.length && !found; j++){
                const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                if (searchText.length == 0 || compareWith.indexOf(searchText) > -1){
                    found = true;
                    total++;
                }
            }
            if (found){
                tableReg.rows[i].style.display = '';
            }else{tableReg.rows[i].style.display = 'none';}
        }
    }
</script> 