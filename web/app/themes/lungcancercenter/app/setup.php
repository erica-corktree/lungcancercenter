<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), ['jquery'], null, true);
    wp_enqueue_script('sage/app.js', asset('scripts/app.js')->uri(), ['sage/vendor.js', 'jquery'], null, true);

    wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('sage/app.css', asset('styles/app.css')->uri(), false, null);
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    if ($manifest = asset('scripts/manifest.asset.php')->get()) {
        wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), $manifest['dependencies'], null, true);
        wp_enqueue_script('sage/editor.js', asset('scripts/editor.js')->uri(), ['sage/vendor.js'], null, true);

        wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');
    }

    wp_enqueue_style('sage/editor.css', asset('styles/editor.css')->uri(), false, null);
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Additional image sizes.
     * @link https://developer.wordpress.org/reference/functions/add_image_size/
     */
    add_image_size('small', 300, 300, false);

    /**
     * Add theme support for Wide Alignment
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embeds
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Enable theme color palette support
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support('editor-color-palette', [
        [
            'name'  => __('Primary', 'sage'),
            'slug'  => 'primary',
            'color' => '#525ddc',
        ]
    ]);

    /**
     * Register shortcodes
     */
    collect(glob(get_theme_file_path('/app') . '/View/Shortcodes/*.php'))->map(function ($shortcode) {
        return require_once $shortcode;
    });

    /**
     * Allows editors access to the "Appearance" tab
     */
    $editorRole = get_role('editor');
    $editorRole->add_cap('edit_theme_options');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %2$s" id="%1$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget__title">',
        'after_title'   => '</h2>'
    ];

    register_sidebar([
        'name' => __('Content Page', 'sage'),
        'id'   => 'sidebar-page'
    ] + $config);

    register_sidebar([
        'name' => __('Blog Post', 'sage'),
        'id'   => 'sidebar-post'
    ] + $config);
});

/**
 * Disable Yoast's Hidden love letter about using the WordPress SEO plugin.
 *
 * @return void
 */
add_action('template_redirect', function () {
    if (!class_exists('WPSEO_Frontend')) {
        return;
    }

    $instance = \WPSEO_Frontend::get_instance();

    // make sure, future version of the plugin does not break our site.
    if (!method_exists($instance, 'debug_mark')) {
        return;
    }

    // ok, let us remove the love letter.
     remove_action('wpseo_head', array($instance, 'debug_mark'), 2);
}, 9999);

/**
 * Changes oEmbed YouTube URLs from youtube.com to youtube-nocookie.com in favor of GDPR.
 *
 * @return string
 */
add_action('oembed_result', function ($searchString, $url) {
    if (preg_match('#https?://(www\.)?youtube\.com#i', $searchString)) {
        $searchString = preg_replace(
            '#(https?:)?//(www\.)?youtube\.com#i',
            '$1//$2youtube-nocookie.com',
            $searchString
        );
    }

    return $searchString;
}, 10, 2);
