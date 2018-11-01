<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "root";
$nomeBD= "test";

//criando conexao
$mysqli = new mysqli($servidor, $usuario,$senha,$nomeBD);

//testando conexao com o banco de dados
if ($mysqli->connect_errno){
    echo "Falha ao conectar: {". $mysqli->connect_errno . "} " . $mysqli->connect_error;

}




?>








