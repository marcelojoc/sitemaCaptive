<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    	
<?php 

foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>


<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

	<link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/styles.css'?>">

    <!-- styles -->

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-6">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Diplomatic Admin</a></h1>
	              </div>
	           </div>


	           <div class="col-md-6">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->logged_in['nombre'] ?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html"><?php echo $this->session->logged_in['nick'] ?> </a></li>
	                          <li><a href="login/out">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>						 

	        </div>
	     </div>
	</div>

<!-- Hasta aqui header -->



		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="<?php echo base_url()."index.php/home/"?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li ><a href="<?php echo base_url()."index.php/visita/"?>"><i class="glyphicon glyphicon-plane"></i> Visitantes</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-cog"></i> Configuracion</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i>datos</a></li>

                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>

		  </div>



<div class="col-md-10">
		  	<div class="row">
		  		<?php echo $output?>
  			</div>
</div> <!-- termina el div de 10 columnas -->

    
      </div><!-- Cierro el contenido del bloquero princ -->
   </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'lib/bootstrap/js/bootstrap.min.js'?>"></script>

 </body>
</html>