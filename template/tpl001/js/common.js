
var ua = navigator.userAgent.toLocaleLowerCase();
style=document.createElement('style');
if(ua.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian)/i)){
    var is_mobile=1;
    var is_pc=0;
    if(ua.match(/(ios|ipad|iphone)/i)){
        var is_ios = 1;
        var is_android = 0;
    }else{
        var is_ios = 0;
        var is_android = 1;
    }
    style.innerHTML = '.hide_mobile{display:none;}';
}else{
    var is_mobile=0;
    var is_pc=1;
    style.innerHTML = '.hide_pc{display:none;}';
}
document.getElementsByTagName('head')[0].appendChild(style);



function copyText() {
  var torrent_magnet_text = document.getElementById("torrent_magnet_text").innerText;
  var torrent_magnet_input = document.getElementById("torrent_magnet_input");
  torrent_magnet_input.value = torrent_magnet_text; // 修改文本框的内容
  torrent_magnet_input.select(); // 选中文本
  document.execCommand("copy"); // 执行浏览器复制命令
  alert("复制成功");
}


/* 网站配置 */
var domain = window.location.host; //域名
var onlineHref ="https://t.me/";
var xl1 ="";
var xl2 ="";
var xl3 ="";
var appName = "女优直播"; //APP名称
var title = "提示：请复制域名去手机浏览器中打开，请勿在微信和QQ中打开，因为包含成人内容。尽量使用宙斯浏览器，谷歌浏览器，火狐浏览器，或者苹果安卓系统自带浏览器访问～";
var appUrl = ""; //APP下载页地址
var appUrl1 = "";
var pandaAppUrl = "https://aaa.net/";
var updateUrl = "https://aaa.com"; //永久网址发布页
var emailUrl = ""; //"<em>g</em><span>s</span><em>et</em><span>ok</span><em>u</em><span>wb</span><em>r</em><span>qr</span><em>l</em><span>kt</span><em>@gm<span>zi</span>ai<span>mk</span>l.c<span>yq</span>om</em>";	//邮箱回复网址
var countUrl = "";//"https://v1.cnzz.com/z_stat.php?id=1280624099&web_id=1280624099"; //统计系统JS地址
var getSpons = true;

var moreUrl = [
	"aaa.com",
	"aaa.com"
];





/* 对联 [150*350] [固定2个] 上方两个*/ 
var couplet = true;
var coupletData = [
	// { imgs: ["https://sm2kz.net/image/xiaolin119.gif"], url: "https://s27ns.com" },
	// { imgs: ["https://img.maldwin27.xyz/images/6471f2b049ada68764d1d429.gif"], url: "https://s27ns.com" },
	// { imgs: ["https://z4a.net/images/2023/05/08/150x350.gif"], url: "https://yhc339.com" }
];

// /* 对联1 [150*350] [固定2个] 下方两个*/
var couplet1 = true;
var coupletData1 = [
	// { imgs: ["https://j4xok.vip/dxj/xx150x350.gif"], url: "https://m776.co:65432/index.html?channelCode=1620" },
	//{ imgs: ["https://j4xok.vip/daxanja/youd150x350.gif"], url: "https://m776.co:65432/index.html?channelCode=1620" },
	// { imgs: ["https://z4a.net/images/2023/05/08/150x350.gif"], url: "https://yhc339.com" }
];

/* 顶部3宫格 [960X400] [固定3个] */
var topData = [
  { imgs: ["https://hwus1.hulichuang.mobi/gif/yh150.gif"], url: "https://xiongmao12.com" },
	 { imgs: ["https://hwus1.hulichuang.mobi/gif/js150.gif"], url: "https://rgn78y.cc" },
];

/* 底部4宫格 [960X80] [固定4个] */
var btmData = [
	// { imgs: ["https://sm2kz.net/image/oiepk900.gif"], url: "https://s68hl.com" },
	// { imgs: ["https://z4a.net/images/2023/05/08/960x80.gif"], url: "https://yhc339.com" },
	// { imgs: ["https://j4xok.vip/dxj/xg960x80.gif"], url: "https://m776.co:65432/index.html?channelCode=1620" },
	// { imgs: ["https://tc911.vip/HF.960-80.gif"], url: "http://7tyc3.com" }
];

/* 中间8宫格 [960x400] [固定8个] */
var midData = [
     { imgs: ["https://hwus1.hulichuang.mobi/gif/yh.gif"], url: "https://xiongmao12.com" },
  { imgs: ["https://hwus1.hulichuang.mobi/gif/yh1.gif"], url: "https://xiongmao12.com" },
  { imgs: ["https://hwus1.hulichuang.mobi/gif/yh2.gif"], url: "https://xiongmao12.com" },
  { imgs: ["https://hwus1.hulichuang.mobi/gif/yh3.gif"], url: "https://xiongmao12.com" },
  { imgs: ["https://hwus1.hulichuang.mobi/gif/js360.gif"], url: "https://rgn78y.cc" },
  { imgs: ["https://hwus1.hulichuang.mobi/gif/js3.gif"], url: "https://rgn78y.cc" },
   { imgs: ["https://hwus1.hulichuang.mobi/gif/nv1122.gif"], url: "https://uj63t.com" },
   { imgs: ["https://hwus1.hulichuang.mobi/gif/nv1122.gif"], url: "https://uj63t.com" },
];


var centerData = [
	//  { imgs: ["https://8855ggttgg.vip/i/2023/10/30/sq8jvj.gif"], url: "https://yhwakgq3.com" },
	// { imgs: ["https://bjm.1vkx.cn/public/1/img/1597572842.gif"], url: "https://www.baidu.com" }
];


var topGGData = [
	// { imgs: ["https://bjm.1vkx.cn/public/1/img/1597572842.gif"], url: "https://www.baidu.com" }
];
var btmGGData = [
	// { imgs: ["https://bjm.1vkx.cn/public/1/img/1597572842.gif"], url: "https://www.baidu.com" }
];





//滚动广告
var rollingad = [
	
];


var danData = [
];



var TopGG = false;
var body = document.body;
var ua = navigator.userAgent.toLowerCase();
var isMobile = ua.indexOf("windows nt") == -1 && ua.indexOf("macintosh") == -1 && ua.indexOf("pad") == -1 && ua.indexOf("x86_64") == -1;
var isAndroid = ua.indexOf("android") > -1;
var isPad = ua.indexOf("pad") > -1;
var isSafari = /Version[|\/]([0-9.]+)([^0-9a-zA-Z]+)Mobile[|\/]([0-9a-zA-Z]+)([^0-9a-zA-Z]+)Safari[|\/]([0-9.]+)$/i.test(ua);
window.baseready = (function () {
	var readyfn = [];
	var readyobj = function (fn) {
		if (!!fn && typeof fn == "function") {
			readyfn.push({
				fn: fn
			});
		}
	};
	readyobj.insert = function (fn) {
		if (!!fn && typeof fn == "function") {
			readyfn.push({
				fn: fn
			});
		}
	};
	readyobj.excute = function () {
		for (var i = 0; i < readyfn.length; i++) {
			if (typeof readyfn[i].fn == "function") {
				readyfn[i].fn();
			}
		}
	}
	return readyobj;
})();

var os = navigator.userAgent;
var devices = (function () {
	var u = navigator.userAgent, app = navigator.appVersion;
	return {
		isAndroid: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
		isIOS: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
		isSafari: u.indexOf('Safari') > -1,
		isQQ: u.match(/QQ\/[0-9]/i),
		isWx: u.match(/MicroMessenger\/[0-9]/i),
	}
})();
function install() {
	window.location.href = pandaAppUrl;
}
document.onreadystatechange = function () {
	if (document.readyState == 'complete') {
		if (countUrl != "") {
			addScript(countUrl);
		}
	}
}

function getRandomArrayElements(arr, count) {
	var shuffled = arr.slice(0), i = arr.length, min = i - count, temp, index;
	while (i-- > min) {
		index = Math.floor((i + 1) * Math.random());
		temp = shuffled[index];
		shuffled[index] = shuffled[i];
		shuffled[i] = temp;
	}
	return shuffled.slice(min);
}

/* LazyLoad */
function loadImg(arr) {
	for (var i = 0, len = arr.length; i < len; i++) {
		if (arr[i].getBoundingClientRect().top < document.documentElement.clientHeight && !arr[i].isLoad) {
			arr[i].isLoad = true;
			arr[i].style.cssText = 'transition:0;opacity:0;';
			if (arr[i].dataset) {
				aftLoadImg(arr[i], arr[i].dataset.original);
			} else {
				aftLoadImg(arr[i], arr[i].getAttribute('data-original'));
			}
			(function (i) {
				setTimeout(function () {
					arr[i].style.cssText = 'transition:1s;opacity:1;';
				}, 16)
			})(i);
		}
	}
}

function aftLoadImg(obj, url) {
	var oImg = new Image();
	oImg.onload = function () {
		obj.src = oImg.src;
	}
	oImg.src = url;
}

function getDomain() {
	// var domain = document.domain.split('.').slice(-2).join('.');
	var domain =document.domain;
  if(domain=="xn--av-aaa.com"){domain="aaaa.COM"}

	return domain;
}

function goTop() {
	var goTop = setInterval(scrollMove, 10);
	function scrollMove() {
		setScrollTop(getScrollTop() / 2);
		if (getScrollTop() == 0) clearInterval(goTop);
	}
}

function getScrollTop() {
	var scrollTop = 0, bodyScrollTop = 0, documentScrollTop = 0;
	if (body) {
		bodyScrollTop = body.scrollTop;
	}
	if (document.documentElement) {
		documentScrollTop = document.documentElement.scrollTop;
	}
	scrollTop = (bodyScrollTop - documentScrollTop > 0) ? bodyScrollTop : documentScrollTop;
	return scrollTop;
}

function setScrollTop(value) {
	if (document.documentElement.scrollTop) {
		document.documentElement.scrollTop = value;
	} else {
		body.scrollTop = value;
	}
}

function addEvent(obj, type, fn) {
	if (obj.addEventListener) obj.addEventListener(type, fn, false);
	else if (obj.attachEvent) {
		obj["e" + type + fn] = fn;
		obj[type + fn] = function () { obj["e" + type + fn](window.event); }
		obj.attachEvent("on" + type, obj[type + fn]);
	}
}

function removeEvent(obj, type, fn) {
	if (obj.removeEventListener) obj.removeEventListener(type, fn, false);
	else if (obj.detachEvent) {
		obj.detachEvent("on" + type, obj[type + fn]);
		obj[type + fn] = null;
		obj["e" + type + fn] = null;
	}
}

function random() {
	return parseInt(Math.random() * 10);
}

function randomsort(a, b) {
	return random() > 5 ? -1 : 1;
}

function getRandomNumberByRange(start, end) {
	return Math.round(Math.random() * (end - start) + start)
}

function getImage(idName, num) {
	return document.getElementById(idName).getElementsByTagName('img')[num].clientHeight;
}

function getId(idName) {
	return document.getElementById(idName);
}

function getStyle(dom, attr) {
	if (window.getComputedStyle) {
		return window.getComputedStyle(dom, null)[attr];
	} else {
		return dom.currentStyle[attr];
	}
}

function getClass(clsName, oParent) {
	var oParents = (typeof (oParent) == "object") ? oParent : (!!oParent ? document.getElementById(oParent) : document);
	var boxArr = new Array();
	var oElements = oParents.getElementsByTagName('*');
	for (i = 0; i < oElements.length; i++) {
		var classname = oElements[i].className || '';
		var classNameArr = (classname + "").split(/\s+/);
		for (j = 0; j < classNameArr.length; j++) {
			if (classNameArr[j] === clsName) {
				boxArr.push(oElements[i]);
			}
		}
	}
	return boxArr;
}

function closeCouplet() {
	getId('couplet').style.display = 'none';
	couplet = false;
	// setCookie("couplet_status", "0", "24");
}
function closeCouplet1() {
	getId('couplet1').style.display = 'none';
	couplet1 = false;
	// setCookie("couplet_status1", "0", "24");
}
function showMask(zIndex) {
	var mask = document.createElement("div");
	mask.id = "maskBox";
	mask.setAttribute("class", "mask");
	mask.setAttribute("onclick", "hideMask();");
	mask.style.cssText = "z-index:" + zIndex;
	body.appendChild(mask);
	body.style.cssText = "overflow:hidden;";
}

function hideMask() {
	// maskBox.parentNode.removeChild(maskBox);
	popBox = getId('popBox');
	maskBox = getId('maskBox');
	body.removeChild(popBox);
	body.removeChild(maskBox);
	body.style.cssText = "overflow:auto;";
	setCookie("newurl", "0", "72");

	// if (!(navigator.userAgent.match(/(Android)/i))) {

	// 	var popDiv = document.createElement("div");
	// 	popDiv.id = "popupidmask";
	// 	popDiv.setAttribute("class", "popupmask");
	// 	popDiv.setAttribute("onclick", "hideMasks();");
	// 	popDiv.setAttribute("style", "z-index: 11000;");

	// 	body.appendChild(popDiv);
	// 	var oTest = document.getElementById("popupidmask");
	// 	var ele = document.createElement("img");
	// 	ele.id = "favImg";
	// 	if ((navigator.userAgent.match(/(iPhone|iPod|ios|iOS|iPad|Backerry|WebOS|Symbian|Windows Phone|Phone)/i))) {
	// 		ele.src = "/static/images/shouji.png";
	// 	} else {
	// 		ele.src = "/static/images/favImg.png";
	// 	}
	// 	ele.style.cssText = "max-width: 400px;width: 100%;";
	// 	oTest.appendChild(ele);
	// }
}
function hideMasks() {
	popupidmask.parentNode.removeChild(popupidmask);
}

function setCookie(cname, cvalue, exhours) {
	var exp = new Date();
	exp.setTime(exp.getTime() + Number(exhours) * 3600 * 1000);
	document.cookie = cname + "=" + cvalue + "; path=/;expires = " + exp.toGMTString();
}

function getCookie(name) {
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	return (arr = document.cookie.match(reg)) ? unescape(arr[2]) : null;
}

function removeCookie(name) {
	var exp = new Date();
	exp.setTime(exp.getTime() - 1);
	var cval = getCookie(name);
	if (cval != null)
		document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
}

function prefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function copyUrl(text) {
	var input = document.createElement('textarea');
	var body = document.body;
	body.appendChild(input);
	input.style.cssText = "opacity:0;position:fixed;"
	input.value = text;
	input.select();
	document.execCommand('Copy');
	alert("复制成功，请粘贴到文本保存，方便以后访问！");
	if (isIE() || isIE11()) {
		input.removeNode(true);
	} else {
		input.remove();
	}
	function isIE() {
		if (!!window.ActiveXobject || "ActiveXObject" in window) {
			return true;
		} else {
			return false;
		}
	}
	function isIE11() {
		if ((/Trident\/7\./).test(ua)) {
			return true;
		} else {
			return false;
		}
	}
}
function goUrl(url) {
	window.open(url, "_blank");
}

function goSpons() {
	//window.open(sponsUrl,"_blank");
}
window.onload = function () {
	var oDiv = document.getElementById("rollingadBox");
	if (oDiv != null) {
		var oUl = oDiv.getElementsByTagName("ul")[0];
		var items = oDiv.getElementsByTagName("ul");
		var oLi = items[0].getElementsByTagName("li");


		var oA = oDiv.getElementsByTagName("a");
		var timer = null;
		var iSpeed = -2;
		console.log("====" + oLi.length);
		//复制一遍ul
		 if(oLi.length<4)
		 {
		 	oUl.innerHTML +=oUl.innerHTML;
		 	oUl.innerHTML +=oUl.innerHTML;
		 	oUl.innerHTML +=oUl.innerHTML;
		 	oUl.innerHTML +=oUl.innerHTML;
		 }
		 else if(oLi.length<7&&oLi.length>=4){
		 	oUl.innerHTML +=oUl.innerHTML;
		 	oUl.innerHTML +=oUl.innerHTML;
		 }
		 else if(oLi.length<17&&oLi.length>=7){
			 oUl.innerHTML += oUl.innerHTML;
			 oUl.innerHTML += oUl.innerHTML;
		 }


		//ul的宽度是所有li宽度之和，复制ul之后的整个ul的宽度就是li的长度乘以一个li的宽度
		oUl.style.width = oLi.length * oLi[0].offsetWidth + "px";
		console.log(oLi.length);
		console.log(oLi[0].offsetWidth);
		function fnMove() {
			//图片向左移动时的条件，即在div里的ul的offsetLeft小于一个ul的宽度
			if (oUl.offsetLeft < -oUl.offsetWidth / 2) {
				//将整个复制的ul向右拖拽直至整个ul中的第一张图归位到起点
				oUl.style.left = 0;
			}
			//图片向右移动时的条件，即在div里的ul的offsetLeft大于等于0
			else if (oUl.offsetLeft >= 0) {
				//将整个复制的ul向左拖拽直至整个ul中的第一张图归位到起点
				oUl.style.left = -oUl.offsetWidth / 2 + "px";
			}
			//给ul一个速度让整个ul的offsetLeft增加或减少，速度为正则向右移动，速度为负则向左移动
			oUl.style.left = oUl.offsetLeft + iSpeed + "px";
		}
		timer = setInterval(fnMove, 30)

		//当鼠标移动到div里面的时候图片滚动暂停，此时清除定时器即可。
		oDiv.onmouseover = function () {
			clearInterval(timer);
		}
		//当鼠标移出div的时候图片继续滚动，此时重新加载定时器。
		oDiv.onmouseout = function () {
			timer = setInterval(fnMove, 30);
		}
	}

}

var os = navigator.userAgent;
var devices = (function () {
	var u = navigator.userAgent, app = navigator.appVersion;
	return {
		isAndroid: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
		isIOS: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
		isSafari: u.indexOf('Safari') > -1,
		isQQ: u.match(/QQ\/[0-9]/i),
		isWx: u.match(/MicroMessenger\/[0-9]/i),
	}
})();




(function () {
	if(topGGData.length > 0){
		
		var html2 = document.createElement("div");
		var html = document.createElement("div");
		html2.id = "topGG";
		// html2.style = "height:120px;width:100%;display:none;"
		html.id = "azwangye";
		html.style = "z-index: 11000; position: fixed;width: 100%; height: 14%;top: 0; background: rgba(0, 0, 0, .5); overflow-y: scroll; cursor: pointer;text-align: center;display:block;"
		var coupletSpons = "";
		if(null ==getId('azwangye')){
		coupletSpons += '<a href="'+topGGData[0].url+'">';
		coupletSpons += '<img id="favImg" src="'+topGGData[0].imgs+'"  style="width: 100%;height: 100%;">';
		coupletSpons += ' </a>';
		coupletSpons += '<div style="position: fixed; top: 0; right: 0;">';
		coupletSpons += '<a style="height: 25px;width: 60px; background: #FFFFFF;float: right;font-weight: bold;" onclick="hidTop()">关闭</a>';
		coupletSpons += '</div>';
		html.innerHTML = coupletSpons;
		// document.getElementById("Box")?document.getElementById("Box").appendChild(html2):"";
		body?body.appendChild(html):"";
		}
	}else{
		if(document.getElementById("topBox")){
			
			document.getElementById("topBox").style.marginTop = "0px";
		}

	}

	if(btmGGData.length > 0){
		if(null ==getId('azwangye1')){
		html = document.createElement("div");
		html.id = "azwangye1";
		html.style = "z-index: 11000; position: fixed;width: 100%;bottom: 0px; height: 14%; background: rgba(0, 0, 0, .5); overflow-y: scroll; cursor: pointer;text-align: center;display:block;"
		var coupletSpons = "";
		coupletSpons += '<a href="'+btmGGData[0].url+'">';
		coupletSpons += '<img id="favImg" src="'+btmGGData[0].imgs+'"  style="width: 100%;height: 100%;">';
		coupletSpons += ' </a>';
		coupletSpons += '<div style="position: fixed; bottom: 11%; right: 0;">';
		coupletSpons += '<a style="height: 25px;width: 60px; background: #FFFFFF;float: right;font-weight: bold;" onclick="hidBtm()">关闭</a>';
		coupletSpons += '</div>';
		html.innerHTML = coupletSpons;
		
		body?body.appendChild(html):"";
		}
	}
		if (os.indexOf("Android") > -1) {
			//安卓
			if(document.getElementById("azwangye1")){
				document.getElementById("azwangye1").style.display = "block";
			}
			
			if(document.getElementById("azwangye")){
				// document.getElementById("topGG").style.display = "block";
				document.getElementById("azwangye").style.display = "block";
			}
		}
		else if (os.indexOf("iPhone") > -1) {
			//ios
			if(document.getElementById("azwangye1")){
				document.getElementById("azwangye1").style.display = "block";
			}
			
			if(document.getElementById("azwangye")){
				// document.getElementById("topGG").style.display = "block";
				document.getElementById("azwangye").style.display = "block";
			}
		}
		else {
			if(document.getElementById("azwangye1")){
				document.getElementById("azwangye1").style.display = "none";
			}
			
			if(document.getElementById("azwangye")){
				document.getElementById("azwangye").style.display = "none";
			}
		}
	
	// TopGG =true;
})();


function hidTop() {
	// var obj = document.getElementById("topGG");
	// obj.style.display= "none";
	document.getElementById("topBox").style.marginTop = "0px";
	document.getElementById("azwangye").style.display = "none";
}

function hidBtm() {
	document.getElementById("azwangye1").style.display = "none";
}

function getQueryVariable(variable)
{
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
    }
    return(false);
}



function CommercialCooperation() {
	window.location.href = onlineHref;
}

baseready.excute();




$(function() {
    helangSearch.init();
}) 

