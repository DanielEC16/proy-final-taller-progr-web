<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="../CSS/admin.css">
</head>
<body>
    <h1>ADMINISTRATOR</h1>
    <div class="container">
        <form action="../Database/proceso_guardar.php" method="POST" enctype="multipart/form-data">
            <p>Codigo</p>
            <input type="text" name="codigo" id="">
            <p>Nombre del Producto</p>
            <input type="text" name="prod_name" id="">
            <p>Descripcion</p>
            <input type="text" name="descripcion" id="">
            <p>Precio</p>
            <input type="number" name="precio" id="">
            <p>Imagen</p>
            <input type="file" name="imagen" id="">
            <br>
            <br>
            <input type="submit" value="Aceptar">
        </form>
    </div>
<br>
    <div class="datos-data-container">
        <table border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
        <?php
        include("../Database/conexion.php");
        $query = "SELECT * FROM productos";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['cod_prod']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['ruta_imagen']); ?>"></td>
            <th><a href="#">Modificar</a></th>
            <th><a href="#">Eliminar</a></th>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>