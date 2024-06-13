<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <span>Olá, Usuário</span> <!-- A mensagem "Olá, Usuário" deve ser dinâmica -->
        </div>
        <nav>
            <ul>
                <li><a href="#">LOGIN</a></li>
                <li><a href="Sobre.php">SOBRE</a></li>
                <li><a href="#">CONTATO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="popup-background" id="popup-background">
            <div class="popup-main">
                <span id="popup-close">x</span>
                <h1 style="color: black;">Adicionar Tarefa:</h1>
                <form method="post">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required>
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao">
                    <label for="data_vencimento">Data de Vencimento:</label>
                    <input type="date" id="data_vencimento" name="data_vencimento">
                    <input type="submit" name="adicionar_tarefa" value="Adicionar">
                </form>
            </div>
        </div>
        <div class="organization-container container">
            <h2>ORGANIZAÇÃO</h2>
            <div class="tasks-container">
                <h3>TAREFAS:</h3>
                <button class="filter">
                    <span class="task-text">Todos</span>
                </button>
                <button class="filter">
                    <span class="task-text">Rotina</span>
                </button>
                <button class="filter">
                    <span class="task-text">Novos</span>
                </button>
            </div>
            <div class="tasks-container2">
                <button id="add-task-button">Adicionar Tarefa</button>
            </div>
            <ul>
                <?php
                include 'functions.php';

                // Busca todas as tarefas do banco de dados
                $tarefas = buscarTarefas();

                // Exibe as tarefas
                foreach ($tarefas as $tarefa) {
                    echo "<li>{$tarefa['title']} - {$tarefa['description']} - Data de Vencimento: {$tarefa['due_date']}</li>";
                }
                ?>
            </ul>
            <div class="notes-container">
                <input type="text" id="main_notes">
                <button id="note_button"><p>Enviar</p></button>
            </div>
        </div>
        <div class="sidebar-container">
            <div class="container schedule-container">
                <h2>AGENDA</h2>
                <button id="add-event-button">Adicionar Evento</button>
            </div>
            <div class="container progress-container">
                <h2>PROGRESSO</h2>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-bar-filled" style="width: 75%"></div>
                    </div>
                    <span>Físico</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-bar-filled" style="width: 50%"></div>
                    </div>
                    <span>Mental</span>
                </div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-bar-filled" style="width: 90%"></div>
                    </div>
                    <span>Estudos</span>
                </div>
            </div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
