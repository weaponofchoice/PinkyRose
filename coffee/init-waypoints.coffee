if $('#contact').length > 0
	$('#contact').waypoint (direction) ->
		if direction is 'down' 
			$('footer, .seal').fadeOut()
		if direction is 'up' 
			$('footer, .seal').fadeTo(500,1)
	,
		offset: '99%'
		
	$('#contact').waypoint (direction) ->
		if direction is 'down'
			$('footer').addClass 'black'
			$('footer, .social').fadeIn(500,1)
		if direction is 'up' 
			$('footer').removeClass 'black'
			$('footer, .social').fadeOut()
	,
	offset: '50'