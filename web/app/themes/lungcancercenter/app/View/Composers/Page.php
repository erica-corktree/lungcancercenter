<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
        'page',
        'template-lp-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'child_pages'      => $this->childPages(),
            'related'          => $this->relatedPages(),
            'top_level_parent' => $this->topLevelParent(),
            'sections' => json_decode(json_encode(get_field('page_content_sections'))),
        ];
    }

  /**
   * Gets child pages
   *
   * @return array The child pages
   */
    public function childPages()
    {
        global $post;

        $index          = 0;
        $formattedPages = [];
        $parents        = get_post_ancestors($post->ID);
        $parentId       = ($parents) ? $parents[count($parents) - 1]: $post->ID;
        $childPages     = get_posts([
            'post_parent'    => $post->ID,
            'orderby'        => 'menu_order',
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ]);

        if ($childPages && !$parents) {
            $formattedPages = $this->formatPages($childPages);
        } else {
            $childPages = get_posts([
                'post_parent'    => $parentId,
                'orderby'        => 'menu_order',
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            ]);

            if ($childPages) {
                $formattedPages = $this->formatPages($childPages);
            }
        }

        return $formattedPages;
    }

    /**
     * Get related content
     *
     * @return array The related content
     */
    public function relatedPages()
    {
        global $post;

        $related = [];

        switch ($post->post_type) {
            case 'page':
                $parents = get_post_ancestors($post->ID);
                $parentId = ($parents) ? $parents[count($parents) - 1] : $post->ID;
                $childPages = get_posts([
                    'post_parent'    => $parentId,
                    'orderby'        => 'rand',
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'posts_per_page' => 3,
                ]);

                $related = $childPages;

                break;
            case 'post':
                break;
        }

        return $related;
    }

    /**
     * Gets the top level parent of the current page
     *
     * @return WP_Post The top level parent post object
     */
    public function topLevelParent()
    {
        $parents  = get_post_ancestors($GLOBALS['post']->ID);
        $parentId = ($parents) ? $parents[count($parents) - 1] : $GLOBALS['post']->ID;

        return get_post($parentId);
    }

    /**
     * Format the child page data for easier use in the view
     *
     * @param array $childPages Array of page objects
     *
     * @return array
     */
    private function formatPages($childPages)
    {
        $pageIndex      = 0;
        $formattedPages = [];

        foreach ($childPages as $page) {
        $pageSubIndex   = 0;

        $grandChildren = get_posts([
            'post_parent'    => $page->ID,
            'orderby'        => 'menu_order',
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ]);

        $formattedPages[] = [
            'id'       => $page->ID,
            'url'      => get_the_permalink($page->ID),
            'title'    => get_the_title($page->ID),
            'children' => [],
            'childIds' => [],
        ];

        if ($grandChildren) {
            foreach ($grandChildren as $child) {

            $grandGrandChildren = get_posts([
                'post_parent'    => $child->ID,
                'orderby'        => 'menu_order',
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            ]);

            $formattedPages[$pageIndex]['children'][] = [
                'id'    => $child->ID,
                'url'   => get_the_permalink($child->ID),
                'title' => get_the_title($child->ID),
                'children' => [],
                'childIds' => [],
            ];

            if ($grandGrandChildren) {
                foreach ($grandGrandChildren as $grandChild) {

                $formattedPages[$pageIndex]['children'][$pageSubIndex]['children'][] = [
                    'id'    => $grandChild->ID,
                    'url'   => get_the_permalink($grandChild->ID),
                    'title' => get_the_title($grandChild->ID),
                ];

                $formattedPages[$pageIndex]['children'][$pageSubIndex]['childIds'][] = $grandChild->ID;
                $formattedPages[$pageIndex]['childIds'][] = $grandChild->ID;
                }
            }
            $pageSubIndex++;
            $formattedPages[$pageIndex]['childIds'][] = $child->ID;
            }
        }

        $pageIndex++;
        }

        return $formattedPages;
    }
}
