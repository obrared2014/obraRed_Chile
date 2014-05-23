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
    
$rut = $_POST["rut"];    
$usuario = $_POST["user"];
$password = $_POST["password_usuario"];
$nombre = $_POST["nombre"];
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$email =$_POST["email"];
$actividad =$_POST["actividad"];
$telefono =$_POST["telefono"];
$direccion =$_POST["direccion"];

if(mysql_query("SELECT * FROM tbl_login WHERE login_usuario = '$usuario'")){
        mysql_query("INSERT INTO tbl_login (id_persona, login_usuario, login_password) VALUES ('','$usuario','$password')");
        $id = mysql_query("SELECT id_persona FROM tbl_login WHERE login_usuario = '$usuario'");
        mysql_query("INSERT INTO tbl_persona (id_persona, nombre, ap_paterno, ap_materno, email, actividad, telefono, direccion) VALUES ('$id','$nombre','$ap_paterno','$ap_materno','$email','$actividad','$telefono','$direccion')");
?>    
        <script languaje="javascript">
            alert("Se ingresaron los datos con exito");
            location.href = "Registro_Usuario.php";
        </script>
<?php
}else{
?>
    <script languaje="javascript">
        alert("Su usuario ya existe, intente nuevamente");
        location.href = "Registro_Usuario.php";
    </script>
<?php
}
?>
