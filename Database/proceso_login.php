<?php
session_start();
include ("conexion.php");

// Obtener los datos del formulario
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Consulta SQL para verificar el usuario y la contraseña
$consulta = "SELECT user, contrasena FROM administrator WHERE user = '$usuario' AND contrasena = '$contrasena'";
$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso
    $usuario = $resultado->fetch_assoc();
    $_SESSION["usuario_id"] = $usuario["user"];
    $_SESSION["usuario_nombre"] = $usuario["contrasena"];
    header("Location: ../php/admin.php");
    exit();
} else {
    // Error de inicio de sesión
    $mensaje_error = "Usuario o contraseña incorrectos";
    header("Location: ../php/admin.php?error=$mensaje_error");
    exit();
}
?>
