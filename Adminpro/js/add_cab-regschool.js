
document.querySelectorAll('.button-add-cab').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addcab').forEach(
        (child) => child.classList.add('addcab--active')
    );

})
);


//Закрыть

document.querySelectorAll('.button-addcab').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addcab').forEach(
        (child) => child.classList.remove('addcab--active')
    );

})
);


document.querySelectorAll('.add_cab_head').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.addcab--active').forEach(
        (child) => child.classList.remove('addcab--active')
    );
})
);