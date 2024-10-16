<?php
require_once("./app/config/dependencias.php");

session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <title>Formulario de Registro de Producto</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registrar alumno</h1>
        <form id="form-producto" action="path/to/tu_php.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nombre_p" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre_p" name="nombre_p" required>
            </div>
            <div class="mb-3">
                <label for="apellido_p" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido_p" name="apellido_p" required>
            </div>
            <div class="mb-3">
                <label for="carrera_p" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="carrera_p" name="carrera_p" required>
            </div>
            <div class="mb-3">
                <label for="año_ingreso" class="form-label">Año de Ingreso</label>
                <input type="number" class="form-control" id="año_ingreso" name="año_ingreso" required>
            </div>
            <div class="mb-3">
                <label for="precio_p" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio_p" name="precio_p" required>
            </div>
            <div class="mb-3">
                <label for="cantidad_p" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad_p" name="cantidad_p" required>
            </div>
            <div class="mb-3">
                <label for="id_p" class="form-label">id_alumno</label>
                <input type="text" class="form-control" id="id_p" name="id_p" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar alumno</button>
        </form>
    </div>

    <script src="path/to/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('btn-cerrar').addEventListener('click', function() {
           
            window.location.href = './login.php'; // Cambia esto por la ruta de tu script de cierre de sesión
        });
    </script>
</body>
</html>
