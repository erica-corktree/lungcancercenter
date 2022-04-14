<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Form component
 * @link https://github.com/StoutLogic/acf-builder/
 */
$form = new FieldsBuilder('form');
$form
    ->addText('heading')
    ->addText('subheading')
    ->setLocation('block', '==', 'acf/form');

return $form;
