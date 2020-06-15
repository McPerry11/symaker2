$(function() {
	$('#sb-logs').addClass('is-active');
	$('#nb-logs').addClass('is-active');
	let color = $('html').css('background-color');
	$('#header').css('border-bottom', '2px solid ' + color);
	$('#nb-logs').css('border-left', '3px solid ' + color);
	$('.breadcrumb ul').append('<li class="is-active"><a><span class="icon is-medium"><i class="fas fa-stream"></i></span>Logs</a></li>');

	// Checks the viewport to resize elements in pagination on smaller viewports/mobile
	if (window.matchMedia('only screen and (max-width: 768px)').matches) $('.pagination').addClass('is-small');
	$(window).resize(function() {
		window.matchMedia('only screen and (max-width: 768px)').matches ? $('.pagination').addClass('is-small') : $('.pagination').removeClass('is-small');
	});
});