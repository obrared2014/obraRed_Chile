<!--Login.php-->
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
        <?php
            if(isset($_SESSION['nombre'])){
        ?>
        <div class="form-group" style="display: block">
            <div class="alert alert-warning">
                <a href="#" class="alert-link">Favor Ingrese su usuario y contraseña para completar la actualizacion de datos</a>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    <div class="col-xs-0 col-sm-3 col-md-4 col-lg-4">&nbsp;</div>
</div><!-- Fin login -->
