<?php


$host = "localhost";
$dbname = "codemaster_9_construcao";
$user = "root";
$pass = "";
$conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4;", $user, $pass);

// $host = "localhost";
// $dbname = "ibmproh_codemaster_9_bd";
// $user = "ibmproh_codemaster_9_user";
// $pass = "fR#QO19AyQ)^";
// $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4;", $user, $pass);

function selectSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
}


?>