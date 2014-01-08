if $('#contact').length > 0
  $('#contact').waypoint (direction) ->
    if direction is 'down'
      $('footer').addClass 'black'
      $('.seal').fadeOut()
    if direction is 'up' 
      $('footer').removeClass 'black'
      $('.seal').fadeIn()
  ,
    offset: '99%'
		
  $('#contact').waypoint (direction) ->
    if direction is 'down'
      $('.social').fadeIn()
    if direction is 'up' 
      $('.social').fadeOut()
  ,
    offset: '50'