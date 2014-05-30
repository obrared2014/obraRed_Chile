<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<!--login.php -->  
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
        <?php 
            include './cabecera.php';
        ?>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">&nbsp;</div>
        </div>
        <div class="row">
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
                                <input type="text" class="form-control" name="user" placeholder="Usuario" required="true">
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