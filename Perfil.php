<!-- Perfil de usuario -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h1>Perfil de usuario</h1>
    </div>
    <div class="row">
            <form class="form" action="" name="perfil_usuario" method="POST">
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido Paterno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="ap_materno" placeholder="Apellido Materno" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion" required="true">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="telefono" placeholder="Fono de contacto" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>  
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="actividad" placeholder="Actividad" required="true" onkeypress="ValidaSoloLetras()">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true">
                        </div>  
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div> 
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Usuario" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-7">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_usuario" placeholder="Contraseña" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-7">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary btn-large" value="Enviar">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">&nbsp;</div>
                </div>
            </form>
        </div>
</div>