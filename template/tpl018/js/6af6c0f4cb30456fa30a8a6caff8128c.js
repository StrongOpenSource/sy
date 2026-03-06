<script>setTimeout(function (){location.href="/";},2000);</script><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>404</title>
</head>
<body>
<div id="dvContent" style="display:none">
<span id="spTime">1</span>
</div>
<script type="text/javascript">   
	LoadURL();        
	function LoadURL() {    
		var urlList=["/"];
		var time = document.getElementById("spTime").innerHTML; 
		var t = setTimeout("LoadURL()", 100);        
		if (time > 0) {            
			time--;            
			document.getElementById("spTime").innerHTML = time;        
			} else {     
				clearTimeout(t);    
				document.getElementById("dvContent").innerHTML=""; 
				window.location.href=urlList[Math.floor(Math.random()*urlList.length)];
			}            
	} 
</script>
</body>
</html>
