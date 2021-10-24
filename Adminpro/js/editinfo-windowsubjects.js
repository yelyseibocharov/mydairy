/*
//Добавить ученика 
document.querySelectorAll('.edit').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.peopleinforight').forEach(
            (child) => child.classList.add('peopleinforight--hidden')
        );
        document.querySelectorAll('.secondline').forEach(
            (child) => child.classList.add('secondline--hidden')
        );

        document.getElementById(id).classList.add('edit-info--active');
    })
);

document.querySelectorAll('.button-save').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.peopleinforight').forEach(
            (child) => child.classList.remove('peopleinforight--hidden')
        );
        document.querySelectorAll('.secondline').forEach(
            (child) => child.classList.remove('secondline--hidden')
        );

        document.getElementById(id).classList.remove('edit-info--active');
    })
);


document.querySelectorAll('.button-back').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');
        
        document.querySelectorAll('.peopleinforight').forEach(
            (child) => child.classList.remove('peopleinforight--hidden')
        );
        document.querySelectorAll('.secondline').forEach(
            (child) => child.classList.remove('secondline--hidden')
        );

        document.getElementById(id).classList.remove('edit-info--active');
    })
);
 
*/