jQuery(document).ready(function ($) {
    var $menu = $("#top-menu");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $menu.addClass("bg-dark");
        } else if ($(this).scrollTop() <= 100 && $menu.hasClass("bg-dark")) {
            $menu.removeClass("bg-dark");
        }
    });//scroll
});