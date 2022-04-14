<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * CTA component
 * @link https://github.com/StoutLogic/acf-builder/
 */
$cta = new FieldsBuilder('cta', ['label' => 'CTA']);
$cta
    ->addText('heading')
    ->addLink('link')
    ->addImage('photo')
    ->setLocation('block', '==', 'acf/cta');

return $cta;
