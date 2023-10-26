<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			<?php //echo $this->session->flashdata('msg');?> 
        	<div class="clearfix"> </div>
		</div>
		<br><br>
		<?= $this->include('app/alerts') ?>
		<div class="row">
						<h3 class="title1">Registro de Roles:</h3>
						<div class="form-three widget-shadow">
                            
							<form  action="<?php echo site_url('roles-insert');?>" method="post" class="form-horizontal">
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name" id="focusedinput" placeholder="insertar datos">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Inserte lso datos</p>
									</div>
								</div>
								<div class="form-group">
									<label name="descp" class="col-sm-2 control-label">Descripcion</label>
									<div class="col-sm-8">
										<input  type="textarea" class="form-control1" name="descp" id="" placeholder="insertar datos">
									</div>
								</div>
								
								<div class="form-group text-center">
                                    <input type="submit" turno="submit" value="Guardar " />
                                </div>
								
							</form>
						</div>
					</div>
<?= $this->endSection() ?>


	



