<!DOCTYPE html>
<html>
<head>
  <title>Organização Pessoal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <header>
    <nav>
        <p><a href="#">Login</a></p>
        <p><a href="#">Sobre</a></p>
        <p><a href="#">Contato</a></p>
    </nav>
  </header>
  <div class="container">
    <div class="section">
      <div class="header">
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