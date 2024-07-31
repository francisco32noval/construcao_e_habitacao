<?php

function getDestaquesDaHome(){
  $resultado = selectSQL("SELECT * FROM destaques WHERE mostrar_na_home=1");
  return $resultado;
}

function getDestaquesPagina($pagina){
  $elementos_por_pagina = 6;
  $offset = ($pagina - 1) * $elementos_por_pagina;
  $resultado = selectSQL("SELECT * FROM destaques ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $offset");
  return $resultado;
}

function getTotalPaginas(){
  $elementos_por_pagina = 6;
  $resultado = selectSQLUnico("SELECT Count(*) FROM destaques");
  return ceil($resultado["Count(*)"] / $elementos_por_pagina);
}

function getDestaqueEspecifico($id){
  $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id=$id");
  return $resultado;
}

function getTodosDestaques(){
  $resultado = selectSQL("SELECT * FROM destaques");
  return $resultado;
}

?>