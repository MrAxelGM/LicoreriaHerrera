<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="/logo1.png" type="image/png" />      
    <title>Insertar Producto</title>
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
    <h1 class="h1 text-center">Nuevo Producto</h1>
        <form method="post">
            <table align="center">
                <tr>
                    <td>Nombre: </td>
                    <td><input class="form-control" type="text" name="name" placeholder="Nombre" required></td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><input class="form-control" type="text" name="price" placeholder="Precio" required></td>
                </tr>
                <tr>
                    <td>Categoría:</td>
                    <td>
                        <select class="form-control" name="cate" required>
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
                    </td>
                </tr>
                <tr>
                    <td><input class="btn btn-success" type="submit" name="register" value="Ingresar"></td>
                    <td><input class="btn btn-danger" type="reset" name="delete" value="Limpiar"></td>
                </tr>
            </table>
        </form>
        <?php
        include("insertproducto_2.php");
        ?>
        <blockquote class="blockquote text-center">
            <a class="btn btn-dark" href="administrarprod.php">Menu Administrar</a>
        </blockquote>
    </div>

</body>

</html>