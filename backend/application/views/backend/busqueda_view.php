

<?php include "head_view.php"   ?>

<?php include "menu_view.php"   ?>
<div class="col-md-10">

		  	<div class="row">


		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Busqueda </div>
								
								<div class="panel-options">
								
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-search"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				


		  		<form class="form-horizontal">
                        <fieldset>


                        <!-- Appended Input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="appendedtext">Desde</label>
                        <div class="col-md-4">
                            <div class="input-group">
                            <input id="appendedtext" name="appendedtext" class="form-control" placeholder="dd/mm/yyy" type="text" required="">
                            <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        </div>
                        <!-- Appended Input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="appendedtext">Hasta</label>
                        <div class="col-md-4">
                            <div class="input-group">
                            <input id="appendedtext" name="appendedtext" class="form-control" placeholder="dd/mm/yyyy" type="text" required="">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        </div>
                        <!-- Multiple Checkboxes -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="checkboxes">Opciones</label>
                        <div class="col-md-4">
                        <div class="checkbox-inline">
                            <label for="checkboxes-0">
                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                            Huesped
                            </label>
                            </div>
                        <div class="checkbox-inline">
                            <label for="checkboxes-1">
                            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                            Visitante
                            </label>
                            </div>
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
                        </div>
                        </div>

                        </fieldset>
                </form>


							</div>
		  				</div>



                  
  			</div> <!-- termina row -->
</div> <!-- termina el div de 10 columnas -->




<?php include "footer_view.php"   ?>