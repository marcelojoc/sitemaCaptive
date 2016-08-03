<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login del sitio_view </title>
  </head>
  <body>

     <h1>Login de Usuario</h1>


      <?php echo form_open('admin/login/checklogin'); ?>


      <?php
        $arrOpt = array(
          'type'          => 'text',
          'name'          => 'username',
          'id'            => 'username',
          'placeholder'   => 'johndoe',
          'maxlength'     => '100',
          'size'          => '20'
         );
        echo form_input( $arrOpt); ?>

      <?php
        $arrpass = array(
          'type'          => 'password',
          'name'          => 'password',
          'id'            => 'password',
          'placeholder'   => 'contraseña',
          'maxlength'     => '100',
          'size'          => '20'
         );
        echo form_input( $arrpass); ?>

        <p class="submit"><input type="submit" name="login" value="Login"></p>


        <?php echo form_close(); ?>

        <?php echo validation_errors(); ?>
  </body>
</html>
