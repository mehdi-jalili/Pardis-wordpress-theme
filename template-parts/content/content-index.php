<?php
/**
 * Template part for displaying posts in index page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pardis
 */

?>



<article class="index-post-box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail()) { ?>

		<div class="index-post-img">

				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('main-box-img'); ?>
				</a>

			

		</div>

		<div class="index-post-txt-thumb">

		<?php } else { ?>

		<div class="index-post-txt-nothumb">
			
		<?php } ?>
	
		
				
			<header class="">
				<?php ?>

					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<?php
				if ( 'post' === get_post_type() ) {
					?>
					<div class="entry-meta">
						<?php
						pardis_posted_on();
						pardis_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php }; ?>
			</header><!-- .entry-header -->


			<div class="entry-content">
				<?php
				if ( is_single() ) {
					the_content();
					
					wp_link_pages(
						array(
							'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'pardis' ) . '">',
							'after'    => '</nav>',
							/* translators: %: Page number. */
							'pagelink' => esc_html__( 'Page %', 'pardis' ),
						)
					);

				} else {
					the_excerpt();
				?>
					<div class="readmore-meta mb-2">
						<a href="<?php the_permalink(); ?>">
							<button>
								<?php echo __( 'Read More', 'pardis' ) ?>
							</button>
						</a>
					</div>
				<?php
				};
				?>
			</div><!-- .entry-content -->
		</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
