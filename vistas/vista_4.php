<?php
include('../templates/menu.php');
//menu union 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SEGURIDAD - DOMOTICA</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../estilos_vista_css/imagen_hover.css">
    <link rel="stylesheet" href="../estilos_vista_css/responsib_m.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
    <section>
        <div class="container-portada">
            <div class="capa-gradient"></div>
            <div class="container-details">
                <div class="details">
                    <h1>DOMOTICA</h1>
                    <p> Sistema capaces de automatizar una vivienda o edificación de cualquier tipo, aportando servicios de gestión energética, seguridad, bienestar y comunicación.</p>
                    <button>Ver mas detalles</button>
                </div>
            </div>
        </div>
    </section>


    <main>
        <article>
            <h1>Seguridad - informacion</h1>
            <hr>
            <br><br>
            <p>Consiste en una red de seguridad encargada de proteger a las personas y bienes, esta aplicación se basa
                en dos pilares que son la prevención y la detección para la acción. </p>

            <p>Como la domótica tiene pleno conocimiento del estado de las puertas, ventanas y sensores dentro y fuera de
                la vivienda, puede, de forma muy sencilla y eficaz, hacerse con el control de esa información y poder, a
                través de la programación instalada, proteger la toda la casa.</p>

        </article>
        <section>
                    <?php include('../tarjeta/card_desplazamineto.php');//tarjeta  ?>
        </section>
        <br><br><br>
        <div class="video">
            <video autoplay="" muted="" loop="" src="../videos/seguridad.mp4"></video>
            <h2>seguridad</h2><!--cambiar al tamaño original y cambiar video-->
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <a href="../sistema prq/" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        SIGUIENTE
        </a>
        <br><br>
</body>

</html>