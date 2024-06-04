<!DOCTYPE html>
<html>
<head>
  <title>Organização Pessoal</title>
  <style>
    body {
      background-color: #282c34;
      color: #fff;
      font-family: sans-serif;
    }
    .container {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }
    .section {
      background-color: #333;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .header {
      display: flex;
      align-items: center;
    }
    .user {
      margin-left: 20px;
    }
    .title {
      font-size: 24px;
      font-weight: bold;
    }
    .button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .task-list {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    .task {
      background-color: #444;
      padding: 10px;
      border-radius: 4px;
      display: flex;
      align-items: center;
    }
    .task-icon {
      margin-right: 10px;
    }
    .task-title {
      font-weight: bold;
    }
    .add-button {
      background-color: #28a745;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-align: center;
    }
    .notes {
      margin-top: 20px;
    }
    .notes-header {
      font-size: 18px;
      font-weight: bold;
    }
    .notes-content {
      background-color: #555;
      padding: 10px;
      border-radius: 4px;
      min-height: 100px;
      resize: vertical;
    }
    .calendar {
      margin-top: 20px;
    }
    .calendar-header {
      font-size: 18px;
      font-weight: bold;
    }
    .calendar-day {
      background-color: #444;
      padding: 10px;
      border-radius: 4px;
    }
    .calendar-title {
      font-weight: bold;
    }
    .progress {
      margin-top: 20px;
    }
    .progress-header {
      font-size: 18px;
      font-weight: bold;
    }
    .progress-chart {
      background-color: #555;
      padding: 10px;
      border-radius: 4px;
      min-height: 200px;
    }
    .progress-category {
      background-color: #444;
      padding: 10px;
      border-radius: 4px;
      display: inline-block;
      margin-right: 10px;
    }
    .progress-category-title {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="section">
      <div class="header">
        <div>
          <div class="icon"></div>
        </div>
        <div class="user">
          <p>Olá, "Usuário"</p>
          <p>04/05/2024</p>
        </div>
      </div>
      <div class="title">Organização:</div>
      <div class="button-group">
        <button class="button">Todos</button>
        <button class="button">Rotina</button>
        <button class="button">Novos</button>
      </div>
      <div class="task-list">
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-book-reader"></i>
          </div>
          <div class="task-title">Ler</div>
          <button class="add-button">+</button>
        </div>
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-broom"></i>
          </div>
          <div class="task-title">Aspirar quarto</div>
          <button class="add-button">+</button>
        </div>
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-briefcase"></i>
          </div>
          <div class="task-title">Trabalho CN</div>
          <button class="add-button">+</button>
        </div>
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-pills"></i>
          </div>
          <div class="task-title">Tomar remédio</div>
          <button class="add-button">+</button>
        </div>
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-pencil-alt"></i>
          </div>
          <div class="task-title">Exercícios</div>
          <button class="add-button">+</button>
        </div>
        <div class="task">
          <div class="task-icon">
            <i class="fas fa-question-circle"></i>
          </div>
          <div class="task-title">Questões concurso</div>
          <button class="add-button">+</button>
        </div>
      </div>
      <div class="notes">
        <div class="notes-header">Anotações:</div>
        <textarea class="notes-content"></textarea>
      </div>
    </div>
    <div class="section">
      <div class="title">Agenda:</div>
      <div class="calendar">
        <div class="calendar-header">Hoje:</div>
        <div class="calendar-day">
          <div class="calendar-title">Dentista</div>
          <div class="calendar-time">16:00</div>
        </div>
        <div class="calendar-day">
          <div class="calendar-title">Reunião</div>
          <div class="calendar-time">18:00</div>
        </div>
        <button class="add-button">+</button>
      </div>
      <div class="calendar">
        <div class="calendar-header">Próximos dias:</div>
        <div class="calendar-day">
          <div class="calendar-title">Alistamento</div>
          <div class="calendar-time">16/05 - 13:00</div>
        </div>
        <div class="calendar-day">
          <div class="calendar-title">Entrega trabalho</div>
          <div class="calendar-time">20/06 - 18:00</div>
        </div>
        <button class="add-button">+</button>
      </div>
      <div class="progress">
        <div class="progress-header">Seu progresso:</div>
        <div class="progress-chart">
          <div class="progress-category">
            <div class="progress-category-title">Físico</div>
          </div>
          <div class="progress-category">
            <div class="progress-category-title">Mental</div>
          </div>
          <div class="progress-category">
            <div class="progress-category-title">Estudos</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>