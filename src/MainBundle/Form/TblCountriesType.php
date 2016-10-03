<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblCountriesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('createdDt',  'date' ,array(
                'widget'=> 'single_text',
                'format'=>'d/M/y',
                'attr' => ['class' => 'js-datepicker form-control']
            ))
            ->add('modifiedDt',  'date' ,array(
                'widget'=> 'single_text',
                'format'=>'d/M/y',
                'attr' => ['class' => 'js-datepicker form-control']
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\TblCountries'
        ));
    }
}
