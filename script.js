document.addEventListener('DOMContentLoaded', function () {
    const popupBackground = document.getElementById('popup-background');
    const agendaPopupBackground = document.getElementById('agenda-popup-background');
    const popupClose = document.getElementById('popup-close');
    const agendaPopupClose = document.getElementById('agenda-popup-close');
    const addTaskButton = document.getElementById('add-task-button');
    const addEventButton = document.getElementById('add-event-button');

    addTaskButton.addEventListener('click', function () {
        popupBackground.style.display = 'flex';
    });

    addEventButton.addEventListener('click', function () {
        agendaPopupBackground.style.display = 'flex';
    });

    popupClose.addEventListener('click', function () {
        popupBackground.style.display = 'none';
    });

    agendaPopupClose.addEventListener('click', function () {
        agendaPopupBackground.style.display = 'none';
    });

    // Fechar o popup ao clicar fora dele
    window.addEventListener('click', function (event) {
        if (event.target === popupBackground) {
            popupBackground.style.display = 'none';
        }
        if (event.target === agendaPopupBackground) {
            agendaPopupBackground.style.display = 'none';
        }
    });
});
    // Função para criar o calendário
    function createCalendar(year, month) {
        const calendarElement = document.getElementById('calendar');
        const currentDate = new Date(); // Data atual
    
        // Cria uma data para o primeiro dia do mês
        const firstDayOfMonth = new Date(year, month - 1, 1);
        const daysInMonth = new Date(year, month, 0).getDate();
    
        // Array com os nomes dos dias da semana
        const weekdays = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
    
        // Criação dos elementos HTML para o calendário
        const weekdaysRow = document.createElement('div');
        weekdaysRow.classList.add('calendar-weekdays');
        weekdays.forEach(day => {
            const weekdayElement = document.createElement('div');
            weekdayElement.textContent = day;
            weekdaysRow.appendChild(weekdayElement);
        });
    
        const daysGrid = document.createElement('div');
        daysGrid.classList.add('calendar-days');
    
        // Preenche os dias do mês
        for (let i = 0; i < firstDayOfMonth.getDay(); i++) {
            const emptyDay = document.createElement('div');
            daysGrid.appendChild(emptyDay);
        }
    
        for (let day = 1; day <= daysInMonth; day++) {
            const dayElement = document.createElement('div');
            dayElement.classList.add('calendar-day');
            dayElement.textContent = day;
    
            // Verifica se o dia é anterior ao dia atual
            const thisDay = new Date(year, month - 1, day);
            if (thisDay < currentDate) {
                dayElement.classList.add('past-day');
            }
    
            daysGrid.appendChild(dayElement);
        }
    
        // Limpa o calendário antes de adicionar os novos elementos
        calendarElement.innerHTML = '';
        calendarElement.appendChild(weekdaysRow);
        calendarElement.appendChild(daysGrid);
    }
    
    // Chama a função para criar o calendário do mês atual
    const currentDate = new Date();
    createCalendar(currentDate.getFullYear(), currentDate.getMonth() + 1);
    
//calendário 
// Função para criar o calendário
function createCalendar(selector) {
    var calendar = document.querySelector(selector);
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth();

    var daysInMonth = new Date(year, month + 1, 0).getDate();
    var firstDayOfMonth = new Date(year, month, 1).getDay();

    var monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var dayNames = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];

    var html = '<div class="header">';
    html += '<div class="month">' + monthNames[month] + ' ' + year + '</div>';
    for (var i = 0; i < dayNames.length; i++) {
        html += '<div class="day">' + dayNames[i] + '</div>';
    }
    html += '</div>';

    var dayCount = 1;
    for (var i = 0; i < 6; i++) { // 6 linhas para garantir que todos os meses tenham espaço suficiente
        html += '<div class="week">';
        for (var j = 0; j < 7; j++) {
            if ((i === 0 && j < firstDayOfMonth) || dayCount > daysInMonth) {
                html += '<div class="day"></div>';
            } else {
                var currentDate = new Date(year, month, dayCount);
                var today = new Date();

                var className = 'day';
                if (currentDate < today) {
                    className += ' past';
                }

                html += '<div class="' + className + '">' + dayCount + '</div>';
                dayCount++;
            }
        }
        html += '</div>';
    }

    calendar.innerHTML = html;
}

// Chamando a função para criar o calendário
createCalendar('#calendar');

