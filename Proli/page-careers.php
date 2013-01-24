<?php

/*

Template Name: Careers

*/

?>



<?php get_header(); ?>

<div class="cont" align="right">
	<h1><img src="<?php titleimage(); ?>"></h1>
	<br /><br />
	<div class="text-wrap2">

	  <!-- Content -->

	  <div id="page-content">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?> 
	  </div>

	  <!-- End - Content -->
	</div>
</div>

<?php get_footer(); ?>	