//=====================================================================================================
//防查
    //禁用右键
    window.oncontextmenu=function(){return false;} 
    //禁止任何键盘敲击事件（防止F12和shift+ctrl+i调起开发者工具） 
/*    window.onkeydown = window.onkeyup = window.onkeypress = function () { 
        window.event.returnValue = false; 
        return false; 
    } */
    
    //无限debugger
      setInterval(function() {
        check();
      }, 2000);
      var check = function() {
        function doCheck(a) {
          if (('' + a / a)['length'] !== 1 || a % 20 === 0) {
            (function() {}['constructor']('debugger')());
          } else {
            (function() {}['constructor']('debugger')());
          }
          doCheck(++a);
        }
        try {
          doCheck(0);
        } catch (err) {}
      };
      check();
    //网站禁止选择文字
    document.addEventListener('selectstart',function(e){
      e.preventDefault();
    })
    document.onkeydown = function(){
    //禁止ctrl+u
    if (event.ctrlKey && window.event.keyCode==85){
    return false;
    }
    //禁止 F12
    if (window.event && window.event.keyCode == 123) {
    event.keyCode = 0;
    event.returnValue = false;
    }
  //禁止ctrl+s
    if (event.ctrlKey && window.event.keyCode==83){
    return false;
    }
  //禁止 F5 
    if (window.event && window.event.keyCode == 116) {
    event.keyCode = 0;
    event.returnValue = false;
    }
    }
//=====================================================================================================
//控制台信息
    console.log('%c抄抄抄 就知道抄', 'font-size:32px;color:red;font-weight: 600;')
    console.log("%c+",
  `font-size: 1px;
  padding: 122px 217px;
  background-image: url(http://imgsrc.baidu.com/forum/w=580/sign=780874ff6e380cd7e61ea2e59145ad14/fb20952bd40735fa2ebbc5f695510fb30e2408ea.jpg);
  background-size: contain;
  background-repeat: no-repeat;
  color: transparent;`);
    console.log('%c扒站麻烦给个友链哦~\n设计加开发 花了8小时 你几分钟扒走 要个友链不过分吧', 'font-size:14px;color:#333333;')
    console.log('%c友链地址 私密社区 http://simisq.com', 'font-size:14px;color:#333333;')
    console.log('%c永久海外发布页 http://simisq.com', 'font-size:14px;color:#333333;')
    console.log('%c⇧ ⇧ ⇧ 请牢记本站最新网址 ⇧ ⇧ ⇧', 'font-size:14px;color:#333333;')
    console.log('%c也可发送任意邮件至 aqqys8@yeah.net 获取最新域名', 'font-size:14px;color:#333333;')
    console.log('%c也可以联系我的 Telegram @simisq 我是站长私密社区 欢迎您的到来', 'font-size:14px;color:#333333;')
    console.log('%c本站经常会更换域名,请多记几个本站域名防止失联', 'font-size:14px;color:#333333;')
    console.log('%c警告 / WARNING\n此发布页永久可用，请务必将本站加入收藏，开车永不迷路！\n每一个网站都有一个情怀，我们的情怀就是：纯净、实用、坚持用户体验至上！好站不可多得，只此一家.', 'font-size:14px;color:#333333;')
//=====================================================================================================
//左漂浮【随机】
/*var x_f_is=[
    'https://vk6.me/img/nzAW/zVa1G98tP.jpg',
    'https://vk6.me/img/nzAW/zEXOjr8b3.gif',
    'https://vk6.me/img/nzAW/zVa1GlpFC.jpg'];
var x_f_lks=[
    'https://www.wansege.org/guanggao.html',
    'https://www.wansege.org/guanggao.html',
    'https://www.wansege.org/guanggao.html'];
var nums_f=Math.floor(Math.random()*x_f_is.length); 
var img_f_src=x_f_is[nums_f]; 
var img_f_url=x_f_lks[nums_f]; 

var f_a_w="80px";  //广告宽度,单位px,如自适应宽度就改为100%;
var f_a_h="80px";    //广告高度,单位px
var f_a_s=img_f_src;  //广告图片地址
var f_a_lk=img_f_url;  //广告图片链接
//if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) { //只在手机端显示
document.writeln("<style type=\"text/css\">");
document.writeln(".f_foot{position: fixed; bottom: 30%; z-index: 19999 !important; left: 10px;}");
document.writeln(".f_foot_a{ width:"+f_a_w+"; height:"+f_a_h+"; margin:0px auto; position:relative; overflow:hidden; border-radius:10px;}");
document.writeln(".f_foot_a img{ width:"+f_a_w+"; height:"+f_a_h+";}");
document.writeln(".f_foot_a .af_ms{ position:absolute; background-color:#00000099; text-align:center; line-height:18px; width:35px; height:18px; top:0; right:0; filter:alpha(Opacity=50);-moz-opacity:0.7;opacity: 0.7; border-radius: 0px 0px 0px 10px; color:#FFF;}");
document.writeln(".f_foot_a .af_cl{ position:absolute; width:38px; text-align:center; height:14px; line-height:14px; border:1px #bcbcbc solid; background-color:#d3d3d3; color:#666666; bottom:0; right:0;border-radius: 10px 0px 0px 0px;}");
document.writeln("</style>");
document.writeln("<div class=\"f_foot\" id=\"f_foot\">");
document.writeln("<div class=\"f_foot_a\">");
document.writeln("<a href=\""+f_a_lk+"\" target=\"_blank\"><img src=\""+f_a_s+"\" /></a>");
document.writeln("<span class=\"af_ms\">广告</span>");
document.writeln("<span class=\"af_cl\" id=\"af_cl\">关闭X</span>");
document.writeln("</div>");
document.writeln("</div>");
//}//只在手机端显示
//关闭功能
var closeadf = document.getElementById("af_cl");
var f_foot = document.getElementById("f_foot");
closeadf.onclick = function(){
	if(f_foot){
		f_foot.style.display = "none";
	}
}

//抖动代码
function xyshark(i,j){
	var dom =document.getElementById("f_foot");
	j++;
	
	var pos = ['2px','-2px'];
	dom.style.left = pos[i];
	dom.style.bottom = pos[i];
	i++;
	
	if(j > 10){
		dom.style.left = '0px';
		//dom.style.top = '0px';
		dom.style.bottom = '0px';
		return false;
	}
	
	
	if(i == 2) i = 0;
	setTimeout('xyshark('+i+','+j+')',50);
}
//setTimeout('xyshark(0,0)',3000);

setInterval('xyshark(0,0)',3000);
*/


//=====================================================================================================
//左漂浮360度旋转【单图】
/*var url = 'https://wsgav.xyz'
var img = 'https://vk6.me/img/nzAW/n5pVbSQJt.gif'
document.writeln('<style>#o63092 {animation-name: spin;animation-duration: 10000ms;animation-iteration-count: infinite;animation-timing-function: linear;}@keyframes spin {from {transform:rotate(0deg);}to {transform:rotate(360deg);}}</style>')
document.writeln('<div class="f63092" id="o63092" style="position: fixed; bottom: 40%; z-index: 19999 !important; left: 5px;"><img src="https://vk6.me/img/nzAW/nhzEEGcq1.jpg" onclick="$(\'#o63092\').remove()" style="border-radius:50%;position:absolute;top:3px;left:5px;cursor:pointer;width:20px;height:20px;z-index:19000;" id="c63092"><a target="_blank" href="'+url+'"><img src="'+img+'" style="margin:10px;border-radius: 15px;" width="80px" height="80px" "></a></div>')*/
//=====================================================================================================
//底部悬浮
/*var p_w="100%";  //广告宽度,单位px,如自适应宽度就改为100%;
var p_h="100px";    //广告高度,单位px
var p_s="https://vk6.me/img/nzAW/nKJISCZDZ.gif";  //广告图片地址
var p_l="http://xycms.taobao.com/";  //广告图片链接
document.writeln("<style type=\"text/css\">");
document.writeln(".f_f{ width:100%; position:fixed; bottom:0px; z-index:9999;}");
document.writeln(".f_pic{ width:"+p_w+"; height:"+p_h+"; margin:0px auto; position:relative; overflow:hidden;}");
document.writeln(".f_pic img{ width:"+p_w+"; height:"+p_h+";}");
document.writeln(".f_pic .a_ms{ position:absolute; background-color:#000000; text-align:center; line-height:18px; width:35px; height:18px; top:0; right:0; filter:alpha(Opacity=50);-moz-opacity:0.7;opacity: 0.7; border-bottom-left-radius:6px; color:#FFF;}");
document.writeln(".f_pic .f_close{ position:absolute; width:38px; text-align:center; height:14px; line-height:14px; border:1px #bcbcbc solid; background-color:#d3d3d3; color:#666666; bottom:0; right:0;}");
document.writeln("</style>");
document.writeln("<div class=\"f_f\" id=\"f_f\">");
document.writeln("<div class=\"f_pic\" id=\"f_pic\">");
document.writeln("<a href=\""javascript:void(0);" onclick="toshare()"\" target=\"_blank\"><img src=\""+p_s+"\" /></a>");
document.writeln("<span class=\"a_ms\">广告</span>");
document.writeln("<span class=\"f_close\" id=\"f_close\">关闭X</span>");
document.writeln("</div>");
document.writeln("</div>");
var close_btn = document.getElementById("f_close");
var ffoot = document.getElementById("f_f");
close_btn.onclick = function(){
	if(ffoot){
		ffoot.style.display = "none";
	}
}

function xyshark(i,j){
	var dom =document.getElementById("f_pic");
	j++;
	
	var pos = ['2px','-2px'];
	dom.style.left = pos[i];
	dom.style.bottom = pos[i];
	i++;
	
	if(j > 10){
		dom.style.left = '0px';
		//dom.style.top = '0px';
		dom.style.bottom = '0px';
		return false;
	}
	
	
	if(i == 2) i = 0;
	setTimeout('xyshark('+i+','+j+')',50);
}
//setTimeout('xyshark(0,0)',3000);

setInterval('xyshark(0,0)',3000);*/
//=====================================================================================================
