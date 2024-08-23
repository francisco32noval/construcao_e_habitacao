<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $cf = getCentroDeFerias($id);
    $form_2 = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_principal"]) && isset($_GET["cf_img_1"]) && isset($_GET["cf_img_2"]) && isset($_GET["cf_img_3"]) && isset($_GET["cf_img_4"]);
    if($form_2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $imagem_principal = $_GET["imagem_principal"];
        $cf_img_1 = $_GET["cf_img_1"];
        $cf_img_2 = $_GET["cf_img_2"];
        $cf_img_3 = $_GET["cf_img_3"];
        $cf_img_4 = $_GET["cf_img_4"];
        iduSQL("UPDATE centro_de_ferias SET titulo='$titulo', texto='$texto', imagem_principal='$imagem_principal', cf_img_1='$cf_img_1', cf_img_2='$cf_img_2', cf_img_3='$cf_img_3', cf_img_4='$cf_img_4' WHERE id=$id");
        header("Location: centro_de_ferias.php");
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
                <h3>Centro de Férias - Editar</h3>
            </div>
        </div>

        <div class="row">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">

                <label for="titulo" class="fw-bold">Título:</label><br>
                <input type="text" name="titulo" id="titulo" required style="width: 50%;" value="<?= $cf["titulo"]; ?>">

                <br><br>


                <label for="imagem_principal" class="fw-bold mt-5">Imagem:</label><br>
                <input type="text" name="imagem_principal" id="imagem_principal" required style="width: 50%;" value="<?= $cf["imagem_principal"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br><br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"><?= $cf["texto"]; ?></textarea>

                <br><br>

                <label for="cf_img_1" class="fw-bold mt-5">Imagem Secundária 1:</label><br>
                <input type="text" name="cf_img_1" id="cf_img_1" required style="width: 50%;" value="<?= $cf["cf_img_1"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <label for="cf_img_2" class="fw-bold mt-5">Imagem Secundária 2:</label><br>
                <input type="text" name="cf_img_2" id="cf_img_2" required style="width: 50%;" value="<?= $cf["cf_img_2"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <label for="cf_img_3" class="fw-bold mt-5">Imagem Secundária 3:</label><br>
                <input type="text" name="cf_img_3" id="cf_img_3" required style="width: 50%;" value="<?= $cf["cf_img_3"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <label for="cf_img_4" class="fw-bold mt-5">Imagem Secundária 4:</label><br>
                <input type="text" name="cf_img_4" id="cf_img_4" required style="width: 50%;" value="<?= $cf["cf_img_4"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>