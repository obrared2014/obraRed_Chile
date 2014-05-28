<?php 

$con=mysql_connect("localhost","root","root");  
if($con){
    $database=mysql_select_db("db_obrared");
    $error=1;//Variable que permite controlar si está conectado o no el valor 1 indica que está conectado
}else{
    $error=2;//Variable que permite controlar si está conectado o no el valor 2 indica que no se conectó
}

?>  
