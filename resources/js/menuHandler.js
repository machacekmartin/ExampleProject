$(document).ready(function () {
    $('.switch').click(function () {
        $('.items').toggleClass('active');
        $(this).toggleClass('open');
    })
});