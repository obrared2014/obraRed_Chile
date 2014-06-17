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

<div class="panel panel-default">                        
    <div class="panel-body">
        <div class="btn-group-vertical "> <!--btn-group-justified -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle " data-toggle="dropdown" id="materiales" >
                    &nbsp;&nbsp;&nbsp;&nbsp;Materiales &nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-rigth" aria-labelledby ="materiales">                         
                    <li><a href="#">Ceramica</a></li>
                    <li><a href="#">Madera</a></li>
                    <li><a href="#">Fierros</a></li>
                    <li><a href="#">Cemento</a></li>
                    <li><a href="#">Vulcanita</a></li>
                    <li><a href="#">Tornillos</a></li>
                    <li><a href="#">Plumavit</a></li>
                    <li><a href="#">Puertas</a></li>
                    <li><a href="#">Zinc</a></li>
                    <li><a href="#">Lana mineral</a></li>
                    <li><a href="#">Viga estructural</a></li>
                    <li><a href="#">Fieltro</a></li>
                    <li><a href="#">Cemento</a></li>
                    <li><a href="#">Vulcometal</a></li> 
                    <li class="divider"></li>
                    <li><a href="#">Otros</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                     &nbsp;&nbsp;&nbsp;&nbsp;Empresas &nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Ferreteria</a></li>
                    <li><a href="#">Maestro</a></li>
                    <li><a href="#">Barraca</a></li>
                    <li><a href="#">homcvnter</a></li>
                    <li class="divider"></li>
                    <li><a href="#">otros</a></li>
                </ul>
            </div>  
        </div>
    </div>
</div>
                    <div class="panel panel-default panel-info">
                        <div class="panel-heading">Buscar Materiales</div> 
                        <div class="panel-body">
                            <form class="navbar-form navbar-left" role="search" action="Index.php?sec=ResBuscar" method="post" >
                                <div class="form-group">
                                    <input type="text" name="busq_mat" class="form-control" placeholder="Buscar">
                                </div>                              
                                <button type="submit" class="btn btn-success" name="mat">Buscar</button>
                            </form>  
                        </div>
                    </div>

                    <div class="panel panel-warning ">
                        <div class="panel-heading panel-success">Buscar Empresas</div> 
                        <div class="panel-body">
                            <form class="navbar-form navbar-left" role="search" action="Index.php?sec=Buscar" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Buscar" name="empresa">
                                </div>                              
                                <button type="submit" class="btn btn-success" name="emp">Buscar</button>
                            </form>  
                        </div>
                  