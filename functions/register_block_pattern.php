<?php
/*
* register block pattern
*/

function pardis_wpdocs_register_block_patterns() {
    register_block_pattern(
        'wpdocs/my-example',
        array(
            'title'         => 'My First Block Pattern',
            'description'   => __('Block pattern description : This is my first block pattern','pardis'),
            'content'       => '<p><?php _e("A single paragraph block style","pardis");?> </p>',
            'categories'    => array( 'text' ),
            'keywords'      => array( 'cta', 'demo', 'example' ),
            'viewportWidth' => 800,
        )
    );
}
add_action( 'init', 'pardis_wpdocs_register_block_patterns' );