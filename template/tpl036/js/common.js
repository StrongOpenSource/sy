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
  var m_text = document.getElementById("m_text").innerText;
  var torrent_magnet_input = document.getElementById("m_input");
  torrent_magnet_input.value = m_text;
  torrent_magnet_input.select();
  document.execCommand("copy");
  alert("复制成功");
}





