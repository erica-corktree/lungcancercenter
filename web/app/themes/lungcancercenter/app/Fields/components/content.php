<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * content component
 * @link https://github.com/StoutLogic/acf-builder/
 */
$content = new FieldsBuilder('content');
$content
    ->addWysiwyg('content', [
        'label'        => 'Content',
        'instructions' => 'The main content for this section.',
        'tabs'         => 'all',
        'toolbar'      => 'full',
        'media_upload' => 1,
    ])
    ->addGroup('styles')
        ->addColorPicker('background-color')
            ->setWidth('50')
        ->addColorPicker('color')
            ->setWidth('50')
    ->endGroup()
    ->setLocation('block', '==', 'acf/content');

return $content;
