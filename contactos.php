<?php

$menu_atual = "contactos";

require_once("requisicoes.php");

$form = isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["assunto"]) && isset($_POST["mensagem"])  && isset($_POST["g-recaptcha-response"]);
if($form){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $assunto = $_POST["assunto"];
  $mensagem = $_POST["mensagem"];
  $email_dono_site = getContactos();
  $email_dono_site = $email_dono_site["email_formulario"];

  
  
  
  $g_recaptcha_response = $_POST["g-recaptcha-response"];
  $chave_secreta = "meta sua chave secreta aqui";
  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chave_secreta&response=$g_recaptcha_response");
  $google = json_decode($resposta);

  if($google->success){

    $codigo_html = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n";

    $mensagem_final = "<ul>
      <li>Nome: $nome</li>
      <li>Telefone: $telefone</li>
      <li>E-mail do cliente: $email</li>
      <li>Assunto: $assunto</li>
      <li>Mensagem: $mensagem</li>
    </ul>";

    mail($email_dono_site, $assunto, $mensagem_final, $codigo_html);
    if(isset($_POST["copia"])){mail($email, $assunto, $mensagem_final, $codigo_html);}


    header("Location: contactos.php");

  }

  
  
}

require("componentes/header.php");
require("views/contactos_view.php");
require("componentes/footer.php");

?>