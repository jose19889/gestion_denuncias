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
    <a href="polistation-create">
        <i class=" btn btn-info fa fa-plus"> </i> Agregar Estaciones
    </a>
    <h1><?= $this->renderSection('listado de estaciones') ?><h1>
	<h2 class="title1">Ventana de Estaciones de policia</h2>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
   
        <thead class="bg-info">
            <tr>
                <th>Nombre </th>
                <th>Jefe Encargado</th>
                <th>contacto fijo</th>
                <th>Email</th>
                <th>contacto_jeffe</th>
                <th>Provincia</th>
                <th>Ciudad</th>
                <th>barrio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if($stations): ?>
          <?php foreach($stations as $station): ?>
            <tr>
                <td><?php echo $station['name']; ?></td>
                <td><?php echo $station['comisario_jefe']; ?></td>
                <td><?php echo $station['contacto']; ?></td>
                <td><?php echo $station['email']; ?></td>
                <td><?php echo $station['contacto_jefe']; ?></td>
                <td><?php echo $station['province_id']; ?></td>
                <td><?php echo $station['city_id']; ?></td>
                <td><?php echo $station['barrio_id']; ?></td>
               

         <td>
            <i class=" fa fa-edit"><a href="<?php echo base_url('polistation-edit/'.$station['id']);?>"> editar</a> </i>|
                <i class="text-danger  fa fa-trash">
        <a href="<?php echo base_url('polistation-delete/'.$station['id']);?>" onclick="return confirm('Desea Borrar Este registro?');">Delete</a>
              
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