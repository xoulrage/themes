<?php

/*

Template Name: Church

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



        <img src="<?php echo get_template_directory_uri(); ?>/images/sidemenu-church.jpg" alt="" width="314" height="321" border="0" usemap="#map_sidemenu" />

		    <map name="map_sidemenu">

		      <area shape="rect" coords="29,7,216,36" href="church" />

          <area shape="rect" coords="27,42,214,70" href="ministries" />

          <area shape="rect" coords="26,114,213,141" href="happenings" />

          <area shape="rect" coords="30,73,207,108" href="schedules" />

          <area shape="rect" coords="32,163,209,193" href="c3subang-kids" />

          <area shape="rect" coords="23,207,208,240" href="newsletters" />

        </map>



        <!-- End - Content Left -->

      </div>

      <div id="panel-right">

        <!-- Content Right -->

		

        <?php if (have_posts()) : while (have_posts()) : the_post();?>

          <?php the_content(); ?>

        <?php endwhile; endif; ?> 

		

		<p>&nbsp;</p>

		<p>If you would like to find out more about our church service and about C3 Subang. <br />

        Call us at 603 - 5162 - 1743 or <a href="mailto:info@c3subang.com">email us</a>. We guarantee you a response.</p>

        <p>&nbsp;</p>

		<p>&nbsp;</p>

		<p>&nbsp;</p>



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