<?php
// Função para buscar todas as tarefas no banco de dados
function buscarTarefas() {
    global $conn; // Certifique-se de que $conn é uma conexão válida e global

    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

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


// Verifica se o formulário de adicionar tarefa foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_tarefa"])) {
    // Verifica se todos os campos estão preenchidos
    if (!empty($_POST["titulo"]) && !empty($_POST["descricao"]) && !empty($_POST["data_vencimento"])) {
        // Obtém os dados do formulário
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $data_vencimento = $_POST["data_vencimento"];

        // Verifica se a tarefa já existe no banco de dados
        $sql_check = "SELECT * FROM tasks WHERE title='$titulo'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows == 0) {
            // Adiciona a tarefa no banco de dados
            $sql_insert = "INSERT INTO tasks (title, description, due_date) VALUES ('$titulo', '$descricao', '$data_vencimento')";
            if ($conn->query($sql_insert) === TRUE) {
                echo "Nova tarefa adicionada com sucesso!";
            } else {
                echo "Erro ao adicionar tarefa: " . $conn->error;
            }
        } else {
            echo "A tarefa já existe.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário de adicionar tarefa.";
    }
}

// Verifica se o formulário de adicionar evento foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_evento"])) {
    // Verifica se todos os campos estão preenchidos
    if (!empty($_POST["novoEvento"]) && !empty($_POST["diaEvento"]) && !empty($_POST["horaEvento"])) {
        // Prepara os dados para inserção no banco de dados
        $titulo = $_POST["novoEvento"];
        $data = $_POST["diaEvento"];
        $hora = $_POST["horaEvento"];
        $creation_date = date("Y-m-d");

        // Query SQL para inserir o evento na tabela de notas
        $sql = "INSERT INTO notes (title, note, creation_date) VALUES ('$titulo', '$data $hora', '$creation_date')";

        // Executa a query
        if ($conn->query($sql) === TRUE) {
            echo "Novo evento adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar evento: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário de adicionar evento.";
    }
}
?>
