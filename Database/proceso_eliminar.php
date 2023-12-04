<?php
include("conexion.php");

$id_producto = $_GET['id'];

$query = "DELETE FROM `productos` WHERE `id` = '$id_producto'";
$resultado = $conexion->query($query);

header("Location: ../php/admin.php");

?>