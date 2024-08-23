<?php

$noticias = getNoticias();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Notícias</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <a href="noticias_novo.php"><button class="btn editar">Nova Notícia</button></a><br><br>

                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($noticias as $n): ?>

                        <tr>

                            
                            <td>
                                <img src="<?= $n["imagem"]; ?>" alt="<?= $n["id"]; ?>">
                            </td>

                            <td>
                                <?= $n["titulo"]; ?>
                            </td>

                            <td>
                                <?= substr($n["texto"], 0, 50); ?>...
                            </td>

                            <td>
                                <a href="noticias_editar.php?id=<?= $n["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                                <br><br>
                                <a href="noticias_apagar.php?id=<?= $n["id"]; ?>"><button type="button" class="btn editar">Apagar</button></a>
                            </td>

                        </tr>
                    
                    <?php endforeach; ?>


                </table>

            </div>

        </div>

    </main>


</body>
</html>