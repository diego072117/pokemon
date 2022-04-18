<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/login.css">
  <link rel="icon" href="img/icono.png">
  <title>login</title>
</head>
<body>
<form method="post" action="login.php" name="vaidrollteam">

  <div class="form-body">
    <img src="img/persona.png" alt="">
    <p class="text">Bienvenido</p>
    <form class="login-form">
    <input type="text" name="txtusuario" placeholder=" Ingresar usuario" required />
    <input type="password" name="txtpassword" placeholder=" Ingresar Contraseña" required /> 

    <button name="btningresar">Ingresar</button>
    <button><a href="registrar.php">Registrarse</a></button>
          
    </form>
    



  </div>
</body>
</html>

<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: index.php');
}

if(isset($_POST['btningresar']))
{
	
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];


	

	
$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$_SESSION['nombredelusuario']=$nombre;
	header("Location: index.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'login.php' </script>";
}

} 
?>