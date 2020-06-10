$(function() {
	$('#sb-settings').addClass('is-active');
	$('#nb-settings').addClass('is-active');
	let color = $('html').css('background-color');
	$('#nb-settings').css('border-left', '3px solid ' + color);

	// Moved all mobile viewport adjustments to JQuery for cleaner codes
	if (window.matchMedia('only screen and (max-width: 768px)').matches) {
		$('.switch').addClass('is-small');
		$('#settings .icon').removeClass('is-large').addClass('is-medium');
		$('#settings svg').removeClass('fa-lg');
	} 

	$(window).resize(function() {
		if (window.matchMedia('only screen and (max-width: 768px)').matches) {
			if (!$('.switch').hasClass('is-small')) $('.switch').addClass('is-small');
			$('#settings .icon').removeClass('is-large').addClass('is-medium');
			$('#settings svg').removeClass('fa-lg');
		} else {
			$('.switch').removeClass('is-small');
			if (!$('#settings .icon').hasClass('is-large')) $('#settings .icon').removeClass('is-medium').addClass('is-large');
			if (!$('#settings svg').hasClass('fa-lg')) $('#settings svg').addClass('fa-lg');
		}
	});

	$('.switch').click(function() {
		$(this).attr('checked') ? $(this).removeAttr('checked') : $(this).attr('checked', true);
		$(this).attr('checked') ? alert($(this).attr('id') + ' turned on.') : alert($(this).attr('id') + ' turned off.');
	});
});