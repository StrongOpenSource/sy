$(document).ready(function() {
	$('body').on('click', '.kt-play', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('.adv-overlay .adv-overlay-ad').empty();
		$('.adv-overlay').css('display', 'none');
		return false;
	});



	$("#menu-icon").click(function() {
		$('.top-menu').slideToggle();
		$(this).toggleClass('active');
	});
	$("body").on("click", ".video-info-togle", function() {
		$('.show-hide').slideToggle();
		$(this).toggleClass('not-active');
	});



});



window.addEventListener("message", function(event) {
	var name = event.data;
	if (name === "asgCloseBanner") {
		$(".fp-ui iframe").remove()
	}
});