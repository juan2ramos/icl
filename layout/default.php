<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Icl"/>
    <meta property="og:description" content=".."/>
    <meta property="og:image" content="images/logo.png"/>


    <link rel="shortcut icon" href="favicon.png">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<header class="Header">
    <div class="Header-wrapper">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Beneficios</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </nav>
        <span class="Header-metrics">x1</span>
        <span class="Header-metrics right">x2</span>
        <figure class="Header-img">
            <img src="img/banner1.jpg" alt=""/>
        </figure>
        <div class="diamond">
            <div class="diamondContent">

            </div>
        </div>
        <div class="diamond diamond--left">
            <div class="diamondContent">
                <img class="diamond-img" src="img/1.jpg" alt=""/>
            </div>
        </div>
        <div class="diamond diamond--bottom">
            <div class="diamondContent">

            </div>
        </div>
        <div class="diamond diamond--right">
            <div class="diamondContent">
                <img class="diamond-img" src="img/2.jpg" alt=""/>
            </div>
        </div>
    </div>
</header>


<nav>

</nav>

<?php include $fileName; ?>

<footer>

</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>