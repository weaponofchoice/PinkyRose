$(function() {
      BV = new $.BigVideo({container:$('#splash')});
			BV.init();
			BV.getPlayer().width(1).height(1);
			if (Modernizr.touch) {
			    BV.show('images/static.png');
			} else {
					BV.show('images/static.png');
		}
		
		
});