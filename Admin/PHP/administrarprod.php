
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <!-- <link href="https://file.myfontastic.com/L5BeFP7iJsBgSvvxoKMcs9/icons.css" rel="stylesheet"> -->
        <link href="https://file.myfontastic.com/L5BeFP7iJsBgSvvxoKMcs9/icons.css" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link rel="icon" href="/logo1.png" type="image/png" />

        <link rel="stylesheet" href="../css/admin.css">
        <!-- <link rel="stylesheet" href="../css/AdminC.css"> -->
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../template.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../tables.php">Ver registros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insertproducto.php">Agregar producto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
       <div>
           <h1 style="text-align: center;">Administrar Productos</h1>
           <div class="table-container">
                <table class="table table-hover" ">
                    <thead  class="thead-light">
                        <th scope="row">ID</th>
                        <th scope="row">Nombre</th>
                        <th scope="row">Precio</th>
                        <th scope="row">Categoria</th>
                        <th scope="row">Acciones</th>

                    </thead>
                    
                    <?php
                      include('../conectar_utd.php');
                    
                        $sel=$conexion->query("SELECT * from productos");
                        while($fila=$sel->fetch_assoc()){
                           

                        ?>

                        <tr >
                            <td class="table-active"><?php echo $fila['id']  ?></td>
                            <td class="table_data"><?php echo $fila['Nombre']  ?></td>
                            <td class="table_data"><?php echo $fila['Precio']  ?></td>
                            <td class="table_data"><?php echo $fila['Categoria_produc']  ?></td>

                            <td class="table_data" colspan="2" >

                                <a class="icon-trash-o" class="btn_acciones" onclick="eliminarv();" href="eliminarprod.php?id=<?php echo $fila['id']  ?>"></a>
                               <a class="icon-wrench" class="btn_acciones"  href="modproductos.php?id=<?php echo $fila['id']  ?>"></a>
                            </td>
                        </tr> 
                        <?php     
                        }    
                       ?>                     
                </table>
           </div>
       </div>
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
    </body>
</html>