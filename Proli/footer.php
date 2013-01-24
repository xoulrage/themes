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
					<li><a href="about_proli.html"><h4>corporate profile</h4></a></li>
					<li><a href="about_proli.html"><span>about proli</span></a></li>
					<li><a href="about_vision.html"><span>vision & mission</span></a></li>
					<li><a href="#"><span>corporate structure</span></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="construction.html"><h4>core business</h4></a></li>
					<li><a href="construction.html"><span>construction</span></a></li>
					<li><a href="dev_completed.html"><span>development</span></a></li>
					<li><a href="hospitality.html"><span>hotel</span></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="career.html"><h4>career</h4></a></li>
				</ul>
				<ul class="nav-col">
					<li><a href="contact.html"><h4>contact us</h4></a></li>
				</ul>
			</div>
			<div id="copyright">2012 &copy; Proli. All Rights Reserved.</div>
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
