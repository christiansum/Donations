<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblUsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'First Name'
                ))
            ->add('secondName',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Second Name'
                ))
            ->add('thirdName',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Third Name'
                ))
            ->add('firstLastname',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'First Lastname'
                ))
            ->add('secondLastname',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Second Lastname'
                ))
            ->add('marriageLastname',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Marriage Lastname'
                ))
            ->add('idDocument',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Document ID'
                ))
            ->add('gender',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Gender'
                ))
            ->add('maritalStatus',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Marital Status'
                ))
            ->add('phoneNumber',null, array(
                'attr' => ['class' => 'form-control'],
                'label' => 'Phone Number'
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
