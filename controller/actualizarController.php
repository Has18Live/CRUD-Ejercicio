<?php
include_once('../config/conexion.php');
include_once('../model/productoDAO.php');

$conexion = new Conexion();
$conn = $conexion->conectar();

if(isset($_POST['id'], $_POST['nombre'], $_POST['descripcion'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    
    $productoDAO = new ProductoDAO(); // Crear la instancia del ProductoDAO
    $resultado = $productoDAO->actualizarProducto($conn, $id, $nombre, $descripcion); // Llamar al método actualizarProducto del DAO

    if($resultado) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "Error al actualizar el producto.";
    }
} else {
    echo "No se han recibido todos los datos necesarios para actualizar el producto.";
}
?>
