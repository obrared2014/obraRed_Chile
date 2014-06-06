<!--Cabecera.php-->
<nav class="navbar navbar-default" role="navigation"><!-- menu principal-->
    <div class="container-fluid">
        <div class="navbar-header"><!-- opcion para dispositivos de baja resolucion -->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                <span class="sr-only">Navegador</span>
                <span class="glyphicon glyphicon-chevron-down"></span><!-- icono para opciones en dispositvos mobiles-->
            </button>
            <a href="?sec=Inicio"><img src="img/LOGO_3.png" width="150px"/></a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="?sec=Inicio" role="button" class="dropdown-toggle"><b class="glyphicon glyphicon-home"></b>&nbsp;Inicio</a>
                </li>
                <li class="dropdown" id="servicios_logout" style="display: block">
                    <a href="?sec=Servicios" role="button" class="dropdown-toggle">Servicios</a>
                </li>
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle"  data-toggle="dropdown">Nuestra Empresa<b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown"><a href="?sec=Nosotros" role="button" class="dropdown-toggle">Quienes Somos</a></li>
                        <li class="dropdown" id="servicios_login" style="display: none"><a href="?sec=Servicios" role="button" class="dropdown-toggle">Servicios</a></li>
                        <li class="dropdown"><a href="?sec=Vision" role="button" class="dropdown-toggle">Visión</a></li>
                        <li class="dropdown"><a href="?sec=Mision" role="button" class="dropdown-toggle">Misión</a></li>
                        <li class="dropdown" id="contacto_login" style="display: none"><a href="?sec=Contacto" role="button" class="dropdown-toggle">Contacto</a></li>
                    </ul>                 
                </li>
                <li class="dropdown" id="contacto_logout" style="display:block">
                    <a href="?sec=Contacto" role="button" class="dropdown-toggle">Contacto</a>
               </li>
               <li name="presupuesto" id="presupuesto" class="dropdown" style="display:none">
                    <a href="?sec=Presupuesto" role="button" class="dropdown-toggle">Crear Presupuesto</a>
               </li>
            </ul>
            <?php
                session_start();
                if(isset($_SESSION['nombre'])){
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $_SESSION['nombre'].' '.$_SESSION['ap_paterno'] ?> <b class="glyphicon glyphicon-user"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown"><a href="?sec=Perfil" role="button" class="dropdown-toggle"><b class="glyphicon glyphicon-cog"></b>&nbsp;Perfil</a></li>
                        <li class="dropdown"><a href="Logout.php" role="button" class="dropdown-toggle"><b class="glyphicon glyphicon-off"></b>&nbsp;Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul> 
            <script type="text/javascript">document.getElementById("presupuesto").style.display="block";</script>
            <script type="text/javascript">document.getElementById("servicios_logout").style.display="none";</script>
            <script type="text/javascript">document.getElementById("servicios_login").style.display="block";</script>
            <script type="text/javascript">document.getElementById("contacto_logout").style.display="none";</script>
            <script type="text/javascript">document.getElementById("contacto_login").style.display="block";</script>
            <?php
                }
                else{
            ?>
            <ul class="nav navbar-nav navbar-right" on>
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Inicio de Sesión <b class="glyphicon glyphicon-user"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown"><a href="?sec=Login" role="button" class="dropdown-toggle"><b class="glyphicon glyphicon-off"></b>&nbsp;Iniciar Sesión</a></li>
                        <li class="dropdown"><a href="?sec=Registro" role="button" class="dropdown-toggle"><b class="glyphicon glyphicon-pencil"></b>&nbsp;Registrarse</a></li>
                    </ul>
                </li>
             </ul>
            <?php } ?>
        </div><!-- nav-collapse -->
    </div><!-- container-fluid -->
</nav><!-- fin menu principal-->
