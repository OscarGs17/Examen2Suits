
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="c-user">Registro</div>
        <form id="registrationForm" method="post">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
            <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
            <input type="text" class="form-control" placeholder="Año de ingreso" name="año_ingreso" required>
            <input type="text" class="form-control" placeholder="Carrera" name="carrera" required>
            <button type="submit">Registrar</button>
            <p><a href="#">¿Ya tienes cuenta? Inicia sesión</a></p>
        </form>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío normal del formulario

            const formData = new FormData(this);

            fetch('ruta/al/tu/script.php', { // Cambia la ruta al script PHP
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data[1]); // Muestra el mensaje del servidor
                if (data[0] === 1) {
                    // Redirige o realiza otras acciones si el registro es exitoso
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
