<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            background-color: #2b002b;
            color: white;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            background-color: #d9d9d9;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: black;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo svg {
            width: 30px;
            height: 30px;
            fill: red;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 20px;
        }

        nav a {
            color: black;
            text-decoration: none;
        }

        main {
            display: flex;
            padding: 20px;
            gap: 20px;
            flex: 1;
        }

        .container {
            background-color: #3e003e;
            padding: 20px;
            border-radius: 8px;
        }

        .organization-container {
            flex: 2;
            display: flex;
            flex-direction: column;
        }

        .tasks-container, .tasks-container2 {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .task {
            background-color: green;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            color: black;
        }

        .task.completed {
            background-color: #212529;
        }

        .task-icon {
            margin-right: 5px;
        }

        .task-text {
            flex-grow: 1;
        }

        .task-checkbox {
            display: none;
        }

        .notes-container {
            height: 100px;
            background-color: #495057;
            padding: 10px;
            border-radius: 4px;
            resize: vertical;
        }

        .sidebar-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .schedule-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .schedule-item, .schedule-item2 {
            background-color: #3e003e;
            padding: 10px;
            border-radius: 4px;
            color: lightblue;
        }

        .schedule-item-title {
            font-weight: bold;
        }

        .progress-container {
            background-color: #3e003e;
            padding: 20px;
            border-radius: 8px;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background-color: #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .progress-bar-filled {
            height: 100%;
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <span>Olá, "Usuário"</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">LOGIN</a></li>
                <li><a href="#">SOBRE</a></li>
                <li><a href="#">CONTATO</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="organization-container container">
            <h2>Organização</h2>
            <div class="tasks-container">
                <div class="task">
                    <span class="task-text">Todos</span>
                </div>
                <div class="task">
                    <span class="task-text">Rotina</span>
                </div>
                <div class="task">
                    <span class="task-text">Novos</span>
                </div>
            </div>
            <div class="tasks-container2">
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task1">
                    <label for="task1" class="task-icon"></label>
                    <span class="task-text">Ler</span>
                </div>
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task2">
                    <label for="task2" class="task-icon"></label>
                    <span class="task-text">Aspirar quarto</span>
                </div>
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task3">
                    <label for="task3" class="task-icon"></label>
                    <span class="task-text">Trabalho CN</span>
                </div>
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task4">
                    <label for="task4" class="task-icon"></label>
                    <span class="task-text">Tomar remédio</span>
                </div>
            </div>
            <div class="tasks-container2">
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task5">
                    <label for="task5" class="task-icon"></label>
                    <span class="task-text">Exercícios</span>
                </div>
                <div class="task">
                    <input type="checkbox" class="task-checkbox" id="task6">
                    <label for="task6" class="task-icon"></label>
                    <span class="task-text">Questões concurso</span>
                </div>
            </div>
            <div class="notes-container">
                
            </div>
        </div>

        <div class="sidebar-container">
            <div class="container schedule-container">
                <h2>Agenda</h2>
                <div class="schedule-item">
                    <h3 class="schedule-item-title">Hoje:</h3>
                    <span>Dentista - 16:00</span><br>
                    <span>Reunião - 18:00</span>
                </div>
                <div class="schedule-item2">
                    <h3 class="schedule-item-title">Próximos dias:</h3>
                    <span>Alistamento 16/05 - 13:00</span><br>
                    <span>Entrega trabalho 20/06 - 18:00</span>
                </div>
            </div>
            <div class="container progress-container">
                <h2>Seu progresso</h2>
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
</body>
</html>
