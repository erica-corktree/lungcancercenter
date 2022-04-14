<?php

/**
 * Theme helpers.
 */

namespace App;

/**
 * Simple function to pretty up our field partial includes.
 *
 * @link https://roots.io/guides/using-acf-builder-with-sage/
 *
 * @param mixed $partial
 * @return mixed
 */
function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);

    return include(get_theme_file_path('/app') . "/Fields/{$partial}.php");
}

/**
 * This function will return an array of attachment data
 *
 * @param mixed $post either post ID or post object
 * @return array
 */
function get_image_data($attachment)
{
    // get post
    if (!$attachment = get_post($attachment)) {
        return false;
    }

    // validate post_type
    if ($attachment->post_type !== 'attachment') {
        return false;
    }

    $sizes_id = 0;
    $meta = wp_get_attachment_metadata($attachment->ID);
    $attached_file = get_attached_file($attachment->ID);
    $attachment_url = wp_get_attachment_url($attachment->ID);

    // get mime types
    if (strpos($attachment->post_mime_type, '/') !== false) {
        list($type, $subtype) = explode('/', $attachment->post_mime_type);
    } else {
        list($type, $subtype) = [$attachment->post_mime_type, ''];
    }

    $response = [
        'ID'          => $attachment->ID,
        'id'          => $attachment->ID,
        'title'       => $attachment->post_title,
        'filename'    => wp_basename($attached_file),
        'filesize'    => 0,
        'url'         => $attachment_url,
        'link'        => get_attachment_link($attachment->ID),
        'alt'         => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'author'      => $attachment->post_author,
        'description' => $attachment->post_content,
        'caption'     => $attachment->post_excerpt,
        'name'        => $attachment->post_name,
        'status'      => $attachment->post_status,
        'uploaded_to' => $attachment->post_parent,
        'date'        => $attachment->post_date_gmt,
        'modified'    => $attachment->post_modified_gmt,
        'menu_order'  => $attachment->menu_order,
        'mime_type'   => $attachment->post_mime_type,
        'type'        => $type,
        'subtype'     => $subtype,
        'icon'        => wp_mime_type_icon($attachment->ID),
    ];

    if (isset($meta['filesize'])) {
        $response['filesize'] = $meta['filesize'];
    } elseif (file_exists($attached_file)) {
        $response['filesize'] = filesize($attached_file);
    }

    if ($type === 'image') {
        $sizes_id = $attachment->ID;
        $src = wp_get_attachment_image_src($attachment->ID, 'full');
        $response['url'] = $src[0];
        $response['width'] = $src[1];
        $response['height'] = $src[2];
    } elseif ($type === 'video') {
        $response['width'] = acf_maybe_get($meta, 'width', 0);
        $response['height'] = acf_maybe_get($meta, 'height', 0);

        // featured image
        if ($featured_id = get_post_thumbnail_id($attachment->ID)) {
            $sizes_id = $featured_id;
        }
    } elseif ($type === 'audio') {
        // featured image
        if ($featured_id = get_post_thumbnail_id($attachment->ID)) {
            $sizes_id = $featured_id;
        }
    }

    if ($sizes_id) {
        $sizes = get_intermediate_image_sizes();
        $data = array();

        foreach ($sizes as $size) {
            $src = wp_get_attachment_image_src($sizes_id, $size);
            $data[$size] = $src[0];
            $data[$size . '-width'] = $src[1];
            $data[$size . '-height'] = $src[2];
        }

        // append
        $response['sizes'] = $data;
    }

    return $response;
}

/**
 * Outputs the_widget() as a string.
 *
 * @param [type] $widget
 * @param string $instance
 * @param string $args
 * @return string
 */
function get_the_widget($widget, $instance = '', $args = '')
{
    ob_start();
    the_widget($widget, $instance, $args);

    return ob_get_clean();
}

/**
 * Get widget data for a sidebar
 *
 * @param string $sidebarName The registered sidebar name.
 * @return array|object
 */
function get_widget_data($sidebarName)
{
    global $wp_registered_sidebars, $wp_registered_widgets;

    $output = [];
    $sidebarID = false;

    foreach ($wp_registered_sidebars as $sidebar) {
        if ($sidebar['name'] === $sidebarName) {
            $sidebarID = $sidebar['id'];
            break;
        }
    }

    if (!$sidebarID) {
        return $output;
    }

    // A nested array in the format $sidebar_id => array( 'widget_id-1', 'widget_id-2' ... );
    $sidebarsWidgets = wp_get_sidebars_widgets();
    $widgetIDs = $sidebarsWidgets[$sidebarID];

    if (!$widgetIDs) {
        // Without proper widget_ids we can't continue.
        return [];
    }

    // Loop over each widget_id so we can fetch the data out of the wp_options table.
    foreach ($widgetIDs as $id) {
        $output[] = (object) [
            'ID' => $id,
            'className' => get_class($wp_registered_widgets[$id]['callback'][0]),
        ];
    }

    return $output;
}

/**
 * Parses shortcode content to handle extra p tags and what not
 *
 * @param string $content The unprocessed shortcode content
 * @return string The processed shortcode content
 */
function parse_shortcode_content($content)
{
    // Parse nested shortcodes and add formatting.
    $content = wpautop(do_shortcode(trim($content)));

    /* Remove '</p>' from the start of the string. */
    if (substr($content, 0, 4) === '</p>') {
        $content = substr($content, 4);
    }

    /* Remove '<p>' from the end of the string. */
    if (substr($content, -3, 3) === '<p>') {
        $content = substr($content, 0, -3);
    }

    /* Remove any instances of '<p></p>'. */
    $content = str_replace(['<p></p>'], '', $content);

    return $content;
}

/**
 * Returns the ID of a post type based on its slug
 *
 * @param string $slug The slug of the post
 * @param string $type The post type
 * @return int The ID
 */
function get_id_by_slug($slug, $type = 'post')
{
    global $wpdb;

    $slug = rawurlencode(urldecode($slug));
    $slug = sanitize_title(basename($slug));

    $id = $wpdb->get_var($wpdb->prepare("
        SELECT ID
        FROM $wpdb->posts
        WHERE post_name = %s
        AND post_type = %s
    ", $slug, $type));

    if (is_array($id)) {
        return $id[0];
    } elseif (!empty($id)) {
        return $id;
    }

    return false;
}

/**
 * Is the current page a certain page or a child of it?
 *
 * @param int|string $id Page ID or slug
 * @return boolean
 */
function is_tree($id)
{
    global $post;

    if (!is_numeric($id)) {
        $page = get_page_by_path($id);
        $id   = $page->ID;
    }

    if (is_page() && ($post->post_parent == $id || (is_page($id) || in_array($id, $post->ancestors)))) {
        return true;
    } else {
        return false;
    }
}
