<?php

/*

Template Name: Hospitality

*/

?>



<?php get_header(); ?>

<div class="cont" align="right">
	<h1><img src="<?php echo get_template_directory_uri(); ?>/images/about_title.png" alt="" /></h1>
	<div class="blank-box"></div>
	<div class="text-wrap" style="width: 712.5px;">

	  <!-- Content -->

	  <div id="page-content">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?> 
	  </div>

	  <div class="reset"></div>

	  <!-- End - Content -->
	</div>
</div>

<?php get_footer(); ?>	