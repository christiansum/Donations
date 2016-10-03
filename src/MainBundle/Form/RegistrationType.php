<?php
// src/AppBundle/Form/RegistrationType.php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use MainBundle\Form\DateType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstName',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'First Name'
                ))
        ->add('firstLastname',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'First Lastname'
                ))
        ->add('idDocument','text', array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Document ID'
                ))
        ->add('gender','choice', array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Gender',
                'choices'  => array(
                    '' => 'Elija una opcion',
                    'm' => 'Male',
                    'f' => 'Female'
                ),
                ))
        ->add('maritalStatus','choice', array(
            'attr' => ['class' => 'form-control'],
            'label' => 'Marital Status',
             'choices'  => array(
                    '' => 'Elija una opcion',
                    '1' => 'Soltero',
                    '2' => 'Casado',
                    '3' => 'Divorciado',
                    '4' => 'Viudo'
                ),
            ))
        ->add('cellphoneNumber',null, array(
            'attr' => ['class' => 'form-control'],
            'label' => 'Cellphone Number'
            ))
        ->add('idCountry',null, array(
            'attr' => ['class' => 'form-control'],
            'label' => 'Country'
            ))
        ->add('idDept',null, array(
            'attr' => ['class' => 'form-control'],
            'label' => 'Department'
            ))
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\TblUsers'
        ));
    }
}