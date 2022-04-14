<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Reviewer extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $reviewer = new FieldsBuilder('reviewer', [
            'style'          => 'seamless',
            'hide_on_screen' => ['featured_image'],
        ]);

        $reviewer
            ->setLocation('post_type', '==', 'reviewer');

        $reviewer
            ->addGroup('reviewer')
                ->addImage('photo')
                ->addText('title')
                ->addField('content', 'wpeditor', [
                    'label'        => 'Main Content',
                    'instructions' => 'The main content that will always appear before the content sections.',
                ])
            ->endGroup();

        return $reviewer->build();
    }
}
