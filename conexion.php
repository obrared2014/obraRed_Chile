<?php

$servidor = "localhost";
$database = "db_ObraRed";
$usuario = "root";
$pass = "root";
$link = mysql_connect($servidor, $usuario, $pass);
    if($link){
        $db = mysql_select_db($database);
        if(!$db){
            echo '<script language="javascript">alert("Error al seleccionar la Base de Datos");</script>'; 
        }
    }else{
            echo '<script language="javascript">alert("Error al tratar de conectar con MySQL");</script>'; 
    }
?>
