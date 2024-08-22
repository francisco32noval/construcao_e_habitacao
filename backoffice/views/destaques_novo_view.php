<?php

$form = isset($_GET["titulo"]) && isset($_GET["mostrar_na_home"]) && isset($_GET["texto"]) && isset($_GET["imagem"]);
if($form){
    $titulo = $_GET["titulo"];
    $mostrar_na_home = $_GET["mostrar_na_home"];
    $texto = $_GET["texto"];
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO destaques (titulo, mostrar_na_home, texto, imagem) VALUES ('$titulo', '$mostrar_na_home', '$texto', '$imagem')");
    header("Location: destaques.php");
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
                <h3>Novo Destaque</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">

                

                <label for="mostrar_na_home">Mostrar na Home:</label><br>
                <select name="mostrar_na_home" id="mostrar_na_home">
                    <option value="1">SIM</option>
                    <option value="0">NÃO</option>
                </select>

                <br>

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

                <input class="btn editar" type="submit" value="Adicionar">
                
            </form>
        </div>

    </main>