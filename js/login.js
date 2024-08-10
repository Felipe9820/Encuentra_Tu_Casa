$(document).ready(function() {
    $('#login-form').on('submit', function(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // Obtener valores del formulario
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();

        // Datos correctos (deben estar en el cliente solo para demostración)
        var correctUserName = 'usuario';  // Aquí defines el nombre de usuario correcto
        var correctPassword = 'secreta';  // Aquí defines la contraseña correcta

        // Validar campos
        if (username === '' || password === '') {
            $('#error-message').text('Por favor, completa todos los campos.').show(); // Mostrar mensaje de error
        } else if (username === correctUserName && password === correctPassword) {
            $('#error-message').hide(); // Ocultar mensaje de error
            // Redirigir a la página de bienvenida
            window.location.href = 'bienvenida.html';
        } else {
            $('#error-message').text('El usuario o la contraseña son incorrectos.').show(); // Mostrar mensaje de error
        }
    });
});