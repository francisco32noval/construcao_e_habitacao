<?php

$empreendimentos = getEmpreendimentos();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Empreendimentos</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <a href="empreendimentos_novo.php"><button class="btn editar">Novo Empreendimento</button></a><br><br>

                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($empreendimentos as $e): ?>

                        <tr>

                            
                            <td class="gap-2">
                                <img class="w-25" src="<?= $e["imagem_1"]; ?>" alt="<?= $e["id"]; ?>">
                                <img class="w-25" src="<?= $e["imagem_2"]; ?>" alt="<?= $e["id"]; ?>">
                                <br>
                                <img class="w-25" src="<?= $e["imagem_3"]; ?>" alt="<?= $e["id"]; ?>">
                                <img class="w-25" src="<?= $e["imagem_4"]; ?>" alt="<?= $e["id"]; ?>">
                            </td>

                            <td>
                                <?= $e["titulo"]; ?>
                            </td>

                            <td>
                                <?= substr($e["texto"], 0, 50); ?>...
                            </td>

                            <td>
                                <a href="empreendimentos_editar.php?id=<?= $e["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                                <br><br>
                                <!-- <a href="empreendimentos_apagar.php?id=<?= $d["id"]; ?>"><button type="button" class="btn editar">Apagar</button></a> -->
                            </td>

                        </tr>
                    
                    <?php endforeach; ?>


                </table>

            </div>

        </div>

    </main>


</body>
</html>