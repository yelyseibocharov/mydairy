
//addcab

document.querySelectorAll('.button-add-cab').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelectorAll('.addcab').forEach(
        (child) => child.classList.add('addcab--active')
    );

})
);

/*
document.querySelectorAll('.button-addcab').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelectorAll('.addcab').forEach(
        (child) => child.classList.remove('addcab--active')
    );

})
);
*/

document.querySelectorAll('.add_cab_head').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelectorAll('.addcab--active').forEach(
        (child) => child.classList.remove('addcab--active')
    );
})
);


// delcab
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

