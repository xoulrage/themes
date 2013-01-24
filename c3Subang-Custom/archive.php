<?php
/*
The template for displaying Category Archive pages.
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

<?php 
// show archives
echo '<div id="archives">' . "\n";
echo 'ARCHIVES:<br /><br />' . "\n";

$args_archives = array(
  'type' => 'monthly',
  'limit' => '',
  'format' => 'html', 
  'before' => '',
  'after' => '',
  'show_post_count' => false,
  'echo' => 1
);  

echo '<ul>' . "\n";  
wp_get_archives('type=monthly&limit=12');  
echo '</ul>' . "\n";
  
echo '</div>' . "\n";
echo '<div class="reset"></div>' . "\n";    

?>

        <!-- End - Content Left -->
      </div>
      <div id="panel-right">
        <!-- Content Right -->

        <div id="posts">
          <div id="title"><?php printf( __( 'ARCHIVES - %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?></div>
          <div class="reset"></div>

<?php

// the loop
if (have_posts())
{
  while (have_posts())
  {
    the_post();
?>
          <div id="post">
            <div id="panel-left"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(200,200)); } else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/sample-post.jpg" width="200" height="200"><?php } ?></div>
            <div id="panel-right">
              <div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div id="post-date"><?php the_time('d M Y'); ?></div>
              <div id="post-content"><?php the_content(); ?></div>
            </div>
          </div>
          <div class="reset"></div>
<?php  
  }
  
?>

          <div id="post-link">
            <?php next_posts_link('&lt;&lt; Previous Entries', $wp_query->max_num_pages) ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php previous_posts_link('Newer Entries &gt;&gt;', $wp_query->max_num_pages) ?>
          </div>
          <div class="reset"></div>              
          
<?php
  
} else {

  // no posts
?>
      <div id="post">
        <div id="panel-left">&nbsp;</div>
        <div id="panel-right">
          <div id="post-title">No Posts Available</div>
        </div>
      </div>
      <div class="reset"></div> 
<?php

}
?>

        </div>

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