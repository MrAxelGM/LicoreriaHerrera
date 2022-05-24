
<?php

include ("../conectar_utd.php");

  if(isset($_POST['register'])) {

    $descripcion=$_POST['descrip'];
    $fecha=$_POST['fecha'];
    $usuario=$_POST['user'];
  
      $consulta="INSERT INTO promociones (Descripcion, Fecha_expiracion, Usuario) VALUES ('$descripcion', '$fecha', '$usuario')";
      $resultado=mysqli_query($conexion, $consulta);
  
      if ($resultado) {
          echo "<script> alert('Registro agregado correctamente');
          location.href='administrarpromo.php'; 
          </script> ";
      } else {
          echo "<script> alert('Error al ingresar registro. Verifique sus datos.');
          location.href='insertpromo.php';
          </script> ";
      }

  }

?>