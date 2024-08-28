<?php

$carousel = getCarousel();
$empreendimentos = getEmpreendimentos();
$contactos = getContactos();
$banners = getBanners();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção e Habitação</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/media.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="CSS/const.css">
    

    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- LOCAL JS -->
    <script src="js/main.js" defer></script>


</head>

<body>

    <!-- HEADER -->

    <header class="container-fluid">

        <div class="row pt-4 pb-2 nav_log">

            <div class="col-4 text-end pe-2">
                <img src="uploads/logo.png" alt="logo" class="w-50 logo">
            </div>

            <div class="col-8">

                <!-- NAVBAR -->

                <nav class="navbar navbar-expand-lg" id="navbar">

                    <div class="container-fluid pe-5 d-flex justify-content-center">

                        <button id="menu-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">

                                <li class="nav-item">
                                    <a class="nav-link <?= ($menu_atual == "home") ? "active" : ""; ?> upper font_cor poppins px-1" id="especial" aria-current="page" href="index.php">home</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">quem somos</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">sócios</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">notícias</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "destaques") ? "active" : ""; ?>" href="destaques.php">destaques</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="link_empreendimentos">
                                        empreendimentos
                                    </a>
                                    <ul class="dropdown-menu">

                                        <?php foreach($empreendimentos as $e): ?>

                                            <li><a id="tamanho_emp" class="dropdown-item text-white upper poppins" href="empreendimentos.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                            <li><hr class="dropdown-divider <?= ($e == end($empreendimentos)) ? "d-none" : ""; ?>"></li>

                                        <?php endforeach; ?>

                                    </ul>

                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "centro_de_ferias") ? "active" : ""; ?>" href="centro_de_ferias.php">centro de férias</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1 <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">contactos</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

        </div>

        <?php if($menu_atual == "home"): ?>

            <div class="row">

                <!-- CAROUSEL -->

                <div class="col-12 p-0">

                    <div id="carouselExampleIndicators" class="carousel slide">

                        <div class="carousel-indicators">

                            <?php foreach($carousel as $i => $c): ?>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" <?= ($i==0) ? 'class="active" aria-current="true"' : ""; ?> aria-label="Slide <?= $i+1;?>"></button>

                            <?php endforeach; ?>
                        </div>

                        <div class="carousel-inner">

                            <?php foreach($carousel as $i => $c): ?>

                                <div class="carousel-item <?= ($i==0) ? "active" : ""; ?>">
                                    <img src="<?= $c["imagem"]; ?>" alt="contactos">
                                </div>

                            <?php endforeach; ?>

                        </div>
                        
                    </div>

                </div>

            </div>

        <?php else: ?>

            

            <div class="row">
                <div class="col-12 px-0">
                    <img src="<?= $banners["$menu_atual"]; ?>" alt="<?= $menu_atual; ?>" class="imagem_banner">
                </div>
            </div>

       

        <?php endif; ?>

    </header>

    