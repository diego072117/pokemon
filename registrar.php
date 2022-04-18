<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/registro.css">
  <link rel="icon" href="img/icono.png">
  <title>Formulario Registro</title>
</head>
<body>

<form method="post" action="registrar.php" name="vaidrollteam">

  <section class="form-register">
    <h4>Registrese</h4>
    <input class="controls"  type="text" name="txtusuario" placeholder="&#128273; Ingresar usuario" required />
    <input class="controls"  type="password" name="txtpassword" placeholder="&#128274; Ingresar Contraseña" required />
   

   
    
    <button  type="submit"  name="btnregistrar">Registrarse</button>
    <p><a href="login.php" >¿Ya tengo Cuenta?</a></p>
  </section>

</body>
</html>

<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: index.php');
}

if(isset($_POST["btnregistrar"]))
{

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];


	$sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.php' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
} 
?>