$(document).ready(function() {
    $('#login-form').on('submit', function(event) {
        event.preventDefault(); // No envía formularios por defecto

        // Obtener valores del formulario
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();

        // Datos 
        var correctUserName = 'admin';  
        var correctPassword = '0798';  

        // Validacion
        if (username === '' || password === '') {
            $('#error-message').text('Por favor, completa todos los campos.').show(); // Mostrar mensaje de error
        } else if (username === correctUserName && password === correctPassword) {
            $('#error-message').hide(); 
            // Redirigir a la pagina de bienvenida
            window.location.href = 'bienvenida.php';
        } else {
            $('#error-message').text('El usuario o la contraseña son incorrectos.').show(); //  mensaje de error
        }
    });
});