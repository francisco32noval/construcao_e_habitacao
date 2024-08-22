<?php

$carousel = getCarousel();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Carousel</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <a href="carousel_novo.php"><button class="btn editar">Novo Carousel</button></a><br><br>

                <table>

                    <tr>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>


                    <?php foreach($carousel as $c): ?>

                        <tr>

                            
                            <td>
                                <img class="w-50" src="<?= $c["imagem"]; ?>" alt="<?= $c["id"]; ?>">
                            </td>


                            <td>
                                <a href="carousel_editar.php?id=<?= $c["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                                <br><br>
                                <a href="carousel_apagar.php?id=<?= $c["id"]; ?>"><button type="button" class="btn editar">Apagar</button></a>
                            </td>

                        </tr>
                    
                    <?php endforeach; ?>


                </table>

            </div>

        </div>

    </main>


</body>
</html>