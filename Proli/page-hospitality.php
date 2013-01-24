<?php

/*

Template Name: Hospitality

*/

?>



<?php get_header(); ?>
	
<div class="cont2" align="right">
	<div class="text-wrap2">
		<div id="dev-article">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>
		</div>
	</div>
	<div id="dev-menu-holder">
		<div id="dev-menu">
			<a href="<?php bloginfo('url'); ?>/hospitality/swan-garden-jb/">> Swan Garden JB</a> 
			<a href="<?php bloginfo('url'); ?>/hospitality/swan-garden-melaka/">> Swan Garden Melaka</a>
		</div>
	</div>
	<?php
		global $wp_query;
		$page = $wp_query->query_vars["pagename"];
		   
		if (($page == "hospitality") || ($page == "swan-garden-jb"))
		{
	?>
		<div id="dev-thumb-holder" style="width: 580px">
			<ul id="carousel" class="elastislide-list">
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
			</ul>
		</div>
	<?php
		} elseif ($page == "swan-garden-melaka") {
	?>
		<div id="dev-thumb-holder" style="width: 580px">
			<ul id="carousel" class="elastislide-list">
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn5.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn6.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
				<li><a class="fancybox" rel="[gropu1]" href="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project_tn4.jpg" /></a></li>
			</ul>
		</div>
	<?php
		}
	?>
</div>

<?php get_footer(); ?>	