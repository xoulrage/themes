<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>PROLI</title>

    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/unleash.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/css/anythingslider.css" />

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.1.min.js" type="text/javascript"></script>

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.unleash.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.animation.easing.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.anythingslider.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#outer5').unleash({
                duration: 700,
                childClassName: '.box',
                captionClassName: '.caption_3',
                SliderWidth: '100%',
                SliderHeight: '600px',
                width: 700,
                Event: "hover",
                easing:  "circEaseInOut",
                captionEasing:  "backEaseInOut",
                CollapseOnMouseLeave: true,
                CaptionAnimation: "pop-up"
            });

            $('.box').hover(
                    function () {
                        //hover in
                        var titlebox = $(this).find('.title');
                        $(titlebox).animate({
                            left: '17%',
                            top: '65%'
                        });
                    },

                    function () {
                        //hover out
                        var titlebox = $(this).find('.title');

                        $(titlebox).animate({
                            left: '1%',
                            top: '40%'
                        });
                    });

            // image slider
            $('#slider-1').anythingSlider({
                buildArrows     : true,
                buildNavigation : false,
                autoPlay        : false,
                playRtl         : false,
                startText       : "",
                stopText        : "",
                delay           : 5000,
                animationTime   : 600
            });

            $('#slider-2').anythingSlider({
                buildArrows     : true,
                buildNavigation : false,
                autoPlay        : false,
                playRtl         : false,
                startText       : "",
                stopText        : "",
                delay           : 5000,
                animationTime   : 600
            });

            $('#slider-3').anythingSlider({
                buildArrows     : true,
                buildNavigation : false,
                autoPlay        : false,
                playRtl         : false,
                startText       : "",
                stopText        : "",
                delay           : 5000,
                animationTime   : 600
            });

        });
    </script>
</head>

<body id="index-page">
<div class="wrap">
    <div id="logo"><a href="index.html"><img class="logo" alt="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a></div>
    <div id="coverup"><img src="<?php echo get_template_directory_uri(); ?>/images/coverup.png" /></div>
    <div id="outer5">
        <div class="box">
            <img class="slide-bg" src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" />
            <div class="caption_3" style="height: 75%; z-index: 4">
                <div class="caption3-inside">

                    <div class="slide-content-wrapper">

                        <ul id="slider-1">
                            <?php if (have_posts()) : ?>
                            <?php query_posts( array ( 'category_name' => 'Construction', 'posts_per_page' => -1)); ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="slide-left"></div>
                                    <div class="slide-content">
                                        <a href="<?php the_permalink() ?>">
                                            <div class="slide-content-pic">
                                                <?php if ( has_post_thumbnail()) :
                                                    the_post_thumbnail('homepage-thumb'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide_content_pic.jpg" />
                                                <?php endif ?>
                                            </div>
                                            <div class="slide-content-text">
                                                <h4><?php the_title(); ?></h4>
                                                <p><?php the_excerpt();?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide-right"></div>
                                </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>

                </div>
            </div>
            <img style="position: absolute; top:30%; left:0; z-index:2" src="<?php echo get_template_directory_uri(); ?>/images/building1.png" />
            <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/title1.png" />
        </div>
        <div class="box">
            <img class="slide-bg" src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" />
            <div class="caption_3" style="height: 75%; z-index: 4">
                <div class="caption3-inside">
                    <div class="slide-content-wrapper">
                        <ul id="slider-2">
                            <?php if (have_posts()) : ?>
                            <?php query_posts( array ( 'category_name' => 'Development', 'posts_per_page' => -1)); ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="slide-left"></div>
                                    <div class="slide-content">
                                        <a href="<?php the_permalink() ?>">
                                            <div class="slide-content-pic">
                                                <?php if ( has_post_thumbnail()) :
                                                    the_post_thumbnail('homepage-thumb'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide_content_pic.jpg" />
                                                <?php endif ?>
                                            </div>
                                            <div class="slide-content-text">
                                                <h4><?php the_title(); ?></h4>
                                                <p><?php the_excerpt();?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide-right"></div>
                                </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <img style="position: absolute; top:30%; left:-10%; z-index:2" src="<?php echo get_template_directory_uri(); ?>/images/building2.png" />
            <img class="title" src="<?php echo get_template_directory_uri(); ?>/images/title2.png" />
        </div>
        <div class="box">
            <img class="slide-bg" src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg"  />
            <div class="caption_3" style="height: 75%; z-index: 4">
                <div class="caption3-inside">
                    <div class="slide-content-wrapper">

                        <ul id="slider-3">
                            <?php if (have_posts()) : ?>
                            <?php query_posts( array ( 'category_name' => 'Hospitality', 'posts_per_page' => -1)); ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="slide-left"></div>
                                    <div class="slide-content">
                                        <a href="<?php the_permalink() ?>">
                                            <div class="slide-content-pic">
                                                <?php if ( has_post_thumbnail()) :
                                                    the_post_thumbnail('homepage-thumb'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide_content_pic.jpg" />
                                                <?php endif ?>
                                            </div>
                                            <div class="slide-content-text">
                                                <h4><?php the_title(); ?></h4>
                                                <p><?php the_excerpt();?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="slide-right"></div>
                                </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
            </div>
            <img style="position: absolute; top:34%; left:-7%; z-index:2" src="<?php echo get_template_directory_uri(); ?>/images/building3.png" />
            <img class="title" style="left: 2%" src="<?php echo get_template_directory_uri(); ?>/images/title3.png" />
        </div>
    </div>
    <div id="index-footer">
        <div id="footer-dock-wrapper">
            <div id="footer-dock">
                <a class="footer-dock-btn" href="<?php bloginfo('url'); ?>/about-us/"><img src="<?php echo get_template_directory_uri(); ?>/images/dock_btn1.png" /></a>
                <a class="footer-dock-btn" href="<?php bloginfo('url'); ?>/career/"><img src="<?php echo get_template_directory_uri(); ?>/images/dock_btn2.png" /></a>
                <a class="footer-dock-btn" style="margin-left: 20px; margin-right: 0" href="<?php bloginfo('url'); ?>/contact-us/"><img src="<?php echo get_template_directory_uri(); ?>/images/dock_btn3.png" /></a>
            </div>
        </div>
        <!--SHTEST-->
        <div>
            <?php if (have_posts()) : ?>
            <?php query_posts( array ( 'category_name' => 'haha', 'posts_per_page' => -1)); //TODO: need to find a way to replace cat id with real category name ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_title(); ?>   <br/>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!--SHTEST-->
        <div id="index-bottomnav">
            <div style="width: 680px; margin: 0 auto">
                <ul class="nav-col" style="width: 25%; padding-left: 5%">
                    <li><a href="<?php bloginfo('url'); ?>/about-us/"><h4>corporate profile</h4></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/about-us/"><span>about proli</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/vision/"><span>vision & mission</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/about-us/"><span>corporate structure</span></a></li>
                </ul>
                <ul class="nav-col" style="width: 20%">
                    <li><a href="<?php bloginfo('url'); ?>/construction/"><h4>core business</h4></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/construction/"><span>construction</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/devcomplete/"><span>development</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/hospitality/"><span>hotel</span></a></li>
                </ul>
                <ul class="nav-col" style="width: 15%">
                    <li><a href="<?php bloginfo('url'); ?>/career/"><h4>career</h4></a></li>
                </ul>
                <ul class="nav-col" style="width: 15%">
                    <li><a href="<?php bloginfo('url'); ?>/contact-us/"><h4>contact us</h4></a></li>
                </ul>
            </div>
        </div>
        <div id="index-skyline"><div id="index-copyright">2012 &copy; Proli. All Rights Reserved.</div></div>

    </div>

</div>
</body>
</html>