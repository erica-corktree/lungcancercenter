<?php

namespace App\View\Shortcodes;

use function App\parse_shortcode_content;
use function Roots\view;

/**
 * Row
 *
 * @param array|string $atts    The shortcode attributes
 * @param string       $content The enclosed content
 *
 * @return String
 */
add_shortcode('row', function ($atts = [], $content = null) {
    extract(shortcode_atts([
        'count' => '',
    ], $atts));

    $content = !empty($content) ? parse_shortcode_content($content) : '';
    $count   = !empty($count) ? $count : '3';

    return view('shortcodes.row', [
        'content' => $content,
        'count'   => $count,
    ]);
});
