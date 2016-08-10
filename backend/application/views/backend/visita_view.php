
<div class="col-md-10">

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">New vs Returning Visitors</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
						<br /><br />
					</div>
		  		</div>
		  	</div>

<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>nombre</th>
								<th>mac</th>
								<th>email(s)</th>
								<th>checkin</th>
								<th>checkout</th>
							</tr>
						</thead>
						<tbody>
							


                        <?php 

                        foreach($huespedes as $huesped): ?>

							<tr class="gradeU">

								<td><?php echo $huesped->name; ?></td>
								<td><?php echo $huesped->mac; ?></td>
								<td><?php echo $huesped->email; ?></td>
								<td class="center"><?php echo $huesped->checkin; ?></td>
								<td class="center"><?php echo $huesped->checkout; ?></td>
							</tr>


                        <?php endforeach; ?>


						</tbody>
					</table>
  				</div>
  			</div>
</div> <!-- termina el div de 10 columnas -->