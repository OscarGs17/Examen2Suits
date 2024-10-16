<?php
require_once '../config/conexion.php';
session_start();

if (isset($_POST['nombre_p']) && !empty($_POST['nombre_p']) && 
    isset($_POST['apellido_p']) && !empty($_POST['apellido_p']) && 
    isset($_POST['carrera_p']) && !empty($_POST['carrera_p']) && 
    isset($_POST['año_ingreso']) && !empty($_POST['año_ingreso']) && 
    isset($_POST['id_p']) && !empty($_POST['id_p'])) {

    
    $nombreProducto = $_POST['nombre_p'];
    $apellidoProducto = $_POST['apellido_p']; 
    $carreraProducto = $_POST['carrera_p'];
    $año_ingreso = $_POST['año_ingreso'];
    
    
    $precioProducto = $_POST['precio_p']; 
    $cantidadProducto = $_POST['cantidad_p']; 
    $id = $_POST['id_p'];

    if (is_numeric($precioProducto) && is_numeric($cantidadProducto)) {
        $insercion = $conexion->prepare("INSERT INTO t_productos (producto, precio, cantidad) 
                                         VALUES (:producto, :precio, :cantidad)");
        $insercion->bindParam(':producto', $nombreProducto);
        $insercion->bindParam(':precio', $precioProducto);
        $insercion->bindParam(':cantidad', $cantidadProducto);

        if ($insercion->execute()) {
            echo json_encode([1, "Producto registrado"]);
        } else {
            echo json_encode([0, "Producto NO registrado"]);
        }
    } else {
        echo json_encode([0, "Solo datos numéricos en precio y cantidad"]);
    }
} else {
    echo json_encode([0, "No puedes dejar campos vacíos"]);
}
?>
