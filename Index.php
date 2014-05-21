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
                    <a href="home.php"><img src="img/LOGO_3.png" width="150px"/></a>
                </div>
                <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="Index.php" role="button" class="dropdown-toggle">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a id="servicios" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="servicios">
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
                            <a href="#" id="sesion" role="button" class="dropdown-toggle" data-toggle="dropdown">Inicio de Sesión<b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="sesion">
                                <li class="dropdown">
                                    <a role="menuitem" tabindex="-1" href="Login.php">Iniciar Sesión</a>
                                </li>
                                <li class="dropdown">
                                    <a role="menuitem" tabindex="-1" href="#">Registrarse</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- nav-collapse -->
            </div><!-- container-fluid -->
        </nav> <!-- navbar-default -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><!-- comienzo carousel -->
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Slides -->
            <div class="carousel-inner">
                <div class="item active"><!-- 1500 x 500 -->
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
            </div>  
            <!-- Controles -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- fin carousel -->
    </div> <!-- /container principal-->   
</body>
</html>
