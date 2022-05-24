<?php
  session_start();
  if (isset($_SESSION)) {
    session_destroy();
  }
 

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $us=$_POST['nombre'];
    $ps=$_POST['pass'];

    require_once("conectar_utd.php");

    $consulta="select username, password, privilegio from tusuarios where username='$us' and password='$ps'";
    //ejecutar la consulta
    $query=mysqli_query($conexion,$consulta) or die("Error al ejecutar la consulta");
    
    if($columna=mysqli_fetch_array($query)) 
     {
       $priv=$columna['privilegio'];
     }

    if (mysqli_num_rows($query)>0)
    {
        session_start();
        $_SESSION['user']=$us;
        $_SESSION['pass']=$ps;
       
        

        if ($priv=="admin")
          $_SESSION['priv']="admin";
        else if($priv=="estandar")
          $_SESSION['priv']="estandar";
       
          echo "<script> alert('Inicio de Sesion, - B I E N V E N I D O -');
                         location.href='../Admin/template.html'; 
               </script> ";
        
          header('Location: ../Admin/template.php');

    }
    else
     {
       echo "<script>
              window.alert('Usuario y/o Contraseña incorrectas, por favor verifique ... ');
              window.location.href='login.php';
            </script> ";   
     }
     
  }
  
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="icon" href="/logo1.png" type="image/png" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>LOGIN DE ACCESO</title>

    </head>

    <body>



        <!-- <form action="comprueba.php" method="post"> -->
        <div class="login-box">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <img src="./img/logo_azul.png" alt="Licoreria Herrera's" class="logo">
                <table align="center">
                    <tr>
                        <td>Usuario: </td>
                        <td><input type="text" name="nombre" required></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="password" name="pass" required></td>
                    </tr>
                    <tr>
                      <td><input class="btn" type="submit" name="enviar" onclick="confirmar();" value="ENTRAR"></td>
                      <td><input class="btn" type="reset" name="borrar" value="BORRAR"></td>
                    </tr>
                </table>
                <!-- <div>
            <h1>asd</h1>
          </div>
           -->

                <div>
                    <footer class="Regs">
                        <p><a href="/index.html">Volver</a></p>
                    </footer>
                </div>


            </form>

        </div>


    </body>

    </html>

  