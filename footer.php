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
				<div class="footer_infos">
					<div class="adress">
						<img src="<?php echo get_template_directory_uri();?>/img/lieu.png" alt="Icone lieu">
						<p>47 boulevard de Pesaro Nanterre 92000</p>
					</div>
					<div class="mail">
						<img src="<?php echo get_template_directory_uri();?>/img/mail.png" alt="Icone mail">
						<p>iim@devinci.fr</p>
					</div>
					<div class="phone">
						<img src="<?php echo get_template_directory_uri();?>/img/telephone.png" alt="Icone telephone">
						<p>01 81 00 30 30</p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
