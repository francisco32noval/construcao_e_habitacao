<?php

$socios = getSocios();


?>
    <main class="container">


        <div class="row my-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>


        <div class="row">

            <div class="col-12 text-center poppins font-weight-bold fs-3 mb-4">

                <?= $socios["titulo"]; ?>

            </div>

            <div class="col-12 poppins">

                <p><?= $socios["texto"]; ?></p>

            </div>
            
        </div>
    </main>

