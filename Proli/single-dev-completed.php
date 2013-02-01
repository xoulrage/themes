<?php

/*

Template Name: Dev Complete

*/

?>

<?php get_header(); ?>
<div class="cont2" align="right">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="text-wrap2">
        <div id="dev-article">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>

        </div>
    </div>
    <?php endwhile; endif; ?>
    <div id="dev-menu-holder">
        <div id="dev-menu">
            <?php $my_query = new WP_Query( array ( 'category_name' => 'dev-completed', 'posts_per_page' => -1)); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <a href="<?php the_permalink() ?>">> <?php the_title(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
    <div id="dev-thumb-holder">
        <?php rewind_posts(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <p><?php echo do_shortcode('[wpsgallery]'); ?></p>
        <?php endwhile; endif; ?>
    </div>
       <!-- <ul id="carousel" class="elastislide-list">
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn4.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn5.jpg" /></a></li>
            <li><a class="fancybox" rel="[gropu1]" href="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg"><img src="<?php /*echo get_template_directory_uri(); */?>/images/project_tn6.jpg" /></a></li>
        </ul>-->
    </div>
    <div>

</div>
<?php get_footer(); ?>