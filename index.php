<?php
    include('protect.php');
?>
<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Inicial</title>
        <link rel="stylesheet" href="estilos/style.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <h1>Bem vindo a página inicial <?php echo $_SESSION['username']; ?></h1>
            </div>
            <nav>
                <ul>
                <li ><a style="color:darkgrey;" href="index.php">HOME</a></li>
                    <li><a href="logout.php">SAIR</a></li>
                    <li><a href="Sobre.php">SOBRE</a></li>
                    <li><a href="#">CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="popup-background" id="popup-background">
                <div class="popup-main">
                    <span id="popup-close">x</span>
                    <h1>Adicionar Tarefa:</h1>
                    <form method="post" id="popup_inputs">
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="titulo" required>
                        <label for="descricao">Descrição:</label>
                        <input type="text" id="descricao" name="descricao">
                        <label for="tipo_dado">Tipo de tarefa:</label>
                        <select name="tipo_dado" id="tipo_dado">
                            <option value="new">Novos</option>
                            <option value="routine">Rotina</option>
                        </select>
                        <input type="submit" name="adicionar_tarefa" value="Adicionar">
                    </form>
                </div>
            </div>
            <div class="popup-background" id="agenda-popup-background">
                <div class="popup-main">
                    <span id="agenda-popup-close">x</span>
                    <h1> Adicionar Evento na Agenda: </h1>
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
            <h3>TAREFAS:</h3>
            <div class="tasks-container">
                <form method="GET" action="">
                    <button type="submit" name="filter" value="all">Todos</button>
                    <button type="submit" name="filter" value=" new">Novos</button>
                    <button type="submit" name="filter" value=" routine">Rotina</button>
                </form>
            </div>
            <div class="tasks-container2">
                <button id="add-task-button">Adicionar Tarefa</button>
            </div>
            <ul id='lista_tarefas'>
            <?php
                include 'functions.php';

                // Definir o filtro
                $filtro = isset($_GET['filter']) ? $_GET['filter'] : 'all';
                // Buscar tarefas com base no filtro
                $tarefas = buscarTarefas($filtro);

                // Filtrar tarefas de acordo com o filtro selecionado
                foreach ($tarefas as $tarefa) {
                    if ($filtro === 'all' || $tarefa['typeOfData'] === $filtro) {
                        echo "<li class='li-task-block'>
                                <div class='task_block'>
                                    <strong>{$tarefa['title']}</strong> <br> {$tarefa['description']} <br>
                                    <form method='post' action=''>
                                        <input type='hidden' name='titulo' value='{$tarefa['title']}'>
                                        <button type='submit' name='deletar_tarefa'>Delete</button>";
                        
                        // Verifica se a tarefa está completa ou incompleta
                        if ($tarefa['is_completed'] == 0) {
                            echo "<button type='submit' name='tarefa_completa'>Completa</button>";
                        } else {
                            echo "<button type='submit' name='tarefa_incompleta'>Incompleta</button>";
                        }
                        
                        echo "</form>
                                </div>
                            </li>";
                    }
                }
                ?>

            </ul>
            <h4>Tarefas completas: 
                <?php tarefasFeitas(); ?> 
            </h4>
            <hr id='linha'>
            <h3>Humor: </h3>
            <h4>Como você está?</h4>
            <div class="opcoes-humor">
                <div><button class="btn-humor humor-otimo"><img src="./estilos/img/smiley.png" alt=""></button><p>Ótimo</p></div>
                <div><button class="btn-humor humor-bem"><img src="./estilos/img/happiness.png" alt=""></button><p>Bem</p></div>
                <div><button class="btn-humor humor-meio-meio"><img src="./estilos/img/neutral-face.png" alt=""></button><p>+ -</p></div>
                <div><button class="btn-humor humor-mal"><img src="./estilos/img/sad-face.png" alt=""></button><p>Mal</p></div>
                <div><button class="btn-humor humor-horrivel"></button><p>Horrível</p></div>
            </div>
            </div>
            <div class="sidebar-container">
                <div class="container schedule-container">
                    <h2>AGENDA</h2>
                    <h3>Eventos: </h3>
                    <button id="add-event-button">Adicionar Evento</button>
                    <ul>
                    <?php
                    $eventos = buscarEvento();
                    foreach($eventos as $evento){
                        echo "<li class='event_block'>{$evento['title']} - {$evento['date_day']} - {$evento['date_hour']}
                        <form method='post' action=''>
                            <input type='hidden' name='novoEvento' value='{$evento['title']}'>
                            <button type='submit' name='deletar_evento'>Delete</button>
                        </form>
                        </li> ";
                    }
                    ?>
                </ul>
                </div>
                <div class='container'>
                <h3>Calendário: </h3>
                <h4 id="data"></h4>
                <div id="calendar"></div> <!-- Os eventos devem ser marcados no calendário -->
                </div>
            </div>
        </main>
        <script src="script.js"></script>
    </body>
    </html>
