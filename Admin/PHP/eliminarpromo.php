<?php 
  include('../conectar_utd.php');

  $id=$_REQUEST['id'];

  $eli=$conexion->query("delete from promociones where id='$id'");

  if ($eli)
    echo ".::Registro Eliminado Con Exito::.";
    else
    echo ".::Registro No Eliminado, Por Favor Verifique Los Datos... ::.";

    echo"<script> location.href='administrarpromo.php' </script>";

?>
