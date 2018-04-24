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
		<?php echo do_shortcode('[gravityform id="13" title="false"]');?>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=2012042315454"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mobilemenu.js?"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sort.js?"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/toggleSearch.js?"></script>

</body>
</html>
