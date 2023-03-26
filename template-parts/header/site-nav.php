<?php
/**
 * Displays the site navigation.
 *
 * @package pardis
 */

$wrapper_classes  = 'site-header';
?>

<nav class="navbar navbar-expand-lg navbar-light container py-1">
    
    <?php get_template_part( 'template-parts/header/site-branding' ); ?>


    <?php if ( has_nav_menu( 'primary' ) ) : ?>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php echo esc_attr__( 'Toggle navigation', 'pardis' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'items_wrap'      => '<ul id="primary-menu-list" class="navbar-nav ml-auto">%3$s</ul>',
                    'fallback_cb'     => false,
                )
            );
            ?>
            <button class="mobile-menu-close"><img src="<?php echo pardis_THEME_ASSETS_DIR; ?>/images/close.png" alt="Close" ></button>
        </div><!-- #navbarNav -->
    <?php endif; ?>

</nav>