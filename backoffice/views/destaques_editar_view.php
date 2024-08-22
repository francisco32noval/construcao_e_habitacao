<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $destaque_especifico = getDestaqueEspecifico($id);
    $form_2 = isset($_GET["titulo"]) && isset($_GET["mostrar_na_home"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $mostrar_na_home = $_GET["mostrar_na_home"];
        $texto = $_GET["texto"];
        $imagem = $_GET["imagem"];
        iduSQL("UPDATE destaques SET titulo='$titulo', mostrar_na_home='$mostrar_na_home', texto='$texto', imagem='$imagem' WHERE id=$id");
        header("Location: destaques.php");
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
                <h3>Destaques - Editar</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="mostrar_na_home">Mostrar na Home:</label><br>
                <select name="mostrar_na_home" id="mostrar_na_home">
                    <option value="1" <?= ($destaque_especifico["mostrar_na_home"] == 1) ? "selected" : ""; ?>>SIM</option>
                    <option value="0" <?= ($destaque_especifico["mostrar_na_home"] == 0) ? "selected" : ""; ?>>NÃO</option>
                </select>

                <br>

                <label for="imagem" class="fw-bold mt-5">Imagem:</label><br>
                <input type="text" name="imagem" id="imagem" required style="width: 50%;" value="<?= $destaque_especifico["imagem"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br><br><br>

                <label for="titulo" class="fw-bold">Título:</label><br>
                <input type="text" name="titulo" id="titulo" required style="width: 50%;" value="<?= $destaque_especifico["titulo"]; ?>">

                <br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"><?= $destaque_especifico["texto"]; ?></textarea>

                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>