if $('#contact').length > 0
	$('#contact').waypoint (direction) ->
		if direction is 'down' 
			$('footer').fadeOut()
		if direction is 'up' 
			$('footer').fadeIn()
	,
		offset: '99%'
		
	$('#contact').waypoint (direction) ->
		if direction is 'down'
			$('footer').addClass 'black'
			$('footer, .social').fadeIn()
		if direction is 'up' 
			$('footer').removeClass 'black'
			$('footer, .social').fadeOut()
	,
	offset: '50'