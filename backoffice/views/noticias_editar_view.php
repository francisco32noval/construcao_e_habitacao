<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $noticia_especifica = getNoticiasEspecifica($id);
    $form_2 = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem = $_GET["imagem"];
        iduSQL("UPDATE noticias SET titulo='$titulo', texto='$texto', imagem='$imagem' WHERE id=$id");
        header("Location: noticias.php");
        ob_end_flush();
    }
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
                <h3>Noticias - Editar</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">


                <label for="imagem" class="fw-bold mt-5">Imagem:</label><br>
                <input type="text" name="imagem" id="imagem" required style="width: 50%;" value="<?= $noticia_especifica["imagem"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br><br><br>

                <label for="titulo" class="fw-bold">Título:</label><br>
                <input type="text" name="titulo" id="titulo" required style="width: 50%;" value="<?= $noticia_especifica["titulo"]; ?>">

                <br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"><?= $noticia_especifica["texto"]; ?></textarea>

                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>