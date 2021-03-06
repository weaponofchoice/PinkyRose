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
    
		<link rel="stylesheet" href="//f.fontdeck.com/s/css/uH5+KWQnibDTJRYggGJ9XZLTAgw/<?php echo $_SERVER['SERVER_NAME']; ?>/41748.css" type="text/css" />
		
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/app_override.css">
    <!-- build:js js/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
		<script src="bower_components/isMobile/isMobile.min.js"></script>
    <!-- endbuild -->
		<?php require_once  'Mobile_Detect.php' ?>
		<?php?>
  </head>
  <body>
    
		
		<?php
			 $detect = new Mobile_Detect;
			 if( $detect->isMobile() && !$detect->isTablet() ):
		 
	
		?>
    <header class="row absolute">
      <div class="adr medium-4 large-4 columns text-center">
       
      </div>
      <div class=" medium-4 large-4  columns text-center">
				<span class="seal">
        	<?php include("images/seal.svg"); ?>
				</span>
      </div>
      <div class="adr medium-4 large-4 columns text-center">
        
    
      </div>
    </header>
		<?php else: ?>
			
			
			<?php
			$detect = new Mobile_Detect;
			if( $detect->isTablet() ):
			    // Do something for only mobile users
		
			?>
		
	    <header class="row absolute">
	      <div class="adr medium-4 large-4 columns text-center">
	        <div class="tel "><a href="tel:0031102237081">0031 10  223 7081</a></div>
	        <div class="email-address"><a href="mailto:info@pinkyrose.nl">info@pinkyrose.nl</a></div>
	      </div>
	      <div class=" medium-4 large-4  columns text-center">
					<span class="seal">
	        	<?php include("images/seal.svg"); ?>
					</span>
	      </div>
	      <div class="adr medium-4 large-4 columns text-center">
	        <div class="street-address">Westzeedijk 453</div>
					<span class="postal-code">3024 EK</span>
	        <span class="locality">Rotterdam</span>
      
	      </div>
	    </header>

			<?php else: ?>
				
		    <header class="desktop row fixed">
		      <div class="adr medium-4 large-4 columns text-center">
		        <div class="tel "><a href="tel:0031102237081">0031 10  223 7081</a></div>
		        <div class="email-address"><a href="mailto:info@pinkyrose.nl">info@pinkyrose.nl</a></div>
		      </div>
		      <div class=" medium-4 large-4  columns text-center">
						<span class="seal seal-desk">
		        	<?php include("images/seal.svg"); ?>
						</span>
						<span class="social social-desk">
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
		    </header>
				
			<?php	endif;	?>	
			
    
		<?php	endif;	?>
  
		
		
    
		<?php
		$detect = new Mobile_Detect;
		if (  $detect->isMobile()  ) :
		    // Do something for only mobile users
		
		?>
	    <section id="splash-static" class="row">
	      <div class="mc small-10 medium-8 large-6 small-centered columns">
					<?php include("images/logo.svg"); ?>
      
				</div>
	    </section>
	
	   
		<?php else: ?>
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
		<?php	endif;	?>
		
		
		
		
		
    <section id="contact" class="row">
			<div class="mc small-12 medium-6 large-4 small-centered columns">
				<h2 class="small-12 medium-10 large-8 large-8 small-centered columns">Arriving soon in a fancy bar near you!
				</h2>
	      <p class="text-center small-12 medium-10 large-10 small-centered columns">sign in to our newsletter to receive updates
on the arrival of pinky rose fresh &amp; serious syrups</p>
	      <!-- Begin MailChimp Signup Form -->
	      <div id="mc_embed_signup">
	      	<form action="http://pinkyrose.us3.list-manage.com/subscribe/post?u=653887f03d70d0fb992ea2a94&amp;id=c1672b9ebe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
	          <div style="position: absolute; left: -5000px;"><input type="text" name="b_653887f03d70d0fb992ea2a94_c1672b9ebe" value=""></div>
	        <div class="clear small-12 medium-6 large-6 small-centered columns"><input type="submit" value="SIGN ME UP" name="subscribe" id="mc-embedded-subscribe"></div>
	      </form>
				</div>
			</div>
    </section>
    <footer class="row absolute relative black">
		<?php
		$detect = new Mobile_Detect;
		if( $detect->isMobile() && !$detect->isTablet() ):
		    // Do something for only mobile users
		
		?>
		
    <div class="adr medium-4 large-4 columns text-center">
      <div class="tel "><a href="tel:0031102237081">0031 10  223 7081</a></div>
      <div class="email-address"><a href="mailto:info@pinkyrose.nl">info@pinkyrose.nl</a></div>
    </div>
   
    <div class="adr medium-4 large-4 columns text-center">
      <div class="street-address">Westzeedijk 453</div>
			<span class="postal-code">3024 EK</span>
      <span class="locality">Rotterdam</span>
  
    </div>
    <div class=" medium-4 large-4  columns text-center">
			<span class="social">
      	<a href="http://pinkyrose-now.tumblr.com/" class="button" id="tumblr" target="_blank">
      		<span>Tumblr</span>
      	</a>
			</span>
    </div>
		
	<?php else: ?>
		
		
		<?php
		$detect = new Mobile_Detect;
		if( $detect->isTablet() ):
		    // Do something for only mobile users
	
		?>
    
	      <div class="adr medium-4 large-4 columns text-center">
	        <div class="tel "><a href="tel:0031102237081">0031 10  223 7081</a></div>
	        <div class="email-address"><a href="mailto:info@pinkyrose.nl">info@pinkyrose.nl</a></div>
	      </div>
	      <div class=" medium-4 large-4  columns text-center">
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
   
		
		
			<?php else: ?>
     
				 
			<?php	endif;	?>
		<?php	endif;	?>
		
      
    </footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
		<script src="bower_components/ajaxchimp/jquery.ajaxchimp.min.js"></script>
		<script src="bower_components/jquery-waypoints/waypoints.min.js"></script>
		<script src="js/vendor/jquery.backstretch.min.js"></script>
		
		<script src="js/init-mailchimp.js"></script>
		<script src="bower_components/video.js/video.js"></script>
		<script src="bower_components/BigVideo.js/lib/bigvideo.js"></script>
		<script src="js/bigvideo.js"></script>
		
	  <script src="js/init-waypoints.js"></script>
	
		<script type="text/javascript" src="//use.typekit.net/hmx6jli.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript">
		$("#splash-static").backstretch("images/static.jpg");
		</script>
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