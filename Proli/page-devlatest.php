<?php

/*

Template Name: Dev Latest

*/

?>



<?php get_header(); ?>

<div class="cont2" align="right">
	<div class="text-wrap2">
		<div id="dev-list" class="mCustomScrollbar _mCS_1">
			<div style="position: relative; height: 100%; overflow: hidden; max-width: 100%;"
				id="mCSB_1" class="mCustomScrollBox">
				<div style="position: relative; top: 0;" class="mCSB_container mCS_no_scrollbar">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>  
				</div>
				<div style="position: absolute; display: none;" class="mCSB_scrollTools">
					<a style="display: block; position: relative;" class="mCSB_buttonUp"></a>
					<div style="position: relative;" class="mCSB_draggerContainer">
						<div style="position: absolute; top: 0px;" class="mCSB_dragger">
							<div style="position: relative;" class="mCSB_dragger_bar">
							</div>
						</div>
						<div class="mCSB_draggerRail">
						</div>
					</div>
					<a style="display: block; position: relative;" class="mCSB_buttonDown"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>	