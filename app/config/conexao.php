<?php

$_SERVER = "localhost";
$bd = "tdahtegia";
$user = "root";
$password = "";

$mysqli;

function abrirConexao(){
    global $mysqli, $server , $user, $password, $bd;
    $mysqli = new mysqli($server,$user,$password,$bd);

    if($mysqli->connect_errno){
        die("Não foi possivel conectar".$mysqli->connect_error);

    }
}

function fecharConexao(){
    global $mysqli;
    $mysqli->close();
}
?>