<?php
include('conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE productos SET nombre = ?, descripcion = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nombre, $descripcion, $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: index.php");
    exit();
} else {
    echo "Error al actualizar el registro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
