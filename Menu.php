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
                <li ><a style="color:darkgrey;" href="Menu.php">HOME</a></li>
                    <li><a href="index.php">LOGIN</a></li>
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
                    <form method="post" id="popup_inputs">
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="titulo" required>
                        <label for="descricao">Descrição:</label>
                        <input type="text" id="descricao" name="descricao">
                        <label for="data_vencimento">Data de Vencimento:</label>
                        <input type="date" id="data_vencimento" name="data_vencimento">
                        <label for="tipo_dado">Tipo de tarefa:</label>
                        <select name="tipo_dado" id="tipo_dado">
                            <option value="routine">Rotina</option>
                            <option value="new">Novos</option>
                        </select>
                        <input type="submit" name="adicionar_tarefa" value="Adicionar">
                    </form>
                </div>
            </div>
            <div class="popup-background" id="agenda-popup-background">
                <div class="popup-main">
                    <span id="agenda-popup-close">x</span>
                    <h1 style="color: black;"> Adicionar Evento na Agenda: </h1>
                    <form method="post" action="" id="AgendaInputs">
                        <label for="evento">Novo Evento:</label>
                        <input type="text" id="evento" name="novoEvento" >
                        <label for="dia">Dia:</label>
                        <input type="date" id="dia" name="diaEvento" >
                        <label for="hora">Hora:</label>
                        <input type="time" id="hora" name="horaEvento" >
                        <input type="submit" value="Adicionar" name="adicionar_evento">
                    </form>
                </div>
            </div>
            <div class="organization-container container">
            <h2>ORGANIZAÇÃO</h2>
            <div class="tasks-container">
                <h3>TAREFAS:</h3>
                <form method="GET" action="">
                    <button type="submit" name="filter" value="all">Todos</button>
                    <button type="submit" name="filter" value="new">Novos</button>
                    <button type="submit" name="filter" value="routine">Rotina</button>
                </form>
            </div>
            <div class="tasks-container2">
                <button id="add-task-button">Adicionar Tarefa</button>
            </div>
            <ul id='lista_tarefas'>
                <?php
                include 'functions.php';

                $filtro = isset($_GET['filter']) ? $_GET['filter'] : 'all';
                $tarefas = buscarTarefas($filtro);

                foreach ($tarefas as $tarefa) {
                    echo "<li>
                        <div class='task_block'>
                            {$tarefa['title']} <br> {$tarefa['description']} <br> Data de Vencimento: {$tarefa['due_date']}
                            <form method='post' action=''>
                                <input type='hidden' name='titulo' value='{$tarefa['title']}'>
                                <button type='submit' name='deletar_tarefa'>Delete</button>
                            </form>
                        </div>
                    </li>";
                }
                ?>
            </ul>

                <div class='notes inputs'>
                <form method="post" class="notes-container" class= "Bunton">
                    <input type="text" name="tituloNota" placeholder="Título">
                    <input type="text" id="main_notes" cols='2  ' name="conteudoNota" placeholder="Conteúdo">
                    <button id="note_button" name="adicionar_nota"><p>Enviar</p></button>
                </form>
                <ul>
                <?php
                    $notas = buscarNotas();
                    foreach($notas as $nota){
                        echo "<li>{$nota['title']} - {$nota['note']}
                        <form method='post' action=''>
                            <input type='hidden' name='tituloNota' value='{$nota['title']}'>
                            <button type='submit' name='deletar_nota'>Delete</button>
                        </form>
                        </li>";
                    }
                    ?>
                </ul>
                </div>
            </div>
            <div class="sidebar-container">
                <div class="container schedule-container">
                    <h2>AGENDA</h2>
                    <button id="add-event-button">Adicionar Evento</button>
                    <ul>
                    <?php
                    $eventos = buscarEvento();
                    foreach($eventos as $evento){
                        echo "<li>{$evento['title']} - {$evento['date_day']} - {$evento['date_hour']}
                        <form method='post' action=''>
                            <input type='hidden' name='novoEvento' value='{$evento['title']}'>
                            <button type='submit' name='deletar_evento'>Delete</button>
                        </form>
                        </li> ";
                    }
                    ?>
                </ul>
                </div>
                <div id="calendar"></div>
                <h3 id="data"></h3>
            </div>
        </main>
        <script src="script.js"></script>
    </body>
    </html>
