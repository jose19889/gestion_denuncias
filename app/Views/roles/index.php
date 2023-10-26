<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
        	<div class="clearfix"> </div>
		</div>
		<br><br>
    <div class="col-md-12">
    <div class="tables">
    <?= $this->include('app/alerts') ?>
    <h3 class="title1 "> Roles y permisos</h3> 
        <a href="roles-create"><i class=" btn btn-info fa fa-plus">   </i> Agregar Roles</a>
                    
	<table id="example" class="table table-striped table-bordered" style="width:100%">
   
        <thead class="bg-info">
            <tr>
                <th>Nombre </th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if($roles): ?>
          <?php foreach($roles as $role): ?>
            <tr>
                <td><?php echo $role['name']; ?></td>
                <td><?php echo $role['descp']; ?></td>
               

         <td>
            <i class=" fa fa-edit"><a href="<?php echo base_url('roles-edit/'.$role['id']);?>"> editar</a> </i>|
                <i class="text-danger  fa fa-trash">
        <a href="<?php echo base_url('roles-delete/'.$role['id']);?>" onclick="return confirm('Desea Borrar Este registro?');">Delete</a>
              
             </i> 

     
            </td>
            </tr>
            <?php endforeach; ?>
         <?php endif; ?>
             
               
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