// script.js
document.addEventListener('DOMContentLoaded', function () {
    const popupBackground = document.getElementById('popup-background');
    const popupClose = document.getElementById('popup-close');
    const addTaskButton = document.getElementById('add-task-button');

    addTaskButton.addEventListener('click', function () {
        popupBackground.style.display = 'flex';
    });

    popupClose.addEventListener('click', function () {
        popupBackground.style.display = 'none';
    });

    // Fechar o popup ao clicar fora dele
    window.addEventListener('click', function (event) {
        if (event.target === popupBackground) {
            popupBackground.style.display = 'none';
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const popupBackground = document.getElementById('popup-background');
    const popupClose = document.getElementById('popup-close');
    const addTaskButton = document.getElementById('add-task-button');
    const addEventButton = document.getElementById('add-event-button'); // Botão para abrir o popup da agenda

    addTaskButton.addEventListener('click', function () {
        popupBackground.style.display = 'flex';
    });

    addEventButton.addEventListener('click', function () { // Event listener para abrir o popup da agenda
        const agendaPopupBackground = document.getElementById('agenda-popup-background');
        agendaPopupBackground.style.display = 'flex';
    });

    popupClose.addEventListener('click', function () {
        popupBackground.style.display = 'none';
    });

    // Fechar o popup ao clicar fora dele
    window.addEventListener('click', function (event) {
        if (event.target === popupBackground) {
            popupBackground.style.display = 'none';
        }
    });
});
