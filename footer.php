<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pardis
 */

?>

	<footer>
		<div class="container">
			<div class="py-4 bg-black d-xl-flex justify-content-between align-items-center pardis-footer">

				<?php if ( is_active_sidebar( 'footer-1'  ) ) : ?>
					<div class="footer-1">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-2'  ) ) : ?>
					<div class="footer-2">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer-3'  ) ) : ?>
					<div class="footer-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
