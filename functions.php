<?php
function greg_portfolio_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('greg-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'greg_portfolio_enqueue_scripts');

function greg_portfolio_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greg-portfolio')
    ));
}
add_action('init', 'greg_portfolio_register_menus');

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});
?>


<?php
/**
 * Theme Functions
 * @package greg-strugach
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Define constants
define( 'GREG_THEME_VER', '1.0.0' );
define( 'GREG_THEME_URI', get_template_directory_uri() );
define( 'GREG_THEME_DIR', get_template_directory() );
define( 'GREG_TEXTDOMAIN', 'greg-strugach' );

// Theme setup
add_action( 'after_setup_theme', function() {
    // Load translations
    load_theme_textdomain( GREG_TEXTDOMAIN, GREG_THEME_DIR . '/languages' );

    // Theme supports
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height' => 60,
        'width' => 200,
        'flex-width' => true,
        'flex-height' => true,
    ] );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor.css' );

    // Menus
    register_nav_menus( [
        'primary' => __( 'Primary Menu', GREG_TEXTDOMAIN ),
        'footer'  => __( 'Footer Menu', GREG_TEXTDOMAIN ),
    ] );
});

// Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', function() {
    // Bootstrap (local preferred for marketplaces)
    wp_enqueue_style( 'bootstrap', GREG_THEME_URI . '/assets/vendor/bootstrap/bootstrap.min.css', [], '5.3.3' );
    wp_enqueue_style( 'greg-style', get_stylesheet_uri(), [ 'bootstrap' ], GREG_THEME_VER );
    wp_enqueue_script( 'bootstrap', GREG_THEME_URI . '/assets/vendor/bootstrap/bootstrap.bundle.min.js', [], '5.3.3', true );
    wp_enqueue_script( 'greg-theme', GREG_THEME_URI . '/assets/js/theme.js', [], GREG_THEME_VER, true );

    // Elementor overrides (optional)
    if ( did_action( 'elementor/loaded' ) ) {
        wp_enqueue_style( 'greg-elementor', GREG_THEME_URI . '/assets/css/elementor-overrides.css', [ 'greg-style' ], GREG_THEME_VER );
    }
});

// Suggest Elementor (optional)
add_action( 'admin_notices', function() {
    if ( ! current_user_can( 'install_plugins' ) || is_plugin_active( 'elementor/elementor.php' ) ) return;
    $install_url = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=elementor' ), 'install-plugin_elementor' );
    echo '<div class="notice notice-info"><p>';
    echo sprintf( esc_html__( 'For drag-and-drop editing, we recommend installing %sElementor%s.', GREG_TEXTDOMAIN ), '<a href="' . esc_url( $install_url ) . '">', '</a>' );
    echo '</p></div>';
});

// Add Bootstrap nav-link class to menu <a> tags
add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ){
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $atts['class'] = isset( $atts['class'] ) ? $atts['class'] . ' nav-link' : 'nav-link';
    }
    return $atts;
}, 10, 3 );

// Add Bootstrap dropdown classes to <li> for submenus (optional)
add_filter( 'nav_menu_css_class', function( $classes, $item, $args, $depth ){
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        if ( in_array( 'menu-item-has-children', $classes, true ) && 0 === $depth ) {
            $classes[] = 'dropdown';
        }
        // Convert WP default 'current-menu-item' etc. to Bootstrap active
        if ( in_array( 'current-menu-item', $classes, true ) ) {
            $classes[] = 'active';
        }
    }
    return $classes;
}, 10, 4 );

// Adjust submenu UL class to Bootstrap dropdown-menu (optional)
add_filter( 'nav_menu_submenu_css_class', function( $classes, $args, $depth ){
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location && 0 === $depth ) {
        $classes[] = 'dropdown-menu';
    }
    return $classes;
}, 10, 3 );