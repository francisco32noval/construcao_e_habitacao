<?php

$socios = getSocios();

$form = isset($_GET["titulo"]) && isset($_GET["texto"]);
if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    iduSQL("UPDATE socios SET titulo='$titulo', texto='$texto'");
    header("Location: socios.php");
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
                <h3>Sócios - Editar</h3>
            </div>
        </div>

        <div class="row">
            <form class="col-12">

                <label for="titulo" class="fw-bold">Título:</label><br>
                <input type="text" name="titulo" id="titulo" required style="width: 50%;" value="<?= $socios["titulo"]; ?>">
                
                <br><br><br><br>

                <label for="texto" class="fw-bold">Texto:</label><br>
                <textarea name="texto" id="texto" cols="120" rows="20"><?= $socios["texto"]; ?></textarea>

                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>