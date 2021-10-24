


document.querySelectorAll('.button').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.journal-1').forEach(
        (child) => child.classList.add('journal-1--hidden')
    );

    document.getElementById(id).classList.add('journal-2--active');
})
);



document.querySelectorAll('.button2').forEach((item) =>
item.addEventListener('click', function (e) {
    e.preventDefault();
    const id = e.target.getAttribute('href').replace('#', '');
    
    document.querySelectorAll('.journal-1').forEach(
        (child) => child.classList.remove('journal-1--hidden')
    );

    document.getElementById(id).classList.remove('journal-2--active');
})
);