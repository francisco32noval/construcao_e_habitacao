<?php

$destaques_home = getDestaquesDaHome();
$quem_somos_home = getQuemSomos();

?>

    <!-- MAIN -->


    <main class="container pt-3">

        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>

        <!-- AREA BEM-VINDO -->

        <div class="row">

            <div class="col-12 text-center poppins fs-2 mt-4">
                Bem-vindo à 
                <br>
                Cooperativa de Construção e Habitação Tripeira
            </div>

        </div>

        <div class="row mt-5 text-start poppins">
            <?= substr($quem_somos_home["texto"], 0, 200); ?>
        </div>


        <div class="row mt-3 text-start poppins">
            <?= substr($quem_somos_home["texto"], 0, 200); ?>
        </div>

        <div class="row">

            <div class="col-12 text-center">
                <div class="text-center"><a href="#" class="btn vermais_main upper px-4">ver mais</a></div>
            </div>

        </div>


        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>



        <!-- DESTAQUES -->

        <div class="row">

            <div class="col-12 text-center poppins fs-2 my-5">
                Destaques
            </div>

        </div>


        <div class="row d-flex justify-content-center">

            <?php foreach($destaques_home as $d): ?>

                <div class="col-12 col-sm-6 d-flex justify-content-center">
                    <div class="card" style="width: 70%;">
                        <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="destaque<?= $d["id"] ?>">
                        <div class="card-body">
                        <h5 class="titulo_card"><?= $d["titulo"]; ?></h5>
                        <p class="texto_card"><?= substr($d["texto"], 0, 100); ?></p>
                        <div class="text-center"><a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="btn upper px-4 ver_mais_destaques">ver mais</a></div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

            

        </div>


            
        
    </main>
