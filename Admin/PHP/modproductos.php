
    <?php 
    include('../conectar_utd.php');

  $id=$_REQUEST['id'];

  $sel=$conexion->query("SELECT * from productos where id='$id'");

  if ($fila=$sel->fetch_assoc())
  {
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actualizar Producto</title>
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
       <h1 class="h1 text-center">Actualicemos Producto</h1>
            <div align="center" class="form-row" >
                
                <form action="modproductos2.php" method="post">
               <div>
                   <label >Codigo: </label>
                   <input class="form-control" type="text" name="id" placeholder="Nombre" value="<?php echo $fila['id']?>" disabled>
               </div>
               <div>
                   <label >Nombre: </label>
                   <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['Nombre']?>" required>
               </div>
               <div>
                   <label >Precio: </label>
                   <input class="form-control" type="text" name="precio" placeholder="Apellidos" value="<?php echo $fila['Precio']?>" required>
               </div>
               <div>
                   <label >Categoria: </label>
                   <!-- <input type="text" name="categ" placeholder="Nombre" > -->
                   <select class="custom-select" name="categ" value="<?php echo $fila['Categoria_produc']?>" required>
                            <option selected>Averigüémoslo...</option>
                            <option value="1">Cerveza</option> 
                            <option value="2">Vino</option>
                            <option value="3">Whisky</option>
                            <option value="4">Tequila</option>
                            <option value="5">Ron</option>
                            <option value="6">Vodka</option>
                            <option value="7">Brandy</option>
                            <option value="8">Refresco</option>
                            <option value="9">Agua Mineral</option>
                            <option value="11">Frituras</option>  
                        </select>
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