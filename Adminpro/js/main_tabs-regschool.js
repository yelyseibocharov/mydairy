document.querySelectorAll('.next-1').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');

        document.querySelectorAll('.tabs-content_item_1').forEach(
            (child) => child.classList.add('tabs-content_item_1--hidden')
        );

        item.classList.add('tabs-content_item_2');
        document.getElementById(id).classList.add('tabs-content_item_2--active');
    })
);
//-----------------------------2
document.querySelectorAll('.next-2').forEach((item) =>
    item.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href').replace('#', '');

        document.querySelectorAll('.tabs-content_item_2').forEach(
            (child) => child.classList.remove('tabs-content_item_2--active')
        );
    
        item.classList.add('tabs-content_item_3');
        document.getElementById(id).classList.add('tabs-content_item_3--active');
    })
);

//----




/*document.querySelectorAll('.next-3').forEach((item) =>
item.addEventListener('click', function (e) {
showPrompt("Введите что-нибудь<br>...умное :)", function(value) {
    alert(value);
});
})
);*/


var btn = document.querySelector('.addschool');
//add click handler
btn.onclick = function() {
  alert('Підтвердіть дію');
};

