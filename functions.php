<?

add_action( "wp_enqueue_scripts", "themeStyle" );

function themeStyle(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'defaolt', get_template_directory_uri() . '/css/default.css' );
    wp_enqueue_style( 'layoute', get_template_directory_uri() . '/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css' );
}