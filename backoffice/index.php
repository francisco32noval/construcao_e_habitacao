<?php

require_once("../requisicoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);
if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $esta_logado = fazerLogin($login, $senha);
    if($esta_logado){header("Location: home.php");}
}

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
    <script src="js/main.js" defer></script>


    <!-- EDITOR DE TEXTO -->
    <script src="https://cdn.tiny.cloud/1/9ljc7z16k4furqkx7hw5zcy7mx224ozfflzvyih4q96tk95y/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>

    <header class="text-center">
        <img class="w-25" src="../uploads/logo.png" alt="logo">
    </header>

    <main class="container-fluid my-5">
        <div class="row">
            <form class="col-12 text-center login m-auto" method="POST">

                <h3>Login</h3>

                <?php if($form): ?>

                    <h5 class="text-danger">LOGIN INVÁLIDO!</h5>

                <?php endif; ?>

                <input type="text" name="login" placeholder="Login" required class="text-center" autofocus>
                <br><br>
                <input type="password" name="senha" placeholder="Senha" required class="text-center">
                <br><br>
                <input type="submit" value="Aceder">

            </form>
        </div>
    </main>

</body>
</html>