<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21333456_kaiquecss"; // usuário do MySQL
$pass = "105117Kc+"; // senha do MySQL
$dbname = "id21333456_dbkaiquesitefatec"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
