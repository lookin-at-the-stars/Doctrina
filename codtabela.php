<?php
include "logincode_aluno.php";
// Verifica se o aluno está autenticado
session_start();
if (!isset($_SESSION['aluno_id'])) {
  // Redireciona para a página de login caso não esteja autenticado
  header("Location: login.php");
  exit();
}

// Busca as notas do aluno para cada disciplina
$aluno_id = $_SESSION['aluno_id'];
$sql = "SELECT Disciplina.nome AS disciplina, Nota.nota
        FROM Nota
        JOIN Disciplina ON Nota.disciplina_id = Disciplina.id
        WHERE Nota.aluno_id = $aluno_id";
$result = $conn->query($sql);

// Cria um array para armazenar as notas do aluno para cada disciplina
$notas_por_disciplina = array();
while ($row = $result->fetch_assoc()) {
  $disciplina = $row['disciplina'];
  $nota = $row['nota'];
  $notas_por_disciplina[$disciplina] = $nota;
}

// Cria a tabela de notas do aluno
echo "<table>";
echo "<tr><th>Disciplina</th><th>Nota</th></tr>";
$sql = "SELECT nome FROM Disciplina";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $disciplina = $row['nome'];
  $nota = isset($notas_por_disciplina[$disciplina]) ? $notas_por_disciplina[$disciplina] : "-";
  echo "<tr><td>".$disciplina."</td><td>".$nota."</td></tr>";
}
echo "</table>";

?>
