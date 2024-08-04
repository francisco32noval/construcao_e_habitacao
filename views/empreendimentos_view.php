<?php

$form = isset($_GET["id"]);
if($form){
  $id = $_GET["id"];
  $empreendimento_especifico = getEmpreendimentoEspecifico($id);
}

?>

    <!-- MAIN -->

    <?php if(!empty($empreendimento_especifico)): ?>
        <main class="container pt-3">

            <div class="row mt-5">

                <div class="col-12">
                    <hr class="hr_main">
                </div>

            </div>




            <!-- EMPREENDEDIMENTOS -->

        

            <div class="row mt-4">

                <div class="col-12 text-center poppins fs-2">
                    Empreendimentos
                </div>

                <div class="col-12 text-center poppins fs-4 fw-medium">
                    <?= $empreendimento_especifico["titulo"]; ?>
                </div>

                <div class="col-12 mt-5">

                    <p class="poppins">
                    <?= $empreendimento_especifico["texto"]; ?>
                    </p>        
                </div>
            </div>
        


            <div class="row d-flex justify-content-center gap-2 row-gap-4 p-0 mt-5">

                <?php for($i=1; $i <= 4; $i++): ?>

                    <img src="<?= $empreendimento_especifico["imagem_$i"] ?>" alt="destaque1" class="col-12 col-md-5">

                <?php endfor; ?>

            </div>


                
            
        </main>

    <?php else: ?>

        <main class="container pt-3">

            <div class="row mt-5">

                <div class="col-12">
                    <hr class="hr_main">
                </div>

            </div>




            <!-- EMPREENDIMENTOS -->

        

            <div class="row mt-4">

                <div class="col-12 text-center poppins fs-2">
                    EMPREENDIMENTO NÃO ENCONTRADO 
                </div>
                
            
        </main>

    <?php endif;?>



