<?php
session_start();
ob_start();


$servername = "localhost";
$database = "id21364496_basebonanza";
$username = "id21364496_soyese";
$password = "1234_Aca";

// Creamos la conexión
$conex = mysqli_connect($servername, $username, $password, $database);
//registros de los campos de texto
if (isset($_POST['validar'])){
    include("con_db.php");
    $user = trim($_POST['inputNombre']);
    $pass = trim($_POST['inputContrasena']);
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$user' AND contrasena='$pass'";
    $resultado = $conex->query($sql) or die ('Algo ha ido mal en la consulta a la base de datos' . mysql_error());
    if ($resultado->num_rows == 1){
        header("Location: index.html");
        exit();
    } else {
        echo "Credenciales incorrectas <br> <a href='index.html'><button>inicio</button></a>";
    }
}
?>