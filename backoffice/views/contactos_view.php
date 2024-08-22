<?php

$contactos = getContactos();

?>


    <main class="container-fluid quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Contactos</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Morada</th>
                        <th>Link Facebook</th>
                        <th>E-mail Formulários</th>
                        <th>Ações</th>
                    </tr>


                    <tr>

                        
                        <td>
                            <?= $contactos["telefone"]; ?>
                        </td>

                        <td>
                            <?= $contactos["email"]; ?>
                        </td>

                        <td>
                            <?= $contactos["morada"]; ?>
                        </td>

                        <td>
                            <?= $contactos["link_facebook"]; ?>
                        </td>

                        <td>
                            <?= $contactos["email_formulario"]; ?>
                        </td>


                        <td>
                            <a href="contactos_editar.php?id=<?= $contactos["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    


                </table>

            </div>

        </div>

    </main>


</body>
</html>