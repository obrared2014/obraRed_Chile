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
        <nav class="navbar navbar-default" role="navigation">
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
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                                <li class="dropdown"><a href="#" role="button" class="dropdown-toggle">Visión</a></li>
                                <li class="dropdown"><a href="#" role="button" class="dropdown-toggle">Misión</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle">Quienes Somos</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle">Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="fat-menu" class="dropdown">
                            <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Inicio de Sesión<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                <li class="dropdown">
                                    <a role="menuitem" tabindex="-1" href="#">Registrarse</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container-fluid -->
        </nav> <!-- /Barra de navegacion -->
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">&nbsp;</div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-xs-0 col-sm-3 col-md-4 col-lg-4">&nbsp;</div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><!-- Login centrado en medio -->
                <form action="ValidarUsuario.php" method="post">
                    <div class="well">
                        <div class="text-center">
                            <img src="img/LOGO_2.png">
                        </div>
                        <div class="well">
                            <div class="form-group">
                                <input type="text" class="form-control" name="admin" placeholder="Usuario" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-danger btn-large" value="Entrar">
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="col-xs-0 col-sm-3 col-md-4 col-lg-4">&nbsp;</div>
        </div><!-- Fin login -->
    </div>
</body>
</html>