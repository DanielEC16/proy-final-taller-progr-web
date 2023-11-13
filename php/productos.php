<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/productos.css">
</head>

<body>
    <nav>
        <div class="nav-logo">
            <a href="">
                <img src="../img/logo.png">
                <span>D'Leonisa</span>
            </a>
        </div>
        <ul class="nav-links">
            <li class="link"><a href="index.php">Inicio</a></li>
            <li class="link"><a href="">Productos</a></li>
            <li class="link"><a href="">Direccion</a></li>
            <li class="link"><a href="">Contacto</a></li>
        </ul>
        <button class="btn">Contactanos!</button>
    </nav>


    <section class="list-products">
        <div class="promos">
            <h3 class="tittle">Promos</h3>
            <div class="promos-container">
                <div class="productos">
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/0.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/1.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/2.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/3.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/4.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/5.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/6.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/7.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <?php
    include("../Database/conexion.php");

    $query = "SELECT * FROM productos";
    $resultado = $conexion->query($query);

    while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="card">
            <div class="content">
                <div class="img">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['ruta_imagen']); ?>">
                </div>
                <div class="details">
                    <p><strong><?php echo $row['nombre']; ?></strong></p>
                    <p>"<?php echo $row['descripcion']; ?>"</p>
                    <p><strong>S/<?php echo $row['precio']; ?></strong></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
                </div>
            </div>
        </div>

        <div class="line-division"></div>

        <div class="destacados">
            <h3 class="tittle">Producto Destacados</h3>
            <div class="promos-container">
                <div class="productos">
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/8.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/9.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/10.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/11.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/12.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><strong>S/3.50</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="line-division"></div>

        <div class="oferta">
            <h3 class="tittle">En Oferta</h3>
            <div class="promos-container">
                <div class="productos">
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/13.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/14.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/15.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/16.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/17.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/18.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <div class="img">
                                <img src="../img/Productos/19.jpg" alt="">
                            </div>
                            <div class="details">
                                <p><strong>Indulgencia</strong></p>
                                <p>"06 Porciones de pasta rellenas con crema pastelera y una cobertura de Chocolate"</p>
                                <p><s>S/3.50</s><strong>S/2.50</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>