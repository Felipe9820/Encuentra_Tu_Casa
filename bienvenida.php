<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bienvenida.css">\
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Bienvenida</title>
   
</head>


<body>
    <div class="welcome-container">
        <h1>¡Bienvenido!</h1>
        <p>Has iniciado sesión correctamente.</p>
    </div>


    <script>
        $(document).ready(function() {
            
            setTimeout(function() {
                window.location.href = 'index.php'; // Redirige a la página de login
            }, 3000); //
        });
    </script>
</body>
</html>