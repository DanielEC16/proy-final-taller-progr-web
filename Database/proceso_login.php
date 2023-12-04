<?php
include('conexion.php');
if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['usuario']);
    $Clave = validate($_POST['contrasena']);

    if (empty($Usuario)) {
        header("Location : ../php/login.php?error=El Usuario es requerido");
        exit();
    }elseif(empty($Clave)){
        header("Location : ../php/login.php?error=La Clave es requerida");
        exit();
    }else{
        $Clave = md5($Clave);
        $Sql = "SELECT * FROM `administrator` WHERE User = '$Usuario' AND contrasena = '$Clave'";
        $result = mysqli_query($conexion,$Sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['User']===$Usuario&& $row['contrasena']===$Clave){
                $_SESSION['User'] = $row['Usuario'];
                
            }
        }
    }
}
