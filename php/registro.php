<?php

$servername = "localhost";
$database = "id21364496_basebonanza";
$username = "id21364496_soyese";
$password = "1234_Aca";

$con = mysqli_connect($servername,$username,$password,$database);

if (!$con) {
    die("La conexión ha fallado: ".mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['constrasena'];

echo"<center><h3> Registros Almacenados en Base de Datos....'---- $database----'<hr><h3>";

$sql = "INSERT INTO usuarios(nombre,correo,contrasena) VALUES ('$nombre','$correo','$contrasena')";
if (mysqli_query($con,$sql)) {
    echo "Registro almacenado correctamente en la base de datos";
    } else{
        echo "Error : " . $sql . "<br>" . mysql_error($con);
    }
echo "<br><a href='menu.html'><img src='casa.png'></a>";