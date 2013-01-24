<?php 
/*
The Template for displaying all single posts.
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
          <!-- Content Main Featured Video / Image -->

          <?php 
            if(get_post_meta(get_the_ID(), "_related-video", true) != ''){
              echo '<div align="center">';
              echo get_post_meta(get_the_ID(), "_related-video", true);
              echo '</div>';
            }
          ?>
          
          <!-- End - Content Main Featured Video / Image -->
        </div>
        <div id="frame-right"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-right.jpg"></div>
        <div id="frame-bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/frame-bottom.jpg"></div>
      </div>
    </div>
    <div class="reset"></div>    

    <div id="content">
      <div id="panel-left">
        <!-- Content Left -->

<?php 
// get posts
global $paged;
global $wp_query;

if ($wp_query->have_posts())
{
  while ($wp_query->have_posts())
  {
    $wp_query->the_post();
?>
        <div id="post-featured-image">
    
        </div>
        <div class="reset"></div>
<?php
  }
  // reset post data  
  wp_reset_postdata();  
}
?>

        <!-- End - Content Left -->
      </div>
      <div id="panel-right">
        <!-- Content Right -->
        
<?php 
// get posts
global $paged;
global $wp_query;


if ($wp_query->have_posts())
{
  while ($wp_query->have_posts())
  {
    $wp_query->the_post();

?>

        <div id="post-detail">
        
          <div id="post-info">
            <div id="post-title"><?php the_title(); ?></div>
            <div id="post-date"><?php the_time('d M Y'); ?></div>
            <div id="post-content"><?php the_content(); ?></div>
            <div id="post-tags" style="margin-top:35px;"><div id="tag-title">Tags:</div><?php the_tags('<div id="tag">', '</div><div id="tag">', '</div>'); ?></div>
            <div class="reset"></div>
            
            <div id="social-media-share" style="margin-top:20px;">
              <span class="st_facebook_hcount"></span>
              <span class="st_twitter_hcount"></span>
              <span class="st_sharethis_hcount"></span>
            </div> 
            <div class="reset"></div>

          </div>
          <div class="reset"></div>
           
        </div>
        <div class="reset"></div>
					
<?php
  }

?>

<?php

  // reset post data
  wp_reset_postdata();
  
} else {

  // no post
?>
        <div id="post-detail">
          <div id="title">SERMONS</div>
          <div class="reset"></div>
          
          <div id="post-info">
            <div id="post-title">No post available.</div>
          </div>
          <div class="reset"></div>
           
        </div>
        <div class="reset"></div>
<?php

}
?>

        <!-- End - Content Right -->
        
      </div>
    </div>
    
  </div>
  <div class="reset"></div>
  <!-- End - Content -->        

<?php get_footer(); ?>	