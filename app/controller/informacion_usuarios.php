<?php
session_start();
require_once '../config/conexion.php';

$consulta = $conexion->prepare("SELECT * FROM t_alumnos WHERE id = :id");
$consulta->bindParam(':id_alumno',$_SESSION['usuario']['id_usuario']);
$consulta->execute();
$datos = $consulta->fetch(PDO::FETCH_ASSOC);

echo json_encode($datos);
?>