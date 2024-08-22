<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_1"]) && isset($_GET["imagem_2"]) && isset($_GET["imagem_3"]) && isset($_GET["imagem_4"]);
if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_1 = $_GET["imagem_1"];
    $imagem_2 = $_GET["imagem_2"];
    $imagem_3 = $_GET["imagem_3"];
    $imagem_4 = $_GET["imagem_4"];
    iduSQL("INSERT INTO empreendimentos (titulo, texto, imagem_1, imagem_2, imagem_3, imagem_4) VALUES ('$titulo', '$texto', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4')");
    header("Location: empreendimentos.php");
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
                <h3>Novo Empreendimento</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">


                <label for="imagem" class="fw-bold mt-5">Imagem 1:</label><br>
                <input type="text" name="imagem_1" id="imagem_1" required style="width: 50%;">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>

                <br>

                <label for="imagem" class="fw-bold mt-5">Imagem 2:</label><br>
                <input type="text" name="imagem_2" id="imagem_2" required style="width: 50%;">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>

                <br>

                <label for="imagem" class="fw-bold mt-5">Imagem 3:</label><br>
                <input type="text" name="imagem_3" id="imagem_3" required style="width: 50%;">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>

                <br>

                <label for="imagem" class="fw-bold mt-5">Imagem 4:</label><br>
                <input type="text" name="imagem_4" id="imagem_4" required style="width: 50%;">
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

                <input class="btn editar" type="submit" value="Adicionar">
                
            </form>
        </div>

    </main>