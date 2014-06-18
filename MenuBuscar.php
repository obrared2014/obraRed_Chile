<? //xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head>
    <meta ></meta>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"></link> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"></link>
     <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>   
  <title>Buscar Materiales</title>    
</head>
    </head>
    <body>


        <h3>
            <span class="label label-default"> No esta lo que buscas ? </span>
        </h3>
        <h3>
            <span class="label label-default"> Prueba aqui &nbsp;&nbsp;</span>
        </h3>        
        <div class="panel panel-default panel-info">
            <div class="panel-heading">Buscar Materiales</div> 
            <div class="panel-body">
                <form class="navbar-form navbar-left" role="search" action="Index.php?sec=ResBuscar" method="post" >
                    <div class="form-group">
                        <select name="region" id="region" class="form-control" required="true">
                            <option value="" >Seleccione Region</option>
                            <option value="rm" >RM</option>
                            <option value="1" > I </option>
                            <option value="2" > II </option>
                        </select>
                    </div>             
                    <div class="form-group">
                        <select name="ciudad" id="ciudad" class="form-control" required="true">
                            <option value="" >Seleccione Ciudad</option>
                            <option value="todas" >Todas</option>
                            <option value="santiago" >Santiago</option>
                            <option value="rancagua" >Rancagua</option>
                            <option value="temuco" >Temuco</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="comuna" id="comuna" class="form-control" required="true">
                            <option value="" >Seleccione Comuna</option>
                            <option value="todas" >Todas</option>
                            <option value="estacion" >Estacion Central</option>
                            <option value="maipu" >Maipu</option>
                            <option value="providencia" >Providencia</option>
                        </select>
                    </div>                                

                    <div class="form-group">
                        <input type="text" name="busq_mat" class="form-control" placeholder="Buscar">
                    </div>                              
                    <button type="submit" class="btn btn-info" name="mat">Buscar</button>
                </form>  
            </div>
        </div>

        <div class="panel panel-warning ">
            <div class="panel-heading panel-success">Buscar Empresas</div> 
            <div class="panel-body">
                <form class="navbar-form navbar-left" role="search" action="Index.php?sec=Buscar" method="post">
                    <div class="form-group">
                        <select name="region" id="region" class="form-control" required="true">
                            <option value="" >Seleccione Region</option>
                            <option value="rm" >RM</option>
                            <option value="1" > I </option>
                            <option value="2" > II </option>
                        </select>
                    </div>                    
                    <div class="form-group">
                        <select name="ciudad" id="ciudad" class="form-control" required="true">
                            <option value="" >Seleccione Ciudad</option>
                            <option value="todas" >Todas</option>
                            <option value="santiago" >Santiago</option>
                            <option value="rancagua" >Rancagua</option>
                            <option value="temuco" >Temuco</option>
                        </select>                                    
                    </div>
                    <div class="form-group">
                        <select name="comuna" id="comuna" class="form-control" required="true">
                            <option value="" >Seleccione Comuna</option>
                            <option value="todas" >Todas</option>
                            <option value="estacion" >Estacion Central</option>
                            <option value="maipu" >Maipu</option>
                            <option value="providencia" >Providencia</option>
                        </select>
                    </div>                                 
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar" name="empresa">
                    </div>                              
                    <button type="submit" class="btn btn-warning" name="emp">Buscar</button>
                </form>  
            </div>
                  