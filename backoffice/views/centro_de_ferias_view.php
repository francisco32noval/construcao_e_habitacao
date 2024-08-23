<?php

$centro_ferias = getCentroDeFerias();

?>


    <main class="container-fluid quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Centro de Férias</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Título</th>
                        <th>Imagem Principal</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <tr>

                        <td>
                        <?= $centro_ferias["titulo"] ?>
                        </td>

                        <td>
                            <img src="<?= $centro_ferias["imagem_principal"]; ?>" alt="<?= $quem_somos["imagem"]; ?>" width="w-25"> 
                        </td>

                        <td>
                            <?= substr($centro_ferias["texto"], 0, 50); ?> 
                        </td>

                        <td>
                            <a href="centro_de_ferias_editar.php?id=<?= $centro_ferias["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>


                </table>

            </div>

        </div>

        <div class="row my-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Imagem 1</th>
                        <th>Imagem 2</th>
                        <th>Imagem 3</th>
                        <th>Imagem 4</th>
                        <th>Ações</th>
                    </tr>


                    <tr>
                        <td class="p-0">
                            <img src="<?= $centro_ferias["cf_img_1"]; ?>" alt="<?= $centro_ferias["cf_img_1"]; ?>" class="w-50"> 
                        </td>

                        <td class="p-0">
                            <img src="<?= $centro_ferias["cf_img_2"]; ?>" alt="<?= $centro_ferias["cf_img_2"]; ?>" class="w-50"> 
                        </td>

                        <td class="p-0">
                            <img src="<?= $centro_ferias["cf_img_3"]; ?>" alt="<?= $centro_ferias["cf_img_3"]; ?>" class="w-50"> 
                        </td>

                        <td class="p-0">
                            <img src="<?= $centro_ferias["cf_img_4"]; ?>" alt="<?= $cf_img_4["imagem"]; ?>" class="w-50"> 
                        </td>

                        <td>
                            <a href="centro_de_ferias_editar.php?id=<?= $quem_somos["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>


                </table>

            </div>

        </div>

    </main>


</body>
</html>