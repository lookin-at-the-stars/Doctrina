<?php
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "Doctrina");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
?>