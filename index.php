<?php
include('conexion.php');
session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: login.php');
}
?>




<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: login.php');
}
	
$sql="SELECT * FROM login";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
	
?>
<?php
}



?>


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="img/icono.png">
    <title>pokemon</title>
</head>

<body>



    <div id="containerCharacters">
        <template id="templateCard">
            <div class="card-character">
                <img src="" alt="">
                <div class="containerInfo">                    
                    <h1></h1>
                    <span class="status">
                        <div id="divStatus" class="dead"></div>
                        <h3></h3>
                    </span>
                </div>
            </div> 
        </template>       
    </div>

    
    <div id="containerPokemon">
        
    </div>

    <form class="cerrar" method="POST">
    <button id="cerrar"  type="submit" name="btncerrar">Cerrar sesión</button>
    </form>
   
</body>

<script src="scripts/apiPokemon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>