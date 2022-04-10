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

	if ($('.product-description-body *').hasClass('read-more')) {
		$('.read-more').click(function () {
			var textDescription = $(this).parent().find('.product-description-text');
			if (textDescription.hasClass('open-box')) {
				textDescription.removeClass('open-box');
				$(this).find('.icon-chevron').removeClass('up').addClass('down');
			} else {
				textDescription.addClass('open-box');
				$(this).find('.icon-chevron').removeClass('down').addClass('up');
			}
		});
	}
});