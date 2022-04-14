<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Card Grid component
 * @link https://github.com/StoutLogic/acf-builder/
 */
$card_grid = new FieldsBuilder('card_grid');
$card_grid
    ->addText('heading')
    ->addText('subheading')
    ->addRepeater('cards', ['layout' => 'block'])
        ->addText('heading')
        ->addTextarea('description')
        ->addLink('link')
    ->endRepeater()
    ->setLocation('block', '==', 'acf/card_grid');

return $card_grid;
