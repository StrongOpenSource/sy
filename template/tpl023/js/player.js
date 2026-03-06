function get_data(data){
    var video = document.getElementById('video');
    if(Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(data["play_url"]);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
        video.play();
    });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = data["play_url"];
        video.addEventListener('loadedmetadata',function() {
        video.play();
        });
    }
}