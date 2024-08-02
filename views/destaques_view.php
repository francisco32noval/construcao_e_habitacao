<?php 

$total_paginas = getTotalPaginas();
$pagina = 1;

$form = isset($_GET["pagina"]);
if($form){
  $pagina = intval($_GET["pagina"]);
  if($pagina < 1){$pagina = 1;}
  elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}

$destaques = getDestaquesPagina($pagina);

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
                Destaques
            </div>

        </div>


        <div class="row d-flex justify-content-center">

            <?php  foreach($destaques as $d):  ?>

                <div class="col-12 col-md-5">

                    <div class="card">
                        <img src="<?= $d["imagem"];?>" class="card-img-top" alt="destaque1">
                        <div class="card-body">
                            <h5 class="titulo_card"><?= $d["titulo"];?></h5>
                            <p class="texto_card"><?= substr($d["texto"], 0, 50);?></p>
                            <div class="text-center"><a href="destaque_especifico.php?id=<?= $d["id"]; ?>" class="btn upper px-4 ver_mais_destaques">ver mais</a></div>
                        </div>
                    </div>

                </div>

            <?php  endforeach;  ?>

        </div>

        <div class="row mt-5">
            <div class="col-12 text-center d-flex gap-3 justify-content-center">

                <?php for($i=1; $i<=$total_paginas; $i++): ?>
                    <a href="destaques.php?pagina=<?= $i; ?>" class="paginacao_botao poppins"><?= $i; ?></a>
                <?php endfor; ?>

            </div>
        </div>

            
        
    </main>
