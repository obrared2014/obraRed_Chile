<? //xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<!--index.php -->  
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
        
        <div class="container">
           
            <div class="page-header">
                <h1><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar &nbsp;&nbsp;<small>Materiales, Empresas ...</small></h1>
            </div>                
            <div class="row">

                
                <div class="col-lg-4">
                    <?php include 'MenuBuscar.php'; ?>
                </div>                       
                    
                
                <div class="col-lg-4">               
                    <?php 
                    if($_POST)
                    {
                        if(isset($_POST['mat']))
                        {
                           $material=$_POST['busq_mat'];               
                        ?>
                        <div class="panel panel-primary"><div class="panel-heading">materiales</div><div class="table-responsive"><table class="table table-hover" >
                        <tr><th class="active">nombre<th>comun<th>ciudad<th>fono</th><th>stock</th></tr>
                        <?php 
                        for ($i = 0; $i < 13; $i++) 
                        {
                             echo '<tr><td>'.$material.'</td><td>dss</td><td>ssss</td><td>sss<td>' . $i . '</td></tr>';
                        }   
                        ?>
                        </table></div></div>
                        <?php }?>

                        <?php
                       if(isset($_POST['emp']))
                        {
                           $empresa=$_POST['empresa'];               
                        ?>
                        <div class="panel panel-primary"><div class="panel-heading">empresas</div><div class="table-responsive"><table class="table table-hover" >
                        <tr><th class="active">nombre<th>comun<th>ciudad<th>fono</th><th>stock</th></tr>
                        <?php 
                        for ($i = 0; $i < 13; $i++) 
                        {
                             echo '<tr><td>'.$empresa.'</td><td>dss</td><td>ssss</td><td>sss<td>' . $i . '</td></tr>';
                        }   
                        ?>
                        </table></div></div>
                        <?php }?>


                   <?php }  ?>
                </div>
                   



                    
                <div class="col-lg-4">
                </div>
   
                
            </div>
        </div>
    </body>
</html>

