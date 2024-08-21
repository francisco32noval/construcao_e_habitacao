<?php

function getBanners(){
  $resultado = selectSQLUnico("SELECT * FROM banners");
  return $resultado;
}

?>