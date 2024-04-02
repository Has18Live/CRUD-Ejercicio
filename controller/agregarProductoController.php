<?php
include_once('../config/conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();


$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO productos (nombre, descripcion) VALUES ('$nombre','$descripcion')";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header ("Location: ../index.php");
}
?>
