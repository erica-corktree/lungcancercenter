<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Author extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $author = new FieldsBuilder('author');

        $author
            ->setLocation('user_form', '==', 'edit');
       
        $author
            ->addImage('author_photo')
            ->addText('author_title');
        
        return $author->build();
    }
}

