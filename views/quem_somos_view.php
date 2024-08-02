<?php

$quem_somos = getQuemSomos();

?>


    <main class="container">


        <div class="row my-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>


        <div class="row">
            <div class="col-12 text-center poppins font-weight-bold fs-3 mb-4">
                Quem somos
            </div>

            <div class="col-12 text-center">
                <img src="<?= $quem_somos["imagem"]; ?>" class="float-md-start me-4 mb-3 w-50">
                <p class="d-none d-md-block text-start">
                    <?= $quem_somos["texto"]; ?>
                </p>

            </div>

            
        </div>
    </main>


