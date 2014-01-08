$(function() {
      BV = new $.BigVideo({useFlashForFirefox:false, container:$('#splash')});
			BV.init();
			BV.show('vids/pinkyrose.mp4', {altSource:'vids/river.ogv', ambient:true});
});