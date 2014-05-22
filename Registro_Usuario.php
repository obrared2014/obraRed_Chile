<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>    
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
                            <a id="servicios" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="servicios">
                                <li class="dropdown"><a href="Vision.php" role="button" class="dropdown-toggle">Visión</a></li>
                                <li class="dropdown"><a href="Mision.php" role="button" class="dropdown-toggle">Misión</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="Quienes_Somos.php" role="button" class="dropdown-toggle">Quienes Somos</a>
                        </li>
                        <li class="dropdown">
                            <a href="Contacto.php" role="button" class="dropdown-toggle">Contacto</a>
                       </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="fat-menu" class="dropdown">
                            <a href="#" id="sesion" role="button" class="dropdown-toggle" data-toggle="dropdown">Inicio de Sesión<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="sesion">
                                <li class="dropdown">
                                    <a role="menuitem" tabindex="-1" href="Login.php">Iniciar Sesión</a>
                                </li>
                                <li class="dropdown">
                                    <a role="menuitem" tabindex="-1" href="Registro_Usuario.php">Registrarse</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- nav-collapse -->
            </div><!-- container-fluid -->
        </nav><!-- fin menu principal-->
    </div> <!-- /container principal-->
    
</body>
</html>
