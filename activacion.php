<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Activacion</title>
</head>

<body>
<?php
	
	$activate= $_GET["id"];
	//incluye la conexion
	include('Conexion.php');
	//Se crea la consulta para insertar los datos en la BD
	$query="UPDATE registro
            SET estado = '0' WHERE   activate = '$activate'" ;
    $result= mysqli_query($conn,$query); 

	//Cierro la conexion	
				mysqli_close($conn);
				// Aqui lo podriamos mandar a index para no hacer otra pantalla
				header('Location: https://inferoxacademy.com/inicio.html');
	// echo("Muchas gracias tu cuenta ha sido activada :3");


?>
</body>
</html>