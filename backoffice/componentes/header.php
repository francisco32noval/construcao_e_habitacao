<?php

if(!verificarLogado()){header("Location: index.php");}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACKOFFICE</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="CSS_back/media.css"> -->
    <link rel="stylesheet" href="CSS_back/style.css">
    <link rel="stylesheet" href="fonts_back/fonts.css">
    <link rel="stylesheet" href="CSS_back/const.css">
    

    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- LOCAL JS -->
    <script src="../js/main.js" defer></script>


    <!-- EDITOR DE TEXTO -->
    <script src="https://cdn.tiny.cloud/1/9ljc7z16k4furqkx7hw5zcy7mx224ozfflzvyih4q96tk95y/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    

    <header class="container-fluid">

        <div class="row p-0">

            <div class="col-12 p-0">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">Tripeira</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "home") ? "active" : ""; ?>" href="home.php">home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "carousel") ? "active" : ""; ?>" href="carousel.php">carousel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">quem somos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "socios") ? "active" : ""; ?>" href="socios.php">sócios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">notícias</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "destaques") ? "active" : ""; ?>" href="destaques.php">destaques</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "empreendimentos") ? "active" : ""; ?>" href="empreendimentos.php">empreendimentos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "centro_de_ferias") ? "active" : ""; ?>" href="centro_de_ferias.php">centro de férias</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins <?= ($menu_atual == "contactos") ? "active" : ""; ?>" href="contactos.php">contactos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link upper poppins" href="logout.php">sair</a>
                            </li>

                        </ul>
                    
                    </div>
                </div>
            </nav>

            </div>

        </div>

    </header>

