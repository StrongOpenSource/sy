var Madou = {
	'images': function() {
		$("img.lozad").lazyload({
			effect: "fadeIn",
			threshold: 200,
			failurelimit: 20,
		});		
	},
	'search': function() {
		$(".toggleSearch,.mtoggleSearch").click(function() {
			if ($(".search").hasClass('hidden')) {
				$(".search").removeClass('hidden');
				$(".content-without-search").addClass('content-with-search').removeClass('content-without-search');
			} else {
				$(".search").addClass('hidden');
				$(".content-with-search").addClass('content-without-search').removeClass('content-with-search');
			}
		});
		$(".menu").on("click", function(e){
			$(".menuDropdown").toggleClass('hidden');
			$(document).one("click", function(){
			$(".menuDropdown").toggleClass('hidden')
		});
			e.stopPropagation();
		});
		$(".menuDropdown").on("click", function(e){
			e.stopPropagation();
		});
		$(".lang").on("click", function(e){
			$(".langDropdown").toggleClass('hidden')
			$(document).one("click", function(){
			$(".langDropdown").toggleClass('hidden')
		});
			e.stopPropagation();
		});
		$(".langDropdown").on("click", function(e){
			e.stopPropagation();
		});
		$(".link").on("click", function(e){
			$(".linkDropdown").toggleClass('hidden')
			$(document).one("click", function(){
			$(".linkDropdown").toggleClass('hidden')
		});
			e.stopPropagation();
		});
		$(".linkDropdown").on("click", function(e){
			e.stopPropagation();
		});
		$(".filter").on("click", function(e){
			$(".filterDropdown").toggleClass('hidden')
			$(document).one("click", function(){
			$(".filterDropdown").toggleClass('hidden')
		});
			e.stopPropagation();
		});
		$(".filterDropdown").on("click", function(e){
			e.stopPropagation();
		});
		$(".madou-login").click(function() {
		    $(".overflow-y-auto").show();
		});
		$(".signup-btn").click(function() {
			$(".login").hide();
		    $(".signup").show();
		});
		
		$(".login-btn").click(function() {
			$(".signup").hide();
			$(".login").show();
		});
		
		$(".transition-opacity").click(function() {
		    $(".overflow-y-auto").hide();
		});
		$(".madou-user").on("click", function(e){
			$(".userDropdown").toggleClass('hidden')
			$(document).one("click", function(){
			$(".userDropdown").toggleClass('hidden')
		});
			e.stopPropagation();
		});
		$(".userDropdown").on("click", function(e){
			e.stopPropagation();
		});
	},
	'copy': function() {
		var clipboard = new ClipboardJS('#share');
		clipboard.on('success', function (e) {
			layer.msg("复制成功,快去分享吧！");
		});
		clipboard.on('error', function (e) {
			console.log(e);
		});	
	},
	'playlist': function() {
		$("#plays a").click(
			function() {
				$(this).addClass("active").siblings().removeClass("active");
				index = $("#plays a").index(this);
				$("#play-list #playsx").eq(index).fadeIn(800).siblings().hide();
				$("#play-list #playsx").eq(index).addClass("asc").siblings().removeClass("asc");
			}
		);
		$(".play-sort-btn").click(function() {
			var tb = $(".asc").find("li");
			var total = tb.length;
			for (var i = 0; i < total; i++) {
				for (var j = i; j < total; j++) {
					$(tb).eq(j).insertBefore($(tb).eq(i));
					$(tb).eq(i).insertAfter($(tb).eq(j));
				}
			}
			return;
		});
	}
}
$(document).ready(function() {
	Madou.images();
	Madou.search();
	Madou.copy();
	Madou.playlist();
});	 