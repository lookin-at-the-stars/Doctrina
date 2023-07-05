<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    include "conexao.php";

    // Consulta de seleção de secretaria com base no email
    $sql = "SELECT id, nome, email, senha FROM Secretaria WHERE email = '$email';";
    $result = $conn->query($sql);

    if (!$result) {
        die("Erro na consulta: " . $conn->error);
    }
    if ($result->num_rows > 0) {
        // Verifica se a senha está correta
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {
            // Inicia a sessão e armazena os dados da secretaria
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];
            // Redireciona para a página de perfil
            header('Location: index.php');
            exit;
        } else {
            // Senha incorreta
            echo "Senha incorreta";
        }
    } else {
        // Secretaria não encontrada
        echo "Secretaria não encontrada";
    }
}

?>
