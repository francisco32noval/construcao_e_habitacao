<?php

function fazerLogin($login, $senha){
  $usuario_encontrado = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha'");
  if(!empty($usuario_encontrado)){
    session_start();
    $_SESSION["usuario"] = $usuario_encontrado;
    return true;
  }
  else{return false;}
}

function verificarLogado(){
  session_start();
  return !empty($_SESSION["usuario"]);
}

?>