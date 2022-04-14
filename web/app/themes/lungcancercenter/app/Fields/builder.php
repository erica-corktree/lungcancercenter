<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Builder extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $builder = new FieldsBuilder('builder');

        $builder
            ->setLocation('post_type', '==', 'post');

        $builder
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $builder->build();
    }
}
