<?php

function getCentroDeFerias(){
  $resultado = selectSQLUnico("SELECT * FROM centro_de_ferias");
  return $resultado;
}

?>