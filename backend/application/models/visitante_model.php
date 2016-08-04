<?php
Class Usuario_model extends CI_Model
{
 function visitantes()
 {
   $this -> db -> select('id_user, nombre, apellido, nick_name, password');
   $this -> db -> from('creds');
   //$this -> db -> where('nombre', $username);
   //$this -> db -> where('password', MD5($password));
   //$this -> db -> where('password', $password);
   //$this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() >0)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

}
?>
