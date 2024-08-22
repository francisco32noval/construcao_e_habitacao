<?php

$form = isset($_GET["imagem"]);
if($form){
  $imagem = $_GET["imagem"];
  iduSQL("INSERT INTO carousel (imagem) VALUES ('$imagem')");
  header("Location: carousel.php");
}

?>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

    <main class="container-fluid my-5 text-center">

        <div class="row">
            <div class="col-12">
                <h3>Carousel - Novo</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">


                <label for="imagem" class="fw-bold mt-5">Imagem:</label><br>
                <input type="text" name="imagem" id="imagem" required style="width: 50%;">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <input class="btn editar" type="submit" value="Adicionar">
                
            </form>
        </div>

    </main>