<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organizacao_tarefas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Função para buscar todas as tarefas no banco de dados
function buscarTarefas() {
    global $conn; // Tornar $conn global dentro da função

    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $sql = "SELECT title, description, due_date, typeOfData FROM tasks";
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

// Função para buscar todos os eventos no banco de dados
function buscarEvento() {
    global $conn; // Tornar $conn global dentro da função

    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $sql = "SELECT title, date_day, date_hour FROM Events_T";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    $eventos = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $eventos[] = $row;
        }
    }

    return $eventos;
}
function buscarNotas() {
    global $conn; // Tornar $conn global dentro da função

    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $sql = "SELECT title, note, creation_date FROM note";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    $notas = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $notas[] = $row;
        }
    }

    return $notas;
}

// Verifica se o formulário de adicionar tarefa foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_tarefa"])) {
    // Verifica se todos os campos estão preenchidos
    if (!empty($_POST["titulo"]) && !empty($_POST["descricao"]) && !empty($_POST["data_vencimento"])) {
        // Obtém os dados do formulário
        $titulo = $conn->real_escape_string($_POST["titulo"]);
        $descricao = $conn->real_escape_string($_POST["descricao"]);
        $data_vencimento = $conn->real_escape_string($_POST["data_vencimento"]);
        $tipoDado = $conn->real_escape_string($_POST["tipo_dado"]);

        // Verifica se a tarefa já existe no banco de dados
        $sql_check = "SELECT * FROM tasks WHERE title='$titulo'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows == 0) {
            // Adiciona a tarefa no banco de dados
            $sql_insert = "INSERT INTO tasks (title, description, due_date, typeOfData) VALUES ('$titulo', '$descricao', '$data_vencimento', ' $tipoDado')";
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Erro ao adicionar tarefa: " . $conn->error;
            }
        } else {
            
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário de adicionar tarefa.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_evento"])) {
    if (!empty($_POST["novoEvento"]) && !empty($_POST["diaEvento"]) && !empty($_POST["horaEvento"])) {
        $titulo = $conn->real_escape_string($_POST["novoEvento"]);
        $data = $conn->real_escape_string($_POST["diaEvento"]);
        $hora = $conn->real_escape_string($_POST["horaEvento"]);


        $sql = "INSERT INTO Events_T (title, date_day, date_hour) VALUES ('$titulo', '$data', '$hora')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo evento adicionado com sucesso!";
        } 
    } else {
        echo "Por favor, preencha todos os campos do formulário de adicionar evento.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_nota"])) {
    if (!empty($_POST["conteudoNota"])) {
        $contNota = $conn->real_escape_string($_POST["conteudoNota"]);


        $sql = "INSERT INTO notes (note) VALUES ('$contNota')";

        if ($conn->query($sql) === TRUE) {
            echo "Nova nota adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar a nota: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário de adicionar nota.";
    }
}
?>
