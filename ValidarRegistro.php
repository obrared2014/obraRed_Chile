<?php
//$servidor = "localhost";
//$database = "db_ObraRed";
//$usuario = "root";
//$pass = "root";
include("conexion.php");
//$link = mysql_connect($servidor, $usuario, $pass);
if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                alert("Error al seleccionar la Base de Datos");
                location.href = "Registro_Usuario.php";
            </script>';        
        }else{
            $rut = $_POST["rut"];    
            $usuario = $_POST["user"];
            $password = (md5($_POST["password_usuario"]));
            $nombre = $_POST["nombre"];
            $ap_paterno = $_POST["ap_paterno"];
            $ap_materno = $_POST["ap_materno"];
            $email =$_POST["email"];
            $actividad =$_POST["actividad"];
            $telefono =$_POST["telefono"];
            $direccion =$_POST["direccion"];

            $insertar = mysql_query("call insertar('$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad','$telefono','$direccion','$usuario','$password')");
            if(!$insertar){

                  echo ' <script languaje="javascript">
                        alert("Error al ingresar los datos");
                        location.href = "Registro_Usuario.php";
                    </script>';

            }else{
                    echo '
                    <script languaje="javascript">
                        alert("Se ingresaron los datos con exito");
                        location.href = "login.php";
                    </script>';

            }    
        }
    }else{
            echo '<script language="javascript">alert("Error al tratar de conectar con MySQL");</script>'; 
    }//conexion a la base de datos con errores filtrados.  
}else{
    echo '<script languaje="javascript">
        alert("Error al intentar conectar a la base de datos!");
        location.href = "Registro_Usuario.php";        
    </script>';   
}

mysql_free_result($result);
mysql_close();
?>
