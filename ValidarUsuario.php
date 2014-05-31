<?php

include("conexion.php");

if($error==1){
    if($con){
        if(!$database){
           echo '<script languaje="javascript">
                alert("Error al seleccionar la Base de Datos");
                location.href = "Index.php?sec=Login";
            </script>';        
        }else{
            $usuario = $_POST["user"];
            $password = (md5($_POST["password_usuario"]));
            $result = mysql_query("SELECT * FROM tbl_login WHERE login_usuario = '$usuario'");
            //Validamos si el nombre del administrador y contraseña
            if($row = mysql_fetch_array($result)){     
                if($row["login_password"] == $password){
                    session_start();
                    $_SESSION['usuario'] = $usuario;  
                    header("Location:Index.php?sec=Inicio");  
                }else{
                    echo '
                <script languaje="javascript">
                    alert("Contraseña Incorrecta");
                    location.href = "Index.php?sec=Login";
                </script>';

                }
            }
            else{
                echo '<script languaje="javascript">
                    alert("El nombre de usuario es incorrecto!");
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
        location.href = "Index.php?sec=Login";
    </script>';   
}
mysql_free_result($result);
mysql_close();
?>