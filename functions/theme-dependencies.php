<?php 
//LOAD SCRIPTS
function enqueue_dmi_scripts() {
    wp_enqueue_script('Bootstrap-5.0', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/42219cbebc.js', false, null, null, false);
    wp_enqueue_script('dmi-scripts', get_template_directory_uri() . '/assets/js/dmiScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_scripts');

//LOAD CSS
function enqueue_dmi_styles() {
    wp_enqueue_style('bootstrap-5.0', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('dmi-styles', get_template_directory_uri() . '/assets/styles/dmiStyles.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&family=Rubik:wght@300;600&display=swap', array(), null );
}
add_action('wp_enqueue_scripts', 'enqueue_dmi_styles');

//CONDITIONAL SCRIPTS/CSS
function enqueue_waypoints_deps() {
	if ( is_front_page() ) {
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true, null);
		wp_enqueue_script('waypoints-triggers', get_template_directory_uri() . '/assets/js/waypoints-scripts.js', array('jquery'), null, true, null);
		wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), null);
	};
}
add_action('wp_enqueue_scripts', 'enqueue_waypoints_deps');

//PINTEREST
function enqueue_pinterest_deps() {
    if ( is_page(52) ) {
        wp_enqueue_script('pinterest', 'https://assets.pinterest.com/js/pinit.js', array(), null);
    };
}
add_action('wp_enqueue_scripts', 'enqueue_pinterest_deps');


// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dmi-theme' ),
    'secondary_menu' => __('Secondary Menu', 'dmi-theme'),
    'footer_menu' => __( 'Footer Menu', 'dmi-theme'),  
));

