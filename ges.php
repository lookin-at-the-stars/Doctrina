<?php
include "connection.php";

class Aluno {
    private $id;
    private $nome;
    private $dataNascimento;
    private $matricula;
    private $senha;
  
    public function __construct($id, $nome, $dataNascimento, $matricula, $senha) 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->matricula = $matricula;
        $this->senha = $senha;
      }
  
    public function getId() {
      return $this->id;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function getNome() {
      return $this->nome;
    }
  
    public function setNome($nome) {
      $this->nome = $nome;
    }
  
    public function getDataNascimento() {
      return $this->dataNascimento;
    }
  
    public function setDataNascimento($dataNascimento) {
      $this->dataNascimento = $dataNascimento;
    }
  
    public function getMatricula() {
      return $this->matricula;
    }
  
    public function setMatricula($matricula) {
      $this->matricula = $matricula;
    }

    public function getSenha() {
        return $this->senha;
      }
    
      public function setSenha($senha) {
        $this->senha = $senha;
      }
  }



class Professor {
    private $id;
    private $nome;
    private $dataNascimento;
    private $cpf;
    private $senha;
    
    public function __construct($id, $nome, $dataNascimento, $cpf, $senha) {
    $this->id = $id;
    $this->nome = $nome;
    $this->dataNascimento = $dataNascimento;
    $this->cpf = $cpf;
    $this->senha = $senha;
    }
    
    public function getId() {
    return $this->id;
    }
    
    public function setId($id) {
    $this->id = $id;
    }
    
    public function getNome() {
    return $this->nome;
    }
    
    public function setNome($nome) {
    $this->nome = $nome;
    }
    
    public function getDataNascimento() {
    return $this->dataNascimento;
    }
    
    public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
    }
    
    public function getCpf() {
    return $this->cpf;
    }
    
    public function setCpf($cpf) {
    $this->cpf = $cpf;
    } 

    public function getSenha() {
        return $this->senha;
      }
    
      public function setSenha($senha) {
        $this->senha = $senha;
      }
}
class Curso {
    private $id;
    private $nome;
    private $duracao;
    
    public function __construct($id, $nome, $duracao) {
    $this->id = $id;
    $this->nome = $nome;
    $this->duracao = $duracao;
    }
    
    public function getId() {
    return $this->id;
    }
    
    public function setId($id) {
    $this->id = $id;
    }
    
    public function getNome() {
    return $this->nome;
    }
    
    public function setNome($nome) {
    $this->nome = $nome;
    }
    
    public function getDuracao() {
    return $this->duracao;
    }
    
    public function setDuracao($duracao) {
    $this->duracao = $duracao;
    }
}
class Turma {
    private $id;
    private $nome;
    private $cursoId;
    private $professorId;
    
    public function __construct($id, $nome, $cursoId, $professorId) {
    $this->id = $id;
    $this->nome = $nome;
    $this->cursoId = $cursoId;
    $this->professorId = $professorId;
    }
    
    public function getId() {
    return $this->id;
    }
    
    public function setId($id) {
    $this->id = $id;
    }
    
    public function getNome() {
    return $this->nome;
    }
    
    public function setNome($nome) {
    $this->nome = $nome;
    }
    
    public function getCursoId() {
    return $this->cursoId;
    }
    
    public function setCursoId($cursoId) {
    $this->cursoId = $cursoId;
    }
    
    public function getProfessorId() {
    return $this->professorId;
    }
    
    public function setProfessorId($professorId) {
    $this->professorId = $professorId;
    }
}

class Matricula {
    private $id;
    private $alunoId;
    private $turmaId;
    
    public function __construct($id, $alunoId, $turmaId) {
    $this->id = $id;
    $this->alunoId = $alunoId;
    $this->turmaId = $turmaId;
    }
    
    public function getId() {
    return $this->id;
    }
    
    public function setId($id) {
    $this->id = $id;
    }
    
    public function getAlunoId() {
    return $this->alunoId;
    }
    
    public function setAlunoId($alunoId) {
    $this->alunoId = $alunoId;
    }
    
    public function getTurmaId() {
    return $this->turmaId;
    }
    
    public function setTurmaId($turmaId) {
    $this->turmaId = $turmaId;
    }
}
class Disciplina {
    private $id;
    private $nome;
    private $professorId;
  
    public function __construct($id, $nome, $professorId) {
      $this->id = $id;
      $this->nome = $nome;
      $this->professorId = $professorId;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function getNome() {
      return $this->nome;
    }
  
    public function setNome($nome) {
      $this->nome = $nome;
    }
  
    public function getProfessorId() {
      return $this->professorId;
    }
  
    public function setProfessorId($professorId) {
      $this->professorId = $professorId;
    }
}

class Presenca {
    private $id;
    private $aluno_id;
    private $disciplina_id;
    private $data;
    private $presente;
  
    public function __construct($id, $aluno_id, $disciplina_id, $data, $presente) {
      $this->id = $id;
      $this->aluno_id = $aluno_id;
      $this->disciplina_id = $disciplina_id;
      $this->data = $data;
      $this->presente = $presente;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function getAlunoId() {
      return $this->aluno_id;
    }
  
    public function setAlunoId($aluno_id) {
      $this->aluno_id = $aluno_id;
    }
  
    public function getDisciplinaId() {
      return $this->disciplina_id;
    }
  
    public function setDisciplinaId($disciplina_id) {
      $this->disciplina_id = $disciplina_id;
    }
  
    public function getData() {
      return $this->data;
    }
  
    public function setData($data) {
      $this->data = $data;
    }
  
    public function isPresente() {
      return $this->presente;
    }
  
    public function setPresente($presente) {
      $this->presente = $presente;
    }
} 


?>