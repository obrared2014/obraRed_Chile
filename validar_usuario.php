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
    }//conexion a la base de datos con errores filtrados.  
    
$usuario = $_POST["admin"];
$password = $_POST["password_usuario"];
$result = mysql_query("SELECT * FROM tbl_login WHERE login_usuario = '$usuario'");
 
//Validamos si el nombre del administrador y contrase�a
if($row = mysql_fetch_array($result)){     
    if($row["login_password"] == $password){
        session_start();
        $_SESSION['usuario'] = $usuario;  
        header("Location:index.php");  
    }else{
?>
    <script languaje="javascript">
        alert("Contraseña Incorrecta");
        location.href = "login.php";
    </script>
<?php
    }
}
else{
    ?>
        <script languaje="javascript">
            alert("El nombre de usuario es incorrecto!");
            location.href = "login.php";
        </script>
    <?php
}
mysql_free_result($result);
mysql_close();
?>