<!DOCTYPE html>
<html>
  <head>
    <title>Administracion Hotel Diplomatic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
		<link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/styles.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/pikaday.css'?>">


    <!-- styles -->

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-6">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="">Diplomatic Admin</a></h1>
	              </div>
	           </div>


	           <div class="col-md-6">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenido ". $this->session->logged_in['nombre'] ?></a>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>						 

	        </div>
	     </div>
	</div>

<!-- Hasta aqui header -->

    <div class="page-content">
    	<div class="row">

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
				  				

                      <?php echo form_open('home/buscar', 'class="form-horizontal" id="form_log"'); ?>
		  		

                  <?php // creando arreglsdo para setear campos
                    $arrdesde = array(
                            'type'          => 'text',
                            'name'          => 'txtdesde',
                            'id'            => 'txtdesde',
                            'placeholder'   => 'dd/mm/yyyy',
                            'maxlength'     => '15',
                            'class'         => 'form-control',
                           
                            'readonly'      => 'readonly'
                    );
                    $arrhasta = array(
                            'type'          => 'text',
                            'name'          => 'txthasta',
                            'id'            => 'txthasta',
                            'placeholder'   => 'dd/mm/yyyy',
                            'maxlength'     => '15',
                            'class'         => 'form-control',
                            
                            'readonly'      => 'readonly'
                    );
   
                  ?>
                        <fieldset>


                        <!-- Appended Input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="txtdesde">Desde</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <?php echo form_input( $arrdesde); ?>
                                <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        </div>
                        <!-- Appended Input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="txthasta">Hasta</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <?php echo form_input( $arrhasta); ?>      
                                                   
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
                            <input type="checkbox" name="check[]" id="check1" value="1" checked>
                            Huesped
                            </label>
                            </div>
                        <div class="checkbox-inline">
                            <label for="checkboxes-1">
                            <input type="checkbox" name="check[]" id="check2" value="0" checked>
                            Visitante
                            </label>
                            </div>
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class=" col-xs-4 col-xs-offset-4 ">
                                <input id="btn" name="btn" class="btn btn-success btn-block" type="submit" value="Buscar" >
                            </div>
                        </div>

                        </fieldset>
                <?php echo form_close(); ?>

                <?php echo validation_errors(); ?>


							</div>
		  				</div>



                  
  			</div> <!-- termina row -->
</div> <!-- termina el div de 10 columnas -->




</div><!-- Cierro el contenido del bloquero princ -->
   </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016 <a href='#'>TMSGroup s.a</a>
            </div>
            
         </div>
      </footer>


    <script src="<?php echo base_url().'lib/bootstrap/js/jquery-3.1.0.min.js'?>"></script>
    <script src="<?php echo base_url().'lib/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'lib/bootstrap/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'lib/bootstrap/js/pikaday.js'?>"></script>

    <script>

// autoejecutable
    (function(){ 
    
        var pkdesde = new Pikaday(
        {
            field: document.getElementById('txtdesde'),
            firstDay: 1,
            format: 'DD/MM/YYYY',
            yearRange: [2000,2050]
        });

        var pkhasta= new Pikaday(
        {
            field: document.getElementById('txthasta'),
            firstDay: 1,
            position: 'auto',
            format: 'DD/MM/YYYY',
            yearRange: [2000,2050]

        });


        function activapicker(){
            $('#txthasta').val("");
            pkhasta.setMinDate(pkdesde.getDate())
        }

        $('#txtdesde').on('change', function(){
            activapicker();
        });


        $('#form_log').submit( function(){
            
            /*que debo hacer cuando ejeuto el evento sumbit?
            comprobar que los input no esten vacios
            */

            if($('#txtdesde').val()!= "" && $('#txthasta').val()!= "" ){

                if (validarCheck()){
                    return true

                }else{

                    alert("Debes seleccionar al menos una opcion Visitante y/o Huesped");
                    return false;
                }

            }else{
                    alert("Debes completar los campos de fechas");
                    return false;        
            }
  
        });    
    
    function validarCheck(){

        if($('#check1').is(':checked') || $('#check2').is(':checked')){

            return true;

        }else{

            return false
        }

    }

    })();

</script>



 </body>
</html>