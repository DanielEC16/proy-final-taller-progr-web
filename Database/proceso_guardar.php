<?php

include ("conexion.php");

$codigo = $_POST['codigo'];
$prod_name = $_POST['prod_name'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO `productos`(`cod_prod`, `nombre`, `descripcion`, `precio`, `ruta_imagen`) VALUES ('$codigo','$prod_name','$descripcion','$precio','$imagen')";
$resultado = $conexion->query($query);
header("Location: ../php/admin.php")
?>