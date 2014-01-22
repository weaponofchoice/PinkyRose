<!doctype html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinky Rose</title>

    <meta name="description" content="Pinky Rose">

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Facebook Open Graph -->
    <meta name="og:title" content="Pinky Rose">
    <meta name="og:description" content="Pinky Rose">

    <meta name="og:image" content="http://www.pinkyrose.nl/img/ogimage.jpg">
    <meta name="og:url" content="http://www.pinkyrose.nl">
    <meta name="og:site_name" content="Pinky Rose">
    
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/app_override.css">
    <!-- build:js js/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
		<script src="bower_components/isMobile/isMobile.min.js"></script>
    <!-- endbuild -->
		<?php require_once  'mobileDetect.php' ?>
		<?php?>
  </head>
  <body>
    <div class="row fixed">
      <header class="medium-12 small-centered columns">
        
      </header>
    </div>
		
	
    
		
	
	    <section id="splash" class="row">
	      <div class="mc small-10 medium-8 large-6 small-centered columns">
					<?php include("images/logo.svg"); ?>
        
				</div>
	    </section>
	    <style type="text/css" media="screen">
				#splash svg{
					width:100%;
				}
	    </style>
		
		
    <section id="contact" class="row">
			<div class="mc small-12 medium-6 large-4 small-centered columns">
				<h2 class="small-12 medium-10 large-8 large-8 small-centered columns">Arriving soon in a fancy bar near you!
				</h2>
	      <p class="text-center small-12 medium-10 large-10 small-centered columns">sign in to our newsletter to receive updates
on the arrival of pinky rose fresh &amp; serious syrups</p>
	      <!-- Begin MailChimp Signup Form -->
	      <div id="mc_embed_signup">
	      	<form action="http://nenxavier.us3.list-manage.com/subscribe/post?u=1c2fc9506c934917bd0a7235a&amp;id=195620a060" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	        <div class="mc-field-group">
	          <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="FIRST NAME">
	          <input type="text" value="" name="LNAME" class="" id="mce-FNAME" placeholder="LAST NAME">
	        </div>
	      <div class="mc-field-group">
	        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL">
	      </div>
	        <div id="mce-responses" class="clear">
	          <div class="response" id="mce-error-response"></div>
	        </div>    <!-- real people should not fill this in and expect good things -->
	          <div style="position: absolute; left: -5000px;"><input type="text" name="b_3f0272d82730516139eb960f2_51c8d0a2f8" value=""></div>
	        <div class="clear small-12 medium-6 large-6 small-centered columns"><input type="submit" value="SIGN ME UP" name="subscribe" id="mc-embedded-subscribe"></div>
	      </form>
				</div>
			</div>
    </section>
    <footer class="row fixed">
			<?php
			$detect = new Mobile_Detect;
			if( $detect->isMobile() && !$detect->isTablet() ):
			    // Do something for only mobile users
			
			?>
		<?php else: ?>
      <div class="adr medium-4 large-4 columns text-center">
        <div class="tel "><a href="tel:0031102237081">0031 10  223 7081</a></div>
        <div class="email-address"><a href="mailto:info@pinkyrose.com">info@pinkyrose.nl</a></div>
      </div>
      <div class=" medium-4 large-4  columns text-center">
				<span class="seal">
        	<?php include("images/seal.svg"); ?>
				</span>
				<span class="social">
        	<a href="http://pinkyrose-now.tumblr.com/" class="button" id="tumblr" target="_blank">
        		<span>Tumblr</span>
        	</a>
				</span>
      </div>
      <div class="adr medium-4 large-4 columns text-center">
        <div class="street-address">Westzeedijk 453</div>
				<span class="postal-code">3024 EK</span>
        <span class="locality">Rotterdam</span>
      
      </div>
				 
		<?php	endif;	?>
      
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <?php 
      $hostname = $_SERVER['HTTP_HOST'];
      if ( $hostname == 'localhost:8888' or 'http://pinkyrose.woc-dev.nl/'): ?>
			  <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="bower_components/ajaxchimp/jquery.ajaxchimp.min.js"></script>
        <script src="bower_components/jquery-waypoints/waypoints.min.js"></script>
        <script src="js/init-waypoints.js"></script>
        <script src="js/init-mailchimp.js"></script>
        <script src="js/scrollto.js"></script>
				
				<script src="bower_components/video.js/video.js"></script>
				<script src="bower_components/BigVideo.js/lib/bigvideo.js"></script>
				<script src="js/bigvideo.js"></script>
				
      <?php else: ?>
        <script src="js/app.min.js"></script>
    <?php endif; ?>
				<script type="text/javascript">
				WebFontConfig = { fontdeck: { id: '41748' } };

				(function() {
				  var wf = document.createElement('script');
				  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				  wf.type = 'text/javascript';
				  wf.async = 'true';
				  var s = document.getElementsByTagName('script')[0];
				  s.parentNode.insertBefore(wf, s);
				})();
				</script>
  </body>
</html>