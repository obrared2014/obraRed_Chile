<!--Registro_Usuario.php-->
    <script src="bootstrap/js/validar_formulario.js"></script> 
    <script src="bootstrap/js/jQueryRut.js"></script>
    <script src="bootstrap/js/jquery.Rut.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#rut').Rut({ 
            on_error: function(){ alert('Favor ingrese un rut correcto'); } 
        });
        $("#content > ul").tabs();
        });
    </script>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h1>Registro de Usuario</h1>
            </div>
        </div>
        <div class="row">
            <form class="form" action="ValidarRegistro.php" name="registro_usuario" method="POST">
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut" required="true">
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-0 col-lg-9">&nbsp;</div>
                </div>
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

