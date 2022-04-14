<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Blog extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $blog = new FieldsBuilder('blog', [
            'style' => 'seamless',
            'hide_on_screen' => [
                'featured_image',
            ],
        ]);

        $blog
            ->setLocation('page_type', '==', 'posts_page');

        $blog
            ->addGroup('blog', ['label' => 'News Page'])
                ->addText('featured_heading', ['label' => 'Featured Article Heading'])
                ->addPostObject('featured_post', [
                    'label'         => 'Featured Article',
                    'post_type'     => ['post'],
                    'return_format' => 'ID',
                ])
                ->addText('heading', ['label' => 'Articles Heading'])
            ->endGroup();

        return $blog->build();
    }
}
