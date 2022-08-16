<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login';
    
   $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


if($conexao->error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->error);
}