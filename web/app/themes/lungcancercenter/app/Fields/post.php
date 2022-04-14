<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

use function App\get_field_partial;

class Post extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $post = new FieldsBuilder('post', [
            'style' => 'seamless',
            'hide_on_screen' => [
                'featured_image',
            ],
        ]);

        $post
            ->setLocation('post_type', '==', 'post');

        $post
            ->addGroup('post')
                ->addFields(get_field_partial('partials.hero'))
                ->addFields(get_field_partial('partials.content'))
                ->addFields(get_field_partial('partials.attribution'))
            ->endGroup();

        return $post->build();
    }
}
