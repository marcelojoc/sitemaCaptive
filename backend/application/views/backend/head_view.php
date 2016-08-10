<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
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
	                 <h1><a href="">Diplomatic Admin</a></h1>
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

    <div class="page-content">
    	<div class="row">