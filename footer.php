<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Open_3
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer_inner-container">
			<div class="footer_grid">
				<div class="footer_liens">
					<p>Mentions légales</p>
					<p>Conditions  d’utilisation</p>
					<p>CGV</p>
				</div>
				<div class="footer_logo">
					<img src="<?php echo get_template_directory_uri();?>/img/logo-open3-blanc.png" alt="Logo Open3 blanc">
				</div>
				<div class="footer_infos"></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
