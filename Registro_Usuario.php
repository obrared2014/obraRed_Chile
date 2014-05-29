<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<!--Registro_Usuario.php -->  
<head>
  <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
    <script src="bootstrap/js/validar_formulario.js"></script> 
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jQueryRut.js"></script>
    <script src="bootstrap/js/jquery.Rut.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#rut').Rut({ 
            on_error: function(){ alert('Favor ingrese un rut correcto'); } 
        });
        $("#content > ul").tabs();
        });
</script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation"><!-- menu principal-->
            <div class="container-fluid">
                <div class="navbar-header"><!-- opcion para dispositivos de baja resolucion -->
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                        <span class="sr-only">Navegador</span>
                        <span class="glyphicon glyphicon-chevron-down"></span><!-- icono para opciones en dispositvos mobiles-->
                    </button>
                    <a href="Index.php"><img src="img/LOGO_3.png" width="150px"/></a>
                </div>
                <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="Index.php" role="button" class="dropdown-toggle">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="Servicios.php" role="button" class="dropdown-toggle">Servicios</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle"  data-toggle="dropdown">Nuestra Empresa<b class="caret"></b></a>
                           <ul class="dropdown-menu" role="menu">
                                <li class="dropdown"><a href="Quienes_Somos.php" role="button" class="dropdown-toggle">Quienes Somos</a></li>
                                <li class="dropdown"><a href="Vision.php" role="button" class="dropdown-toggle">Visión</a></li>
                                <li class="dropdown"><a href="Mision.php" role="button" class="dropdown-toggle">Misión</a></li>
                            </ul>                 
                        </li>
                        <li class="dropdown">
                            <a href="Contacto.php" role="button" class="dropdown-toggle">Contacto</a>
                       </li>
                       <li name="presupuesto" id="presupuesto" class="dropdown" style="display:none">
                            <a href="Presupuesto.php" role="button" class="dropdown-toggle">Crear Presupuesto</a>
                       </li>
                    </ul>
                    <?php
                        session_start();
                        if(isset($_SESSION['usuario'])){
                            echo '<ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Conectado como '.$_SESSION['usuario'].'<b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#" role="button" class="dropdown-toggle">Perfil</a></li>
                                    <li class="dropdown""><a href="Logout.php" role="button" class="dropdown-toggle">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                         </ul> 
                         <script type="text/javascript">
                            document.getElementById("presupuesto").style.display="block";
                         </script>';

                        }
                        else{
                        ?>
                        <ul class="nav navbar-nav navbar-right" on>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Inicio de Sesión<b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="Login.php" role="button" class="dropdown-toggle">Iniciar Sesión</a></li>
                                    <li class="dropdown"><a href="Registro_Usuario.php" role="button" class="dropdown-toggle">Registrarse</a></li>
                                </ul>
                            </li>
                         </ul>
                    <?php } ?>
                </div><!-- nav-collapse -->
            </div><!-- container-fluid -->
        </nav><!-- fin menu principal-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h1>Registro de Usuario</h1>
            </div>
        </div>
        <div class="row">
            <form class="form" action="ValidarRegistro.php" name="registro_usuario" method="POST">
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut" required="true" maxlength="9">
                        </div>
                    </div>
                    <div class="col-lg-9">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido Paterno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ap_materno" placeholder="Apellido Materno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-lg-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="true">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefono" placeholder="Fono de contacto" required="true">
                        </div>
                    </div>
                    <div class="col-lg-2">&nbsp;</div>  
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="actividad" placeholder="Actividad" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true">
                        </div>  
                    </div>
                    <div class="col-lg-2">&nbsp;</div> 
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Usuario" required="true">
                        </div>
                    </div>
                    <div class="col-lg-7">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="true">
                        </div>
                    </div>
                    <div class="col-lg-7">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-1">&nbsp;</div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary btn-large" value="Enviar">
                        </div>
                    </div>
                    <div class="col-lg-2">&nbsp;</div>
                </div>
            </form>
            
            
<!--            <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4"></div>
            <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <form class="form" action="ValidarRegistro.php" name="registro_usuario" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut" required="true" maxlength="9">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" placeholder="Usuario" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true" onkeypress="ValidaSoloLetras()">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido Paterno" required="true" onkeypress="ValidaSoloLetras()">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ap_materno" placeholder="Apellido Materno" required="true" onkeypress="ValidaSoloLetras()">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="true">
                    </div>                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="actividad" placeholder="Actividad" required="true" onkeypress="ValidaSoloLetras()">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefono" placeholder="Fono de contacto" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="true">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary btn-large" value="Enviar">
                    </div>
                </form>
            </div>
        <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4"></div>-->
        </div>
    </div>
</body>
</html>
