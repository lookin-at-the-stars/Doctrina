CREATE DATABASE Doctrina;
USE Doctrina;

-- Tabela "curso"
CREATE TABLE curso (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  duracao INT(11)
);
select * from curso;

-- Tabela "turma"
CREATE TABLE turma (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  curso_id INT(11),
  FOREIGN KEY (curso_id) REFERENCES curso(id)
);
select * from turma;

-- Tabela "professor"
CREATE TABLE professor (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  data_nascimento DATE,
  email VARCHAR(50),
  senha VARCHAR(20)
);
select * from professor;

-- Tabela "aluno"
CREATE TABLE aluno (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  data_nascimento DATE,
  matricula VARCHAR(255),
  email VARCHAR(100),
  senha VARCHAR(50),
  turma_id INT(11),
  FOREIGN KEY (turma_id) REFERENCES turma(id)
);
select * from aluno;

-- Tabela "secretaria"
CREATE TABLE secretaria (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  data_nascimento DATE,
  email VARCHAR(100),
  senha VARCHAR(50)
);
select * from secretaria;

-- Tabela "presenca"
CREATE TABLE presenca (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  aluno_id INT(11),
  disciplina_id INT(11),
  data DATE,
  presente TINYINT(1),
  turma_id INT(11),
  FOREIGN KEY (aluno_id) REFERENCES aluno(id),
  FOREIGN KEY (turma_id) REFERENCES turma(id)
);
select * from presenca;

-- Tabela "nota"
CREATE TABLE nota (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  aluno_id INT(11),
  disciplina_id INT(11),
  nota FLOAT,
  tipo_id INT(11),
  bim INT(11),
  FOREIGN KEY (aluno_id) REFERENCES aluno(id),
  FOREIGN KEY (disciplina_id) REFERENCES disciplina(id)
);
select * from nota;

-- Inserção na tabela "curso"
INSERT INTO curso (nome, duracao) VALUES
('Curso de Programação', 6),
('Fundamental', 9),
('Médio', 3);

-- Inserção na tabela "turma"
INSERT INTO turma (nome, curso_id) VALUES
('Turma A', 1),
('1 Ano Fundamental', 2),
('Turma B', 1);

-- Inserção na tabela "professor"
INSERT INTO professor (nome, data_nascimento, email, senha) VALUES
('Ivanelson', '2000-01-01', 'aio@gmail.com', '321'),
('Ivaildo', '1576-05-13', 'givanildo@gmailcom', '321');

-- Inserção na tabela "aluno"
INSERT INTO aluno (nome, data_nascimento, matricula, email, senha, turma_id) VALUES
('Gato de Headset', '2023-08-04', '1', 'testes@gmail.com', '123', 1),
('Cachorro de Headset', '2000-01-01', '2', 'teste@gmail.com', '123', 1),
('Johnatan', '2023-07-20', '6', 'johnatan@gmail.com', '123', 2),
('Ivanildo', '2023-07-18', '9', 'ivanildo@yahoo.com', '321', 2),
('Daff', '2005-10-28', '31', 'daff@gmail.com', '96', 2),
('Ana', '2023-07-06', '26', 'ana@gmail.com', '321', 1);

-- Inserção na tabela "secretaria"
INSERT INTO secretaria (nome, data_nascimento, email, senha) VALUES
('Viviane', NULL, 'secretaria@gmail.com', '1992');

-- Inserção na tabela "presenca"
INSERT INTO presenca (aluno_id, disciplina_id, data, presente, turma_id) VALUES
(2, 1, '2023-07-07', 0, 1),
(4, 1, '2023-07-07', 1, 1),
(14, 1, '2023-07-07', 1, 1),
(2, 1, '2023-07-05', 0, 1),
(4, 1, '2023-07-05', 0, 1),
(14, 1, '2023-07-05', 0, 1),
(2, 1, '2023-07-05', 1, 1),
(4, 1, '2023-07-05', 1, 1),
(14, 1, '2023-07-05', 1, 1),
(2, 1, '2023-07-05', 1, 1),
(4, 1, '2023-07-05', 1, 1),
(14, 1, '2023-07-05', 1, 1);

