<?php
 
 
$servername = "localhost";
$username ="root";
$password = "";
$database = "e.t.c";
 
$conn = new mysqli($servername, $username, $password, $database);
 
if($conn->connect_error){
    die("Conexion fallida: ".$conn->connect_error);
}
 
echo "Conexion es exitosa <br>";





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario,nombre,apellido,email, contraseña) VALUES ('$usuario','$nombre','$apellido','$email', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }
}