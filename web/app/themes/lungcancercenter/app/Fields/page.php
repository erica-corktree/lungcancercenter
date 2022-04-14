<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

use function App\get_field_partial;

class Page extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $page = new FieldsBuilder('page', [
            'style' => 'seamless',
            'hide_on_screen' => [
                'featured_image',
            ],
        ]);

        $page
            ->setLocation('post_type', '==', 'page')
                ->and('page_type', '!=', 'posts_page');

        $page
            ->addGroup('page')
                ->addFields(get_field_partial('partials.hero'))
                ->addFields(get_field_partial('partials.content'))
                ->addFields(get_field_partial('partials.attribution'))
            ->endGroup();

        return $page->build();
    }
}
