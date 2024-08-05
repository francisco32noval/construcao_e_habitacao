<?php

$noticias = getNoticias();


?>
    <!-- MAIN -->


    <main class="container pt-3">

        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>

        <!-- NOTICIAS -->

        <div class="row mb-5">

            <div class="col-12 text-center poppins fs-2 mt-4">
                Notícias
            </div>

        </div>


        <div class="row d-flex justify-content-center">

            <?php foreach($noticias as $n): ?>
                
                <div class="col-12 col-md-5 m-2">

                    <div class="card">

                        <img src="<?= $n["imagem"]; ?>" class="card-img-top" alt="noticia1">

                        <div class="card-body">

                            <h5 class="titulo_card"><?= $n["titulo"]; ?></h5>

                            <p class="texto_card"><?= $n["texto"]; ?></p>

                        </div>

                    </div>

                </div>
            
            <?php endforeach; ?>

            

        </div>


            
        
    </main>

