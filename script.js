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

    
// Array com os nomes dos meses
const nomesDosMeses = [
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
];

// Obtém a data atual
const dataAtual = new Date();

// Obtém o ano, mês e dia (meses em JavaScript são baseados em zero)
const ano = dataAtual.getFullYear();
const mes = dataAtual.getMonth(); // Retorna um valor de 0 a 11
const dia = dataAtual.getDate(); // Retorna o dia do mês

// Obtém o nome do mês correspondente
const nomeDoMes = nomesDosMeses[mes];

// Formata o dia para garantir que tenha dois dígitos
const diaFormatado = dia < 10 ? `0${dia}` : dia;

// Exibe o ano, o mês e o dia na tela
document.getElementById('data').textContent = `Data: ${diaFormatado} de ${nomeDoMes} de ${ano}`;
