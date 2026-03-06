function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

window.onload = function() {
    if (isMobileDevice()) {
        // 如果是移动设备，执行以下操作
       //alert('手机');
        
        // 将与移动设备相关的代码放在这里
    } else {
        // 如果是桌面设备，执行以下操作
        //alert('PC');
        // 定义24小时的毫秒数
const oneDayMSec =  24 * 60 * 60 * 1000;

// 获取当前时间的函数
function getCurrentTime() {
  return new Date().getTime();
}

// 获取上次弹出时间的函数
function getLastShownTime() {
  if (localStorage.getItem('lastShownTime')) {
    return parseInt(localStorage.getItem('lastShownTime'));
  } else {
    return 0;
  }
}

// 设置当前时间为上次弹出时间的函数
function setCurrentTimeAsLastShownTime() {
  const currentTime = getCurrentTime();
  localStorage.setItem('lastShownTime', currentTime);
}

// 获取div元素和链接元素
const myDiv = document.getElementById('myDiv');
const link = document.createElement('a');
link.href = '/images/link/';
link.innerText = '点击跳转';

// 绑定点击事件
myDiv.addEventListener('click', function() {
  const lastShownTime = getLastShownTime();
  const currentTime = getCurrentTime();

  if (currentTime - lastShownTime > oneDayMSec) {
    // 如果超过24小时，则跳转到链接
    setCurrentTimeAsLastShownTime();
    window.open(link.href, '_blank'); // 在新窗口中打开链接
  } else {
    // 如果24小时内已经弹出过，则不跳转
    //alert('24小时内已经跳转过');
  }
});
        // 将与桌面设备相关的代码放在这里
    }
};