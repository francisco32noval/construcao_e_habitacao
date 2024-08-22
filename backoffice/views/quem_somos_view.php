<?php

$quem_somos = getQuemSomos();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Quem somos</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12">

                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <tr>

                        <td>
                            <img src="<?= $quem_somos["imagem"]; ?>" alt="<?= $quem_somos["imagem"]; ?>" width="200">
                        </td>

                        <td>
                            <?= substr($quem_somos["texto"], 0, 50); ?> 
                        </td>

                        <td>
                            <a href="quem_somos_editar.php?id=<?= $quem_somos["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>

                </table>

            </div>

        </div>

    </main>


</body>
</html>