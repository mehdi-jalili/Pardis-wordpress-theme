<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pardis
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-2">
		<?php the_title( '<h1 class="entry-title text-center">', '</h1>' );
		

		if ( 'post' === get_post_type() ) {
			?>
			<div class="entry-meta d-flex justify-content-center">
				<?php
				pardis_posted_on();
				pardis_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php } ?>
	</header><!-- .entry-header -->

	<?php pardis_post_thumbnail(); ?>

	<div class="entry-content">
		<?php			
			the_content();
			
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'pardis' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'pardis' ),
				)
			);

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
