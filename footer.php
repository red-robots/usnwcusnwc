</main>
<footer class="page">
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '' ) ); ?>
	</nav>
	<div class="row sidebars">
		<ul>
			<li><?php dynamic_sidebar( 'activity-schedule' ); ?></li>
        	<li><?php dynamic_sidebar( 'trail-status' ); ?></li>
		</ul>
	</div>
	<div class="row sponsors"> 
		<ul>
   	        <li class="subaru"><a href="http://www.subaru.com/" target="_blank"><img src="/wp-content/uploads/2015/09/Subaru_Grey_156x25.png" alt="Subaru Logo"></a></li>
           	<li class="parknrec"><a href="https://www.mecknc.gov/ParkandRec/Pages/Home.aspx" target="_blank"><img src="/wp-content/uploads/2015/06/ParksRec_Grey_119x35.png" alt="Mecklenburg County Park and Recreation Logo"></a></li>
		</ul>
	</div>
	<div class="row search">
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="https://usnwc.us17.list-manage.com/subscribe/post?u=621991427ab3dab6fe3576a60&amp;id=3c8fcb087c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
			
				
				<div class="mc-field-group">
					<input type="email" value="" name="EMAIL" placeholder="Sign-up for our mailing list..." class="required email" id="mce-EMAIL">
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_621991427ab3dab6fe3576a60_3c8fcb087c" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div><div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
				</div>
		</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='BIRTHDAY';ftypes[3]='birthday';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='phone';fnames[6]='MMERGE6';ftypes[6]='phone';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[14]='MMERGE14';ftypes[14]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->
		<?php get_search_form();?>
		<div class="clearfix"></div>
	</div>
	<div class="row description">
		<p><span class="break-mobile">U.S. National Whitewater Center</span><span class="noshow-mobile"> | </span><span class="break-mobile">5000 Whitewater Center Parkway | Charlotte, NC 28214</span><span class="noshow-mobile"> | </span><span class="break-mobile"><a href="tel:+17043913900">704.391.3900</a> | <a href="mailto:info@usnwc.org">info@usnwc.org</a></span></p>
	</div>
</footer>
</div><!--end of page container-->
</div><!--end of base container-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13073484-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script>
  (function() {
    var cx = '003847185050192092312:rff-uwdmgtq';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js?v=20120423234912"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=2012042315556"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mobilemenu.js?"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sort.js?"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/toggleSearch.js?"></script>

</body>
</html>
