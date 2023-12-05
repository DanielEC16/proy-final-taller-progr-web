<?php
include("../Database/conexion.php");

// Verificar si se ha enviado el formulario de modificación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Obtener datos del formulario
    $idProducto = $_POST['id'];
    $nuevoNombre = $_POST['nombre'];
    $nuevaDescripcion = $_POST['descripcion'];
    $nuevoPrecio = $_POST['precio'];

    // Consulta SQL para actualizar el producto con una consulta preparada
    $query = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param('ssdi', $nuevoNombre, $nuevaDescripcion, $nuevoPrecio, $idProducto);
    $stmt->execute();
    $stmt->close();

    // Redirige a la página de lista de productos después de la modificación
    header("Location: ../php/admin.php");
    exit();
} else {
    // Obtener el ID del producto a modificar de la URL
    if (isset($_GET['id'])) {
        $idProducto = $_GET['id'];

        // Utiliza parámetros preparados para evitar SQL injection
        $query = "SELECT * FROM productos WHERE id = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param('s', $idProducto);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $producto = $resultado->fetch_assoc();
        } else {
            echo "Producto no encontrado.";
            exit();
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        echo "Solicitud no válida.";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
</head>

<body>

    <h1>Modificar Producto</h1>

    <form action="../Database/proceso_modificar.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"><?php echo $producto['descripcion']; ?></textarea>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" value="<?php echo $producto['precio']; ?>" required>
        <br>
        <label for="imagen">Cambiar Imagen:</label>
        <input type="file" name="imagen" accept="image/*">
        <br>
        <br>
        <img src="data:image/jpg;base64,<?php echo base64_encode($producto['ruta_imagen']); ?>">
        <br>
        <input type="submit" value="Aceptar">
    </form>

</body>

</html>