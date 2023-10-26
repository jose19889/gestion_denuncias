<?= $this->extend('app/header') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	
        	
            <?= $this->include('app/shortcut') ?>
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		<br><br>
				<div class="charts">
					
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header">
							<h3>Balance de tipos de Denuncias</h3>
						</div>
						<div id="chartdiv"></div>
					</div>
					<div class="col-md-4 charts-grids widget">
						
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 class="text-danger">Ultimas 10 denuncias :</h4>
						<table class="table"> <thead> <tr> <th>#</th> <th>Denunciante</th> <th>Denunciado</th> <th>Column heading</th> </tr> </thead> 
						<tbody>
							 <tr class="active">
								 <th scope="row">1</th>
							  <td>Column content</td>
							   <td>Column content</td>
							   <td>Column content</td>
							 </tr> <tr> <th scope="row">2</th>
							    <td>Column content</td>
								 <td>Column content</td>
								  <td>Column content</td>
								 </tr> <tr class="success">
									 <th scope="row">3</th>
									  <td>Column content</td> 
									  <td>Column content</td> 
									  <td>Column content</td>
									 </tr> <tr> <th scope="row">4</th> 
									 <td>Column content</td>
									  <td>Column content</td> 
									 <td>Column content</td> 
									</tr> <tr class="info"> 
										<th scope="row">5</th> 
										<td>Column content</td> 
										<td>Column content</td>
										 <td>Column content</td> 
									</tr> <tr> <th scope="row">6</th>
									 <td>Column content</td> 
									<td>Column content</td> 
									<td>Column content</td> 
								</tr> <tr class="warning"> <th scope="row">7</th>
								 <td>Column content</td> <td>Column content</td> 
								 <td>Column content</td> </tr> <tr> <th scope="row">8</th>
								  <td>Column content</td> <td>Column content</td> <td>Column content</td> 
								</tr> <tr class="danger"> <th scope="row">9</th> <td>Column content</td> 
								<td>Column content</td> <td>Column content</td> </tr> </tbody> </table> 
					</div>
					</div>
			
					<div class="clearfix"> </div>
				</div>
<?= $this->endSection() ?>


	



