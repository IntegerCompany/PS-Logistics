$( document ).ready(function() {
	// mainpage h1 effect
	$('.mainpage_top_img h1').addClass('zoomIn');

	// toggle admin button on mobile
	$('.toggle_menu').on('click', function(){
		$('body').toggleClass('opened');
	});
});