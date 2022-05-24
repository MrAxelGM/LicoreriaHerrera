<?php 
    include('../conectar_utd.php');

  $id=$_REQUEST['id'];

  $sel=$conexion->query("SELECT * from promociones where id='$id'");

  if ($fila=$sel->fetch_assoc())
  {
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actualizar Promoción</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/modproductos.css">
        <link rel="icon" href="/logo1.png" type="image/png" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../template.html">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../tables.php">Ver registros</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="contac.php">Ver Contactos</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>

       <div class="container">
       <h1 class="h1 text-center">Actualicemos la Promoción</h1>
            <div align="center" class="form-row" >
                
                <form action="modpromo2.php" method="post">
               <div>
                   <label >Codigo: </label>
                   <input class="form-control" type="text" name="id" placeholder="Nombre" value="<?php echo $fila['id']?>" disabled>
               </div>
               <div>
                   <label >Descripción: </label>
                   <input class="form-control" type="text" name="descripcion" placeholder="Nombre" value="<?php echo $fila['Descripcion']?>" required>
               </div>
               <div>
                   <label >Precio: </label>
                   <input class="form-control" type="text" name="fecha" placeholder="Apellidos" value="<?php echo $fila['Fecha_expiracion']?>" required>
               </div>
               <div>
                   <label >Usuario: </label>
                   <input class="form-control" type="text" name="usuario" placeholder="Apellidos" value="<?php echo $fila['Usuario']?>" required>
               </div>
               <div>
                  <input  type="hidden" name="id" value="<?php echo $fila['id']?>">
                  <input class="btn btn-primary" type="submit" name="enviar" value="Guardar">
                  
               </div>
            
                </form>

               
                <!-- <a class="enlace_actualizar" href="menu.php">Menú Principal</a> -->
            </div>
          
       </div>
    </body>
</html>