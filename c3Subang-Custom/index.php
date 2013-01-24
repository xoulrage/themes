<?php 
/*
 * The main template file.
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

          <?php if(function_exists('vslider')){ vslider('homepage'); } ?>
          
          <!-- End - Content Main Image -->
        </div>
        <div id="frame-right"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-right.jpg"></div>
        <div id="frame-bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-bottom.jpg"></div>
      </div>
    </div>
    <div class="reset"></div>    

    <div id="content">
      <div id="panel-left">
        <div style="width:100%; height:105px; text-align:center; background: #040404 url(<?php echo get_template_directory_uri(); ?>/images/index-page-bg.jpg) repeat;">
          <br />
          <span class="st_facebook_vcount"></span>
          <span class="st_twitter_vcount"></span>
          <span class="st_sharethis_vcount"></span>
        </div>
      </div>
      <div id="panel-right">
        <a href="greeting/"><img src="<?php echo get_template_directory_uri(); ?>/images/index-page-content.jpg" border="0"></a>
      </div>
    </div>
    <div class="reset"></div>
    
  </div>

  <!-- End - Content -->

<?php get_footer(); ?>