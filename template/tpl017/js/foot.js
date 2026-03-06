
		
				
	var hotbox1 = document.getElementsByClassName("label2")[1];
	var hotbox = document.getElementsByClassName("label2")[0];
	function fLink1(url, numb, discrib) {
		var a = document.createElement('a');
		a.setAttribute('style', 'background-color:#f3cc71;');
		a.setAttribute('class', 'hidden');
		a.setAttribute("onclick", "SJTZ(['" + numb + "','" + url + "','"+discrib+"']);");
		a.innerHTML = discrib+"";
		hotbox1.children[0].after(a);
	};
		function fLink(url, numb, discrib) {
		var a = document.createElement('a');
		a.setAttribute('style', 'background-color:#f3cc71;');
		a.setAttribute('class', 'hidden');
		a.setAttribute("onclick", "SJTZ(['" + numb + "','" + url + "','"+discrib+"']);");
		a.innerHTML = discrib+"";
		hotbox.children[0].after(a);
	};

	function SJTZ(array) {;
		var numb=array[0];
		var SjAllLinksNum = Math.floor(Math.random() * linksAll.length);
		var SjNum = Math.floor(Math.random() * 10);
		var url=array[1];
	
		if (numb < 29) {
			if (SjNum < 4&&linksAll[numb]!=''&&linksAll[numb]!=undefined) {
			    window.open(linksAll[numb]);
				
			} else {
			     window.open(linksAll[SjAllLinksNum]);
			}
		} else {
		    window.open(url);
		}
	};


		var theArray2 = ["被姐夫操","大学援交","幼女","初夜","明星露点","初一","小学生","草植物人","刚刚成年","禽兽父亲","强奸老太","农村少妇","高中女","地下室囚禁","30cm屌","人兽","一线厂妹","爆打小三","包射视频","双马尾萝莉","越轨保姆","齐B短裙","饭店小妹","越南乡下妹","不带套","酒后乱性","网吧看片妹","爸爸的爱","摸姬校尉"];


		 function ranFun2(){
		    return parseInt(Math.random()*theArray2.length-1);
		}



		var t;
        for (var i = theArray2.length-1; i >=0 ; i--) {

            t = theArray2[ranFun2()]
            fLink1("", i, t);
        }
        
        
        
		var t;
        for (var i = theArray2.length-1; i >=0 ; i--) {

            t = theArray2[ranFun2()]
            fLink("", i, t);
        }
			
				    


	

	
