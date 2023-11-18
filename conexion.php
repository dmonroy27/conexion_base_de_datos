<?php
//conexion a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "conexion";
$conn = new mysqli ($servername, $username, $password, $bdname);

//verificar conexion
if ($conn->connect_error){
    die("Conexion Fallida: " . $conn->connect_error);
}
?>