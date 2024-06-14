-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS organizacao_tarefas;

-- Selecionando o Banco de Dados
USE organizacao_tarefas;

-- Criação da Tabela de Tarefas

CREATE TABLE tasks (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  due_date DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
