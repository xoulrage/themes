<?php 
/*
 * The template for displaying 404 pages (Not Found).
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

        <p>&nbsp;</p>
        <p class="txt-blue"><strong>This page will be up soon.</strong></p>
        <p>&nbsp;</p>
        <p>..................................................................................................................................................................................</p>
        <p>&nbsp;</p>
        <p>If you would like to find out more about our church service and about C3 Subang. <br />
        Call us at 603 - 5162 - 1743 or <a href="mailto:info@c3subang.com">email us</a>. We guarantee you a response.</p>
        <p>&nbsp;</p>

        <!-- End - Content Right -->
        
      </div>
    </div>
  
  </div>
  <!-- End - Content -->  

<?php get_footer(); ?>	