<?php
session_start();
$_SESSION['nombrepublico'];
?>
<html lang="en">
    <head>
        <title>Inferox Academy</title>  
        <link rel="icon" type="image/png" href="media/faviconchido.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css/bootstrap.css" rel="stylesheet">
        <link href="css/13.css" rel="stylesheet">
    </head>
    <body>
<?php
$direccion="dashboard/3.php";
        $nombrepub=$_SESSION['nombrepublico'];
//Si se presiona el boton
if(isset($_REQUEST['aceptarreg'])){//boton desde el registro
    //variable para reedirigir
$direccion="dashboard/3.php";
    //incluimos la funcion
include('funciones.php');
//incluye la conexion
include('Conexion.php');
//recibe y guarda en variables los campos
    $nombres = $_REQUEST['nombres'];
	$apellidos = $_REQUEST['apellidos'];
	$nombrepub = $_REQUEST['nompublic'];
	$telefono = 0;
	$pais = $_REQUEST['pais'];
	$ciudad = $_REQUEST['ciudad'];
	$empresa = $_REQUEST['empresa'];
	$puesto = $_REQUEST['puesto'];
	$email = $_REQUEST['email'];
	$sexo = $_REQUEST['sexo'];
	$birthday = $_REQUEST['birthday'];
    $micro_creditos = 1;
    $portada="portadas/back.png";
    $imagen="fotos/img-ferox.png";
//la variable fecha adquiere los valores en tiempo real
	//$fecha=date('l jS \of F Y h:i:s A');
    $query="INSERT INTO `registro`(`nombres_usu`, `password`, `apellidos_usu`, `nompub_usu`, `telefono_usu`, `pais_usu`, `ciudad_usu`, `empresa_usu`, `puesto_usu`, `email_usu`, `sexo_usu`, `birthday_usu`, `activate`, `estado`, `micro_creditos_usu`,`imagen_usu`,`portada_usu`) VALUES ('$nombres','$pass','$apellidos','$nombrepub','$telefono','$pais','$ciudad','$empresa','$puesto','$email','$sexo','$birthday','$activate','1','$micro_creditos','$imagen','$portada')";
    $result= mysqli_query($conn,$query);
		$query2="SELECT * FROM registro WHERE activate= '$activate'";
		$resultado=mysqli_query($conn,$query2)or die(mysql_error());
		$num=mysqli_num_rows($resultado);
	if($num>0)
	while($reg=mysqli_fetch_array($resultado)){
        $_SESSION['identificador']= $reg['id_usuario'];
        $_SESSION['nombrepublico']= $reg['nompub_usu'];
    }
// $mensaje = "Registro en Inferoxacademy.com\n\n";
// $mensaje .= "Estos son tus datos de registro:\n";
// $mensaje .= "Usuario: $nombrepub\n";
// $mensaje .= "Contraseña: $pass\n\n";
// $mensaje .= "Debes activar tu cuenta pulsando este enlace: https://inferoxacademy.com/activacion.php?id=$activate";
$mensaje="
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link href='css/css/bootstrap.css' rel='stylesheet'>
    <link href='css/estilo.css' rel='stylesheet'>
    <title>INFEROX Academy</title>
</head>
<body>
<center>
<img src='media/brand.png' alt='INFEROX Academy' style='width: 35%'>
</center>
    <div class='contenido letra1 mensaje'>
    <center>
    <p><h2>Registro en <a href='inferoxacademy.com'>inferoxacademy.com</a></h2></p>
    </center>
    <br>
    <h4>
    <p>Estos son tus datos de registro</p>
    <br>
    <p>Usuario: $nombrepub</p>
    <br>
    <p>Contraseña: $pass</p>
    <br>
    <p>Debes de activar tu cuenta pulsando <a href='https://inferoxacademy.com/activacion.php?id=$activate'>Activar Cuenta</a></p>
    <br>
    <p>Recuerda guardar tu usuario y contraseña para poder iniciar sesión</p>
    <br>
    </h4>
    </div>
    <script src='js/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='css/js/bootstrap.js'>
    </script>
</body>
</html>
";
$asunto = "Activa tu cuenta de INFEROX Academy";
$cabeceras='MIME-Version: 1.0' . "\r\n";
$cabeceras.='Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: INFEROX Academy<hola@inferoxacademy.com>';
$enviado= mail($email,$asunto,$mensaje,$cabeceras);

if($enviado){
    echo "";
    $mensaje2="Nuevo registro\n\n";
    $mensaje2.="de $nombrepub";
    $asunto2="Nuevo registro";
    mail("javier_jave@hotmail.com",$asunto2,$mensaje2);
    mail("mikecrooowww@hotmail.com",$asunto2,$mensaje2);
}else{
    echo "";
} 
        if($result){
            echo ("");
        }else{
            echo ("");
            } 
//Cierro la conexion	
                mysqli_close($conn);
}
?>

        <div class="container-fluid"><!-- Container -->
        <!--Caja central -->
        <form action="<?php echo($direccion); ?>" class="form-horizontal" method="post">
            <div class="caja1 caja2">
                <div class="">
                    <div class="texto">
                        <span class="tam2 "> BIENVENIDO </span>
                        <br>
                        <b class=" tam2"><?php echo("$nombrepub");?></b><br>
                        <div class="car">
                        <!--  -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <center>
                                <img src="media/completa2.png" alt="guia">
                              </center>
                              <div class="carousel-caption">
                              </div>
                          </div>
                            <div class="item">
                              <center>

                                <img src="media/explora.png" alt="guia">
                              </center>
                              <div class="carousel-caption">
                              </div>
                          </div>
                          <div class="item">
                            <center>

                              <img src="media/conectate.png" alt="guia">
                            </center>
                              <div class="carousel-caption">
                              </div>
                          </div>
                          <div class="item">
                            <center>

                              <img src="media/gana2.png" alt="guia">
                            </center>
                              <div class="carousel-caption">
                              </div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                        <!--  -->
                        </div>
                        <!--  -->
                        <div class="carm">
                          <img src="media/completa2.png" alt="guiam">
                          <img src="media/explora.png" alt="guiam">
                          <img src="media/conectate.png" alt="guiam">
                          <img src="media/gana2.png" alt="guiam">
                        </div>
                        <!--  -->
                        <br>
                        <input type="submit" name="enviar" value="Entrar" class="btn btn-danger" >
                    </div>
                </div>
            </div>
        </form>
        </div><!-- container -->
    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="css/js/bootstrap.js">
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>