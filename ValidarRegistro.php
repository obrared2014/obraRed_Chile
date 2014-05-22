<?php
$servidor = "localhost";
$database = "db_ObraRed";
$usuario = "root";
$pass = "root";
$link = mysql_connect($servidor, $usuario, $pass);
    if($link){
        $db = mysql_select_db($database);
        if(!$db)
            echo '<script language="javascript">alert("Error al seleccionar la Base de Datos");</script>'; 
    }else{
            echo '<script language="javascript">alert("Error al tratar de conectar con MySQL");</script>'; 
    }//conexion a la base de datos con errores filtrados.
    
$usuario = $_POST["user"];
$password = $_POST["password_usuario"];
$nomre = $_POST["nombre"];
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$email =$_POST["email"];

$result = mysql_query("SELECT * FROM tbl_login WHERE login_usuario = '$usuario'");
?>
