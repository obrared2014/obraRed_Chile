<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<!--index.php -->  
<head>
  <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="bootstrap/css/footer.css"/>
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    

    
</head>
<body>
    <div class="container">
        <?php 
            include 'cabecera.php';
            $seccion=filter_input(INPUT_GET, "sec");
            if(empty($seccion)){
                $seccion='Inicio';
            }
            switch($seccion){
                case "Inicio":
                    include 'Carousel.php';
                    break;
                case "Servicios":
                    include 'Servicios.php';
                    break;
                case "Nosotros":
                    include 'Quienes_Somos.php';
                    break;
                case "Vision":
                    include 'Vision.php';
                    break;
                case "Mision":
                    include 'Mision.php';
                    break;
                case "Contacto":
                    include 'Contacto.php';
                    break;
                case "Presupuesto":
                    include 'Presupuesto.php';
                    break;   
                case "Login":
                    include 'Login.php';
                    break;
                case "Registro":
                    include 'Registro_Usuario.php';
                    break;
                case "Perfil":
                    include 'Perfil.php';
                    break;
                case "Buscar":
                    include 'BuscarMateriales.php';
                    break; 
            }
            include 'footer.php';
        ?>
    </div><!-- /container principal-->
</body>

