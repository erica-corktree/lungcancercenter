<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Header tab partial
 * @link https://github.com/StoutLogic/acf-builder/
 */
$attribution = new FieldsBuilder('attribution');
$attribution
    ->addTab('attribution', ['placement' => 'left'])
        ->addPostObject('reviewer', [
            'label'         => 'Medical Reviewer',
            'instructions'  => 'The medical reviewer for this content.',
            'post_type'     => ['reviewer'],
            'allow_null'    => 1,
            'multiple'      => 0,
            'return_format' => 'ID',
            'ui'            => 1,
        ])
            ->setWidth('50')
        ->addDatePicker('reviewed_date', [
            'label'          => 'Medical Review Date',
            'instructions'   => 'The date this content was medically reviewed.',
            'display_format' => 'm/d/Y',
            'return_format'  => 'm/d/Y',
            'first_day'      => 1,
        ])
            ->setWidth('50')
        ->addWysiwyg('citations', [
            'label'        => 'Citations',
            'instructions' => 'Citations for this content.',
            'tabs'         => 'all',
            'toolbar'      => 'basic',
            'media_upload' => 0,
        ]);

return $attribution;
