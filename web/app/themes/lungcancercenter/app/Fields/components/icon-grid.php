<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Icon Grid component
 * @link https://github.com/StoutLogic/acf-builder/
 */
$icon_grid = new FieldsBuilder('icon_grid');
$icon_grid
    ->addText('heading')
    ->addText('subheading')
    ->addRepeater('items', ['layout' => 'block'])
        ->addImage('icon')
        ->addText('heading')
        ->addTextarea('description')
        ->addLink('link')
    ->endRepeater()
    ->setLocation('block', '==', 'acf/icon_grid');

return $icon_grid;
