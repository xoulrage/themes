<?php

/*

Template Name: Construction

*/

?>



<?php get_header(); ?>

<div class="cont" align="right">
	<h1><img src="<?php echo get_template_directory_uri(); ?>/images/construction_title.png" /></h1>
	<div class="text-wrap">
		<div id="example-one">        			
			<ul class="nav">
				<li class="nav-one"><a href="#on-going" class="current">on-going</a></li>
				<li class="nav-two"><a href="#completed">completed</a></li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/tab_shadow.jpg" />
			<div class="base">		            	        	
				<div class="list-wrap">         	      	
					<?php if (have_posts()) : while (have_posts()) : the_post();?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>
				</div><!-- END List Wrap -->  
			</div> 	        
		</div><!-- END example-one -->
	</div>
</div>

<?php get_footer(); ?>	