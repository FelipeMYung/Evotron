<?php
// Configurações do banco de dados (substitua pelos seus dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organizacao_tarefas";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Função para buscar todas as tarefas no banco de dados
function buscarTarefas() {
    global $conn;
    $sql = "SELECT title, description, due_date FROM tasks";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    $tarefas = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tarefas[] = $row;
        }
    }

    return $tarefas;
}
?>
