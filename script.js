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
