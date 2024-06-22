<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organizacao_tarefas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

function buscarTarefas($filtro) {
    global $conn;

    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $sql = "SELECT title, description, due_date, typeOfData FROM tasks";
    if ($filtro == 'new') {
        $sql .= " WHERE typeOfData = 'new'";
    } elseif ($filtro == 'routine') {
        $sql .= " WHERE typeOfData = 'routine'";
    }

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

function buscarEvento() {
    global $conn;

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
    global $conn;

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
?>
