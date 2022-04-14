<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Configuration extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Configuration';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Configuration | Options';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = PHP_INT_MAX;

    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $configuration = new FieldsBuilder('app', [
            'style' => 'seamless',
        ]);

        $configuration
            ->addTab('header', ['label' => 'Site Header'])
                ->addGroup('header', ['label' => 'Site Header'])
                    ->addGroup('cta', ['label' => 'Call to Action'])
                        ->addText('text')
                    ->endGroup()
                ->endGroup()
            ->addTab('phone_number', ['label' => 'Phone Numbers'])
                ->addGroup('phone', ['label' => 'Phone Numbers'])
                    ->addText('invoca')
                        ->setInstructions('Default Invoca phone number.')
                        ->setDefaultValue('(555) 555-5555')
                        ->setWidth('50')
                    ->addText('dialin')
                        ->setInstructions('Default Dial-In phone number.')
                        ->setDefaultValue('(555) 555-5555')
                        ->setWidth('50')
                    ->addText('callback')
                        ->setInstructions('Default Callback phone number.')
                        ->setDefaultValue('(555) 555-5555')
                        ->setWidth('50')
                    ->addText('twilio')
                        ->setInstructions('Default Twilio API phone number.')
                        ->setDefaultValue('(555) 555-5555')
                        ->setWidth('50')
                ->endGroup()
            ->addTab('cta', ['label' => 'Call to Action (CTA)'])
                ->addGroup('cta', ['label' => 'Default CTA Content'])
                    ->addGroup('default')
                        ->addText('heading')
                        ->addLink('link')
                        ->setWidth('50')
                        ->addImage('photo')
                        ->setWidth('50')
                    ->endGroup()
                ->endGroup()
            ->addTab('social_media', ['label' => 'Social Media'])
                ->addGroup('social_media', ['label' => 'Social Media'])
                    ->addRepeater('links', ['label' => 'Social Media Links'])
                        ->addLink('link')
                    ->endRepeater()
                ->endGroup()
            ->addTab('footer', ['label' => 'Site Footer'])
                ->addGroup('footer', ['label' => 'Site Footer'])
                    ->addText('copyright')
                    ->addTextArea('disclaimer')
                ->endGroup();

        return $configuration->build();
    }
}
