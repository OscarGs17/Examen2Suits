<?php
require_once("./app/config/dependencias.php");
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS . "bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?= ICONS . "bootstrap-icons.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "registro_vista.css"; ?>">
    <title>Formulario de datos</title>
</head>
<body class="d-flex justify-content-center align-items-center mt-5 p-3">
    <form action="./registro_vista.php" method="post" class="w-50 p-8">
        <div class="text-center mb-10 c-user">
        <i class="bi bi-layout-text-sidebar"></i>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-black mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nombre" name="nombre" required>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-person-fill fs-3 text-black mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese su apellido" id="apellido" name="apellido" required>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-envelope-fill fs-3 text-black mx-1"></i>
            <input type="email" class="form-control" placeholder="Ingrese su email" id="email" name="email" required>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-key-fill fs-3 text-black mx-1"></i>
            <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass" required>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-calendar-fill fs-3 text-black mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese su año de ingreso" id="año_ingreso" name="año_ingreso" required>
        </div>
        <div class="input-group mt-3 c-input px-2 p-1 rounded-3">
            <i class="bi bi-briefcase-fill fs-3 text-black mx-1"></i>
            <input type="text" class="form-control" placeholder="Ingrese su carrera" id="carrera" name="carrera" required>
        </div>
        <div class="mt-3 c-button">
        <a href="./login.php" class="btn w-100 text-black fs-4">Registrar</a>
        </div>
      
    </form>

    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>
