jQuery(document).ready(function ($) {
    var menu = $("#top-menu");
    var bgColor = 'bg-light';
    if (menu.hasClass('home-page')) {
        bgColor = 'bg-dark';
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            menu.addClass(bgColor);
        } else if ($(this).scrollTop() <= 100 && menu.hasClass(bgColor)) {
            menu.removeClass(bgColor);
        }
    });//scroll
});