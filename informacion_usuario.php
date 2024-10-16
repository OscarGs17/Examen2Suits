<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Info</h1>
    <form action="">
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="apellido" id="apellido">
        <input type="text" name="email" id="email">
        <input type="text" name="pass" id="pass">
        <input type="text" name="año_ingreso" id="año_ingreso">
        <input type="text" name="carrera" id="carrera">
        <button type="button" id="btn-actualizar">Actualizar informacion</button>
    </form>
    <script src="./public/js/informacion_usuario.js"></script>
</body>
</html>