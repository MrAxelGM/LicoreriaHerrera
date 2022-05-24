<?php 
  include('../conectar_utd.php');

  $id=$_POST['id'];
  $nom=$_POST['descripcion'];
  $fecha=$_POST['fecha'];
  $user=$_POST['usuario'];
  // $ape=$_POST['apellidos'];

  $up=$conexion->query("UPDATE promociones set Descripcion='$nom', Fecha_expiracion='$fecha',Usuario='$user' where id='$id'; ");

  if($up)
  echo "Registro act";
  else
  echo"act Fallido";
  
  echo"<script> location.href='administrarpromo.php' </script>";
   
  


?>