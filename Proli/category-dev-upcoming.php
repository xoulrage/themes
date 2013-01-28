<?php

/*

Template Name: Dev Complete

*/

?>

<?php get_header(); ?>

<div class="cont2" align="right">
    <div class="text-wrap2">
        <div id="dev-list">
            <div style="padding: 0 5px">
                <?php if (have_posts()) : ?>
                <?php query_posts( array ( 'category_name' => 'dev-upcoming', 'posts_per_page' => -1)); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="dev-list-item">
                            <div class="dev-list-pic"><a href="<?php the_permalink() ?>">
                                <?php if ( has_post_thumbnail()) : the_post_thumbnail('development-thumb'); ?>
                                <?php endif ?>
                            </a></div>
                            <div class="dev-list-desc">
                                <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>