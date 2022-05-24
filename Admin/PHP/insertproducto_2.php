<?php

	include ("../conectar_utd.php");

    if(isset($_POST['register'])) {

        $nombre=$_POST['name'];
	    $precio=$_POST['price'];
	    $categoria=$_POST['cate'];
		
        $consulta="INSERT INTO productos (Nombre, Precio, Categoria_produc) VALUES ('$nombre', '$precio', '$categoria')";
        $resultado=mysqli_query($conexion, $consulta);
    
        if ($resultado) {
            echo "<script> alert('Registro agregado correctamente');
            location.href='administrarprod.php'; 
            </script> ";
        } else {
            echo "<script> alert('Error al ingresar registro. Verifique sus datos.');
            location.href='insertproducto.php';
            </script> ";
        }

    }

?>