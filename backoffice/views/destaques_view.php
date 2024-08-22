<?php

$destaques = getTodosDestaques();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Destaques</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <a href="destaques_novo.php"><button class="btn editar">Novo Destaque</button></a><br><br>

                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($destaques as $d): ?>

                        <tr>

                            
                            <td>
                                <img src="<?= $d["imagem"]; ?>" alt="<?= $d["id"]; ?>">
                            </td>

                            <td>
                                <?= $d["titulo"]; ?>
                            </td>

                            <td>
                                <?= substr($d["texto"], 0, 50); ?>...
                            </td>

                            <td>
                                <a href="destaques_editar.php?id=<?= $d["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                                <br><br>
                                <a href="destaques_apagar.php?id=<?= $d["id"]; ?>"><button type="button" class="btn editar">Apagar</button></a>
                            </td>

                        </tr>
                    
                    <?php endforeach; ?>


                </table>

            </div>

        </div>

    </main>


</body>
</html>