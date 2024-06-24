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
