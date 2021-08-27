<?php
/**
 * glera functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package glera
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('glera_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function glera_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on glera, use a find and replace
         * to change 'glera' to the name of your theme in all the template files.
         */
        load_theme_textdomain('glera', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'glera'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'glera_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'glera_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function glera_content_width()
{
    $GLOBALS['content_width'] = apply_filters('glera_content_width', 640);
}

add_action('after_setup_theme', 'glera_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function glera_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'glera'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'glera'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

// регистрируем тип записей Вакансии
function register_vacancy_entities() {
    $vacancy_args = array(
        'public' => true,
        'label'  => null,
        'labels' => array(
            'name'               => 'News',
            'singular_name'      => 'News',
            'add_new'            => 'Add news',
            'add_new_item'       => 'Add news',
            'edit_item'          => 'Editing News',
            'new_item'           => 'New news',
            'view_item'          => 'View job page news',
            'search_items'       => 'Search vacancies news',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in the basket',
            'parent_item_colon'  => '',
            'menu_name'          => 'News',
        ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-users',
        'rewrite' => array( 'slug' => 'news' ),
        'has_archive' => true
    );
    register_post_type( 'vacancy', $vacancy_args );
}

add_action( 'init', 'register_vacancy_entities' );

add_action('widgets_init', 'glera_widgets_init');

/**
 * Enqueue google fonts.
 */
function wpb_add_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts_Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;0,900;1,400;1,700;1,900&display=swap', false);
    wp_enqueue_style('wpb-google-fonts_Open-Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap', false);
    wp_enqueue_style('wpb-google-fonts_Gaegu', 'https://fonts.googleapis.com/css2?family=Gaegu:wght@700&display=swap', false);

}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

function my_scripts_method() {
// instead of "jquery-core" just "jquery", to disable jquery-migrate
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.5/lottie.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

/**
 * Enqueue scripts and styles.
 */
function glera_scripts()
{
    wp_enqueue_style('glera-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('glera-style', 'rtl', 'replace');
    //Glera Styles
    wp_enqueue_style('glera-custom-style', get_template_directory_uri() . '/assets/style/css/style.css');
    //Glera Slick
    wp_enqueue_style('glera-slick-carousel-theme-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
    wp_enqueue_style('glera-slick-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');

    //GSAP Init
    wp_enqueue_script('glera-gsap', get_template_directory_uri() . '/assets/libs/gsap/gsap.js');
    //Slick Init
    wp_enqueue_script('glera-slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
    //Glera JS
    wp_enqueue_script('glera-custom-js', get_template_directory_uri() . '/assets/js/main.js');

    wp_enqueue_script('glera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'glera_scripts');

function mihdan_add_defer_attribute( $tag, $handle ) {

    $handles = array(
        'glera-gsap',
        'glera-slick-carousel',
        'lottie'
    );

    foreach( $handles as $defer_script) {
        if ( $defer_script === $handle ) {
            return str_replace( ' src', ' defer="defer" src', $tag );
        }
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'mihdan_add_defer_attribute', 10, 2 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

