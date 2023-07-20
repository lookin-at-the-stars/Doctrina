<?php
session_start();
$turma_id = $_SESSION['turma'];
$aluno_id = $_SESSION['id'];
$conn = new mysqli("localhost", "root", "", "Doctrina");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Consulta SQL para contar a presença na turma
$sql = "SELECT COUNT(*) FROM Presenca
        WHERE Presenca.turma_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $turma_id);
$stmt->execute();
$stmt->bind_result($presenca_turma);
$stmt->fetch();
$stmt->close();

// Consulta SQL para contar a presença do aluno
$sql = "SELECT COUNT(*) FROM Presenca
        WHERE Presenca.aluno_id = ? AND Presenca.presente = 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $aluno_id);
$stmt->execute();
$stmt->bind_result($presenca_aluno);
$stmt->fetch();
$stmt->close();

// Consulta SQL para contar o número de alunos na turma
$sql = "SELECT COUNT(*) FROM Aluno
        WHERE Aluno.turma_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $turma_id);
$stmt->execute();
$stmt->bind_result($numeroalunos);
$stmt->fetch();
$stmt->close();

// Cálculo da presença absoluta
$presenca_turma = $presenca_turma / $numeroalunos;
$presenca_abslt = number_format(($presenca_aluno / $presenca_turma) * 100, 1);

// Fechamento da conexão
$conn->close();

// Criação do array de dados
$dados = array(
    'p.aluno' => $presenca_aluno,
    'p.turma' => $presenca_turma,
    'p.absoluta' => $presenca_abslt
);

// Definição do cabeçalho e retorno do JSON
header('Content-Type: application/json');
echo json_encode($dados);
?>