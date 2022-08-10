<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos_vista_css//menu.css">
  <title>JMW - DOMOTICA</title>
  <script src="https://kit.fontawesome.com/b00314f003.js" crossorigin="anonymous"></script>
</head>

<body id="body">

  <!--encabezado responsive-->
  <header >
    <div class="icon__menu">
      <i class="fas fa-bars" id="btn_open"></i>
    </div>
  </header>

  <div class="menu__side" id="menu_side">

    <div class="name__page">
      <i class="fab fa-asymmetrik"></i>
      <h4>JUMAWI</h4>
    </div>

    <div class="options__menu">
<!--casa-->
      <a href="vista_1.php" class="selected">
        <div class="option">
          <i class="fas fa-home" title="casa"></i>
          <h4>Casa</h4>
        </div>
      </a>
<!--confort-->
      <a href="vista_2.php">
        <div class="option">
          <i class="fab fa-confluence" title="confort"></i>
          <h4>Confort</h4>
        </div>
      </a>
<!--visual-->
      <a href="vista_3.php">
        <div class="option">
          <i class="fas fa-eye" title="visual"></i>
          <h4>Visual</h4>
        </div>
      </a>
<!--seguridad-->
      <a href="vista_4.php">
        <div class="option">
          <i class="fas fa-door-closed" title="seguridad"></i>
          <h4>Seguridad</h4>
        </div>
      </a>
      <!--sistema completo falta la fecha de origen -->
      <a href="#">
        <div class="option">
          <i class="fas fa-sitemap" title="sistema"></i>
          <h4>sistema PQR</h4>
        </div>
      </a>
<!--huella-->
      <a href="../alexa/index.php">
        <div class="option">
          <i class="fa-solid fa-microphone-lines" title="alexa"></i>
          <h4>Domotica || ALEXA </h4>
        </div>
      </a>
      <!---->
      <a href="../vistas/vista_1.php">
        <div class="option">
          <i class="far fa-id-badge" title="video"></i>
          <h4>saltar directo casa</h4>
        </div>
      </a>

<!--cerrar session-->
      <a href="../index_login.php">
        <div class="option">
          <i class="fas fa-caret-square-left" title="cerrar sesion"></i>
          <h4>Cerrar sesion</h4>
        </div>
      </a>
    </div>

  </div>

  <script src="../javascrip/menu.js"></script>
</body>

</html>