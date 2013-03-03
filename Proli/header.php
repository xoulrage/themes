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
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/jquery.mCustomScrollbar.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox.css" />
	
	<?php	
	global $wp_query;
	$page = $wp_query->query_vars["pagename"];

	if ($page == "construction" || is_category('construction'))
	{ ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/organic_tab.css" />
	<?php } ?>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.1.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/js/organictabs.jquery.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.17475.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/fancybox/loadfancybox.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(window).load(function(){
			$("#dev-article").mCustomScrollbar({
				scrollButtons:{
				enable:true
				}
			});
			$("#dev-list").mCustomScrollbar({
				scrollButtons:{
				enable:true
				}
			});
		});
	</script>
	
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
	
	<script type="text/javascript">
		$(window).load(function() {
			$("#cntctfrm_contact_name").attr('value', "Name")
									   .attr('onfocus', "if(this.value == 'Name') {this.value = '';}")
									   .attr('onblur', "if (this.value == '') {this.value = 'Name';}");
			
			$("#cntctfrm_contact_email").attr('value', "Email")
									   .attr('onfocus', "if(this.value == 'Email') {this.value = '';}")
									   .attr('onblur', "if (this.value == '') {this.value = 'Email';}");
									   
			$("#cntctfrm_contact_message").attr('onfocus', "if(this.value == this.defaultValue) {this.value = '';}")
									   .attr('onblur', "if (this.value == '') {this.value = this.defaultValue;}");
		});
	</script>		
</head>

<?php



function page_bodyID() {  // add id to <body> tag
	global $wp_query;
	$page = '';
	if (is_front_page() ) {
		   $page = 'home';
	/*} elseif (is_page()) {*/
    } elseif (is_single()){
        $page = in_category('dev-completed') ? "dev-completed-page" : $page;
        $page = in_category('dev-latest')? "dev-latest-page" : $page;
        $page = in_category('dev-upcoming')? "dev-upcoming-page" : $page;
        $page = in_category('hospitality')? "hospitality-page" : $page;
		$page = in_category('career')? "career-page" : $page;
    } else {
	   $page = $wp_query->query_vars["pagename"];
	   
	   $page = (($page == "about-us") || ($page == "vision")) ? "about-page" : $page;
	   $page = is_category('construction') ? "construction-page" : $page;
	   $page = is_category('dev-completed')? "dev-completed-page" : $page;
	   $page = is_category('dev-latest')? "dev-latest-page" : $page;
	   $page = is_category('dev-upcoming')? "dev-upcoming-page" : $page;
	   $page = (($page == "hospitality") || ($page == "swan-garden-jb") || ($page == "swan-garden-melaka")) ? "hospitality-page" : $page;
	   $page = is_category('career')? "career-page" : $page;
	   $page = ($page == "contact-us") ? "contact-page" : $page;
	}
	
	if ($page)
		echo 'id= "'. $page. '"';
}

function titleimage()
{
	$image;
	global $wp_query;
	$page = $wp_query->query_vars["pagename"];

	if ($page == "about-us")
	{
		$image = "about_title";
	}
	elseif ($page == "vision")
	{
		$image = "vision_title";
	}
	elseif ($page == "careers")
	{
		$image = "career_title";
	}
	elseif ($page == "contact-us")
	{
		$image = "contact_title";
	}	
	
	echo get_template_directory_uri() . '/images/' . $image . '.png';
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
						<li><a href="<?php bloginfo('url'); ?>/profile/about-us/">about proli</a></li>
						<li><a href="<?php bloginfo('url'); ?>/profile/vision/">vision & mission</a></li>
						<li><a href="<?php bloginfo('url'); ?>/profile/about-us/">corporate structure</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/category/construction/">construction</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/dev-completed/">development</a>
					<ul class="special" id="dev-drop-menu">
						<li><a href="<?php bloginfo('url'); ?>/category/dev-completed/">completed project</a></li>
						<li><a href="<?php bloginfo('url'); ?>/category/dev-latest/">latest project</a></li>
						<li><a href="<?php bloginfo('url'); ?>/category/dev-upcoming/">upcoming project</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/hospitality/">hospitality</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/career/">careers</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact-us/">contact us</a></li>
			</ul>
		</div>
		<br class="clear">
