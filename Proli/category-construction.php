<?php

/*...*/

?>



<?php get_header(); ?>

<div class="cont" align="right">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/images/construction_title.png" /></h1>
    <div class="text-wrap">
        <div id="example-one">
            <ul class="nav">
                <li class="nav-one"><a href="#on-going" class="current">on-going</a></li>
                <li class="nav-two"><a href="#completed" >completed</a></li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/images/tab_shadow.jpg" />
            <div class="base">
                <div class="list-wrap">
                    <div id="on-going">
                        <?php if (have_posts()) : ?>
                        <?php query_posts( array ( 'category_name' => 'con-on-going', 'posts_per_page' => -1)); ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if ( has_post_thumbnail()) :
                                $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
                                <a class="fancybox" rel="[group1]" href="<?php echo $full_image_url[0]; ?>">
                                    <?php the_post_thumbnail('construction-thumb'); ?>
                                    <div class="caption"><span><?php the_content(); ?></span></div>
                                </a>
                            <?php endif ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div id="completed" class="hide">
                        <?php if (have_posts()) : ?>
                        <?php query_posts( array ( 'category_name' => 'con-completed', 'posts_per_page' => -1)); ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if ( has_post_thumbnail()) :
                                $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
                                <a class="fancybox" rel="[group2]" href="<?php echo $full_image_url[0]; ?>">
                                    <?php the_post_thumbnail('construction-thumb'); ?>
                                    <div class="caption"><span><?php the_content(); ?></span></div>
                                </a>
                                <?php endif ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- END List Wrap -->
            </div>
        </div><!-- END example-one -->
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function () {
         if(window.location.hash) {
             var hash_value = window.location.hash.replace('#', '');
             if (hash_value == 'completed'){
                 $(".nav li.nav-one a").removeClass("current");
                 $(".nav li.nav-two a").addClass("current");
                 $("#on-going").addClass("hide");
                 $("#completed").removeClass("hide");
             }
         }
     });
</script>
<?php get_footer(); ?>