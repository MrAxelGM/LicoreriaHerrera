<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Usuarios</title>
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
                    <!--<li class="nav-item">
                        <a class="nav-link" href="insertpromo.php">Agregar Promocion</a>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>
       <div>
           <h1 style="text-align: center;">Usuarios</h1>
           <div class="table-container">
                <table class="table table-hover" ">
                    <thead  class="thead-light">
                        <th scope="row">User</th>
                        <th scope="row">Contraseña</th>
                        <th scope="row">Privilegio</th>
                        <!--<th scope="row">Usuario</th>
                        <th scope="row">Accion</th>-->

                    </thead>
                    
                    <?php
                      include('../conectar_utd.php');
                    
                        $sel=$conexion->query("SELECT * from tusuarios");
                        while($fila=$sel->fetch_assoc()){
                           

                        ?>

                        <tr >
                            <td class="table-active"><?php echo $fila['username']  ?></td>
                            <td class="table_data"><?php echo $fila['password']  ?></td>
                            <td class="table_data"><?php echo $fila['privilegio']  ?></td>
                            

                            <!--<td class="table_data" colspan="2" >

                                <a class="icon-trash-o" class="btn_acciones" onclick="eliminarv();" href="eliminarpromo.php?id=<?php echo $fila['id']  ?>"></a>
                               <a class="icon-wrench" class="btn_acciones"  href="modpromo.php?id=<?php echo $fila['id']  ?>"></a>
                            </td>-->
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