$(document).ready(function() {
    $('#login-form').on('submit', function(event) {
        event.preventDefault(); 
            window.location.href = 'bienvenida.php';
        
    });
});