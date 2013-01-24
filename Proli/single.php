<?php

/*....*/

?>



<?php get_header(); ?>

<div class="cont" align="right">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <h1><?php the_title(); ?></h1>
    <div class="blank-box"></div>
    <div class="text-wrap" style="width: 712.5px;">
        <!-- Content -->
        <div id="page-content">
            <?php the_content(); ?>
        </div>
        <div class="reset"></div>
        <!-- End - Content -->
    </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>