<?php

/*

Template Name: Contact Us

*/

?>

<?php get_header(); ?>

<div class="cont" align="right">
	<h1><img src="<?php titleimage(); ?>"></h1>
	<br /><br />
	<div class="text-wrap">
		<div class="col-left">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?> 
		</div>
		<div class="col-right">
			<!--
			<form name="contact-form" id="contact-form" action="#" method="post">
				<fieldset id="name">
					<input type="text" name="name" value="Name" onfocus="if(this.value == 'Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}" />
				</fieldset>
				<fieldset id="email">
					<input type="text" name="email" value="Email" onfocus="if(this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}" />
				</fieldset>
				<fieldset id="msg">
					<textarea name="msg" rows="10" value="Message" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Message</textarea>
				</fieldset>
				<a class="apply" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/send_btn.png" /></a>
			</form>
			-->
			<?php echo do_shortcode('[contact_form]'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>	