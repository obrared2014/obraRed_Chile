<? session_start() ?>
<?php
session_start();
if(!isset($_SESSION['usuario'])) {
  header('Location: Login.php'); 
  exit();
}
?>

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
    <div class="container" style="padding-top: 1em;">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex3-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/LOGO_3.png" width="150px"/>
            </div>
            <div class="collapse navbar-collapse navbar-ex3-collapse">
                <a href="logout.php"><button type="button" class="btn btn-danger navbar-btn pull-right">cerrar sesion</button></a>
            </div>
        </nav>
    </div>
</body>
</html>