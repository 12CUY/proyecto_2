<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos_vista_css//menu.css">
  <title>MENU</title>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">

  <!--encabezado responsive-->
  <header>
    <div class="icon__menu">
      <i class="fas fa-bars" id="btn_open"></i>
    </div>
  </header>

  <div class="menu__side" id="menu_side">

    <div class="name__page">
      <i class="fab fa-youtube"></i>
      <h4>JMW</h4>
    </div>

    <div class="options__menu">

      <a href="vista_1.php" class="selected">
        <div class="option">
          <i class="fas fa-home" title="Inicio"></i>
          <h4>Inicio</h4>
        </div>
      </a>

      <a href="vista_2.php">
        <div class="option">
          <i class="far fa-file" title="Portafolio"></i>
          <h4>vista</h4>
        </div>
      </a>

      <a href="vista_3.php">
        <div class="option">
          <i class="fas fa-video" title="Cursos"></i>
          <h4>sistema de prueba</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="far fa-sticky-note" title="Blog"></i>
          <h4>blog direcional</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="far fa-id-badge" title="Contacto"></i>
          <h4>Contacto - id numero</h4>
        </div>
      </a>

      <a href="#">
        <div class="option">
          <i class="far fa-address-card" title="Nosotros"></i>
          <h4>ubicacion</h4>
        </div>
      </a>

    </div>

  </div>

  <script src="../javascrip/menu.js"></script>
</body>

</html>