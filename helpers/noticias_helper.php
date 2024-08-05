<?php

function getNoticias(){
  $resultado = selectSQL("SELECT * FROM noticias");
  return $resultado;
}

// function getDestaquesPagina($pagina){
//   $elementos_por_pagina = 6;
//   $offset = ($pagina - 1) * $elementos_por_pagina;
//   $resultado = selectSQL("SELECT * FROM destaques ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $offset");
//   return $resultado;
// }

// function getTotalPaginas(){
//   $elementos_por_pagina = 6;
//   $resultado = selectSQLUnico("SELECT Count(*) FROM destaques");
//   return ceil($resultado["Count(*)"] / $elementos_por_pagina);
// }




?>