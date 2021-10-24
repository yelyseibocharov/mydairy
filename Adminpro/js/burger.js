$(document).ready(function () {
    $('.header__burger').click(function (event) {
        $('.header__burger,.person_burger').toggleClass('active')
        $('body').toggleClass('lock')
    });
});