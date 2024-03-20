<?php
include ('conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();


$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header ("Location: index.php");
    exit(); 
} else {
    echo "Error al eliminar el producto: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
