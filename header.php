<?php $template_uri = get_bloginfo('template_url'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISMEM - Instituto de Educación Superior María Elena Moyano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $template_uri; ?>/style.css">
    <link rel="stylesheet" href="<?php echo $template_uri; ?>/css/normalize.css">
</head>
<body>
    <!-- WhatsApp Float -->
    <a href="https://wa.me/51924488433" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="img/12.png" alt="Logo ISMEM">
                    <div class="logo-text">
                        <h1>ISMEM</h1>
                        <p>Instituto de Educación Superior "María Elena Moyano"- ISMEM</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html" class="active">Inicio</a></li>
                        <li><a href="admi.html">Admisión</a></li>
                        <li><a href="https://campusismem.com/">Campus Virtual</a></li>
                        <li><a href="bibli.html">Biblioteca Virtual</a></li>
                        <li><a href="egre.html">Portal Egresados</a></li>
                        <li><a href="trab.html">Bolsa de Trabajo</a></li>
                        <li><a href=" https://campusismem.com/web/admin/">Intranet</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
