<?php

$form = isset($_GET["id"]);
if($form){
    $id = $_GET["id"];
    $banner_especifico = getBannerEspecifico($id);
    $form = isset($_GET["quem_somos"]) && isset($_GET["socios"]) && isset($_GET["noticias"]) && isset($_GET["destaques"]) && isset($_GET["empreendimentos"]) && isset($_GET["centro_de_ferias"]) && isset($_GET["contactos"]);
    if($form){
        $quem_somos = $_GET["quem_somos"];
        $socios = $_GET["socios"];
        $noticias = $_GET["noticias"];
        $destaques = $_GET["destaques"];
        $empreendimentos = $_GET["empreendimentos"];
        $centro_de_ferias = $_GET["centro_de_ferias"];
        $contactos = $_GET["contactos"];
        iduSQL("UPDATE banners SET quem_somos='$quem_somos', socios='$socios', noticias='$noticias', destaques='$destaques', empreendimentos='$empreendimentos', centro_de_ferias='$centro_de_ferias', contactos='$contactos'  WHERE id=$id");
        header("Location: banners.php");
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
                <h3>Banners - Editar</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">

                <input type="hidden" name="id" value="<?= $id; ?>">


                <br>

                <label for="quem_somos" class="fw-bold mt-5">Quem Somos:</label><br>
                <input type="text" name="quem_somos" id="quem_somos" required style="width: 50%;" value="<?= $banner_especifico["quem_somos"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <label for="socios" class="fw-bold mt-5">Sócios:</label><br>
                <input type="text" name="socios" id="socios" required style="width: 50%;" value="<?= $banner_especifico["socios"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>


                <label for="noticias" class="fw-bold mt-5">Notícias:</label><br>
                <input type="text" name="noticias" id="noticias" required style="width: 50%;" value="<?= $banner_especifico["noticias"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>


                <label for="destaques" class="fw-bold mt-5">Destaques:</label><br>
                <input type="text" name="destaques" id="destaques" required style="width: 50%;" value="<?= $banner_especifico["destaques"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>


                <label for="empreendimentos" class="fw-bold mt-5">Empreendimentos:</label><br>
                <input type="text" name="empreendimentos" id="empreendimentos" required style="width: 50%;" value="<?= $banner_especifico["empreendimentos"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>


                <label for="centro_de_ferias" class="fw-bold mt-5">Centro de Férias:</label><br>
                <input type="text" name="centro_de_ferias" id="centro_de_ferias" required style="width: 50%;" value="<?= $banner_especifico["centro_de_ferias"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>


                <label for="contactos" class="fw-bold mt-5">Contactos:</label><br>
                <input type="text" name="contactos" id="contactos" required style="width: 50%;" value="<?= $banner_especifico["contactos"]; ?>">
                <br><br>
                <a class="gestor" target="_blank" href="<?= $url_base; ?>backoffice/tinyfilemanager/tinyfilemanager.php?p=">
                    Gestor de Ficheiros
                </a>
                
                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>