$(function() {
	$('#sb-dashboard').addClass('is-active').removeAttr('href');
	$('#nb-dashboard').addClass('is-active').removeAttr('href');
	// Fetches the color set in the background to match the theme color
	let color = $('html').css('background-color');
	$('#header').css('border-bottom', '2px solid ' + color);
	$('#nb-dashboard').css('border-left', '3px solid ' + color);
	$('.breadcrumb ul').append('<li class="is-active"><a><span class="icon is-medium"><i class="fas fa-columns"></i></span>Dashboard</a></li>');

	// If the viewport is mobile, #filter will flex to provide better UI
	if (window.matchMedia('only screen and (max-width: 550px)').matches) $('#filter .field').removeClass('is-grouped is-grouped-right');
	$(window).resize(function() {
		window.matchMedia('only screen and (max-width: 550px)').matches ? $('#filter .field').removeClass('is-grouped is-grouped-right') : $('#filter .field').hasClass('is-grouped is-grouped-right') ? null : $('#filter .field').addClass('is-grouped is-grouped-right');
	});

	// Since CSS cannot retrieve the theme color for the hover pseudo-class, JS will handle the hover event
	$('.db-content .box').hover(function() {
		$(this).css('border', '1px solid ' + color).css('border-left', '5px solid ' + color);
	}, function() {
		$(this).css({'border':'', 'border-left':''});
	});

	// Once #btnfilter is clicked, #filter will be visible; otherwise hidden.
	$('#btnfilter').click(function() {
		$('#btnfilter svg').toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
		$('#filter').slideToggle('fast');
	});
});