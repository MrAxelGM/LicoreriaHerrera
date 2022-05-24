<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="/logo1.png" type="image/png" />      
    <title>Insertar Promoción</title>
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
    <div class="conta">
        <!-- What r u doing here? -->
        <!-- Ok -->
        <!-- Ya nomas es quien dice hacer lo mismo pero con 
las otras secciones  "Promociones y Usuarios" y ya seria todo. -->

    <h1 class="h1 text-center">Nueva Promoción</h1>
        <form method="post">
            <table align="center">
                <!-- <tr>
                    <td>ID: </td>
                    <td><input class="form-control" type="text" name="id" placeholder="ID" required></td>
                </tr> -->
                <tr>
                    <td>Descripción: </td>
                    <td><input class="form-control" type="text" name="descrip" placeholder="Descripción" required></td>
                </tr>
                <tr>
                    <td>Fecha Expiracion: </td>
                    <div class="form-group">
                        <td><input class="form-control" id="date" name="fecha" placeholder="Año-Mes-Día" type="text" required/></td>
                        <script>
                            $(document).ready(function(){
                                var date_input=$('input[name="fecha"]'); //our date input has the name "date"
                                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                                var options={
                                    format: 'yyyy-mm-dd',
                                    container: container,
                                    todayHighlight: true,
                                    autoclose: true,
                                };
                            date_input.datepicker(options);
                            })
                        </script>
                    </div>
                </tr>
                <tr>
                    <td>Usuario: </td>
                    <td><input class="form-control" type="text" name="user" placeholder="Usuario" required></td>
                </tr>
                <tr>
                    <td><input class="btn btn-success" type="submit" name="register" value="Ingresar"></td>
                    <td><input class="btn btn-danger" type="reset" name="delete" value="Limpiar"></td>
                </tr>
            </table>
        </form>
        <?php
        include("insertpromo2.php");
        ?>
        <blockquote class="blockquote text-center">
            <a class="btn btn-dark" href="administrarpromo.php">Menu Administrar</a>
        </blockquote>
    </div>
    

</body>

</html>