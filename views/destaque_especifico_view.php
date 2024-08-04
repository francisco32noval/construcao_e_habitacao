<?php

$form = isset($_GET["id"]);
if($form){
  $id = $_GET["id"];
  $destaque_especifico = getDestaqueEspecifico($id);
}

?>


    <!-- MAIN -->


    <main class="container pt-3">

        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>

        <!-- NOTICIAS -->

        <div class="row mt-4">

            <div class="col-12 text-center poppins fs-2">
                Destaques
            </div>

            <div class="col-12 text-center poppins fs-4 fw-medium">
                <?= $destaque_especifico["titulo"] ?>
            </div>

            <div class="col-12 mt-5">

                <p class="poppins">
                    <?= $destaque_especifico["texto"] ?>
                </p>

                        
            </div>


            <div class="row mt-5">

                <div class="col-12 text-end"><a href="destaques.php" class="upper poppins botao_esp py-3 px-4 font_cor">voltar para destaques</a></div>
                
            </div>
        </div>       
            


            
        
    </main>


