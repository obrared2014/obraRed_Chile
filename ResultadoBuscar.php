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

        <div>
            <div class="row">            
     
                
                <div class="col-lg-6"> 
        <?php
        if ($_POST) 
            {
            if (isset($_POST['mat'])) 
            {
                if(!(isset($_POST['ciudad'])))
                    {
                    $ciudad="stgo";
                    }else
                        {
                             $ciudad=$_POST['ciudad'];
                        }
                
                $material = $_POST['busq_mat'];
                $comuna=$_POST['comuna'];               
        ?>
                <div class="panel panel-primary"><div class="panel-heading">materiales</div><div class="table"><table class="table table-hover" >
                <tr><th class="active">Nombre<th>Comuna<th>Ciudad<th>Fono</th><th>Stock</th></tr>
                <?php
                    for ($i = 0; $i < 13; $i++) 
                    {
                        echo '<tr><td>' . $material . '</td><td>'.$comuna.'</td><td>'.$ciudad.'</td><td>sss<td>' . $i . '</td></tr>';
                    }
                ?>
                </table></div></div>
      <?php } ?>

                <?php
                if (isset($_POST['emp'])) 
                    {
                if(!(isset($_POST['ciudad'])))
                    {
                    $ciudad="stgo";
                    }else
                        {
                             $ciudad=$_POST['ciudad'];
                        }                    
                        $empresa = $_POST['empresa'];
                        $comuna=$_POST['comuna'];                        
                ?>
                        <div class="panel panel-primary"><div class="panel-heading">empresas</div><div class="table"><table class="table table-hover" >
                        <tr><th class="active">Nombre<th>Comuna<th>Ciudad<th>Fono</th><th>Stock</th></tr>
                         <?php
                        for ($i = 0; $i < 13; $i++) 
                        {
                                echo '<tr><td>' . $empresa . '</td><td>'.$comuna.'</td><td>'.$ciudad.'</td><td>sss<td>' . $i . '</td></tr>';
                        }
                        ?>
                        </table></div></div>
              <?php } ?>
        <?php } ?>                    
                </div>
                   
                    
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3328.6872881248905!2d-70.7073413!3d-33.4574528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c487b40e50d5%3A0x1502d8f8f6e07ae0!2sLiber+Bernardo+O&#39;Higgins+5345%2C+Lo+Prado%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1409176478363" width="600" height="500" frameborder="0" style="border:0"></iframe>
                </div>
   
                
            </div>            
        </div>

