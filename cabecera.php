<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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