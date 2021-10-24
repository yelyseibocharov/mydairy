
document.querySelectorAll('.button-add-subject').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addsubject').forEach(
        (child) => child.classList.add('addsubject--active')
    );

})
);


//Закрыть

document.querySelectorAll('.button-addsubj').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addsubject--active').forEach(
        (child) => child.classList.remove('addsubject--active')
    );

})
);


document.querySelectorAll('.add_subject_head').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addsubject--active').forEach(
        (child) => child.classList.remove('addsubject--active')
    );
})
);