<?php
include('conexao.php');
// Função para buscar todas as tarefas no banco de dados
function buscarTarefas() {
    global $conn; // Tornar $conn global dentro da função
 
    // Verifica se a conexão com o banco de dados foi estabelecida corretamente
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
 
    $sql = "SELECT title, description, due_date, typeOfData, is_completed FROM tasks";
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
function tarefasFeitas(){
    global $conn;   

    $sql = "SELECT COUNT(*) as total_completas FROM tasks WHERE is_completed = 1";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contador_completas = $row['total_completas'];
        echo "Total de tarefas completas: " . $contador_completas;
    } else {
        echo "Nenhuma tarefa completa encontrada.";
    }
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
 
    $sql = "SELECT title, note, creation_date FROM notes";
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
    if (!empty($_POST["titulo"]) ) {
        // Obtém os dados do formulário
        $titulo = $conn->real_escape_string($_POST["titulo"]);
        $descricao = $conn->real_escape_string($_POST["descricao"]);
        //$data_vencimento = $conn->real_escape_string($_POST["data_vencimento"]);
        $tipoDado = $conn->real_escape_string($_POST["tipo_dado"]);
 
        // Verifica se a tarefa já existe no banco de dados
        $sql_check = "SELECT * FROM tasks WHERE title='$titulo'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows == 0) {
            // Adiciona a tarefa no banco de dados
            $sql_insert = "INSERT INTO tasks (title, description, typeOfData) VALUES ('$titulo', '$descricao', ' $tipoDado')";
            if ($conn->query($sql_insert) === TRUE) {
            } else {
               // echo "Erro ao adicionar tarefa: " . $conn->error;
            }
        } else {
           
        }
    } else {
       // echo "Por favor, preencha todos os campos do formulário de adicionar tarefa.";
    }
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_evento"])) {
    if (!empty($_POST["novoEvento"]) && !empty($_POST["diaEvento"]) && !empty($_POST["horaEvento"])) {
        $titulo = $conn->real_escape_string($_POST["novoEvento"]);
        $data = $conn->real_escape_string($_POST["diaEvento"]);
        $hora = $conn->real_escape_string($_POST["horaEvento"]);
 
 
        $sql = "INSERT INTO Events_T (title, date_day, date_hour) VALUES ('$titulo', '$data', '$hora')";
 
        if ($conn->query($sql) === TRUE) {
           // echo "Novo evento adicionado com sucesso!";
        }
    } else {
       // echo "Por favor, preencha todos os campos do formulário de adicionar evento.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_nota"])) {
    if (!empty($_POST["conteudoNota"]) && !empty($_POST['tituloNota'])) {
        $tituloNota = $conn->real_escape_string($_POST["tituloNota"]);
        $contNota = $conn->real_escape_string($_POST["conteudoNota"]);
        
        // Verifica se a nota já existe no banco de dados
        $sql_check = "SELECT * FROM notes WHERE title='$tituloNota' AND note='$contNota'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows == 0) {
            // Adiciona a nota no banco de dados
            $sql_insert = "INSERT INTO notes (title, note) VALUES ('$tituloNota', '$contNota')";
            if ($conn->query($sql_insert) === TRUE) {
                // Nota adicionada com sucesso
            } else {
                // echo "Erro ao adicionar a nota: " . $conn->error;
            }
        } else {
            // echo "Nota já existe!";
        }
    } else {
        // echo "Por favor, preencha todos os campos do formulário de adicionar nota.";
    }
}

//deletar atividades: 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deletar_tarefa"])) {
    if (!empty($_POST["titulo"])) {
        $titulo = $conn->real_escape_string($_POST["titulo"]);
 
        $sql = "DELETE FROM tasks WHERE title='$titulo'";
 
        if ($conn->query($sql) === TRUE) {
          //  echo "Tarefa deletada com sucesso!";
        } else {
          // echo "Erro ao deletar tarefa: " . $conn->error;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deletar_nota"])) {
    if (!empty($_POST["tituloNota"])) {
        $tituloNota = $conn->real_escape_string($_POST["tituloNota"]);
        $sql = "DELETE FROM notes WHERE title='$tituloNota'";

        if ($conn->query($sql) === TRUE) {
            // echo "Nota deletada com sucesso!";
        } else {
            // echo "Erro ao deletar nota: " . $conn->error;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deletar_evento"])) {
    if (!empty($_POST["novoEvento"])) {
        $titulo = $conn->real_escape_string($_POST["novoEvento"]);
        $sql = "DELETE FROM events_t WHERE title='$titulo'";

        if ($conn->query($sql) === TRUE) {
            // echo "Nota deletada com sucesso!";
        } else {
            // echo "Erro ao deletar nota: " . $conn->error;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o botão "Completa" foi clicado
    if (isset($_POST["tarefa_completa"])) {
        if (!empty($_POST["titulo"])) {
            $titulo = $conn->real_escape_string($_POST["titulo"]);
            $sql = "UPDATE tasks SET is_completed = 1 WHERE title = '$titulo'";

            if ($conn->query($sql) === TRUE) {
                //echo "Tarefa marcada como completa!";
            } else {
                //echo "Erro ao marcar tarefa como completa: " . $conn->error;
            }
        }
    }
    
    // Verifica se o botão "Descompleta" foi clicado
    if (isset($_POST["tarefa_incompleta"])) {
        if (!empty($_POST["titulo"])) {
            $titulo = $conn->real_escape_string($_POST["titulo"]);
            $sql = "UPDATE tasks SET is_completed = 0 WHERE title = '$titulo'";

            if ($conn->query($sql) === TRUE) {
               // echo "Tarefa marcada como incompleta!";
            } else {
                //echo "Erro ao marcar tarefa como incompleta: " . $conn->error;
            }
        }
    }
}
// função para calcular o prazo
// SE(prazo<24:00 restantes){colocar na fileira de HOJE}SENAO{colocar na fileira PRÓXIMOS}
?>