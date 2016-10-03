<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblDonationsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCard',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('idIns',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('idUser',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('amount',null, array(
                'attr' => ['class' => 'form-control']
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\TblDonations'
        ));
    }
}
