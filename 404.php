<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pardis
 */

get_header();
?>

	<main id="primary" class="site-main pardis-page">
		<div class="container">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pardis' ); ?></h1>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try with Menu links?', 'pardis' ); ?></p>
			</div><!-- .page-content -->
		
		</div>
	</main><!-- #main -->

<?php
get_footer();
