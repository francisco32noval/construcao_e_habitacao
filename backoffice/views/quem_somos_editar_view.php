<?php

$quem_somos = getQuemSomos();

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);
if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE quem_somos SET imagem='$imagem', texto='$texto'");
    header("Location: quem_somos.php");
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
            <h3>Quem Somos</h3>
            </div>
        </div>

        <div class="row">
            <form class="col-12">

                <label for="imagem" class="fw-bold mt-5">Imagem:</label><br>
                <input type="text" name="imagem" id="imagem" required style="width: 50%;" value="<?= $quem_somos["imagem"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br><br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"><?= $quem_somos["texto"]; ?></textarea>

                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>