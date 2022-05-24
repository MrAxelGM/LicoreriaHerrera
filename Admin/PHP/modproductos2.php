<?php 
  include('../conectar_utd.php');

  $id=$_POST['id'];
  $nom=$_POST['nombre'];
  $pre=$_POST['precio'];
  $cat=$_POST['categ'];
  // $ape=$_POST['apellidos'];

  $up=$conexion->query("UPDATE productos set Nombre='$nom', Precio='$pre',Categoria_produc='$cat' where id='$id'; ");

  if($up)
  echo "Registro act";
  else
  echo"act Fallido";
  
  echo"<script> location.href='administrarprod.php' </script>";
   
  


?>