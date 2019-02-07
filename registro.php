<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Inferox Academy</title>  
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="media/faviconchido.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/12.css" rel="stylesheet">
        <link href="css/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid"><!-- Container -->
        <!--Navegacion  -->
            <div id="navegacion">
                <span class="boton22">
                    <a href="registro.php" class=" decoracion">Registro</a>
                </span>
                <span class="boton22">
                    <a href="inicio.html" class=" decoracion">Inicio de sesion</a>
                </span>
            </div>
        <!--Caja central -->
        <form action="bienvenido.php" class="form-inline" method="post">
            <div class="caja1 caja2">
                <div class="position">
                    <div id="bgc" class="espaciado">
                        <!--Titulo  -->
                        <div class="espaciado1">
                        <span class="spaceabj text-uppercase tam2 centradoop">Dinos quien <strong class="">eres</strong></span> <br>
                        </div>
                        <!--1  -->
                        <div class="row ">
                            <div class="col-xs-6 ">
                                <div class="form-group">
                                    <label class="control-label rojo" for="inp1">*</label>
                                        <input placeholder="Nombre" type="text" name="nombres" class="estrellas2 form-control" id="inp1" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group ">
                                    <label class="control-label rojo" for="inp2">*</label>
                                        <input placeholder="Apellidos" type="text" name="apellidos" class=" form-control" id="inp2" required>
                                </div>
                            </div>
                        </div>
                        <!--2  -->
                        <div class="row ">
                            <div class="col-xs-6 ">
                                <div class="form-group ">
                                    <label class="control-label rojo" for="inp3">*</label>
                                        <input placeholder="Nombre Publico" type="text" name="nompublic" class=" form-control" id="inp3" required>
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="form-group ">
                                    <label class=" control-label rojo" for="inp9">*</label>
                                        <input placeholder="E-Mail" type="email" name="email" class=" form-control" id="inp9" required>
                                </div>
                                <!-- <div class="reac">
                                    <div class="form-group ">
                                        <label class=" control-label" for="inp4"></label>
                                        <input placeholder="Telefono" type="text" name="telefono" class="form-control" id="inp4">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!--3  -->
                        <div class="row ">
                            <div class="col-xs-6 ">
                                <div class="form-group ">
                                    <label class=" control-label rojo" for="inp5">*</label>
                                        <input placeholder="País" type="text" name="pais" class=" form-control" id="inp5" required>
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="form-group ">
                                    <label class=" control-label rojo" for="inp6">*</label>
                                        <input placeholder="Ciudad" type="text" name="ciudad" class=" form-control" id="inp6" required>
                                </div>
                            </div>
                        </div>
                        <!--4  -->
                        <div class="row ">
                            <div class="col-xs-6 ">
                                <div class="reac">
                                    <div class="form-group ">
                                        <label class=" control-label" for="inp7"></label>
                                        <input placeholder="Empresa" type="text" name="empresa" class=" form-control" id="inp7">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="reac">
                                    <div class="form-group">
                                        <label class=" control-label" for="inp8"></label>
                                        <input placeholder="Puesto" type="text" name="puesto" class=" form-control" id="inp8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--5  -->
                        <div class="row ">
                            <!-- <div class="col-xs-6 ">
                                <div class="form-group ">
                                    <label class=" control-label rojo" for="inp9">*</label>
                                        <input placeholder="E-Mail" type="email" name="email" class=" form-control" id="inp9" required>
                                </div>
                            </div> -->
                        </div>
                        <!--6  -->
                        <div class="acomodo1 ">
                            <div class="row ">
                                <div class="col-xs-11">
                                    <span name="sexo" class="rojo">*</span> <span class="blanco"> Sexo</span>
                                    <label class="radio-inline ">
                                        <input name="sexo" class="" type="radio"  id="inlineRadio1" value="Mujer"> <span class="blanco">Femenino</span>
                                    </label>
                                    <label class="radio-inline ">
                                        <input name="sexo" class="" type="radio"  id="inlineRadio2" value="Hombre"> <span class="blanco">Masculino</span>
                                    </label>
                                    <span name="birthday" class="rojo ">*</span> <span class="blanco"> Fecha de nacimiento</span>
                                    <input type="date" name="birthday" >
                                    <!-- maxlength="4" -->
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xs-11 ">
                                <div class="radio acomodo2">
                                    <label class="" for="acept">
                                        <input type="radio" id="acept" name="termin" value="si" required><span class="blanco"> Acepto términos y condiciones</span> <br>
                                        <a href="#" class="decoracion2"><span class="blanco"> Aviso de privacidad</span></a> 
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 ">
                                <a href="index.html"><img src="media/boton.png" alt="Regresar" class=" cambio1"></a>
                            </div>
                            <!-- Boton de ACEPTAR -->
                            <div class="col-xs-2 col-xs-offset-4 ">
                                <input type="submit" name="aceptarreg" value="Aceptar" class="btn btn-danger tama">  
                            </div>
                        </div>
                        <!--Espacio del boton HD  -->
                    </div>
                </div>
            </div>
        </form>
        </div><!-- container -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="css/js/bootstrap.js"></script>
    </body>
</html>