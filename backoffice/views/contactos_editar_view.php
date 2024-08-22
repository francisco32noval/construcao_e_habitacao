<?php

$contactos = getContactos();

$form = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["email"]) && isset($_GET["link_facebook"]) && isset($_GET["email_formulario"]);
if($form){
    $telefone = $_GET["telefone"];
    $morada = $_GET["morada"];
    $email = $_GET["email"];
    $link_facebook = $_GET["link_facebook"];
    $email_formulario = $_GET["email_formulario"];
    iduSQL("UPDATE contactos SET telefone='$telefone', morada='$morada', email='$email', link_facebook='$link_facebook', email_formulario='$email_formulario'");
    header("Location: contactos.php");
}

?>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

    <main class="container-fluid my-5 text-center">

        <div class="row">
            <div class="col-12">
                <h3>Contactos - Editar</h3>
            </div>
        </div>

        <div class="row mt-3">
            <form class="col-12">

                

                <label for="telefone" class="fw-bold">Telefone:</label><br>
                <input type="text" name="telefone" id="telefone" required style="width: 50%;" value="<?= $contactos["telefone"]; ?>">

                <br><br>

                <label for="email" class="fw-bold">E-mail:</label><br>
                <input type="text" name="email" id="email" required style="width: 50%;" value="<?= $contactos["email"]; ?>">

                <br><br>

                <label for="morada" class="fw-bold">Morada:</label><br>
                <input type="text" name="morada" id="morada" required style="width: 50%;" value="<?= $contactos["morada"]; ?>">

                <br><br>

                <label for="link_facebook" class="fw-bold">Link Facebook:</label><br>
                <input type="text" name="link_facebook" id="link_facebook" required style="width: 50%;" value="<?= $contactos["link_facebook"]; ?>">

                <br><br>

                <label for="email_formulario" class="fw-bold">E-mail Formulário:</label><br>
                <input type="text" name="email_formulario" id="email_formulario" required style="width: 50%;" value="<?= $contactos["email_formulario"]; ?>">

                <br><br>

                <input class="btn editar" type="submit" value="Editar">
                
            </form>
        </div>

    </main>