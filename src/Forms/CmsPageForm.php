<?php

namespace Indianic\CmsPages\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class CmsPageForm extends Form
{
    public function buildForm()
    {
        $this->add('title', Field::TEXT, ['label_attr' => ['class' => 'required-asterisk']])
            ->add('slug', Field::TEXT, ['label_attr' => ['class' => 'required-asterisk']])
            ->add('sub_title')
            ->add('body', Field::TEXTAREA, [
                'attr' => [
                    'class' => 'editor-area'
                ],
                'label_attr' => ['class' => 'required-asterisk']
            ])
            ->add('meta_keywords')
            ->add('meta_description', Field::TEXTAREA)
            ->add('status', Field::SELECT, [
                'choices' => getEnumValues('cms_pages', 'status')
            ])
            ->add('submit', 'submit', [
                'label' => 'Save',
                'attr' => [
                    'class' => 'btn btn-primary mr-3'
                ]
            ])
            ->add('clear', 'button', [
                'label' => 'Cancel',
                'attr' => [
                    'class' => 'btn btn-light-secondary',
                    'onclick' => 'window.location="'.route('cms-pages.index').'"'
                ]
            ]);
    }
}
