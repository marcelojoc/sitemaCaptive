<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

    <title>Landing Hotel</title>

       <link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/bootstrap.min.css'?>">
       <link rel="stylesheet" href="<?php echo base_url().'lib/bootstrap/css/my.css'?>">
</head>
<body>
    
<div class="container">   <!--inicio del contenedor principal--> 

    <div class="row">   <!--logo Principal-->

        <div class=" col-xs-12 col-lg-12  logo_movil ">

            <img id="logo-img" class=" img-responsive center-block" src="<?php echo base_url().'assets/image/logo_d.png'?>" />

        </div>
    </div>
<!--formulario login-->

<div class="row">

	<div class="  col-xs-12 col-md-4 col-md-offset-4 ">

      <?php echo form_open('login/checklogin', 'class="form-horizontal" id="form_log"'); ?>
      <?php
        $arrOpt = array(
          'type'          => 'text',
          'name'          => 'username',
          'id'            => 'username',
          'placeholder'   => 'Usuario',
          'maxlength'     => '50',
          'class'         => 'form-control input-md'
         );

        $arrpass = array(
          'type'          => 'password',
          'name'          => 'txtpass',
          'id'            => 'txtpass',
          'placeholder'   => 'contraseña',
          'maxlength'     => '50',
          'class'          => 'form-control input-md'
         );
        ?>
  <div class="form-group">
    <div class="col-xs-12">
      <?php echo form_input( $arrOpt); ?>

    </div>
  </div>

  <div class="form-group">
    <div class="col-xs-12">

      <?php echo form_input( $arrpass); ?>
    </div>
  </div>

      <!-- Button -->
    <div class="form-group">
      <div class=" col-xs-12 ">
        <button id="btn" name="btn" class="btn btn-ttc btn-block" type="submit">Login</button>
      </div>
    </div>
     
      <?php echo form_close(); ?>

      <?php echo validation_errors(); 
  
?>

  </div>

</div>


</div>  <!--cierre del bloque contenedor-->





  </body>
</html>
