<?php 
/*
 * Default Page Template
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