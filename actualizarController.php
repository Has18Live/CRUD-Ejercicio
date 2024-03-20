<?php
include('conexion.php');
$conexion = new Conexion();
$conn = $conexion->conectar();

if(isset($_POST['id'], $_POST['nombre'], $_POST['descripcion'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);

    $sql = "UPDATE productos SET Nombre='$nombre', Descripcion='$descripcion' WHERE ID='$id'";
    if(mysqli_query($conn, $sql)) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "No se han recibido todos los datos necesarios para actualizar el producto.";
}
?>
