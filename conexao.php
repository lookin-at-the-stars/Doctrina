<?php
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "SistemaEscola");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
?>