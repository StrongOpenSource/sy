var ua = navigator.userAgent.toLowerCase();

var isSafari = /Version[|\/]([0-9.]+)([^0-9a-zA-Z]+)Mobile[|\/]([0-9a-zA-Z]+)([^0-9a-zA-Z]+)Safari[|\/]([0-9.]+)$/i.test(ua);
var isMobile = ua.indexOf("windows nt") == -1 && ua.indexOf("macintosh") == -1 && ua.indexOf("pad") == -1 && ua.indexOf("x86_64") == -1;
var isAndroid = ua.indexOf("android") > -1;
var isPad = ua.indexOf("pad") > -1;
/* 搜索 */
var helangSearch = {
	/* 元素集 */
	els: {},
	/* 搜索类型序号 */
	searchIndex: 0,
	/* 火热的搜索列表 */
	hot: {
		/* 颜色 */
		color: ['#ff2c00', '#ff5a00', '#ff8105', '#fd9a15', '#dfad1c', '#6bc211', '#3cc71e', '#3cbe85', '#51b2ef', '#53b0ff'],
		/* 列表 */
		list: [
			'颜值',
			'泡泡浴',
			'中出',
			'探花',
			'人妻',
			'丝袜',
			'美乳',
			'制服',
			'丝袜',
			'老师'
		]
	},
	/* 初始化 */
	init: function () {
		var _this = this;
		this.els = {
			pickerBtn: $(".picker"),
			pickerList: $(".picker-list"),
			logo: $(".logo"),
			hotList: $(".hot-list"),
			input: $("#search-input"),
			button: $(".searchs")
		};


		/* 设置热门搜索列表 */
		this.els.hotList.html(function () {
			var str = '';
			$.each(_this.hot.list, function (index, item) {
				str += '<a href="movieSearch.html?content=' + item + '&typeMid=1&typeId=0&type=1">'
					+ '<div class="number" style="color: ' + _this.hot.color[index] + '">' + (index + 1) + '</div>'
					+ '<div>' + item + '</div>'
					+ '</a>';
			});
			return str;
		});

		/* 注册事件 */
		/* 搜索类别选择按钮 */
		this.els.pickerBtn.click(function () {
			if (_this.els.pickerList.is(':hidden')) {
				setTimeout(function () {
					_this.els.pickerList.show();
				}, 100);
			}
		});
		/* 搜索类别选择列表 */
		this.els.pickerList.on("click", ">li", function () {
			// _this.els.logo.css("background-image", ('url(img/' + $(this).data("logo") + ')'));
			_this.searchIndex = $(this).index();
			_this.els.pickerBtn.html($(this).html() + "<i class=\"icon-searchsarrows\"></i>")
		});
		/* 搜索 输入框 点击*/
		this.els.input.click(function () {
			if (!$(this).val()) {
				if (!isAndroid && isSafari) {
				} else {
					setTimeout(function () {
						_this.els.hotList.show();
					}, 100);
				}



			}
		});
		/* 搜索 输入框 输入*/
		this.els.input.on("input", function () {
			if ($(this).val()) {
				_this.els.hotList.hide();
			}
		});
		/* 搜索按钮 */
		this.els.button.click(function () {
			var searchArr = ['视频', '磁力'];

			if (_this.els.input.val() != "") {
				if (searchArr[_this.searchIndex] == "视频") {
					window.location.href = "/search.php?content=" + _this.els.input.val()+"&type=1";
				}

				if (searchArr[_this.searchIndex] == "磁力") {
					window.location.href = "/search.php?content=" + _this.els.input.val()+"&type=2";
				}
			}
		});//
		/* 文档 */
		$(document).click(function () {
			_this.els.pickerList.hide();
			_this.els.hotList.hide();
		});
		/* 搜索按钮 */
	}
};
