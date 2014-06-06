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
            $id = $_POST['id'];
            $rut = $_POST["rut"];
            $nombre = $_POST["nombre"];
            $ap_paterno = $_POST["ap_paterno"];
            $ap_materno = $_POST["ap_materno"];
            $email =$_POST["email"];
            $actividad =$_POST["actividad"];
            $telefono =$_POST["telefono"];
            $direccion =$_POST["direccion"];

            $update = mysql_query("call actualizar_usuario('$id','$rut','$nombre','$ap_paterno','$ap_materno','$email','$actividad','$telefono','$direccion')");
            if(!$update){
                echo ' <script languaje="javascript">
                    alert("Error al actualizar los datos");
                    location.href = "Index.php?sec=Registro";
                </script>';

            }else{
                    echo '
                    <script languaje="javascript">
                        alert("Se actualizaron los datos con exito");
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
