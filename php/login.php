<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/login_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="conteiner">
        <form action="../Database/proceso_login.php" method="post" class="form">
            <h1 class="title">INICIO</h1>
            <div class="input">
                <input type="text" name="usuario" id="" placeholder="Usuario">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input">
                <input type="password" name="contrasena" id="" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit">Iniciar Sesion</button>
        </form>
        
    </div>
</body>
</html>