<?php

$usuario = 'id19951802_faculdade';
$senha = 'Facul@123@facul';
$database = 'id19951802_login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}