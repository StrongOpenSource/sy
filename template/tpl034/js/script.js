$(function() {
	$(".copy_text").each(function() {
		var text2 = $(this).text();
		var clipboard = new Clipboard(this, {
			text: function() {
				return text2;
			}
		});
		clipboard.on('success',
		function(e) {
			alert("地址复制成功");
		});
	});

	$(".copy_checked").each(function() {
		var checked_url = [];
		$(this).parent().parent().find(".copy_text").find("a").each(function() {
			checked_url.push($(this).text());
		});
		var clipboard = new Clipboard(this, {
			text: function() {
				return checked_url.join('\n');
			}
		});
		clipboard.on('success',
		function(e) {
			alert("地址复制成功");
		});
	});

});

function cookiesave(n, v, mins, dn, path) {
	if (n) {
		if (!mins) mins = 365 * 24 * 60;
		if (!path) path = "/";
		var date = new Date();
		date.setTime(date.getTime() + (mins * 60 * 1000));
		var expires = "; expires=" + date.toGMTString();
		if (dn) dn = "domain=" + dn + "; ";
		document.cookie = n + "=" + v + expires + "; " + dn + "path=" + path;
	}
}

function cookieget(n) {
	var name = n + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

function closeclick() {
	document.getElementById('popBox').style.display = 'none';
	cookiesave('closeclick', 'closeclick', 360, '', '');
}

function clickclose() {
	if (cookieget('closeclick') == 'closeclick') {
		document.getElementById('popBox').style.display = 'none';
	} else {
		document.getElementById('popBox').style.display = 'block';
	}
}

// 每 360 分钟清除一次 Cookie
setInterval(function() {
	cookiesave('closeclick', 'closeclick', 360, '', '');
},
360 * 60 * 1000);

window.onload = clickclose;

$(function() {
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 100) {
			$('#btnGotop').fadeIn(300);
		} else {
			$('#btnGotop').fadeOut(300);
		}
	});
	$('#btnGotop').click(function() {
		$('html,body').animate({
			scrollTop: '0px'
		},
		800);
	});
});