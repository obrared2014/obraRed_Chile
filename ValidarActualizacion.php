<?php
include("conexion.php");
if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                alert("Error al seleccionar la Base de Datos");
                location.href = "Index.php?sec=Registro";
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
                        location.href = "Index.php?sec=Registro";
                    </script>';

            }else{
                    echo '
                    <script languaje="javascript">
                        alert("Se ingresaron los datos con exito");
                        location.href = "Index.php?sec=Login";
                    </script>';

            }    
        }
    }else{
            echo '<script language="javascript">alert("Error al tratar de conectar con MySQL");</script>'; 
    }//conexion a la base de datos con errores filtrados.  
}else{
    echo '<script languaje="javascript">
        alert("Error al intentar conectar a la base de datos!");
        location.href = "Index.php?sec=Registro";        
    </script>';   
}

mysql_free_result($result);
mysql_close();
?>
