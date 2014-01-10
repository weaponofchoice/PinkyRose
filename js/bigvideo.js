$(function() {
      BV = new $.BigVideo({useFlashForFirefox:false, container:$('#splash')});
			BV.init();
			
			if (Modernizr.touch) {
			    BV.show('images/static.png');
			} else {
			BV.show('vids/pinkyrose.mp4', {altSource:'vids/river.ogv', ambient:true});
		}
});