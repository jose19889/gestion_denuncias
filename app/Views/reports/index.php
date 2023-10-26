<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			
        	<div class="clearfix"> </div>
		</div>
		<br><br>
    <div class="col-md-12">
    <div class="tables">
    <h1><?= $this->renderSection('listado de usuarios') ?><h1>
    
    <h3 class="title1 "> Ventana de Denuncias</h3> 
        <a href="reports-create"><i class=" btn btn-info fa fa-plus">   </i> Agregar Denuncias</a>
        <a href="reports-create"><i class=" btn btn-info fa fa-book">   </i> Generar Citaciones</a>
        <a href="reports-create"><i class=" btn btn-info fa fa-file">   </i> Exportar </a>
     <hr>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="bg-info">
            <tr>
                <th>Nombte </th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
</tr>
<tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
</tr>
<tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
</tr>
<tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
</tr>
<tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>

                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
</tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
             
              
                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
              
             
                <td><i class=" fa fa-edit"> editar </i>|
                <i class="text-danger  fa fa-trash"> borrar </i> </td>
            </tr>
         
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
             
               
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