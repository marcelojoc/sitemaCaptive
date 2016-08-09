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

		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="<?php echo base_url()."index.php/home/"?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url()."index.php/config/"?>"><i class="glyphicon glyphicon-cog"></i> Configuracion</a></li>
                    <li><a href="<?php echo base_url()."index.php/login/out"?>"><i class="glyphicon glyphicon-stats"></i>Salir</a></li>
                </ul>
             </div>

		  </div>


<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
				
				<!-- aqui grocery -->

             <?php echo $output?>
				
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