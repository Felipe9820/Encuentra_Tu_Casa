<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuentra tu casa</title>
    <link rel="stylesheet" href="./css/estilosL.css">
    

</head>
  
                        
<body>
   
    
    <div class="login-container">
        <h2>Login</h2>
        <div class="error" id="error-message">Por favor, completa todos los campos o la contraseña es incorrecta.</div>
        <form id="login-form">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="username" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <button type="submit">Iniciar sesión</button>
                <br>
           <br>
           <script>
            function redirigir() {
                window.location.href = "usuarios.php";
            }
        </script>
                 <button onclick="redirigir()">Crear Usuario</button>
                
                
            </div>
            
        </form>
    </div>

    <script src="./js/jquery-3.7.1.slim.min.js"></script>

    <script src="js/login.js"></script>
</body>
</html>