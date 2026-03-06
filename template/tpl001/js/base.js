

//视频播放器广告点击跳转
function oninstall() {
	window.location.href = '';
}
if (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion.split(";")[1].replace(/[ ]/g, "").replace("MSIE", "")) < 9) {
	alert("您的浏览器版本过低，请下载IE9或以上版本，推荐使用谷歌浏览器。\r\n或下载" + appName + "，免费无限制观看成人视频。\r\n现在为您跳转...");
	window.location.href = updateUrl;
	throw SyntaxError();
}

// function addScript(url) {
// 	var script = document.createElement("script");
// 	// script.src = url;
// 	// document.body.appendChild(script);
// }





// window.console && window.console.log && (console.log("每一个星球都有一个驱动核心，\n每一种思想都有影响力的种子。\n感受世界的温度，\n年轻的你也能成为改变世界的动力，\n我们珍惜你所有的潜力。\n你的潜力，是改变世界的动力！\n\n"), console.log("%c地球人类最强色情集团期待您的加入：https://Imtoken.xxx/", "color:red"));

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


function geyPageData(page,number,typeId,typeMid,nowPage)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:""};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						subMenu+= '<dl>';
						subMenu+='<dt><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><img class="nature" src="'+response.data.resultList[i].vod_pic+'" data-original="'+response.data.resultList[i].vod_pic+'" alt="'+response.data.resultList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
						subMenu+='<dd><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><h3>'+response.data.resultList[i].vod_name+'</h3></a></dd>'
						subMenu+= '</dl>';
						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData(1,20,'+typeId+','+typeMid+',1)">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
							// 		if(i<nowPage){
											

										
											if(pageCount>=10){
												for(let z = 5 ;z>=1;z--){
													if(Number(nowPage-z)>0){
														subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
													}
												}
												subMenu2 +='<strong>'+nowPage+'</strong>';
												
												if(nowPage<=5){
													let add = 0;
													for(let k = nowPage ;k<10;k++){
														// if(Number(nowPage-k)>0){
															add++;
															subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
														// }
													}
												}else{
													for(let s = 1;s<=5;s++){
													
														if(Number(nowPage+s)<=pageCount){
															subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+')">'+(Number(nowPage+s))+'</a>';
														}
														
													}
												}
													
										
											}else{
												for(let z = nowPage ;z>=1;z--){
													if(Number(nowPage-z)>0){
														subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
													}
												}
												subMenu2 +='<strong>'+nowPage+'</strong>';
													let add = 0;
													for(let k = nowPage ;k<pageCount;k++){
														// if(Number(nowPage-k)>0){
															add++;
															subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
														// }
													}
											}
										
									
								
									// }else{
									// 	subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage-i))+',20,'+typeId+','+typeMid+','+i+')">'+(Number(nowPage+1))+'</a>';
								
									// }
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();

						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						console.log("typeId = "+typeId)

						
				var name = response.data.t_Name +"-熊猫成人网";
				SeoUpdate(name, name, name);


			}
		}
	}
	xhr.send(json);

}

function geyPageData2(page,number,typeId,typeMid,nowPage,content,type)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"content"+content)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:decodeURI(content),type:type};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						subMenu+= '<dl>';
						subMenu+='<dt><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><img class="nature" src="'+response.data.resultList[i].vod_pic+'" data-original="'+response.data.resultList[i].vod_pic+'" alt="'+response.data.resultList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
						subMenu+='<dd><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><h3>'+response.data.resultList[i].vod_name+'</h3></a></dd>'
						subMenu+= '</dl>';
						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData2(1,20,'+typeId+','+typeMid+',1,\''+decodeURI(content)+'\','+type+')">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData2('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+',\''+decodeURI(content)+'\','+type+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
							// 		if(i<nowPage){
											

								
										
									if(pageCount>=10){
										for(let z = 5 ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')")>'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
										
										if(nowPage<=5){
											let add = 0;
											for(let k = nowPage ;k<10;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')")>'+(Number(nowPage+add))+'</a>';
												// }
											}
										}else{
											for(let s = 1;s<=5;s++){
											
												if(Number(nowPage+s)<=pageCount){
													subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData2('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+',\''+decodeURI(content)+'\','+type+')")>'+(Number(nowPage+s))+'</a>';
												}
												
											}
										}
											
								
									}else{
										for(let z = nowPage ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')")>'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
											let add = 0;
											for(let k = nowPage ;k<pageCount;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')")>'+(Number(nowPage+add))+'</a>';
												// }
											}
									}
								
								
									// }else{
									// 	subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+(Number(nowPage-i))+',20,'+typeId+','+typeMid+','+i+')">'+(Number(nowPage+1))+'</a>';
								
									// }
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" href="javascript:void(0)" onclick="+geyPageData('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData2('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+',\''+decodeURI(content)+'\','+type+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageData2('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+',\''+decodeURI(content)+'\','+type+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();

						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						
						
						

			}
		}
	}
	xhr.send(json);

}

function geyPagePhoto(page,number,typeId,typeMid,nowPage)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:""};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						subMenu+= '<dl>';
						subMenu+='<dt><a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].art_name+'"" title="'+response.data.resultList[i].art_name+'"><img class="nature" src="'+response.data.resultList[i].art_pic+'" data-original="'+response.data.resultList[i].vod_pic+'" alt="'+response.data.resultList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
						subMenu+='<dd><a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].art_name+'""><h3>'+response.data.resultList[i].art_name+'</h3></a></dd>'
						subMenu+= '</dl>';
						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto(1,20,'+typeId+','+typeMid+',1)">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
								
								
									if(pageCount>=10){
										for(let z = 5 ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
										
										if(nowPage<=5){
											let add = 0;
											for(let k = nowPage ;k<10;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
										}else{
											for(let s = 1;s<=5;s++){
											
												if(Number(nowPage+s)<=pageCount){
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+')">'+(Number(nowPage+s))+'</a>';
												}
												
											}
										}
											
								
									}else{
										for(let z = nowPage ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
											let add = 0;
											for(let k = nowPage ;k<pageCount;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
									}
								
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();

						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						
						var name = response.data.t_Name +"-熊猫成人网";
						SeoUpdate(name, name, name);

			}
		}
	}
	xhr.send(json);

}


function geyPagePhoto2(page,number,typeId,typeMid,nowPage,content,type)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:decodeURI(content),type:type};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						subMenu+= '<dl>';
						subMenu+='<dt><a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].art_name+'"" title="'+response.data.resultList[i].art_name+'"><img class="nature" src="'+response.data.resultList[i].art_pic+'" data-original="'+response.data.resultList[i].vod_pic+'" alt="'+response.data.resultList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
						subMenu+='<dd><a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].art_name+'""><h3>'+response.data.resultList[i].art_name+'</h3></a></dd>'
						subMenu+= '</dl>';
						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto2(1,20,'+typeId+','+typeMid+',1,\''+decodeURI(content)+'\','+type+')">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto2('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+',\''+decodeURI(content)+'\','+type+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
								
								
									if(pageCount>=10){
										for(let z = 5 ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
										
										if(nowPage<=5){
											let add = 0;
											for(let k = nowPage ;k<10;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
										}else{
											for(let s = 1;s<=5;s++){
											
												if(Number(nowPage+s)<=pageCount){
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto2('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+s))+'</a>';
												}
												
											}
										}
											
								
									}else{
										for(let z = nowPage ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
											let add = 0;
											for(let k = nowPage ;k<pageCount;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
									}
								
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" onclick="+geyPagePhoto('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto2('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+',\''+decodeURI(content)+'\','+type+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPagePhoto2('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+',\''+decodeURI(content)+'\','+type+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();


						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						
			}
		}
	}
	xhr.send(json);

}

function geyPageXS(page,number,typeId,typeMid,nowPage)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:""};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
								subMenu+= '<div class="Thenovelisunderlined">'+'<a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+2+'">'+response.data.resultList[i].art_name+'</a>';
								subMenu+='</div>'
							// subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }

						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS(1,20,'+typeId+','+typeMid+',1)">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
								
								
									if(pageCount>=10){
										for(let z = 5 ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
										
										if(nowPage<=5){
											let add = 0;
											for(let k = nowPage ;k<10;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
										}else{
											for(let s = 1;s<=5;s++){
											
												if(Number(nowPage+s)<=pageCount){
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+')">'+(Number(nowPage+s))+'</a>';
												}
												
											}
										}
											
								
									}else{
										for(let z = nowPage ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
											let add = 0;
											for(let k = nowPage ;k<pageCount;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
									}
								
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();

						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						

						var name = response.data.t_Name +"-熊猫成人网";
						SeoUpdate(name, name, name);
			}
		}
	}
	xhr.send(json);

}

function geyPageXS2(page,number,typeId,typeMid,nowPage,content,type)
{

	
	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:decodeURI(content),type:type};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
								subMenu+= '<div class="Thenovelisunderlined">'+'<a href="'+"imageShow.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+2+'">'+response.data.resultList[i].art_name+'</a>';
								subMenu+='</div>'
							// subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }

						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
						getId('ShowBox').innerHTML = subMenu;


						let pageCount = Math.ceil(newsData/20); //根据数据的长度计算总共几页


						console.log("pageCoun="+pageCount)

						console.log("newsData="+newsData)
						var subMenu2 = '';
						
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS2(1,20,'+typeId+','+typeMid+',1,\''+decodeURI(content)+'\','+type+')">首页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS2('+(nowPage>1?nowPage-1:1)+',20,'+typeId+','+typeMid+','+(nowPage>1?nowPage-1:1)+',\''+decodeURI(content)+'\','+type+')">上一页</a>';

						// if(nowPage>10){
							// for(let i = 1;i<=10;i++){
							// 	if(i==nowPage){
							// 		subMenu2 +='<strong>'+i+'</strong>';
							// 	}else{
								
								
									if(pageCount>=10){
										for(let z = 5 ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
										
										if(nowPage<=5){
											let add = 0;
											for(let k = nowPage ;k<10;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
										}else{
											for(let s = 1;s<=5;s++){
											
												if(Number(nowPage+s)<=pageCount){
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS2('+(Number(nowPage+s))+',20,'+typeId+','+typeMid+','+(Number(nowPage+s))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+s))+'</a>';
												}
												
											}
										}
											
								
									}else{
										for(let z = nowPage ;z>=1;z--){
											if(Number(nowPage-z)>0){
												subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS2('+(Number(nowPage-z))+',20,'+typeId+','+typeMid+','+(Number(nowPage-z))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage-z))+'</a>';
											}
										}
										subMenu2 +='<strong>'+nowPage+'</strong>';
											let add = 0;
											for(let k = nowPage ;k<pageCount;k++){
												// if(Number(nowPage-k)>0){
													add++;
													subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS2('+(Number(nowPage+add))+',20,'+typeId+','+typeMid+','+(Number(nowPage+add))+',\''+decodeURI(content)+'\','+type+')">'+(Number(nowPage+add))+'</a>';
												// }
											}
									}
								
							// 	}
	
							// }

						// }else{
						// 	for(let i = 1;i<=10;i++){
						// 		if(i==nowPage){
						// 			subMenu2 +='<strong>'+i+'</strong>';
						// 		}else{
						// 			subMenu2 +='<a class="abiaoqian" onclick="+geyPageXS('+i+',20,'+typeId+','+typeMid+','+i+')">'+i+'</a>';
						// 		}
	
						// 	}

						// }
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS2('+(nowPage<pageCount?nowPage+1:nowPage)+',20,'+typeId+','+typeMid+','+(nowPage<pageCount?nowPage+1:nowPage)+',\''+decodeURI(content)+'\','+type+')">下一页</a>';
						subMenu2 +='<a class="abiaoqian" onclick="geyPageXS2('+pageCount+',20,'+typeId+','+typeMid+','+pageCount+',\''+decodeURI(content)+'\','+type+')">尾页</a>';
						getId('selectPage').innerHTML = subMenu2;goTop();

						var subMenu3 = newsData
						getId('size').innerHTML = subMenu3;
						var subMenu4 = response.data.t_Name;
						
						getId('type').innerHTML = '<i class="icon-fire"></i>'+subMenu4;
						

			}
		}
	}
	xhr.send(json);

}

function getPlayer(id,typeId,xl)
{

	
	// init() //获取线路x
	console.log("id"+id+"typeId"+typeId)
	var data = {command: "WEB_GET_INFO_DETAIL",type_Mid:typeId,id:id,languageType:"CN"};
	var json = JSON.stringify(data);
	var num=Math.floor(Math.random()*2+1);
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var playUrl = "";
                var playImgUrl = "";
				if(null != xl){
                  playImgUrl = xl1[response.data.result.vod_server_id].LINK_2+response.data.result.vod_pic;
					if(xl == 1){
						playUrl = xl1[response.data.result.vod_server_id].LINK_1+response.data.result.vod_url;
					}else if(xl ==2){
						playUrl = xl1[response.data.result.vod_server_id].LINK_2+response.data.result.vod_url;
					}else if(xl ==3){
						playUrl = xl1[response.data.result.vod_server_id].LINK_3+response.data.result.vod_url;
					}else{
						if(num == 1){
							playUrl = xl1[response.data.result.vod_server_id].LINK_1+response.data.result.vod_url;
							console.log(1);
						}else if(num == 2){
							playUrl = xl1[response.data.result.vod_server_id].LINK_2+response.data.result.vod_url;
							console.log(2);
						}else{
							playUrl = xl1[response.data.result.vod_server_id].LINK_1+response.data.result.vod_url;
							console.log(3);
						}
					}
				}
				console.log("xl:"+xl)
				console.log("xl1:"+id)
				console.log("payUrl:"+playUrl)
				console.log("payUrl2:"+xl2+response.data.result.vod_pic)
				//var dp = new DPlayer({
					//element: document.getElementById('player1'),                       // 可选，player元素
					//autoplay: false,                                                   // 可选，自动播放视频，不支持移动浏览器
					//theme: '#FADFA3',                                                  // 可选，主题颜色，默认: #b7daff
					//loop: true,                                                        // 可选，循环播放音乐，默认：true
					//lang: 'zh',                                                        // 可选，语言，`zh'用于中文，`en'用于英语，默认：Navigator 
					// screenshot: true,                                                  // 可选，启用截图功能，默认值：false，注意：如果设置为
					//hotkey: true,                                                      // 可选，绑定热键，包括左右键和空格，默认值：true
					//preload: 'none',                                                   // 可选，预加载的方式可以是'none''metadata''auto'，默认
					//video: {                                              // 必需，视频信息
						//url: playUrl,                                         // 必填，视频网址
						//pic: xl1[response.data.result.vod_server_id].LINK_2+response.data.result.vod_pic                                          // 可选，视频截图
					//}
				//});
              		const config = {
					"id": "player1",
					"url": playUrl,
					"playsinline": true,
					"poster": playImgUrl,
					"plugins": [],
					"fluid": true,
					"autoplay": false,
					"playbackRate": [
							  0.5,
							  1,
							  2,
							  3,
							  4
					]
				  }
				  config.plugins.push(HlsPlayer);
				  let player = new Player(config);
		 const title = document.getElementById('titleH');
		 title.innerHTML=response.data.result.vod_name;

		 var vod_name = response.data.result.vod_name;
		SeoUpdate(vod_name, vod_name, vod_name);
		 var subMenu2 = '';
		 for(var i in response.data.resultLoveList)
		 {
			 if (i.length > 0) {
				 // menuData.sort(randomsort);
				 // subMenu += '<dl>';
				 // subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
				 // console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
				 // for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
				 // 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
				 // }
				 // subMenu += '</dl>';

				 subMenu2+= '<dl>';
				 subMenu2+='<dt><a href="'+"moviePlayer.html?"+"id="+response.data.resultLoveList[i].id+"&type_Mid="+response.data.resultLoveList[i].type_Mid+'" title="'+response.data.resultLoveList[i].vod_name+'"><img class="nature" src="'+response.data.resultLoveList[i].vod_pic+'" data-original="'+response.data.resultLoveList[i].vod_pic+'" alt="'+response.data.resultLoveList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
				 subMenu2+='<dd><a href="'+"moviePlayer.html?"+"id="+response.data.resultLoveList[i].id+"&type_Mid="+response.data.resultLoveList[i].type_Mid+'" title="'+response.data.resultLoveList[i].vod_name+'"><h3>'+response.data.resultLoveList[i].vod_name+'</h3></a></dd>'
				 subMenu2+= '</dl>';
				 // <dl>
				 // <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
				 // <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
				 // </dl>

				 
			 }
		 }


		 
		 var subMenu3 = '';
		 subMenu3+= ' <div class="fl gap10">';
		 subMenu3+= ' <div class="aaf5d2ae7f point"><a href="'+"moviePlayer.html?"+"id="+id+"&type_Mid="+typeId+"&xl="+1+'">国内线路1</a></div>';
		 subMenu3+= '<div class="aaf5d2ae7f point"><a href="'+"moviePlayer.html?"+"id="+id+"&type_Mid="+typeId+"&xl="+2+'">国内线路2</a></div>';
		 subMenu3+= '<div class="aaf5d2ae7f point"><a href="'+"moviePlayer.html?"+"id="+id+"&type_Mid="+typeId+"&xl="+3+'">海外线路</a></div>';
		 subMenu3+= ' </div>	';
		 getId('xl').innerHTML = subMenu3;
		
	



				 getId('cnxh').innerHTML = subMenu2;

			}
		}
	}
	xhr.send(json);

}

function SeoUpdate(SeoTitle, SeoKeywords, SeoDescription) {
	let _headDom = '',_title = '',_meta = ''; 

	_headDom = document.getElementsByTagName('head')[0]; //获取head节点
	_title = _headDom.getElementsByTagName("title")[0];  //获取head节点下的title节点
	_meta = _headDom.getElementsByTagName("meta"); //获取head节点下的meta节点，它一般是一个数组

	_title.innerText = SeoTitle;
	for (let index = 0; index < _meta.length; index++) { 
		switch (_meta[index].httpEquiv) {
			case 'keywords':
				_meta[index].content = SeoKeywords;
				break;
			case 'description':
				_meta[index].content = SeoDescription;
				break;

			default:
				break;
		}
	} 
}

function getImage3(id,typeId)
{

	
	console.log("id"+id+"typeId"+typeId)
	var data = {command: "WEB_GET_INFO_DETAIL",type_Mid:typeId,id:id,languageType:"CN"};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);

				
				var subMenu = '';
				var subMenu2 = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						// subMenu += '<dl>';
						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }
						// subMenu += '</dl>';

						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
								// subMenu+='<img class="nature" src="./static/images/loading.svg" data-original="'+response.data.result.art_pic+" alt="+response.data.result.art_name+'"></img>';
								
							// subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
						// }

						// <dl>
						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
						// </dl>

						
					}
				}
				subMenu+=response.data.result.art_url;
						getId('ShowBox').innerHTML = subMenu;

				
		 const title = document.getElementById('titleH');
		 title.innerHTML=response.data.result.art_name;
		 var art_name = response.data.result.art_name;
		SeoUpdate(art_name, art_name, art_name);

		 subMenu2 +='<a href="'+"imageShow.html?"+"id="+response.data.result.before_art_id+"&type_Mid="+2+'" class="prev">上一篇<span class="mobile">:<h2>'+response.data.result.before_art_name+'</h2></span></a>'
		 subMenu2 +='<a href="'+"imageShow.html?"+"id="+response.data.result.after_art_id+"&type_Mid="+2+'" class="next">下一篇<span class="mobile">:<h2>'+response.data.result.after_art_name+'[63P]</h2></span></a>'
				
		 getId('nextAfter').innerHTML = subMenu2;
		 getId('nextAfter2').innerHTML = subMenu2;
			}
		}
	}
	xhr.send(json);

}


function getId(idName) {
	return document.getElementById(idName);
}
function init(){
	var data = {name: "John", age: 31, city: "New York"};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/getDataInit", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				for(var i in response.data.menu0ListMap)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						subMenu += '<dl>';
						subMenu += '<dt><a href="'+response.data.menu0ListMap[i].href+'?typeId='+response.data.menu0ListMap[i].typeId+'&typeMid='+response.data.menu0ListMap[i].typeMid+'" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {

							var typeId = getQueryVariable("typeId");
							if(null!=typeId && typeId == response.data.menu0ListMap[i].menu2List[z].typeId2){
									subMenu += '<dd><a class="cur" id="'+response.data.menu0ListMap[i].menu2List[z].typeId2+'" href="' + response.data.menu0ListMap[i].menu2List[z].href+'?typeId='+ response.data.menu0ListMap[i].menu2List[z].typeId2+"&typeMid="+  response.data.menu0ListMap[i].menu2List[z].typeMid2+ '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
							}else{
								subMenu += '<dd><a id="'+response.data.menu0ListMap[i].menu2List[z].typeId2+'" href="' + response.data.menu0ListMap[i].menu2List[z].href+'?typeId='+ response.data.menu0ListMap[i].menu2List[z].typeId2+"&typeMid="+  response.data.menu0ListMap[i].menu2List[z].typeMid2+ '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
							}
						
						}
						subMenu += '</dl>';
					}
				}

				if(response.data.webInfoMationPoMap!=null&&response.data.webInfoMationPoMap.length>0){
					onlineHref = response.data.webInfoMationPoMap.TG[0][0];
				}
						
						xl1 = response.data.macVodLinkMap;
						// getId('banner1').innerHTML = ' <a href="'+response.data.uploadDetailPoMap.BANNER_1[0].link+'" target="_blank" rel="nofollow"><img src="'+response.data.uploadDetailPoMap.BANNER_1[0].imgName+'" alt=""></a>';

						getId('menuBox').innerHTML = subMenu;


			}
		}
	}
	xhr.send(json);
}


function initPlayer(){
	var data = {name: "John", age: 31, city: "New York"};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/getDataInit", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				// console.log("xhr.responseText:"+xhr.responseText)
				// console.log("response:"+response.data.menu0ListMap)

				var subMenu = '';
				for(var i in response.data.menu0ListMap)
				{
					if (i.length > 0) {
						// menuData.sort(randomsort);
						subMenu += '<dl>';
						subMenu += '<dt><a href="'+response.data.menu0ListMap[i].href+'?typeId='+response.data.menu0ListMap[i].typeId+'&typeMid='+response.data.menu0ListMap[i].typeMid+'" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
						console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
						for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {

							var typeId = getQueryVariable("typeId");
							if(null!=typeId && typeId == response.data.menu0ListMap[i].menu2List[z].typeId2){
									subMenu += '<dd><a class="cur" id="'+response.data.menu0ListMap[i].menu2List[z].typeId2+'" href="' + response.data.menu0ListMap[i].menu2List[z].href+'?typeId='+ response.data.menu0ListMap[i].menu2List[z].typeId2+"&typeMid="+  response.data.menu0ListMap[i].menu2List[z].typeMid2+ '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
							}else{
								subMenu += '<dd><a id="'+response.data.menu0ListMap[i].menu2List[z].typeId2+'" href="' + response.data.menu0ListMap[i].menu2List[z].href+'?typeId='+ response.data.menu0ListMap[i].menu2List[z].typeId2+"&typeMid="+  response.data.menu0ListMap[i].menu2List[z].typeMid2+ '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
							}
						
						}
						subMenu += '</dl>';
					}
				}

				if(response.data.webInfoMationPoMap!=null&&response.data.webInfoMationPoMap.length>0){
					onlineHref = response.data.webInfoMationPoMap.TG[0][0];
				}
						xl1 = response.data.macVodLinkMap;
						// getId('banner1').innerHTML = ' <a href="'+response.data.uploadDetailPoMap.BANNER_1[0].link+'" target="_blank" rel="nofollow"><img src="'+response.data.uploadDetailPoMap.BANNER_1[0].imgName+'" alt=""></a>';

						getId('menuBox').innerHTML = subMenu;
						var type_Mid = getQueryVariable("type_Mid");
    var id2 = getQueryVariable("id");
    var xl = getQueryVariable("xl");
	// setTimeout(2000);
    getPlayer(id2,type_Mid,xl)//加载播放器


			}
		}
	}
	xhr.send(json);
}

// function geyPageData(page,number,typeId,typeMid,nowPage)
// {

	
// 	console.log("page="+page+"number"+number+"typeMid"+typeMid+"nowPage"+nowPage)
// 	var data = {command: "WEB_GET_INFO", pageNumber: page, RecordsPage: number,typeId:typeId,typeMid:typeMid,languageType:"CN",content:""};
// 	var json = JSON.stringify(data);

// 	var xhr = new XMLHttpRequest();
// 	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
// 	xhr.setRequestHeader("Content-type", "application/json");

// 	xhr.onreadystatechange = function(){
// 		if(xhr.readyState === XMLHttpRequest.DONE){
// 			if(xhr.status === 200){
// 				var data = xhr.responseText
// 				var response = JSON.parse(data);
// 				var menu0ListMap = xhr.responseText
				
// 				// console.log("xhr.responseText:"+xhr.responseText)
// 				// console.log("response:"+response.data.menu0ListMap)

// 				var subMenu = '';
// 				var newsData = response.data.count;
// 				for(var i in response.data.resultList)
// 				{
// 					if (i.length > 0) {
// 						// menuData.sort(randomsort);
// 						// subMenu += '<dl>';
// 						// subMenu += '<dt><a href="/" target="_blank" rel="nofollow">'+response.data.menu0ListMap[i].typeName+'</a></dt>';
// 						// console.log("response.data.menu0ListMap[i].length"+response.data.menu0ListMap[i].length)
// 						// for (var z = 0; z < response.data.menu0ListMap[i].menu2List.length; z++) {
// 						// 	subMenu += '	<dd><a href="' + response.data.menu0ListMap[i].menu2List[z].href+'?serach=123' + '"rel="nofollow">' +  response.data.menu0ListMap[i].menu2List[z].typeName2 + '</a></dd>';
// 						// }
// 						// subMenu += '</dl>';

// 						subMenu+= '<dl>';
// 						subMenu+='<dt><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><img class="nature" src="'+response.data.resultList[i].vod_pic+'" data-original="'+response.data.resultList[i].vod_pic+'" alt="'+response.data.resultList[i].vod_name+'" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>'
// 						subMenu+='<dd><a href="'+"moviePlayer.html?"+"id="+response.data.resultList[i].id+"&type_Mid="+response.data.resultList[i].type_Mid+'" title="'+response.data.resultList[i].vod_name+'"><h3>'+response.data.resultList[i].vod_name+'</h3></a></dd>'
// 						subMenu+= '</dl>';
// 						// <dl>
// 						// <dt><a href="./video/shipin/111533.html" title="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师"><img class="nature" src="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" data-original="https://i.slgfjzz.com/20220105/c247889849d9d692850c37576f2812bc.jps" alt="突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师" style="transition: all 1s ease 0s; opacity: 1;"><i></i></a></dt>
// 						// <dd><a href="./video/shipin/111533.html"><h3>突袭女优计划EP9AV篇.袁子仪杨柳.欲火难耐逆推摄影师</h3></a></dd>
// 						// </dl>

						
// 					}
// 				}
// 						getId('zxsp').innerHTML = subMenu;



// 			}
// 		}
// 	}
// 	xhr.send(json);

// }

function getHomeV()
{
	var data = {command: "WEB_GET_ALL",languageType:"CN",content:""};
	var json = JSON.stringify(data);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://spiderscloudcn2.aaaaaaaaaaa.com/forward", true);
	xhr.setRequestHeader("Content-type", "application/json");

	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				var data = xhr.responseText
				var response = JSON.parse(data);
				var menu0ListMap = xhr.responseText
				
				var subMenu = '';
				var newsData = response.data.count;
				for(var i in response.data.resultList)
				{
					if(response.data.resultList[i].t_type == "M_VOIDE"){

						subMenu+= '<div class="wrap">';
						subMenu+= '<div class="mod index-list">';
						subMenu+= '<div class="title">';
						subMenu+= '<h3><i class="icon-fire"></i><a href="'+response.data.resultList[i].href+"?typeId="+response.data.resultList[i].type_id+'&typeMid='+response.data.resultList[i].type_Mid+'">最新'+response.data.resultList[i].t_Name+'</a></h3>';
						subMenu+= '<a class="total" href="'+response.data.resultList[i].href+"?typeId="+response.data.resultList[i].type_id+'&typeMid='+response.data.resultList[i].type_Mid+'">查看更多&gt;&gt;</a>';
						subMenu+= '</div>';
						subMenu+= '<div class="row col5 clearfix" id ="">';
						for(var z in response.data.resultList[i].t_list){
							subMenu+= '<dl>';
							subMenu+= '<dt><a href="'+response.data.resultList[i].t_list[z].href+'?id='+response.data.resultList[i].t_list[z].id+'&type_Mid='+response.data.resultList[i].t_list[z].type_Mid+'" title="'+response.data.resultList[i].t_list[z].vod_name+'"><img class="nature" src="'+response.data.resultList[i].t_list[z].vod_pic+'" data-original="'+response.data.resultList[i].t_list[z].vod_pic+'" alt="'+response.data.resultList[i].t_list[z].vod_name+'"></a></dt>';
							subMenu+= '<dd><a href="'+response.data.resultList[i].t_list[z].href+'?id='+response.data.resultList[i].t_list[z].id+'&type_Mid='+response.data.resultList[i].t_list[z].type_Mid+'" title="'+response.data.resultList[i].t_list[z].vod_name+'"><h3>'+response.data.resultList[i].t_list[z].vod_name+'</h3></a></dd>';
							subMenu+= '</dl>';
						}



						subMenu+= '</div>';
						subMenu+= '</div>';
						subMenu+= '</div>';

					}

					
					if(response.data.resultList[i].type_id == "4"){

						subMenu+= '<div class="wrap">';
						subMenu+= '<div class="mod index-list">';
						subMenu+= '<div class="title">';
						subMenu+= '<h3><i class="icon-fire"></i><a href="'+response.data.resultList[i].href+"?typeId="+response.data.resultList[i].type_id+'&typeMid='+response.data.resultList[i].type_Mid+'">最新'+response.data.resultList[i].t_Name+'</a></h3>';
						subMenu+= '<a class="total" href="'+response.data.resultList[i].href+"?typeId="+response.data.resultList[i].type_id+'&typeMid='+response.data.resultList[i].type_Mid+'">查看更多&gt;&gt;</a>';
						subMenu+= '</div>';
						subMenu+= '<div class="row col6 clearfix" id ="">';
						for(var z in response.data.resultList[i].t_list){
							subMenu+= '<dl>';
							subMenu+= '<dt><a href="'+response.data.resultList[i].t_list[z].href+'?id='+response.data.resultList[i].t_list[z].id+'&type_Mid='+response.data.resultList[i].t_list[z].type_Mid+'" title="'+response.data.resultList[i].t_list[z].art_name+'"><img class="nature" src="'+response.data.resultList[i].t_list[z].art_pic+'" data-original="'+response.data.resultList[i].t_list[z].art_pic+'" alt="'+response.data.resultList[i].t_list[z].art_name+'"></a></dt>';
							subMenu+= '<dd><a href="'+response.data.resultList[i].t_list[z].href+'?id='+response.data.resultList[i].t_list[z].id+'&type_Mid='+response.data.resultList[i].t_list[z].type_Mid+'" title="'+response.data.resultList[i].t_list[z].art_name+'"><h3>'+response.data.resultList[i].t_list[z].art_name+'</h3></a></dd>';
							subMenu+= '</dl>';
						}



						subMenu+= '</div>';
						subMenu+= '</div>';
						subMenu+= '</div>';

					}


				}
				getId('homeWrap').innerHTML = subMenu;
				// getId('homeShowBox1').innerHTML = subMenu2;

			}
		}
	}
	xhr.send(json);

}


function isMobile2() {
	let flag = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	return flag;
}

var body = document.body;
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
