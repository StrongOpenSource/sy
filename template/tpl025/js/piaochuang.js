//右上悬浮
var url = 'https://999v.jjyl12349.com'
var img = 'https://img.7597a.com/images/643e575622d834a5ba51e4e5.gif'
document.writeln('<style>#id1 {animation-duration: 10000ms;animation-iteration-count: infinite;animation-timing-function: linear;}@keyframes spin {from {transform:rotate(0deg);}to {transform:rotate(360deg);}}</style>')
document.writeln('<div class="id1" id="id1" style="position: fixed; bottom: 42%; z-index: 19999 !important; right: 2px;"><img src="https://s2.loli.net/2022/05/21/zAxwCKkLnFjlaQ8.jpg" onclick="$(\'#id1\').remove()" style="border-radius:50%;position:absolute;top:3px;right:3px;cursor:pointer;width:15px;height:15px;z-index:19000;" id="id1"><a target="_blank" href="'+url+'"><img src="'+img+'" style="margin:10px;border-radius: 15px;border: solid 2px red;" width="90px" height="90px" "></a></div>')

//右下悬浮
var url = 'https://227.jjyl12349.com'
var img = 'https://pic.adsimg1991.com/guanggao/皇冠体育80x80.gif'
document.writeln('<style>#id2 {animation-duration: 10000ms;animation-iteration-count: infinite;animation-timing-function: linear;}@keyframes spin {from {transform:rotate(0deg);}to {transform:rotate(360deg);}}</style>')
document.writeln('<div class="id2" id="id2" style="position: fixed; bottom: 26%; z-index: 19999 !important; right: 2px;"><img src="https://s2.loli.net/2022/05/21/zAxwCKkLnFjlaQ8.jpg" onclick="$(\'#id2\').remove()" style="border-radius:50%;position:absolute;top:3px;right:3px;cursor:pointer;width:15px;height:15px;z-index:19000;" id="id2"><a target="_blank" href="'+url+'"><img src="'+img+'" style="margin:10px;border-radius: 15px;border: solid 2px red;" width="90px" height="90px" "></a></div>')

//左上悬浮
var url = 'https://1_yp.jjyl12349.com'
var img = 'https://pic.adsimg1991.com/tubiao/约炮1.gif'
document.writeln('<style>#id3 {animation-duration: 10000ms;animation-iteration-count: infinite;animation-timing-function: linear;}@keyframes spin {from {transform:rotate(0deg);}to {transform:rotate(360deg);}}</style>')
document.writeln('<div class="id3" id="id3" style="position: fixed; bottom: 42%; z-index: 19999 !important; left: 2px;"><img src="https://s2.loli.net/2022/05/21/zAxwCKkLnFjlaQ8.jpg" onclick="$(\'#id3\').remove()" style="border-radius:50%;position:absolute;top:3px;right:3px;cursor:pointer;width:15px;height:15px;z-index:19000;" id="id3"><a target="_blank" href="'+url+'"><img src="'+img+'" style="margin:10px;border-radius: 15px;border: solid 2px red;" width="90px" height="90px" "></a></div>')

//左下悬浮
/*var url = 'https://0766.jjyl12349.com'
var img = 'https://img.1197999.com/images/642e4aba722263a2f509dde8.gif'
document.writeln('<style>#id4 {animation-duration: 10000ms;animation-iteration-count: infinite;animation-timing-function: linear;}@keyframes spin {from {transform:rotate(0deg);}to {transform:rotate(360deg);}}</style>')
document.writeln('<div class="id4" id="id4" style="position: fixed; bottom: 26%; z-index: 19999 !important; left: 2px;"><img src="https://s2.loli.net/2022/05/21/zAxwCKkLnFjlaQ8.jpg" onclick="$(\'#id4\').remove()" style="border-radius:50%;position:absolute;top:3px;right:3px;cursor:pointer;width:15px;height:15px;z-index:19000;" id="id4"><a target="_blank" href="'+url+'"><img src="'+img+'" style="margin:10px;border-radius: 15px;border: solid 2px red;" width="90px" height="90px" "></a></div>')*/
/*
var piaofuMode = '0'; //显示模式 0为电脑手机都显示  1为电脑显示  2为手机显示
    piaofuTime = '3000', //自动播放延迟秒数，1000等于1秒
    piaofuwidth = '96px', //宽度
    piaofuheight = '96px', //高度
	//下方img后面是图片地址，url后面是点击链接地址
	piaofuIMGArray = [
	  {'img':'https://img.u1332.com/images/63523a805fe50f0585d3ef70.gif','url':'https://ammv85pc.jjyl12349.com'},
	  {'img':'https://pic.adsimg1991.com/tubiao/美眉直播.gif','url':'https://mmzb.jjyl12349.com'},
	],
    piaofuClose = 'data:image/png;base64,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',
	//以下部分勿修改
	piaofuslideIndex = 0,
	piaofuslideStyle = '<style>.piaofuWrap{width:'+piaofuwidth+';height:'+piaofuheight+';z-index:9999999;}.piaofuWrap .piaofuContent{position:relative;width:100%;height:100%}.piaofuContent .piaofuClose{position:absolute;top:5px;right:5px;width:20px;z-index:9999}.piaofuWrap .piaofuContent .piaofuSlide{width:100%;height:100%;}.piaofuWrap .piaofuContent .piaofuSlide img{width:100%;height:100%;border-radius:6px}</style>',
	piaofuHtml = piaofuslideStyle+'<div class="piaofuWrap" id="piaofuWrap"><div class="piaofuContent"><img onClick="closepiaofuWrap();" class="piaofuClose" src="'+piaofuClose+'" />';
	for (i = 0;i < piaofuIMGArray.length; i++) {
	    piaofuHtml +='<div class="piaofuSlide"><a href="'+piaofuIMGArray[i].url+'" target="_blank" rel="noreferrer nofollow"><img src="'+piaofuIMGArray[i].img+'"></a></div>';
	}
	piaofuHtml +='</div></div>';
if(piaofuMode==0){
  document.write(piaofuHtml);
  piaofushowSlides();
  var AdMoveConfig=new Object();
  AdMoveConfig.IsInitialized=false;
  AdMoveConfig.ScrollX=0;
  AdMoveConfig.ScrollY=0;
  AdMoveConfig.MoveWidth=0;
  AdMoveConfig.MoveHeight=0;
  AdMoveConfig.Resize=function(){
    var winsize=GetPageSize();
    AdMoveConfig.MoveWidth=winsize[2];
    AdMoveConfig.MoveHeight=winsize[3];
    AdMoveConfig.Scroll();
  }
  AdMoveConfig.Scroll=function(){
    var winscroll=getPageScroll();
    AdMoveConfig.ScrollX=winscroll[0];
    AdMoveConfig.ScrollY=winscroll[1];
  }
  addEvent(window,"resize",AdMoveConfig.Resize);
  addEvent(window,"scroll",AdMoveConfig.Scroll);
  var piaoboxs=new AdMove("piaofuWrap");
  piaoboxs.Run();
 
}
if(!(navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && piaofuMode==1){
  document.write(piaofuHtml);
  piaofushowSlides();
  var AdMoveConfig=new Object();
  AdMoveConfig.IsInitialized=false;
  AdMoveConfig.ScrollX=0;
  AdMoveConfig.ScrollY=0;
  AdMoveConfig.MoveWidth=0;
  AdMoveConfig.MoveHeight=0;
  AdMoveConfig.Resize=function(){
    var winsize=GetPageSize();
    AdMoveConfig.MoveWidth=winsize[2];
    AdMoveConfig.MoveHeight=winsize[3];
    AdMoveConfig.Scroll();
  }
  AdMoveConfig.Scroll=function(){
    var winscroll=getPageScroll();
    AdMoveConfig.ScrollX=winscroll[0];
    AdMoveConfig.ScrollY=winscroll[1];
  }
  addEvent(window,"resize",AdMoveConfig.Resize);
  addEvent(window,"scroll",AdMoveConfig.Scroll);
  var piaoboxs=new AdMove("piaofuWrap");
  piaoboxs.Run();
  
}

if((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && piaofuMode==2){
  document.write(piaofuHtml);
  piaofushowSlides();
  var AdMoveConfig=new Object();
  AdMoveConfig.IsInitialized=false;
  AdMoveConfig.ScrollX=0;
  AdMoveConfig.ScrollY=0;
  AdMoveConfig.MoveWidth=0;
  AdMoveConfig.MoveHeight=0;
  AdMoveConfig.Resize=function(){
    var winsize=GetPageSize();
    AdMoveConfig.MoveWidth=winsize[2];
    AdMoveConfig.MoveHeight=winsize[3];
    AdMoveConfig.Scroll();
  }
  AdMoveConfig.Scroll=function(){
    var winscroll=getPageScroll();
    AdMoveConfig.ScrollX=winscroll[0];
    AdMoveConfig.ScrollY=winscroll[1];
  }
  addEvent(window,"resize",AdMoveConfig.Resize);
  addEvent(window,"scroll",AdMoveConfig.Scroll);
  var piaoboxs=new AdMove("piaofuWrap");
  piaoboxs.Run();
 
}






function piaofushowSlides(){
    var i;
    var slides = document.getElementsByClassName("piaofuSlide");
    for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
    }
    piaofuslideIndex++;
    if (piaofuslideIndex > slides.length) {piaofuslideIndex = 1}    
        slides[piaofuslideIndex-1].style.display = "block";  
        setTimeout(piaofushowSlides, piaofuTime);
}
function closepiaofuWrap(){
  document.getElementsByClassName('piaofuWrap')[0].remove();
}
function addEvent(obj,evtType,func,cap){
    cap=cap||false;
if(obj.addEventListener){
     obj.addEventListener(evtType,func,cap);
   return true;
}else if(obj.attachEvent){
        if(cap){
         obj.setCapture();
         return true;
     }else{
      return obj.attachEvent("on" + evtType,func);
   }
}else{
   return false;
    }
}
function getPageScroll(){
    var xScroll,yScroll;
if (self.pageXOffset) {
   xScroll = self.pageXOffset;
} else if (document.documentElement && document.documentElement.scrollLeft){
   xScroll = document.documentElement.scrollLeft;
} else if (document.body) {
   xScroll = document.body.scrollLeft;
}
if (self.pageYOffset) {
   yScroll = self.pageYOffset;
} else if (document.documentElement && document.documentElement.scrollTop){
   yScroll = document.documentElement.scrollTop;
} else if (document.body) {
   yScroll = document.body.scrollTop;
}
arrayPageScroll = new Array(xScroll,yScroll);
return arrayPageScroll;
}
function GetPageSize(){
    var xScroll, yScroll;
    if (window.innerHeight && window.scrollMaxY) { 
        xScroll = document.body.scrollWidth;
        yScroll = window.innerHeight + window.scrollMaxY;
    } else if (document.body.scrollHeight > document.body.offsetHeight){
        xScroll = document.body.scrollWidth;
        yScroll = document.body.scrollHeight;
    } else {
        xScroll = document.body.offsetWidth;
        yScroll = document.body.offsetHeight;
    }
    var windowWidth, windowHeight;
    if (self.innerHeight) {
        windowWidth = self.innerWidth;
        windowHeight = self.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) {
        windowWidth = document.documentElement.clientWidth;
        windowHeight = document.documentElement.clientHeight;
    } else if (document.body) {
        windowWidth = document.body.clientWidth;
        windowHeight = document.body.clientHeight;
    } 
    if(yScroll < windowHeight){
        pageHeight = windowHeight;
    } else { 
        pageHeight = yScroll;
    }
    if(xScroll < windowWidth){ 
        pageWidth = windowWidth;
    } else {
        pageWidth = xScroll;
    }
    arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight) 
    return arrayPageSize;
}

function AdMove(id){
    if(!AdMoveConfig.IsInitialized){
        AdMoveConfig.Resize();
        AdMoveConfig.IsInitialized=true;
    }
    var obj=document.getElementById(id);
    obj.style.position="absolute";
    var W=AdMoveConfig.MoveWidth-obj.offsetWidth;
    var H=AdMoveConfig.MoveHeight-obj.offsetHeight;
    var x = W*Math.random(),y = H*Math.random();
    var rad=(Math.random()+1)*Math.PI/6;
    var kx=Math.sin(rad),ky=Math.cos(rad);
    var dirx = (Math.random()<0.5?1:-1), diry = (Math.random()<0.5?1:-1);
    var step = 1;
    var interval;
    this.SetLocation=function(vx,vy){x=vx;y=vy;}
    this.SetDirection=function(vx,vy){dirx=vx;diry=vy;}
    obj.CustomMethod=function(){
        obj.style.left = (x + AdMoveConfig.ScrollX) + "px";
        obj.style.top = (y + AdMoveConfig.ScrollY) + "px";
        rad=(Math.random()+1)*Math.PI/6;
        W=AdMoveConfig.MoveWidth-obj.offsetWidth;
        H=AdMoveConfig.MoveHeight-obj.offsetHeight;
        x = x + step*kx*dirx;
        if (x < 0){dirx = 1;x = 0;kx=Math.sin(rad);ky=Math.cos(rad);} 
        if (x > W){dirx = -1;x = W;kx=Math.sin(rad);ky=Math.cos(rad);}
        y = y + step*ky*diry;
        if (y < 0){diry = 1;y = 0;kx=Math.sin(rad);ky=Math.cos(rad);} 
        if (y > H){diry = -1;y = H;kx=Math.sin(rad);ky=Math.cos(rad);}
    }
    this.Run=function(){
        var delay = 20;
        interval=setInterval(obj.CustomMethod,delay);
        obj.onmouseover=function(){clearInterval(interval);}
        obj.onmouseout=function(){interval=setInterval(obj.CustomMethod, delay);}
    }
}*/