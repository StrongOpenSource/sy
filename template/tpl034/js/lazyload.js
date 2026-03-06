$(function() {
	$(".lazyload").lazyload({
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 50,
		skip_invisible: false
	});
});