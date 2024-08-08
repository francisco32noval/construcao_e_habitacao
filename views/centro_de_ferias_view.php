<?php

$cf = getCentroDeFerias();

?>

    <!-- MAIN -->


    <main class="container pt-3">

        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>




        <!-- CENTRO DE FERIAS -->

    

        <div class="row mt-5">
            <div class="col-12 text-center poppins font-weight-bold fs-3 mb-4">
                <?= $cf["titulo"]; ?>
            </div>

            <div class="col-12 text-center">

                <img src="<?= $cf["imagem_principal"]; ?>" alt="ferias1" class="float-md-start me-4 mb-3 w-25" id="ferias">

                <p class="text-start"><?= $cf["texto"]; ?></p>

            </div>
        </div>
    


        <div class="row d-flex justify-content-center gap-2 row-gap-4 p-0 mt-5">

            <img src="<?= $cf["cf_img_1"]; ?>" alt="ferias1" class="col-12 col-md-5">
            <img src="<?= $cf["cf_img_2"]; ?>" alt="ferias2" class="col-12 col-md-5">
            <img src="<?= $cf["cf_img_3"]; ?>" alt="ferias3" class="col-12 col-md-5">
            <img src="<?= $cf["cf_img_4"]; ?>" alt="ferias4" class="col-12 col-md-5">

        </div>


            
        
    </main>
