<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Obtener datos del formulario
    $idProducto = $_POST['id'];
    $nuevoNombre = $_POST['nombre'];
    $nuevaDescripcion = $_POST['descripcion'];
    $nuevoPrecio = $_POST['precio'];

    // Actualizar la imagen si se proporcionó una nueva
    if ($_FILES['imagen']['size'] > 0) {
        $imagenTemp = $_FILES['imagen']['tmp_name'];
        $imagenContenido = file_get_contents($imagenTemp);

        // Consulta SQL para actualizar el producto con una nueva imagen
        $query = "UPDATE `productos` SET `nombre` = ?, `descripcion` = ?, `precio` = ?, `ruta_imagen` = ? WHERE `productos`.`id` = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param('ssdss', $nuevoNombre, $nuevaDescripcion, $nuevoPrecio, $imagenContenido, $idProducto);
    } else {
        // Consulta SQL para actualizar el producto sin cambiar la imagen
        $query = "UPDATE `productos` SET `nombre` = ?, `descripcion` = ?, `precio` = ? WHERE `productos`.`id` = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param('ssdi', $nuevoNombre, $nuevaDescripcion, $nuevoPrecio, $idProducto);
    }

    $stmt->execute();
    $stmt->close();

    // Redirige a la página de lista de productos después de la modificación
    header("Location: ../php/admin.php");
} else {
    // Solicitud no válida
    echo "Solicitud no válida.";
}
