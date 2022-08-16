<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>On-off - DOMOTICA</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../estilos_vista_css/imagen_hover.css">
    <link rel="stylesheet" href="../estilos_vista_css/responsib_m.css">

</head>
<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css"/>
<script defer src="https://pyscript.net/alpha/pyscript.js"></script>
<body>

<body>

<section>
        <div class="container-portada">
        <div class="capa-gradient"></div>
        <div class="container-details">
            <div class="details">
                <h1>DOMOTICA</h1>
                <p> Sistema capaces de automatizar una vivienda o edificación de cualquier tipo, aportando servicios de gestión energética, seguridad, bienestar y comunicación.</p>

            </div>
        </div>
    </div>
    </section>
    <main>
    <article>
            <h1>Foco - información</h1>
            <hr>
            <br><br>
            <p>Si quiere encender la bombilla ponga 1
            </p> <!--letra-->
            <p>Si quiere apagar la bombilla ponga 2
            </p>
            <a href="../vistas/foco_on_off.php" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        iniciar
        </a>

        <br><br><br>
        <div class="video">
            <video autoplay="" muted="" loop="" src="../videos/foco.mp4"></video>
            <h2 >ON/OFF</h2> <!--cambiar al tamaño original y cambiar video-->
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <a href="../vistas/vista_foco.php" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        Salir
        </a>
        <py-script src="../bombilla/discovery.py"></py-script>
  <py-script src="../bombilla/controlador.py"></py-script>
        <br><br>

    </main>
</body>

</html>
