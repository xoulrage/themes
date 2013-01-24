<?php
/*
Template Name: Pastors
*/
?>

<?php get_header(); ?>

  <!-- Content -->
  <div id="page-content">
  
    <div id="content-header">
      <div id="panel-left">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content-main.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content-main-bottom.jpg">
      </div>
      <div id="panel-right">
        <div id="frame-top"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-top.jpg"></div>
        <div id="frame-left"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-left.jpg"></div>
        <div id="frame-content">
          <!-- Content Main Image -->

          <?php if(function_exists('show_media_header')){ show_media_header(); } ?>
          
          <!-- End - Content Main Image -->
        </div>
        <div id="frame-right"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-right.jpg"></div>
        <div id="frame-bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-bottom.jpg"></div>
      </div>
    </div>
    <div class="reset"></div>    

    <div id="content">
      <div id="panel-left">
        <!-- Content Left -->

        <img src="<?php echo get_template_directory_uri(); ?>/images/sidemenu-about.jpg" alt="" width="314" height="321" border="0" usemap="#map_sidemenu" />
		    <map name="map_sidemenu">
		      <area shape="rect" coords="29,7,216,36" href="our-journey" />
		      <area shape="rect" coords="27,42,214,70" href="pastors" />
		      <area shape="rect" coords="26,114,213,141" href="our-culture" />
		      <area shape="rect" coords="30,73,207,108" href="our-core-values" />
        </map>

        <div align="center">
        <a href="greetings-from-c3-founders"><img src="<?php echo get_template_directory_uri(); ?>/images/c3founders.jpg" /></a>
        <br />
        <span style="font-size: 12px;	font-weight: bold;color: #FC0;">Message from Pastor Phil and Chris Pringle</span>
        </div>
        

        <!-- End - Content Left -->
      </div>
      <div id="panel-right">
        <!-- Content Right -->

        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?> 

        <!-- End - Content Right -->
        
        <div id="social-media-share">
          <span class="st_facebook_hcount"></span>
          <span class="st_twitter_hcount"></span>
          <span class="st_sharethis_hcount"></span>
        </div>        
        
      </div>
    </div>
    
  </div>
  <div class="reset"></div>
  <!-- End - Content -->

<?php get_footer(); ?>	