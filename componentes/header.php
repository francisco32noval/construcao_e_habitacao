<?php

$carousel = getCarousel();
$empreendimentos = getEmpreendimentos();
$contactos = getContactos();

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

                <nav class="navbar navbar-expand-lg">

                    <div class="container-fluid pe-5 d-flex justify-content-center">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">

                                <li class="nav-item">
                                    <a class="nav-link active upper font_cor poppins px-1" id="especial" aria-current="page" href="#">home</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">quem somos</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">sócios</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">notícias</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">destaques</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link upper font_cor poppins px-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        empreendedimentos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-white upper poppins" href="#">Action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-white upper poppins" href="#">Barranha - S.ª da hora matosinhos</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-white upper poppins" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-white upper poppins" href="#">Something else here</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-white upper poppins" href="#">Something else here</a></li>
                                    </ul>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">centro de férias</a>
                                </li>

                                <li class="d-block d-lg-none">
                                    <hr class="hr_empr">
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link upper font_cor poppins px-1" href="#">contactos</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

        </div>


        <div class="row">

            <!-- CAROUSEL -->

            <div class="col-12 p-0">

                <div id="carouselExampleIndicators" class="carousel slide">

                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="uploads/BannerContactos.png" alt="contactos">
                        </div>

                        <div class="carousel-item active">
                            <img src="uploads/BannerDestaques.png" alt="Dest">
                        </div>

                        <div class="carousel-item active">
                            <img src="uploads/BannerDestaque1.png" alt="Dest1">
                        </div>

                    </div>
                    
                </div>

            </div>

        </div>

    </header>