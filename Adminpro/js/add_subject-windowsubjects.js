
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
/*
document.querySelectorAll('.button-addsubj').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addsubject--active').forEach(
        (child) => child.classList.remove('addsubject--active')
    );

})
);
*/

document.querySelectorAll('.add_subject_head').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addsubject--active').forEach(
        (child) => child.classList.remove('addsubject--active')
    );
})
);











document.querySelectorAll('.button-del').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelectorAll('.delcab').forEach(
        (child) => child.classList.add('delcab--active')
    );

})
);

document.querySelectorAll('.button-back').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelectorAll('.delcab').forEach(
        (child) => child.classList.remove('delcab--active')
    );

})
);

