<?php

namespace App\Form;

use App\Model\SearchData;
use symfony\Component\Form\AbstractType;
use symfony\Component\Form\Extension\Core\Type\TextType;
use symfony\Component\Form\FormBuilderInterface;
use symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('q', TextType::class, [
                'attr' => [
                    'placeholder' => 'Recherche via un mot clé ...'
                ]
             ]);
    }
    public function configurationOptions(optionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }
}