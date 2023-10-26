<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
        	<div class="clearfix"> </div>
		</div>
		<br><br>
    <div class="col-md-12">
    <?= $this->include('app/alerts') ?>
    <div class="tables">
    <h1><?= $this->renderSection('listado de usuarios') ?><h1>
					<h2 class="title1">Ventana de usuarios</h2>
                    <a href="users
-create"><i class=" btn btn-info fa fa-plus">   </i> Agregar usuarios
</a>
					<table id="example" class="table table-striped table-bordered" style="width:100%">


                  <?php foreach ($query->result() as $row)
{
        echo $row->name;
} ;?>


        <thead class="bg-info">
            <tr>
                <th>Nombre </th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Contacto</th>
                <th>role de usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if($users
): ?>
          <?php foreach($users
 as $user
): ?>
       
            <tr>
                <td><?php echo $user['name'];?></td>
                <td><?php echo $user['surname'];?></td>
                <td><?php echo $user['email'];?></td>
                <td><?php echo $user['contacto'];?></td>
                <td><?php echo $user['role_id'];?></td>

               
         <td>
            <i class=" fa fa-edit">
                <a href="<?php echo base_url('users-edit/'.$user['id']);?>"> editar</a> </i>|
            <i class="text-danger  fa fa-trash">
                 <a href="<?php echo base_url('users-delete/'.$user['id']);?>" onclick="return confirm('Desea Borrar Este registro?');">Delete</a>
             </i> 

     
            </td>
            </tr>
            <?php endforeach; ?>
         <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Nombre </th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Contacto</th>
                <th>role de usuario</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
				</div>
    </div>

    <div class="clearfix"> </div>
		<script >
         new DataTable('#example')
    .on('order.dt', () => eventFired('Order'))
    .on('search.dt', () => eventFired('Search'))
    .on('page.dt', () => eventFired('Page'));
        </script>	
<?= $this->endSection() ?>