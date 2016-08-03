<?php
Class Usuario_model extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id_user, nombre, apellido, nick_name, password');
   $this -> db -> from('user');
   $this -> db -> where('nombre', $username);
   //$this -> db -> where('password', MD5($password));
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
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
