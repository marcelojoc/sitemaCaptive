<?php
Class huesped_model extends CI_Model
{
 function get_all()
 {
  $this ->db->select('id_visitante, name, mac, email, checkin','checkout', 'huesped');
   $this ->db->from('creds');


   $result = $this->db->query("
                                SELECT id_visitante,name, mac, email, 
                                DATE_FORMAT(checkin, '%d/%m/%Y')AS checkin , 
                                DATE_FORMAT(checkout, '%d/%m/%Y')AS checkout ,
                                huesped 
                                FROM creds
   ");






//Kint::dump($result -> num_rows());

   if($result -> num_rows() >0)
   {

     
     return $result->result() ;
   }
   else
   {
     return false;
   }
 }

}
?>
