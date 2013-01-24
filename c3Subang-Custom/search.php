<?php 
/*
 * The template for displaying Search Results pages.
 */
?>

<?php 
// get posts
global $paged;
global $wp_query;

// get search keyword
$search_keyword = trim($_GET['s']);

// get post per page
$posts_per_page = get_query_var('posts_per_page');

// get current page
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// set to search only specific category
$category_search = 3;

if (!is_paged()) {
  $custom_offset = 0;
} else {
  $custom_offset = $posts_per_page * ($paged - 1);
}

$args_posts = array(
  's' => $search_keyword,
  'cat' => $category_search,
  'posts_per_page' => $posts_per_page,
  'offset' => $custom_offset,
  'paged' => $paged,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'post_status' => 'publish'
);

$wp_query = new WP_Query();
$wp_query->query($args_posts);

?>

<?php get_header(); ?>

  <!-- Content -->
  <div id="page-content">

    <div id="content-list">
    
      <div id="search-bar">
        <?php get_search_form(); ?>
      </div>
      <div class="reset"></div>
            
      <div id="title">SEARCH RESULTS</div>
      <div class="reset"></div>

      <div id="list-holder">

<?php

// the loop
if ($wp_query->have_posts())
{
  while ($wp_query->have_posts())
  {
    $wp_query->the_post();
?>
        <div id="col">
          <div id="post-image"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/default-post.jpg" width="315" height="200"><?php } ?></a></div>
          <div id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div id="post-date"><?php the_time('d M Y'); ?></div>
        </div>        
<?php  
  }
?>
      </div>
      <div class="reset"></div>
      
      <div id="post-navi">
        <?php if(function_exists('wp_page_numbers')) { wp_page_numbers(); } ?>
      </div>
      <div class="reset"></div>   
<?php  
  // reset post data
  wp_reset_postdata();

}  else {
  // no posts
?>
        <div id="col">
          <div id="post-title">No results found. Please try again.</div>
        </div>
      </div>
      <div class="reset"></div>          
<?php
} 
?>
        
      <div id="social-media-share">
        <span class="st_facebook_hcount"></span>
        <span class="st_twitter_hcount"></span>
        <span class="st_sharethis_hcount"></span>
      </div>        
        

    </div>
    
  </div>
  <div class="reset"></div>
  <!-- End - Content -->

<?php get_footer(); ?>