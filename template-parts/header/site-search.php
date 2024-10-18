<?php
/**
 * Displays the Search in header.
 *
 * @package pardis
 */
?>

<div class="header-cnt">
    <form id="search-field" class="search-field-form" action="search.php">
        <input type="text" name="s" placeholder="<?php echo esc_attr__( 'search here...', 'pardis' ); ?>" value="<?php echo get_search_query(); ?>">
        <input id="searchbtnhead" type="submit" value="<?php echo esc_attr__( 'search', 'pardis' ); ?>">
    </form>
</div>


