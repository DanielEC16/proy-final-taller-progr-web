<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario_id"])) {
    header("Location: Login.php");
    exit();
}

// Resto del código de la página
// ...
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h1>ADMINISTRATOR</h1>
    <div class="options">
        <button>Agregar</button>
        <button>Ventas</button>
        <button>Clientes</button>
        <button>Productos</button>
    </div>
    <div class="container">
        <form action="../Database/proceso_guardar.php" method="POST" enctype="multipart/form-data">
            <span>Codigo</span>
            <input type="text" name="codigo" id=""><br>
            <span>Nombre del Producto</span>
            <input type="text" name="prod_name" id=""><br>
            <span>Descripcion</span>
            <textarea name="descripcion" id="" rows="6"></textarea><br>
            <span>Precio</span>
            <input type="number" step="0.01" name="precio" id=""><br>
            <span>Imagen</span>
            <input type="file" name="imagen" id=""><br>
            <br>
            <input type="submit" value="Aceptar">
        </form>
    </div>
    <br>
    <div class="datos-data-container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../Database/conexion.php");
                $query = "SELECT * FROM productos";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['ruta_imagen']); ?>"></td>
                        <td>
                            <a href="modificar_producto.php?id=<?php echo $row['id']; ?>" class="modifi" onclick="return confirm('¿Estás seguro de que deseas modificar este producto?')">Modificar</a> |
                            <a href="../Database/proceso_eliminar.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <a href="../Database/cerrar_sesion.php">Cerrar Sesión</a>
</body>

</html>