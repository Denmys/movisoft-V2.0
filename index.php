<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">
<head>
    <!-- Agregando Dependencias -->
    <?php require_once "./includes/comun/comun.php" ?>
    <!-- Final de Dependencias -->
     <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#071d3d">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#071d3d">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y165DWQRJC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Y165DWQRJC');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WCRVLM2');
    </script>
    <!-- End Google Tag Manager -->

    <title>MoviSoft</title> 


</head>

<body>
        <!-- Agregando el Header -->
    <?php require_once "./app/vistas/header.php" ?>
    <!-- Sección Inicio -->
    <?php require_once "./app/vistas/SeccionInicio.php" ?>
    <!-- Sección About -->
    <?php require_once "./app/vistas/about.php"?>
    <!-- Sección Servicios -->
    <?php require_once "./app/vistas/servicios.php" ?>
    <!-- Sección Skills -->
    <?php require_once "./app/vistas/skills.php" ?>
    <!-- Sección Ofertas -->
    <?php require_once "./app/vistas/ofertas.php" ?>
    <!-- Formulario de Contacto -->
    <?php require_once "./app/vistas/contacto.php" ?>
    <!------ Footer -------->
    <?php require_once "./app/vistas/footer.php" ?>
    

<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCRVLM2"
      height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Agregando Archivos JS (noscript) -->

    <script src="mixitup.min.js"></script>
    <script src="movisoft.js"></script>

<!-- Agregando Archivos JS (noscript) -->

</body>
</html>