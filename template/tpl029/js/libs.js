jQuery(function() {
	jQuery('.img-video')
		.on('mouseover touchstart', function() {
			jQuery(this)
				.find('video')
				.each(function() {
					jQuery(this)
						.addClass('prev-video');
					var videoSrc = jQuery(this)
						.attr('data-src');
					jQuery(this)
						.attr('src', videoSrc);
				});
		});
	jQuery('.img-video')
		.on('mouseout touchend', function() {
			jQuery(this)
				.find('video')
				.each(function() {
					jQuery(this)
						.find('.watch-clip')
						.each(function() {
							jQuery(this)
								.removeClass('close');
						});
					jQuery(this)
						.removeClass('prev-video');
					jQuery(this)
						.attr('src', "/templates/" + dle_skin + "/dleimages/plug.webm");
				});
		});
	jQuery('.watch-clip')
		.click(function() {
			jQuery(this)
				.closest('.thumb')
				.find('video')
				.each(function() {
					jQuery(this)
						.addClass('prev-video');
					var videoSrc = jQuery(this)
						.attr('data-src');
					jQuery(this)
						.attr('src', videoSrc);
				});
			jQuery(this)
				.addClass('close');
			jQuery(".watch-clip")
				.not(this)
				.removeClass('close');
			jQuery('video')
				.removeClass('prev-video');
			jQuery(this)
				.closest('.thumb')
				.find('video')
				.addClass('prev-video');
			return false;
		});
});
$(document)
	.ready(function() {
		$('.sorter')
			.each(function() {
				var a = $(this),
					b = a.find('li[class] a')
					.html();
				a.append('<span>' + b + '<span class="fal fa fa-angle-down" style="margin-left:8px"></span></span>');
				a.click(function() {
					$(this)
						.find('div')
						.fadeToggle(100);
				});
			});
		$('.js-count-percent')
			.each(function() {
				var a = $(this),
					b = parseInt(a.find('.ratingtypeplusminus')
						.text(), 10),
					c = parseInt(a.find('span[id*=vote]')
						.text(), 10);
				if (c >= b && c > 0) {
					var t = Math.round((c - (c - b) / 2) / c * 100);
					a.text(t + '%')
						.after('<div class="thumb__rating-bar"><div class="thumb__rating-bar-progress" style="width:' + t + '%"></div></div>');
				} else {
					a.text('0%')
						.after('<div class="thumb__rating-bar"><div class="thumb__rating-bar-progress"></div></div>');
				};
				a.removeClass('js-count-percent');
			});
		$('.page__rating')
			.each(function() {
				var rate = $(this),
					b = parseInt(rate.find('.ratingtypeplusminus')
						.text(), 10),
					c = parseInt(rate.find('span[id*=vote]')
						.text(), 10);
				rate.append('<div class="page__rating-votes">Votes: <i>0</i></div><div class="page__rating-likes"><i>0%</i> <span>(<i>0/0</i>)</span></div><div class="page__rating-bar"><div class="page__rating-bar-progress"></div></div>');
				if (c >= b && c > 0) {
					var m = (c - b) / 2,
						p = c - m,
						fill = Math.round((c - m) / c * 100);
					rate.find('.page__rating-bar-progress')
						.css({
							'width': '' + fill + '%'
						});
					rate.find('.page__rating-likes')
						.children('i')
						.html(fill + '%');
					rate.find('.page__rating-likes')
						.children('span')
						.children('i')
						.html(p + '/' + m);
					rate.find('.page__rating-votes')
						.children('i')
						.html(c);
					console.log('rate ' + b + ' votes ' + c + ' prg ' + fill + ' like ' + p + ' dislike ' + m + '');
				};
			});
		$('body')
			.append('<div class="overlay"></div><div class="mobile-menu" id="mobile-menu"></div><div class="mobile-menu-close"><span class="fal fa fa-times"></span></div><div id="scrolltop"><span class="fal fa fa-long-arrow-up"></span></div>');
		$('.js-this-in-mobile-menu')
			.each(function() {
				$(this)
					.clone()
					.prependTo('#mobile-menu');
			});
		$(document)
			.on('click', '.js-show-login', function() {
				$('.overlay, .login')
					.fadeIn(200);
				$('body')
					.addClass('modal-is-opened');
				setTimeout(function() {
					$(window)
						.lazyLoadXT();
				}, 300);
				return false;
			});
		$('.sect--tabs')
			.on('click', '.js-show-comments:not(.is-active)', function() {
				$('.sect--tabs .sect__tabs-content')
					.toggleClass('d-none');
				$(this)
					.addClass('is-active')
					.siblings()
					.removeClass('is-active');
			});
		$(".js-show-mobile-menu")
			.click(function() {
				$('.overlay')
					.fadeIn(200);
				$('#mobile-menu, .mobile-menu-close')
					.addClass('is-active');
				$('body')
					.addClass('mobile-menu-is-opened');
			});
		$(document)
			.on('click', '.overlay, .login__close, .mobile-menu-close', function() {
				$('.overlay, .login')
					.fadeOut(200);
				$('#mobile-menu, .mobile-menu-close')
					.removeClass('is-active');
				$('body')
					.removeClass('modal-is-opened mobile-menu-is-opened');
			});
		$(document)
			.on('click', '.form__textarea-inside textarea, .fr-wrapper', function() {
				$('.add-comments-form')
					.find('.form__row--protect')
					.removeClass('d-none');
			});
		$('#m-cont > #dle-ajax-comments')
			.appendTo($('#page__comments-list'));
		$('.login__social-btns a')
			.on('click', function() {
				var href = $(this)
					.attr('href'),
					width = 820,
					height = 420,
					left = (screen.width - width) / 2,
					top = (screen.height - height) / 2 - 100;
				auth_window = window.open(href, 'auth_window', "width=" + width + ",height=" + height + ",top=" + top + ",left=" + left + "menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
				return false;
			});
		$('.js-comm-author')
			.each(function() {
				var a = $(this),
					b = a.closest('.js-comm'),
					c = a.text()
					.substr(0, 1),
					f = b.find('.js-comm-avatar'),
					e = f.children('img')
					.attr('src'),
					d = ["#c57c3b", "#753bc5", "#79c53b", "#eb3b5a", "#45aaf2", "#2bcbba", "#778ca3"],
					rand = Math.floor(Math.random() * d.length);
				if (e == '/templates/' + dle_skin + '/dleimages/noavatar.png') {
					f.html('<div class="comment-item__letter d-flex jc-center ai-center" style="background-color:' + d[rand] + '">' + c + '</div>');
				};
			});
		var gotop = $('#scrolltop');
		$(window)
			.scroll(function() {
				if ($(this)
					.scrollTop() > 300) {
					gotop.fadeIn(200);
				} else {
					gotop.fadeOut(200);
				}
			});
		gotop.click(function() {
			$('html, body')
				.animate({
					scrollTop: 0
				}, 'slow');
		});
	});


