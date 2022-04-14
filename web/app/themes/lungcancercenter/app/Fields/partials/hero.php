<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Hero field partial.
 *
 * @link https://github.com/StoutLogic/acf-builder/
 *
 * @see /app/Controllers/Partials/Hero.php
 */
$hero = new FieldsBuilder('hero');
$hero
    ->addTab('hero', ['placement' => 'left'])
        ->addGroup('hero')
            ->addText('heading')
              ->setInstructions('Overrides the default page title for the hero heading.')
            ->addTextArea('introduction')
              ->setInstructions('An introduction/summary of the content that will be shown under the hero heading.')
            ->addImage('photo')
              ->setLabel('Featured Image')
              ->setInstructions('Background image for the hero.')
        ->endGroup();

return $hero;
