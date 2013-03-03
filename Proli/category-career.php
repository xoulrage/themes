<?php

/*...*/

?>

<?php get_header(); ?>

<div class="cont" align="right">
	<h1><img src="<?php echo get_template_directory_uri(); ?>/images/career_title.png" /></h1><br /><br />
	<div class="text-wrap2">
		<?php if (have_posts()) : ?>
			<?php $my_query = new WP_Query( array ( 'category_name' => 'career', 'posts_per_page' => -1)); ?>
			<?php $postcount = $my_query->post_count; ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
				<a class="apply" href="mailto:career@proli.my"><img src="<?php echo get_template_directory_uri(); ?>/images/apply_btn.png" /></a><br class="clear" />
				<?php if( ($my_query->current_post + 1) < ($postcount) ) : ?>
					<div class="dotted-line"></div>
				<?php endif; ?>		
			<?php endwhile; ?>
        <?php endif; ?>	
	</div>	
</div>
			
<?php get_footer(); ?>