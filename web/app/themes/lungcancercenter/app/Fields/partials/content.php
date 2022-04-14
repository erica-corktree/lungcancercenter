<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

use function App\get_field_partial;

/**
 * Section tab partial
 * @link https://github.com/StoutLogic/acf-builder/
 */
$content = new FieldsBuilder('content');
$content
    ->addTab('content', [
        'label'     => 'Content',
        'placement' => 'left',
    ])
        ->addGroup('content')
            ->addField('main', 'wpeditor', [
                'label'        => 'Main Content',
                'instructions' => 'The main content that will always appear before the content sections.',
            ])
            ->addFlexibleContent('sections', [
                'label'        => 'Content Sections',
                'instructions' => 'Customizable content sections that can be ordered by dragging them around.',
                'button_label' => 'Add Section',
            ])
                ->addLayout(get_field_partial('components.card-grid'))
                ->addLayout(get_field_partial('components.card-list'))
                ->addLayout(get_field_partial('components.card-slider'))
                ->addLayout(get_field_partial('components.content'))
                ->addLayout(get_field_partial('components.content-with-card'))
                ->addLayout(get_field_partial('components.cta'))
                ->addLayout(get_field_partial('components.form'))
                ->addLayout(get_field_partial('components.icon-grid'))
                ->addLayout(get_field_partial('components.icon-list'))
                ->addLayout(get_field_partial('components.instructions'))
                ->addLayout(get_field_partial('components.split-bg'))
        ->endGroup();


return $content;
