$(function() {
      BV = new $.BigVideo({container:$('#splash')});
			BV.init();
			BV.getPlayer().width(1).height(1);
			if (Modernizr.touch) {
			    BV.show('images/static.jpg');
			} else {
					BV.show('vids/pinkyrose.mp4', {ambient:true});
		}
		
		
});