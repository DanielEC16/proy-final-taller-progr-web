<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script type="text/javascript">
    window.onload = function(){
    (function(d, script) {
    script = d.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = 'https://w.app/widget-v1/p3i8ae.js';
    d.getElementsByTagName('head')[0].appendChild(script);
    }(document));
    };
    </script>
</head>

<body>
  <!-- START NAV-BAR -->
  <nav>
    <div class="nav-logo">
      <a href="">
        <img src="../img/logo.png">
        <span>D'Leonisa</span>
      </a>
    </div>
    <ul class="nav-links">
      <li class="link"><a href="">Inicio</a></li>
      <li class="link"><a href="productos.php">Productos</a></li>
      <li class="link"><a href="">Direccion</a></li>
      <li class="link"><a href="">Contacto</a></li>
    </ul>
    <button id="modalBtn" class="btn">Contactanos!</button>
  </nav>
  <!-- END NAV-BAR -->

  <!-- START CARRUZEL -->
  <header class="header-container">
    <div class="swiper-container-1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="../img/vista-plato-lleno-deliciosos-dulces-postres-magdalenas.jpg">
          <div class="text-swiper">
            <span>Pasteleria</span>
            <h1>D'Leonisa</h1>
            <p>100% Peruano</p>
            <a href="productos.html" class="btn">Ver Poductos</a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="../img/varios-pasteles-estantes-supermercados-venta.jpg">
          <div class="text-swiper">
            <span>Pasteleria</span>
            <h1>D'Leonisa</h1>
            <p>100% Peruano</p>
            <a href="productos.html" class="btn">Ver Poductos</a>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="../img/variedad-productos-horneados-dulce-indulgencia-generada-ia.jpg">
          <div class="text-swiper">
            <span>Pasteleria</span>
            <h1>D'Leonisa</h1>
            <p>100% Peruano</p>
            <a href="productos.html" class="btn">Ver Poductos</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END CARRUZEL -->

  <!-- START MODAL -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>LOGIN</h2>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" placeholder="Ingrese su Nombre"><br>

      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" placeholder="Ingrese sus Apellidos"><br>

      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" placeholder="Dirección"><br>

      <label for="correo">Correo:</label>
      <input type="email" id="correo" placeholder="Correo" required><br>

      <label for="telefono">Celular:</label>
      <input type="text " id="telefono" placeholder="Ingrese su Celular" pattern="[0-9]+" required><br>

      <div id="error-message" class="error-message"></div>

      <button id="enviarBtn">Enviar</button>
    </div>
  </div>

  <!-- END MODAL -->


  <section class="productos-container">
    <h3 class="tittle">Productos</h3>
    <div class="swiper-container-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/0.jpg" alt="">
                </div>
                <div class="details">
                  <p>Indulgencia</p>
                  <p>S/3.50</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/1.jpg" alt="">
                </div>
                <div class="details">
                  <p>Cupcakes</p>
                  <p>S/5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img class="position-bottom" src="../img/Productos/2.jpg" alt="">
                </div>
                <div class="details">
                  <p>Torta de Chocolate</p>
                  <p>S/45.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/3.jpg" alt="">
                </div>
                <div class="details">
                  <p>Trufas</p>
                  <p>S/1.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/4.jpg" alt="">
                </div>
                <div class="details">
                  <p>Torta de Chocolate</p>
                  <p>S/55.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/5.jpg" alt="">
                </div>
                <div class="details">
                  <p>Cupcakes de Chocolate</p>
                  <p>S/6.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/6.jpg" alt="">
                </div>
                <div class="details">
                  <p>Mini Brownies</p>
                  <p>S/2.50</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/7.jpg" alt="">
                </div>
                <div class="details">
                  <p>Torta Sublime</p>
                  <p>S/55.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/8.jpg" alt="">
                </div>
                <div class="details">
                  <p>Donut's</p>
                  <p>S/4.50</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/9.jpg" alt="">
                </div>
                <div class="details">
                  <p>Trufas con mani</p>
                  <p>S/1.50</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/10.jpg" alt="">
                </div>
                <div class="details">
                  <p>Magdalenas</p>
                  <p>S/4.50</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/11.jpg" alt="">
                </div>
                <div class="details">
                  <p>Trufas de Colores</p>
                  <p>S/1.50</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/12.jpg" alt="">
                </div>
                <div class="details">
                  <p>Porcion Cheesecake</p>
                  <p>S/5.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/13.jpg" alt="">
                </div>
                <div class="details">
                  <p>Porcion Torta</p>
                  <p>S/4.50</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/14.jpg" alt="">
                </div>
                <div class="details">
                  <p>Cheesecake Horneado</p>
                  <p>S/55.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/15.jpg" alt="">
                </div>
                <div class="details">
                  <p>Magdalenas de Colores</p>
                  <p>S/5.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/16.jpg" alt="">
                </div>
                <div class="details">
                  <p>Frambuesas con Chocolate</p>
                  <p>S/45.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/17.jpg" alt="">
                </div>
                <div class="details">
                  <p>Porcion Red</p>
                  <p>S/4.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="grid-container">
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/18.jpg" alt="">
                </div>
                <div class="details">
                  <p>Porcion Cheesecake Horneado</p>
                  <p>S/5.00</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img">
                  <img src="../img/Productos/19.jpg" alt="">
                </div>
                <div class="details">
                  <p>Mini Porciones de Tartufo</p>
                  <p>S/2.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="direccion-container">
    <h3 class="tittle">Direccion</h3>
    <div class="maps-container">
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.863709483755!2d-77.00645172398337!3d-12.052897042016875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7fe3805c151%3A0xf0e9c2d1fb3e6338!2sD&#39;Leonisa%20Pasteler%C3%ADa%20%26%20Panader%C3%ADa!5e0!3m2!1ses-419!2spe!4v1696719382454!5m2!1ses-419!2spe"
          width="800" height="550" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="direcciones-container">
        <div class="tittle">
          <h4>Nuestras Sedes</h4>
        </div>
        <div class="direcciones">
          <div id="sede1" class="sede">
            <p>Sede Riva Aguero<br>Lunes a Domingo de 8:00 a 22:00<br>Av. Riva Agüero 725, El Agustino 15004
            </p>
          </div>
          <div id="sede2" class="sede">
            <p>Sede Las Flores<br>Lunes a Domingo de 8:00 a 22:00<br>Av. Riva Agüero 725, El Agustino 15004
            </p>
          </div>
          <div id="sede3" class="sede">
            <p>Sede Campoy<br>Lunes a Domingo de 8:00 a 22:00<br>Av. Riva Agüero 725, El Agustino 15004</p>
          </div>
          <div id="sede4" class="sede">
            <p>Sede Chorrilos<br>Lunes a Domingo de 8:00 a 22:00<br>Av. Riva Agüero 725, El Agustino 15004
            </p>
          </div>
          <div id="sede5" class="sede">
            <p>Sede Lince<br>Lunes a Domingo de 8:00 a 22:00<br>Av. Riva Agüero 725, El Agustino 15004
            </p>
          </div>
        </div>
      </div>
  </section>

  <footer class="footer-container">
    <div class="line"></div>
    <div class="contact-container">
      <div class="informacion-footer">
        <span class="logo">D'LEONISA</span>
        <ul class="informacion">
          <li>Riva Aguero</li>
          <li>921-167-095</li>
          <li>daniel695@gmail.com</li>
        </ul>
      </div>
      <div class="social-media">
        <a href="https://www.facebook.com/DLeonisaPasteleria"><i class="ri-facebook-box-fill"></i></a>
        <a href="https://www.instagram.com/dleonisapasteleria/"><i class="ri-instagram-fill"></i></a>
        <a href="https://w.app/widget-v1/p3i8ae.js"><i class="ri-whatsapp-line"></i></a>
        <a href=""><i class="ri-twitter-fill"></i></a>  
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>