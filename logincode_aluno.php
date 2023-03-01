<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Conexão com o banco de dados
        include "conexao.php";

        // Consulta de seleção de usuário com base no email
        $sql = "SELECT id, nome, Email, senha FROM Aluno WHERE Email = '$email';";
        $result = $conn->query($sql);

        if (!$result) {
            die("Erro na consulta: " . $conn->error);
        }
        if ($result->num_rows > 0) 
        {
            // Verifica se a senha está correta
            $row = $result->fetch_assoc();
            if ($senha == $row['senha']) {
                // Inicia a sessão e armazena os dados do usuário
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['Email'];
                // Redireciona para a página de perfil
                header('Location: index.php');
                exit;
        } 
        else {
            // Senha incorreta
            echo "Senha incorreta";
            }
        }   
        else {
            // Usuário não encontrado
            echo "Usuário não encontrado";
            }
    
    }

?>