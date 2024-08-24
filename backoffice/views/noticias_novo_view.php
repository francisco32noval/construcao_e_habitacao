<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO noticias (titulo, texto, imagem) VALUES ('$titulo', '$texto', '$imagem')");
    header("Location: noticias.php");
    ob_end_flush();
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
                <h3>Nova Notícia</h3>
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
                
                <br><br><br><br>

                <label for="titulo" class="fw-bold">Título:</label><br>
                <input type="text" name="titulo" id="titulo" required style="width: 50%;">

                <br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"></textarea>

                <br><br>

                <input class="btn editar" type="submit" value="Adicionar Notícia">
                
            </form>
        </div>

    </main>