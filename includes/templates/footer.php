<footer class="site-footer">
	<div class="contenedor clearfix">
		<div class="footer-informacion">
			<h3>Sobre <span>gdlwebcamp</span></h3>
			<p>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</p>
		</div>
		<div class="ultimos-tweets">
			<h3>Ultimos <span>tweets</span></h3>
			<ul>
				<li>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</li>
				<li>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</li>
				<li>Sed eget accumsan leo. Nunc varius porta quam, vel interdum nunc lobortis fermentum. Etiam tincidunt est suscipit ante rutrum, in tristique nunc aliquam.</li>
			</ul>
		</div>
		<div class="menu">
			<h3>Redes <span>Sociales</span></h3>
			<nav class="redes-sociales">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-pinterest-p"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</nav>
		</div>
	</div>
	<p class="copyright">Todos los derechos reservados 2018</p>
	<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display:none;">
	<div id="mc_embed_signup" >
	<form action="https://wpcatalog.us13.list-manage.com/subscribe/post?u=ae502255ccc4d3e0f5f1b5ea9&amp;id=c376e385e7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
		<h2>Subscribe to our mailing list</h2>
	<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
	<div class="mc-field-group">
		<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
	</label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div class="mc-field-group">
		<label for="mce-FNAME">First Name </label>
		<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-LNAME">Last Name </label>
		<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ae502255ccc4d3e0f5f1b5ea9_c376e385e7" tabindex="-1" value=""></div>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
	</form>
	</div>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</footer>
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"></script>
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.waypoints.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.js"></script>
<?php
		$archivo=basename($_SERVER['PHP_SELF']);
		$pagina=str_replace(".php","",$archivo);
		if ($pagina=='invitados' || $pagina=='index') {
			echo '<script src="js/jquery.colorbox.js"></script>';
		} elseif ($pagina=='conferencia') {
			echo '<script src="js/lightbox.js"></script>';
		}
	?>
<script src="js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>