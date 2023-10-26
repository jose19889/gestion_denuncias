<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
        	<div class="clearfix"> </div>
			<h1><?= $this->renderSection('listado de usuarios') ?><h1>
			
		</div>
		<br><br>

		<div class="row">
	
		<?= $this->include('app/alerts') ?>
		<?php if (! empty($errors)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>
						<h3 class="title1">Registro de Usuarios:</h3>
						<div class="form-three widget-shadow">
						<form  action="<?php echo site_url('users-insert');?>" method="post" class="form-horizontal">
						
								<div class="form-group">
									<label  class="col-sm-2 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name"  value="">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Inserte lso datos</p>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Apellidos</label>
									<div class="col-sm-8">
										<input  type="text" class="form-control1" name="surname" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1"  name="password"  placeholder="Password">
									</div>
									<div class="col-sm-2">
										<p class="text-danger help-block">6 carcatres como Mínimo</p>
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Seleccione Role</label>
									<div class="col-sm-8">
										<select name="role_id" id="selector1" class="form-control1">
									<?php foreach ($roles as $role) :?>
									<option value="<?php echo $role['id'];?>"><?php echo $role['name'];?></option> 
									
									<?php endforeach;?>

									</select></div>
								</div>
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Correo Electronicos</label>
									<div class="col-sm-8">
										<input type="email" class="form-control1 input-lg"  name="email" placeholder="Large Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label  class="col-sm-2 control-label label-input-lg">Contacto</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg"  name="contacto" placeholder="Large Input">
									</div>
									<div class="col-sm-2">
										<p class="text-danger help-block">8 carcatres como Mínimo</p>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" name="submit" value="Guardar" />
								</div>
							</form>
						</div>
					</div>
<?= $this->endSection() ?>


	



