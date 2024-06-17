-- Criação do Banco de Dados
CREATE DATABASE IF NOT EXISTS organizacao_tarefas;

-- Selecionando o Banco de Dados
USE organizacao_tarefas;

-- Criação da Tabela de Tarefas
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    due_date DATE,
    is_completed BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    note VARCHAR(400),
    creation_date DATE
);
CREATE TABLE IF NOT EXISTS Events_T (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    date_day DATE,
    date_hour TIME
);