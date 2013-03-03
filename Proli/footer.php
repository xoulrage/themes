<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		<div class="skyline-bg"></div>
		<div id="footer" role="contentinfo">
			<div id="bottomnav">
				<ul class="nav-col">
					<li><a href="<?php bloginfo('url'); ?>/profile/about-us/"><h4>corporate profile</h4></a></li>
					<li><a href="<?php bloginfo('url'); ?>/profile/about-us/"><span>about proli</span></a></li>
					<li><a href="<?php bloginfo('url'); ?>/profile/vision/"><span>vision & mission</span></a></li>
					<li><a href="<?php bloginfo('url'); ?>/profile/about-us/"><span>corporate structure</span></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="<?php bloginfo('url'); ?>/category/construction/"><h4>core business</h4></a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/construction/"><span>construction</span></a></li>
					<li><a href="<?php bloginfo('url'); ?>/category/dev-completed/"><span>development</span></a></li>
					<li><a href="<?php bloginfo('url'); ?>/hospitality/"><span>hotel</span></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="<?php bloginfo('url'); ?>/category/career/"><h4>career</h4></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="<?php bloginfo('url'); ?>/contact-us/"><h4>contact us</h4></a></li>
				</ul>
			</div>
			<div id="copyright">2013 &copy; Proli. All Rights Reserved.</div>
		</div><!-- #footer -->

	</div><!-- #wrapper -->
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquerypp.custom.js"></script><!-- thumbnail slider -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.elastislide.js"></script><!-- thumbnail slider -->
<script type="text/javascript">					
	$( '#carousel' ).elastislide();					
</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
