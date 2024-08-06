<?php 

// $noticias = getNoticias();

$total_paginas = getTotalPaginasNoticias();
$pagina = 1;

$form = isset($_GET["pagina"]);
if($form){
  $pagina = intval($_GET["pagina"]);
  if($pagina < 1){$pagina = 1;}
  elseif($pagina > $total_paginas){$pagina = $total_paginas;}
}

$noticias = getNoticiasPagina($pagina);

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


        <div class="row mt-5">
            <div class="col-12 text-center d-flex gap-3 justify-content-center">

                <?php for($i=1; $i<=$total_paginas; $i++): ?>
                    <a href="noticias.php?pagina=<?= $i; ?>" class="paginacao_botao poppins"><?= $i; ?></a>
                <?php endfor; ?>

            </div>
        </div>
            
        
    </main>

