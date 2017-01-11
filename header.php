<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
       wp_enqueue_script('jquery');
       wp_enqueue_script('jquery-core-ui');
       wp_enqueue_script('jquery-tabs-ui');
       wp_enqueue_script('hoverlink', get_bloginfo('template_directory').'/rollover.js');
    ?>

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
?></title>
<?php wp_head();?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="e3L8kU2GBIb6wsJkRj2n6v1GDc-ajo6yg6IgX2xYl7w" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time();?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/flexslider.css?v=<?php echo time();?>" />
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/uploads/2014/10/W_57x57.jpg" />
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/uploads/2014/10/W_72x72.jpg" />
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/uploads/2014/10/W_114x114.jpg" />
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/uploads/2014/10/W_144x144.jpg" />
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/uploads/2015/09/W-Logo_16X16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2015/09/W-Logo_32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/uploads/2015/09/W-Logo_96X96.png">
<link rel="stylesheet" href="/franklin-webfonts/franklingothicfs_condensed_macroman/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="/franklin-webfonts/franklingothicfs_condenseditalic_macroman/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="/franklin-webfonts/franklingothicfs_mediumcondensed_macroman/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="http://usnwc.org/wp-content/themes/usnwc/css/addtohomescreen.css">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/addtohomescreen.min.js?"></script>
<script src="https://use.fontawesome.com/4945cee666.js"></script>
<script>
addToHomescreen({skipFirstVisit:true,maxDisplayCount:1});
</script>
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
	twttr.conversion.trackPid('l4lpc');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4lpc&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4lpc&p_id=Twitter" />
</noscript>
</head>

<body>
<div class="base container <?php 
if(is_category()){
	$cats="";
	foreach(get_the_category($post->ID) as $cat){
		$cats.=$cat->category_nicename." ";
	}
	echo $cats;
} else {
	echo $post->post_name;
}
?>">
<nav class="mobile">
</nav>
<div class="page container">
<div class="false header"><img class="false img" src="/wp-content/uploads/2015/06/falselogo.jpg"></div>
<header class="page">
	<!--<?php wp_title( '|', true, 'right' );bloginfo( 'name' );?>-->
	<gcse:search></gcse:search>
	<img class="showsearch" src="/wp-content/uploads/2015/09/Search.png">
	<img class="showmenu hamburger" src="http://usnwc.org/wp-content/uploads/2015/05/hamburger-75x75.png">
    <nav>
   		<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => '' ) ); ?>
	</nav>
    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo" src="/wp-content/uploads/2015/06/logo-main.png" alt="US National Whitewater Center Logo"></a>
</header>
<?php if(!is_home()) { ?>
<nav class="page breadcrumbs">
<?php if (is_page()) { 
	get_breadcrumbs();
} else { 
	bloglow_get_breadcrumb_navigation();
} ?>
</nav>
<?php } ?>
<main class="page">
