var e = "js-filter-is-visible",
a = "js-vertical-off-scroll",
n = "js-filter-is-hidden",
i = $(".js-filter"),
o = $("html, body");
$(".js-filter-toggler").on("click",
function(t) {
	t.preventDefault(),
	i.hasClass(e) ? (i.removeClass(e).addClass(n), o.removeClass(a)) : (i.removeClass(n).addClass(e), o.addClass(a))
});