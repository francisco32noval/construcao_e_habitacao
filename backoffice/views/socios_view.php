<?php

$socios = getSocios();

?>


    <main class="container quem_somos">


        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Sócios</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12">

                <table>

                    <tr>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <tr>

                        <td>
                            <?= $socios["titulo"]; ?>
                        </td>

                        <td>
                            <?= $socios["texto"]; ?> 
                        </td>

                        <td>
                            <a href="socios_editar.php?id=<?= $socios["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>


                    </tr>

                </table>

            </div>

        </div>

    </main>


</body>
</html>