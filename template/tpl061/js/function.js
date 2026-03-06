$(function () {
  $(".loading").lazyload({
    effect: 'fadeIn'
  });
  $(window).scroll(function () {
    500 < $(this).scrollTop() ? $("a.backtop").show() : $("a.backtop").hide();
  });
  $("a.backtop").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 400);
  });
});
