<?php
/*
 * The Header of the theme.
 */
 
$wp_url = get_bloginfo('wpurl'); 
 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>C3 Church Subang : Malaysian Church in Kuala Lumpur & Subang Jaya</title>

<meta name="keywords" content="C3, C3 Chuch Malaysia, Malaysian church, Church in Malaysia, Churches in Malaysia, C3 Subang,Church in Subang Jaya, Subang Jaya Church, Church in Kuala Lumpur, C3 Subang Malaysia, C3 Malaysia, C3 churches,Malaysia church,Church Malaysia,C3 global,C3 music,Malaysian christian churches,Malaysia christian,church,C3 kids, C3 kids activitites,Impian Meridian, USJ 1, Malaysia church directory" />
<meta name="description" content="" />

<meta name="google-site-verification" content="q2P1_C5JQib0wEf7WVRIVHOv7AvHiWEJyl2QcYns4yM" />

<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<!--<script src="<?php echo get_template_directory_uri(); ?>/scripts/swfobject_modified.js" type="text/javascript"></script>-->

</head>
<body>

<div id="wrapper">
  
  <!-- Header -->
  <div id="header">
    <div id="header-logo"><a href="<?php echo $wp_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/c3Subang-logo.jpg" alt="C3 Subang"></a></div>
    <div class="grey-seperator"></div>
    <div id="header-topnavi">
      <div id="item-last"><a href="<?php echo $wp_url; ?>/contact">CONTACT US</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>
      <div id="item"><a href="<?php echo $wp_url; ?>/resources">RESOURCES</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>
      <div id="item"><a href="<?php echo $wp_url; ?>/projects">PROJECTS</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>
      <div id="item"><a href="<?php echo $wp_url; ?>/category/sermons">SERMONS</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>                
      <div id="item"><a href="<?php echo $wp_url; ?>/church">CHURCH</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>      
      <div id="item"><a href="<?php echo $wp_url; ?>/our-culture">OUR CULTURE</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>      
      <div id="item"><a href="<?php echo $wp_url; ?>/who-are-we">WHO ARE WE</a></div>
      <div id="item-seperator"><img src="<?php echo get_template_directory_uri(); ?>/images/topnavi-seperator.jpg"></div>      
      <div id="item"><a href="<?php echo $wp_url; ?>">HOME</a></div>         
    </div>
  </div>
  <div class="reset"></div>
  <!-- End - Header -->