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
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
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
                    <?php
                        session_start();
                        if(isset($_SESSION['usuario'])){
                            echo '<ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Conectado como '.$_SESSION['usuario'].'<b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="#" role="button" class="dropdown-toggle">Perfil</a></li>
                                    <li class="dropdown"><a href="Logout.php" role="button" class="dropdown-toggle">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                         </ul>';
                        }
                        else{
                    ?>
                        <ul class="nav navbar-nav navbar-right">
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
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><!-- comienzo carousel -->
            <ol class="carousel-indicators"><!-- Indicadores -->
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol><!-- fin indicadores -->
            <div class="carousel-inner"><!-- Slides -->
                <div class="item active"><!-- imagenes 1500 x 500 -->
                    <img src="img/img_carousel_001.jpg" alt="0">
                    <div class="carousel-caption">
                        <h3>Con unas simples medidas de tu obra</h3>
                        <p>Para obtener lo necesario...</p>
                    </div>    
                </div>
                <div class="item">
                      <img src="img/img_carousel_002.jpg" alt="1">
                      <div class="carousel-caption">
                        <h3>Levantar una contrucción</h3>
                        <p>con obraRed es mucho mas facil</p>
                    </div>
                </div>
                <div class="item">
                      <img src="img/img_carousel_003.jpg" alt="2">
                      <div class="carousel-caption">
                        <h3>Solo compra lo que utlizaras...</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="img/img_carousel_004.jpg" alt="3">
                    <div class="carousel-caption">
                        <h3>Comienza a levantar tu obra mucho mas rapido</h3>
                    </div>
                </div>
            </div><!--Fin slides -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><!-- Control izquierda -->
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><!-- Control derecha -->
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- fin carousel -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h1>Quienes Somos</h1>
            </div>
        </div>
    </div> <!-- /container principal-->   
</body>
</html>
