<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class Reviewer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'single-reviewer',
        'partials.attribution',
        'partials.content',
        'partials.content-*',
        'partials.entry-meta',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'reviewer' => $this->reviewerData(),
        ];
    }

    /**
     * Get all relevant reviewer data.
     *
     * @return object | false
     */
    public function reviewerData()
    {
        $type = get_post_type();
        $id   = ($type === 'reviewer')
                ? get_the_ID()
                : get_field("{$type}_reviewer", get_the_ID());

        if ($id) {
            return (object) [
                'ID'    => $id,
                'name'  => get_the_title($id),
                'title' => get_field('reviewer_title', $id),
                'bio'   => get_the_content(null, false, $id),
                'url'   => get_the_permalink($id),
                'photo' => json_decode(json_encode(get_field('reviewer_photo', $id))),
                'date'  => ($type !== 'reviewer') ? get_field("{$type}_reviewed_date", $id) : '',
                'reviewed' => new \WP_Query([
                    'post_type' => ['post', 'page'],
                    'meta_query' => [
                        [
                          'key' => "page_reviewer",
                          'value' => $id,
                          'compare' => 'LIKE',
                        ],
                    ],
                ]),
            ];
        }

        return false;
    }
}
