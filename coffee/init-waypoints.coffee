if $('#contact').length > 0
	$('#contact').waypoint (direction) ->
		if direction is 'down' 
			$('.seal, .adr').fadeOut()
		if direction is 'up' 
			$('.seal, .adr').fadeIn()
	,
		offset: '99%'
		
	$('#contact').waypoint (direction) ->
		if direction is 'down'
			$('footer').addClass 'black'
			$('.social, .adr').fadeIn()
		if direction is 'up' 
			$('footer').removeClass 'black'
			$('.social, .adr').fadeOut()
	,
	offset: '50'