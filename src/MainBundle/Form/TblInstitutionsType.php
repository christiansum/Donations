<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TblInstitutionsType extends AbstractType
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
            ->add('about',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('thumbnail',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('minAmount',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('idCountry',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('address',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('contactName',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('contactPhone',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('email',null, array(
                'attr' => ['class' => 'form-control']
                ))
            ->add('active',null, array(
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
            'data_class' => 'MainBundle\Entity\TblInstitutions'
        ));
    }
}
