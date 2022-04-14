<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "…" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip;';
});

/**
 * Decrease the order priority of the YoastSEO meta box
 *
 * @return string
 */
add_filter('wpseo_metabox_prio', function () {
    return 'low';
});

/**
 * Enable the sidebar
 *
 * @var bool Whether the sidebar should be displayed or not
 *
 * @return bool
 */
add_filter('sage/display_sidebar', function ($display) {
    static $display;

    isset($display) || $display = in_array(true, [
      // The sidebar will be displayed if any of the following return true
      is_single(),
    ]);

    return $display;
});

/**
 * Changes oEmbed YouTube URLs from youtube.com to youtube-nocookie.com in favor of GDPR.
 *
 * @return string
 */
add_filter('embed_oembed_html', function ($searchString, $url) {
    if (preg_match('#https?://(www\.)?youtube\.com#i', $searchString)) {
        $searchString = preg_replace(
            '#(https?:)?//(www\.)?youtube\.com#i',
            '$1//$2youtube-nocookie.com',
            $searchString
        );
    }

    return $searchString;
}, 10, 2);

/**
 * Remove unnecessary ACF Extended features
 *
 * @see /wp-admin/edit.php?post_type=acf-field-group&page=acf-tools
 * @link https://github.com/acf-extended/ACF-Extended/blob/master/acf-extended.php#L48
 * @link https://www.acf-extended.com/features
 *
 * @return boolean
 */
add_filter('acf/settings/acfe/modules/dynamic_post_types', '__return_false');
add_filter('acf/settings/acfe/modules/dynamic_taxonomies', '__return_false');
add_filter('acf/settings/acfe/modules/dynamic_forms', '__return_false');
add_filter('acf/settings/acfe/modules/dynamic_options_pages', '__return_false');
add_filter('acf/settings/acfe/modules/dynamic_block_types', '__return_false');
add_filter('acf/settings/acfe/modules/author', '__return_false');
add_filter('acf/settings/acfe/modules/taxonomies', '__return_false');
add_filter('acf/settings/acfe/modules/options', '__return_false');

/**
 * Return the compiled blade template path for acfe_flexible_render_template
 *
 * @return string
 */
add_filter('acfe/flexible/render/template', function ($template, $field, $layout, $is_preview) {
    return App\template_path(locate_template($template));
}, 10, 4);

// acf/update_value/key={$field_key} - filter for a specific field based on it's name
add_filter('acf/update_value/key=field_page_page_hero_photo', function ($value, $post_id, $field) {
    if ($value != '' && get_post_type() === 'page') {
        // Add the value which is the image ID to the _thumbnail_id meta data for the current post
        update_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}, 1, 3);
