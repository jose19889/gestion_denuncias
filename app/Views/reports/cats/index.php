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
    <h3 class="title1 "> Tipo de denuncias</h3> 
        <a href="cats-create"><i class=" btn btn-info fa fa-plus">   </i> Agregar tipos</a>
                    
	<table id="example" class="table table-striped table-bordered" style="width:100%">
   
        <thead class="bg-info">
            <tr>
                <th>Nombre </th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if($tipo_denuncias): ?>
          <?php foreach($tipo_denuncias as $tipo): ?>
            <tr>
                <td><?php echo $tipo['name']; ?></td>
                <td><?php echo $tipo['descp']; ?></td>
               

         <td>
            <i class=" fa fa-edit"><a href="<?php echo base_url('cats-edit/'.$tipo['id']);?>"> editar</a> </i>|
                <i class="text-danger  fa fa-trash">
        <a href="<?php echo base_url('cats-delete/'.$tipo['id']);?>" onclick="return confirm('Desea Borrar Este registro?');">Delete</a>
              
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