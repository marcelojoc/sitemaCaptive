<!DOCTYPE html>
<html>
  <head>
    <title>Hotel Diplomatic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/styles.css'?>">
<?php 

foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>


<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>



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
					
					<!-- aqui grocery -->

					<div class="content-box-header">
						<div class="panel-title">Busqueda</div>

							<div class="panel-options">
							<a href="<?php echo base_url()."index.php/home/"?>" data-rel="collapse"><i class="glyphicon glyphicon-arrow-left">  Busqueda</i></a>
							</div>
						</div>
						<div class="content-box-large box-with-header" >
						<?php echo $output?>
					</div>

				
					
					</div>
				</div>
		</div> <!-- termina el div de 10 columnas -->

      </div><!-- Cierro el contenido del bloquero princ -->
   </div>
<br>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016 <a href='#'>TMSGroup s.a</a>
            </div>
            
         </div>
      </footer>


 </body>
</html>