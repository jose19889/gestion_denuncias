<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
        	<div class="clearfix"> </div>
		</div>
		<br><br>
		<?= $this->include('app/alerts') ?>
		<div class="row">
						<h3 class="title1">Registro de Estaciones de Policia:</h3>
						<div class="form-three widget-shadow">
						<form  action="<?php echo site_url('polistation-insert');?>" method="post" class="form-horizontal">
								<div class="form-group">
									<label   class="col-sm-2 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Inserte lso datos</p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput"  class="col-sm-2 control-label">Jefe de Guardia</label>
									<div class="col-sm-8">
										<input type="text" name="comisario_jefe" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Inserte lso datos</p>
									</div>
								</div>
								<div class="form-group">
									<label   class="col-sm-2 control-label">Contacto jefe</label>
									<div class="col-sm-8">
										<input type="text" name="contacto_jefe" class="form-control1" id="" placeholder="insertar texto">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Inserte lso datos</p>
									</div>
								</div>

								<div class="form-group">
									<label  class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" name="email" class="form-control1"  placeholder="insertar texto">
									</div>
								</div>

								<div class="form-group">
									<label  class="col-sm-2 control-label">Contacto Fijo</label>
									<div class="col-sm-8">
										<input type="text" name="contacto" class="form-control1"  placeholder="insertar texto">
									</div>
								</div>
								
								<!-- <div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div> -->
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Seleccione Provincia</label>
									<div class="form-group">
									<div class="col-sm-8">
									<select name="province_id" id="selector1" class="form-control1">
										<?php foreach ($provinces as $pr) :?>
											<option value="<?php echo $pr['id'];?>"><?php echo $pr['name'];?></option> 
										<?php endforeach;?>
									</select>
								</div>
								</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Seleccione Ciudad</label>
									<div class="col-sm-8">
									<select name="city_id" id="selector1" class="form-control1">
										<?php foreach ($cities as $ct) :?>
											<option value="<?php echo $ct['id'];?>"><?php echo $ct['name'];?></option> 
										<?php endforeach;?>
									</select>
								</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Seleccione Barrio</label>
									<div class="col-sm-8">
									<select name="barrio_id" id="selector1" class="form-control1">
										<?php foreach ($barrios as $br) :?>
											<option value="<?php echo $br['id'];?>"><?php echo $br['name'];?></option> 
										<?php endforeach;?>
									</select>
								</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Jefe Adjunto</label>
									<div class="col-sm-8">
										<input type="text" name="segundo_encargado" class="form-control1"  placeholder="insertar texto">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Linea 2</label>
									<div class="col-sm-8">
										<input type="text" name="contacto_adjunto" class="form-control1"  placeholder="insertar texto">
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" name="submit" value="Guardar" />
								</div>
								
							</form>
						</div>
					</div>
<?= $this->endSection() ?>


	



