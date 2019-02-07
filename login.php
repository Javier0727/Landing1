<?php
// Con esto de session_start(); se le inidica al php que aqui va a haber opciones de session
// Y todas las paginas donde necesites usar las variables de session ponles el session_start();
session_start();
$_SESSION['nombrepublico'];
$_SESSION['identificador'];
	if(isset($_REQUEST['aceptarind'])){//boton desde el index
	$usu=$_REQUEST['usuario'];
	$pass=$_REQUEST['pass'];
	include('Conexion.php');
	// Y a la hora de usuar una variable de session se usa de esta forma $_SESSION['nombredelavariable']
	//$query="SELECT * FROM registro WHERE email_usu = $_SESSION['usuario']";
		//sesion =1 es alumno , sesion =2 es mentor
	$query="SELECT * FROM registro WHERE email_usu = '$usu' AND password= '$pass'";//id debe ser desde la sesion
	$resultado= mysqli_query($conn,$query);
	$num=mysqli_num_rows($resultado);
	if($num>0){
		$sesion=1;
		}
	$query2="SELECT * FROM mentores WHERE email_mentor = '$usu' AND password_mentor= '$pass'";//id debe ser desde la sesion
	$resultado2= mysqli_query($conn,$query2);
	$num2=mysqli_num_rows($resultado2);
	echo("$num,$num2");	
		if($num2>0){
		$sesion=2;
		}
switch($sesion) {
	case 1:
	while($reg=mysqli_fetch_array($resultado)){
		// Aqui empieza a guardar las variables con $_SESSION para que cuando cierren sesion o esas madres, bote todo de hilo
		$_SESSION['nombrepublico']=$reg['nompub_usu'];
		$_SESSION['identificador']=$reg['id_usuario'];
		mysqli_close($conn);
		header('Location: bienvenido.php');	
		}
	break;
		case 2:
	while($reg2=mysqli_fetch_array($resultado2)){
		// Aqui empieza a guardar las variables con $_SESSION para que cuando cierren sesion o esas madres, bote todo de hilo
		$_SESSION['nombrepublico']=$reg2['nompub_mentor'];
		$_SESSION['identificador']=$reg2['id_mentor'];
		mysqli_close($conn);
		header('Location: advisors/bienvenido.php');
		}
		break;
default:
header('Location: inicio.html');
}
	mysqli_close($conn);
	}
   	?>