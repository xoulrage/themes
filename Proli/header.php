<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Proli
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>PROLI</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/fonts.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/organic_tab.css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.1.min.js" type="text/javascript"></script>
	
	<?php 
	global $wp_query;
	$page = $wp_query->query_vars["pagename"];
	
	if ($page == "construction")
	{ ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox.css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/organictabs.jquery.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/loadfancybox.js" type="text/javascript"></script>
	<?php } ?>
	
	<script type="text/javascript">
		$(window).load(function() {	      
			style = 'easeOutQuart';		 
			$('.list-wrap a').hover(
				function() {
					$(this).children('div:first').stop(false,true).animate({bottom:0},{duration:200, easing: style});
				},		 
				function() {
					$(this).children('div:first').stop(false,true).animate({bottom:-126},{duration:200, easing: style});
				}
			);	 	        
			$("#example-one").organicTabs();
		});	    	
	</script>
</head>

<?php

function page_bodyID() {  // add id to <body> tag
	global $wp_query;
	$page = '';
	if (is_front_page() ) {
		   $page = 'home';
	} elseif (is_page()) {
	   $page = $wp_query->query_vars["pagename"];
	   
	   $page = (($page == "about-us") || ($page == "vision")) ? "about-page" : $page;
	   $page = ($page == "construction") ? "construction-page" : $page;
	   $page = ($page == "devcomplete") ? "dev-completed-page" : $page;
	   $page = ($page == "devlatest") ? "dev-latest-page" : $page;
	   $page = ($page == "devupcoming") ? "dev-upcoming-page" : $page;
	   $page = ($page == "hospitality") ? "hospitality-page" : $page;
	   $page = ($page == "careers") ? "career-page" : $page;
	   $page = ($page == "contact-us") ? "contact-page" : $page;
	}
	
	if ($page)
		echo 'id= "'. $page. '"';
}

?>

<body <?php page_bodyID(); ?>>
<div class="wrap standard-bg">
	<div id="wrapper">
		<div id="logo">
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
			</a>
		</div>
		<div id="topnav">
			<ul>
				<li><a href="#">corporate profile</a>
					<ul class="special">
						<li><a href="<?php bloginfo('url'); ?>/about-us/">about proli</a></li>
						<li><a href="<?php bloginfo('url'); ?>/vision/">vision & mission</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about-us/">corporate structure</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/construction/">construction</a></li>
				<li><a href="<?php bloginfo('url'); ?>/devcomplete/">development</a>
					<ul class="special" id="dev-drop-menu">
						<li><a href="<?php bloginfo('url'); ?>/devcomplete/">completed project</a></li>
						<li><a href="<?php bloginfo('url'); ?>/devlatest/">latest project</a></li>
						<li><a href="<?php bloginfo('url'); ?>/devupcoming/">upcoming project</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/hospitality/">hospitality</a></li>
				<li><a href="<?php bloginfo('url'); ?>/career/">careers</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact-us/">contact us</a></li>
			</ul>
		</div>
		<br class="clear">
