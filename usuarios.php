<?php
 
 
$servername = "localhost";
$username ="root";
$password = "";
$database = "venta_casas";
 
$conn = new mysqli($servername, $username, $password, $database);
 
if($conn->connect_error){
    die("Conexion fallida: ".$conn->connect_error);
}
 






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];
    $contraseña_hash = password_hash($contraseña,PASSWORD_BCRYPT);


    $sql = "INSERT INTO usuario (usuario,nombre,apellido,email, contraseña) VALUES ('$usuario','$nombre','$apellido','$email', '$contraseña_hash')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario agregado correctamente";
        
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="./css/estilosL.css">
</head>

<div class="login-container">
    <h2>Crear usuario</h2>
    <form action="usuarios.php" method="POST">
        <div class="error" id="error-message">Por favor, completa todos los campos o la contraseña es incorrecta.</div>
    <form id="login-form">
        <div class="form-group">
        <label for="usuario">Usuario:</label>
            <input type="text" id=" username" name=" username" required><br>
        </div>
      
        <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        </div>
    
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id=" apellido" name=" apellido" required><br>
        </div>
    
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        </div>

        <div class="form-group">
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        </div>
        <script>
            function redirigir() {
                window.location.href = "login.php";
            }
        </script>
                 <button onclick="redirigir()">Crear Usuario</button>
                
  
        <script src="./js/jquery-3.7.1.slim.min.js"></script>

<script src="js/Redirigir.js"></script>

</html>