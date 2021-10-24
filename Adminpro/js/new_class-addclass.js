

// ОКНО ДОБАВЛЕНИЯ ПРЕДМЕТА

document.querySelectorAll('.button_add_subject').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.add_class_choice-subject').forEach(
            (child) => child.classList.add('add_class_choice-subject--active')
        );

    })
);


//Закрыть

document.querySelectorAll('.top-button_close').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.add_class_choice-subject').forEach(
            (child) => child.classList.remove('add_class_choice-subject--active')
        );

    })
);




// Добавит и закрыть
document.querySelectorAll('.bottom-button_add_subject').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.add_class_choice-subject').forEach(
            (child) => child.classList.remove('add_class_choice-subject--active')
        );

    })
);