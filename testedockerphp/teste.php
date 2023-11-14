<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "";

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
// Resto do seu código aqui
